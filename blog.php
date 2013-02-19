<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><title>Критиканство &#8212; Блог</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1061">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="apple-touch-icon" href="apple-touch-icon.png"><!-- 144x114 -->
<link rel="shortcut icon" href="favicon.ico">

<link rel="stylesheet" href="css/main.css">

<script type="text/javascript" src="js/jquery.1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.qtip.min.js"></script>
<script type="text/javascript">
// Reviews list switcher
$(document).ready(function(){
	$('#button_reviews_list_games').click(function () {
	$('#reviews_list_movies').hide(); $('#reviews_list_games').show();
	$('#button_reviews_list_games').removeClass('button_frontrow').addClass('button_frontrow_down');
	$('#button_reviews_list_movies').removeClass('button_frontrow_down').addClass('button_frontrow');
});});
$(document).ready(function(){
	$('#button_reviews_list_movies').click(function () {
	$('#reviews_list_games').hide(); $('#reviews_list_movies').show();
	$('#button_reviews_list_movies').removeClass('button_frontrow').addClass('button_frontrow_down');
	$('#button_reviews_list_games').removeClass('button_frontrow_down').addClass('button_frontrow');
});});
// Qtip
$(document).ready(function()
	{$('[title]').qtip({position: {my: 'bottom center', at: 'top center', adjust: {x: 12, y: -6}}});}
);
</script>


<script type="text/javascript">
// Hover-unhover example (might be useful for menu)
//$(document).ready(function(){
//	$('.range').hover(function() { 
//	    $('.range_inactive').stop().animate({"opacity": 1}, "normal"); 
//	},function() { 
//	    $('.range_inactive').stop().animate({"opacity": 0.5}, "normal"); 
//});});
</script>

</head><body>




<!-- ============== TOP ============== -->
<div class="userbar clearfix">
	<div class="guest_wrap">
		<a href="#" class="guest_login"><span>Вход на сайт</span></a>
		<a href="#" class="button_add" title="Добавить ссылку на рецензию">Добавить&nbsp;<b>&#43;</b></a>
	</div>
</div>

<div class="menu clearfix">
	<a href="#"><img src="i/logo.png" alt="" class="logo"></a>
	<div class="search">
		<form id="searchForm"><fieldset><input type="text" name="s" id="s" value=""><input type="submit" id="search_submit" value="OK"></fieldset></form>
	</div>
	<div id="tabs">
		<ul>
		<li><a href="#" id="tab_first" class="" onmouseover="$('[id*=subtabs_]').hide(); $('#subtabs_first').show();">Фильмы</a></li>
		<li><a href="#" id="tab_second" class="" onmouseover="$('[id*=subtabs_]').hide(); $('#subtabs_second').show();">Игры</a></li>
		<li><a href="#" id="tab_third" class="" onmouseover="$('[id*=subtabs_]').hide(); $('#subtabs_third').show();">Критики</a></li>
		<li><a href="javascript:void(0)" id="tab_fourth" class="parent" onmouseover="$('[id*=subtabs_]').hide(); $('#subtabs_fourth').show();">Блог</a></li>
		</ul>
	</div>
</div>

<div class="submenu">
	<div style="display: none;" id="subtabs_first" onmouseover="$('#tab_first').addClass('subtabs_hover');" onmouseout="$('#tab_first').removeClass('subtabs_hover');">
		<ul><li><a href="javascript:void(0)" class="">Скоро в прокате</a></li><li><a href="#" class="">Лучшие и худшие за год</a></li><li><a href="#" class="">Лучшие и худшие за всё время</a></li><li><a href="#" class="">Выбор пользователей</a></li><li><a href="#" class="">Кассовые сборы</a></li></ul>
	</div>
	<div style="display: none;" id="subtabs_second" onmouseover="$('#tab_second').addClass('subtabs_hover');" onmouseout="$('#tab_second').removeClass('subtabs_hover');">
		<ul><li><a href="#" class="">Скоро в продаже</a></li><li><a href="#" class="">Лучшие и худшие за год</a></li><li><a href="#" class="">Лучшие и худшие за всё время</a></li><li><a href="#" class="">Выбор пользователей</a></li><li><a href="#" class="">Рейтинги продаж</a></li></ul>
	</div>
	<div style="display: none;" id="subtabs_third">
		<ul><li><a href="#" class="">Лучшие и худшие критики</a></li><li><a href="#" class="">Лучшие и худшие издания</a></li><li><a href="#" class="">Рейтинг &laquo;мудрецов&raquo;</a></li><li><a href="#" class="">Самые активные критики</a></li></ul>
	</div>
	<div style="display: block;" id="subtabs_fourth" onmouseover="$('#tab_fourth').addClass('subtabs_hover');" onmouseout="$('#tab_fourth').removeClass('subtabs_hover');">
		<ul><li><a href="javascript:void(0)" class="active">Новые записи</a></li><li><a href="#" class="">Архив записей</a></li><li><a href="#" class="">Комментарии</a></li></ul>
	</div>
	<div style="display: none;" id="subtabs_slogan">Сайт, где объективная критика невозможна</div>
