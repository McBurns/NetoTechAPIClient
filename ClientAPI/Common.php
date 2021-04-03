<?php
/**
 * ClientAPI\Common.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 02.04.2021
 * Time: 0:01
 *
 * Version: 0.0.1
 */

namespace ClientAPI;


class Common
{
    /**
     * Return new array with slashed elements.
     *
     * @param $array
     * @return array
     */
    function stripslashes_array($array): array {
        return is_array($array) ?
            array_map('stripslashes_array', $array) : stripslashes($array);
    }

    /**
     * @return string
     */
    function get_request_method(): string {
        return stripslashes($_SERVER["REQUEST_METHOD"]);
    }
}