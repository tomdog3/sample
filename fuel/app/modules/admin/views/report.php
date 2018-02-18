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
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.js"></script>
    </head>
    <body>
        <div class="container" id="main">
            <div class="row">
                <h1>レポート</h1>
                <?php
                echo Form::open('admin/report/search');
                $select = array(
                    'null'=>'条件選択',
                    'id'=>'ログ番号',
                    'response_name'=>'対応者',
                    'question_name'=>'質問者',
                    'inquiry'=>'問合内容',
                    'response_time'=>'返答時間',
                );
                echo Form::select('search_type', null, $select);
                echo Form::input('search_text', '', array('size' => 20));
                echo Form::submit('submit', '検索', array('class' => 'btn btn-primary'));
                echo Form::close();
                ?>
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
                        <?php foreach ($response['hits']['hits'] as $row): ?>
                            <tr>
                                <td><?php echo $row['_source']['id']; ?></td>
                                <td><?php echo $row['_source']['response_name']; ?></td>
                                <td><?php echo $row['_source']['question_name']; ?></td>
                                <td><?php echo $row['_source']['inquiry']; ?></td>
                                <td><?php echo $row['_source']['response_time']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <!-- morris.js動作確認 -->
            <div id="myfirstchart" style="height: 250px;"></div>
            <script>
                new Morris.Line({
                    // ID of the element in which to draw the chart.
                    element: 'myfirstchart',
                    // Chart data records -- each entry in this array corresponds to a point on
                    // the chart.
                    data: [
                        {year: '2008', value: 20},
                        {year: '2009', value: 10},
                        {year: '2010', value: 5},
                        {year: '2011', value: 5},
                        {year: '2012', value: 20}
                    ],
                    // The name of the data record attribute that contains x-values.
                    xkey: 'year',
                    // A list of names of data record attributes that contain y-values.
                    ykeys: ['value'],
                    // Labels for the ykeys -- will be displayed when you hover over the
                    // chart.
                    labels: ['Value']
                });
            </script>
        </div>
    </body>
</html>
