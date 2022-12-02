<html>
  <head><title>Delete an Item</title></head>
  <body>
    <h1>Delete an Item</h1>
    <form action='' method='post'>
      <label>Name:<input type='text' name='name' value='<?=$data->name ?>' disabled /></label><br />
      <input type='submit' name='action' value='Delete ' /> <a href='/'>Cancel</a>
    </form>
  </body>
</html> 