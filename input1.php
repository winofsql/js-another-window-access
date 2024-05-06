<?php 
$window_name = "win_open";

?>
<!DOCTYPE html>
<html>
<head>
<title>HTML input Test</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">

</head>
<body>
<h1 class="alert alert-primary"><a href=".">window.open 内にアクセス</a></h1>
<div id="main">
<form
  method="post"
  target="<?= $window_name ?>"
  action="form-action.php"
  class="m-3">

  <input
    type="button"
    value="window を開く"
    onclick='<?= $window_name ?> = window.open("sample.html","<?= $window_name ?>","width=800,height=550,left=100,top=300")'
    class="btn btn-primary">
  <input
    type="button"
    value="背景色変更"
    onclick='<?= $window_name ?>.document.body.style.backgroundColor="#000000";<?= $window_name ?>.focus();'
    class="btn btn-secondary ms-4">
<input 
    type="submit"
    value="window 内に送信"
    id="send_button"
    name="send"
    class="btn btn-primary ms-4">
  <input
    type="button"
    value="背景色変更"
    onclick='<?= $window_name ?>.document.body.style.backgroundColor="#c0c0c0";<?= $window_name ?>.focus();'
    class="btn btn-secondary ms-4">
</form>
</div>

</body>
</html>