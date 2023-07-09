<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$questions = $_POST["questions"];

//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$questions;
//File書き込み
$file = fopen("data/data.txt","a"); // ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>
<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>
<ul>
<li><a href="read.php">データを見る</a></li>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>
