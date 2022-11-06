<?php 
  $title = 'Новости';
  include('./header.php');
?>
<link rel="stylesheet" type="text/css" href="/styles/stylemain.css">

<div class="intro">
  <div class="container">
    <div class="containerph">
      <img src="image/ph.jpg" width="420px" height="">
    </div>
    <link href="https://fonts.googleapis.com/css2?family=Mukta&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <h1 class="intro__title">Купить криптовалюту безопасно и легко на SOUL</h1>
    <h2 class="intro__suptitle"></h2>
  </div>
</div>

<div class="newsHEAD">
  <div id="newsimage">
    <img src="/image/news1.png" class="newsimage">
  </div>
  <div class="card-body" id="card-body">
    <p class="card-text">31 января в течение трех минут неизвестные переместили в совокупности 45 596 BTC ($1,68 млрд на момент совершения транзакций) между различными кошельками. На это обратил внимание сервис Bitcoin Block Bot
    Все семь транзакций оказались включены в один блок #721 186
    Хотя включение транзакций в один блок и схожий размер комиссии не могут прямо свидетельствовать о том, что их отправителем был один и тот же пользователь, эти транзакции безусловно неким образом связаны между собой, заявил в комментарии ForkLog CEO Indefibank Сергей Менделеев</p>
  </div> 
</div>
<div class="news">
  <p class="newscenter">
  <img src="/image/news2.png" class="newsimage" id="newsimage">
  <div class="card-body" id="card-body">
    <p class="card-text">Криптовалютный проект основателя Meta Platforms Inc. Марка Цукерберга, начатый в 2019 году, будет закрыт, а его технологии продадут небольшому калифорнийскому банку Silvergate Capital Corp

    Как пишет The Wall Street Journal со ссылкой на информированный источник, стоимость сделки составит около $200 млн, сообщает Интерфакс-Украина

    Проект, начатый под названием Libra, обратил на себя пристальное внимание американских законодателей и регуляторов почти сразу после того, как Facebook объявил о планах создания собственной криптовалюты

    Предполагалось, что криптовалюта Facebook будет относиться к категории "стейблкойн" (stablecoin – общее название криптовалюта, которые обеспечены национальными валютами и активами)</p>
  </div> 
  </p>
</div> 
<script>
  $('#newsimage').click (function(){
    if ($('#card-body').is(':visible'))
        $('#card-body').hide();
    else
        $('#card-body').show();
  });

  window.onresize = function (event) {
    $('#card-body').hide ();
  }
</script>

<?php 
  include('./footer.html');
?>