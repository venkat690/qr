<?php 

include('phpqrcode/qrlib.php');
$tempDir = 'images/'; 
$codeContents = 'venkat'; 
$fileName = '005_file_'.md5($codeContents).'.png'; 
 
$pngAbsoluteFilePath = $tempDir.$fileName; 
$urlRelativeFilePath = $tempDir.$fileName; 
 
// generating 
if (!file_exists($pngAbsoluteFilePath)) { 
    QRcode::png($codeContents, $pngAbsoluteFilePath);     
} else { 
    echo 'File already generated! We can use this cached file to speed up site on common codes!'; 
    echo '<hr />'; 
} 
 
echo 'Server PNG File: '.$pngAbsoluteFilePath; 
echo '<hr />'; 
 
// displaying 
echo '<img src="'.$urlRelativeFilePath.'" />'; 

?>