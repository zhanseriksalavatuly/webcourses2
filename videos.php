<?php include 'config.php'; ?>
<?php include 'header.php'; ?>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

* { margin:0; padding:0; box-sizing:border-box; }

body {
    background: #070d1a;
    color: #e8f0ff;
    font-family: 'Inter', Arial, sans-serif;
    overflow-x: hidden;
}

/* ANIMATED BG */
.ai-bg {
    position: fixed;
    inset: 0;
    z-index: 0;
    pointer-events: none;
    overflow: hidden;
}
.ai-bg::before {
    content: '';
    position: absolute;
    width: 700px; height: 700px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(99,102,241,0.12) 0%, transparent 70%);
    top: -200px; right: -100px;
    animation: bgBlob1 15s ease-in-out infinite;
}
.ai-bg::after {
    content: '';
    position: absolute;
    width: 500px; height: 500px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(6,182,212,0.10) 0%, transparent 70%);
    bottom: -100px; left: -100px;
    animation: bgBlob2 18s ease-in-out infinite;
}
@keyframes bgBlob1 { 0%,100%{transform:translate(0,0)} 50%{transform:translate(-50px,40px)} }
@keyframes bgBlob2 { 0%,100%{transform:translate(0,0)} 50%{transform:translate(40px,-30px)} }

