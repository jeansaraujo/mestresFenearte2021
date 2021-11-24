<?php

$dir = scandir("imgs/alameda");
$dest = scandir("imgs/mestres");

$dirs = array();

foreach($dir as $d){    
    if (!in_array($d, array(".", ".."))) {
        array_push($dirs,$d);        
    }
}

//var_dump($dirs);

//$files = array();


foreach($dirs as $arqs){    
    $files =scandir("imgs/alameda/$arqs");

    foreach($files as $f){
        if (!in_array($f, array(".", ".."))) {            
            rename("imgs/alameda/$arqs/".$f,
            "imgs/mestres/".$f
        );
        }        
    }
    

    //if (!in_array($arqs, array(".", ".."))) {
    //    array_push($ar)
    //}   
         
}
/*

 
var_dump($files);

$arqs= scandir("imgs/alameda/$dirs[1]");

$info = pathinfo($arqs[2]);

var_dump($info);

echo $info["extension"];

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