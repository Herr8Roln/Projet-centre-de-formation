
<html style="font-size: 16px;" class="u-responsive-sm"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Tableau de Résultats</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Tableau-de-Résultats.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.21.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Illustration-offre-4-1-250x250.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Tableau de Résultats">
    <meta property="og:type" content="website">
  <style type="text/css" id="operaUserStyle"></style></head>
  <body data-home-page="Accueil.html" data-home-page-title="Tableau de Résultats" class="u-body"><header class="u-clearfix u-header u-header" id="sec-fe4a"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="250" data-image-height="250">
          <img src="images/Illustration-offre-4-1-250x250.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1 u-enable-responsive">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base active" href="#" style="padding: 10px 20px;">Tableau de Résultats</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link active" href="#" style="padding: 10px 20px;">Tableau de Résultats</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        <style class="offcanvas-style">            .u-offcanvas .u-sidenav { flex-basis: 250px !important; }            .u-offcanvas:not(.u-menu-open-right) .u-sidenav { margin-left: -250px; }            .u-offcanvas.u-menu-open-right .u-sidenav { margin-right: -250px; }            @keyframes menu-shift-left    { from { left: 0;        } to { left: 250px;  } }            @keyframes menu-unshift-left  { from { left: 250px;  } to { left: 0;        } }            @keyframes menu-shift-right   { from { right: 0;       } to { right: 250px; } }            @keyframes menu-unshift-right { from { right: 250px; } to { right: 0;       } }            </style></nav>
        <h3 class="u-text u-text-default u-text-1">Centre de formation&nbsp;</h3>
      </div></header>
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-abd1" data-image-width="1252" data-image-height="835">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
        <?php

//déclaration du tableau 
$notes = array(
  "Ali" => array(
    "PHP" => array("tp" => 12, "ds" => 15, "examen" => 17),
    "REACT" => array("tp" => 14, "ds" => 16, "examen" => 13),
    "NODEJS" => array("tp" => 16, "ds" => 18, "examen" => 19),
    "JAVA" => array("tp" => 15, "ds" => 14, "examen" => 16)
  ),
  "Sami" => array(
    "PHP" => array("tp" => 13, "ds" => 16, "examen" => 18),
    "REACT" => array("tp" => 12, "ds" => 14, "examen" => 12),
    "NODEJS" => array("tp" => 14, "ds" => 15, "examen" => 17),
    "JAVA" => array("tp" => 17, "ds" => 18, "examen" => 19)
  ),
  "Mohamed" => array(
    "PHP" => array("tp" => 14, "ds" => 17, "examen" => 15),
    "REACT" => array("tp" => 18, "ds" => 19, "examen" => 17),
    "NODEJS" => array("tp" => 12, "ds" => 14, "examen" => 16),
    "JAVA" => array("tp" => 13, "ds" => 15, "examen" => 18)
  ),
  "Omar" => array(
    "PHP" => array("tp" => 16, "ds" => 18, "examen" => 17),
    "REACT" => array("tp" => 15, "ds" => 15, "examen" => 16),
    "NODEJS" => array("tp" => 17, "ds" => 19, "examen" => 18),
    "JAVA" => array("tp" => 18, "ds" => 17, "examen" => 15)
  )
);

foreach ($notes as $etudiant => $matieres) {
  echo "<h2>Bulletin de notes de $etudiant</h2>";
  echo "<table border='1' width='400px' class='u-table-entity'> ";
  echo "<tr><th>Matière</th><th>TP</th><th>DS</th><th>Examen</th><th>Moyenne</th></tr>";
  $total_moyennes = 0;
  $nb_matieres = 0;
  foreach ($matieres as $matiere => $notes) {
    $moyenne_matiere = ($notes['tp'] + $notes['ds'] + ($notes['examen'] * 2))/4;
    echo "<tr><td>$matiere</td><td>{$notes['tp']}</td><td>{$notes['ds']}</td><td>{$notes['examen']}</td><td>$moyenne_matiere</td></tr>";
    $total_moyennes += $moyenne_matiere;
    $nb_matieres++;
  }
  $moyenne_generale = $total_moyennes / $nb_matieres;
  echo "<tr><td colspan='5'>la moyenne général : $moyenne_generale</td></tr>";
  echo "</table>";
  echo "<br>";
  echo "<br>";
}
    ?>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-7d1d"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> @All Copyrights Reserverd 2022-2023</p>
      </div></footer>
</body></html>

