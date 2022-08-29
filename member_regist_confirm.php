

<html lang="ja">
  <head>
  <link rel="stylesheet" href="stylesheet_confirm.css">
  </head>
  <body>
    <main>
      <div class="container">
<h2>会員情報登録フォーム</h2>

<form action="member_regist_confirm2.php" method="post" >

<div  class="element_wrap"> 
  <label>氏名</lavel>
  <p> <?php echo $_POST['name_sei']; ?> <?php echo $_POST['name_mei']; ?> </p>
</div>
<div  class="element_wrap">
<label>性別 </label>
 <p> <?php echo $_POST['gender']; ?></p>
</div>
<div  class="element_wrap">
<label>住所 </label>
<p><?php echo $_POST['address_ken']; ?><?php echo $_POST['address']; ?></p>
</div>
<div  class="element_wrap">
<label>パスワード 　　セキュリティのため非表示</label>
<p><?php echo $_POST['password']; ?><p>
</div>
<div  class="element_wrap">
<label>メールアドレス </label> 
<p><?php echo $_POST['email']; ?></p>
</div>

<div class="form-group btn-wrapper">
<p><input class="btn btn-default"  type="submit" name="btn_submit" value="登録完了" /></p>
<p><input class="btn btn-default"  type="button" onclick=history.back() name="btn_back" value="前に戻る" /></p>
    
</div>
</form>
</main>
</body>
</html> 



<?php
  session_start();
  $mode = "input";
  if( isset($_POST['back'] ) && $_POST['back'] ){
  }else if( isset($_POST['confirm'] ) && $_POST['confirm'] ){
    $_SESSION['name']=$_POST['name'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['address']=$_POST['address'];
$_SESSION['password']=$_POST['password'];
$_SESSION['emall']=$_POST['emall'];
$mode="send"; }else{
$SESSION =array();
}
 


