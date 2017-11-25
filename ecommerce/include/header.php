<?php
    $page_name = basename($_SERVER['PHP_SELF']);
    $useragent=$_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo (isset($title)? $title : 'Ecommerce') ?></title>
    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"-->
    <link rel="stylesheet" href="../_files/css/bootstrap.css">
    <link rel="stylesheet" href="../_files/css/ecommerce.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Ubuntu|Source+Sans+Pro:300,400,600|Roboto:300,500|Roboto+Slab|Montserrat:300,700|Oswald:400,500,600|Comfortaa:400,700" rel="stylesheet">
    
  </head>
  <body>
  