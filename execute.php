<?php
$path = '/home/travis/build/Cortiis/ProDocs/EasyLoaderHelp';

$objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $object){
    //echo "$name\n";
  $file = fopen("test.txt","w");
echo fwrite($file,$name);
fclose($file);
}
?>
