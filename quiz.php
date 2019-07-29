<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
   header('Location: index.html');
}
require_once('dbconnect.php');
require_once('function.php');


$nickname = $_POST['nickname'];
if ($nickname == '') {
   $nickname_result = 'ニックネームが入力されていません。';
} else {
   $nickname_result = 'ようこそ、' . $nickname .'様';
}
echo h($nickname_result); 
echo '<br>'; 

//問題
$title = '梨の品種当てクイズ！';
?>


<?php
//$question01 = array(); //この変数は配列ですよという宣言
$question01 = array('豊水','20世紀梨','新高','幸水','愛宕'); 
$answer01 = $question01[3]; //正解の問題を設定

//$question02 = array(); //この変数は配列ですよという宣言
$question02 = array('豊水','20世紀梨','新高','幸水','愛宕'); 
$answer02 = $question02[1]; //正解の問題を設定

//$question03 = array(); //この変数は配列ですよという宣言
$question03 = array('豊水','20世紀梨','新高','幸水','愛宕'); 
$answer03 = $question03[0]; //正解の問題を設定

//$question04 = array(); //この変数は配列ですよという宣言
$question04 = array('豊水','20世紀梨','新高','幸水','愛宕'); 
$answer04 = $question04[2]; //正解の問題を設定



?>


<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>簡易クイズプログラム</title>
</head>
<body>

<h2><?php echo $title ?></h2>
<img src="assets/img/kousui.jpg">

<form method="POST" action="answer.php">
<?php foreach($question01 as $value){ ?>
   <input type="radio" name="question01" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
   <?php } ?>
   <input type="hidden" name="answer01" value="<?php echo $answer01 ?>">
   <br>
 
   <img src="assets/img/20seiki.jpg">
   <br>
<?php foreach($question02 as $value){ ?>
   <input type="radio" name="question02" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
   <?php } ?>
   <input type="hidden" name="answer02" value="<?php echo $answer02 ?>">
   

   <img src="assets/img/Housui.jpg">
   <br>
   <?php foreach($question03 as $value){ ?>
   <input type="radio" name="question03" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
   <?php } ?>
   <input type="hidden" name="answer03" value="<?php echo $answer03 ?>">

   <img src="assets/img/niitaka.jpg">
   <br>
   <?php foreach($question04 as $value){ ?>
   <input type="radio" name="question04" value="<?php echo $value; ?>" /> <?php echo $value; ?><br>
   <?php } ?>
   <input type="hidden" name="answer04" value="<?php echo $answer04 ?>">


   <form action="answer.php" method="post">
   <input type="hidden" name="nickname" value="<?php echo $nickname ?>">
   <input type="submit" value="回答する">

</form>

</body>
</html>
   