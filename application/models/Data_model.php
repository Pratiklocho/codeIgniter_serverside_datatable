<?php

/**
 * Created by PhpStorm.
 * User: pratiK
 * Date: 6/28/2017
 * Time: 6:39 PM
 */
class Data_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function query($sql)
    {
        $data = $this->db->query($sql);
        return $data->result_array();
    }
}