</div>
<!-- ============== // TOP ============== -->



<!-- ============== CONTENT ============== -->
<div class="content page_default clearfix">


<div class="blog_pagination">
	<ul>
	<li>pagination</li>
	</ul>
</div>

<div class="blog_wrap">

<div class="blog_item">
	<div class="header">header</div>
	<div class="output">date, time, author</div>
	<div class="body clearfix">
		h1, h2, h3, h4, h5, h6
		p, ul, ol, img, b/strong, i/em, u, s
		cover-left, cover-center, cover-right
		quote
	</div>
	<div class="blog_cut">cut</div>
	<div class="footer">
		<div class="comments">comments</div>
		<div class="share">share</div>
		<div class="info"><p>source</p>	<p>movies/games</p>	<p>tags</p></div>			
	</div>
</div>

</div>




	<div class="page_lists page_lists_default page_lists_critics">
		<ul>
		<li class="row_a users_rating_good clearfix">
			<div class="left"><a href="critic.htm"><div class="photo" style="background-image: url('temp/cover1.jpg');"></div></a><h4>95</h4><h2><a href="edition.htm">Афиша</a><span class="wisdom_grade_inset" style="background-image: url('i/wisdom_grade3.png');" title="Издание исключительной «мудрости»">&nbsp;</span></h2><p><i>6 критиков</i></p></div>
			<div class="center"><p>45 рецензий</p><b>Средняя оценка в рецензиях:<span class="site_rating_small_good">92</span></b></div>
			<div class="right">1</div>
   		</li>
		<li class="row_b users_rating_good clearfix">
			<div class="left"><a href="critic.htm"><div class="photo" style="background-image: url('temp/cover2.jpg');"></div></a><h4>94</h4><h2><a href="edition.htm">Кино-Говно.ком</a><span class="wisdom_grade_inset" style="background-image: url('i/wisdom_grade2.png');" title="Издание повышенной «мудрости»">&nbsp;</span></h2><p><i>13 критиков</i></p></div>
			<div class="center"><p>171 рецензия</p><b>Средняя оценка в рецензиях:<span class="site_rating_small_bad">34</span></b></div>
			<div class="right">2</div>
		</li>
		<li class="row_a users_rating_good clearfix">
			<div class="left"><a href="critic.htm"><div class="photo" style="background-image: url('temp/cover3.jpg');"></div></a><h4>92</h4><h2><a href="edition.htm">Ведомости</a><span class="wisdom_grade_inset" style="" title="">&nbsp;</span></h2><p><i>7 критиков</i></p></div>
			<div class="center"><p>90 рецензий</p><b>Средняя оценка в рецензиях:<span class="site_rating_small_average">65</span></b></div>
			<div class="right">3</div>
		</li>
		<li class="row_b users_rating_good clearfix">
			<div class="left"><a href="critic.htm"><div class="photo" style="background-image: url('temp/cover4.jpg');"></div></a><h4>86</h4><h2><a href="edition.htm">Коммерсантъ</a><span class="wisdom_grade_inset" style="background-image: url('i/wisdom_grade1.png');" title="Издание умеренной «мудрости»">&nbsp;</span></h2><p><i>3 критика</i></p></div>
			<div class="center"><p>437 рецензий</p><b>Средняя оценка в рецензиях:<span class="site_rating_small_awful">10</span></b></div>
			<div class="right">4</div>
		</li>
		<li class="row_a users_rating_good clearfix">
			<div class="left"><a href="critic.htm"><div class="photo" style="background-image: url('temp/cover5.jpg');"></div></a><h4>85</h4><h2><a href="edition.htm">Авторский проект Алекса Экслера</a><span class="wisdom_grade_inset" style="" title="">&nbsp;</span></h2><p><i>1 критик</i></p></div>
			<div class="center"><p>130 рецензий</p><b>Средняя оценка в рецензиях:<span class="site_rating_small_good">83</span></b></div>
			<div class="right">5</div>
		</li>
		<li class="row_b users_rating_good clearfix">
			<div class="left"><a href="critic.htm"><div class="photo" style="background-image: url('temp/cover6.jpg');"></div></a><h4>84</h4><h2><a href="edition.htm">Filmz.ru</a><span class="wisdom_grade_inset" style="background-image: url('i/wisdom_grade3.png');" title="Издание исключительной «мудрости»">&nbsp;</span></h2><p><i>4 критика</i></p></div>
			<div class="center"><p>45 рецензий</p><b>Средняя оценка в рецензиях:<span class="site_rating_small_good">92</span></b></div>
			<div class="right">6</div>
		</li>
		<li class="row_a users_rating_good clearfix">
			<div class="left"><a href="critic.htm"><div class="photo" style="background-image: url('temp/cover7.jpg');"></div></a><h4>83</h4><h2><a href="edition.htm">Лучшие Компьютерные Игры</a><span class="wisdom_grade_inset" style="background-image: url('i/wisdom_grade2.png');" title="Издание повышенной «мудрости»">&nbsp;</span></h2><p><i>20 критиков</i></p></div>
			<div class="center"><p>171 рецензия</p><b>Средняя оценка в рецензиях:<span class="site_rating_small_bad">34</span></b></div>
			<div class="right">7</div>
		</li>
		<li class="row_b users_rating_good clearfix">
			<div class="left"><a href="critic.htm"><div class="photo" style="background-image: url('i/nophoto.png');"></div></a><h4>83</h4><h2><a href="edition.htm">КиноПоиск</a><span class="wisdom_grade_inset" style="" title="">&nbsp;</span></h2><p><i>14 критиков</i></p></div>
			<div class="center"><p>90 рецензий</p><b>Средняя оценка в рецензиях:<span class="site_rating_small_average">65</span></b></div>
			<div class="right">8</div>
		</li>
		<li class="row_a users_rating_average clearfix">
			<div class="left"><a href="critic.htm"><div class="photo" style="background-image: url('temp/cover9.jpg');"></div></a><h4>79</h4><h2><a href="edition.htm">Петербургский Телезритель</a><span class="wisdom_grade_inset" style="background-image: url('i/wisdom_grade1.png');" title="Издание умеренной «мудрости»">&nbsp;</span></h2><p><i>83 критика</i></p></div>
			<div class="center"><p>437 рецензий</p><b>Средняя оценка в рецензиях:<span class="site_rating_small_awful">10</span></b></div>
			<div class="right">9</div>
		</li>
		<li class="row_b users_rating_average clearfix">
			<div class="left"><a href="critic.htm"><div class="photo" style="background-image: url('temp/cover10.jpg');"></div></a><h4>77</h4><h2><a href="edition.htm">TotalDVD</a><span class="wisdom_grade_inset" style="" title="">&nbsp;</span></h2><p><i>26 критиков</i></p></div>
			<div class="center"><p>130 рецензий</p><b>Средняя оценка в рецензиях:<span class="site_rating_small_good">83</span></b></div>
			<div class="right">10</div>
		</li>
		</ul>
		<div class="page_lists_more"><a href="javascript:void(0)" class="pseudolink">Следующие 20 изданий</a></div>
		
	</div>	


	<div class="page_lists_side">
		<div class="ad_side_lists"><a href="#"><img src="temp/banner1.png" alt=""></a></div>

		<div class="reviews_list">
			<h1>Недавние рецензии</h1>
			<div class="reviews_list_tabs"><a href="javascript:void(0)" id="button_reviews_list_movies" class="button_frontrow_down"><span>фильмы</span></a><a href="javascript:void(0)" id="button_reviews_list_games" class="button_frontrow"><span>игры</span></a></div>
			<ul id="reviews_list_movies" style="display: block;">
				<li><a href="javascript:void(0)"><b>Михаил Судаков</b> (Кино-Говно.ком) <u>оценивает</u> фильм <b>Тачбэк</b> на <span class="site_rating_small_good">83</span></a></li>
				<li><a href="javascript:void(0)"><b>Александр Голубчиков</b> (Filmz.ru) <u>оценивает</u> фильм <b>Хоббит: Нежданное путешествие</b> на <span class="site_rating_small_bad">20</span></a></li>
				<li><a href="javascript:void(0)"><b>Алекс Экслер</b> (Exler.ru) <u>оценивает</u> фильм <b>Мстители</b> на <span class="site_rating_small_good">отлично</span></a></li>
				<li><a href="javascript:void(0)"><b>Лидия Маслова</b> (Коммерсантъ) <u>оценивает</u> фильм <b>Репортаж из преисподней</b> на <span class="site_rating_small_average">нормально</span></a></li>
				<li><a href="javascript:void(0)"><b>Михаил Судаков</b> (Кино-Говно.ком) <u>оценивает</u> фильм <b>Мстители</b> на <span class="site_rating_small_good">98</span></a></li>
				<li><a href="javascript:void(0)"><b>Станислав Зельвенский</b> (Афиша) <u>оценивает</u> фильм <b>Тёмный рыцарь: Возрождение легенды</b> на <span class="site_rating_small_awful">15</span></a></li>
				<li><a href="javascript:void(0)"><b>Михаил Судаков</b> (Кино-Говно.ком) <u>оценивает</u> фильм <b>Тачбэк</b> на <span class="site_rating_small_average">69</span></a></li>
				<li><a href="javascript:void(0)"><b>Александр Голубчиков</b> (Filmz.ru) <u>оценивает</u> фильм <b>Хоббит: Нежданное путешествие</b> на <span class="site_rating_small_bad">20</span></a></li>
				<li><a href="javascript:void(0)"><b>Алекс Экслер</b> (Exler.ru) <u>оценивает</u> фильм <b>Мстители</b> на <span class="site_rating_small_good">отлично</span></a></li>
				<li><a href="javascript:void(0)"><b>Лидия Маслова</b> (Коммерсантъ) <u>оценивает</u> фильм <b>Репортаж из преисподней</b> на <span class="site_rating_small_average">нормально</span></a></li>
			</ul>
			<ul id="reviews_list_games" style="display: none;">
				<li><a href="#">Лидия Маслова</a> (Коммерсантъ) оценивает игру <a href="#">Mass Effect 3</a> на <span class="site_rating_small_average">74</span></li>
				<li><a href="#">Михаил Судаков</a> (Кино-Говно.ком) оценивает игру <a href="#">I Am Alive</a> на <span class="site_rating_small_good">83</span></li>
				<li><a href="#">Александр Голубчиков</a> (Filmz.ru) оценивает игру <a href="#">Wargame: European Escalation</a> на <span class="site_rating_small_bad">20</span></li>
				<li><a href="#">Алекс Экслер</a> (Exler.ru) оценивает игру <a href="#">Street Fighter X Tekken</a> на <span class="site_rating_small_good">отлично</span></li>
				<li><a href="#">Лидия Маслова</a> (Коммерсантъ) оценивает игру <a href="#">Star Wars: The Old Republic</a> на <span class="site_rating_small_average">нормально</span></li>
				<!--li><a href="#">Михаил Судаков</a> (Кино-Говно.ком) оценивает игру <a href="#">Fieldrunners 2</a> на <span class="site_rating_small_good">98</span></li>
				<li><a href="#">Станислав Зельвенский</a> (Афиша) оценивает игру <a href="#">Sleeping Dogs</a> на <span class="site_rating_small_awful">15</span></li>
				<li><a href="#">Михаил Судаков</a> (Кино-Говно.ком) оценивает игру <a href="#">Darksiders 2</a> на <span class="site_rating_small_average">69</span></li>
				<li><a href="#">Александр Голубчиков</a> (Filmz.ru) оценивает игру <a href="#">Deadlight</a> на <span class="site_rating_small_bad">20</span></li>
				<li><a href="#">Алекс Экслер</a> (Exler.ru) оценивает игру <a href="#">Hybrid</a> на <span class="site_rating_small_good">отлично</span></li-->
			</ul>
			<div class="reviews_list_more"><a href="javascript:void(0)" class="pseudolink">Еще 10 обзоров</a></div>
		</div>
	</div>


</div>
<!-- ============== // CONTENT ============== -->



<!-- ============== FOOTER ============== -->
<div class="footer clearfix">
	<div class="left">
		<p>&copy; 2012 <span>Критиканство</span></p>
		<p>Электронная почта: <a href="mailto:mail@kritikanstvo.ru">mail@kritikanstvo.ru</a></p>
		<p><a href="#">О проекте</a></p>
	</div>
	<div class="left">
		<p>На сайте используются материалы <a href="http://www.rottentomatoes.com" target="_blank" title="Откроется в новом окне">Rotten Tomatoes</a>, <a href="http://www.gamerankings.com" target="_blank" title="Откроется в новом окне">GameRankings</a> и других ресурсов.</p>
	</div>
	<div class="right"><p>Создание сайта: <a href="http://www.kino-govno.com" target="_blank" title="Откроется в новом окне">КГ.Дизайн</a></p></div>
</div>
<!-- ============== // FOOTER ============== -->



</body></html>











