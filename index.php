<?php
$siteTitle = 'Для Анастасії — маленький сайт про велике кохання';
$siteDescription = 'Персональний сайт для Анастасії: фото, ніжні слова, спогади й маленький всесвіт кохання.';
$siteName = 'Анастасія';
$year = date('Y');
?>
<!doctype html>
<html lang="uk">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($siteTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($siteDescription) ?>" />
  <meta name="theme-color" content="#09080d" />
  <meta property="og:title" content="<?= htmlspecialchars($siteName) ?> ❤️" />
  <meta property="og:description" content="<?= htmlspecialchars($siteDescription) ?>" />
  <meta property="og:image" content="assets/img/lake-close.webp" />
  <link rel="icon" href="assets/img/heart.svg" type="image/svg+xml" />
  <link rel="manifest" href="manifest.webmanifest" />
  <link rel="preload" href="assets/img/lake-close.webp" as="image" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
  <div class="loader" id="loader" aria-hidden="true">
    <div class="loader-heart">❤</div>
    <div class="loader-text">збираю наш маленький всесвіт…</div>
  </div>

  <canvas id="stars" aria-hidden="true"></canvas>

  <header class="topbar" id="topbar">
    <a class="brand" href="#hero" aria-label="На початок">
      <span class="brand-mark">♡</span>
      <span><?= htmlspecialchars($siteName) ?></span>
    </a>
    <nav class="nav" aria-label="Головна навігація">
      <a href="#about">Про тебе</a>
      <a href="#gallery">Фото</a>
      <a href="#words">Наші слова</a>
      <a href="#letter">Лист</a>
    </nav>
    <button class="music-toggle" id="vibeBtn" type="button" aria-label="Увімкнути романтичний режим">♥ режим</button>
  </header>

  <main>
    <section class="hero section" id="hero">
      <div class="hero-bg" role="img" aria-label="Анастасія біля озера"></div>
      <div class="hero-noise"></div>
      <div class="hero-content reveal">
        <p class="eyebrow">для моєї коханої</p>
        <h1>Анастасія</h1>
        <p class="hero-subtitle">Ти — мій спокій, моя усмішка, моя Мишка, моя квіточка і найтепліше “люблю” в кожному дні.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="#letter">Відкрити лист</a>
          <a class="btn btn-ghost" href="#gallery">Подивитися фото</a>
        </div>
      </div>
      <div class="hero-card reveal delay-1">
        <img src="assets/img/portrait-bw.webp" alt="Чорно-білий портрет Анастасії" loading="eager" />
        <div>
          <span>головна думка</span>
          <strong>Я дуже сильно тебе люблю.</strong>
        </div>
      </div>
      <a class="scroll-cue" href="#about" aria-label="Прокрутити нижче"><span></span></a>
    </section>

    <section class="section intro" id="about">
      <div class="container grid-2">
        <div class="reveal">
          <p class="eyebrow">не просто сайт</p>
          <h2>Це місце, де зібрано те, що я відчуваю до тебе.</h2>
        </div>
        <div class="intro-copy reveal delay-1">
          <p>Анастасія, це маленький світ, який я створив для тебе.
Без зайвих слів, без випадкових деталей — тільки те, що нагадує мені про тебе.</p>
          <p>І якщо цей сайт колись відкриється в день, коли тобі сумно — я хочу, щоб ти згадала:ти дуже цінна, дуже красива, дуже особлива.І в моєму серці для тебе завжди є місце, де тепло.  Для тебе, моя Анастасія.
З любов’ю.</p>
        </div>
      </div>
    </section>

    <section class="section promise-section">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow">мої обіцянки</p>
          <h2>Те, що я хочу повторювати тобі завжди</h2>
        </div>
        <div class="promise-grid">
          <article class="promise reveal"><span>01</span><h3>Бути поруч</h3><p>Навіть коли день важкий, я хочу бути твоїм теплом, підтримкою і спокоєм.</p></article>
          <article class="promise reveal delay-1"><span>02</span><h3>Берегти тебе</h3><p>Нагадувати: будь обережна, не хвилюйся, я з тобою, ми все пройдемо.</p></article>
          <article class="promise reveal delay-2"><span>03</span><h3>Пишатися тобою</h3><p>Твоєю силою, добротою, ніжністю, красою і тим, як ти встигаєш бути такою справжньою.</p></article>
          <article class="promise reveal delay-3"><span>04</span><h3>Любити безмежно</h3><p>Не за щось одне, а за всю тебе: смішну, серйозну, ніжну, сильну, мою.</p></article>
        </div>
      </div>
    </section>

    <section class="section gallery-section" id="gallery">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow">тільки ці фото</p>
          <h2>Чотири кадри — чотири настрої Анастасії</h2>
        </div>
        <div class="gallery">
          <button class="photo-card tall reveal" data-img="assets/img/portrait-bw.webp" data-title="Твоя тиша" type="button">
            <img src="assets/img/portrait-bw-thumb.webp" alt="Чорно-білий портрет" loading="lazy" />
            <span>Твоя тиша</span>
          </button>
          <button class="photo-card wide reveal delay-1" data-img="assets/img/lake-close.webp" data-title="Наш спокій біля води" type="button">
            <img src="assets/img/lake-close-thumb.webp" alt="Анастасія біля озера" loading="lazy" />
            <span>Наш спокій біля води</span>
          </button>
          <button class="photo-card wide reveal delay-2" data-img="assets/img/kyiv-wide.webp" data-title="Маленька ти — великий світ" type="button">
            <img src="assets/img/kyiv-wide-thumb.webp" alt="Анастасія на фоні Києва" loading="lazy" />
            <span>Маленька ти — великий світ</span>
          </button>
          <button class="photo-card wide reveal delay-3" data-img="assets/img/lake-wide.webp" data-title="Дорога, де я хочу йти з тобою" type="button">
            <img src="assets/img/lake-wide-thumb.webp" alt="Анастасія на містку біля озера" loading="lazy" />
            <span>Дорога, де я хочу йти з тобою</span>
          </button>
        </div>
      </div>
    </section>

    <section class="section words-section" id="words">
      <div class="container words-layout">
        <div class="words-sticky reveal">
          <p class="eyebrow">з настрою переписок</p>
          <h2>Коли одних слів мало, я все одно пишу тобі ще.</h2>
          <p>Тут не виставлені ваші особисті переписки. Тут тільки ніжні фрази в тому стилі, який між вами повторюється знову і знову.</p>
        </div>
        <div class="chat-stack">
          <div class="bubble from-me reveal">Мишуня, я тебе люблю чуєш? ❤️</div>
          <div class="bubble from-her reveal delay-1">і я тебе дуже сильно люблю 🥹</div>
          <div class="bubble from-me reveal delay-2">Люблю, цілую, обіймаю — безкінечно.</div>
          <div class="bubble from-her reveal delay-3">чекаю дзвінка ❤️</div>
          <div class="bubble from-me reveal">Ти в мене найкраща дівчинка у світі.</div>
          <div class="bubble from-her reveal delay-1">мій коханий ❤️</div>
        </div>
      </div>
    </section>

    <section class="section timeline-section">
      <div class="container">
        <div class="section-head reveal">
          <p class="eyebrow">наш ритм</p>
          <h2>Так виглядає любов у дрібницях</h2>
        </div>
        <div class="timeline">
          <div class="time-item reveal"><span>ранок</span><p>“Добрий ранок, кохана” — щоб день починався тепліше.</p></div>
          <div class="time-item reveal delay-1"><span>день</span><p>“Будь обережна” — бо ти для мене дуже важлива.</p></div>
          <div class="time-item reveal delay-2"><span>вечір</span><p>“Чекаю дзвінка” — бо твій голос робить усе ближчим.</p></div>
          <div class="time-item reveal delay-3"><span>ніч</span><p>“Солодких снів” — і нехай тобі сниться щось дуже добре. Може, я.</p></div>
        </div>
      </div>
    </section>

    <section class="section interactive-section">
      <div class="container interactive-card reveal">
        <div>
          <p class="eyebrow">маленька гра</p>
          <h2>Натисни на сердечка</h2>
          <p>Кожне сердечко відкриє одну причину, чому Анастасія особлива.</p>
        </div>
        <div class="heart-grid" id="heartGrid" aria-label="Інтерактивні сердечка">
          <button type="button" data-note="Ти вмієш робити звичайний день теплим.">❤</button>
          <button type="button" data-note="Твоя усмішка — мій улюблений кадр.">❤</button>
          <button type="button" data-note="З тобою навіть тиша стає рідною.">❤</button>
          <button type="button" data-note="Я пишаюся тобою більше, ніж можу сказати.">❤</button>
          <button type="button" data-note="Ти моя Мишка, моя квіточка, моє сонечко.">❤</button>
          <button type="button" data-note="Я обираю тебе. Сьогодні. Завтра. Завжди.">❤</button>
        </div>
        <div class="heart-note" id="heartNote">Тут зʼявиться ніжне повідомлення…</div>
      </div>
    </section>

    <section class="section letter-section" id="letter">
      <div class="container">
        <div class="letter-card reveal">
          <div class="stamp">для тебе</div>
          <p class="eyebrow">лист Анастасії</p>
          <h2>Моя кохана Анастасія,</h2>
          <p>Я не завжди можу підібрати ідеальні слова, але я точно знаю одне: ти стала для мене людиною, яку хочеться берегти, обіймати, смішити, підтримувати і любити ще сильніше з кожним днем.</p>
          <p>У наших повідомленнях стільки “люблю”, “цілую”, “обіймаю”, “чекаю”, бо мені постійно хочеться бути ближче до тебе. Навіть коли ми не поруч, я хочу, щоб ти відчувала: ти не одна. Я поруч серцем.</p>
          <p>Ти моя Мишка, моя квіточка, моє сонечко, моя найрідніша дівчинка. Дякую тобі за тепло, за довіру, за твою справжність і за те, що ти є в моєму житті.</p>
          <p class="letter-final">Я тебе безмежно кохаю. Дуже сильно. По-справжньому. Назавжди.</p>
          <button class="btn btn-primary" id="confettiBtn" type="button">Натисни для любові</button>
          <div class="signature">Твій Святик ♡</div>
        </div>
      </div>
    </section>

    <section class="section final-section">
      <div class="container final-card reveal">
        <img src="assets/img/lake-wide.webp" alt="Анастасія на містку біля озера" loading="lazy" />
        <div>
          <p class="eyebrow">фінал, але не кінець</p>
          <h2>Цей сайт можна відкривати щоразу, коли захочеться згадати: тебе дуже люблять.</h2>
          <p>І якщо раптом день буде не таким, як хотілось, просто знай: для когось ти — цілий світ.</p>
          <a class="btn btn-ghost" href="#hero">Повернутися нагору</a>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <span>Зроблено з любовʼю для Анастасії</span>
    <span>♡</span>
    <span>2026</span>
  </footer>

  <div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Перегляд фото">
    <button class="lightbox-close" id="lightboxClose" type="button" aria-label="Закрити">×</button>
    <img id="lightboxImg" alt="" />
    <p id="lightboxTitle"></p>
  </div>

  <script src="assets/js/app.js"></script>
</body>
</html>
