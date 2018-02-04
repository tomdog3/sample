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

        $client = \Elasticsearch\ClientBuilder::create()
                ->setHosts(["localhost:9200"])
                ->build();

        $params = [
            'index' => 'test_index',
            'type' => 'test_type',
        ];

        $response = $client->search($params);
//        $doc = $response['hits']['hits'][0]['_source'];
        $data = array();
        $data['response'] = $response;
        return \Response::forge(\View::forge('report', $data));
    }

}
