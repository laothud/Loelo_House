<!DOCTYPE html>
<html>
<head>
    <title>Loelo House</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/foundation.min.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />
    <script src="js/vendor/modernizr.js"></script>
</head>

<body>

    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="home"><img src="img/logo.png"></a></h1>
        </li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">
          <li><?= Html::anchor('/video', 'Video') ?></li>
          <li><?= Html::anchor('/art', 'Art') ?></li>
          <li><?= Html::anchor('/events', 'Events') ?></li>
          <li><?= Html::anchor('/login', 'Login') ?></li>
        </ul>
      </section>
    </nav>