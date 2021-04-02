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


class Client
{
    const VERSION = "0.0.1";
    const AUTH_KEY = "AUTH_KEY";

    protected $auth_key;
    protected $common;
    protected $method_http;
    protected $query;
    protected $path;
    protected $url;
    protected $card;
    protected $country;

    public function __construct() {
        $this->common = new Common();

        $this->method_http = $this->common->stripslashes_array($_SERVER["REQUEST_METHOD"]);
        $this->query = $this->get_query();
        $this->auth_key = isset($this->query["AUTH_KEY"])? '.' . $this->query["AUTH_KEY"] : null;
        $this->url = $this->get_url();
        $this->path = $this->get_transformated_array($this->url);
        if ($this->path["cards"]) {
            $this->card = new Card();
        } else if ($this->path["countries"]) {
            $this->country = new Country();
        }
    }

    /**
     * Filtered request array.
     *
     * @return array|mixed
     */
    protected function get_query() {
        $query = [];
        if ($this->method_http === "POST") {
            $query = filter_input_array(INPUT_POST, FILTER_SANITIZE_ENCODED);
        } elseif ($this->method_http === "GET") {
            $query = filter_input_array(INPUT_GET, FILTER_SANITIZE_ENCODED);
        }
        return $query;
    }

    /**
     * Array parts of script url.
     *
     * @return array
     */
    protected function get_url() {
        return $this->common->stripslashes_array(
            explode("/", $_SERVER["PHP_SELF"])
        );
    }

    /**
     * Revert array [value] => index.
     *
     * @param $array
     * @return array
     */
    function get_transformated_array($array) {
        $out = [];
        foreach ($array as $key=>$value) {
            if ("index.php" !== $value && "" !== $value) {
                echo "[$key] = $value<br>";
                $out[$value] = $key;
            }
        }
        return $out;
    }

    /**
     * Authorization flag.
     *
     * @return bool
     */
    protected function is_authorize() {
        return (self::AUTH_KEY === $this->auth_key);
    }
}