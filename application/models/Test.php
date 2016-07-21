<?php
/**
 * Created by PhpStorm.
 * User: szl
 * Date: 16-7-19
 * Time: 下午2:50
 */
class TestModel {
    public function __construct() {
        $this->db    =  Yaf\Registry::get('db');
    }

    public function selectSample() {
       return $this->db->get_one("select * from new_table ");
    }

    public function insertSample($arrInfo) {
        return true;
    }
}