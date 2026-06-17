<?php include 'config.php'; if(!isset($_SESSION['user'])) header("Location: login.php"); ?>
<h1>Добро пожаловать, <?=$_SESSION['user']?></h1>
<a href="upload.php">Добавить курс</a>
<a href="search.php">Поиск курсов</a>
<a href="courses.php">Все курсы</a>
<a href="logout.php">Выйти</a>