<?php
/**
 * DebitCardsAPI\Balance.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 03.04.2021
 * Time: 13:43
 *
 * Version: 0.0.1
 */

namespace DebitCardsAPI;



class Balance
{
    private $debit_cards;

    /**
     * Balance constructor.
     * @param $cards
     */
    public function __construct($cards) {
        $this->debit_cards = $cards;
    }

    /**
     * Dummy function for checking functionality
     *
     * @param $id
     * @return float|null
     */
    public function get($id): ?float {
        if (isset($id)) {
            return $this->debit_cards->card->get($id)["balance"];
        }
        return null;
    }
}