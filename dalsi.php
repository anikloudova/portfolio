<!doctype html>
<html lang="cs">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Další projekty</title>
  <meta name="description" content="Osobní portfolio Anny Kloudové – ukázky webové a grafické tvorby.">
  <link rel="stylesheet" href="dalsi.css">
</head>
<body>
  <header>
    <nav>
      <a href="index.html">Úvod</a>
      <a href="www.php">Webové projekty</a>
      <a href="dim.php">Grafické projekty</a>
      <a href="dalsi.php" class="active">Další projekty</a>
      <a href="kontakt.php">Kontakt</a>
    </nav>
  </header>

  <main class="container">
    <h1>Další projekty</h1>
    
    
  <div class="projects-grid">
    <article class="project-card">
      <a href="obrazky/Letak_CarePlus.png" class="project-img-link"> <!--budou jeste doplneny odkazy -->
        <img src="obrazky/skincare.jpeg" alt="Holka s kosmetikou" loading="lazy">
      </a>

      <div class="project-info">
        <h2>CarePlus</h2>
        
        <div class="project-meta">
          <span>📅 Leden 2024</span>
          <span>👤 Pro koho: Kosmetiká značka</span>
        </div>

        <div class="project-description">
          <p><strong>Účel:</strong> Leták sloužící k propagaci nových produktů značky, nebylo to tolik o grafické práci, ale o sazbě textu, jak bude uspořádaý mezi obrázky, aby bylo dodrženo ochranné pásmo a o typografii.</p>
        </div>

        <h3>Použité technologie:</h3>
        <div class="tech-tags">
          <span class="tag">Adobe InDesign</span>
        </div>
      </div>
    </article>

     <article class="project-card">
      <a href="obrazky/logodlouhe.png" class="project-img-link"> <!--budou jeste doplneny odkazy -->
        <img src="obrazky/fashion.jpeg" alt="Foto textu" loading="lazy">
      </a>

      <div class="project-info">
        <h2>Logo Argo Bags</h2>
        
        <div class="project-meta">
          <span>📅 Březen 2024</span>
          <span>👤 Pro koho: Značka kabelek</span>
        </div>

        <div class="project-description">
          <p><strong>Účel:</strong> Logo je navrženo tak, aby bylo dominantním prvkem na webových stránkách, tiskovinách i jako ražba přímo na produktech. Hlavním prvkem je autorská úprava serifového písma s elegantními ligaturami, které propojují jednotlivá písmena a vytvářejí tak plynulý, prémiový dojem. Barevnost v odstínech stříbrné na černém pozadí podtrhuje exkluzivitu a nadčasovost značky.</p>
        </div>

        <h3>Použité technologie:</h3>
        <div class="tech-tags">
          <span class="tag">Adobe Illustrator</span>
        </div>
      </div>
    </article>

    <article class="project-card">
      <a href="obrazky/webdesing.png" class="project-img-link"> <!--budou jeste doplneny odkazy -->
        <img src="obrazky/bag.jpeg" alt="Holka s kabelkou" loading="lazy">
      </a>

      <div class="project-info">
        <h2>ArgoBags</h2>
        
        <div class="project-meta">
          <span>📅 Červen 2024</span>
          <span>👤 Pro koho: Značka kabelek</span>
        </div>

        <div class="project-description">
          <p><strong>Účel:</strong> Design úvodní stránky e-shopu zaměřeného na módu a doplňky. Cílem bylo vytvořit moderní, vzdušný a uživatelsky přívětivý web. Návrh obsahuje přehledné navigační menu, sekce s aktuálními kolekcemi („Summer 2024“) a důraz na kvalitní produktové fotografie.</p>
        </div>

        <h3>Použité technologie:</h3>
        <div class="tech-tags">
          <span class="tag">Adobe Indesign</span>
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