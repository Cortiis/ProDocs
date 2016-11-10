<?php
$path = realpath('/EasyLoaderHelp');

$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $object){
    //echo "$name\n";
  $file = fopen("test.txt","w");
echo fwrite($file,$name\n");
fclose($file);
}
?>
