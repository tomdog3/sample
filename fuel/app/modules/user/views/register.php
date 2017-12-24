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
        <h1>会員登録フォーム</h1>
        <?php
            echo Form::open('user/register/submit');
            echo Form::label('名前', 'user_name');
            echo Form::input('name', '', array('size'=>20));
            echo '<br/>';
            
            echo Form::label('メールアドレス', 'email');
            echo Form::input('email', '', array('type'=>'email', 'size'=>40));
            echo '<br/>';
            
            echo Form::label('男性', 'gender_male');
            echo Form::radio('gender', '1', array('checked'=>'checked', 'id'=>'form_gender_male'));
            echo Form::label('女性', 'gender_female');
            echo Form::radio('gender', '2', array('id'=>'form_gender_male'));
            
            echo '<br/>';
            echo '本人確認書類';
            echo Form::file('upload', array('id'=>'inputFile'));
            
            echo '<br/>';
            echo Form::submit('submit', '送信', array('class'=>'btn btn-primary'));
            echo Form::close();
        ?>
        </div>
    </body>
</html>
