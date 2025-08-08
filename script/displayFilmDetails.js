/**
 * Fonction pour récupérer l'ID du film depuis l'URL
 * @returns {number|null} - L'ID du film ou null si non trouvé
 */
function getFilmIdFromUrl() {
    // Récupérer le chemin de l'URL sans le domaine
    const path = window.location.pathname;
    
    // Exemple: /abc-project/aie-tv/film/1 -> ['', 'abc-project', 'aie-tv', 'film', '1']
    const pathSegments = path.split('/');
    
    // Trouver l'index de 'film' dans le chemin
    const filmIndex = pathSegments.findIndex(segment => segment === 'film');
    
    // Si 'film' est trouvé et qu'il y a un segment après
    if (filmIndex !== -1 && filmIndex + 1 < pathSegments.length) {
        const idSegment = pathSegments[filmIndex + 1];
        
        // Vérifier que c'est un nombre valide
        const id = parseInt(idSegment);
        return !isNaN(id) ? id : null;
    }
    
    return null;
}

/**
 * Fonction pour afficher les détails du film dans la page
 * @param {Object} filmData - Les données du film récupérées de l'API
 */
function displayFilmDetails(filmData) {

    console.log('Affichage des détails du film:', filmData);
    // Récupérer les éléments HTML
    const titleElement = document.querySelector('#film-details h2');
    const subtitleElement = document.querySelector('#film-details h3');
    const imageElement = document.querySelector('#film-details img');
    const descriptionElement = document.getElementById('film-description');
    const videoLink = document.querySelector('.btn-primary');
    const trailerLink = document.getElementById('trailer-link');
    
    // Vérifier que les éléments existent
    if (!titleElement || !imageElement || !descriptionElement) {
        console.error('Éléments HTML non trouvés pour afficher les détails du film');
        return;
    }

    // Remplir les données
    titleElement.textContent = filmData.title || 'Titre non disponible';
    subtitleElement.textContent = filmData.subtitle || 'Titre non disponible';
    
    // Image avec fallback
    const imageUrl = filmData.id 
        ? `http://localhost/abc-project/aie-tv/media/cover/${filmData.image}.jpg`
        : 'http://localhost/abc-project/aie-tv/media/default-film.jpg';
    imageElement.src = imageUrl;
    imageElement.alt = filmData.titre || 'Image du film';
    
    // Description
    descriptionElement.textContent = filmData.description || 'Description non disponible';
    
    // Ajouter les étoiles si une note existe
    if (filmData.note) {
        const ratingContainer = document.getElementById('film-rating-value');
        ratingContainer.innerHTML = generateStars(filmData.note);
     
    }
    
    // Ajouter le badge premium si le film est premium
    if (filmData.is_premium==true) {
        const premiumBadge = document.createElement('div');
        premiumBadge.className = 'premium-badge';
        premiumBadge.textContent = 'Premium';
        
        // Insérer le badge après la description
        descriptionElement.parentNode.insertBefore(premiumBadge, descriptionElement.nextSibling);
        
        // Modifier le texte du bouton si c'est premium
        if (videoLink) {
            videoLink.innerHTML = '🔒 Contenu Premium';
            videoLink.style.backgroundColor = '#6c757d';
            videoLink.style.cursor = 'not-allowed';
            videoLink.onclick = function(e) {
                e.preventDefault();
                alert('Ce contenu nécessite un abonnement Premium pour être visionné.');
                return false;
            };
        }
    } else {
        // Mettre à jour le lien vidéo (seulement si pas premium)
        if (videoLink && filmData.id) {
            videoLink.href = `media/film-${filmData.id}.mp4`;
        }
    }

    
    // Mettre à jour le lien de la bande-annonce YouTube
    if (trailerLink) {
        // Utiliser le lien YouTube depuis les données ou un lien par défaut
        const youtubeUrl = filmData.trailer_url || filmData.youtube_url || 
                          `https://www.youtube.com/results?search_query=${encodeURIComponent(filmData.title || filmData.titre || '')}+trailer`;
        trailerLink.href = youtubeUrl;
    }

}

/**
 * Fonction pour générer les étoiles (copie de displayFilms.js)
 * @param {number} note - Note sur 10
 * @returns {string} - HTML des étoiles
 */
function generateStars(note) {
    const rating = (note || 0) / 2;
    
    let starsHtml = '<div class="star-rating">';
    
    for (let i = 1; i <= 5; i++) {
        if (rating >= i) {
            starsHtml += '<span class="star star-full">★</span>';
        } else if (rating >= i - 0.5) {
            starsHtml += '<span class="star star-half">☆</span>';
        } else {
            starsHtml += '<span class="star star-empty">☆</span>';
        }
    }
    
    starsHtml += `<span class="rating-text">(${note || 0}/10)</span></div>`;
    
    return starsHtml;
}

/**
 * Fonction pour afficher un message d'erreur
 * @param {string} message - Message d'erreur à afficher
 */
function displayErrorMessage(message) {
    const filmSection = document.getElementById('film-details');
    if (filmSection) {
        filmSection.innerHTML = `
            <h2>Erreur</h2>
            <div class="error-message">
                <p>${message}</p>
                <a href="./" class="btn btn-secondary">← Retour à l'accueil</a>
            </div>
        `;
    }
}

/**
 * Fonction principale pour récupérer et afficher les détails du film
 */
async function fetchAndDisplayFilmDetails() {
    try {
        // Récupérer l'ID du film depuis l'URL
        const filmId = getFilmIdFromUrl();
        
        if (!filmId) {
            displayErrorMessage('Aucun ID de film fourni dans l\'URL');
            return;
        }

        console.log('Récupération des détails du film avec ID:', filmId);
        
        // Appeler l'API pour récupérer les détails du film
        const response = await getFilmDataById(filmId);
        
        // Vérifier la réponse
        if (response && response.status === 'success' && response.data) {
            console.log('Détails du film récupérés:', response.data);
            displayFilmDetails(response.data);
        } else {
            console.error('Erreur dans la réponse de l\'API:', response);
            displayErrorMessage('Film non trouvé ou erreur lors de la récupération');
        }

    } catch (error) {
        console.error('Erreur lors de la récupération des détails du film:', error);
        displayErrorMessage('Erreur lors du chargement des détails du film');
    }
}

/**
 * Initialiser l'affichage des détails du film au chargement de la page
 */
document.addEventListener('DOMContentLoaded', function() {
    // Vérifier qu'on est bien sur une page de détails de film
    if (document.getElementById('film-details')) {
        fetchAndDisplayFilmDetails();
    }
});

// Exporter la fonction pour utilisation externe
window.fetchAndDisplayFilmDetails = fetchAndDisplayFilmDetails;