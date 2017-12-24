<html>
    <head>
        <title>ビューのテスト</title>
    </head>
    <body>
        <?php foreach ($rows as $row): ?>
        <div style="background-color: #999">
            <?php echo $row['name']; ?>
        </div>
        <?php endforeach; ?>
    </body>
</html>