<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Admin;
/**
 * Description of showUserList
 *
 * @author tomdog
 */
class Controller_Userlist extends \Controller 
{
    function action_index() {
//        $users = \Model_User::find('all');
        $user = array('name' => '山田', 'email' => 'abc@yahoo.co.jp', 'gender' => 2);
        return \Response::forge(\View::forge('user'), $user);
    }
}
