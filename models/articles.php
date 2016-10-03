<?php

function articlesAll()
{
  $art1 = ["id"=>1, "title"=>"Title1", "date"=>"2016-05-29", "content"=>"Content1"];
  $art2 = ["id"=>2, "title"=>"Title2", "date"=>"2016-05-30", "content"=>"Content2"];

  $arr[0] = $art1;
  $arr[1] = $art2;

  return $arr;
}

function articlesGet($id)
{
  return ["id"=>1, "title"=>"Это простой заголовок $id", "date"=>"2016-01-01", "content"=>"Здесь будет статья $id"];
}

function articlesNew($title, $date, $content)
{
  # Подготовка
  $title = trim($title);
  $content = trim($content);

  # Проверка
  if ($title == "") {
    return false;
  }
}

function articlesEdit($id, $title, $date, $content)
{
  # code...
}

function articlesDelete($id)
{
  # code...
}
