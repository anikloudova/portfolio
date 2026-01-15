<!doctype html>
<html lang="cs">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grafické projekty</title>
  <meta name="description" content="Osobní portfolio Anny Kloudové – ukázky webové a grafické tvorby.">
  <link rel="stylesheet" href="dim.css">
</head>
<body>
  <header>
    <nav>
      <a href="index.html">Úvod</a>
      <a href="www.php">Webové projekty</a>
      <a href="dim.php" class="active">Grafické projekty</a>
      <a href="dalsi.php">Další projekty</a>
      <a href="kontakt.php">Kontakt</a>
    </nav>
  </header>

  <main class="container">
    <h1>Grafické projekty</h1>
    
    
  <div class="projects-grid">
    <article class="project-card">
      <a href="obrazky/kun.jpg" class="project-img-link"> 
        <img src="obrazky/horse.jpg " alt="Kůň" loading="lazy">
      </a>

      <div class="project-info">
        <h2>Polygrafika obrázku</h2>
        
        <div class="project-meta">
          <span>📅 Prosinec 2022</span>
        </div>

        <div class="project-description">
          <p><strong>Účel:</strong> Tato práce se zaměřuje na geometrickou stylizaci zvířecího motivu. Celá ilustrace je složena z jednotlivých polygonů, které vytvářejí hloubku a stínování pomocí různé intenzity šedých tónů. Projekt byl zaměřen na pochopení anatomie v plochách a trpělivost při zachování dokonale navazujících linií.</p>
        </div>

        <h3>Použité technologie:</h3>
        <div class="tech-tags">
          <span class="tag">Adobe Illustrator</span>
        </div>
      </div>
    </article>

     <article class="project-card">
      <a href="obrazky/argobagss.png" class="project-img-link"> <!--budou jeste doplneny odkazy -->
        <img src="obrazky/kabelka.jpeg" alt="Fotka kabelky" loading="lazy">
      </a>

      <div class="project-info">
        <h2>Leták Argobags</h2>
        
        <div class="project-meta">
          <span>📅 Květen 2024</span>
        </div>

        <div class="project-description">
          <p><strong>Účel:</strong>Projekt zaměřený na vytvoření vizuálního stylu pro značku luxusních kabelek. Hlavním prvkem je výrazná typografie, která se opakuje na pozadí jako jemný vzor (pattern), čímž vytváří hloubku a rytmus. Práce simuluje reálný výstup pro módní kampaň nebo jako post na soc. sítě díky čtvercovému formátu.</p>
        </div>

        <h3>Použité technologie:</h3>
        <div class="tech-tags">
          <span class="tag">Adobe InDesign</span>
        </div>
      </div>
    </article>

    <article class="project-card">
      <a href="obrazky/autoportret.png" class="project-img-link"> <!--budou jeste doplneny odkazy -->
        <img src="obrazky/autoportret.png" alt="Náhled autoportrétu" loading="lazy">
      </a>

      <div class="project-info">
        <h2>Koláž autoportétu</h2>
        
        <div class="project-meta">
          <span>📅 Červen 2025</span>
        </div>

        <div class="project-description">
          <p><strong>Účel:</strong>Tento projekt byl zaměřen na tvorbu digitálního autoportrétu formou koláže. Cílem bylo propojit vlastní fotografii s vizuálními symboly osobních preferencí a estetiky. Práce kladla důraz na využití vrstev, maskování objektů, retuše a color gradingu.</p>
        </div>

        <h3>Použité technologie:</h3>
        <div class="tech-tags">
          <span class="tag">Adobe Photoshop</span>
        </div>
      </div>
    </article>
   
  </div>
  <div style="text-align: center; margin-top: 50px;">
      <a href="#top" class="back-to-top">↑ Zpět na přehled</a>
  </div>
  </main>
<footer>
  <div class="footer-content">
    <div class="footer-info">
      <h3>Anna Kloudová</h3>
      <div class="ftext"><p>Digitální designérka & studentka multimédií</p></div>
    </div>
    <div class="footer-links">
      <a href="mailto:tvuj@email.cz">annakloudova@gmail.com</a>
      <p>Tel: +420 790 677 532</p>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2026 Anna Kloudová. Všechna práva vyhrazena.</p>
    </div>
  </div>
  <div class="footer-counter">
      <?php include 'counter.php'; ?>
    </div>
</footer>
</body>
</html>