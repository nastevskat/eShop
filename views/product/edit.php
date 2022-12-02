<html>
  <head><title>Уреди</title></head>
  <body>
    <h1>Уреди книга</h1>
    <form action='' method='post'>
      <label>Наслов:<input type='text' name='name' value='<?=$data->title ?>' /></label><br />
      <label>Опис:<textarea name='description'><?=$data->description ?></textarea></label><br />
      <label>Цена:<input type='text' name='price' value='<?=$data->price ?>' /></label><br />
      <input type='submit' name='action' value='Зачувај ' /> <a href='/product/index'>Откажи</a>
    </form>
  </body>
</html> 