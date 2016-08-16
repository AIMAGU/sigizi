<?php
//Input
$usia=62;
$jk=1;
$tb=168; //cm
$bb=55; //kg
$aktivitas="Ringan";
$gula2jam=185;
$gulapuasa=120;
$kolesterol=180;
$tekanandarah=120;

//Rule #0
if($jk==1){
	$kaloribasal=30*((90/100)*($tb-100));
}elseif($jk==0){
	$kaloribasal=25*((90/100)*($tb-100));
}else{
	$kaloribasal=0;
}
echo "Kalori JK: ".$kaloribasal."<br>";

if($usia>=40 && $usia<60){
	$um=$kaloribasal*(5/100);
}elseif($usia>=60 && $usia<70){
	$um=$kaloribasal*(10/100);
}elseif($usia>70){
	$um=$kaloribasal*(20/100);
}
echo "Kalori Umur: ".$um."<br>";

if($aktivitas=="Bedrest"){
	$ak=$kaloribasal*(10/100);
}elseif($aktivitas=="Ringan"){
	$ak=$kaloribasal*(20/100);
}elseif($aktivitas=="Sedang"){
	$ak=$kaloribasal*(30/100);
}elseif($aktivitas=="Berat"){
	$ak=$kaloribasal*(40/100);
}
echo "Kalori Aktivitas: ".$ak."<br>";

$bmi=round($bb/round(($tb/100)*($tb/100), 1),1);
if($bmi<=18.5){
	//Kurus
	$p_bmi=$kaloribasal-(20/100);
}elseif($bmi>18.5 && $bmi<=22.9){
	//Normal
	$p_bmi=0;
}elseif($bmi>=23 && $bmi<30){
	//Gemuk
	$p_bmi=$kaloribasal-(20/100);
}
echo "Kalori BMI/IMT: ".$p_bmi."<br>";

$total=$kaloribasal-$um+$ak+$p_bmi;
echo "Total Kebutuhan Kalori: ".$total."<br>";

if($gulapuasa>110){
	if($total<=1200 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
		$dm="DM 1100";
	}elseif($total>1200 && $total<=1400 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
		$dm="DM 1300";
	}elseif($total>1400 && $total<=1600 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
		$dm="DM 1500";
	}elseif($total>1600 && $total<=1800 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
		$dm="DM 1700";
	}elseif($total>1800 && $total<=2000 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
		$dm="DM 1900";
	}elseif($total>2000 && $total<=2200 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
		$dm="DM 2100";
	}elseif($total>2200 && $total<=2400 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
		$dm="DM 2300";
	}elseif($total>2400 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
		$dm="DM 2500";
	}elseif($kolesterol>240){
		$dm="Silahkan hubungi dokter";
	}
}else{
	$dm="Tidak menderita diabetes melitus";
}
echo $dm."<hr>";

echo "<u>Perhitungan kebutuhan Gizi</u><br>";
$karbohidrat=(60/100)*$total;
echo "Karbohidrat: ".$karbohidrat;
echo " = ".round($karbohidrat/4,1)." gram";

$lemak=(25/100)*$total;
echo "<br>Lemak: ".$lemak;
echo " = ".round($lemak/9,1)." gram";

$protein=(15/100)*$total;
echo "<br>Protein: ".$protein;
echo " = ".round($protein/4,1)." gram";
exit;
//---------------------------------------------

if($jk==1){
	$kaloribasal=30*((90/100)*($tb-100));
}elseif($jk==0){
	$kaloribasal=25*((90/100)*($tb-100));
}

if($usia>=40 && $usia<60){
	$kaloribasal=$kaloribasal-(5/100);
}elseif($usia>=60 && $usia<70){
	$kaloribasal=$kaloribasal-(10/100);
}elseif($usia>70){
	$kaloribasal=$kaloribasal-(20/100);
}

if($aktivitas=="Bedrest"){
	$kaloribasal=$kaloribasal+(10/100);
}elseif($aktivitas=="Ringan"){
	$kaloribasal=$kaloribasal+(20/100);
}elseif($aktivitas=="Sedang"){
	$kaloribasal=$kaloribasal+(30/100);
}elseif($aktivitas=="Berat"){
	$kaloribasal=$kaloribasal+(40/100);
}

$bmi=round($bb/round(($tb/100)*($tb/100), 1),1);
if($bmi<=18.5){
	$kaloribasal=$kaloribasal+(20/100);
}elseif($bmi>=25 && $bmi<30){
	$kaloribasal=$kaloribasal-(20/100);
}

$kaloribasal=round($kaloribasal,0);
echo $kaloribasal."<br>";

if($kaloribasal<=1200 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
	$kaloribasal="DM 1100";
}elseif($kaloribasal>1200 && $kaloribasal<=1400 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
	$kaloribasal="DM 1300";
}elseif($kaloribasal>1400 && $kaloribasal<=1600 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
	$kaloribasal="DM 1500";
}elseif($kaloribasal>1600 && $kaloribasal<=1800 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
	$kaloribasal="DM 1700";
}elseif($kaloribasal>1800 && $kaloribasal<=2000 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
	$kaloribasal="DM 1900";
}elseif($kaloribasal>2000 && $kaloribasal<=2200 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
	$kaloribasal="DM 2100";
}elseif($kaloribasal>2200 && $kaloribasal<=2400 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
	$kaloribasal="DM 2300";
}elseif($kaloribasal>2400 && $gula2jam<=200 && $kolesterol<=200 && $tekanandarah<=140){
	$kaloribasal="DM 2500";
}else{
	$kaloribasal="Bukan DM Tipe 2";
}

//Tambahan dari Contoh BAB IV



//Beda Perhitungan Mulai
/* $bbr=round(($bb/($tb-100))*100,0);
if($bbr<90){
	$kal=$bb*40;
}elseif($bbr>=90 && $bbr<=110){
	$kal=$bb*30;
}elseif($bbr>110 && $bbr<120){
	$kal=$bb*20;
}elseif($bbr>=120){
	$kal=$bb*10;
}
echo "<br>".$bbr."-".$kal; */
//Beda Perhitungan Selesai

/* 
//Ketentuan #1
	//AMB
	if($jk=1){
		$kalori=30;
	}else{
		$kalori=25;
	}
	
	//Berat Ideal
	$bbideal=(90/100)*($tb-100);
//Ketentuan #2
	//Usia
	if($usia<60){
		$us=5/100;
	}elseif($usia<70){
		$us=10/100;
	}elseif($usia>69){
		$us=20/100;
	}
//Ketentuan #3
	$bmi=round($bb/round(($tb/100)*($tb/100), 1),1); // Mengetahui Kurus, gemuk
	//echo $bmi;
	
//Ketentuan Sendiri #1
	if($aktivitas=="Bedrest"){
		$aktivitas=10/100;
	}elseif($aktivitas=="Ringan"){
		$aktivitas=20/100;
	}elseif($aktivitas=="Sedang"){
		$aktivitas=30/100;
	}else{
		$aktivitas=40/100;
	}

//Proccess

if($kalori){
	$kaloribasal=$bbideal*$kalori;
	$p_umur=$us*$kaloribasal;
	echo $p_umur;
}
 */
?>