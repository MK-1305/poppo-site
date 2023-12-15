<?php
require('db_connect.php');

$db = db_connect();

$stmt = $db->prepare('select * from product where id=?');
if (!$stmt) {
    die($db->error);
}
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$stmt->bind_param('i', $id);
$stmt->execute();

$stmt->bind_result($id, $name);
$result = $stmt->fetch();
if (!$result) {
    die('product指定できてないよ');
}

var_dump($product_name);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>new-release</title>
</head>
<body>
    <main class="new-release">
        <div class="new-release-content">
            <h2>New release edit</h2>
            <form action="new-release-update.php" method="post">
                <dl>
                    <dt>商品名</dt>
                    <dd><input type="hidden" name="id" value="<?php echo $id; ?>" ></dd>
                    <dd><input type="text" name="name" class="input" placeholder="<?php echo h($name)?>"></dd>
                </dl>
                <dl>
                    <dt>URL</dt>
                    <dd><input type="url" name="url" class="input"></dd>
                </dl>
            </form>
        </div>
    </main>
</body>