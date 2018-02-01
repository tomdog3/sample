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
class Controller_Report extends \Controller {

    function action_index() {

        $esclient = \Elasticsearch\ClientBuilder::create()
                ->setHosts(["localhost:9200"])
                ->build();
//        $params = [
//            'index' => 'twitter',
//            'body' => [
//                'query' => [
//                    'match' => ['type' => 'user']
//                ],
//            ]
//        ];
        
        $params = [
            'index' => 'twitter',
            'type' => 'tweet',
//            'id' => '1'
        ];
        
        $response = $esclient->search($params);
        print_r($response);
//        $this->args = $response;
//        return \Response::forge(\View::forge('report', $this));
    }

}
