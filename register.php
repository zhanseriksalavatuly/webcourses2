<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<style>
body {
    background:#0b0f19;
    color:white;
    font-family:Arial;
}

.container {
    max-width:400px;
    margin:auto;
    padding:60px 20px;
}

h2 {
    text-align:center;
    margin-bottom:10px;
}

.subtitle {
    text-align:center;
    color:#9ca3af;
    margin-bottom:25px;
}

form {
    background:#111827;
    padding:25px;
    border-radius:12px;
    border:1px solid #1f2937;
}

input {
    width:100%;
    padding:12px;
    margin:10px 0;
    border-radius:8px;
    border:1px solid #1f2937;
    background:#0b0f19;
    color:white;
    outline:none;
}

button {
    width:100%;
    padding:12px;
    border:none;
    border-radius:8px;
    background:#10b981;
    color:white;
    font-weight:bold;
    cursor:pointer;
}

button:hover {
    background:#059669;
}

.msg {
    text-align:center;
    margin-top:15px;
}
</style>

<div class="container">

<h2>📝 Регистрация</h2>
<p class="subtitle">Создайте новый аккаунт</p>

<form method="POST">

<input type="text" name="username" placeholder="Логин" required>

<input type="password" name="password" placeholder="Пароль" required>

<button name="register">Регистрация</button>

</form>

<?php
if(isset($_POST['register'])){

$u = $_POST['username'];
$p = password_hash($_POST['password'], PASSWORD_DEFAULT);

/* проверка есть ли такой логин */
$check = $conn->query("SELECT * FROM users WHERE username='$u'");

if($check->num_rows > 0){

    echo "<p class='msg' style='color:#ef4444;'>❌ Такой логин уже существует</p>";

}else{

    if($conn->query("INSERT INTO users(username,password) VALUES('$u','$p')")){

        echo "<p class='msg' style='color:#22c55e;'>✅ Регистрация успешна</p>";
        echo "<script>setTimeout(()=>location.href='login.php',1500)</script>";

    }else{

        echo "<p class='msg' style='color:#ef4444;'>❌ Ошибка регистрации</p>";

    }

}

}
?>

</div>

<?php include 'footer.php'; ?>