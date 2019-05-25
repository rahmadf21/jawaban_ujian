<?php 
function perkalian($date1,$date2)
{
// $date1 = "20-02-2010";
// $date2 = "20-04-2010";

// memecah bagian-bagian dari tanggal $date1
$pecahTgl1 = explode("-", $date1);

// membaca bagian-bagian dari $date1
$tgl1 = $pecahTgl1[0];
$bln1 = $pecahTgl1[1];
$thn1 = $pecahTgl1[2];

echo "<p>Tanggal diantara ".$date1." dan ".$date2.":</p>";

// counter looping
$i = 0;

// counter untuk jumlah hari minggu
$sum = 0;

do
{
   // mengenerate tanggal berikutnya
   $tanggal = date("d-m-Y", mktime(0, 0, 0, $bln1, $tgl1+$i, $thn1));

   // cek jika harinya minggu, maka counter $sum bertambah satu, lalu tampilkan tanggalnya
   if (date("D", mktime(0, 0, 0, $bln1, $tgl1+$i, $thn1)) == 0)
   {
     $sum++;
     echo $tanggal."<br>";
   } 	 

   // increment untuk counter looping
   $i++;
}
while ($tanggal != $date2);   

// looping di atas akan terus dilakukan selama tanggal yang digenerate tidak sama dengan $date2.

// tampilkan jumlah hari Minggu
echo "<p>Jumlah hari diantara ".$date1." s/d ".$date2." adalah: ".$sum."</p>";
}
$hasil=perkalian('20-02-2010','20-04-2010');
echo "$hasil";
 ?>