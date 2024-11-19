<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   .header {
        color: white;
        text-align: center;
        padding: 50px 20px;
    }

    .logo span {
        color: #0f0 !important;
    }

    .intro h1 span {
        color: #0f0; /* Warna default */
        transition: color 0.3s ease; /* Menambahkan efek transisi */
    }

    .intro h1:hover span {
        color: #ff0; /* Warna baru saat di-hover */
    }

    .cv-btn {
        background-color: #0f0;
        color: #000;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
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
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        width: 250px;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .service-card img {
        border-radius: 10px;
    }
  </style>
 </head>
 <body class="font-roboto bg-gray-100">
  <div class="w-full bg-white shadow-md fixed top-0 left-0">
   <div class="flex justify-between items-center w-full px-6 py-4 max-w-7xl mx-auto">
    <div class="flex items-center">
     <img alt="Wise logo" class="h-8" src="sik.png"/>
     <h1 class="logo ml-2 text-xl font-bold">
      SI
      <span>
       K
      </span>
     </h1>
    </div>
    <div class="flex space-x-4">
     <a class="text-green-600 font-semibold" href="dashboard.php">
      dashboard
     </a>
     <a class="text-gray-700" href="peta.php">
      EcoMangrove Tracker
     </a>
     <a class="text-gray-700" href="kalkulatorkarbon.php">
      EcoCarbon Mangrove
     </a>
     <a class="text-gray-700" href="data.php">
      EN
      <i class="fas fa-globe">
      </i>
     </a>
     <a class="bg-green-500 text-white px-4 py-2 rounded-full" href="logout.php">
      log out
     </a>
    </div>
   </div>
  </div>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="flex flex-col items-center justify-center min-h-screen text-center px-4 mt-32">
   <div class="intro">
    <h1 class="text-6xl font-bold">
     HI WELCOME!
     <br>
      WEBSITE
      <span id="eco-mangrove">
       EcoMangrove
      </span>
     </br>
    </h1>
    <p class="mt-4 text-gray-700">
     Setiap pohon mangrove yang kita tanam adalah langkah kecil untuk melindungi pantai, mencegah erosi, dan memberi kehidupan bagi beragam spesies.
     <br/>
     Bersama, mari kita rawat mangrove sebagai warisan hijau yang tak ternilai bagi generasi mendatang dan bumi yang lebih baik.
    </p>
    <div class="mt-8 space-x-4">
     <a class="bg-green-500 text-white px-6 py-3 rounded-full" href="contact.php">
      Contact
     </a>
    </div>
   </div>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <br/>
   <div class="mt-16">
    <h2 class="text-3xl font-bold">
     About Mangrove
    </h2>
    <p class="mt-4 text-gray-700 max-w-2xl">
     Mangrove adalah ekosistem hutan yang unik dan khas, tumbuh di zona intertidal pesisir, termasuk pantai dan pulau-pulau kecil, serta dipengaruhi oleh pasang surut air laut. Ekosistem ini merupakan sumber daya alam yang bernilai tinggi, baik untuk lingkungan maupun masyarakat pesisir. Mangrove berkembang di daerah yang memiliki kadar salinitas tinggi dan terdiri dari berbagai jenis tumbuhan dengan morfologi khusus, terutama pada sistem perakarannya yang mampu beradaptasi dengan lingkungan pasang surut serta substrat lumpur atau lumpur berpasir. Lingkungan mangrove umumnya cukup subur, baik perairan maupun daratannya, karena adanya transportasi nutrien yang konstan akibat perubahan pasang surut, menjadikannya tempat yang kaya akan keanekaragaman hayati dan berperan penting dalam ekosistem pesisir.
    </p>
   </div>
   <div class="mt-16">
    <h2 class="text-3xl font-bold">
     Definisi Mangrove
    </h2>
    <p class="mt-4 text-gray-700 max-w-2xl">
     Mangrove biasanya mengacu pada jenis atau kelompok tumbuhan yang tumbuh di kawasan pesisir, termasuk pantai dan muara, yang dipengaruhi oleh pasang surut air laut. Kata "mangrove" kemungkinan berasal dari perpaduan kata dalam bahasa Melayu "manggi-manggi" dan bahasa Arab "el-gurm," yang kemudian berubah menjadi "mang-gurm" dan akhirnya disebut sebagai "mangrove."
        Tomlinson (1986) dan Wightman (1989), sebagaimana dikutip dalam Noor et al. (1999), mendefinisikan mangrove sebagai jenis tumbuhan yang hidup di area pasang surut dan terbentuk sebagai komunitas. Selain itu, mangrove juga digambarkan sebagai formasi tumbuhan khas di daerah litoral pada pantai-pantai tropis dan subtropis yang terlindung (Saenger et al., 1983). Menurut Soerianegara (1987), hutan mangrove adalah jenis hutan yang tumbuh terutama di tanah lumpur aluvial di wilayah pesisir dan muara sungai, yang terpengaruh oleh pasang surut laut, dan terdiri dari jenis-jenis pohon seperti Avicennia, Sonneratia, Rhizophora, Bruguiera, Ceriops, Lumnitzera, Excoecaria, Xylocarpus, Aegiceras, Scyphyphora, dan Nypa.
    </p>
   </div>
   <div class="mt-16">
    <h2 class="text-3xl font-bold">
     Manfaat Mangrove bagi Pantai
    </h2>
    <p class="mt-4 text-gray-700 max-w-2xl">
     Pencegahan Abrasi dan Erosi
        Tanaman mangrove berfungsi sebagai benteng alami yang melindungi pesisir dari abrasi dan erosi. Akar mangrove yang kuat dan kompleks mampu menahan gelombang laut, sehingga mengurangi kerusakan akibat badai dan mempertahankan bentuk Pantai.
     <br/>
     Habitat untuk Keanekaragaman Hayati
        Mangrove menyediakan habitat yang sangat penting bagi berbagai spesies hewan, termasuk ikan, burung, dan invertebrata. Akar mangrove menjadi tempat bertelur dan berlindung bagi banyak spesies, yang berkontribusi pada keanekaragaman hayati di ekosistem pesisir.
     <br/>
     Penyimpanan Karbon
        Mangrove memiliki kemampuan luar biasa dalam menyimpan karbon, bahkan lebih efektif dibandingkan hutan hujan tropis. Ini menjadikannya penting dalam upaya mitigasi perubahan iklim dengan mengurangi konsentrasi gas rumah kaca di atmosfer.
     <br/>
     Pemurnian Air
        Akar mangrove berfungsi sebagai penyaring alami, membantu menyaring sedimen dan polutan dari air laut. Proses ini menjaga kualitas air di sekitar ekosistem mangrove, memungkinkan lingkungan yang lebih sehat bagi organisme laut.
     <br/>
     Sumber Pendapatan Ekonomi
        Mangrove juga memberikan manfaat ekonomi bagi masyarakat lokal. Mereka menyediakan sumber daya seperti kayu, buah, dan ikan, yang penting untuk penghidupan masyarakat pesisir. Selain itu, ekowisata di kawasan mangrove dapat menjadi sumber pendapatan tambahan.
     <br/>
     Pengendalian Intrusi Air Laut
        Mangrove berperan dalam mencegah intrusi air laut ke daratan. Akar-akar pohon mangrove tidak hanya menstabilkan tanah tetapi juga membantu mengubah air payau menjadi air tawar dengan mengeluarkan garam dari daunnya.
     <br/>
     Dengan berbagai manfaat ini, keberadaan hutan mangrove sangat penting untuk menjaga keseimbangan ekosistem pesisir dan mendukung kehidupan masyarakat lokal. Upaya pelestarian dan pengembangan hutan mangrove harus terus didorong untuk memastikan keberlanjutan lingkungan bagi generasi mendatang
    </p>
   </div>
   <section class="services mt-16">
    <h2 class="text-3xl font-bold">
     Jenis-Jenis Mangrove
    </h2>
    <br>
     <div class="service-cards">
      <div class="service-card">
       <img alt="Image of Avicennia spp. mangrove tree with green leaves and complex root system" height="200" src="https://storage.googleapis.com/a1aa/image/1RfeMQ6rh2imx0TXbrEPNysTOuhhWN7nhA9ISVAtKxe80SgnA.jpg" width="200"/>
       <h3 class="text-xl font-semibold mt-4">
        Avicennia spp.
       </h3>
       <p class="mt-2 text-gray-700">
        Jenis ini dikenal dengan nama Api-Api, memiliki adaptasi yang baik terhadap kondisi salinitas tinggi. Avicennia berfungsi sebagai pelindung pantai dan habitat bagi berbagai spesies.
       </p>
      </div>
      <div class="service-card">
       <img alt="Image of Rhizophora spp. mangrove tree with stilt roots and green leaves" height="200" src="https://storage.googleapis.com/a1aa/image/5k90hfMNrJ2iY66ojJEXfcojjqLKpDJNiWc4H436wHwiaJwTA.jpg" width="200"/>
       <h3 class="text-xl font-semibold mt-4">
        Rhizophora spp.
       </h3>
       <p class="mt-2 text-gray-700">
        Dikenal sebagai Bakau, jenis ini memiliki akar tunjang yang kuat, membantu menstabilkan tanah dan mencegah erosi. Rhizophora juga menjadi habitat penting bagi ikan dan hewan laut lainnya.
       </p>
      </div>
      <div class="service-card">
       <img alt="Image of Bruguiera spp. mangrove tree with knee roots and green leaves" height="200" src="https://storage.googleapis.com/a1aa/image/9PKfezDrNfNpTITU0uwcfoixuflef8Tm6c22rnwScn5KOtE4JA.jpg" width="200"/>
       <h3 class="text-xl font-semibold mt-4">
        Bruguiera spp.
       </h3>
       <p class="mt-2 text-gray-700">
        Jenis ini memiliki akar lutut yang unik dan sering ditemukan di daerah pasang surut. Bruguiera berkontribusi pada penyerapan karbon dan perlindungan ekosistem.
       </p>
      </div>
      <div class="service-card">
       <img alt="Image of Ceriops spp. mangrove tree with broad leaves and complex root system" height="200" src="https://storage.googleapis.com/a1aa/image/FnguVNMZYOJkC96SV1ahb1ulzepejAbNRaV5eN7JborK1SgnA.jpg" width="200"/>
       <h3 class="text-xl font-semibold mt-4">
        Ceriops spp.
       </h3>
       <p class="mt-2 text-gray-700">
        Ceriops tagal adalah salah satu spesies yang umum, memiliki daun yang lebar dan berfungsi sebagai penyaring air.
       </p>
      </div>
      <div class="service-card">
       <img alt="Image of Sonneratia spp. mangrove tree with green leaves and unique flowers" height="200" src="https://storage.googleapis.com/a1aa/image/V1TXknIyxV75I5JbcaT1IbGIqTVsMkaU1w2JMff8UshkaJwTA.jpg" width="200"/>
       <h3 class="text-xl font-semibold mt-4">
        Sonneratia spp.
       </h3>
       <p class="mt-2 text-gray-700">
        Dikenal dengan nama Pedada, jenis ini memiliki bunga yang menarik dan buah yang dapat dimanfaatkan oleh masyarakat lokal.
       </p>
      </div>
      <div class="service-card">
       <img alt="Image of Xylocarpus spp. mangrove tree with large fruits and strong wood" height="200" src="https://storage.googleapis.com/a1aa/image/7Dok1SjmEhoeYCs3ZEjmkxQQynWy2EaJ2oUOzf2iLYanaJwTA.jpg" width="200"/>
       <h3 class="text-xl font-semibold mt-4">
        Xylocarpus spp.
       </h3>
       <p class="mt-2 text-gray-700">
        Jenis ini memiliki buah yang besar dan kayu yang kuat, sering digunakan untuk bahan bangunan.
       </p>
      </div>
      <div class="service-card">
       <img alt="Image of Lumnitzera spp. mangrove tree with green leaves and potential as firewood" height="200" src="https://storage.googleapis.com/a1aa/image/GZbHUYMMpNoELN1ZaaDct5zJNcYAhbcNbQ21YSKRbfYQtE4JA.jpg" width="200"/>
       <h3 class="text-xl font-semibold mt-4">
        Lumnitzera spp.
       </h3>
       <p class="mt-2 text-gray-700">
        Dikenal sebagai Teruntum, jenis ini tumbuh di daerah pinggiran mangrove dan memiliki potensi sebagai kayu bakar.
       </p>
      </div>
     </div>
    </br>
   </section>
  </div>
  <script>
   const spanElement = document.getElementById("eco-mangrove");
    spanElement.addEventListener("mouseenter", () => {
      spanElement.style.color = "#ff0"; 
    });
    spanElement.addEventListener("mouseleave", () => {
      spanElement.style.color = "#0f0"; 
    });
  </script>
 </body>
</html>
