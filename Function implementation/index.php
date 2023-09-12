<?php 
echo date("l, d-m-y");
echo ("<br>");
echo time();
echo ("<br>");
// 10 hari kedepan
echo date("l d m y", time()+60*60*24*10);
// 10 hari kebelakang
echo date("l d m y", time()-60*60*24*10);
// mktime(jam,menit,detik,bulan,tanggal,tahun)
echo "<br>";
echo mktime(0,0,0,3,7,2003);
echo "<br>";
echo date("l", mktime(0,0,0,7,3,2003));
echo "<br>";
echo date("l",strtotime("25 june 2023"));

// ada function seperti c(strcmp,strlen)
?> 