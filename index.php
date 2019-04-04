<?php
/*
Author: Osman Çakmak
Skype: oxcakmak
Email: oxcakmak@hotmail.com
Website: http://oxcakmak.com/
Country: Turkey [TR]
*/

function convertString2Seflink($string){ $string = preg_replace('~[^\\pL\d]+~u', '-', $string); $string = trim($string, '-'); $string = strtolower($string); $string = preg_replace('~[^-\w]+~', '', $string); if (empty($string)){ return time(); } return $string; }
?>
