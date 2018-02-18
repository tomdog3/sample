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

    public $defparams = [
        'index' => 'test_index',
        'type' => 'test_type',
        'body' => [
            'sort' => [
                'id' => [
                    'order' => 'asc'
                ]
            ],
            'aggs' => [
                'response_name' => [
                    'terms' => [
                        'field' => 'response_name',
                        'size' => 50
                    ]
                ],
            ]
        ]
    ];

    function action_index() {

        $client = \Elasticsearch\ClientBuilder::create()
                ->setHosts(["localhost:9200"])
                ->build();

        $params = $this->defparams;

        $response = $client->search($params);
        $data = array();
        $data['response'] = $response;
        return \Response::forge(\View::forge('report', $data));
    }

    function action_search() {
        $form = \Input::post();
        $search_type = \Arr::get($form, "search_type", null);
        $search_text = \Arr::get($form, "search_text", null);

        $client = \Elasticsearch\ClientBuilder::create()
                ->setHosts(["localhost:9200"])
                ->build();

        if ($search_text == null) {
            $params = $this->defparams;
        } else {
            $params = [
                'index' => 'test_index',
                'type' => 'test_type',
                'body' =>
                [
                    'query' => [
                        'match' => [
                            $search_type => $search_text
                        ]
                    ],
                    'sort' => [
                        'id' => [
                            'order' => 'asc'
                        ]
                    ],
                    'aggs' => [
                        'response_name' => [
                            'terms' => [
                                'field' => 'response_name',
                                'size' => 50
                            ]
                        ],
                        'my_upload_time_histogram' => [
                            'date_histogram' => [
                                'field' => 'response_time',
                                'interval' => '1M',
                                'format' => "yyyy-MM-dd"
                            ]
                        ]
                    ]
                ]
            ];
        }

        $response = $client->search($params);
        $data = array();
        $data['response'] = $response;
        return \Response::forge(\View::forge('report', $data));
    }

}
