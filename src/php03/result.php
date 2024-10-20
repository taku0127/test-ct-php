<?php 
require_once('functions/serch_city_time.php');
$tokyo = searchCityTime('東京');
$get_post = htmlspecialchars($_GET["city"],ENT_QUOTES);
$get_info = searchCityTime($get_post);
var_dump($get_post)
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>World Clock</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/php03/index.php">
        World Clock
      </a>
    </div>
  </header>
    <main>
        <div class="result__content">
            <div class="result-cards">
            <div class="result-card">
                <div class="result-card__img-wrapper">
                <img class="result-card__img" src="img/<?php echo $tokyo["img"]; ?>" alt="国旗">
                </div>
                <div class="result-card__body">
                <p class="result-card__city"><?php echo $tokyo["name"] ?></p>
                <p class="result-card__time"><?php echo $tokyo["time"] ?></p>
                </div>
            </div>
            <div class="result-card">
                <div class="result-card__img-wrapper">
                <img class="result-card__img" src="img/<?php echo $get_info["img"] ?>" alt="国旗">
                </div>
                <div class="result-card__body">
                <p class="result-card__city"><?php echo $get_info["name"] ?></p>
                <p class="result-card__time"><?php echo $get_info["time"] ?></p>
                </div>
            </div>
            </div>
        </div>
    </main>
</body>

</html>
