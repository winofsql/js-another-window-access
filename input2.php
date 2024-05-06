<?php 
$window_name = "win_open";

?>
<!DOCTYPE html>
<html>
<head>
<title>HTML input Test</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">

</head>
<body>
<h1 class="alert alert-primary"><a href=".">window.open 内からアクセス</a></h1>
<div id="main">
<form
  method="post"
  target="<?= $window_name ?>"
  action="opener.php"
  class="m-3"
  onsubmit=';document.body.style.backgroundColor="#ffffff"'>

  <input
    type="button"
    value="window を開く"
    onclick='<?= $window_name ?> = window.open("opener.php","<?= $window_name ?>","width=500,height=150,left=100,top=300");document.body.style.backgroundColor="#ffffff"'
    class="btn btn-primary">
  <input 
    type="submit"
    value="window 内に送信"
    id="send_button"
    name="send"
    class="btn btn-primary ms-4">


</form>
</div>
</body>
</html>