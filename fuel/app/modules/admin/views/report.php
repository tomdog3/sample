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
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($args as $arg): ?>
                            <tr>
<!--                                <td><?php echo $arg->name ?></td>
                                <td><?php echo $arg->email ?></td>
                                <td><?php echo $arg->gender_string ?></td>-->
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
