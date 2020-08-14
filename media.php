<?php

$num = 0;

for ($i = 1; $i<5 ;$i++) {
	($numx [$i]= readline("digite o $i º número positivo inteiro: "));	
	$num = $num + $numx[$i];
	if ($i == 4){
    $media = $num / $i;
    $media = number_format($media, 2, '.', '');
    echo  ("A Média dos números digitados é $media");
}
}