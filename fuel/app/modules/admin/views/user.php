<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php echo Asset::css('bootstrap.css'); ?>
        <?php echo Asset::css('admin/admin.css'); ?>
    </head>
    <body>
        <table>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $user->name ?></td>
                    <td><?php echo $user->email ?></td>
                    <td><?php echo $user->gender_string ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
