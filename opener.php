<?php 
$window_name = "opener";
$message = "window.openから表示されています";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $message = "送信から表示されています";
}

?>
<!DOCTYPE html>
<html>
<head>
<title>HTML input Test</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">

</head>
<body>
<h1 class="alert alert-primary"><?= $message ?></h1>
<div id="main">

  <input
    type="button"
    value="opener ウインドウの背景色を変更"
    onclick='<?= $window_name ?>.document.body.style.backgroundColor="#c0c0c0";window.focus();'
    class="btn btn-secondary ms-4">

</div>

</body>
</html>