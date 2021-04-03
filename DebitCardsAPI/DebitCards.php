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

    public $country;
    public $card;
    public $balance;
    public $pin;
    public $history;

    /**
     * DebitCards constructor.
     * @param $auth_key
     * @throws Exception
     */
    public function __construct($auth_key) {
        $this->auth_key = $auth_key;
        if (!$this->check_auth_key()) {
            throw new Exception ("Authorization key error");
        }
        $this->country = new Countries;
        $this->card = new Cards;
        $this->pin = new Pin;
        $this->history = new Cards;
    }

    /**
     * @return bool
     */
    private function check_auth_key(): bool {
        foreach (self::AUTH_KEY as $item) {
            if ($item === $this->auth_key) {
                return true;
            }
        }
        return false;
    }



}