<?php include 'header.php'; ?>
<style>
body{background:#0b0f19;color:white;font-family:Arial;}
.container{max-width:1000px;margin:auto;padding:40px;}
.card{background:#111827;padding:25px;border-radius:14px;margin-bottom:20px;border:1px solid #1f2937;}
pre{background:#000;padding:15px;border-radius:10px;}
button{padding:10px 15px;background:#2563eb;color:white;border:none;border-radius:8px;cursor:pointer;}
</style>

<div class="container">
<h1>⚡ JavaScript Pro</h1>

<div class="card">
<h2>Что такое JavaScript?</h2>
<p>JavaScript делает сайт интерактивным.</p>
</div>

<div class="card">
<h2>Базовые понятия</h2>
<p>Переменные, функции, события, DOM.</p>
</div>

<div class="card">
<h2>Пример</h2>
<pre>
let name = "Adilet";
alert(name);
</pre>
</div>

<div class="card">
<h2>Тест</h2>
<button onclick="show()">Нажми</button>
</div>

</div>

<script>
function show(){
alert("JavaScript работает 🚀");
}
</script>
<?php include 'footer.php'; ?>