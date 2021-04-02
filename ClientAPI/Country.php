<?php
/**
 * ClientAPI\Country.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 02.04.2021
 * Time: 0:34
 *
 * Version: 0.0.1
 */

namespace ClientAPI;


class Country
{


    public function __construct() {

    }

    public function get_all_contries() {
        // $dc_api->countries->get();
        return self::COUNTRIES;
    }

    public function get_contry($id_country) {
        // $dc_api->countries->get($id);
        if (isset($id_country)) {
            foreach (self::COUNTRIES as $key=>$value) {
                if (isset($value["id"]) && $value["id"] === $id_country) {
                    return self::COUNTRIES[$key];
                }
            }
        }
        return $this->get_all_contries();
    }
}