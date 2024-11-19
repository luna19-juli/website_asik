import rasterio
import numpy as np
import matplotlib.pyplot as plt

# Fungsi untuk menghitung NDVI dan NDSI
def hitung_ndvi(band_red_path, band_nir_path):
    with rasterio.open(band_red_path) as red_src:
        red = red_src.read(1, masked=True).astype(float)
    with rasterio.open(band_nir_path) as nir_src:
        nir = nir_src.read(1, masked=True).astype(float)
    ndvi = (nir - red) / (nir + red)
    return ndvi

def hitung_ndsi(band_green_path, band_swir_path):
    with rasterio.open(band_green_path) as green_src:
        green = green_src.read(1, masked=True).astype(float)
    with rasterio.open(band_swir_path) as swir_src:
        swir = swir_src.read(1, masked=True).astype(float)
    ndsi = (green - swir) / (green + swir)
    return ndsi

def hitung_suhu(band_thermal_path):
    with rasterio.open(band_thermal_path) as thermal_src:
        thermal = thermal_src.read(1, masked=True).astype(float)
    # Konversi DN (Digital Number) ke suhu dalam Kelvin
    # Koefisien ini berbeda tergantung sensor; sesuaikan dengan metadata (k1 dan k2)
    k1 = 774.8853  # Contoh nilai, sesuaikan dengan metadata citra
    k2 = 1321.0789
    kelvin = k2 / np.log((k1 / thermal) + 1)
    celsius = kelvin - 273.15  # Konversi ke Celsius
    return celsius

#unruk Path ke file band
band_red_path = 'data.tif/LC09_L1TP_120065_20240223_20240223_02_T1_B4.TIF'
band_nir_path = 'data.tif/LC09_L1TP_120065_20240223_20240223_02_T1_B5.TIF'
band_green_path = 'data.tif/LC09_L1TP_120065_20240223_20240223_02_T1_B3.TIF'
band_swir_path = 'data.tif/LC09_L1TP_120065_20240223_20240223_02_T1_B6.TIF'
band_thermal_path = 'data.tif/LC09_L1TP_120065_20240223_20240223_02_T1_B10.TIF'

#untuk Hitung NDVI, NDSI, dan suhu
ndvi = hitung_ndvi(band_red_path, band_nir_path)
ndsi = hitung_ndsi(band_green_path, band_swir_path)
temperature = hitung_suhu(band_thermal_path)

# Statistik NDVI
min_ndvi = np.nanmin(ndvi)
max_ndvi = np.nanmax(ndvi)
mean_ndvi = np.nanmean(ndvi)
std_ndvi = np.nanstd(ndvi)

#untuk Statistik NDSI
min_ndsi = np.nanmin(ndsi)
max_ndsi = np.nanmax(ndsi)
mean_ndsi = np.nanmean(ndsi)
std_ndsi = np.nanstd(ndsi)

# untuk Statistik Suhu (Temperature)
min_temp = np.nanmin(temperature)
max_temp = np.nanmax(temperature)
mean_temp = np.nanmean(temperature)
std_temp = np.nanstd(temperature)

#untuk Menampilkan hasil NDVI
plt.imshow(ndvi, cmap='RdYlGn')
plt.colorbar()
plt.title("NDVI")

#untuk Tambahkan informasi statistik NDVI, NDSI, dan suhu di dalam gambar
textstr = (f"NDVI Min: {min_ndvi:.2f}, Max: {max_ndvi:.2f}, Mean: {mean_ndvi:.2f}, Std: {std_ndvi:.2f}\n"
           f"NDSI Min: {min_ndsi:.2f}, Max: {max_ndsi:.2f}, Mean: {mean_ndsi:.2f}, Std: {std_ndsi:.2f}\n"
           f"Temperature Min: {min_temp:.2f}°C, Max: {max_temp:.2f}°C, Mean: {mean_temp:.2f}°C, Std: {std_temp:.2f}°C")
plt.gca().text(0.05, 0.05, textstr, transform=plt.gca().transAxes,
               fontsize=10, color='black', backgroundcolor='white',
               verticalalignment='bottom', bbox=dict(facecolor='white', alpha=0.5))

plt.show()
