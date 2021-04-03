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
    /**
     * Dummy function for checking functionality
     *
     * @param $id
     * @return int|null
     */
    public function get($id): ?int {
        return isset($id)? 1000 : null;
    }
}