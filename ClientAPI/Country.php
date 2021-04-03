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
    protected $params;

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
            $this->client = new Client();
            $this->api = new DebitCards($this->client->get_auth_key());
        } catch (Exception $err) {
            throw new Exception ($err);
        }
    }

    /**
     * API request for all countries unknown.
     * Use countries->get without parameters.
     *
     * @return array|null
     */
    public function get_all_countries(): array {
        return $this->api->country->get();
    }

    /**
     * $route['countries/(:any)'] = 'country/get_country/$1';
     *
     * @param $id
     * @return array|null
     */
    public function get_country($id): array {
        return isset($id)? $this->api->country->get($id) : $this->get_all_countries();
    }
}