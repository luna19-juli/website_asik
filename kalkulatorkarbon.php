<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoCarbon Mangrove</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            color: #00695c;
            text-align: center;
            padding: 50px;
            margin: 0;
        }

        .navbar {
            background-color: #00796b;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        .navbar li {
            margin: 0 15px;
        }

        .navbar a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 8px 15px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .navbar a:hover {
            background-color: #004d40;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            margin: auto;
            margin-top: 80px; /* Memberikan ruang untuk navbar */
        }

        input {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #00695c;
            border-radius: 4px;
            width: calc(100% - 22px);
        }

        button {
            padding: 10px;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #004d40;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="dashboard.php">dashboard</a></li>
            <li><a href="peta.php">EcoMangrove Tracker</a></li>
 
        </ul>
    </div>

    <div class="container">
        <h1>Kalkulator Karbon Mangrove</h1>
        <img src="mangrove.jpg" alt="Logo" width="400" height="auto">

        <p>Masukkan luas area mangrove (dalam hektar):</p>
        <input type="number" id="area" placeholder="Luas (ha)" min="0">
        <button id="calculateButton">Hitung Karbon</button>
        <h2 id="result"></h2>
    </div>

    <script>
        document.getElementById("calculateButton").addEventListener("click", function() {
            const area = document.getElementById("area").value;

            // Fungsi untuk mendapatkan laju serapan karbon acak antara 70 hingga 700 ton
            function getRandomCarbonAbsorptionRate(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            const carbonAbsorptionRate = getRandomCarbonAbsorptionRate(70, 700); // Nilai acak antara 70 dan 700

            if (area <= 0) {
                document.getElementById("result").innerText = "Silakan masukkan luas area yang valid.";
                return;
            }

            const totalCarbon = area * carbonAbsorptionRate;
            document.getElementById("result").innerText = `Estimasi jumlah karbon yang diserap: ${totalCarbon} ton per tahun (dengan laju ${carbonAbsorptionRate} ton/ha/tahun).`;
        });
    </script>
</body>
</html>