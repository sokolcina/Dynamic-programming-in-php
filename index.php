<html>
<link rel="stylesheet" type="text/css" href="style/style1.css">
<?php 
		include_once "delovi/header.php";
		include_once "delovi/dbconnection.php";
		include_once "delovi/funkcije.php";
?>
<body>

<div id="home" align="center">
<form  method="post" style="display: inline-block">

<br>

<table>
<tr>
<td><input type="submit" name="fibR" value="Fibonacijevi brojevi(rekurzija)"/></td>
<td><input type="submit" name="fibM" value="Fibonacijevi brojevi(memoizacija)"/></td>
<td><input type="submit" name="fibD" value="Fibonacijevi brojevi(dinamicko)"/></td>
</tr>
</table>
<br>
<table>
<tr>
<td><input type="submit" name="secR" value="Secenje stapica(rekurzija)"/></td>
<td><input type="submit" name="secM" value="Secenje stapica(memoizacija)"/></td>
<td><input type="submit" name="secD" value="Secenje stapica(dinamicko)"/></td>
</tr>
</table>
<br>
<table>
<tr>
<td><input type="submit" name="rNiz" value="Rastuci niz"/></td>
<td><input type="submit" name="pRanca" value="Problem ranca"/></td>
<td><input type="submit" name="zPodstr" value="Zajednicki podstring"/></td>
<td><input type="submit" name="polindrom" value="Polindromski podniz"/></td>
<td><input type="submit" name="rKarte" value="Red karte"/></td>
</table>

</form>
</div>
<div align="center">
<?php 
	$res=$con->prepare("SELECT * FROM secenjestapica");
	$res->execute();
	$n=0;
	while($row = $res->fetch(PDO::FETCH_ASSOC))
		$cena[$n++]=$row['cena'];

if(isset($_POST['fibR']))
{
printf("Fibonacijev broj na poziciji 7 je %d (rekurzija).",fibRek(7));
}
if(isset($_POST['fibM']))
{

fibMemo(5);
printf("Fibonacijev broj na poziciji 5 je %d (memoizacija).",$niz[5]);
}

if(isset($_POST['fibD']))
{
fibDin(7);
}
if(isset($_POST['secR']))
{
	echo "Redom cena dela sipke je : ";
for($i=0;$i<$n;$i++)
	echo $cena[$i]." ";
echo nl2br("\n");
printf("Najveca moguca vrednost secenjem sipke je %d (rekurzija).",secenjeRek($cena,$n));
}
if(isset($_POST['secM']))
{
	echo "Redom cena sipke je : ";
for($i=0;$i<$n;$i++)
	echo $cena[$i]." ";
echo nl2br("\n");
 secenjeMem($cena,$n);
}
if(isset($_POST['secD']))
{
	echo "Redom cena delova sipke je : ";
for($i=0;$i<$n;$i++)
	echo $cena[$i]." ";
echo nl2br("\n");
secenjeDin($cena,$n);
}
if(isset($_POST['rNiz']))
{
	$n=0;
$res=$con->prepare("SELECT * FROM rastuci");
	$res->execute();
	while($row = $res->fetch(PDO::FETCH_ASSOC))
		$niz[$n++]=$row['broj'];
	rastuci($niz,$n);
}

if(isset($_POST['zPodniz']))
{
najduziPodNiz();
}

if(isset($_POST['polindrom']))
{
	$res=$con->prepare("SELECT * FROM polindrom");
	$res->execute();
	$n=0;
	while($row = $res->fetch(PDO::FETCH_ASSOC))
	{
		$str[$n++]=$row['str'];
	}
	for($i=0;$i<$n;$i++)
		polindrom($str[$i]);
}

if(isset($_POST['zPodstr']))
{
	$res=$con->prepare("SELECT * FROM najduzipodstring");
	$res->execute();
	$n=0;
	while($row = $res->fetch(PDO::FETCH_ASSOC))
	{
		$str1[$n]=$row['string1'];
		$str2[$n]=$row['string2'];
		$n++;
	}
	for($i=0;$i<$n;$i++)
		duzinaZajPodstr($str1[$i],$str2[$i]);
}

if(isset($_POST['pRanca']))
{

	$res=$con->prepare("SELECT * FROM problemranca");
	$res->execute();
	$m=1;
	$k=20;
	while($row = $res->fetch(PDO::FETCH_ASSOC))
		{
			$zapremina[$m]=$row['zapremina'];
			$c[$m]=$row['cena'];
			++$m;
		}
		
problemRanca($zapremina,$c,$m-1,$k);
}

if(isset($_POST['rKarte']))
{
	$res=$con->prepare("SELECT * FROM redkarte");
	$res->execute();
	$m=1;
	while($row = $res->fetch(PDO::FETCH_ASSOC))
		{
			$t[$m]=$row['vreme'];
			$k[$m]=$row['udruzenovreme'];
			$m++;
		}
redKarte($t,$k,$m-1);
}

?>
</div>
</body>
</html>