<?php
/*Задание 3. 
В лофте n хипстерам достались m смузи. При этом все хипстеры - люди вежливые, и поэтому должны выпить одинаковое количество смузи (можно выбросить несколько). Напишите функцию результатом которой будет количество смузи, которое выпьет каждый хипстер.*/
function smuzForEveryone($countHip, $countSmuz) {
	$result = 0;
	if ($countHip == $countSmuz) {
		$result = $countSmuz / $countHip;
	}
	elseif ($countHip < $countSmuz) {
		$result =$countSmuz / $countHip;
	}
	return $result;
}
$n = 1;
$m =1;
$variable = smuzForEveryone($n,$m);
echo intval($variable);

?>