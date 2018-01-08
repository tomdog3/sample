<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin;

/**
 * Description of user
 *
 * @author tomdog
 */
class Presenter_User extends \Presenter {

    private $genders = array(0 => '未選択', 1 => '男性', 2 => '女性');

    public function view() {
        $users = \Model_User::find('all');
        array_walk($users, array($this, "_presentational"));
        $this->users = $users;
    }

    private function _presentational(&$data) {
        $data->gender_string = $this->genders[$data->gender];
    }

}
