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

<!-- Fancybox -->
<script type="text/javascript" src="/js/jquery.fancybox.js?v=2.1.1"></script>
<script type="text/javascript" src="/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="/js/jquery.fancybox-media.js?v=1.0.4"></script>
<link rel="stylesheet" type="text/css" href="/css/fancybox.css?v=2.1.1" media="screen">
<script type="text/javascript">
$(document).ready(function() {
$('.blog_img').fancybox({
//prevEffect : 'none',
//nextEffect : 'none',
//closeBtn  : false,
//arrows    : false,
nextClick : false,
helpers : {thumbs : {width  : 50, height : 50}}
});
});
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
		<ul><li><a href="javascript:void(0)" class="active">Новые записи</a></li><li><a href="#" class="">Архив записей</a></li><!--li><a href="#" class="">Комментарии</a></li--></ul>
	</div>
	<div style="display: none;" id="subtabs_slogan">Сайт, где объективная критика невозможна</div>
</div>
<!-- ============== // TOP ============== -->



<!-- ============== CONTENT ============== -->
<div class="content page_default clearfix">

	<div class="page_lists_blog">

		<div class="blog_pagination_wrap clearfix">
			<div class="blog_pagination"><a href="#" class="prev">&nbsp;</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="javascript:void(0)" class="current">5 страница</a><a href="#">6</a><a href="#">7</a><a href="#">8</a><span>&#133;</span><a href="#">24</a><a href="#" class="next">&nbsp;</a></div>
		</div>

		<div id="blog0000" class="blog_entry">
			<div class="blog_header"><a href="link">Волшебный ноутбук и американский рэпер</a><span>&nbsp;&larr;</span></div>
			<div class="blog_output"><b>Сегодня</b> &bull; 10:48 &bull; <a href="javascript:void(0)">Иван Иванов</a></div>
			<div class="blog_content clearfix">
				<div class="blog_img_left"><img src="/temp/poster8.jpg" alt=""></div>			
				<p>Новость верстается простыми тэгами и, в общем, должна поддерживать markdown-разметку. Во многом здесь все аналогично &laquo;Кинопередовой&raquo;: картинки вставляются через <i>div</i> с классами <b>blog_img_left</b> и <b>blog_img_right</b> (максимальная ширина ограничена 270 пикс.), а также <b>blog_img_center</b> (максимальные размеры ограничены 670х500 пикс.) Можно и через &laquo;голый&raquo; <b>img src</b> — у этих тоже ограничение на 670 пикс. по ширине.</p>
				<p>Предусмотрены все стандартные тэги: <b>b</b>, <strong>strong</strong>, <i>i</i>, <em>em</em>, <u>underline</u>, <s>s</s>. Здесь же все заголовки: <b>h1</b>, <b>h2</b>, <b>h3</b>, <b>h4</b>, <b>h5</b> и <b>h6</b>. Вот это, к примеру, <b>h1</b>:</p>
				<h1>Заголовок h1. Сделаем его длиннее. Настолько длиннее, или даже больше. Например, вот так. Или даже так? Так нормально.</h1>
				<p>В этом месте вставим длинный абзац:</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <b>Duis aute irure dolor</b> in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint</i> occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor <s>incididunt</s> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute <a href="link2">irure dolor in reprehenderit</a> velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Разумеется, без списков мы никуда. Заготовлены обычные <b>ul&gt;li</b> и нумерованные <b>ol&gt;li</b>. Это — обычный:</p>
				<ul><li>Pledge This!</li><li>Superbabies: Baby Geniuses 2</li><li>Manos: The Hands of Fate</li><li>The Hottie & the Nottie</li><li>Disaster Movie</li></ul>
				<h3>Самые кассовые фильмы всех времен нумерованным списком:</h3>
				<ol><li>Avatar</li><li>Titanic</li><li>The Avengers</li><li>Harry Potter and the Deathly Hallows Part 2</li><li>Transformers: Dark of the Moon</li><li>The Lord of the Rings: The Return of the King</li><li>Skyfall</li><li>The Dark Knight Rises</li><li>Pirates of the Caribbean: Dead Man's Chest</li><li>Toy Story 3</li></ol>
				<p>Теперь подключим fancybox. Каждая картинка обрамляется тэгом <i>a</i> с классом <b>blog_img</b>. Если хотим полноценную галерею (чтобы картинки листались), группе можно задать одинаковый параметр <i>data-fancybox-group</i> (а можно не задавать). Для удобства можно приравнять этот параметр к ID самой новости (в данном случае - blog0000).</p>
				<p><a class="blog_img" data-fancybox-group="blog0000" href="/temp/testposter01.jpg"><img src="/temp/testposter01s.jpg" alt="" height="70"></a><a class="blog_img" data-fancybox-group="blog0000" href="/temp/testposter02.jpg"><img src="/temp/testposter02s.jpg" alt="" height="60"></a><a class="blog_img" data-fancybox-group="blog0000" href="/temp/testposter03.jpg"><img src="/temp/testposter03s.jpg" alt=""></a><a class="blog_img" data-fancybox-group="blog0000" href="/temp/testposter04.jpg"><img src="/temp/testposter04s.jpg" alt="" height="100"></a><a class="blog_img" data-fancybox-group="blog0000" href="/temp/testposter01.jpg"><img src="/temp/testposter01s.jpg" alt="" height="40"></a><a class="blog_img" data-fancybox-group="blog0000" href="/temp/testposter02.jpg"><img src="/temp/testposter02s.jpg" alt="" height="60"></a><a class="blog_img" data-fancybox-group="blog0000" href="/temp/testposter03.jpg"><img src="/temp/testposter03s.jpg" alt=""></a><a class="blog_img" data-fancybox-group="blog0000" href="/temp/testposter04.jpg"><img src="/temp/testposter04s.jpg" alt="" height="80"></a><a class="blog_img" data-fancybox-group="blog0000" href="/temp/testposter04.jpg"><img src="/temp/testposter04s.jpg" alt="" height="100"></a><a class="blog_img" data-fancybox-group="blog0000" href="/temp/testposter01.jpg"><img src="/temp/testposter01s.jpg" alt="" height="40"></a><a class="blog_img" data-fancybox-group="blog0000" href="/temp/testposter03.jpg"><img src="/temp/testposter03s.jpg" alt=""></a></p>
				<p>Терпение, уже почти все. Осталось показать цитату; она вставляется тэгом <b>blockquote</b>:</p>
				<blockquote>«Нефть» — великий фильм, но я просто люблю Дэниела Дей-Льюиса. «Старикам тут не место» — не мое. Я мозгом понимаю, что это талантливо, но сам бы я не хотел таким кино заниматься. 90 процентов зрителей, которые этот фильм смотрят, не понимают ничего. Непонятно, зачем Коэны это все делают. Как и Тарантино. Люди балуются. Это кино не зрительское. Оно для критиков, киноманов. Я от «Мстителей» или «Железного человека» получаю большее удовольствие, чем от «Стариков».</blockquote>
				<p>Заглянем под кат <b>div class="blog_cut"</b>? Лучше заглянем в код.</p>
				<div id="bloguncut0000" class="blog_cut"><a href="javascript:void(0)">Развернуть запись полностью</a></div>
				<div id="blogcut0000" style="display: none;">Сюда аяксом вставляем остаток записи, меняем display на block и скрываем кнопку разворота</div>
				<p>Новость можно продолжать и после ката. Но мы на этом закончим.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="blog_footer clearfix">
				<div class="blog_comments"><a href="javascript:void(0)" title="Комментарии"><span>+</span></a></div>
				<div class="blog_share"><a href="javascript:void(0)" title="Поделиться">&nbsp;</a></div>
				<div class="blog_info"><p><a href="javascript:void(0)">Гайд-Парк на Гудзоне</a>, <a href="javascript:void(0)">Неудержимый</a>, <a href="javascript:void(0)">Отверженные</a>, <a href="javascript:void(0)">Репортаж из преисподней</a></p><p>Метки: <a href="javascript:void(0)">фильмы</a>, <a href="javascript:void(0)">кассовые сборы</a>, <a href="javascript:void(0)">Оскар</a></p><p>Источник: <a href="javascript:void(0)">Box Office Mojo</a></p></div>
				<div class="blog_share_container clearfix" style="display: none;"><a href="#" title="ВКонтакте" class="vk">&nbsp;</a><a href="#" title="Facebook" class="fb">&nbsp;</a><a href="#" title="Twitter" class="twitter">&nbsp;</a><a href="#" title="LiveJournal" class="livejournal">&nbsp;</a></div>
			</div>
		</div>

		<div class="blog_entry">
			<div class="blog_header"><a href="link5">От гардемаринов до мушкетеров</a><span>&nbsp;&larr;</span></div>
			<div class="blog_output"><b>20 февраля</b> &bull; 01:50 &bull; <a href="link">Петр Петров</a></div>
			<div class="blog_content clearfix">
				<div class="blog_img_center"><img src="/temp/testimg01.jpg" alt=""></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
			<div class="blog_footer clearfix">
				<div class="blog_comments"><a href="javascript:void(0)" title="Комментарии"><span>4271</span></a></div>
				<div class="blog_share"><a href="javascript:void(0)" title="Поделиться">&nbsp;</a></div>
				<div class="blog_info"><p><a href="javascript:void(0)">Гайд-Парк на Гудзоне</a>, <a href="javascript:void(0)">Неудержимый</a>, <a href="javascript:void(0)">Отверженные</a>, <a href="javascript:void(0)">Репортаж из преисподней</a></p><p>Метки: <a href="javascript:void(0)">фильмы</a>, <a href="javascript:void(0)">кассовые сборы</a>, <a href="javascript:void(0)">Оскар</a></p><p>Источник: <a href="javascript:void(0)">Box Office Mojo</a></p></div>
				<div class="blog_share_container clearfix" style="display: none;"><a href="#" title="ВКонтакте" class="vk">&nbsp;</a><a href="#" title="Facebook" class="fb">&nbsp;</a><a href="#" title="Twitter" class="twitter">&nbsp;</a><a href="#" title="LiveJournal" class="livejournal">&nbsp;</a></div>
			</div>
		</div>		

		<div class="blog_entry">
			<div class="blog_header"><a href="link6">Воспитанный чужими</a><span>&nbsp;&larr;</span></div>
			<div class="blog_output"><b>6 декабря 2012</b> &bull; 16:23 &bull; <a href="link">Сергей Сергеев</a></div>
			<div class="blog_content clearfix">
				<div class="blog_img_right"><img src="/temp/poster2.jpg" alt=""></div>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<ul><li>Toy Story 3</li><li>The Dark Knight</li><li>Spider-Man 3</li><li>Shrek 2</li><li>Saving Private Ryan</li><li>Titanic</li><li>Independence Day</li><li>Jurassic Park</li><li>Terminator 2</li></ul>
				<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="blog_footer clearfix">
				<div class="blog_comments"><a href="javascript:void(0)" title="Комментарии"><span>17</span></a></div>
				<div class="blog_share"><a href="javascript:void(0)" title="Поделиться">&nbsp;</a></div>
				<div class="blog_info"><p><a href="javascript:void(0)">Гайд-Парк на Гудзоне</a>, <a href="javascript:void(0)">Неудержимый</a>, <a href="javascript:void(0)">Отверженные</a>, <a href="javascript:void(0)">Репортаж из преисподней</a></p><p>Метки: <a href="javascript:void(0)">фильмы</a>, <a href="javascript:void(0)">кассовые сборы</a>, <a href="javascript:void(0)">Оскар</a></p><p>Источник: <a href="javascript:void(0)">Box Office Mojo</a></p></div>
				<div class="blog_share_container clearfix" style="display: none;"><a href="#" title="ВКонтакте" class="vk">&nbsp;</a><a href="#" title="Facebook" class="fb">&nbsp;</a><a href="#" title="Twitter" class="twitter">&nbsp;</a><a href="#" title="LiveJournal" class="livejournal">&nbsp;</a></div>
			</div>
		</div>
	
		<div class="blog_pagination_wrap clearfix">
			<div class="blog_pagination"><a href="#" class="prev">&nbsp;</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="javascript:void(0)" class="current">5 страница</a><a href="#">6</a><a href="#">7</a><a href="#">8</a><span>&#133;</span><a href="#">24</a><a href="#" class="next">&nbsp;</a></div>
		</div>

	</div>	


	<div class="page_lists_side_blog">
		<div class="special_promo_side" onclick="javascript:void(0)" style="background-image: url('temp/pic3.jpg');"><h4><a href="#">Экранизации комиксов в 2013 году</a></h4></div>
		<div class="special_promo_side" onclick="javascript:void(0)" style="background-image: url('temp/pic4.jpg');"><h4><a href="#">Самые кассовые фильмы 2012 года</a></h4></div>
		<!--div class="ad_side_lists"><a href="#"><img src="temp/banner1.png" alt=""></a></div-->
		<div class="blog_popular_list">
			<h1>Популярные записи</h1>
			<ul>
				<li><div>1540</div><a href="#">Новогодние друзья</a></li>
				<li><div>710</div><a href="javascript:void(0)">Почти документальный Чехов</a></li>
				<li><div>355</div><a href="javascript:void(0)">Волшебный ноутбук и американский рэпер</a></li>
				<li><div>340</div><a href="#">Космические подробности</a></li>
				<li><div>201</div><a href="javascript:void(0)">Кассовые итоги 2012 года</a></li>
				<li><div>197</div><a href="javascript:void(0)">От монголов к арамейцам</a></li>
				<li><div>163</div><a href="javascript:void(0)">Воспитанный чужими</a></li>
				<li><div>49</div><a href="javascript:void(0)">Бесконечная «Восьмерка»</a></li>
				<li><div>18</div><a href="javascript:void(0)">Особенности национальной амнистии</a></li>
				<li><div>2</div><a href="javascript:void(0)">Копирайтер и волшебный ноутбук</a></li>
			</ul>
			<div class="reviews_list_more"><a href="javascript:void(0)" class="pseudolink">Еще 10 записей</a></div>
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











