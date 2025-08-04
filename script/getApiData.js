/**
 * Fonction pour récupérer des données JSON depuis une API
 * @param {string} url - L'URL de l'API à appeler
 * @param {Object} options - Options supplémentaires (méthode, headers, etc.)
 * @returns {Promise} - Promise qui résout avec les données JSON
 */
async function getApiData(url, options = {}) {
    try {
        // Configuration par défaut
        const defaultOptions = {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            },
            ...options
        };

        // Appel de l'API
        const response = await fetch(url, defaultOptions);

        // Vérifier si la réponse est OK
        if (!response.ok) {
            throw new Error(`Erreur HTTP: ${response.status} - ${response.statusText}`);
        }

        // Convertir la réponse en JSON
        const data = await response.json();
        
        return data;

    } catch (error) {
        console.error('Erreur lors de la récupération des données:', error);
        throw error; // Re-lancer l'erreur pour que l'appelant puisse la gérer
    }
}

/**
 * Fonction spécifique pour récupérer la liste des films
 * @returns {Promise} - Promise qui résout avec la liste des films
 */
async function getAllFilmsData() {
    const url = 'http://localhost/abc-project/aie-tv/data/films/all';
    return await getApiData(url);
}

async function getTopFilmsData() {
    const url = 'http://localhost/abc-project/aie-tv/data/films/top';
    return await getApiData(url);
}

async function getRecentFilmsData() {
    const url = 'http://localhost/abc-project/aie-tv/data/films/recent';
    return await getApiData(url);
}

/**
 * Fonction pour récupérer un film spécifique par son ID
 * @param {number} filmId - L'ID du film à récupérer
 * @returns {Promise} - Promise qui résout avec les données du film
 */
async function getFilmDataById(filmId) {
    const url = `../data/film.php?id=${filmId}`;
    return await getApiData(url);
}

/**
 * Exemple d'utilisation des fonctions
 */
async function exempleUtilisation() {
    try {
        // Récupérer tous les films
        console.log('Récupération de tous les films...');
        const films = await getAllFilmsData();
        console.log('Films:', films);

        // Récupérer un film spécifique
        console.log('Récupération du film avec ID 1...');
        const film = await getFilmDataById(1);
        console.log('Film:', film);

        // Utilisation générique de getApiData
        const autreApi = await getApiData('https://api.exemple.com/data');
        console.log('Autre API:', autreApi);

    } catch (error) {
        console.error('Erreur dans l\'exemple:', error);
    }
}