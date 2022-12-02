<html>
  <head><title>Детали</title></head>
  <body>
    <h1>Детали за книгата</h1>
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
<img src='/images/<?= (isset($data->filename)?$data->filename:'default.png') ?>' alt='$item->title'/>
    <?php
foreach($data->pictures as $picture) {
  echo "<img src='/images/$picture->filename' style ='max-width:100px' />";
  echo "<a href='/product/deletePicture/$picture->picture_id' style ='max-width:100px'>Избриши слика</a>";
echo "<a href='/product/defaultPicture/$picture->picture_id' style ='max-width:100px'>Стави ја default</a>";

}


    ?>
<a href='/product/index'>Назад до листата </a>
  </body>
</html> 