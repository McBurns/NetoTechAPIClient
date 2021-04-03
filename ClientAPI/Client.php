<?php
/**
 * ClientAPI\Client.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 02.04.2021
 * Time: 0:27
 *
 * Version: 0.0.2
 */

namespace ClientAPI;


use Exception;
use DebitCardsAPI\DebitCards;

class Client
{
    protected $auth_key;
    protected $method_http;
    protected $query;

    protected $debit_card;


    /**
     * Client constructor.
     *
     * @throws Exception
     */
    public function __construct() {
        $this->method_http = $this->get_request_method();
        $this->query = $this->init_query();
        $this->auth_key = isset($this->get_query()["AUTH_KEY"])? '.' . $this->get_query()["AUTH_KEY"] : null;
        $this->debit_card = new DebitCards($this->get_auth_key());
        if (!$this->debit_card) {
            throw new Exception ("Authorization key error");
        }
    }

    /**
     * Filtered request array.
     *
     * @return array|mixed
     */
    protected function init_query(): array {
        $query = [];
        if ($this->get_method() === "POST") {
            $query = filter_input_array(INPUT_POST, FILTER_SANITIZE_ENCODED);
        } elseif ($this->get_method() === "GET") {
            $query = filter_input_array(INPUT_GET, FILTER_SANITIZE_ENCODED);
        }
        return $query;
    }

    /**
     * @return array
     */
    public function get_query(): array {
        return $this->query;
    }

    /**
     * @return string|null
     */
    public function get_auth_key(): string {
        return $this->auth_key;
    }

    /**
     * @return string
     */
    function get_request_method(): string {
        return stripslashes($_SERVER["REQUEST_METHOD"]);
    }

    /**
     * @return string
     */
    public function get_method(): string {
        return $this->method_http;
    }

    /**
     * @param $data
     * @return string
     */
    public function request($data): string {
        $response = '[';
        foreach ($data as $key=>$value) {
            $response .= ($response === '[')? '' : ', ';
            $response .= '"' . $key . '"=>' . $value;
        }
        $response .= ']';

        return $response;
    }
}