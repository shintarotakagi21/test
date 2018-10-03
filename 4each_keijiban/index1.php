<!doctype HTML>
<html lang="ja">
    
    <head>
    <meta charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
    
  
<body>
   
    

    
<img src="4eachblog_logo.jpg" class="logo" width="300px">


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

    <div class="leftside">
            <h1>入力フォーム</h1>
        <form method="post" action="insert1.php">
            <div>
                <label>ハンドルネーム</label>
                <br>
    <input type="text"name="handlename">
            </div>
            
            <div>
                <label>タイトル</label>    
            <br>
        <input type="text"name="title">
            </div>
            
            <div>
                <label>コメント</label>
        <br>
                <textarea cols="35" rows="7" name="comments"></textarea>
            </div>
            
            <div>
            <input type="submit" class="submit" value="投稿する">
            </div>
                
                </form>
   
     <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson1;host=localhost;","root","mysql");
    $stmt = $pdo->query("select*from 4each_keijiban");
    
    ?>
    
    <?php      
    while($row = $stmt->fetch()){
          
    echo "<div class='kiji'>";
        echo "<h3>".$row['title']."</h3>";
        echo "<div class='contents'>";
    echo $row['comments'];
    
            echo "<div class='handlename'>posted by".$row['handlename']." </div>";
        echo "</div>";
    echo "</div>";
    
          }
    ?>
     </div>
    
	<div class="rightside">　
		<h3>人気の記事</h3>
		<ul>
			<li>PHPオススメ本</li>
			<li>PHP　MyAdminの使い方</li>
			<li>いま人気のエディタTop5</li>
			<li>HTMLの基礎</li>
		</ul>

		<h3>オススメリンク</h3>
		<ul>
			<li>インターノウス株式会社</li>
			<li>XAMPPのダウンロード</li>
			<li>Eclipseのダウンロード</li>
			<li>Braketsのダウンロード</li>
		</ul>

		<h3>カテゴリ</h3>
		<ul>
			<li>HTML</li>
			<li>PHP</li>
			<li>MySQL</li>
			<li>JavaScript</li>
		</ul>
	</div>






<footer>
 	copyright internous | 4each blog is the one which provides A to Z about programming.
</footer>


    </body>
</html>