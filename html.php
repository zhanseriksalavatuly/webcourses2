<?php include 'header.php'; ?>

<style>
body{
background:#0b0f19;
color:white;
font-family:Arial;
}

.container{
max-width:1000px;
margin:auto;
padding:40px 20px;
}

.card{
background:#111827;
padding:25px;
border-radius:14px;
margin-bottom:20px;
border:1px solid #1f2937;
}

h1,h2{
margin-bottom:15px;
}

p{
color:#d1d5db;
line-height:1.7;
}

pre{
background:#000;
padding:15px;
border-radius:10px;
overflow:auto;
margin-top:10px;
}

.btn{
display:inline-block;
padding:10px 15px;
background:#2563eb;
color:white;
text-decoration:none;
border-radius:8px;
margin-top:10px;
}
</style>

<div class="container">

<h1>📘 HTML для начинающих</h1>

<div class="card">
<h2>Что такое HTML?</h2>
<p>
HTML (HyperText Markup Language) — язык разметки, который используется для создания структуры веб-страниц.
</p>
</div>

<div class="card">
<h2>Базовые понятия</h2>

<p>🔹 Теги — элементы страницы</p>
<p>🔹 Атрибуты — дополнительные настройки</p>
<p>🔹 Элементы — заголовки, абзацы, картинки</p>

</div>

<div class="card">
<h2>Пример HTML документа</h2>

<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Мой сайт&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h1&gt;Привет&lt;/h1&gt;
&lt;p&gt;Мой первый сайт&lt;/p&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>

</div>

<div class="card">
<h2>Основные теги</h2>

<p>📌 h1-h6 — заголовки</p>
<p>📌 p — абзац</p>
<p>📌 a — ссылка</p>
<p>📌 img — изображение</p>
<p>📌 div — блок</p>

</div>

<div class="card">
<h2>Мини тест</h2>

<p>Какой тег создаёт заголовок?</p>

<button onclick="check(true)">h1</button>
<button onclick="check(false)">img</button>
<button onclick="check(false)">p</button>

<p id="result"></p>

</div>

<a href="courses.php" class="btn">⬅ Назад к курсам</a>

</div>

<script>
function check(ans){
document.getElementById("result").innerHTML =
ans ? "✅ Верно!" : "❌ Неверно";
}
</script>

<?php include 'footer.php'; ?>