<?php
$sayi1=5;
$sayi2=3;
echo "Kullanılan Rakamlar<br />";
echo "Sayı 1: ".$sayi1."<br />";
echo "Sayı 2: ".$sayi2."<br />";
echo "Sayıların Toplamı: ".($sayi1+$sayi2)."<br />";
echo "Sayıların Farkı:".($sayi1-$sayi2)."<br />";
echo "Sayıların Çarpımı:".$sayi1*$sayi2."<br />";
echo "Sayıların Bölümü:".$sayi1/$sayi2."<br />";
echo "Sayıların Kalanı:".$sayi1%$sayi2."<br />";
$sayi3=-4;
$deger=189;
echo "Sayı 3:".$sayi3."<br />";
echo "Sayı 3 Mutlak Değer:".abs($sayi3)."<br />"; 
echo "Ark Kosinüs:".rad2deg(acos(1/2))."<br />"; // rad2deg: radyanı dereceye çevirir
echo "Ark Sinüs:".rad2deg(asin(sqrt(3)/2))."<br />"; 
echo "Ark Tanjant:".rad2deg(atan(1))."<br />"; // atan: ark tanjant
echo "Binary To Decimal:".bindec(10101)."<br />"; // bindec: binary to decimal
echo "Yukarı Yuvarla:".ceil(5.02)."<br />"; // ceil: yukarı yuvarla
echo "Decimal To Binary :".decbin(15)."<br />"; // decbin: decimal to binary
echo "Decimal To Octal :".decoct(22)."<br />"; // decoct: decimal to octal
echo "Derece To Radyan :".deg2rad(60)."<br />"; // deg2rad: dereceyi radyana çevirir
echo "E'nin Üssü :".exp(4)."<br />"; // exp: e'nin üssü
echo "Tabana Yuvarla: ".floor(8.87)."<br />"; // floor: tabana yuvarla
echo "Olası En Büyük Değer: ".getrandmax()."<br />"; // getrandmax: olası en büyük değer
echo "Hex To Dec :".hexdec('abcd')."<br />"; // hexdec: hex to dec
echo "Sayı Sonlumu :".is_finite(1231343344)."<br />"; // is_finite: sayı sonlu mu
echo "Sayı Sonlumu :".is_finite(log(0))."<br />"; 
echo "Sayı Sonsuzmu :".is_infinite(13113)."<br />"; 
echo "Sayı Sonsuzmu :".is_infinite(log(0))."<br />";
echo "Girilen Değer Sayı Değildir :".is_nan(acos(1.01))."<br />"; // is_nan: girilen değer sayı değil mi
echo "Değer:".$deger."<br />";
echo "Girilen Değer Sayı Değildir :".is_nan($deger)."<br />";
echo "En Yüksek Değer :".max(17,14,3,4,67,4)."<br />"; 
echo "En Düşük Değer :".min(17,14,3,4,67,4)."<br />";
echo "En Yüksek Olası Değer: ".mt_getrandmax()."<br />"; // mt_getrandmax: en yüksek olası değer
echo "Rastgele Değer: ".mt_rand()."<br />"; // mt_rand: rastgele değer
echo "Aralıklı Rastgele Değer: ".mt_rand(100,400)."<br />"; // mt_rand: aralıklı rastgele değer
echo "Octal To Dec: ".octdec(75)."<br />"; // octdec: octal to dec
echo "Pi Sayisi: ".pi()."<br />"; // pi: pi sayısı
echo "Radyan To Derece: ".rad2deg(1.57)."<br />";   
echo "Rastgele Değer: ".rand()."<br />";
echo "Aralıklı Rastgele Değer: ".rand(700,900)."<br />";
echo "Sayıyı Yuvarla :".round(4.5).",".round(4.4).",".round(4.7)."<br />";
echo "Sayıyı Yuvarla :".round(4.543611232,2)."<br />";
echo "Sayıyı Yuvarla :".round(4.543611232,3)."<br />";
echo "Sinüs Değeri: ".sin(3.1415926535898/2)."<br />";
echo "Karekök :".sqrt(4)."<br />";
echo "Tanjant :".tan(3.1415926535898/4)."<br />";
?>