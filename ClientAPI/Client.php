<?php
/**
 * ClientAPI\Client.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 02.04.2021
 * Time: 0:27
 *
 * Version: 0.0.1
 */

namespace ClientAPI;


use Exception;
use DebitCardsAPI\DebitCards;

class Client
{
    protected $auth_key;
    protected $common;
    protected $method_http;
    protected $query;

    protected $debit_card;


    /**
     * Client constructor.
     *
     * @throws Exception
     */
    public function __construct() {
        $this->common = new Common();
        $this->method_http = $this->common->get_request_method();
        $this->query = $this->get_query();
        $this->auth_key = isset($this->query["AUTH_KEY"])? '.' . $this->query["AUTH_KEY"] : null;
        $this->debit_card = new DebitCards($this->auth_key);
        if (!$this->debit_card) {
            throw new Exception ("Authorization key error");
        }
    }

    /**
     * Filtered request array.
     *
     * @return array|mixed
     */
    protected function get_query(): array {
        $query = [];
        if ($this->method_http === "POST") {
            $query = filter_input_array(INPUT_POST, FILTER_SANITIZE_ENCODED);
        } elseif ($this->method_http === "GET") {
            $query = filter_input_array(INPUT_GET, FILTER_SANITIZE_ENCODED);
        }
        return $query;
    }

    /**
     * @return string|null
     */
    public function get_auth_key(): string {
        return $this->auth_key;
    }

    /**
     * @return string|null
     */
    public function get_method(): string {
        return $this->method_http;
    }
}