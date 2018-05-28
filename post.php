<?php

require("slon.php");

hlava('Freetext', 'styl2.css');

$name = nacti_data('name');
$trip = nacti_data('trip');
$subject = nacti_data('subject');
$msg = nacti_data('msg');
$typtext = nacti_data('typtext');
$jakost = nacti_data('smajl');

if ($msg == "") {
ne_prazdne('Message');
} 

if($name == "")
{
$name = "Anonymous";
}

if($subject == "")
{
$subject = "-";
}

$msg = odkazy($msg);

$den = ziskej_den();
$datum = ziskej_datum();
$cas = ziskej_cas();
$srvcas = $den . $datum . $cas;

$cislopr = pocitani_plus("count.txt", 1);

$msg = nahrad_slovo($msg , 'fuck', 'fug');

$msg = oznac($msg, '&gt;&quot;' , 'zeltext');
$msg = oznac($msg, '&gt;\*' , 'spoiler');

$msg = odstavec_odkaz($msg, '&gt;&gt;');

$msg = html_radky($msg);

if ($trip != "") {
$trip = zakoduj($trip, 'salt');
$trip = '#' . $trip;
$trip = vytvor_span($trip, 'tripcode');
}
if ($trip == "") {
$trip = " ";
}

$hcomzacat = '<!--Message start ' . $cislopr . '-->';
$hcomkonec = '<!--Message end ' . $cislopr . '-->';

$cislopr = cislo_odkaz($cislopr);

$name = vytvor_span($name, 'jmeno');
$subject = vytvor_span($subject, 'predmet');
$srvcas = vytvor_span($srvcas, 'cas');

$lajna = $cislopr . $mezera3 . $name . $mezera2 . $trip . $mezera3 . $subject . $mezera4 . $srvcas;
$lajna = vytvor_div($lajna, 'pruh');

if ($typtext == "nor") {
$msg = vytvor_span($msg, 'klastext');
}

if ($typtext == "mon") {
$msg = vytvor_span($msg, 'monotext');
}

$post = $hcomzacat . $lajna . $msg;

soubor_zapis('data.php', $post);


$lajnadva = " ";
if ($jakost == "a") {

}
if ($jakost == "b") {
$lajnadva = "&nbsp;o.o";
}
if ($jakost == "c") {
$lajnadva = "&nbsp;:P";
}
if ($jakost == "d") {
$lajnadva = "&nbsp;:3";
}
if ($jakost == "e") {
$lajnadva = "&nbsp;&lt;3";
}
if ($jakost == "f") {
$lajnadva = "&nbsp;._.";
}
if ($jakost == "g") {
$lajnadva = "&nbsp;:(";
}
if ($jakost == "h") {
$lajnadva = "&nbsp;:&lt;";
}

if ($jakost == "a") {

}
elseif ($jakost == "b") {
$lajnadva = vytvor_div($lajnadva, "zero");
}
elseif ($jakost == "c") {
$lajnadva = vytvor_div($lajnadva, "one");
}
elseif ($jakost == "d") {
$lajnadva = vytvor_div($lajnadva, "two");
}
elseif ($jakost == "e") {
$lajnadva = vytvor_div($lajnadva, "three");
}
elseif ($jakost == "f") {
$lajnadva = vytvor_div($lajnadva, "mone");
}
elseif ($jakost == "g") {
$lajnadva = vytvor_div($lajnadva, "mtwo");
}
elseif ($jakost == "h") {
$lajnadva = vytvor_div($lajnadva, "mthree");
}

$lajnadva = $lajnadva . '<br />' . $hcomkonec;

soubor_zapis('data.php', $lajnadva);

zprava('The message has been saved.', 'index.php');
pata();

?>
