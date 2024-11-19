<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDVI Mangrove Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
        }
        .header h1 {
            margin: 0;
            font-size: 2.5em;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .results {
            margin-top: 20px;
        }
        .results h2 {
            margin-top: 0;
        }
        .results img {
            max-width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>NDVI Mangrove Data</h1>
        </div>
        <form id="ndviForm">
            <div class="form-group">
                <label for="latitude">Latitude:</label>
                <input type="text" id="latitude" name="latitude" required>
            </div>
            <div class="form-group">
                <label for="longitude">Longitude:</label>
                <input type="text" id="longitude" name="longitude" required>
            </div>
            <button type="submit" class="btn">Get NDVI Data</button>
        </form>
        <div class="results" id="results">
            <h2>Results</h2>
            <img id="ndviImage" src="" alt="NDVI image will be displayed here">
        </div>
    </div>

    <script>
        document.getElementById('ndviForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const latitude = document.getElementById('latitude').value;
            const longitude = document.getElementById('longitude').value;

            console.log(`Latitude: ${latitude}, Longitude: ${longitude}`); // Debugging

            // Kirim permintaan ke server untuk mendapatkan data NDVI
            fetch(`ndvi.php?latitude=${latitude}&longitude=${longitude}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Received data:', data); // Debugging
                    if (data.image_url) {
                        document.getElementById('ndviImage').src = data.image_url;
                    } else {
                        console.error('No image URL returned from server');
                    }
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        });
        document.getElementById("getNDVIData").addEventListener("click", function () {
    const latitude = document.getElementById("latitude").value;
    const longitude = document.getElementById("longitude").value;

    // URL API dengan parameter latitude dan longitude (sesuaikan URL sesuai API NDVI yang digunakan)
    const url = `https://api-ndvi-example.com/getNDVI?lat=${latitude}&lon=${longitude}`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            // Contoh menggunakan data gambar NDVI dari API
            document.getElementById("ndviImage").src = data.ndviImageURL;
        })
        .catch(error => console.error("Error fetching NDVI data:", error));
});

    </script>
</body>
</html>
