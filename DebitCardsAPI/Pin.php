<?php
/**
 * DebitCardsAPI\Pin.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 03.04.2021
 * Time: 13:47
 *
 * Version: 0.0.1
 */

namespace DebitCardsAPI;


class Pin
{
    /**
     * Dummy function for checking functionality
     *
     * @param $id
     * @return string |null
     */
    public function get($id): ?string {
        return $id? "1234": null;
    }
}