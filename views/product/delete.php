<html>
  <head><title>Избриши </title></head>
  <body>
    <h1>Избриши</h1>
    <dl>
      <dt>Наслов:</dt>
      <dd><?=$data->title ?></dd>
    </dl>
    <dl>
      <dt>Опис:</dt>
      <dd><?=$data->description ?></dd>
    </dl>
    <dl>
      <dt>Цена:</dt>
      <dd><?=$data->price ?></dd>
    </dl>
    <form action='' method='post'>
  
      <input type='submit' name='action' value='Избриши ' /> <a href='/product/delete'>Откажи</a>
    </form>
  </body>
</html> 