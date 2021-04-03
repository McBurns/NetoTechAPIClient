<?php
/**
 * DebitCardsAPI\History.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 03.04.2021
 * Time: 13:48
 *
 * Version: 0.0.1
 */

namespace DebitCardsAPI;


class History
{
    /**
     * Dummy function for checking functionality
     *
     * @param $id
     * @return array[]|null
     */
    public function get($id): ?array {
        return $id? ["history"=>[]] : null;
    }
}