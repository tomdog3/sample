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
        <?php echo Asset::css('admin/admin.css'); ?>
        <title>ログイン</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>ログイン</h1>
                <div id="errmsg">
                    <?php echo \Session::get_flash('errMsg', ''); ?>
                </div>

                <?php echo Form::open('admin/login/login'); ?>
                <table class="table">
                    <tr>
                        <td><?php echo Form::label('ログインID：', 'loginid'); ?></td>
                        <td><?php echo Form::input('loginid', '', array('size' => 30)); ?></td>
                    </tr>
                    <tr>
                        <td><?php echo Form::label('パスワード：', 'password'); ?></td>
                        <td><?php echo Form::input('password', '', array('type' => 'password', 'size' => 30)); ?></td>
                    </tr>

                </table>
                <?php
                echo Form::submit('submit', 'ログイン', array('class' => 'btn btn-primary'));
                echo Form::close();
                ?>
            </div>
        </div>
    </body>
</html>
