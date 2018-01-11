<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ユーザ一覧</title>
        <?php echo Asset::css('bootstrap.css'); ?>
        <?php echo Asset::css('admin/admin.css'); ?>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                    </div>
                    <div id="menu" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="">ログイン名：<?php echo $loginid ?></a></li>
                            <li><a href="">前回ログイン時間：<?php echo $time ?></a></li>
                            <li><a href="login/logout" id="logout">ログアウト</a></li>
                        </ul>
                    </div>
                </div>
            </nav>>
        </header>
        <div class="container" id="main">
            <div class="row">
                <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ユーザ名</th>
                            <th scope="col">メールアドレス</th>
                            <th scope="col">性別</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo $user->name ?></td>
                                <td><?php echo $user->email ?></td>
                                <td><?php echo $user->gender_string ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
