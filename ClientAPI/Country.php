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

use DebitCardsAPI\DebitCards;
use Exception;

class Country
{
    protected $id;
    protected $code;
    protected $name;

    /**
     * @var Client
     */
    private $client;
    /**
     * @var DebitCards
     */
    private $api;

    /**
     * Country constructor.
     * @throws Exception
     */
    public function __construct() {
        try {
            $this->init_params();
            $this->client = new Client();
            $this->api = new DebitCards($this->client->get_auth_key());
        } catch (Exception $err) {
            throw new Exception ($err);
        }
    }

    /**
     * API request for all countries unknown.
     * Use countries->get without parameters.
     */
    public function get_all_countries(){
        $countries = [];
        if ($this->client->get_method() === "GET") {
            $countries = $this->api->country->get();
        }
        echo $this->client->request($countries);
    }

    /**
     * $route['countries/(:any)'] = 'country/get_country/$1';
     *
     * @param $id
     */
    public function get_country($id) {
        $country = [];
        if (isset($id)) {
            if ($this->client->get_method() === "GET") {
                $country = $this->api->country->get($id);
            }
            echo $this->client->request($country);
        } else {
            $this->get_all_countries();
        }
    }

    /**
     * Reset parameters
     */
    private function init_params() {
        $this->id = null;
        $this->code = null;
        $this->name = null;
    }
}