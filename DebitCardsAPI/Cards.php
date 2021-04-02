<?php
/**
 * DebitCardsAPI\Cards.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 02.04.2021
 * Time: 5:05
 *
 * Version: 0.0.2
 */

namespace DebitCardsAPI;


class Cards
{
    protected $params;
    protected $story;

    public function __construct() {
        $this->params = [];
        $this->params["pin"] = new Pin();
        $this->params["balance"] = new Balance();
        $this->params["history"] = new History();
        $this->story = [];
    }

    /**
     * @param $id
     * @return mixed|null
     */
    public function get($id) {
        foreach ($this->story as $value) {
            if (isset($value["id"]) && $value["id"] === $id) {
                $this->params = $value;
                return $value;
            }
        }
        return null;
    }

    public function create($params): ?array
    {
        if ($this->check_params($params)) {
            $this->add_new_params($params);
            return $this->params;
        }

        return null;
    }

    /**
     * @param $params
     */
    private function add_new_params($params) {
        foreach ($params as $key=>$value) {
            if (!isset($this->params[$key])) {
                $this->params[$key] = $value;
            }
        }
    }

    private function add_new_card() {
//        $this->params["id"]
    }

    /**
     * @param $params
     * @return bool
     */
    private function check_params($params): bool
    {
        return $this->check_id($params) && $this->check_params_index($params);
    }

    /**
     * @param $params
     * @return bool
     */
    private function check_id($params): bool
    {
        return (isset($params["id"]) && isset($this->params["id"]) && $this->params["id"] === $params["id"]);
    }

    /**
     * @param $params
     * @return bool
     */
    private function check_params_index($params): bool
    {
        foreach ($this->params as $key=>$value) {
            if (!isset($params[$key]) || $value !== $params[$key]) {
                return false;
            }
        }
        return true;
    }
}

class Pin
{

}

class Balance
{

}

class History
{

}