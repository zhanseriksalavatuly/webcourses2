<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<title>Добавить курс</title>

<style>
body {
    background:#0b0f19;
    color:white;
    font-family:Arial;
}

.container {
    max-width:700px;
    margin:auto;
    padding:40px 20px;
}

h2 {
    text-align:center;
}

form {
    background:#111827;
    padding:25px;
    border-radius:12px;
    border:1px solid #1f2937;
    margin-top:20px;
}

input, textarea {
    width:100%;
    padding:12px;
    margin:10px 0;
    border-radius:8px;
    border:1px solid #1f2937;
    background:#0b0f19;
    color:white;
    outline:none;
}

textarea {
    height:120px;
    resize:none;
}

button {
    width:100%;
    padding:12px;
    background:#2563eb;
    border:none;
    color:white;
    border-radius:8px;
    cursor:pointer;
    font-weight:bold;
}

button:hover {
    background:#1d4ed8;
}

.msg {
    text-align:center;
    margin-top:15px;
}
</style>
</br>
<a href="uploadkaz.php" style="color:#fff;margin:0 15px;">КАЗ</a>
<a href="upload.php" style="color:#fff;margin:0 15px;">РУС</a>
</head>
<body>

<div class="container">

<h2>📤 Добавить курс</h2>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="title" placeholder="Название курса" required>

<textarea name="description" placeholder="Описание курса"></textarea>

<input type="file" name="image" required>

<input type="file" name="video" required>

<button type="submit" name="upload">Загрузить курс</button>

</form>

<?php

if(isset($_POST['upload'])){

$title = $_POST['title'];
$description = $_POST['description'];

/* 📁 ПАПКА ЗАГРУЗКИ (ВАЖНО!) */
$folder = __DIR__ . "/uploads/";

/* создаём папку если нет */
if(!file_exists($folder)){
    mkdir($folder, 0777, true);
}

/* уникальные имена */
$imageName = time() . "_" . $_FILES['image']['name'];
$videoName = time() . "_" . $_FILES['video']['name'];

/* полный путь для сервера */
$imagePath = $folder . $imageName;
$videoPath = $folder . $videoName;

/* путь для базы данных */
$dbImage = "uploads/" . $imageName;
$dbVideo = "uploads/" . $videoName;

/* загрузка файлов */
if(move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)
&& move_uploaded_file($_FILES['video']['tmp_name'], $videoPath)){

$sql = "INSERT INTO courses(title,description,image,video)
VALUES('$title','$description','$dbImage','$dbVideo')";

if($conn->query($sql)){
    echo "<p class='msg' style='color:#22c55e;'>✅ Курс успешно добавлен</p>";
} else {
    echo "<p class='msg' style='color:red;'>❌ Ошибка базы данных</p>";
}

} else {
    echo "<p class='msg' style='color:red;'>❌ Ошибка загрузки файлов</p>";
}

}

?>

</div>

</body>
</html>