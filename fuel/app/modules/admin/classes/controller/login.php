<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Admin;

/**
 * Description of test
 *
 * @author tomdog
 */
class Controller_Login extends \Controller {

    function action_index() {
        return \Response::forge(\View::forge('login'));
    }

    function action_login() {
        // ログイン処理
        $loginid = \Input::post('loginid', null);
        $password = \Input::post('password', null);
        if ($loginid !== null && $password !== null) {
            // ログイン認証を行う
            $auth = \Auth::instance();
            if ($auth->login($loginid, $password)) {
                $lasttime = \Session::get('lasttime');
                if ($lasttime === null) {
                    \Session::set("lasttime", date("Y-m-d H:i:s"));
                }
                // ログイン成功
                \Response::redirect('admin/userlist');
            }
        }
        \Response::redirect('admin/login');
    }

    function action_logout() {
        \Auth::logout();
        \Response::redirect('admin/login');
    }
}
