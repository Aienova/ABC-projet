<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #e52520;
            color: white;
            text-align: center;
            z-index: 1000;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .popup img {
            max-width: 200px;
            margin-bottom: 20px;
        }
        .popup h2 {
            font-size: 24px;
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
</head>
<body>
    <div class="popup" id="popup">
        <img src="Maquettes/ChatGPT Image 4 août 2025, 09_35_36.png" alt="AIE TV">
        <h2>Votre demande a bien été effectuée</h2>
        <button onclick="closePopup()">Fermer</button>
    </div>
    <script>
        window.addEventListener("load", () => {
            document.getElementById("popup").style.display = "flex";
        });

        function closePopup() {
            document.getElementById("popup").style.display = "none";
        }
    </script>
</body>
</html>
