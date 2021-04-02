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


use Exception;

class Card
{
    const VERSION = "0.0.2";

    protected $common;
    protected $method_http;
    protected $query;
    protected $URI;

    private $params;
    /**
     * @var Common
     */
    private $client;


    /**
     * Card constructor.
     * @param null $id
     * @throws Exception
     */
    public function __construct($id = null) {
        $this->common = new Common();
        try {
            $this->client = new Client();
            $this->method_http = $this->common->get_request_method();
            $this->params = [];
            if ($id) {

            } else if ($create) {

            } else {
                throw new Exception ("Unknown request");
            }
        } catch (Exception $err) {
            throw new Exception ($err);
        }
    }

    /**
     * @param $id
     */
    protected function set_id($id) {
        $this->params["id"] = $id;
    }

    /**
     * @return null
     */
    public function get_id() {
        // $dc_api->card->id($id);
        return $this->params->id? $this->params->id : null;
    }

    /**
     * @param $balance
     */
    protected function set_balance($balance) {
        $this->params["balance"] = $balance;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function get_balance($id) {
        // $dc_api->balance->get($id);
        return $this->params->balance;
    }

    /**
     * @param $pin
     */
    protected function set_pin($pin) {
        // $dc_api->pin->update($id);
        $this->params["pin"] = $pin;
    }

    /**
     * @return mixed
     */
    public function get_pin() {
        // $dc_api->pin->get($id);
        return $this->params->pin;
    }

    /**
     * @param $event
     */
    protected function set_history($event) {
        // $dc_api->history->add($id);
        if (!isset($this->params["history"])) {
            $this->params["history"] = [];
        }
        $this->params["history"][] = $event;
    }

    /**
     * @return mixed
     */
    public function get_history() {
        // $dc_api->history->get($id);
        return $this->params->history;
    }

    /**
     * @param $params
     * @return mixed
     */
    public function create($params) {
        // $dc_api->card->create($params);
        return $this->params->history;
    }

    /**
     * @return mixed
     */
    public function get_activate() {
        // $dc_api->card->id($id);
        return $this->params->activate;
    }

    /**
     * @param $deactivate
     */
    protected function set_deactivate($deactivate) {
        $this->params["activate"] = false;
    }

    /**
     * @param $activate
     */
    protected function set_activate($activate) {
        $this->params["activate"] = true;
    }

    /**
     * @return mixed
     */
    public function load($id) {
        // $dc_api->card->load($id);
    }
}