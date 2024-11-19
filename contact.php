<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }
        
        .services {
            text-align: center;
            padding: 60px 20px;
        }

        .service-cards {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .service-card {
            background-color: #1f2937; /* Darker color */
            padding: 20px;
            border-radius: 15px;
            width: 250px;
            text-align: center;
            color: white;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .service-card img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid #4ade80; /* Border color for image */
        }

        .service-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .service-card p {
            color: #cbd5e1;
        }
    </style>
</head>
<body class="font-roboto bg-gray-100">
    <!-- Navbar -->
    <div class="w-full bg-white shadow-md fixed top-0 left-0 z-10">
        <div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
            <div class="flex items-center">
                <img src="sik.png" alt="Wise logo" class="h-8" />
                <h1 class="ml-2 text-xl font-bold text-black">SI<span class="text-green-600">K</span></h1>
            </div>
            <div class="flex space-x-4">
                <a href="index.php" class="text-green-600 font-semibold hover:black">Home</a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <section class="services mt-24">
        <h2 class="text-3xl font-bold mb-8">Ecomangrove Team</h2>
        <p class="mb-10 max-w-2xl mx-auto text-gray-600">Kami adalah tim yang berdedikasi untuk pengembangan dan konservasi mangrove di Indonesia. Bersama-sama, kami berusaha melestarikan lingkungan untuk masa depan yang lebih baik.</p>
        <div class="service-cards">
            <div class="service-card">
                <img src="iqbal.jpg" alt="Muhammad Iqbal Al-Fahrezi" />
                <h3>Muhammad Iqbal Al-Fahrezi</h3>
                <p>Email: iqbalal250824@upi.edu</p>
                <p class="mt-2 text-green-400">Lead Developer</p>
            </div>
            <div class="service-card">
                <img src="luna.jpg" alt="Luna Yulinar" />
                <h3>Luna Yulinar</h3>
                <p>Email: lunayulinar9@upi.edu</p>
                <p class="mt-2 text-green-400">Project Manager</p>
            </div>
            <div class="service-card">
                <img src="Aliyah.jpg" alt="John Doe" />
                <h3>Aliyah Monica Caroline </h3>
                <p>Email: aliyahMonicaCaroline@upi.edu</p>
                <p class="mt-2 text-green-400">Staf Administrasi</p>
            </div>
        </div>
    </section>
</body>
</html>
