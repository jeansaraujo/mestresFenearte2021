<?php

$dir = scandir("imgs/mestres/menor");

$files = array();

foreach($dir as $d){
    if (!in_array($d, array(".", ".."))) {            
        array_push($files,$d);
    }
}

foreach($files as $f){
    $pos = strpos($f,"_");
    $nome=trim(strtolower(substr($f,0,$pos)));
    echo $nome."<br>";
    rename(
        "imgs/mestres/menor/".$f, //Origem
        "imgs/mestres/menor/lower/".$nome.".jpg" //Destino
    );
}




/*
$pos = strpos($info['filename'],"_");

echo $info['filename'];
echo "<br>";
echo $pos;
echo "<br>";
echo substr($info['filename'],0,$pos = strpos($info['filename'],"_")).".".$info['extension'];
*/

//var_dump($info);

//echo $dirs[1];


//$arq = scandir($dirs[0]);

//var_dump($arq);

//rename(
    //$dir1 . DIRECTORY_SEPARATOR . $filename, //Origem
    //$dir2 . DIRECTORY_SEPARATOR . $filename //Destino
//);

?>