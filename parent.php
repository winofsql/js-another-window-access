<?php 
$window_name = "opener";
$message = "iframe.src にセットされて表示されています";

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
    value="parent ウインドウの背景色を変更"
    onclick='parent.document.getElementById("main").style.backgroundColor="#c0c0c0";'
    class="btn btn-secondary ms-4">

</div>

</body>
</html>