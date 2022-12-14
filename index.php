<?php

include_once __DIR__ . './partials/header.php';
include_once __DIR__ . './partials/main.php';
include_once __DIR__ . './partials/footer.php';

include_once __DIR__ . "./Models/Cibo.php";
include_once __DIR__ . "./Models/Giochi.php";
include_once __DIR__ . "./Models/Cucce.php";

$gatto = new Categoria('Gatto', './img/il_1140xN.2551667376_ixj3.webp');
$cane = new Categoria('cane', './img/pngtree-dog-logo-design-vector-icon-png-image_1824202.jpg');
$cincillà = new Categoria('cincillà', './img/istockphoto-1201663447-612x612.jpg');

$cibo1 = new Cibo('Pellet oxbow', './img/29682_18_1024x1024.webp', 16.69, $cincillà, ['cose', 'cose2', 'cose3']);
$cibo2 = new Cibo('Fieno oxbow', './img/image_517c293c-a9dd-4182-8003-27894ac5457e_1024x1024.webp', 5.49, $cincillà, ['fieno']);
$cibo3 = new Cibo('Croccantini cane', './img/acana-dog-classic-prairie-poultry-11-4kg-pollo-tacchino-e-uova_35276.jpg', 29.99, $cane, ['cose', 'cose2', 'cose3']);
$cibo4 = new Cibo('Umido cane', './img/alivet-diabetic-selvaggina_464671.jpg', 4.59, $cane, ['cose', 'cose2', 'cose3']);
$cibo5 = new Cibo('RC gatto', './img/icon_topseller_1_2022_03_18t144634_822_5.jpg', 15.99, $gatto, ['cose', 'cose2', 'cose3']);
$cibo6 = new Cibo('Croccantini gatto', './img/royal-canin-v-diet-cat-urinary-s-o.webp', 7.49, $gatto, ['cose', 'cose2', 'cose3']);

$gioco1 = new Giochi('Osso', './img/osso-da-masticare-amazon.webp', 3.49, $cane, ['cose', 'cose2', 'cose3']);
$gioco2 = new Giochi('gioco gatto', './img/trixie-gatto-tiragraffi-mica-grigio.webp', 15.49, $gatto, ['cose', 'cose2', 'cose3']);
$gioco3 = new Giochi('gioco cincillà', './img/a65e87503db5f53778aec65fcb39d92e20ee7878_original.jpeg', 11.49, $cincillà, ['cose', 'cose2', 'cose3']);

$cuccia1 = new Cucce('Cuccia 1', './img/icon_topseller_1_57__9.jpg', 30.00, $cane, ['cose', 'cose2', 'cose3']);
$cuccia3 = new Cucce('Cuccia 2', './img/71rl+5OppBL._AC_SL1500_.jpg', 10.00, $gatto, ['cose', 'cose2', 'cose3']);
$cuccia2 = new Cucce('Cuccia 3', './img/Abete-profumato-naturale-fatto-a-mano-cincill-casa-in-legno-scoiattolo-gabbia-trampolino-pedale-coniglio-Totoro.jpg_Q90.jpg_.webp', 15.99, $cincillà, ['cose', 'cose2', 'cose3']);

var_dump($gatto);
var_dump($cane);
var_dump($cincillà);

var_dump($cibo1);
var_dump($cibo2);
var_dump($cibo3);
var_dump($cibo4);
var_dump($cibo5);
var_dump($cibo6);

var_dump($gioco1);
var_dump($gioco2);
var_dump($gioco3);

var_dump($cuccia1);
var_dump($cuccia2);
var_dump($cuccia3);
