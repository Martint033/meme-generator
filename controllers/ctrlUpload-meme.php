<?php
_POST;

$test = base64_decode($_POST['save']);
$file = uniqid().".png";
file_put_contents($file,$test);


// if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
//   $imageData = $GLOBALS['HTTP_RAW_POST_DATA'];
//   $filteredData = substr($imageData, strpos($imageData, ",") + 1);
//   $unencodedData = base64_decode($filteredData);
//   $fp = fopen('/path/to/file.png', 'wb');
//     var_dump($imageData);
//   fwrite($fp, $unencodedData);
//   fclose($fp);
// }



  
//header('Location: /meme-generator/edit-meme/'.$nom."&".$idImg); 