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
    margin-bottom:35px;
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
</style>
</br>
<a href="courseskaz.php" style="color:#fff;margin:0 15px;">КАЗ</a>
<a href="courses.php" style="color:#fff;margin:0 15px;">РУС</a>
<div class="container">

<h2>📚 Популярные курсы</h2>
<p class="subtitle">Изучай современные IT-навыки на практике</p>

<div class="grid">

<!-- HTML -->
<div class="card">
<img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=80">
<div class="content">
<h3>HTML & CSS с нуля</h3>
<p class="desc">
Научись создавать современные адаптивные сайты. Верстка лендингов, Flexbox, Grid, анимации.
</p>
<div class="info">
<span>⏱ 12 часов</span>
<span>⭐ 4.9</span>
</div>
<a href="html.php" class="btn">Изучить</a>
</div>
</div>

<!-- JS -->
<div class="card">
<img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4?auto=format&fit=crop&w=800&q=80">
<div class="content">
<h3>JavaScript Pro</h3>
<p class="desc">
Изучи интерактивность сайта: DOM, события, формы, API, проекты и современные практики.
</p>
<div class="info">
<span>⏱ 18 часов</span>
<span>⭐ 5.0</span>
</div>
<a href="js.php" class="btn">Изучить</a>
</div>
</div>

<!-- PHP -->
<div class="card">
<img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=800&q=80">
<div class="content">
<h3>PHP + MySQL</h3>
<p class="desc">
Создание реальных сайтов с базой данных: авторизация, загрузка файлов, админ-панель.
</p>
<div class="info">
<span>⏱ 20 часов</span>
<span>⭐ 4.8</span>
</div>
<a href="php.php" class="btn">Изучить</a>
</div>
</div>

<!-- Python -->
<div class="card">
<img src="https://images.unsplash.com/photo-1526379095098-d400fd0bf935?auto=format&fit=crop&w=800&q=80">
<div class="content">
<h3>Python для начинающих</h3>
<p class="desc">
Основы программирования, переменные, циклы, функции и первые проекты на Python.
</p>
<div class="info">
<span>⏱ 16 часов</span>
<span>⭐ 4.9</span>
</div>
<a href="python.php" class="btn">Изучить</a>
</div>
</div>

<!-- UI UX -->
<div class="card">
<img src="https://images.unsplash.com/photo-1507238691740-187a5b1d37b8?auto=format&fit=crop&w=800&q=80">
<div class="content">
<h3>UI/UX Design</h3>
<p class="desc">
Создание красивых интерфейсов в Figma, прототипы, цвета, современные тренды дизайна.
</p>
<div class="info">
<span>⏱ 10 часов</span>
<span>⭐ 4.7</span>
</div>
<a href="uiux.php" class="btn">Изучить</a>
</div>
</div>

<!-- React -->
<div class="card">
<img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=800&q=80">
<div class="content">
<h3>React JS</h3>
<p class="desc">
Компоненты, props, state, SPA приложения и создание современных интерфейсов.
</p>
<div class="info">
<span>⏱ 22 часа</span>
<span>⭐ 5.0</span>
</div>
<a href="react.php" class="btn">Изучить</a>
</div>
</div>

</div>
</div>

<?php include 'footer.php'; ?>