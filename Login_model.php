<?php
/**
 * Created by PhpStorm.
 * User: sun rise
 * Date: 3/27/2017
 * Time: 5:04 PM
 */
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function checkUser($data)
    {
        $st=$this->db->SELECT('*')->from('users')
                        ->WHERE('username',$data['username'])
                        ->WHERE('password',sha1(md5($data['password'])))
                        ->get()->result_array();
        if(count($st)>0)
        {
            return $st[0];
        }
        else
        {
            return false;
        }
    }
}