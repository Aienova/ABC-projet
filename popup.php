<style>
    body {
        font-family: Arial, sans-serif;
    }
    .popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 90%;
        max-width: 400px;
        padding: 30px;
        background-color: #e52520;
        color: white;
        text-align: center;
        z-index: 1000;
        display: none;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        opacity: 0;
        pointer-events: none;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        transition: opacity 0.4s ease;
    }
    .popup.visible {
        opacity: 1;
        pointer-events: auto;
    }
    .popup img {
        max-width: 100px;
        margin-bottom: 20px;
    }
    .popup h2 {
        font-size: 20px;
        margin-bottom: 20px;
    }
    .popup button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: white;
        color: #e52520;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>
<div class="popup" id="popup">
    <img src="Maquettes/ChatGPT Image 4 août 2025, 09_35_36.png" alt="AIE TV">
    <h2>Votre demande a bien été effectuée</h2>
    <button onclick="closePopup()">Fermer</button>
</div>
<script>
    window.addEventListener("load", () => {
        const popup = document.getElementById("popup");
        popup.style.display = "block";
        popup.classList.add("visible");
    });

    function closePopup() {
        const popup = document.getElementById("popup");
        popup.classList.remove("visible");
        setTimeOut(() => {
            popup.style.display = "none";
        }, 3);
    }
</script>