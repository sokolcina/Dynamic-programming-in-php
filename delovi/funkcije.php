<?php 
/* 
Created by Stefan Sokolovic 2016
*/
function fibRek($n){

	if($n<=2) return 1;
	return fibRek($n-1)+fibRek($n-2);

	}

$niz=array();
function fibMemo($n){
	global $niz;
	if(array_key_exists($n, $niz))
		return $niz[$n];
	if($n<=2) $niz[$n]=1;
	else
		$niz[$n]=fibMemo($n-1)+fibMemo($n-2);
	return $niz[$n];
}


function fibDin($n){
	$din=array();
	$din[0]=$din[1]=1;
	for($i=2;$i<$n;$i++)
		$din[$i]=$din[$i-1]+$din[$i-2];
	printf("Fibonacijev broj na poziciji 7 je %d (dinamicko).",$din[$n-1]);
}

	

function secenjeRek(&$cena,$n)
{
	if($n==0)
		return 0;
	$max_vr=-2147483648;
	 for ($i = 0; $i<$n; $i++)
         $max_vr = max($max_vr, $cena[$i] + secenjeRek($cena, $n-$i-1));

   return $max_vr;
}
function secenjeMemPom(&$cena,$n,&$r)
{
	if($r[$n]>=0)
		return $r[$n];
	if ($n == 0)
		$max_vr=0;
	else $max_vr=-2147483648;
	for ($i = 0; $i<$n; $i++)
		$max_vr = max($max_vr, $cena[$i] + secenjeMemPom($cena, $n-$i-1,$r));
	$r[$n]=$max_vr;
	return $max_vr;
}

function secenjeMem(&$cena,$n)
{
	$r=array();
	for ($i = 0; $i<=$n; $i++)
		$r[$i]=-2147483648;
	secenjeMemPom($cena,$n,$r);
		printf("Najveca moguca vrednost secenjem sipke je %d (memoizacija).",$r[$n]);
}
function secenjeDin(&$cena,$n)
{
	$pom[0]=0;
	 for ($i=1; $i<=$n; $i++)
   {
       $max_vr =-2147483648;
       for ($j=0; $j < $i; $j++)
        $max_vr = max($max_vr, $cena[$j] +$pom[$i-$j-1]);

       $pom[$i] = $max_vr;
   		
   }
   printf("Najveca moguca vrednost secenjem sipke je %d (dinamicko).",$pom[$n]);
}
function rastuci(&$niz,$n)
{
	$d;
	for($i=0;$i<$n;$i++)
		$d[$i]=1;

	for($i=1;$i<$n;$i++)
		for($j=0;$j<$i;$j++)
			if($niz[$j]<$niz[$i])
				$d[$i]=max($d[$i],$d[$j]+1);
	printf("Za niz:");
	echo nl2br("\n");
	for($i=0;$i<$n;$i++)
		echo $niz[$i]." ";
	echo nl2br("\n");
	printf("Maksimalan rastuci niz je duzine %d.",max($d));
}




function duzinaZajPodstr($string1,$string2)
{
		$str1;
		$str2;
		$dp=array(array());
		for($i=0;$i<=$n=strlen($string1);$i++)
		{
			$dp[$i][0]=0;
			if($i!=0)
				$str1[$i]=$string1[$i-1];
		}
		for($i=0;$i<=$m=strlen($string2);$i++)
			{
				$dp[0][$i]=0;
				if($i!=0)
					$str2[$i]=$string2[$i-1];
			}
		
		for($i=1;$i<=$n;$i++)
		{	for($j=1;$j<=$m;$j++)
			{
				if($str1[$i]==$str2[$j])
					$dp[$i][$j]=($dp[$i-1][$j-1])+1;
				else
					$dp[$i][$j]=max($dp[$i-1][$j],$dp[$i][$j-1]);
			}
		}
		printf("Maksimalan podstring stringova '%s' i '%s' je duzine %d",$string1,$string2,$dp[$n][$m]);
		echo nl2br("\n");
	
}

function problemRanca(&$zapremina,&$cena,$n,$k)
{
	
	for($i=0;$i<=$k;$i++)
			$dp[0][$i]=0;
	for($i=0;$i<=$n;$i++)
			$dp[$i][0]=0;
		
		for($i=1;$i<=$n;$i++)
			for($j=1;$j<=$k;$j++)
			{
				if($j<$zapremina[$i])
				$dp[$i][$j]=$dp[$i-1][$j];
				else
				$dp[$i][$j]=max($dp[$i-1][$j],$dp[$i-1][$j-$zapremina[$i]]+$cena[$i]);
			}
		printf("Najveca moguca vrednost u rancu je %d.",$dp[$n][$k]);
}
function redKarte(&$t,&$p,$n)
{
	$d[0]=0;
	$d[1]=$t[1];
	for($i=2;$i<=$n;$i++)
		$d[$i]=min($d[$i-1]+$t[$i],$d[$i-2]+$p[$i-1]);

		printf("Najmanje potrebno vreme je %d.",$d[$n]);
}
function polindrom($str)
{
	$dp[][]=array(array());
	$m=strlen($str);
        for($i=0; $i<$m; $i++)
            $dp[$i][$i] = 1;
     for($l=2; $l<=$m; $l++)
     {
            for($i = 0; $i <$m-$l+1; $i++)
            {
                $j = $i+$l-1;
                if($l==2 && $str[$i]==$str[$j])
                    $dp[$i][$j]=2;
                else if($str[$i]==$str[$j])
                    $dp[$i][$j]=$dp[$i + 1][$j-1] + 2;
                else
                    $dp[$i][$j]=max($dp[$i+1][$j], $dp[$i][$j-1]);
            }
    
	}
	 printf("Duzina polindromskog datog '%s' je %d.",$str,$dp[0][$m-1]);
	 echo nl2br("\n");
}
?>