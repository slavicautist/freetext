<?php

function hlava($title, $styl) {
echo '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>';
echo $title;
echo '</title><link rel="stylesheet" href="';
echo $styl;
echo '" type="text/css"><link rel="shortcut icon" href="favicon.ico"></head><body>';
}

function hlava_presmer($title, $styl, $kam, $kdy) {
echo '<!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>';
echo $title;
echo '</title><link rel="stylesheet" href="';
echo $styl;
echo '" type="text/css"><link rel="shortcut icon" href="favicon.ico"><meta http-equiv="refresh" content="';
echo $kdy;
echo ';url=';
echo $kam;
echo '"></head><body>';
}

function pata() {
echo '</body></html>';
}

function nacti_data($jmeno) {
$vstup = $_POST["$jmeno"];
$vystup = htmlentities($vstup);
return $vystup;
}

function zprava_chybova($co) {
echo '<script>function jdiZpet() {    window.history.back(); }</script><br><br><br><br><table border="0" width="100%" class="cent"><tr valign="top"><td class="left" width="25%"></td><td class="main" height="200" align="left" valign="top"><center><br><br>';
echo $co;
echo '<br><br><button onclick="jdiZpet()">OK</button><br><br></center><td class="right" width="25%"></td></tr></table></body></html>';
die;
}

function ne_prazdne($polozka) {
echo '<script>function jdiZpet() {    window.history.back(); }</script><br><br><br><br><table border="0" width="100%" class="cent"><tr valign="top"><td class="left" width="25%"></td><td class="main" height="200" align="left" valign="top"><center><br><br>The field ';
echo $polozka;
echo ' must not be empty.<br><br><button onclick="jdiZpet()">OK</button><br><br></center><td class="right" width="25%"></td></tr></table></body></html>';
die;
}

function zprava($co, $kam) {
echo '<span id="horek"></span><br><br><br><br><table border="0" width="100%" class="cent"><tr valign="top"><td class="left" width="25%"></td><td class="main" height="200" align="left" valign="top"><center><br><br>';
echo $co;
echo '<form action="';
echo $kam;
echo '" method="POST"><br><input type="submit" value="OK"></form><br><br></center><td class="right" width="25%"></td></tr></table></body></html>';
die;
}

function ziskej_cas() {
$t = time();
$cas = date(" H:i:s ", $t);
return $cas;
}

function ziskej_datum() {
$t = time();
$datum = date(" d.m.Y ", $t);
return $datum;
}

function ziskej_den() {
$t = time();
$day = date("N", $t);
if ($day == 1)
{
$day = "Monday  ";
}
if ($day == 2)
{
$day = "Tuesday  ";
}
if ($day == 3)
{
$day = "Wednesday  ";
}
if ($day == 4)
{
$day = "Thursday  ";
}
if ($day == 5)
{
$day = "Friday  ";
}
if ($day == 6)
{
$day = "Saturday  ";
}
if ($day == 7)
{
$day = "Sunday  ";
}
return $day;
}

function html_radky($msg) {
$vystup = nl2br($msg);
return $vystup;
}

function odkazy($msg) {
$msg = preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%\!_+.,~#?&;//=]+)!i', '<a href="$1" target="_blank">$1</a>', $msg);
$msg = preg_replace('/\(\<a href\=\"(.*)\)"\ target\=\"\_blank\">(.*)\)\<\/a>/i', '(<a href="$1" target="_blank">$2</a>)', $msg);
$msg = preg_replace('/\<a href\=\"(.*)\."\ target\=\"\_blank\">(.*)\.\<\/a>/i', '<a href="$1" target="_blank">$2</a>.', $msg);
$msg = preg_replace('/\<a href\=\"(.*)\,"\ target\=\"\_blank\">(.*)\,\<\/a>/i', '<a href="$1" target="_blank">$2</a>,', $msg);
return $msg;
}

function html_format($msg) {
$msg = odkazy($msg);
$msg = html_radky($msg);
return $msg;
}

function pocitani_plus($file, $howmany) {
if ($howmany == "") {
$howmany = 1;
 }
$opcount = fopen($file, "r+");
$pc = fgets($opcount);
$pc = trim($pc);
$pc = $pc + $howmany;
$opctwo = fopen($file, "w+");
fwrite($opctwo, $pc);
fclose($opctwo);
$cislopr = $pc;
return $pc;
fclose($opcount);
}

function nahrad_slovo($kde, $co, $cim) {
$vystup = preg_replace ("/$co/", $cim, $kde);
return $vystup;
}

function oznac($msg, $znaky, $trida) {
if (substr($msg, -1, 1) != "\n") {
$msg .= "\n";
}
$co = '/^(' . $znaky . '[^\>](.*))\n/m';
$cim = '<span class="' . $trida . '">\\1</span>' . "\n";
return preg_replace($co, $cim, $msg);
}

function odstavec_odkaz($msg, $znaky) {
$co = '!' . $znaky . '([0-9]+)!i';
$cim = '<a href="#$1">' . $znaky . '$1</a>';
$msg = preg_replace($co, $cim, $msg);
return $msg;
}

function zakoduj($trip, $salt) {
if ($salt == "") {
$salt = "salt";
}
$trip = $trip . $salt;
$trip = md5(md5($trip));
$trip = substr($trip, 2, 10);
return $trip;
}

function soubor_zapis($nazev, $co) {
$opdat = fopen($nazev, "a+");
fwrite($opdat, $co);
fclose($opdat);
}

function rekni($co) {
echo $co;
}

function vytvor_div($text, $klasa) {
return '<div class="'. $klasa . '">' . $text . '</div>';
}

function vytvor_span($text, $klasa) {
return '<span class="'. $klasa . '">' . $text . '</span>';
}

function cislo_odkaz($cislo) {
return '<a onclick="citujpost(' . $cislo . ')" id="' . $cislo . '">' . $cislo . '</a>';
}

$mezera1 = '&nbsp;';
$mezera2 = '&nbsp;&nbsp;';
$mezera3 = '&nbsp;&nbsp;&nbsp;&nbsp;';
$mezera4 = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

?>

