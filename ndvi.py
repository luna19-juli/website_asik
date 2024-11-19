import rasterio
import numpy as np
import matplotlib.pyplot as plt

# Fungsi untuk menghitung NDVI
def hitung_ndvi(band_red_path, band_nir_path):
    # Buka file band merah dan NIR
    with rasterio.open(band_red_path) as red_src:
        red = red_src.read(1).astype(float)
    
    with rasterio.open(band_nir_path) as nir_src:
        nir = nir_src.read(1).astype(float)
    
    # Hitung NDVI
    ndvi = (nir - red) / (nir + red)
    return ndvi

# Fungsi untuk menandai kesehatan mangrove berdasarkan NDVI
def kategorikan_kesehatan(ndvi):
    kondisi = np.zeros_like(ndvi)
    kondisi[(ndvi >= 0.6)] = 3  # Mangrove sehat
    kondisi[(ndvi >= 0.3) & (ndvi < 0.6)] = 2  # Mangrove tekanan sedang
    kondisi[(ndvi < 0.3)] = 1  # Mangrove terdegradasi atau lahan terbuka
    return kondisi

# Path ke file band merah dan NIR
band_red_path = 'data/LC09_L1TP_120065_20240223_20240223_02_T1_B4.TIF'
band_nir_path = 'data/LC09_L1TP_120065_20240223_20240223_02_T1_B5.TIF'

# Hitung NDVI
ndvi = hitung_ndvi(band_red_path, band_nir_path)

# Kategorikan kesehatan mangrove
kesehatan = kategorikan_kesehatan(ndvi)

# Visualisasi NDVI dengan kategori kesehatan
plt.figure(figsize=(10, 6))
plt.imshow(kesehatan, cmap='YlGn')  
cbar = plt.colorbar()
cbar.set_ticks([1, 2, 3])
cbar.set_ticklabels(['Terdegradasi', 'Tekanan Sedang', 'Sehat'])
plt.title("Kesehatan Mangrove Berdasarkan NDVI")
plt.show()
