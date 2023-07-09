<?php
session_start();

$file = fopen("data/data.txt", "r");  // ファイル読み込み
$data = [];
while(!feof($file)){
    $line = fgets($file);
    $data[] = explode(",", $line);
}
fclose($file);
?>

<html>
<head>
<meta charset="utf-8">
<title>データ一覧</title>
<style>
body {
    font-family: Arial, sans-serif;
}
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    border: 1px solid #ddd;
    padding: 8px;
}
th {
    background-color: #f2f2f2;
    color: black;
}
tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
</head>
<body>
<h1>登録データ一覧</h1>
<table>
<tr><th>登録時間</th><th>お名前</th><th>EMAIL</th><th>聞きたい問い</th></tr>
<?php foreach ($data as $row) { ?>
<tr>
    <?php foreach ($row as $item) { ?>
    <td><?= nl2br(htmlspecialchars($item)) ?></td>
    <?php } ?>
</tr>
<?php } ?>
</table>
</body>
</html>
