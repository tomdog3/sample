<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use PHPUnit\Framework\TestCase;

/**
 * Description of reporttest
 *
 * @author tomdog
 */
class Report_Test extends TestCase {
    public function testEquals() {
        $expected = 'bbbbbbb';

        $client = \Elasticsearch\ClientBuilder::create()
                ->setHosts(["localhost:9200"])
                ->build();

        $params = [
            'index' => 'test_index',
            'type' => 'test_type',
        ];

        $response = $client->search($params);
        $actual = $response['hits']['hits'][0]['_source']['test_log'];
        $this->assertEquals($expected, $actual);
    }
}
