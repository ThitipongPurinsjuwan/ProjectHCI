<?php if (!defined('BASEPATH')) exit('No direct script allowed');

class Buyday_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    // -------------- [ Login ] --------------------------



    //--------------- [ Collection Sellers ] --------------
    public function findOne_seller($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->getOne('sellers');
        $data = $this->mongo_db->row_array($result);
        return $data;
    }

    public function findAll_sellers($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('sellers');
        return $result;
    }

    public function insert_seller($data)
    {
        $insertId = $this->mongo_db->insert('sellers', $data);
        return $insertId;
    }
    //--------------- [ End Collection Sellers ] --------------






    //--------------- [ Collection Orders ] --------------
    public function findAll_Orders($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('orders');
        return $result;
    }

    public function findOne_Order($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->getOne('orders');
        $data = $this->mongo_db->row_array($result);
        return $data;
    }
    //--------------- [ End Collection Orders ] --------------


    //--------------- [ Collection Users ] --------------
    public function findAll_user($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('users');
        return $result;
    }

    public function findOne_user($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->getOne('users');
        $data = $this->mongo_db->row_array($result);
        return $data;
    }
    //--------------- [ End Collection Users ] --------------







    //--------------- [ Collection Orderdetail ] --------------
    public function findAll_Orderdetails($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('orderdetails');
        return $result;
    }

    //--------------- [ End Collection Orderdetail ] --------------






    //--------------- [ Collection Products ] --------------
    public function findOne_product($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->getOne('products');
        $data = $this->mongo_db->row_array($result);
        return $data;
    }

    public function findAll_products($condition = [])
    {
        if (sizeof($condition) > 0) {
            $this->mongo_db->where($condition);
        }
        $result = $this->mongo_db->get('products');
        return $result;
    }

    public function insert_product($data)
    {
        $insertId = $this->mongo_db->insert('products', $data);
        return $insertId;
    }
    public function find_max_product_id()
    {
        // 
        $result = $this->mongo_db->aggregate(
            'products',
            [
                [
                    '$sort' => [
                        'product_id' => -1
                    ]
                ], [
                    '$limit' => 1
                ]
            ],
            [
                'cursor' => [
                    'batchSize' => 0
                ]
            ]
        );
        $data = $this->mongo_db->row_array($result);
        return $data;
    }

    //--------------- [ End Collection Products ] --------------




}
