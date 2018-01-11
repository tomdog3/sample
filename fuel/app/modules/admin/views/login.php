<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php echo Asset::css('bootstrap.css'); ?>
        <title>ログイン</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>ログイン</h1>
                <?php if (isset($error)): ?>
                    <?php echo $error ?>
                <?php endif ?>
                <?php
                echo Form::open('admin/login/login');
                echo Form::label('ログインID：', 'login_id');
                echo Form::input('loginid', '', array('size' => 30));
                echo '<br/>';

                echo Form::label('パスワード：', 'password');
                echo Form::input('password', '', array('size' => 30));
                echo '<br/>';

                echo Form::submit('submit', 'ログイン', array('class' => 'btn btn-primary'));
                echo Form::close();
                ?>
            </div>
        </div>
    </body>
</html>
