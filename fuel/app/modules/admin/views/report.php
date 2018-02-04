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
    </head>
    <body>
        <div class="container" id="main">
            <div class="row">
                <h1>レポート</h1>
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">LOG</th>
                            <th scope="col">TIME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($response['hits']['hits'] as $row): ?>
                            <tr>
                                <td><?php echo $row['_source']['test_id']; ?></td>
                                <td><?php echo $row['_source']['test_log']; ?></td>
                                <td><?php echo $row['_source']['test_time']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </body>
</html>
