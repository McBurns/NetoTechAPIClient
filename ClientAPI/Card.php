<?php
/**
 * ClientAPI\Card.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 01.04.2021
 * Time: 23:20
 *
 * Version: 0.0.2
 */

namespace ClientAPI;


use DebitCardsAPI\DebitCards;
use Exception;

class Card
{
    protected const CARD_KEYS = array(
            "id",
            "first_name",
            "last_name",
            "address",
            "city",
            "country_id",
            "phone",
            "currency",
            "balance",
            "pin",
            "status"
    );

    protected $params;

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
     * @return array
     */
    public function get($id): array {
        if ($this->client->get_method() === "GET") {
            return $this->api->card->get($id);
        }
        return $this->params;
    }

    /**
     * $route['cards/(:any)/balance'] = 'card/get_balance/$1';
     *
     * @param $id
     * @return float|null
     */
    public function get_balance($id): ?float {
        if ($this->client->get_method() === "GET") {
            return $this->api->balance->get($id);
        }
        return $this->params["balance"];
    }

    /**
     * $route['cards/(:any)/pin'] = 'card/get_pin/$1';
     *
     * @param $id
     * @return string|null
     */
    public function get_pin($id): ?string {
        if ($this->client->get_method() === "GET") {
            return $this->api->pin->get($id);
        }
        return $this->params["pin"];
    }

    /**
     * $route['cards/(:any)/history'] = 'card/get_history/$1';
     *
     * @param $id
     * @return array
     */
    public function get_history($id): array {
        if ($this->client->get_method() === "GET") {
            return $this->api->history->get($id);
        }
        return [];
    }

    /**
     * $route['cards/create'] = 'card/create';
     *
     * @param $params
     * @return array
     */
    public function create($params): array {
        if ($this->client->get_method() === "POST") {
            return $this->api->card->create($params);
        }
        return [];
    }

    /**
     * $route['cards/:id/deactivate'] = 'card/deactivate';
     *
     * @param $id
     * @return array
     */
    public function deactivate($id): array {
        if ($this->client->get_method() === "POST") {
            return $this->api->card->deactivate($id);
        }
        return [];
    }

    /**
     * $route['cards/:id/activate'] = 'card/activate';
     *
     * @param $id
     * @return array
     */
    public function activate($id): array {
        if ($this->client->get_method() === "POST") {
            return $this->api->card->activate($id);
        }
        return [];
    }

    /**
     * $route['cards/:id/update'] = 'card/update/$1';
     *
     * @param $id
     * @return array
     */
    public function update($id): array {
        // TODO where is new pin value?
        $this->params->pin = "1234";
        if ($this->client->get_method() === "POST") {
            return $this->api->card->update($this->params->pin, $id);
        }
        return $this->params;
    }

    /**
     * $route['cards/:id/load'] = 'card/load/$1';
     *
     * @param $id
     * @return array
     */
    public function load($id): array {
        if ($this->client->get_method() === "POST") {
            return $this->api->card->load($id);
        }
        return $this->params;
    }

    /**
     * Resetting parameters
     */
    private function init_params() {
        $this->params = [];
        foreach (self::CARD_KEYS as $value) {
            $this->params[$value] = $value === 'history'? [] : null;
        }
    }
}