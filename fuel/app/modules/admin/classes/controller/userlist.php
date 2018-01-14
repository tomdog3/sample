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

        $errMsg = '';
        if (!\Auth::check()) {
            $errMsg = 'ログインしてください';
        }

        if ($errMsg != '') {
            \Session::set_flash('errMsg', $errMsg);
            \Session::set('httpReffrer', \Uri::current());
            \Response::redirect('admin/login', 'refresh', 200);
        }

        \Session::delete('httpReffrer');
        return \Response::forge(\Presenter::forge('user'));
    }

}
