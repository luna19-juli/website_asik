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
        
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        .revenue-overview, .summary, .revenue-waterfall {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .charts {
            display: flex;
            justify-content: space-around;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
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
      <img src="sik.png" alt="Logo" class="w-8 h-8 mr-2"> <!-- Replace 'logo.png' with your logo URL -->
      <span class="text-2xl font-bold text-green-700">Pemantauan Kesehatan Mangrove</span>
     </div>
     <!-- Links -->
     <div class="flex space-x-6 items-center">
      <a href="index.php" class="text-gray-700 hover:text-green-700 font-semibold">Home</a>
      <a href="kalkulatorkarbon.php" class="text-gray-700 hover:text-green-700 font-semibold">EcoCarbon Mangrove</a>
      <a href="peta.php" class="text-gray-700 hover:text-green-700 font-semibold">EcoMangrove Tracker</a>
      <a href="#" class="bg-green-700 text-white px-4 py-2 rounded-full font-semibold hover:bg-green-600">Log Out</a>
     </div>
    </div>
   </nav>
   <!-- Main Content -->
   <div class="container mx-auto flex-1 p-6 mt-20"> <!-- Adjusted top margin to avoid overlap with navbar -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
     <!-- NDVI Card -->
     <div class="bg-white p-4 rounded-lg shadow-md">
      <div class="flex items-center">
       <div class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center">
        <i class="fas fa-leaf text-green-700 text-2xl"></i>
       </div>
       <div class="ml-4">
        <div class="text-lg font-semibold">NDVI</div>
        <div class="text-gray-600">Normalized Difference Vegetation Index</div>
       </div>
      </div>
      <div class="mt-4 text-3xl font-bold text-green-700">0.75</div>
      <div class="text-gray-600">Current Value</div>
     </div>
     <!-- NDSI Card -->
     <div class="bg-white p-4 rounded-lg shadow-md">
      <div class="flex items-center">
       <div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center">
        <i class="fas fa-water text-blue-700 text-2xl"></i>
       </div>
       <div class="ml-4">
        <div class="text-lg font-semibold">NDSI</div>
        <div class="text-gray-600">Normalized Difference Soil Index</div>
       </div>
      </div>
      <div class="mt-4 text-3xl font-bold text-blue-700">0.45</div>
      <div class="text-gray-600">Current Value</div>
     </div>
     <!-- Temperature Card -->
     <div class="bg-white p-4 rounded-lg shadow-md">
      <div class="flex items-center">
       <div class="w-12 h-12 bg-red-200 rounded-full flex items-center justify-center">
        <i class="fas fa-thermometer-half text-red-700 text-2xl"></i>
       </div>
       <div class="ml-4">
        <div class="text-lg font-semibold">Temperature</div>
        <div class="text-gray-600">Current Temperature</div>
       </div>
      </div>
      <div class="mt-4 text-3xl font-bold text-red-700">28°C</div>
      <div class="text-gray-600">Current Value</div>
     </div>
    </div>
    <!-- Trends Section -->
    <div class="mt-8">
     <div class="text-2xl font-bold mb-4">Trends</div>
     <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- NDVI Trend -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="text-lg font-semibold mb-2">NDVI Trend</div>
       <img alt="Graph showing the trend of NDVI values over time" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/nTW5ZV7mMo6hEtZPLz00JGa11gyfI37klTbktDxP7QkvdI3JA.jpg" width="600"/>
      </div>
      <!-- NDSI Trend -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="text-lg font-semibold mb-2">NDSI Trend</div>
       <img alt="Graph showing the trend of NDSI values over time" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/RQCwv5fUAUWDPqobcLxPpC6CK4rSnzcfvWs097XT5mVe2hcnA.jpg" width="600"/>
      </div>
      <!-- Temperature Trend -->
      <div class="bg-white p-4 rounded-lg shadow-md">
       <div class="text-lg font-semibold mb-2">Temperature Trend</div>
       <img alt="Graph showing the trend of temperature values over time" class="w-full h-64 object-cover rounded-lg" height="400" src="https://storage.googleapis.com/a1aa/image/UtFf8azwwTVNVaI6hfV7OLG6YTG3OEnCA5wM8E1pzKbj7QuTA.jpg" width="600"/>
      </div>
     </div>
    </div>
   </div>
   <section class="revenue-overview">
        <h2>Revenue Overview</h2>
        <div class="charts">
            <div id="recognized-revenue">Recognized Revenue Chart</div>
            <div id="deferred-revenue">Deferred Revenue Chart</div>
        </div>
    </section>

    

    <section class="revenue-waterfall">
        <h2>Revenue Waterfall</h2>
        <table>
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>min</th>
                    <th>max</th>
                    <th>mean</th>
                    <th>std</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NDVI</td>
                    <td>2,000</td>
                    <td>1,000</td>
                    <td>1,000</td>
                    <td>1,000</td>
                </tr>
                <tr>
                    <td>NDSI</td>
                    <td>2,000</td>
                    <td>1,000</td>
                    <td>1,000</td>
                    <td>1,000</td>
                </tr>
                <tr>
                    <td>TEMPERATURE</td>
                    <td>2,000</td>
                    <td>1,000</td>
                    <td>1,000</td>
                    <td>1,000</td>
                </tr>
            </tbody>
        </table>
    </section>

   <!-- Footer -->
   <footer class="bg-green-700 text-white p-4 mt-8">
    <div class="container mx-auto text-center">
