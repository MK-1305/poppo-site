<?php
require('db_connect.php');

$db = db_connect();

    $stmt = $db=>prepare('select id, product_name from product order by updated_at desc');
    
    if (!$stmt) {
        die($db->error);
    }
    $success = $stmt->execute();
    if (!$success) {
        die($db->error);
    }

    $stmt->bind_result($id, $product_name);
    while ($stmt->fetch());
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
            <h2>New release</h2>
            <div class="content">
            <form action="new-release-update.php" method="post" enctype="multipart/form-data">
                <dl>
                    <dt><?php echo $product_name; ?></dt>
                    <dd><button class="button"><a href="new-release-edit.php?id=<?php echo $id; ?>"></a>編集する</button></dd>
                </dl>
            </form>
            </div>
        </div>
    </main>
</body>