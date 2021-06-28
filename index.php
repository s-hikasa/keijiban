<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson02;host=localhost;","root","");
    $stmt=$pdo->query("select*from 4each_keijiban");

    ?>




    <img src="./4eachblog_logo.jpg" alt="" class="logo">
    <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>          
        </ul>
    </header>
    <main>
        <div class="contents">
            <h1>プログラミングに役立つ掲示板</h1>
            <div class="form">
                <h2>入力フォーム</h2>
                <form method="post" action="insert.php">
                    ハンドルネーム
                    <input type="text" name="handlename" class="name" size=35>
                    タイトル
                    <input type="text" name="title" class="title" size=35>
                    コメント
                    <textarea name="comments" class="comments" cols="50" rows="10"></textarea>
                    <input type="submit" value="投稿する" class="button">
                </form>
            </div>
            <?php
                while ( $row = $stmt -> fetch()){
                    echo "<div class='board'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='comment'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";
                }
            ?>
        </div>
        <div class="sidebar">
            <h2>人気の記事</h2>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h2>オススメリンク</h2>
            <ul>
                 <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
             </ul>
             <h2>カテゴリ</h2>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </main>
    <footer>
        <p>copylight © internous|4each blog the which provides A to Z about programming.</p>
    </footer>

</body>
</html>   