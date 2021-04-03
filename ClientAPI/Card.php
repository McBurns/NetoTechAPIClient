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
    const VERSION = "0.0.2";

    protected $query;
    protected $URI;

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
     * @return array|null
     */
    public function get($id): ?array {
        if ($this->client->get_method() === "GET") {
            return $this->api->card->get($id);
        }
        return null;
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
        return null;
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
        return null;
    }

    /**
     * $route['cards/(:any)/history'] = 'card/get_history/$1';
     *
     * @param $id
     * @return array|null
     */
    public function get_history($id): ?array {
        if ($this->client->get_method() === "GET") {
            return $this->api->history->get($id);
        }
        return null;
    }

    /**
     * $route['cards/create'] = 'card/create';
     *
     * @param $params
     * @return array|null
     */
    public function create($params): ?array {
        if ($this->client->get_method() === "POST") {
            return $this->api->card->create($params);
        }
        return null;
    }

    /**
     * $route['cards/:id/deactivate'] = 'card/deactivate';
     *
     * @param $id
     * @return array|null
     */
    public function deactivate($id): ?array {
        if ($this->client->get_method() === "POST") {
            return $this->api->card->deactivate($id);
        }
        return null;
    }

    /**
     * $route['cards/:id/activate'] = 'card/activate';
     *
     * @param $id
     * @return array|null
     */
    public function activate($id): ?array {
        if ($this->client->get_method() === "POST") {
            return $this->api->card->activate($id);
        }
        return null;
    }

    /**
     * $route['cards/:id/update'] = 'card/update/$1';
     *
     * @param $id
     * @return array|null
     */
    public function update($id): ?array {
        // TODO where is new pin value?
        $pin = "1234";
        if ($this->client->get_method() === "POST") {
            return $this->api->card->update($pin, $id);
        }
        return null;
    }

    /**
     * $route['cards/:id/load'] = 'card/load/$1';
     *
     * @param $id
     * @return array|null
     */
    public function load($id): ?array {
        if ($this->client->get_method() === "POST") {
            return $this->api->card->load($id);
        }
        return null;
    }
}