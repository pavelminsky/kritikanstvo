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
		<ul><li><a href="javascript:void(0)" class="active">Новые записи</a></li><li><a href="#" class="">Архив записей</a></li><!--li><a href="#" class="">Комментарии</a></li--></ul>
	</div>
	<div style="display: none;" id="subtabs_slogan">Сайт, где объективная критика невозможна</div>
</div>
<!-- ============== // TOP ============== -->



<!-- ============== CONTENT ============== -->
<div class="content page_default clearfix">

	<div class="page_lists_blog">





<style type="text/css">

.page_lists_blog {float: left; width: 680px; margin: 10px 10px 0px 10px;}

.blog_pagination {float: left; width: 660px; height: 30px; padding: 10px; margin-bottom: 10px; background-color: #faf3d9;}
.blog_pagination a, .blog_pagination a:visited {display: inline-block; min-width: 28px; height: 28px; font-size: 14px; color: #4c3821; line-height: 28px; text-align: center; text-decoration: none; border: 1px solid #f8e2c6; border-left-width: 0; background-color: #fbf8ef;}
.blog_pagination a:hover {color: #282828; text-shadow: 0 1px 1px #fffadf; background-color: #fcf1d2;}
.blog_pagination a:first-child, .blog_pagination {border-left-width: 1px;}
.blog_pagination span {display: inline-block; cursor: default; min-width: 28px; height: 30px; font-size: 14px; color: #bab29d; line-height: 30px; text-align: center; border: 1px solid #f8e2c6; border-left-width: 0; border-top-width: 0; border-bottom-width: 0;}
.blog_pagination a.current, .blog_pagination a.current:visited {padding: 0 8px 0 8px; cursor: default; color: #282828; text-shadow: 0 1px 1px #fffadf; background-color: #ffe04d; box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.30); -moz-box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.30); -webkit-box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.30);}
.blog_pagination a.prev {background-image: url('/i/blog_pages_prev.png'); background-position: 50% 50%; background-repeat: no-repeat;}
.blog_pagination a.next {background-image: url('/i/blog_pages_next.png'); background-position: 50% 50%; background-repeat: no-repeat;}

.special_promo_side {display: inline-block; cursor: pointer; position: relative; width: 236px; height: 154px; margin-bottom: 15px; border: 2px solid #ffd34d; background-position: center center; background-repeat: no-repeat; -webkit-background-size: cover; -o-background-size: cover; -moz-background-size: cover; background-size: cover;}
.special_promo_side:hover {opacity: 0.90; -moz-opacity: 0.90; -khtml-opacity: 0.90; filter: alpha(opacity=90);}
.special_promo_side h4 {position: absolute; bottom: 0; left: 0; width: 100%; font-size: 12px;  background-image: url('/i/special_promo.png'); background-repeat: repeat;}
.special_promo_side h4 a, .special_promo_side h4 a:visited {display: block; padding: 7px 5px 6px 5px; color: #171717; font-weight: normal; text-shadow: 0 1px 1px #f5e8a0;}

.blog_popular_list h1 {display: block; height: 20px; padding: 10px; font-size: 20px; line-height: 20px; color: #171717; font-weight: normal; text-shadow: 0 1px 1px #fff6c1; background-color: #ffd34d;}
.blog_popular_list li {position: relative; padding: 10px 10px 10px 40px; font-size: 12px; line-height: 14px; color: #919b9f; border-bottom: 1px solid #dee0e1;}
.blog_popular_list li div {cursor: default; position: absolute; display: inline-block; overflow: hidden; top: 10px; right: 205px; padding: 1px 5px 1px 5px; font-size: 11px; line-height: 12px; color: #171717; text-shadow: 0 1px 1px #fff6c1; text-align: center; -webkit-border-radius: 8px; -moz-border-radius: 8px; border-radius: 8px;}
.blog_popular_list li div {background-color: #ffd34d;}
.blog_popular_list li + li div {background-color: #fad258;}
.blog_popular_list li + li + li div {background-color: #f8d467;}
.blog_popular_list li + li + li + li div {background-color: #f4d579;}
.blog_popular_list li + li + li + li + li div {background-color: #f2d786;}
.blog_popular_list li + li + li + li + li + li div {background-color: #ecd58e;}
.blog_popular_list li + li + li + li + li + li + li div {background-color: #e9d69b;}
.blog_popular_list li + li + li + li + li + li + li + li div {background-color: #e2d3a3;}
.blog_popular_list li + li + li + li + li + li + li + li + li div {background-color: #e1d5ad;}
.blog_popular_list li + li + li + li + li + li + li + li + li + li div {background-color: #ddd4b4;}
.blog_popular_list li + li + li + li + li + li + li + li + li + li + li div {background-color: #dbd4bb;}


.page_lists_blog .blog_entry {margin: 10px 10px 30px 10px; padding-bottom: 20px; font-size: 12px; line-height: 16px; color: #3c3c3c; border-bottom: 1px solid #dadedf;}
.page_lists_blog .blog_entry img {max-width: 670px; overflow: hidden; border: 0;}


.blog_entry .blog_header {padding-bottom: 8px; font-size: 22px; font-weight: normal; line-height: 28px;}
.blog_entry .blog_header a {color: #151515; text-decoration: none; background-color: #ffeba4;}
.blog_entry .blog_header a:visited {color: #453c2c; text-decoration: none; background-color: #f7f0d5;}
.blog_entry .blog_header a:hover {color: #151515; text-decoration: none; background-color: #fff7ae;}
.blog_entry .blog_header span {display: none;}
.blog_entry .blog_header:hover span {display: inline;}


.blog_entry .blog_output {padding-bottom: 8px; font-size: 11px; color: #9f9f9f;}
.blog_entry .blog_output b {font-size: 14px; font-weight: normal; color: #1e1e1e;}

.blog_entry .blog_content h1, .blog_entry .blog_content h2 {padding: 10px 0 6px 0; font-size: 18px; font-weight: normal; line-height: 22px;}
.blog_entry .blog_content h3, .blog_entry .blog_content h4 {padding: 8px 0 6px 0; font-size: 16px; font-weight: normal; line-height: 20px;}
.blog_entry .blog_content h5, .blog_entry .blog_content h6 {padding: 6px 0 4px 0; font-size: 14px; font-weight: normal; line-height: 18px;}

.blog_entry .blog_content p {padding: 4px 0 4px 0; font-size: 12px; line-height: 16px;}
.blog_entry .blog_content i, .blog_entry .blog_content em {font-style: italic;}
.blog_entry .blog_content b, .blog_entry .blog_content strong {font-weight: bold;}
.blog_entry .blog_content u {text-decoration: underline;}
.blog_entry .blog_content s {text-decoration: line-through;}

.blog_entry .blog_content .blog_img_left {float: left; margin: 8px 15px 5px 0; max-width: 270px; overflow: hidden; border: 0;}
.blog_entry .blog_content .blog_img_right {float: right; margin: 8px 0 5px 15px; max-width: 270px; overflow: hidden; border: 0;}
.blog_entry .blog_content .blog_img_center {max-width: 670px; max-height: 500px; margin: 10px 0 5px 0; overflow: hidden; border: 0;}

</style>



	
		<div class="blog_pagination_wrap clearfix">
			<div class="blog_pagination"><a href="#" class="prev">&nbsp;</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="javascript:void(0)" class="current">5 страница</a><a href="#">6</a><a href="#">7</a><a href="#">8</a><span>&#133;</span><a href="#">24</a><a href="#" class="next">&nbsp;</a></div>
		</div>

		<div class="blog_entry">
			<div class="blog_header"><a href="link">Волшебный ноутбук и американский рэпер</a><span>&nbsp;&larr;</span></div>
			<div class="blog_output"><b>Сегодня</b> &bull; 10:48 &bull; <a href="javascript:void(0)">Иван Иванов</a></div>
			<div class="blog_content clearfix">
				<div class="blog_img_left"><img src="/temp/poster7.jpg" alt=""></div>			
				<p>Новость верстается простыми тэгами и, в общем, должна поддерживать markdown-разметку. Во многом здесь все аналогично &laquo;Кинопередовой&raquo;: картинки вставляются через <i>div</i> с классами <b>blog_img_left</b> и <b>blog_img_right</b> (максимальная ширина ограничена 270 пикс.), а также <b>blog_img_center</b> (максимальные размеры ограничены 670х500 пикс.) Можно и через &laquo;голый&raquo; <b>img src</b> — у этих тоже ограничение на 670 пикс. по ширине.</p>
				<p>Предусмотрены все стандартные тэги: <b>b</b>, <strong>strong</strong>, <i>i</i>, <em>em</em>, <u>underline</u>, <s>s</s>. Здесь же все заголовки: <b>h1</b>, <b>h2</b>, <b>h3</b>, <b>h4</b>, <b>h5</b> и <b>h6</b>. Вот это, к примеру, <b>h1</b>:</p>
				<h1>Заголовок H1. Сделаем его длиннее. Настолько длиннее, или даже больше. Например, вот так. Или даже так? Так нормально.</h1>
				<p>В этом месте вставим длинный абзац:</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <b>Duis aute irure dolor</b> in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <i>Excepteur sint</i> occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor <s>incididunt</s> ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute <a href="link2">irure dolor in reprehenderit</a> velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Разумеется, без списков мы никуда. Заготовлены обычные <b>ul&gt;li</b> и нумерованные <b>ol&gt;li</b>. Это — обычный:</p>

				<ul><li>Pledge This!</li><li>Superbabies: Baby Geniuses 2</li><li>Manos: The Hands of Fate</li><li>The Hottie & the Nottie</li><li>Disaster Movie</li></ul>
				
				<h3>Самые кассовые фильмы всех времен (кстати, это — заголовок h3):</h3>
				<ol><li>Avatar</li><li>Titanic</li><li>The Avengers</li><li>Harry Potter and the Deathly Hallows Part 2</li><li>Transformers: Dark of the Moon</li><li>The Lord of the Rings: The Return of the King</li><li>Skyfall</li><li>The Dark Knight Rises</li><li>Pirates of the Caribbean: Dead Man's Chest</li><li>Toy Story 3</li></ol>

				<p>Терпение, мы почти закончили. Осталось показать цитату; у нее <i>div</i> с классом <b>blog_quote</b>:</p>
				
				<div class="blog_quote">«Нефть» — великий фильм, но я просто люблю Дэниела Дей-Льюиса. «Старикам тут не место» — не мое. Я мозгом понимаю, что это талантливо, но сам бы я не хотел таким кино заниматься. 90 процентов зрителей, которые этот фильм смотрят, не понимают ничего. Непонятно, зачем Коэны это все делают. Как и Тарантино. Люди балуются. Это кино не зрительское. Оно для критиков, киноманов. Я от «Мстителей» или «Железного человека» получаю большее удовольствие, чем от «Стариков».</div>


				<p>Остались: кат, fancybox, футер</p>

				<div class="blog_cut">cut</div>
				
				<p>Текст продолжается после ката:</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="blog_footer">
				<div class="blog_comments">comments</div>
				<div class="blog_share">share</div>
				<div class="blog_info"><p>source</p> <p>movies/games</p> <p>tags</p></div>			
			</div>
		</div>


		<div class="blog_entry">
			<div class="blog_header"><a href="#">header</a></div>
			<div class="blog_output">date, time, author</div>
			<div class="blog_content clearfix">
				<div class="blog_img_center"><img src="/temp/testimg01.jpg" alt=""></div>
			</div>
			<div class="blog_footer">
				<div class="blog_comments">comments</div>
				<div class="blog_share">share</div>
				<div class="blog_info"><p>source</p>	<p>movies/games</p>	<p>tags</p></div>			
			</div>
		</div>		

		<div class="blog_entry">
			<div class="blog_header"><a href="#">header</a></div>
			<div class="blog_output">date, time, author</div>
			<div class="blog_content clearfix">
				<div class="blog_img_right"><img src="/temp/poster2.jpg" alt=""></div>
			</div>
			<div class="blog_footer">
				<div class="blog_comments">comments</div>
				<div class="blog_share">share</div>
				<div class="blog_info"><p>source</p>	<p>movies/games</p>	<p>tags</p></div>			
			</div>
		</div>

		<div class="blog_entry">
			<div class="blog_header">header</div>
			<div class="blog_output">date, time, author</div>
			<div class="blog_content clearfix">
				h1, h2, h3, h4, h5, h6
				p, ul, ol, img, b/strong, i/em, u, s
				cover-left, cover-center, cover-right
				quote
			<div class="blog_cut">cut</div>
			</div>
			<div class="blog_footer">
				<div class="blog_comments">comments</div>
				<div class="blog_share">share</div>
				<div class="blog_info"><p>source</p>	<p>movies/games</p>	<p>tags</p></div>			
			</div>
		</div>		
	
		<div class="blog_entry">
			<div class="blog_header">header</div>
			<div class="blog_output">date, time, author</div>
			<div class="blog_content clearfix">
				h1, h2, h3, h4, h5, h6
				p, ul, ol, img, b/strong, i/em, u, s
				cover-left, cover-center, cover-right
				quote
			<div class="blog_cut">cut</div>
			</div>
			<div class="blog_footer">
				<div class="blog_comments">comments</div>
				<div class="blog_share">share</div>
				<div class="blog_info"><p>source</p>	<p>movies/games</p>	<p>tags</p></div>			
			</div>
		</div>

		<div class="blog_entry">
			<div class="blog_header">header</div>
			<div class="blog_output">date, time, author</div>
			<div class="blog_content clearfix">
				h1, h2, h3, h4, h5, h6
				p, ul, ol, img, b/strong, i/em, u, s
				cover-left, cover-center, cover-right
				quote
			<div class="blog_cut">cut</div>
			</div>
			<div class="blog_footer">
				<div class="blog_comments">comments</div>
				<div class="blog_share">share</div>
				<div class="blog_info"><p>source</p>	<p>movies/games</p>	<p>tags</p></div>			
			</div>
		</div>

		<div class="blog_entry">
			<div class="blog_header">header</div>
			<div class="blog_output">date, time, author</div>
			<div class="blog_content clearfix">
				h1, h2, h3, h4, h5, h6
				p, ul, ol, img, b/strong, i/em, u, s
				cover-left, cover-center, cover-right
				quote
			<div class="blog_cut">cut</div>
			</div>
			<div class="blog_footer">
				<div class="blog_comments">comments</div>
				<div class="blog_share">share</div>
				<div class="blog_info"><p>source</p>	<p>movies/games</p>	<p>tags</p></div>			
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











