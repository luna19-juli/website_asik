<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Pemantauan Kesehatan Mangrove
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
  <div class="min-h-screen flex flex-col">
   <!-- Navbar -->
   <nav class="bg-white shadow-lg fixed top-0 w-full z-10">
    <div class="container mx-auto px-4 flex justify-between items-center py-4">
     <!-- Brand -->
     <div class="flex items-center">
      <img alt="Logo of Pemantauan Kesehatan Mangrove" class="w-8 h-8 mr-2" height="40" src="https://storage.googleapis.com/a1aa/image/7zgYXNg6vlKuNJQLfaMUUjv2LeSAbTkBNQbG1CwrB90oyNwTA.jpg" width="40"/>
      <span class="text-2xl font-bold text-green-700">
       Pemantauan Kesehatan Mangrove
      </span>
     </div>
     <!-- Links -->
     <div class="flex space-x-6 items-center">
      <a class="text-gray-700 hover:text-green-700 font-semibold" href="index.php">
       Home
      </a>
      <a class="text-gray-700 hover:text-green-700 font-semibold" href="kalkulatorkarbon.php">
       EcoCarbon Mangrove
      </a>
      <a class="text-gray-700 hover:text-green-700 font-semibold" href="peta.php">
       EcoMangrove Tracker
      </a>
      <a class="bg-green-700 text-white px-4 py-2 rounded-full font-semibold hover:bg-green-600" href="#">
       Log Out
      </a>
     </div>
    </div>
   </nav>
   <!-- Main Content -->
   <div class="container mx-auto flex-1 p-6 mt-20">
    <!-- Year Selection Section -->
    <section class="mt-8">
     <h2 class="text-2xl font-bold mb-4">
      Select Year
     </h2>
     <div class="flex space-x-4">
      <button class="bg-green-700 text-white px-4 py-2 rounded-full font-semibold hover:bg-green-600" onclick="showData('2021')">
       2021
      </button>
      <button class="bg-green-700 text-white px-4 py-2 rounded-full font-semibold hover:bg-green-600" onclick="showData('2022')">
       2022
      </button>
      <button class="bg-green-700 text-white px-4 py-2 rounded-full font-semibold hover:bg-green-600" onclick="showData('2023')">
       2023
      </button>
     </div>
    </section>
    <!-- Data for Different Years -->
    <div id="data-2021" class="mt-8 hidden">
     <h2 class="text-2xl font-bold mb-4">
      Data for 2021
     </h2>
     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- NDVI Card -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="flex items-center">
        <div class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center">
         <i class="fas fa-leaf text-green-700 text-2xl">
         </i>
        </div>
        <div class="ml-4">
         <div class="text-lg font-semibold">
          NDVI
         </div>
         <div class="text-gray-600">
          Normalized Difference Vegetation Index
         </div>
        </div>
       </div>
       <div class="mt-4 text-3xl font-bold text-green-700">
        0.70
       </div>
       <div class="text-gray-600">
        Current Value
       </div>
      </div>
      <!-- NDSI Card -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="flex items-center">
        <div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center">
         <i class="fas fa-water text-blue-700 text-2xl">
         </i>
        </div>
        <div class="ml-4">
         <div class="text-lg font-semibold">
          NDSI
         </div>
         <div class="text-gray-600">
          Normalized Difference Soil Index
         </div>
        </div>
       </div>
       <div class="mt-4 text-3xl font-bold text-blue-700">
        0.40
       </div>
       <div class="text-gray-600">
        Current Value
       </div>
      </div>
      <!-- Temperature Card -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="flex items-center">
        <div class="w-12 h-12 bg-red-200 rounded-full flex items-center justify-center">
         <i class="fas fa-thermometer-half text-red-700 text-2xl">
         </i>
        </div>
        <div class="ml-4">
         <div class="text-lg font-semibold">
          Temperature
         </div>
         <div class="text-gray-600">
          Current Temperature
         </div>
        </div>
       </div>
       <div class="mt-4 text-3xl font-bold text-red-700">
        27°C
       </div>
       <div class="text-gray-600">
        Current Value
       </div>
      </div>
     </div>
     <!-- Trends Section -->
     <div class="mt-8">
      <div class="text-2xl font-bold mb-4">
       Trends
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
       <!-- NDVI Trend -->
       <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="text-lg font-semibold mb-2">
         NDVI Trend
        </div>
        <img alt="Graph showing the trend of NDVI values over time for 2021" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/2021-ndvi-trend.jpg" width="600">
        </img>
       </div>
       <!-- NDSI Trend -->
       <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="text-lg font-semibold mb-2">
         NDSI Trend
        </div>
        <img alt="Graph showing the trend of NDSI values over time for 2021" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/2021-ndsi-trend.jpg" width="600"/>
       </div>
       <!-- Temperature Trend -->
       <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="text-lg font-semibold mb-2">
         Temperature Trend
        </div>
        <img alt="Graph showing the trend of temperature values over time for 2021" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/2021-temperature-trend.jpg" width="600"/>
       </div>
      </div>
     </div>
    </div>
    <div id="data-2022" class="mt-8 hidden">
     <h2 class="text-2xl font-bold mb-4">
      Data for 2022
     </h2>
     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- NDVI Card -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="flex items-center">
        <div class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center">
         <i class="fas fa-leaf text-green-700 text-2xl">
         </i>
        </div>
        <div class="ml-4">
         <div class="text-lg font-semibold">
          NDVI
         </div>
         <div class="text-gray-600">
          Normalized Difference Vegetation Index
         </div>
        </div>
       </div>
       <div class="mt-4 text-3xl font-bold text-green-700">
        0.72
       </div>
       <div class="text-gray-600">
        Current Value
       </div>
      </div>
      <!-- NDSI Card -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="flex items-center">
        <div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center">
         <i class="fas fa-water text-blue-700 text-2xl">
         </i>
        </div>
        <div class="ml-4">
         <div class="text-lg font-semibold">
          NDSI
         </div>
         <div class="text-gray-600">
          Normalized Difference Soil Index
         </div>
        </div>
       </div>
       <div class="mt-4 text-3xl font-bold text-blue-700">
        0.42
       </div>
       <div class="text-gray-600">
        Current Value
       </div>
      </div>
      <!-- Temperature Card -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="flex items-center">
        <div class="w-12 h-12 bg-red-200 rounded-full flex items-center justify-center">
         <i class="fas fa-thermometer-half text-red-700 text-2xl">
         </i>
        </div>
        <div class="ml-4">
         <div class="text-lg font-semibold">
          Temperature
         </div>
         <div class="text-gray-600">
          Current Temperature
         </div>
        </div>
       </div>
       <div class="mt-4 text-3xl font-bold text-red-700">
        28°C
       </div>
       <div class="text-gray-600">
        Current Value
       </div>
      </div>
     </div>
     <!-- Trends Section -->
     <div class="mt-8">
      <div class="text-2xl font-bold mb-4">
       Trends
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
       <!-- NDVI Trend -->
       <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="text-lg font-semibold mb-2">
         NDVI Trend
        </div>
        <img alt="Graph showing the trend of NDVI values over time for 2022" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/2022-ndvi-trend.jpg" width="600">
        </img>
       </div>
       <!-- NDSI Trend -->
       <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="text-lg font-semibold mb-2">
         NDSI Trend
        </div>
        <img alt="Graph showing the trend of NDSI values over time for 2022" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/2022-ndsi-trend.jpg" width="600"/>
       </div>
       <!-- Temperature Trend -->
       <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="text-lg font-semibold mb-2">
         Temperature Trend
        </div>
        <img alt="Graph showing the trend of temperature values over time for 2022" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/2022-temperature-trend.jpg" width="600"/>
       </div>
      </div>
     </div>
    </div>
    <div id="data-2023" class="mt-8 hidden">
     <h2 class="text-2xl font-bold mb-4">
      Data for 2023
     </h2>
     <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- NDVI Card -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="flex items-center">
        <div class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center">
         <i class="fas fa-leaf text-green-700 text-2xl">
         </i>
        </div>
        <div class="ml-4">
         <div class="text-lg font-semibold">
          NDVI
         </div>
         <div class="text-gray-600">
          Normalized Difference Vegetation Index
         </div>
        </div>
       </div>
       <div class="mt-4 text-3xl font-bold text-green-700">
        0.75
       </div>
       <div class="text-gray-600">
        Current Value
       </div>
      </div>
      <!-- NDSI Card -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="flex items-center">
        <div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center">
         <i class="fas fa-water text-blue-700 text-2xl">
         </i>
        </div>
        <div class="ml-4">
         <div class="text-lg font-semibold">
          NDSI
         </div>
         <div class="text-gray-600">
          Normalized Difference Soil Index
         </div>
        </div>
       </div>
       <div class="mt-4 text-3xl font-bold text-blue-700">
        0.45
       </div>
       <div class="text-gray-600">
        Current Value
       </div>
      </div>
      <!-- Temperature Card -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="flex items-center">
        <div class="w-12 h-12 bg-red-200 rounded-full flex items-center justify-center">
         <i class="fas fa-thermometer-half text-red-700 text-2xl">
         </i>
        </div>
        <div class="ml-4">
         <div class="text-lg font-semibold">
          Temperature
         </div>
         <div class="text-gray-600">
          Current Temperature
         </div>
        </div>
       </div>
       <div class="mt-4 text-3xl font-bold text-red-700">
        29°C
       </div>
       <div class="text-gray-600">
        Current Value
       </div>
      </div>
     </div>
     <!-- Trends Section -->
     <div class="mt-8">
      <div class="text-2xl font-bold mb-4">
       Trends
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
       <!-- NDVI Trend -->
       <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="text-lg font-semibold mb-2">
         NDVI Trend
        </div>
        <img alt="Graph showing the trend of NDVI values over time for 2023" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/2023-ndvi-trend.jpg" width="600">
        </img>
       </div>
       <!-- NDSI Trend -->
       <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="text-lg font-semibold mb-2">
         NDSI Trend
        </div>
        <img alt="Graph showing the trend of NDSI values over time for 2023" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/2023-ndsi-trend.jpg" width="600"/>
       </div>
       <!-- Temperature Trend -->
       <div class="bg-white p-4 rounded-lg shadow-md">
        <div class="text-lg font-semibold mb-2">
         Temperature Trend
        </div>
        <img alt="Graph showing the trend of temperature values over time for 2023" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/2023-temperature-trend.jpg" width="600"/>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- Footer -->
   <footer class="bg-green-700 text-white p-4 mt-8">
    <div class="container mx-auto text-center">
     © 2023 Pemantauan Kesehatan Mangrove. All rights reserved.
    </div>
   </footer>
  </div>
  <script>
   function showData(year) {
        document.getElementById('data-2021').classList.add('hidden');
        document.getElementById('data-2022').classList.add('hidden');
        document.getElementById('data-2023').classList.add('hidden');
        document.getElementById('data-' + year).classList.remove('hidden');
    }
  </script>
 </body>
</html>