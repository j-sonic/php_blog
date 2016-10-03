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
      <p><a href="/admin">Панель администратора</a></p>
      <div>
        <?php foreach ($articles as $article) { ?>
          <div class="article">
            <h3><a href="article.php?id=<?=$article['id']?>"><?=$article['title']?></a></h3>
            <em>Опубликовано: <?=$article["date"]?></em>
            <p><?=$article["content"]?></p>
          </div>
        <?php } ?>
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

