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
            display: flex;
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
    </style>
</head>
<body>
    <div class="popup" id="popup">
        <img src="Maquettes/ChatGPT Image 4 août 2025, 09_35_36.png" alt="AIE TV">
        <h2>Votre demande a bien été effectuée</h2>
    </div>
    <script>
        setTimeOut(() => {
            const popup = document.getElementById("popup");
            if (popup) {
                popup.style.display = "none";
            }
        }, 2000);
    </script>
</body>
</html>
