<!DOCTYPE html>
<html>
<head>
<title>New Time</title>
<link rel="stylesheet" href="css/haiku.css"/>
</head>
<body>
<div style="height: 0px">
<h1>Новий час(Проза)</h1>
</div>
<div id="first">
<a href="index" id="main">Гoловна</a>
</div>
<table>
<tr>
     <p style="color: rgb(0, 0, 0); font-size: 30px; height: 195px">Проза (лат. prosa, від prosa oratio — пряма мова) — літературний твір або сукупність творів, написаних невіршованою мовою.Західна література нахлинула в Японію стрімко - немов би хвиля цунамі, вносячи сум'яття в розум приголомшеної Японії, що уперше відкрилася світові після тривалого культурного самітництва лише наприкінці XІ століття . Багато в чому під її впливом наприкінці сторіччя були написані твори видатних прозаїків Морі Огай і Нацуме Сосекі, що залишаються одними з найбільших цінностей у скарбниці японської художньої прози і сьогодні.</p>
</tr>
<tr>
<td class="poets">
<ul>
<li style="text-decoration: none; cursor: not-allowed;">Акутагава Рюносуке<h3><img class="loop" src="pics/Akutagawa.jpg" width="200px" height="300px" style="margin-left: 1150px;" alt="Акутагава Рюносуке, проза, новий час, жанри японської літератури, твори, фото"></li>
<li style="text-decoration: none; cursor: not-allowed;">Арісіма Такео<h3><img class="loop" src="pics/Takeo.jpg" width="200px" height="300px" style="margin-left: 1150px;" alt="Арісіма Такео, проза, новий час, жанри японської літератури, твори, фото"></li>
<li style="text-decoration: none; cursor: not-allowed;">Морі Огай<h3><img class="loop" src="pics/mori.jpg" width="200px" height="300px" style="margin-left: 1150px;" alt="Морі Огай, проза, новий час, жанри японської літератури, твори, фото"></li>
<li style="text-decoration: none; cursor: not-allowed;">Нацуме Сосекі<h3><img class="loop" src="pics/Soseki.jpg" width="200px" height="300px" style="margin-left: 1150px;" alt="Нацуме Сосекі, проза, новий час, жанри японської літератури, твори, фото"></li>
<li style="text-decoration: none; cursor: not-allowed;">Ямада Бімьо<h3><img class="loop" src="pics/Yamada.jpg" width="200px" height="300px" style="margin-left: 1150px;" alt="Ямада Бімьо, проза, новий час, жанри японської літератури, твори, фото"></li>
<li style="text-decoration: none; cursor: not-allowed;">Дадзай Осаму<h3><img class="loop" src="pics/Osamu.jpg" width="200px" height="300px" style="margin-left: 1150px;" alt="Дадзай Осаму, проза, новий час, жанри японської літератури, твори, фото"></li>
</ul>
</ul>
</td>
</tr>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script type="text/javascript">
jQuery(function(){
 $("#Go_Top").hide();
 if ($(window).scrollTop()>=250) $("#Go_Top").fadeIn("slow")
 $(window).scroll(function(){
  if ($(window).scrollTop()<=250) $("#Go_Top").fadeOut("slow")
  else $("#Go_Top").fadeIn("slow")
 });

 $("#Go_Bottom").hide();
 if ($(window).scrollTop()<=$(document).height()-999) $("#Go_Bottom").fadeIn("slow")
 $(window).scroll(function(){
  if ($(window).scrollTop()>=$(document).height()-999) $("#Go_Bottom").fadeOut("slow")
  else $("#Go_Bottom").fadeIn("slow")
 });

 $("#Go_Top").click(function(){
  $("html, body").animate({scrollTop:0}, "slow")
 })
 $("#Go_Bottom").click(function(){
  $("html, body").animate({scrollTop:$(document).height()}, "slow")
 })
});
</script>
<img src="pics/up.png" alt="Наверх" title="Наверх" id="Go_Top"
style="position: fixed; bottom: 70px; right: 10px; cursor: pointer;"width="50px" height="50px">
<img src="pics/down.png" alt="Наверх" title="Наверх" id="Go_Bottom"
style="position: fixed; bottom: 20px; right: 10px; cursor: pointer;"width="50px" height="50px">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/okzoom.js" type="text/javascript"></script>
<script>
	$(function() {
		$(".loop").okzoom({ // img - применяем ко всем изображениям на сайте
			width: 200, // Ширина лупы
			height: 200, // Высота лупы
			background: "transparent", // Фон лупы
			border: "1px solid black", // Обводка лупы
			shadow: "0 0 4px #000" // Тень лупы
		});
	});
</script>
</body>
</html>
