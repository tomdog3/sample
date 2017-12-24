<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Controller_Test extends Controller {
    
    public function action_index() {
            $data = array();
            $data['rows'] = Model_Test::find_all();
            return Response::forge(View::forge('test/list', $data));
    }
    
    public function action_auto_insert() {
        for ($i = 0; $i < 10; $i++) {
            $test = Model_Test::forge();
            
            $row = array();
            $row['name'] = $i . '人目のテストです。';
            
            $test->set($row);
            
            $test->save();
        }
        echo "処理終了!";
    }
}