<?php
require_once('dbconnect.php');
require_once('function.php');


//answer.php
$question01 = $_POST['question01']; //ラジオボタンの内容を受け取る
$answer01 = $_POST['answer01'];   //hiddenで送られた正解を受け取る
$allResult = 0;
//結果の判定
if($question01 == $answer01){
    
    $allResult++;
	$result01 = "1問目は正解！";
}else{
	$result01 = "1問目は不正解･･･";
}

$question02 = $_POST['question02']; //ラジオボタンの内容を受け取る
$answer02 = $_POST['answer02'];   //hiddenで送られた正解を受け取る
//結果の判定
if($question02 == $answer02){
    $result02 = "2問目は正解！";
    $allResult++;
}else{
	$result02 = "2問目は不正解･･･";
}

$question03 = $_POST['question03']; //ラジオボタンの内容を受け取る
$answer03 = $_POST['answer03'];   //hiddenで送られた正解を受け取る
//結果の判定
if($question03 == $answer03){
    $result03 = "3問目は正解！";
    $allResult++;
}else{
	$result03 = "3問目は不正解･･･";
}
 
$question04 = $_POST['question04']; //ラジオボタンの内容を受け取る
$answer04 = $_POST['answer04'];   //hiddenで送られた正解を受け取る
//結果の判定
if($question04 == $answer04){
    $result04 = "4問目は正解！";
    $allResult++;
}else{
	$result04 = "4問目は不正解･･･";
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>簡易クイズプログラム - 結果</title>
</head>
<body>
 
<h2>クイズの結果</h2>
<?php
echo $result01 . '<br>';
echo $result02 . '<br>';
echo $result03 . '<br>';
echo $result04 . '<br>';
echo 'あなたの点数は' . $allResult . '点です！'; //if文で正解時に加点していく方式の採点

$nickname = $_POST['nickname'];
$stmt = $dbh->prepare('INSERT INTO homework (result,nickname) VALUES (?,?)');//result(result)から変更
$stmt->execute([$allResult, $nickname]);
//$stmt = $dbh->prepare('INSERT INTO homework (nickname) VALUES (?)');
//$stmt->execute([$nickname]);//?を変数に置き換えてSQLを実行
?>
<br>
<a href="view.php">これまでの結果履歴へ</a

 
</body>
</html>