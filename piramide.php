<<?php 
echo "Hoeveel stapels wil je hebben?\n";

$stapels = rtrim(fgets(STDIN));
$i = 0;
if (is_numeric($stapels)){
	while ($i <= $stapels){
		echo str_repeat("*", $i);
		echo "\n";
		$i++;
	}
}
?>