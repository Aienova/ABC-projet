/**
 * Fonction pour afficher les films dans la section HTML
 * @param {Array} films - Tableau des films à afficher
 * @param {string} titre - Titre de la section
 */

/**
 * Fonction pour générer les étoiles en fonction de la note
 * @param {number} note - Note sur 10
 * @returns {string} - HTML des étoiles
 */
function generateStars(note) {
    // Convertir la note sur 10 en note sur 5
    const rating = (note || 0) / 2;
    
    let starsHtml = '<div class="star-rating">';
    
    for (let i = 1; i <= 5; i++) {
        if (rating >= i) {
            // Étoile pleine
            starsHtml += '<span class="star star-full">★</span>';
        } else if (rating >= i - 0.5) {
            // Demi-étoile
            starsHtml += '<span class="star star-half">☆</span>';
        } else {
            // Étoile vide
            starsHtml += '<span class="star star-empty">☆</span>';
        }
    }
    
    starsHtml += `<span class="rating-text">(${note || 0}/10)</span></div>`;
    
    return starsHtml;
}

function displayFilmsInSection(films, titre = "Liste des films",section) {
    const filmsSection = document.getElementById(section);
    
    if (!filmsSection) {
        console.error(`Section avec ID "${section}" non trouvée`);
        return;
    }

    // Vider le contenu existant
    filmsSection.innerHTML = '';

    // Créer le titre de la section
    const titleElement = document.createElement('h2');
    titleElement.textContent = titre;
    filmsSection.appendChild(titleElement);

    // Créer le conteneur des cartes
    const cardsContainer = document.createElement('div');
    cardsContainer.className = 'cards-container';

    // Parcourir chaque film et créer une carte
    films.forEach(film => {
        // Créer la carte du film
        const card = document.createElement('div');
        card.className = 'card';

        console.log('Affichage du film:', film);

        // Ajouter le badge premium si nécessaire
        if (film.is_premium==true) {
            const premiumBadge = document.createElement('div');
            premiumBadge.className = 'premium-badge';
            premiumBadge.textContent = 'Premium';
            card.appendChild(premiumBadge);
        }

        // Image du film
        const img = document.createElement('img');
        img.src =  `http://localhost/abc-project/aie-tv/media/film-${film.id}.jpg`;
        img.alt = film.title || 'Film sans titre';

        // Titre du film
        const title = document.createElement('h3');
        title.textContent = film.title || 'Titre non disponible';

        // Note du film avec étoiles
        const ratingContainer = document.createElement('div');
        ratingContainer.className = 'rating-container';
        ratingContainer.innerHTML = generateStars(film.note || film.grade || 0);

        // Lien "En savoir plus"
        const link = document.createElement('a');
        link.href = `film/${film.id}`;
        link.textContent = 'En savoir plus';

        // Assembler la carte
        card.appendChild(img);
        card.appendChild(title);
        card.appendChild(ratingContainer);
        card.appendChild(link);

        // Ajouter la carte au conteneur
        cardsContainer.appendChild(card);
    });

    // Ajouter le conteneur des cartes à la section
    filmsSection.appendChild(cardsContainer);
}

/**
 * Récupérer et afficher tous les films
 */
async function fetchAndDisplayAllFilms() {
    try {
        console.log('Récupération de tous les films...');
        const response = await getAllFilmsData();
        
        if (response && response.status === 'success' && response.data) {
            console.log('Films récupérés:', response.data);
            displayFilmsInSection(response.data, response.message,'films');
        } else {
            console.error('Erreur dans la réponse:', response);
            displayErrorMessage('Aucun film trouvé');
        }

    } catch (error) {
        console.error('Erreur lors de la récupération des films:', error);
        displayErrorMessage('Erreur lors du chargement des films');
    }
}

/**
 * Récupérer et afficher les films les mieux notés
 */
async function fetchAndDisplayTopFilms() {
    try {
        console.log('Récupération des meilleurs films...');
        const response = await getTopFilmsData();
        
        if (response && response.status === 'success' && response.data) {
            console.log('Meilleurs films récupérés:', response.data);
            displayFilmsInSection(response.data, response.message,'topten');
        } else {
            console.error('Erreur dans la réponse:', response);
            displayErrorMessage('Aucun film trouvé');
        }

    } catch (error) {
        console.error('Erreur lors de la récupération des meilleurs films:', error);
        displayErrorMessage('Erreur lors du chargement des films');
    }
}

/**
 * Afficher un message d'erreur
 */
function displayErrorMessage(message) {
    const filmsSection = document.getElementById('films');
    if (filmsSection) {
        filmsSection.innerHTML = `
            <h2>Erreur</h2>
            <div class="error-message">
                <p>${message}</p>
            </div>
        `;
    }
}

/**
 * Initialiser l'affichage des films au chargement de la page
 */
document.addEventListener('DOMContentLoaded', function() {
    // Afficher tous les films par défaut
    fetchAndDisplayAllFilms();
    fetchAndDisplayTopFilms();
});

// Fonctions exportées pour utilisation externe
window.fetchAndDisplayAllFilms = fetchAndDisplayAllFilms;
window.fetchAndDisplayTopFilms = fetchAndDisplayTopFilms;


