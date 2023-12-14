<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?= $title; ?></title>
  <link href="../css/normalize.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/flatpickr.min.css" rel="stylesheet">
</head>

<body style="background-color: #259cbd">
<div class="page-wrapper">
<header class="main-header">
    <div class="main-header__container container">
        <form class="main-header__search" method="get" action="search.php" autocomplete="off">
            <input type="search" name="search" placeholder="Поиск лота" value="<?= $search; ?>">
            <input class="main-header__search-btn" type="submit" name="find" value="Найти">
        </form>
        <a class="main-header__add-lot button" href="add.php">Добавить лот</a>

        <nav class="user-menu">
        <?php if ($is_auth): ?>
            <div class="user-menu__logged" style="color: #ffffff;">
               <p><?= $user_name; ?></p>
               <a  class="user-menu__bets" href="my-bets.php" style="color: #ffffff;">Мои ставки</a>
               <a  class="user-menu__logout" href="logout.php" style="color: #ffffff;">Выход</a>
            </div>
         <?php else: ?>
            <ul class="user-menu__list">
               <li class="user-menu__item">
                  <a href="sign-up.php">Регистрация</a>
               </li>
               <li class="user-menu__item">
                  <a href="login.php">Вход</a>
               </li>
            </ul>
         <?php endif; ?>
        </nav>
    </div>
</header>
<?= $content; ?>
</div>

<footer class="main-footer">
  <div class="main-footer__bottom container">
    <div class="main-footer__copyright">
      <p>© <?= date('Y') ?></p>
      <p>Интернет-аукцион горнолыжного оборудования</p>
    </div>
</footer>

<script src="flatpickr.js"></script>
<script src="script.js"></script>
</body>
</html>
