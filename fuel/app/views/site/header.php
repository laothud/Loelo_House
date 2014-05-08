<?
$sessionUsername = Session::get('username');
$user = Model_User::get_one($sessionUsername);
if(isset($user)){
  if($user->group_id == "6"){?>
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
              <h1><a href="index.html"><img src="img/logo.png"></a></h1>
            </li>
          </ul>

          <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
              <li class="has-dropdown">
                <a href="#">Admin Tools</a>
                <ul class="dropdown">
                  <li><a href="admin_dash.html">Blog</a></li>
                    <li><a href="admin_add_user.html">Users</a></li>
                  <li><a href="admin_art.html">Art</a></li>
                    <li><a href="admin_video.html">Video</a></li>
                    <li><a href="admin_events.html">Events</a></li>
                </ul>
            </li>
              <li><?= Html::anchor('logout', 'Logout') ?></li>
            </ul>
          </section>
        </nav>
  <?}else if($user->group_id == "3"){?>

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
              <h1><a href="index.html"><img src="img/logo.png"></a></h1>
            </li>
          </ul>

          <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
              <li><a href="index.html">Logout</a></li>
            </ul>
          </section>
        </nav>

  <?}
}
else{?>
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
<?}?>
