<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>会員登録</title>
    </head>
    <body>
        <h1>会員登録フォーム</h1>
        <?php
            echo Form::open('register/submit');
            echo '名前';
            echo Form::input('user_name', '', array('size'=>20));
            echo '<br/>';
            
            echo 'メールアドレス';
            echo Form::input('email', '', array('type'=>'email', 'size'=>40));
            echo '<br/>';
            
            echo Form::label('男性', 'gender_male');
            echo Form::radio('gender', 'Male', array('checked'=>'checked', 'id'=>'form_gender_male'));
            echo Form::label('女性', 'gender_female');
            echo Form::radio('gender', 'Female', array('id'=>'form_gender_male'));
            
            echo Form::close();
        ?>
    </body>
</html>
