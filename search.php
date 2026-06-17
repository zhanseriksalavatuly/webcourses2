<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<style>
body{
    background:#0b0f19;
    color:white;
    font-family:Arial;
}

.container{
    max-width:1200px;
    margin:auto;
    padding:40px 20px;
}

h2{
    text-align:center;
    margin-bottom:10px;
}

.subtitle{
    text-align:center;
    color:#9ca3af;
    margin-bottom:25px;
}

.search-box{
    display:flex;
    gap:10px;
    justify-content:center;
    margin-bottom:35px;
}

input{
    width:60%;
    padding:12px;
    border-radius:8px;
    border:1px solid #1f2937;
    background:#111827;
    color:white;
    outline:none;
}

button{
    padding:12px 18px;
    border:none;
    border-radius:8px;
    background:#2563eb;
    color:white;
    cursor:pointer;
    font-weight:bold;
}

button:hover{
    background:#1d4ed8;
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:22px;
}

.card{
    background:#111827;
    border:1px solid #1f2937;
    border-radius:14px;
    overflow:hidden;
    transition:0.3s;
}

.card:hover{
    transform:translateY(-6px);
    border-color:#2563eb;
}

.card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

.content{
    padding:18px;
}

h3{
    margin-bottom:10px;
}

.desc{
    color:#9ca3af;
    font-size:14px;
    line-height:1.6;
    min-height:75px;
}

.info{
    display:flex;
    justify-content:space-between;
    margin-top:15px;
    font-size:14px;
    color:#d1d5db;
}

.btn{
    display:block;
    margin-top:18px;
    text-align:center;
    background:#2563eb;
    padding:12px;
    border-radius:8px;
    color:white;
    text-decoration:none;
    font-weight:bold;
}

.btn:hover{
    background:#1d4ed8;
}

.empty{
    text-align:center;
    color:#9ca3af;
    width:100%;
}
</style>
</br>
<a href="searchkaz.php" style="color:#fff;margin:0 15px;">КАЗ</a>
<a href="search.php" style="color:#fff;margin:0 15px;">РУС</a>

<div class="container">

<h2>🔍 Поиск курсов</h2>
<p class="subtitle">Найди курс по названию</p>

<form method="GET" class="search-box">
<input type="text" name="q" placeholder="HTML, JavaScript, React..."
value="<?php echo isset($_GET['q']) ? $_GET['q'] : ''; ?>">
<button type="submit">Поиск</button>
</form>

<div class="grid">

<?php

$courses = [

[
"title"=>"HTML & CSS с нуля",
"desc"=>"Научись создавать современные адаптивные сайты. Верстка лендингов, Flexbox, Grid, анимации.",
"time"=>"12 часов",
"rate"=>"4.9",
"img"=>"https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80",
"link"=>"html.php"
],

[
"title"=>"JavaScript Pro",
"desc"=>"Изучи интерактивность сайта: DOM, события, формы, API, проекты и современные практики.",
"time"=>"18 часов",
"rate"=>"5.0",
"img"=>"https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=800&q=80",
"link"=>"js.php"
],

[
"title"=>"PHP + MySQL",
"desc"=>"Создание реальных сайтов с базой данных: авторизация, загрузка файлов, админ-панель.",
"time"=>"20 часов",
"rate"=>"4.8",
"img"=>"https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80",
"link"=>"php.php"
],

[
"title"=>"Python для начинающих",
"desc"=>"Основы программирования, переменные, циклы, функции и первые проекты на Python.",
"time"=>"16 часов",
"rate"=>"4.9",
"img"=>"https://images.unsplash.com/photo-1526379095098-d400fd0bf935?auto=format&fit=crop&w=800&q=80",
"link"=>"python.php"
],

[
"title"=>"UI/UX Design",
"desc"=>"Создание красивых интерфейсов в Figma, прототипы, цвета, современные тренды дизайна.",
"time"=>"10 часов",
"rate"=>"4.7",
"img"=>"https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=800&q=80",
"link"=>"uiux.php"
],

[
"title"=>"React JS",
"desc"=>"Компоненты, props, state, SPA приложения и создание современных интерфейсов.",
"time"=>"22 часа",
"rate"=>"5.0",
"img"=>"https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80",
"link"=>"react.php"
]

];

$q = "";
if(isset($_GET['q'])){
$q = strtolower(trim($_GET['q']));
}

$found = false;

foreach($courses as $course){

if($q == "" || strpos(strtolower($course['title']), $q) !== false || strpos(strtolower($course['desc']), $q) !== false){

$found = true;
?>

<div class="card">

<img src="<?php echo $course['img']; ?>">

<div class="content">

<h3><?php echo $course['title']; ?></h3>

<p class="desc"><?php echo $course['desc']; ?></p>

<div class="info">
<span>⏱ <?php echo $course['time']; ?></span>
<span>⭐ <?php echo $course['rate']; ?></span>
</div>

<a href="<?php echo $course['link']; ?>" class="btn">Изучить</a>

</div>
</div>

<?php
}
}

if(!$found){
echo "<div class='empty'>❌ Курсы не найдены</div>";
}
?>

</div>
</div>

<?php include 'footer.php'; ?>