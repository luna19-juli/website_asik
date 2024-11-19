<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoMangrove Tracker</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            color: #333333;
        }
        .navbar {
            width: 100%;
            background-color: #ffffff; 
            padding: 10px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
        }
        .navbar-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80%;
            max-width: 1200px;
        }
        .brand {
            display: flex;
            align-items: center;
        }
        .brand img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }
        .brand .brand-name {
            font-size: 1.5em;
            font-weight: bold;
            color: #333333; 
        }
        .navbar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            gap: 20px;
            align-items: center;
        }
        .navbar a {
            text-decoration: none;
            color: #333333;
            font-weight: bold;
            padding: 10px 15px;
            transition: color 0.3s ease;
        }
        .navbar a:hover {
            color: #007bff;
        }
        .logout-button {
            background-color: #28a745; 
            color: #ffffff;
            padding: 8px 15px;
            border-radius: 15px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .logout-button:hover {
            background-color: #218838; 
        }
        .content {
            text-align: center;
            padding: 20px;
            margin-top: 70px; 
        }
        #map {
            width: 100%;
            height: 600px;
            margin-top: 20px;
            border: 1px solid #dddddd;
        }
        h1 {
            margin: 20px 0;
            font-size: 24px;
            color: #007BFF;
        }
        .services {
            text-align: center;
            padding: 50px 20px;
        }
        .service-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .service-card {
            background-color: #f9f9f9;
            color: #333333;
            padding: 20px;
            border-radius: 10px;
            width: 200px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .service-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <div class="brand">
                <img src="sik.png" alt="Logo"> 
                <span class="brand-name">SIK</span>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="kalkulatorkarbon.php">EcoCarbon Mangrove</a></li>
                <li><a href="#" class="logout-button">Log Out</a></li>
            </ul>
        </div>
    </nav>

    <div class="content">
        <h1>Peta Lokasi</h1>
        <div id="map"></div>
        
        <section class="services">
            <h2>Daftar Tempat</h2>
            <div class="service-cards">
                <div class="service-card">
                    <h3>Pantai Mangrove, Muara Gembong</h3>
                    <p>Pantai Mangrove di Muara Gembong, Kabupaten Bekasi, Jawa Barat, adalah kawasan pesisir yang memiliki ekosistem mangrove yang penting bagi lingkungan setempat...</p>
                </div>
                <div class="service-card">
                    <h3>Banyuurip Mangrove Center (BMC)</h3>
                    <p>BMC adalah kawasan konservasi dan edukasi mangrove yang terletak di Desa Banyuurip, Kecamatan Ujungpangkah, Kabupaten Gresik...</p>
                </div>
                <div class="service-card">
                    <h3>Kawasan Mangrove Pantai Indah Kapuk (PIK)</h3>
                    <p>PIK memiliki taman wisata alam mangrove yang digunakan sebagai kawasan konservasi, wisata, dan edukasi...</p>
                </div>
                <div class="service-card">
                    <h3>Taman Wisata Alam Angke Kapuk</h3>
                    <p>Salah satu kawasan konservasi mangrove yang luas di Jakarta...</p>
                </div>
                <div class="service-card">
                    <h3>Kawasan Mangrove Wonorejo, Surabaya</h3>
                    <p>Kawasan ini terkenal sebagai lokasi konservasi mangrove yang juga berfungsi sebagai tempat wisata edukasi...</p>
                </div>
                <div class="service-card">
                    <h3>Kawasan Mangrove Karangsong, Indramayu</h3>
                    <p>Kawasan mangrove di Karangsong dikelola sebagai upaya untuk mengurangi dampak abrasi...</p>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
    const map = L.map('map').setView([-6.1751, 106.8650], 5);

    L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        maxZoom: 18,
        attribution: '&copy; <a href="https://www.esri.com">Esri</a>, Earthstar Geographics'
    }).addTo(map);

    const dataPoints = [
        { lat: -6.023868934108347, lon: 106.9967501682147, location: "Pantai Mangrove, Muara Gembong, Bekasi, Jawa Barat" },
        { lat: -6.9045285428053, lon: 112.52870798897561, location: "Banyuurip Mangrove Center" },
        { lat: -6.1205138847110225, lon: 106.76093780188204, location: "Kawasan Mangrove Pantai Indah Kapuk (PIK)" },
        { lat: -6.106191590934329, lon: 106.73697452637892, location: "Taman Wisata Alam Angke Kapuk" },
        { lat: -7.305308388971698, lon: 112.82498146753079, location: "Kawasan Mangrove Wonorejo, Surabaya, Jawa Timur" },
        { lat: -6.3017660762521075, lon: 108.36828102399639, location: "Kawasan Mangrove Karangsong, Indramayu, Jawa Barat" }
    ];

    dataPoints.forEach(point => {
        L.marker([point.lat, point.lon]).addTo(map)
            .bindPopup(`<b>Nama Tempat:</b> ${point.location}`);
    });
    </script>
</body>
</html>
