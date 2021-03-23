<?php namespace app;

ini_set('display_errors',1); error_reporting(-1);

use timohin\QuadricEql as QuadEql;
use timohin\MyLog as ML;

require_once("vendor/autoload.php");

try{
    ML::log('Program version: '.file_get_contents(__DIR__.'/version'));
    echo "Enter 3 params a, b and с (eg: '1 0 -9'):\r\n";
    sscanf(rtrim(fgets(STDIN)), "%d %d %d",$a,$b,$c);
    ML::log("Solving: {$a}x^2".($b >=0 ?' + '.$b:' - '.(-$b)).'x'.($c >=0 ?' + '.$c:' - '.(-$c)).' =  0');
    $eq1=new QuadEql();
    $lstr='';
    $res=$eq1->solve($a,$b,$c);
    foreach($res as $k=>$v){
        $lstr.='x'.($k+1)." = $v; ";
    }
    ML::log(rtrim($lstr));
}catch(\Exception | \Error $e){
    ML::log($e->getMessage());
}
ML::write();
?>