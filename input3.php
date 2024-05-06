<?php 
$view_head_height = 150

?>
<!DOCTYPE html>
<html>
<head>
<title>HTML input Test</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">

<?php require_once("iframe-css.php") ?>

</head>
<body>
<div id="main">
<h1 class="alert alert-primary"><a href=".">IFRAME 内にアクセス</a></h1>
  <form
    method="post"
    target="myframe"
    action="form-action.php"
    class="m-3">

    <input
      type="button"
      value="IFRAME を開く"
      onclick='iframe.src = "sample.html";iframe.style.display = "block"'
      class="btn btn-primary">
    <input
      type="button"
      value="背景色変更"
      onclick='iframe.contentWindow.document.body.style.backgroundColor="#000000";'
      class="btn btn-secondary ms-4">
  <input 
      type="submit"
      value="IFRAME 内に送信"
      id="send_button"
      name="send"
      class="btn btn-primary ms-4">
    <input
      type="button"
      value="背景色変更"
      onclick='iframe.contentWindow.document.body.style.backgroundColor="#c0c0c0";'
      class="btn btn-secondary ms-4">
  </form>
</div>

<iframe id="extend" src="about:blank" name="myframe" style='display:none'></iframe>

<script>
var iframe = document.getElementById("extend");
</script>

</body>
</html>