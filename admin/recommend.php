<?php

require('db_connect.php');

$db = dbconnect();

$stmt = $db->prepare('select id, image, name from recommend order by updated_at desc');

if (!$stmt) {
    die($db->error);
}

$success = $stmt->execute();
if (!$success) {
    die($db->error);
}

$stmt->bind_result($id, $image, $name);
while ($stmt->fetch());

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>recommend</title>
</head>
<body>
    <main class="new-release">
        <div class="new-release-content">
            <h2>Recommend</h2>
            <form action="recommend-update.php" method="post" enctype="multipart/form-data">
                <dl>
                    <dt><?php echo $name ?></dt>
                    <dd><img src="<?php echo $img_path; ?>" alt=""></dd>
                    <dd><button>編集する</button></dd>
                </dl>
                <dl>
                    <dt><?php echo $name ?></dt>
                    <dd><img src="<?php echo $img_path; ?>" alt=""></dd>
                    <dd><button>編集する</button></dd>
                </dl>
                <dl>
                    <dt><?php echo $name ?></dt>
                    <dd><img src="<?php echo $img_path; ?>" alt=""></dd>
                    <dd><button>編集する</button></dd>
                </dl>
                <dl>
                    <dt><?php echo $name ?></dt>
                    <dd><img src="<?php echo $img_path; ?>" alt=""></dd>
                    <dd><button>編集する</button></dd>
                </dl>
                <dl>
                    <dt><?php echo $name ?></dt>
                    <dd><img src="<?php echo $img_path; ?>" alt=""></dd>
                    <dd><button>編集する</button></dd>
                </dl>
                <dl>
                    <dt><?php echo $name ?></dt>
                    <dd><img src="<?php echo $img_path; ?>" alt=""></dd>
                    <dd><button>編集する</button></dd>
                </dl>
                <dl>
                    <dt><?php echo $name ?></dt>
                    <dd><img src="<?php echo $img_path; ?>" alt=""></dd>
                    <dd><button>編集する</button></dd>
                </dl>
                <dl>
                    <dt><?php echo $name ?></dt>
                    <dd><img src="<?php echo $img_path; ?>" alt=""></dd>
                    <dd><button>編集する</button></dd>
                </dl>
                <dl>
                    <dt><?php echo $name ?></dt>
                    <dd><img src="<?php echo $img_path; ?>" alt=""></dd>
                    <dd><button>編集する</button></dd>
                </dl>
            </form>
        </div>
    </main>
</body>