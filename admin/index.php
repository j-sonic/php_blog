<?php
  require_once '../database.php';
  require_once '../models/articles.php';

  // $link = db_connect();

  if (isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    $action = "";
  }

  if ($action == "add") {
    include '../views/article_admin.php';
  } else {
    $articles = articlesAll();
    include '../views/articles_admin.php';
  }


