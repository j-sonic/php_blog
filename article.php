<?php
  require_once 'database.php';
  require_once 'models/articles.php';


  $article = articlesGet($_GET['id']);

  include 'views/article.php';

