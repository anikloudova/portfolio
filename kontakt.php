<!DOCTYPE html>
<html lang="en">
<head>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Osobní portfolio Anny Kloudové – ukázky webové a grafické tvorby.">
  <title>Kontakt | Moje Portfolio</title>
  <link rel="stylesheet" href="kontakt.css">
</head>
<body>
  <header>
    <nav>
      <a href="index.html">Úvod</a>
      <a href="www.php">Webové projekty</a>
      <a href="dim.php">Grafické projekty</a>
      <a href="dalsi.php">Další projekty</a>
      <a href="kontakt.php" class="active">Kontakt</a>
    </nav>
  </header>
</head>
<body>
    <section id="kontakt" class="contact-section">
  <div class="contact-container">
    <h1>Sjednejte si schůzku</h1>
    <p>Máte zájem o spolupráci? Zanechte mi zprávu.</p>

    <form action="odeslat.php" method="POST" class="appointment-form">
      <div class="form-grid">
        <div class="form-group">
          <input type="text" name="jmeno" placeholder="Vaše jméno*" required>
        </div>
        <div class="form-group">
          <input type="text" name="prijmeni" placeholder="Příjmení*" required>
        </div>
        <div class="form-group">
          <input type="tel" name="telefon" placeholder="Telefonní číslo">
        </div>
        <div class="form-group">
          <input type="email" name="email" placeholder="Email*" required>
        </div>
      </div>
      <div class="form-group full-width">
        <textarea name="zprava" placeholder="Zpráva" rows="5"></textarea>
      </div>
      <button type="submit" class="submit-btn">Odeslat</button>
    </form>
  </div>
</section>

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