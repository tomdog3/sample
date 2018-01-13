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
        <title>会員登録</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h1>会員登録フォーム</h1>
                <?php
                echo Form::open('user/register/submit');
                ?>
                <table class="table">
                    <tbody>
                        <tr>
                            <td><?php echo Form::label('名前', 'user_name'); ?></td>
                            <td><?php echo Form::input('name', '', array('size' => 40)); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo Form::label('メールアドレス', 'email'); ?></td>
                            <td><?php echo Form::input('email', '', array('type' => 'email', 'size' => 40)); ?></td>
                        </tr>
                        <tr>
                            <td><?php echo '性別'; ?></td>
                            <td>
                                <?php
                                echo Form::label('男性', 'gender_male');
                                echo Form::radio('gender', '1', array('checked' => 'checked', 'id' => 'form_gender_male'));
                                echo Form::label('女性', 'gender_female');
                                echo Form::radio('gender', '2', array('id' => 'form_gender_male'));
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo '本人確認書類'; ?></td>
                            <td><?php echo Form::file('upload', array('id' => 'inputFile')); ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php
                echo Form::submit('submit', '送信', array('class' => 'btn btn-primary'));
                echo Form::close();
                ?>
            </div>
        </div>
    </body>
</html>