/* GRID DOTS */
.ai-grid-bg {
    position: fixed; inset: 0; z-index: 0;
    background-image:
        linear-gradient(rgba(99,102,241,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(99,102,241,0.04) 1px, transparent 1px);
    background-size: 50px 50px;
    pointer-events: none;
}

.wrap {
    position: relative;
    z-index: 1;
    max-width: 1200px;
    margin: auto;
    padding: 40px 20px 80px;
}

/* HERO BANNER */
.hero-banner {
    background: linear-gradient(135deg, rgba(99,102,241,0.15), rgba(6,182,212,0.10));
    border: 1px solid rgba(99,102,241,0.25);
    border-radius: 24px;
    padding: 52px 48px;
    margin-bottom: 52px;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
}
.hero-banner::before {
    content: '🤖';
    position: absolute;
    right: 40px; top: 50%;
    transform: translateY(-50%);
    font-size: 100px;
    opacity: 0.12;
    animation: float 6s ease-in-out infinite;
}
@keyframes float { 0%,100%{transform:translateY(-50%) translateY(0)} 50%{transform:translateY(-50%) translateY(-15px)} }

.live-tag {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: rgba(239,68,68,0.15);
    border: 1px solid rgba(239,68,68,0.35);
    color: #f87171;
    font-size: 11px;
    font-weight: 700;
    padding: 4px 14px;
    border-radius: 50px;
    margin-bottom: 18px;
    letter-spacing: 1.5px;
    text-transform: uppercase;
}
.live-dot {
    width: 6px; height: 6px;
    background: #ef4444;
    border-radius: 50%;
    animation: blink 1.5s infinite;
}
@keyframes blink { 0%,100%{opacity:1} 50%{opacity:0.2} }

.hero-banner h1 {
    font-size: clamp(28px, 4vw, 48px);
    font-weight: 800;
    letter-spacing: -1.5px;
    line-height: 1.1;
    margin-bottom: 14px;
}
.grad {
    background: linear-gradient(135deg, #818cf8, #22d3ee);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.hero-banner p {
    font-size: 16px;
    color: #94a3b8;
    max-width: 580px;
    line-height: 1.7;
    margin-bottom: 28px;
}
.hero-stats-row {
    display: flex;
    gap: 32px;
    flex-wrap: wrap;
}
.hstat {
    text-align: center;
}
.hstat-n {
    font-size: 26px;
    font-weight: 800;
    background: linear-gradient(135deg, #818cf8, #22d3ee);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.hstat-l { font-size: 12px; color: #64748b; margin-top: 2px; }

/* TREND TICKER */
.ticker-wrap {
    background: rgba(99,102,241,0.08);
    border: 1px solid rgba(99,102,241,0.2);
    border-radius: 12px;
    padding: 12px 20px;
    margin-bottom: 44px;
    overflow: hidden;
    display: flex;
    align-items: center;
    gap: 16px;
}
.ticker-label {
    font-size: 11px;
    font-weight: 700;
    color: #818cf8;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    white-space: nowrap;
    background: rgba(99,102,241,0.15);
    padding: 4px 12px;
    border-radius: 6px;
    flex-shrink: 0;
}
.ticker-track {
    display: flex;
    gap: 40px;
    animation: ticker 25s linear infinite;
    white-space: nowrap;
}
.ticker-item {
    font-size: 13px;
    color: #94a3b8;
    display: flex;
    align-items: center;
    gap: 8px;
}
.ticker-item span { color: #22d3ee; font-weight: 600; }
@keyframes ticker { 0%{transform:translateX(0)} 100%{transform:translateX(-50%)} }

/* SECTION HEADER */
.sec-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 24px;
    flex-wrap: wrap;
    gap: 12px;
}
.sec-title {
    font-size: 22px;
    font-weight: 800;
    letter-spacing: -0.5px;
}
.sec-tag {
    font-size: 11px;
    font-weight: 700;
    color: #818cf8;
    text-transform: uppercase;
    letter-spacing: 2px;
    background: rgba(99,102,241,0.1);
    padding: 4px 14px;
    border-radius: 50px;
    border: 1px solid rgba(99,102,241,0.2);
}
.view-all {
    font-size: 13px;
    color: #818cf8;
    text-decoration: none;
    font-weight: 600;
    transition: color 0.2s;
}
.view-all:hover { color: #a5b4fc; }

/* MAIN NEWS GRID */
.main-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 24px;
    margin-bottom: 48px;
}
@media(max-width:800px){ .main-grid { grid-template-columns: 1fr; } }

/* FEATURED CARD */
.card-featured {
    background: rgba(255,255,255,0.04);
    backdrop-filter: blur(12px);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 20px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.35s;
    display: flex;
    flex-direction: column;
}
.card-featured:hover {
    border-color: rgba(99,102,241,0.4);
    transform: translateY(-5px);
    box-shadow: 0 20px 60px rgba(99,102,241,0.15);
}
.feat-img {
    height: 220px;
    background: linear-gradient(135deg, rgba(99,102,241,0.2), rgba(6,182,212,0.15));
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 72px;
    position: relative;
    overflow: hidden;
}
.feat-img::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(to bottom, transparent 40%, rgba(7,13,26,0.8));
}
.feat-badge {
    position: absolute;
    top: 14px; left: 14px;
    font-size: 10px;
    font-weight: 700;
    padding: 4px 12px;
    border-radius: 50px;
    text-transform: uppercase;
    letter-spacing: 1px;
    z-index: 2;
}
.badge-hot { background: rgba(239,68,68,0.85); color: #fff; }
.badge-new { background: rgba(99,102,241,0.85); color: #fff; }
.badge-trend { background: rgba(245,158,11,0.85); color: #fff; }
.badge-break { background: rgba(16,185,129,0.85); color: #fff; }

.feat-body { padding: 24px; flex: 1; }
.feat-cat {
    font-size: 11px;
    font-weight: 700;
    color: #22d3ee;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 8px;
}
.feat-body h2 {
    font-size: 20px;
    font-weight: 800;
    margin-bottom: 10px;
    line-height: 1.35;
    letter-spacing: -0.3px;
}
.feat-body p {
    font-size: 14px;
    color: #64748b;
    line-height: 1.7;
    margin-bottom: 16px;
}
.feat-meta {
    display: flex;
    align-items: center;
    gap: 16px;
    font-size: 12px;
    color: #475569;
    border-top: 1px solid rgba(255,255,255,0.06);
    padding-top: 14px;
}
.feat-meta strong { color: #94a3b8; }

/* SIDE NEWS LIST */
.side-list { display: flex; flex-direction: column; gap: 12px; }
.side-card {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 14px;
    padding: 16px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    gap: 14px;
    align-items: flex-start;
}
.side-card:hover {
    border-color: rgba(99,102,241,0.35);
    background: rgba(99,102,241,0.06);
    transform: translateX(4px);
}
.side-ico {
    width: 44px; height: 44px;
    border-radius: 12px;
    background: linear-gradient(135deg, rgba(99,102,241,0.2), rgba(6,182,212,0.15));
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    flex-shrink: 0;
}
.side-cat { font-size: 10px; font-weight: 700; color: #818cf8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px; }
.side-title { font-size: 13px; font-weight: 700; line-height: 1.4; margin-bottom: 4px; }
.side-time { font-size: 11px; color: #475569; }

/* TRENDS SECTION */
.trends-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 18px;
    margin-bottom: 48px;
}
.trend-card {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 16px;
    padding: 22px;
    cursor: pointer;
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
}
.trend-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    opacity: 0;
    transition: opacity 0.3s;
}
.trend-card:hover::before { opacity: 1; }
.tc1::before { background: linear-gradient(90deg, #818cf8, #a78bfa); }
.tc2::before { background: linear-gradient(90deg, #22d3ee, #0ea5e9); }
.tc3::before { background: linear-gradient(90deg, #f59e0b, #ef4444); }
.tc4::before { background: linear-gradient(90deg, #10b981, #22d3ee); }
.tc5::before { background: linear-gradient(90deg, #ec4899, #a78bfa); }
.tc6::before { background: linear-gradient(90deg, #f97316, #f59e0b); }

.trend-card:hover {
    border-color: rgba(99,102,241,0.3);
    transform: translateY(-5px);
    box-shadow: 0 16px 40px rgba(0,0,0,0.3);
}
.trend-num {
    position: absolute;
    top: 16px; right: 16px;
    font-size: 42px;
    font-weight: 900;
    color: rgba(255,255,255,0.04);
    line-height: 1;
}
.trend-ico { font-size: 28px; margin-bottom: 12px; }
.trend-card h3 { font-size: 15px; font-weight: 700; margin-bottom: 6px; line-height: 1.35; }
.trend-card p { font-size: 12px; color: #64748b; line-height: 1.6; margin-bottom: 14px; }
.trend-bar-wrap { background: rgba(255,255,255,0.06); border-radius: 4px; height: 4px; overflow: hidden; margin-bottom: 8px; }
.trend-bar { height: 100%; border-radius: 4px; animation: growBar 2s ease both; }
@keyframes growBar { from{width:0} }
.trend-pct { font-size: 11px; font-weight: 700; display: flex; justify-content: space-between; }
.pct-up { color: #10b981; }
.pct-label { color: #475569; }

/* AI TOOLS SECTION */
.tools-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 14px;
    margin-bottom: 48px;
}
.tool-card {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 14px;
    padding: 20px;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    gap: 14px;
}
.tool-card:hover {
    border-color: rgba(99,102,241,0.3);
    background: rgba(99,102,241,0.06);
    transform: translateY(-3px);
}
.tool-logo {
    width: 46px; height: 46px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 22px;
    flex-shrink: 0;
}
.tool-name { font-size: 14px; font-weight: 700; margin-bottom: 3px; }
.tool-type { font-size: 11px; color: #475569; }
.tool-new {
    font-size: 9px;
    font-weight: 700;
    background: #818cf8;
    color: #fff;
    padding: 2px 7px;
    border-radius: 4px;
    margin-left: auto;
    flex-shrink: 0;
}

/* COMPANIES */
.companies-row {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    margin-bottom: 48px;
}
.company-pill {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 50px;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    transition: all 0.25s;
    font-size: 14px;
    font-weight: 600;
}
.company-pill:hover {
    border-color: rgba(99,102,241,0.4);
    background: rgba(99,102,241,0.08);
    transform: translateY(-2px);
}
.cp-logo { font-size: 20px; }
.cp-change { font-size: 11px; font-weight: 700; }
.cp-up { color: #10b981; }
.cp-dn { color: #ef4444; }

/* TIMELINE */
.timeline { position: relative; margin-bottom: 48px; }
.timeline::before {
    content: '';
    position: absolute;
    left: 20px; top: 0; bottom: 0;
    width: 2px;
    background: linear-gradient(to bottom, #818cf8, #22d3ee, transparent);
}
.tl-item {
    display: flex;
    gap: 20px;
    margin-bottom: 24px;
    padding-left: 52px;
    position: relative;
}
.tl-dot {
    position: absolute;
    left: 12px; top: 4px;
    width: 18px; height: 18px;
    border-radius: 50%;
    background: linear-gradient(135deg, #818cf8, #22d3ee);
    border: 2px solid #070d1a;
    box-shadow: 0 0 12px rgba(99,102,241,0.5);
    flex-shrink: 0;
}
.tl-date { font-size: 11px; color: #475569; font-weight: 600; white-space: nowrap; }
.tl-body {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 14px;
    padding: 16px 20px;
    flex: 1;
    transition: all 0.3s;
    cursor: pointer;
}
.tl-body:hover { border-color: rgba(99,102,241,0.3); background: rgba(99,102,241,0.06); }
.tl-body h4 { font-size: 14px; font-weight: 700; margin-bottom: 5px; }
.tl-body p { font-size: 12px; color: #64748b; line-height: 1.6; }
.tl-tag {
    display: inline-block;
    font-size: 10px;
    font-weight: 700;
    padding: 2px 9px;
    border-radius: 5px;
    margin-top: 8px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
.tt-research { background: rgba(99,102,241,0.2); color: #a5b4fc; }
.tt-product { background: rgba(6,182,212,0.2); color: #67e8f9; }
.tt-policy { background: rgba(245,158,11,0.2); color: #fcd34d; }
.tt-model { background: rgba(16,185,129,0.2); color: #6ee7b7; }
.tt-safety { background: rgba(239,68,68,0.2); color: #fca5a5; }

/* NEWSLETTER */
.newsletter {
    background: linear-gradient(135deg, rgba(99,102,241,0.15), rgba(6,182,212,0.10));
    border: 1px solid rgba(99,102,241,0.25);
    border-radius: 20px;
    padding: 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.newsletter::before {
    content: '';
    position: absolute;
    width: 300px; height: 300px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(99,102,241,0.15), transparent);
    top: -100px; right: -100px;
}
.newsletter h3 { font-size: 24px; font-weight: 800; margin-bottom: 8px; letter-spacing: -0.5px; }
.newsletter p { font-size: 14px; color: #64748b; margin-bottom: 24px; }
.nl-form {
    display: flex;
    gap: 10px;
    max-width: 440px;
    margin: 0 auto;
    flex-wrap: wrap;
    justify-content: center;
}
.nl-input {
    flex: 1;
    min-width: 220px;
    background: rgba(255,255,255,0.06);
    border: 1px solid rgba(255,255,255,0.12);
    color: #e8f0ff;
    padding: 12px 18px;
    border-radius: 10px;
    font-size: 14px;
    font-family: inherit;
    outline: none;
    transition: border-color 0.25s;
}
.nl-input:focus { border-color: rgba(99,102,241,0.5); }
.nl-input::placeholder { color: #475569; }
.nl-btn {
    background: linear-gradient(135deg, #6366f1, #22d3ee);
    color: #fff;
    border: none;
    padding: 12px 24px;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    font-family: inherit;
    transition: all 0.3s;
}
.nl-btn:hover { transform: translateY(-2px); box-shadow: 0 10px 28px rgba(99,102,241,0.4); }

/* DIVIDER */
.divider { height: 1px; background: rgba(255,255,255,0.06); margin: 48px 0; }

/* SCROLL REVEAL */
.rv { opacity: 0; transform: translateY(28px); transition: opacity 0.7s ease, transform 0.7s ease; }
.rv.on { opacity: 1; transform: translateY(0); }
.rv1 { transition-delay: 0.1s; } .rv2 { transition-delay: 0.2s; } .rv3 { transition-delay: 0.3s; }
</style>

<div class="ai-bg"></div>
<div class="ai-grid-bg"></div>

<div class="wrap">

    <!-- HERO -->
    <div class="hero-banner rv">
        <div class="live-tag"><div class="live-dot"></div>LIVE</div>
        <h1>Мир <span class="grad">Искусственного Интеллекта</span><br>сегодня</h1>
        <p>Последние новости, тренды и прорывы в мире ИИ. Обновляется каждый день — не пропусти главное.</p>
        
    </div>

    <!-- TICKER -->
    <div class="ticker-wrap rv">
        <div class="ticker-label">🔥 ТРЕНД</div>
        <div class="ticker-track">
            <div class="ticker-item"> GPT-5 <span>анонсирован OpenAI</span></div>
            <div class="ticker-item">🎨 Sora <span>генерирует видео до 60 сек</span></div>
            <div class="ticker-item">🧠 DeepMind <span>AlphaFold 3 опубликован</span></div>
            <div class="ticker-item">💼 Microsoft <span>вложил $80B в ИИ-дата-центры</span></div>
            <div class="ticker-item">🚗 Tesla <span>FSD 12.5 вышел</span></div>
            <div class="ticker-item">🔐 ЕС <span>AI Act вступил в силу</span></div>
            <div class="ticker-item">📱 Apple <span>Apple Intelligence на всех устройствах</span></div>
            <!-- dupe -->
            <div class="ticker-item"> GPT-5 <span>анонсирован OpenAI</span></div>
            <div class="ticker-item">🎨 Sora <span>генерирует видео до 60 сек</span></div>
            <div class="ticker-item">🧠 DeepMind <span>AlphaFold 3 опубликован</span></div>
            <div class="ticker-item">💼 Microsoft <span>вложил $80B в ИИ-дата-центры</span></div>
            <div class="ticker-item">🚗 Tesla <span>FSD 12.5 вышел</span></div>
            <div class="ticker-item">🔐 ЕС <span>AI Act вступил в силу</span></div>
            <div class="ticker-item">📱 Apple <span>Apple Intelligence на всех устройствах</span></div>
        </div>
    </div>

    <!-- MAIN NEWS -->
    <div class="sec-header rv">
        <div>
            <div class="sec-tag" style="margin-bottom:8px">Главное</div>
            <div class="sec-title">🗞️ Топ новости дня</div>
        </div>
        <a href="#" class="view-all">Все новости →</a>
    </div>

    <div class="main-grid">
        <div class="card-featured rv">
            <div class="feat-img">
                🤖
                <div class="feat-badge badge-hot">ГОРЯЧЕЕ</div>
            </div>
            <div class="feat-body">
                <div class="feat-cat">🔴 Прорыв</div>
                <h2>OpenAI представила GPT-5: рассуждает как эксперт, решает задачи PhD-уровня</h2>
                <p>Новая модель показала беспрецедентные результаты в области математики, кодинга и медицинской диагностики. Индекс интеллекта — 157, что выше среднего у людей.</p>
                <div class="feat-meta">
                    <strong>OpenAI</strong>
                    <span>•</span>
                    <span>2 июня 2025</span>
                    <span>•</span>
                    <span>📖 5 мин</span>
                    <span style="margin-left:auto;color:#818cf8;font-weight:600">Читать →</span>
                </div>
            </div>
        </div>

        <div class="side-list">
            <div class="side-card rv">
                <div class="side-ico">🎨</div>
                <div>
                    <div class="side-cat">Генерация</div>
                    <div class="side-title">Midjourney V7 генерирует видео с полным контролем движения</div>
                    <div class="side-time">3 часа назад</div>
                </div>
            </div>
            <div class="side-card rv rv1">
                <div class="side-ico">🧬</div>
                <div>
                    <div class="side-cat">Наука</div>
                    <div class="side-title">ИИ предсказал структуру белка, которую искали 50 лет</div>
                    <div class="side-time">5 часов назад</div>
                </div>
            </div>
            <div class="side-card rv rv2">
                <div class="side-ico">💰</div>
                <div>
                    <div class="side-cat">Инвестиции</div>
                    <div class="side-title">Anthropic привлёк $4B от Amazon — новый рекорд</div>
                    <div class="side-time">7 часов назад</div>
                </div>
            </div>
            <div class="side-card rv rv3">
                <div class="side-ico">🚗</div>
                <div>
                    <div class="side-cat">Авто</div>
                    <div class="side-title">Waymo запустил роботакси в 10 новых городах США</div>
                    <div class="side-time">12 часов назад</div>
                </div>
            </div>
            <div class="side-card rv">
                <div class="side-ico">🏥</div>
                <div>
                    <div class="side-cat">Медицина</div>
                    <div class="side-title">ИИ точнее врачей диагностирует рак по снимкам МРТ — исследование</div>
                    <div class="side-time">1 день назад</div>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <!-- TRENDS -->
    <div class="sec-header rv">
        <div>
            <div class="sec-tag" style="margin-bottom:8px">Тренды</div>
            <div class="sec-title">📈 Горячие направления ИИ — 2025</div>
        </div>
    </div>

    <div class="trends-grid">
        <div class="trend-card tc1 rv">
            <div class="trend-num">1</div>
            <div class="trend-ico">🧠</div>
            <h3>Мультимодальные LLM</h3>
            <p>Модели, работающие с текстом, изображениями, видео и звуком одновременно. GPT-4o, Gemini Ultra.</p>
            <div class="trend-bar-wrap"><div class="trend-bar" style="width:92%;background:linear-gradient(90deg,#818cf8,#a78bfa)"></div></div>
            <div class="trend-pct"><span class="pct-up">↑ 92% интерес</span><span class="pct-label">vs 2024</span></div>
        </div>
        <div class="trend-card tc2 rv rv1">
            <div class="trend-num">2</div>
            <div class="trend-ico">🤝</div>
            <h3>AI Agents</h3>
            <p>Автономные агенты, выполняющие многоэтапные задачи без человека. AutoGPT, OpenAI Operator.</p>
            <div class="trend-bar-wrap"><div class="trend-bar" style="width:87%;background:linear-gradient(90deg,#22d3ee,#0ea5e9)"></div></div>
            <div class="trend-pct"><span class="pct-up">↑ 87% интерес</span><span class="pct-label">vs 2024</span></div>
        </div>
        <div class="trend-card tc3 rv rv2">
            <div class="trend-num">3</div>
            <div class="trend-ico">🎬</div>
            <h3>Генерация видео</h3>
            <p>Sora, Runway Gen-3, Kling — реалистичные видео из текста. Революция в кино и рекламе.</p>
            <div class="trend-bar-wrap"><div class="trend-bar" style="width:81%;background:linear-gradient(90deg,#f59e0b,#ef4444)"></div></div>
            <div class="trend-pct"><span class="pct-up">↑ 81% интерес</span><span class="pct-label">vs 2024</span></div>
        </div>
        <div class="trend-card tc4 rv rv3">
            <div class="trend-num">4</div>
            <div class="trend-ico">🔬</div>
            <h3>ИИ в науке</h3>
            <p>AlphaFold, AlphaGeometry — ИИ решает задачи, которые учёные не могли решить десятилетиями.</p>
            <div class="trend-bar-wrap"><div class="trend-bar" style="width:76%;background:linear-gradient(90deg,#10b981,#22d3ee)"></div></div>
            <div class="trend-pct"><span class="pct-up">↑ 76% интерес</span><span class="pct-label">vs 2024</span></div>
        </div>
        <div class="trend-card tc5 rv">
            <div class="trend-num">5</div>
            <div class="trend-ico">🏭</div>
            <h3>Edge AI</h3>
            <p>Запуск ИИ прямо на устройстве без интернета. Apple Silicon, Snapdragon X Elite, Intel Core Ultra.</p>
            <div class="trend-bar-wrap"><div class="trend-bar" style="width:70%;background:linear-gradient(90deg,#ec4899,#a78bfa)"></div></div>
            <div class="trend-pct"><span class="pct-up">↑ 70% интерес</span><span class="pct-label">vs 2024</span></div>
        </div>
        <div class="trend-card tc6 rv rv1">
            <div class="trend-num">6</div>
            <div class="trend-ico">🔐</div>
            <h3>AI Safety & Регуляция</h3>
            <p>EU AI Act, США Executive Order, Китайский регулятор — мир вводит законы для безопасности ИИ.</p>
            <div class="trend-bar-wrap"><div class="trend-bar" style="width:65%;background:linear-gradient(90deg,#f97316,#f59e0b)"></div></div>
            <div class="trend-pct"><span class="pct-up">↑ 65% интерес</span><span class="pct-label">vs 2024</span></div>
        </div>
    </div>

    <div class="divider"></div>

    <!-- COMPANIES -->
    <div class="sec-header rv">
        <div>
            <div class="sec-tag" style="margin-bottom:8px">Компании</div>
            <div class="sec-title">🏢 Главные игроки ИИ-рынка</div>
        </div>
    </div>
    <div class="companies-row rv">
        <div class="company-pill"><div class="cp-logo">🟢</div>OpenAI<div class="cp-change cp-up">↑ GPT-5</div></div>
        <div class="company-pill"><div class="cp-logo">🔵</div>Google DeepMind<div class="cp-change cp-up">↑ Gemini 2.0</div></div>
        <div class="company-pill"><div class="cp-logo">🟣</div>Anthropic<div class="cp-change cp-up">↑ Claude 4</div></div>
        <div class="company-pill"><div class="cp-logo">🟦</div>Microsoft<div class="cp-change cp-up">↑ Copilot+</div></div>
        <div class="company-pill"><div class="cp-logo">⚫</div>Meta AI<div class="cp-change cp-up">↑ Llama 4</div></div>
        <div class="company-pill"><div class="cp-logo">🔴</div>xAI (Grok)<div class="cp-change cp-up">↑ Grok-3</div></div>
        <div class="company-pill"><div class="cp-logo">🟠</div>Mistral AI<div class="cp-change cp-up">↑ Mistral Large</div></div>
        <div class="company-pill"><div class="cp-logo">🇨🇳</div>DeepSeek<div class="cp-change cp-up">↑ R2</div></div>
    </div>

    <div class="divider"></div>

    <!-- AI TOOLS -->
    <div class="sec-header rv">
        <div>
            <div class="sec-tag" style="margin-bottom:8px">Инструменты</div>
            <div class="sec-title">🛠️ Топ ИИ-инструменты 2025</div>
        </div>
    </div>
    <div class="tools-grid">
        <div class="tool-card rv">
            <div class="tool-logo" style="background:rgba(16,163,127,0.15)">🤖</div>
            <div><div class="tool-name">ChatGPT</div><div class="tool-type">Чат-бот / Агент</div></div>
        </div>
        <div class="tool-card rv rv1">
            <div class="tool-logo" style="background:rgba(99,102,241,0.15)">🧠</div>
            <div><div class="tool-name">Claude</div><div class="tool-type">Анализ / Код</div></div>
            <div class="tool-new">NEW</div>
        </div>
        <div class="tool-card rv rv2">
            <div class="tool-logo" style="background:rgba(66,133,244,0.15)">✨</div>
            <div><div class="tool-name">Gemini</div><div class="tool-type">Мультимодальный</div></div>
        </div>
        <div class="tool-card rv rv3">
            <div class="tool-logo" style="background:rgba(236,72,153,0.15)">🎨</div>
            <div><div class="tool-name">Midjourney</div><div class="tool-type">Изображения</div></div>
        </div>
        <div class="tool-card rv">
            <div class="tool-logo" style="background:rgba(245,158,11,0.15)">🎬</div>
            <div><div class="tool-name">Sora</div><div class="tool-type">Генерация видео</div></div>
            <div class="tool-new">NEW</div>
        </div>
        <div class="tool-card rv rv1">
            <div class="tool-logo" style="background:rgba(239,68,68,0.15)">🎵</div>
            <div><div class="tool-name">Suno AI</div><div class="tool-type">Музыка из текста</div></div>
        </div>
        <div class="tool-card rv rv2">
            <div class="tool-logo" style="background:rgba(6,182,212,0.15)">💻</div>
            <div><div class="tool-name">GitHub Copilot</div><div class="tool-type">Код / Разработка</div></div>
        </div>
        <div class="tool-card rv rv3">
            <div class="tool-logo" style="background:rgba(16,185,129,0.15)">📊</div>
            <div><div class="tool-name">Perplexity</div><div class="tool-type">ИИ-поиск</div></div>
        </div>
    </div>

    <div class="divider"></div>

    <!-- TIMELINE -->
    <div class="sec-header rv">
        <div>
            <div class="sec-tag" style="margin-bottom:8px">История</div>
            <div class="sec-title">⏱️ Ключевые события 2025</div>
        </div>
    </div>

    <div class="timeline">
        <div class="tl-item rv">
            <div class="tl-dot"></div>
            <div class="tl-body">
                <div class="tl-date">Июнь 2025</div>
                <h4>OpenAI запустила GPT-5 — модель с IQ выше среднего человека</h4>
                <p>Новая модель решает задачи на уровне PhD по математике и физике, пишет производственный код без ошибок.</p>
                <span class="tl-tag tt-model">Новая модель</span>
            </div>
        </div>
        <div class="tl-item rv rv1">
            <div class="tl-dot"></div>
            <div class="tl-body">
                <div class="tl-date">Май 2025</div>
                <h4>Google DeepMind — AlphaFold 3 предсказывает взаимодействие всех молекул</h4>
                <p>Революция в биологии: ИИ теперь понимает взаимодействие ДНК, РНК и белков — ключ к новым лекарствам.</p>
                <span class="tl-tag tt-research">Наука</span>
            </div>
        </div>
        <div class="tl-item rv rv2">
            <div class="tl-dot"></div>
            <div class="tl-body">
                <div class="tl-date">Апрель 2025</div>
                <h4>EU AI Act — первый в мире закон об ИИ вступил в силу</h4>
                <p>Европейский союз ввёл обязательную классификацию рисков для всех ИИ-систем. Штрафы до 7% оборота.</p>
                <span class="tl-tag tt-policy">Регуляция</span>
            </div>
        </div>
        <div class="tl-item rv rv3">
            <div class="tl-dot"></div>
            <div class="tl-body">
                <div class="tl-date">Март 2025</div>
                <h4>Anthropic выпустила Claude 4 с расширенным агентным режимом</h4>
                <p>Claude теперь самостоятельно управляет компьютером, выполняет задачи в браузере и работает с файлами.</p>
                <span class="tl-tag tt-product">Продукт</span>
            </div>
        </div>
        <div class="tl-item rv">
            <div class="tl-dot"></div>
            <div class="tl-body">
                <div class="tl-date">Февраль 2025</div>
                <h4>DeepSeek R2 — китайская модель обогнала GPT-4 за 1/10 цены</h4>
                <p>Шок для Кремниевой долины: акции Nvidia упали на 17%. Открытый исходный код изменил правила игры.</p>
                <span class="tl-tag tt-model">Новая модель</span>
            </div>
        </div>
        <div class="tl-item rv rv1">
            <div class="tl-dot"></div>
            <div class="tl-body">
                <div class="tl-date">Январь 2025</div>
                <h4>Microsoft объявил об инвестиции $80 млрд в ИИ-дата-центры</h4>
                <p>Крупнейшие капиталовложения в истории технологий. 50% — в США, остальное — в Европе и Азии.</p>
                <span class="tl-tag tt-product">Бизнес</span>
            </div>
        </div>
    </div>

    <!-- NEWSLETTER -->
    <div class="newsletter rv">
        <h3>📬 ИИ-дайджест каждую неделю</h3>
        <p>Только важные новости без лишнего шума. Подпишись — и получай лучшее каждый понедельник.</p>
        <div class="nl-form">
            <input class="nl-input" type="email" placeholder="твой@email.com">
            <button class="nl-btn" onclick="this.textContent='✅ Подписан!'">Подписаться</button>
        </div>
    </div>

</div>

<script>
// SCROLL REVEAL
const observer = new IntersectionObserver(entries => {
    entries.forEach(e => { if(e.isIntersecting) { e.target.classList.add('on'); observer.unobserve(e.target); } });
}, { threshold: 0.1 });
document.querySelectorAll('.rv').forEach(el => observer.observe(el));
</script>

<?php include 'footer.php'; ?>