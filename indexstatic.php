<?php
$data = array(
		array('sunny', 'warm', 'normal', 'strong', 'warm', 'same', 'yes'),
		array('sunny', 'warm', 'hight', 'strong', 'warm', 'same', 'yes'),
		array('rainy', 'cold', 'hight', 'strong', 'warm', 'change', 'no'),
		array('sunny', 'warm', 'hight', 'strong', 'cool', 'change', 'yes'),
		);

$temp=array('?', '?', '?', '?', '?', '?');

for($i=0; $i<4; $i++){
	if($data[$i][6]=='yes'){
		echo "hipotesa : ";
		for($j=0; $j<6; $j++){
			if($i==0){
				$temp[$j]=$data[$i][$j];
			}
			else{
				if($data[$i][$j]!=$temp[$j])
					$temp[$j]='?';
			}

			echo " ".$temp[$j];			
		}
	echo "<br>";
	}

}

$problem=array('sunny', 'warm', 'hight', 'strong', 'cool', 'same');
echo "masalah : ";

for($i=0;$i<6; $i++){
	echo $problem[$i]." ";
}

for($i=0;$i<6; $i++){
	if($problem[$i]!=$temp[$i])
		$problem[$i]='?';
}
$hasil=0;
for($i=0;$i<6; $i++){
	if($problem[$i]==$temp[$i])
		$hasil++;
}
echo "<br>hasil : ";
if($hasil==6)
	echo "yes";
else
	echo "no";

?>