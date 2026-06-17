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
    background:#2563eb;
    color:white;
    font-weight:bold;
    cursor:pointer;
}

button:hover {
    background:#1d4ed8;
}

.msg {
    text-align:center;
    margin-top:15px;
}
</style>

<div class="container">

<h2>🔐 Вход</h2>
<p class="subtitle">Войдите в свой аккаунт</p>

<form method="POST">

<input type="text" name="username" placeholder="Логин" required>

<input type="password" name="password" placeholder="Пароль" required>

<button name="login">Войти</button>

</form>

<?php
if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$res = $conn->query("SELECT * FROM users WHERE username='$username'");
$user = $res->fetch_assoc();

if($user && password_verify($password, $user['password'])){
    $_SESSION['user'] = $user['username'];
    echo "<p class='msg' style='color:#22c55e;'>✅ Успешный вход</p>";
    echo "<script>setTimeout(()=>location.href='index.php',1000)</script>";
} else {
    echo "<p class='msg' style='color:#ef4444;'>❌ Неверный логин или пароль</p>";
}

}
?>

</div>

<?php include 'footer.php'; ?>