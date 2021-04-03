<?php

require_once __DIR__ . '/vendor/autoload.php';

use \ClientAPI\Card;
use \ClientAPI\Country;

$card = new Card();
$country = new Country();
echo "<h1>CARD methods</h1>";
echo "<hr><h2> [GET] /cards/1 get the card info </h2>";
$card->get(1);
echo "<hr><h2> [GET] /cards/2 get the card info </h2>";
$card->get(2);
echo "<hr><h2> [GET] /cards/1/balance gets the balance of the card </h2>";
$card->get_balance(1);
echo "<hr><h2> [GET] /cards/1/pin gets the pin code of the card </h2>";
$card->get_pin(1);
echo "<hr><h2> [GET] /cards/1/history get a list of transaction history, expects a timeframe
(end & start dates) </h2>";
$card->get_history(1);
echo "<hr><h2> [POST] /cards/create creates a new debit card </h2>";
$card->create([]);
echo "<hr><h2> [POST] /cards/1/deactivate deactivates a card </h2>";
$card->deactivate(1);
echo "<hr><h2> [POST] /cards/1/activate activates a card </h2>";
$card->activate(1);
echo "<hr><h2> [POST] /cards/1/update updates the pin of the card </h2>";
$card->update(1);
echo "<hr><h2> [POST] /cards/1/load loads card with a balance, expects to get the amount
to load as a parameter </h2>";
$card->load(1);


echo "<hr><h1>COUNTRY methods</h1>";
echo "<hr><h2> [GET] /countries/IL get a specific country </h2>";
$country->get_country('IL');
echo "<hr><h2> [GET] /countries a list of the available countries </h2>";
echo "<PRE>";
$country->get_all_countries();
echo "</PRE>";