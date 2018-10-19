<?php

//var_dump($argv);die;


$items_game_path = $argv[1];
$items_game_live_path = $argv[2];
$output_path = $argv[3];



require_once './vdfparser.inc.php';


$kv1 = VDFParse($items_game_path);
$kv_live = VDFParse($items_game_live_path);

$path = array();
$path2 = array();

// var_dump($kv_live);VDFWrite($kv_live, $output_path);die;


foreach ($kv_live[0] as $key => $value) {
	readKv($kv_live[0][$key], $key, $value);
}

VDFWrite($kv1, $output_path);


function readKv($kv, $key, $value){
	global $path;


	if (!is_array($kv)){
		if ($key===KEYTITLE){ //是key-title
			if ($value == "items_game_live"){
				$value = "items_game";
			}
			$path[] = $value;
		}
		else //是单个key-value
		{
			$path[] = $key;
			ReplaceArrayValue($path, $key, $value);
			array_pop($path);
		}

	} else {
		foreach ($kv as $key2 => $value2) {
			readKv($kv[$key2], $key2, $value2);
		}
		if (array_key_exists(KEYTITLE, $kv)){
			array_pop($path);
		}
	}
}

function ReplaceArrayValue($path, $key, $value){
	global $kv1;

	$tempkv = &$kv1;
	$lastkey = "0";

	for ($i=0; $i<count($path); $i++){
		print $path[$i]." -> ";

		foreach ($tempkv as $key2 => $value2) {
			if ($i != count($path) - 1){
				if (is_array($value2) && array_key_exists(KEYTITLE, $value2) && $value2[KEYTITLE]===$path[$i]){
					$tempkv = &$tempkv[$key2];
					break;
				}
			}
			else {
				if (is_array($value2) && array_key_exists($path[$i], $value2)){
					$tempkv = &$tempkv[$key2];
					break;
				}
			}
		}
	}

	//var_dump($tempkv);
	print "[".$tempkv[$key]." -> ".$value."]\n";
	$tempkv[$key] = $value;
	//return $tempkv[$key];
}
?>