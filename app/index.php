<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPサンプル</title>
</head>
<body>
    <?php
    if(isset($_POST["comment"])) {
        $comment = htmlspecialchars($_POST["comment"]);
        print("あなたのコメントは「${comment}」です。");
    } else {
    ?>
        <p>コメントしてください。</p>
        <form method="POST" action="index.php">
            <input name="comment" />
            <input type="submit" value="送信" />
        </form>
    <?php
    }
    ?>
    <?php
    if(isset($_POST["name"])) {
        $name = htmlspecialchars($_POST["name"]);
        print("あなたの名前は「${name}」です。");
    } else {
    ?>
        <p>名前を入力してください。</p>
        <form method="POST" action="index.php">
            <input name="name" />
            <input type="submit" value="送信" />
        </form>
    <?php
    }
    ?>
</body>
</html>
