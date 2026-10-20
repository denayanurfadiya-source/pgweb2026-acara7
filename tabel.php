<?php
$kecamatan = array("Ilir Barat II", "Seberang Ulu I", "Seberang Ulu II", "Ilir Barat I", "Ilir Timur I", "Ilir Timur II", "Sukarami", "Sako", "Kemuning", "Kalidoni", "Bukit Kecil", "Gandus", "Kertapati", "Plaju", "Alang-Alang Lebar", "Sematang Borang", "Jakabaring", "Ilir Timur III");
$luas = array(4.18, 6.09, 8.35, 40.15, 5.16, 8.53, 47.23, 15.56, 6.51, 32.97, 2.38, 49.64, 41.09, 16.52, 23.26, 24.79, 11.72, 7.84);
$penduduk = array(69871, 96058, 106752, 154738, 66124, 85005, 212241, 117573, 82167, 133017, 38195, 83882, 99576, 99559, 116594, 70870, 94583, 74562);

echo "<table border='1'>";
echo "<tr><td>kecamatan</td><td>luas</td><td>jumlah_penduduk</td></tr>";

for ($i = 0; $i < count($kecamatan); $i++) {
    echo "<tr><td>" . $kecamatan[$i] . "</td><td>" . $luas[$i] . "</td><td>" . $penduduk[$i] . "</td></tr>";
}

echo "</table>";
?>
