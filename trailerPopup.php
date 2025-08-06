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
        background-color: #fff;
        padding: 1rem;
        border-radius: 8px;
        position: relative;
        width: 80%;
        max-width: 800px;
    }
    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
        font-size: 1.5rem;
    }
    iframe {
        width: 100%;
        height: 450px;
    }
</style>

<!-- Affiche le Pop-up -->
<div id="trailerpopup" class="overlay">
    <div class="content">
        <span class="close-btn" onclick="closePopup()">&times;</span>
        <iframe id="trailerIframe" src="" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<script>
    function openTrailer() {
        document.getElementById('trailerpopup').style.display = "flex";
    }

    function closeEvent() {
        document.getElementById("trailerpopup").style.display = "none";
        document.querySelector("#trailerpopup iframe").src = document.querySelector("#trailerpopup iframe").src;
    }
</script>