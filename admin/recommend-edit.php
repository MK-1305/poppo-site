<?php
require('db_connect.php');

$db = db_connect();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
}





?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>recommend-edit</title>
</head>
<body>
    <main class="new-release">
        <div class="new-release-content">
            <h2>Recommend edit</h2>
            <form action="recommend-update.php" method="post" enctype="multipart/form-data">
                <dl>
                    <dt>商品名</dt>
                    <dd><input type="text" name="product-name" class="input"></dd>
                </dl>
                <dl>
                    <dt>URL</dt>
                    <dd><input type="url" name="url" class="input"><dd>
                </dl>
                <dl>
                    <dt>商品画像</dt>
                    <dd class="file"><input type="file" name="image" required></dd>
                </dl>
            </form>
        </div>
    </main>
</body>