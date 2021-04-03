<?php
/**
 * DebitCardsAPI\Cards.php created by Intellij Idea
 *
 * User: Max Burlutsky <max.burlutsky@gmail.com>
 * Date: 02.04.2021
 * Time: 5:05
 *
 * Version: 0.0.3
 */

namespace DebitCardsAPI;


class Cards
{
    protected const KEYS_PARAM = [
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
    ];

    protected $params;
    protected $storage;

    private $debit_cards;

    /**
     * Cards constructor.
     * @param $cards
     */
    public function __construct($cards) {
        $this->debit_cards = $cards;
        $this->init_params();
        $this->init_storage();
    }

    /**
     * @param $id
     * @return array
     */
    public function get($id): array {
        $this->clear_current_params();
        $this->create_new_params($this->get_params_by_id($id));
        return $this->get_current_params();
    }

    /**
     * @param $params
     * @return array|null
     */
    public function create($params): ?array
    {
        if ($this->check_params($params)) {
            $this->clear_current_params();
            $this->create_new_params($params);
            $this->insert_to_storage();
            return $this->params;
        }
        return null;
    }

    /**
     * @param $id
     * @return array
     */
    public function deactivate($id): array {
        return $this->set_status(false, $id);
    }

    /**
     * @param $id
     * @return array
     */
    public function activate($id): array {
        return $this->set_status(true, $id);
    }

    /**
     * @param $id
     * @param $pin
     * @return array
     */
    public function update($id, $pin): array {
        return $this->set_pin($pin, $id);
    }

    /**
     * @param $id
     * @return array
     */
    public function load($id): array {
        $this->get($id);
        return $this->get_current_params();
    }

    /**
     * @param $pin
     * @param $id
     * @return array
     */
    private function set_pin($pin, $id): array {
        $this->get($id);
        if ($this->params->id === $id) {
            $this->params->pin = $pin;
            $this->update_store();
        }

        return $this->get_current_params();
    }

    /**
     * @param $status
     * @param $id
     * @return array
     */
    private function set_status($status, $id): array {
        $this->get($id);
        if ($this->params->id === $id) {
            $this->params->status = $status? true : false;
            $this->update_store();
        }

        return $this->get_current_params();
    }

    /**
     * @param $params
     */
    private function create_new_params($params) {
        foreach ($params as $key=>$value) {
            $this->params[$key] = $value;
        }
    }

    private function clear_current_params() {
        $this->params = [];
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
        return (isset($params["id"]) && isset($this->params["id"]) &&
            $this->params["id"] === $params["id"]);
    }

    /**
     * @param $params
     * @return bool
     */
    private function check_params_index($params): bool
    {
        foreach (self::KEYS_PARAM as $value) {
            if (!isset($params[$value])) {
                return false;
            }
        }
        return true;
    }

    private function get_current_params() {
        return $this->params;
    }

    private function get_params_by_id($id) {
        return $this->get_storage_by_id($id);
    }

    private function get_storage_by_id($id) {
        foreach ($this->storage as $value) {
            if (isset($value["id"]) && $value["id"] === $id) {
                return $value;
            }
        }
        $this->init_params();
        return $this->get_current_params();
    }

    private function insert_to_storage() {
        if ($this->check_uni_id($this->params)) {
            $this->storage[] = $this->params;
        }
    }

    private function update_store() {
        foreach ($this->storage as $key=>$item) {
            if (isset($item["id"]) && $item["id"] == $this->params["id"]) {
                $this->storage[$key] = $this->get_current_params();
                break;
            }
        }
    }

    /**
     * Return false if the id of params is already in the storage array
     *
     * @param $params
     * @return bool
     */
    private function check_uni_id($params): bool {
        foreach ($this->storage as $item) {
            if (isset($item["id"]) && $item["id"] === $params["id"]) {
                return false;
            }
        }
        return true;
    }

    private function init_params() {
        $this->params = [
            "id" => null,
            "first_name" => null,
            "last_name" => null,
            "address" => null,
            "city" => null,
            "country_id" => null,
            "phone" => null,
            "currency" => null,
            "balance" => null,
            "pin" => null,
            "status" => null
        ];
    }

    private function init_storage() {
        $this->storage = array(
            [
                "id" => 1,
                "first_name" => "JOHN",
                "last_name" => "SILVER",
                "address" => "18 avenue, 65-12",
                "city" => "New-Amsterdam",
                "country_id" => "US",
                "phone" => "123 456 7890",
                "currency" => "USD",
                "balance" => 123456.789,
                "pin" => 1234,
                "status" => true
            ],
            [
                "id" => 2,
                "first_name" => "ADAM",
                "last_name" => "SMITH",
                "address" => "Derech HaAtsma'ut 41",
                "city" => "Haifa",
                "country_id" => "IL",
                "phone" => "054 321 9876",
                "currency" => "NIS",
                "balance" => 98765432.1,
                "pin" => 4321,
                "status" => true
            ]
        );
    }
}