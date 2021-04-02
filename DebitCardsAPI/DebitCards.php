<?php
/**
 * DebitCardsAPI\DebitCards.php created by Intellij Idea
 *
 * *********************************************** *
 * !!!Emulation API. Don't use in real projects!!! *
 * *********************************************** *
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 02.04.2021
 * Time: 4:30
 *
 * Version: 0.0.1
 */

namespace DebitCardsAPI;


use Exception;

class DebitCards
{
    private const AUTH_KEY = array("AUTH_KEY");

    protected $auth_key;

    public $countries;
    public $cards;

    /**
     * DebitCards constructor.
     * @param $auth_key
     * @throws Exception
     */
    public function __construct($auth_key) {
        $this->auth_key = $auth_key;
        if (self::AUTH_KEY !== $this->auth_key) {
            throw new Exception ("Authorization key error");
        }
        $this->countries = new Countries;
        $this->cards = new Cards;
    }



}