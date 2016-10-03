<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <h1>Мой первый блог</h1>
      <hr>
      <p><a href="/admin/index.php?action=add">Добавить статью</a></p>
      <div>
        <table class="table table-hover table-bordered">
          <thead>
            <tr>
              <th>Дата</th>
              <th>Заголовок</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($articles as $article) { ?>
            <tr>
              <td><?=$article["date"]?></td>
              <td><?=$article["title"]?></td>
              <td><a href="index.php?action=edit&id=<?=$article["id"]?>">Редактировать</a></td>
              <td><a href="index.php?action=delete&id=<?=$article["id"]?>">Удалить</a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <p><a href="/index.php">Вернуться на главную</a></p>
      </div>
      <hr>
      <footer class="text-center">
        <p>Мой первый блог<br>Copyright &copy; 2016</p>
      </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>

