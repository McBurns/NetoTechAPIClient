<?php
/**
 * ClientAPI\Card.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 01.04.2021
 * Time: 23:20
 *
 * Version: 0.0.3
 */

namespace ClientAPI;


use DebitCardsAPI\DebitCards;
use Exception;

class Card
{
    private $id;
    private $first_name;
    private $last_name;
    private $address;
    private $city;
    private $country_id;
    private $phone;
    private $currency;
    private $balance;
    private $pin;
    private $status;

    /**
     * @var Client
     */
    private $client;
    /**
     * @var DebitCards
     */
    private $api;


    /**
     * Card constructor.
     *
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
     * $route['cards/(:any)'] = 'card/get/$1';
     *
     * @param $id
     */
    public function get($id) {
        $params = [];
        if ($this->client->get_method() === "GET") {
            $params = $this->api->card->get($id);
            $this->set_params($params);
        }
        echo $this->client->request($params);
    }

    /**
     * $route['cards/(:any)/balance'] = 'card/get_balance/$1';
     *
     * @param $id
     */
    public function get_balance($id) {
        if ($this->client->get_method() === "GET") {
            $this->balance = $this->api->balance->get($id);
        }
        echo $this->client->request(["balance"=>$this->balance]);
    }

    /**
     * $route['cards/(:any)/pin'] = 'card/get_pin/$1';
     *
     * @param $id
     */
    public function get_pin($id) {
        if ($this->client->get_method() === "GET") {
            $this->pin = $this->api->pin->get($id);
        }
        echo $this->client->request(["pin"=>$this->pin]);
    }

    /**
     * $route['cards/(:any)/history'] = 'card/get_history/$1';
     *
     * @param $id
     */
    public function get_history($id) {
        $history = [];
        if ($this->client->get_method() === "GET") {
            $history = $this->api->history->get($id);
        }
        echo $this->client->request($history);
    }

    /**
     * $route['cards/create'] = 'card/create';
     *
     * @param $params
     */
    public function create($params) {
        $card = [];
        if ($this->client->get_method() === "POST") {
            $card = $this->api->card->create($params);
        }
        echo $this->client->request($card);
    }

    /**
     * $route['cards/:id/deactivate'] = 'card/deactivate';
     *
     * @param $id
     */
    public function deactivate($id) {
        if ($this->client->get_method() === "POST") {
            $this->api->card->deactivate($id);
        }
        echo $this->client->request(["status"=>"deactivated"]);
    }

    /**
     * $route['cards/:id/activate'] = 'card/activate';
     *
     * @param $id
     */
    public function activate($id) {
        if ($this->client->get_method() === "POST") {
            $this->api->card->activate($id);
        }
        echo $this->client->request(["status"=>"activated"]);
    }

    /**
     * $route['cards/:id/update'] = 'card/update/$1';
     *
     * @param $id
     */
    public function update($id) {
        $response = [];
        $this->pin = $this->client->get_query()["pin"];
        if ($this->client->get_method() === "POST") {
            $response = $this->api->card->update($this->pin, $id);
        }
        echo $this->client->request($response);
    }

    /**
     * $route['cards/:id/load'] = 'card/load/$1';
     *
     * @param $id
     */
    public function load($id) {
        $response = [];
        if ($this->client->get_method() === "POST") {
            $response = $this->api->card->load($id);
        }
        echo $this->client->request($response);
    }

    /**
     * Set params from $data array
     *
     * @param $data
     */
    private function set_params($data) {
        $this->init_params();
        foreach ($data as $key=>$value) {
            $this[$key] = $value;
        }
    }

    /**
     * Reset parameters
     */
    private function init_params() {
        $this->id = null;
        $this->first_name = null;
        $this->last_name = null;
        $this->address = null;
        $this->city = null;
        $this->country_id = null;
        $this->phone = null;
        $this->currency = null;
        $this->balance = null;
        $this->pin = null;
        $this->status = null;
    }
}