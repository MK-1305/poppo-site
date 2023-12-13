<?php
require('db_connect.php');

$db = db_connect();
    // productテーブルからidとnameを選択し、updated_atカラムを基準に降順でソートする
    $stmt = $db->prepare('select id, name from product order by updated_at desc');
    
    if (!$stmt) {
        die($db->error);
    }
    $success = $stmt->execute();
    if (!$success) {
        die($db->error);
    }

    $stmt->bind_result($id, $name);
    // whileでとってたら繰り返ししなくても表示される？
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
                    <dt>
                        <?php 
                        for($id=0; $id<=3; $id++) {
                            echo $id->$name();
                        }
                        ?>
                    </dt>
                    <dd><button class="button"><a href="new-release-edit.php?id=<?php echo $id; ?>"></a>編集する</button></dd>
                </dl>
            </form>
            </div>
        </div>
    </main>
</body>