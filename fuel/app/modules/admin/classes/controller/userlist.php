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
class Controller_Userlist extends \Controller {

    function action_index() {
//        $users = \Model_User::find('all');
//        $this->users = $users;
        return \Response::forge(\Presenter::forge('user'));
    }

}
