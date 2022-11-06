<?php 
  session_start();
  $_SESSION['wallet'] = $_POST['wallet'];
  $_SESSION['mail']   = $_POST  ['mail'];
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="/image/favicon.ico" type="image/x-icon">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/styles/stylemain.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/721052214b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https: //fonts.googleapis.com/css2?family= Roboto & display = swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo "$title";?></title>
</head>
<!-- <div id="header">
    <header class="d-flex justify-content-center py-3">
       <ul class="nav nav-pills">
        <li class="nav-link"><a href="/index.php"><img src="/image/icon.png" id="icon"></a></li>
       <li class="nav-item headElement"><a href="https://web.telegram.org/z/#2010160407" target="_blank" class="nav-link"><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Features" data-translation="Поддержка" data-type="trSpan" class="positionHEAD">Поддержка</ya-tr-span></a></li>
        <li class="nav-item headElement"><a href="/about/about.php" class="nav-link"><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="About" data-translation="О нас" data-type="trSpan" class="positionHEAD">О нас</ya-tr-span></a></li>
        <li class="nav-item"><button class="btn waves-effect waves-light btnBotHEAD" type="submit" name="action">BOT</button></li>
      </ul> 
    </header>
	</div> -->

<div id="header">
    <header class="headELL">
      <ul class="nav nav-pills ulPC">
        <li class="nav-link"><a href="/index.php"><img src="/image/icon.png" id="icon"></a></li>
        <li class="nav-item headElement2"><a href="https://web.telegram.org/z/#2010160407" target="_blank" class="nav-link"><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Features" data-translation="Поддержка" data-type="trSpan" class="positionHEAD">Поддержка</ya-tr-span></a></li>
        <li class="nav-item headElement1"><a href="/buy/sell.php" target="_blank" class="nav-link"><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Features" data-translation="Продать" data-type="trSpan" class="positionHEAD">Продать</ya-tr-span></a></li>
        <li class="nav-item headElement"><a href="/about/about.php" class="nav-link" id="positionHEAD"><ya-tr-span data-index="11-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="About" data-translation="О нас" data-type="trSpan" class="positionHEAD">О нас</ya-tr-span></a>
            <div class="d" id="d">
              <a class="abc" href="/about/Anti-MoneyLP&KYCP.php">Anti-Money Laundering Policy and Know Your Client Policy</a>
              <a class="abc" href="/about/ExchangeT&C.php">Exchange terms and conditions</a>
              <a class="abc" href="/about/HowtoRaED.php">How to recover an erroneous deposit</a>
              <a class="abc" href="/about/OfficialRfCS.php">Official replies from Crypto Soul</a>
              <a class="abc" href="/about/SecurityPolicy.php">Security Policy</a>
              <a class="abc" href="/about/TermsofSCS.php">Terms of Service Crypto Soul</a>
              <a class="abc" href="/about/UserAgreementExchange.php">User Agreement Exchange</a>
            </div></li>
      <a class="positionBUTTONHEAD" href="https://web.telegram.org/z/#5139031706"><button class="btn waves-effect waves-light btnBotHEAD positionHEADBOT" type="submit" name="action">BOT</button></a>
      </ul>

      <ul class="nav nav-pills ulMobile">
        <div class="liInline"><a href="/index.php"><img src="/image/icon.png" id="icon"></a></div>
        <div class="liInline"><a href="https://web.telegram.org/z/#2010160407" target="_blank" class="nav-link"><ya-tr-span data-index="8-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Features" data-translation="Поддержка" data-type="trSpan" class="positionHEAD">Поддержка</ya-tr-span></a></div>
        <div class="liInline"><a class="positionBUTTONHEAD liInline" href="https://web.telegram.org/z/#5139031706"><button class="btn waves-effect waves-light btnBotHEAD positionHEADBOT" type="submit" name="action">BOT</button></a></div>
        <div class="liInline" id="mmm"><i class="fa-solid fa-bars barsElement" ></i></div>
      </ul>
    
    </header>
</div>


  <body>
    <div class="sellForm">
      <p id="nameAdressWall">Введенное вами значение:</p>
      <p><?php $wallet=$_POST['wallet']; echo $wallet; ?></p>
      <p>Адрес кошелька для транзации, скопируйте</p>
      <p id="adressWall"><?php echo $purchaseKrypto;?></p>
      <p>После оплаты прикрепите фото платежа, выбирайте внимательно</p>
        <div class="successMessage">
          <?php
            if ($_SESSION['message']) {
            echo '<p id="err">'.$_SESSION['message'].'</p>';
          }
           unset($_SESSION['message']);
          ?>
        </div>
        <form action="/send.php" enctype="multipart/form-data" method="post" id="form">
          <div class="form-group izoForm">
            <input  type="file" name="myfile[]" multiple id="myfile" class="form-control-file imagepay" accept="image/x-png,image/gif,image/jpeg">
            <button class="btn waves-effect waves-light btnKryptoHeadersell" type="submit" name="action">Подтвердить</button>
          </div>
        </form>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <script>
// Отправка данных на сервер
function send(event, php){
console.log("Отправка запроса");
event.preventDefault ? event.preventDefault() : event.returnValue = false;
var req = new XMLHttpRequest();
req.open('POST', php, true);
req.onload = function() {
  if (req.status >= 200 && req.status < 400) {
  json = JSON.parse(this.response); // Ебанный internet explorer 11
      console.log(json);
        
      // ЗДЕСЬ УКАЗЫВАЕМ ДЕЙСТВИЯ В СЛУЧАЕ УСПЕХА ИЛИ НЕУДАЧИ
      if (json.result == "success") {
        // Если сообщение отправлено
        alert("Сообщение отправлено");
      } else {
        // Если произошла ошибка
        alert("Ошибка. Сообщение не отправлено");
      }
    // Если не удалось связаться с php файлом
    } else {alert("Ошибка сервера. Номер: "+req.status);}}; 

// Если не удалось отправить запрос. Стоит блок на хостинге
req.onerror = function() {alert("Ошибка отправки запроса");};
req.send(new FormData(event.target));
}
</script><script src="/js/script.js"></script>
  </body>
