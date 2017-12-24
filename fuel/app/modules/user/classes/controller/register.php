<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace User;

/**
 * Description of register
 *
 * @author tomdog
 */
class Controller_Register extends \Controller 
{
    function action_index() {
        return \Response::forge(\View::forge('register'));
    }
    
    function action_submit() {
        $form = \Input::post();
        $user = \Model_User::forge();
        $user->set($form);
        $user->save();
        
        $args = array('title'=>'申込完了');
        return \Response::forge(\View::forge('success', $args));
    }
}
