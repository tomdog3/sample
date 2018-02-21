<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>レポート</title>
        <?php echo Asset::css('bootstrap.css'); ?>
        <?php echo Asset::css('admin/admin.css'); ?>
        <!-- morris -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.js"></script>
    </head>
    <body>
        <div class="container" id="main">
            <div class="row">
                <h1>レポート</h1>
                <!-- タブの切替部分 -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-target="#tab1" data-toggle="tab">テーブル</a></li>
                    <li><a href="#tab2" data-target="#tab2" data-toggle="tab">グラフ</a></li>
                </ul>
                <!-- タブのコンテンツ部分 -->
                <div class="tab-content">
                    <?php
                        echo Form::open('admin/report/search');
                        $select = array(
                            'null' => '<条件選択>',
                            'id' => 'ログ番号',
                            'response_name' => '対応者',
                            'question_name' => '質問者',
                            'inquiry' => '問合内容',
                            'response_time' => '返答日時',
                        );
                        echo Form::select('search_type', null, $select);
                        echo Form::input('search_text', '', array('size' => 20));
                        echo Form::submit('submit', '検索', array('class' => 'btn btn-primary'));
                        echo Form::close();
                        ?>
                    <div class="tab-pane active" id="tab1">
                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">ログ番号</th>
                                    <th scope="col">対応者</th>
                                    <th scope="col">質問者</th>
                                    <th scope="col">問合内容</th>
                                    <th scope="col">返答日時</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (isset($response['hits']['hits'])) : ?>
                                    <?php foreach ($response['hits']['hits'] as $row): ?>
                                        <tr>
                                            <td><?php echo $row['_source']['id']; ?></td>
                                            <td><?php echo $row['_source']['response_name']; ?></td>
                                            <td><?php echo $row['_source']['question_name']; ?></td>
                                            <td><?php echo $row['_source']['inquiry']; ?></td>
                                            <td><?php echo $row['_source']['response_time']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <!-- アクセス日時、日付ごとの件数を取得 -->
                        <?php if (isset($response['aggregations'])) : ?>
                            <?php
                            $arry = array();
                            if (isset($response['aggregations'])) {
                                for ($i = 0; $i < count($response['aggregations']['by_date']['buckets']); $i++) {
                                    $arry[$i] = array('year' => $response['aggregations']['by_date']['buckets'][$i]['key_as_string'], 'value' => $response['aggregations']['by_date']['buckets'][$i]['doc_count']);
                                }
                                $json = json_encode($arry);
                            }
                            ?>
                        <?php endif; ?>

                        <!-- グラフ表示 -->
                        <div id="myfirstchart" style="height: 250px;"></div>
                        <script>
                            var json = <?php if (isset($json)) echo $json; ?>;
                        </script>
                        <?php echo Asset::js('admin/admin.js'); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
