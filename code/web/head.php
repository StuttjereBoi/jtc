<head>
  <!-- metakeys -->
  <meta charset="utf8mb4">
  <meta name="description" content="Free Japanese learning website">
  <meta name="keywords" content="Japanese, Exercises, Learning, JFZ">
  <meta name="author" content="Jacob Ligthart">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- default style sheets -->
  <link rel="stylesheet" alt="default style" href="../assets/css/style.css">
  <link rel="icon" alt="website icon" href="../assets/images/.png">
  <!-- page specifics -->
  <?php
    // Get pagename
    $pageName = str_replace('.php', '', basename($_SERVER['PHP_SELF']));
    // Link stylesheet
    echo "<link rel='stylesheet' href='../assets/css/{$pageName}.css'>";
    // Switch for pages
    switch($pageName){
      case 'index':
        break;
      default:
        break;
    }
  ?>
</head>
