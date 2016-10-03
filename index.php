<?php
  require_once 'database.php';
  require_once 'models/articles.php';


  $articles = articlesAll();

  include 'views/articles.php';
