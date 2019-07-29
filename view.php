<?php
 
    require_once('function.php');
    require_once('dbconnect.php');

    //SQLを実行
    $stmt = $dbh->prepare('SELECT * FROM homework');
    $stmt->execute();
    $results = $stmt->fetchAll();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);


	
	$i = 0;
   
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>一覧</title>
    <style type="text/css">
        table, td, th {
            border: solid black 1px;
        }
        table {
            width: 200px;
        }
    </style>
</head>
<body>

<!-- //画面に表示する -->

<table>
<tr>
<th>プレイヤー名</th>
<th>点数</th>
</tr>
<?php foreach ($results as $result) {?>
<tr>
<td><?php echo h($result['nickname']); ?></td>
<td><?php echo h($result['result']); ?></td>
<?php } ?>
</tr>


</table>
</body>
</html>
