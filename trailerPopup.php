<style>
    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }
    .content {
        position: relative;
        width: 80%;
        max-width: 800px;
        background-color: #000;
        padding: 10px;
        border-radius: 8px;
    }
    .content iframe {
        width: 100%;
        height: 450px;
        border-radius: 8px;
    }
    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 30px;
        height: 30px;
        background: red;
        color: white;
        border: none;
        border-radius: 50%;
        cursor: pointer;
        font-size: 1.5rem;
        font-weight: bold;
    }
</style>

<!-- Affiche le Pop-up -->
<div id="trailerpopup" class="overlay">
    <div class="content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <iframe src="" allowfullscreen></iframe>
    </div>
</div>
<script>
    window.addEventListener("click", () => {
        const popup = document.getElementById("trailerpopup");
        popup.style.display = "flex";
    });

    function closePopup() {
        document.getElementById("trailerpopup").style.display = "none";
        document.querySelector("#trailerpopup iframe").src = document.querySelector("#trailerpopup iframe").src;
    }
</script>