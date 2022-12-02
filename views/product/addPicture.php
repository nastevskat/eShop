<html>
  <head><title>Слика</title></head>
  <body>
    <h1>Додади слика</h1>
<?php 
if(isset($data['error'])){
?>
<div class ="alert alert-danger" role="alert"><?= $data['error'] ?></div>
<?php
}
?>

    <form action='' method='post' enctype='multipart/form-data'>
      <label>Слика:<input type='file' name='newPicture' /></label><br />
      <label>Опис за сликата(опционално):<textarea name='description'></textarea></label><br />
      <input type='submit' name='action' value='Додади слика' /> <a href='/product/index'>Откажи</a>
    </form>
  </body>
</html> 