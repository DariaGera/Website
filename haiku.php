<!DOCTYPE html>
<html>
<head>
<title>Haiku</title>
<link rel="stylesheet" href="css/haiku.css"/>
</head>
<body>
<div style="height: 0px">
<h1>Хайку</h1>
</div>
<div id="first">
<a href="index" id="main">Гoловна</a>
</div>
<table>
<tr>
     <p style="color: rgb(0, 0, 0); font-size: 30px; height: 195px">Ха́йку(яп. 俳句, はいく) — жанр японської ліричної поезії, трирядковий неримований вірш на основі першої півстрофи танка, що складається з 17 складів (5-7-5) і відрізняється простотою поетичної мови, свободою викладу. Класичні хайку обов'язково будуються на співвіднесенні людини (автора), її внутрішнього світу, біографії з природою, при чому природа повинна бути визначена відносно пори року — для цього як обов'язковий елемент тексту використовується кіго. Найчастіше розповідь ведеться в теперішньому часі: автор показує свої переживання.</p>
</tr>
<tr>
<td class="poets">
<ul>
<li><a href="haikuM" style="text-decoration: none; color: rgba(65, 90, 192,0.8);">Мацуо Басьо<h3><img class="loop" src="pics/Basho.jpg"  width="200px" height="300px" style="margin-left: 1150px;" alt="Мацуо Басьо, хайку, жанри японської літератури, твори, фото"></li>
<li><a href="haikuYo" style="text-decoration: none; color: rgba(65, 90, 192,0.8);">Йоса Бусон<h3><img class="loop" src="pics/Yosa.jpg"  width="200px" height="300px" style="margin-left: 1150px;" alt="Йоса Бусон, хайку, жанри японської літератури, твори, фото"></li>
<li><a href="haikuKo" style="text-decoration: none; color: rgba(65, 90, 192,0.8);">Кобаясі Ісса<h3><img class="loop" src="pics/issa.jpg"  width="200px" height="300px" style="margin-left: 1150px;" alt="Кобаясі Ісса, хайку, жанри японської літератури, твори, фото"></li>
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
