<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><title>Критиканство &#8212; Блог &#8212; Волшебный ноутбук и американский рэпер</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=1061">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="apple-touch-icon" href="apple-touch-icon.png"><!-- 144x114 -->
<link rel="shortcut icon" href="favicon.ico">

<link rel="stylesheet" href="/css/main.css">

<script type="text/javascript" src="/js/jquery.1.8.2.min.js"></script>
<script type="text/javascript" src="/js/jquery.qtip.min.js"></script>
<script type="text/javascript" src="/js/jquery.rating.pack.js"></script>
<script type="text/javascript" src="/js/jquery.color.js"></script>
<script type="text/javascript" src="/js/textarea_autoresize.js"></script>
<!--script type="text/javascript" src="/js/css_browser_selector.js"></script-->
<script type="text/javascript">
// Qtip
$(document).ready(function()
	{$('[title]').qtip({position: {my: 'bottom center', at: 'top center', adjust: {x: 12, y: -6}}});}
);
jQuery(function()
	{jQuery('textarea').autoResize();}
);
// scrolltop
$(document).ready(function()
	{$('#scrolltop').click(function(){$('html, body').animate({scrollTop:0}, 'slow'); return false;});}
);
</script>
<!-- Кнопка цитирования -->
<script>
function getSelected() {
    if(window.getSelection) { return window.getSelection(); }
        else if(document.getSelection) { return document.getSelection(); }
                    else {
                            var selection = document.selection && document.selection.createRange();
                            if(selection.text) { return selection.text; }
                return false;
            }
            return false;
        }

$(document).ready(function() {
    var url = 'http://google.com/search?q={term}', selectionImage;
    $('.quotation').mouseup(function(e) {
        var selection = getSelected();
        if(selection && (selection = new String(selection).replace(/^\s+|\s+$/g,''))) {
            if(!selectionImage) {
                selectionImage = $('<a>').attr({
                href: url,
                title: 'Цитировать выделенный текст',
                target: '_blank',
                id: 'float_quote'
            }).html("Цитировать").css({}).hide();
            $(document.body).append(selectionImage);
        }
        selectionImage.attr('href',url.replace('{term}',encodeURI(selection))).css({
        top: e.pageY - -30, //offsets
        left: e.pageX - 54 //offsets
        }).fadeIn('fast');
        }
    });

$(document.body).mousedown(function() {
    if(selectionImage) { selectionImage.fadeOut('fast'); }
});

});
</script>

<!-- Выключаем отправку, если сообщение пустое -->
<script type="text/javascript">
$(document).ready(function(){
$('input[type="submit"]').attr('disabled','disabled');
$('textarea').keyup(function(){
    if($('textarea').val() == ""){
        $('input[type="submit"]').attr('disabled','disabled');
    }
    else{
        $('input[type="submit"]').removeAttr('disabled');
    }
    });
});
</script>

<!-- Отключаем кнопку и ввод после отправки сообщения -->
<script type="text/javascript">
$(document).ready(function(){
$('input[type="submit"]').click(function () {
$('input[type="submit"]').attr('disabled','disabled');
$('textarea').attr('disabled','disabled');
$('div.comments_input_controls').slideUp('normal');
$('div.comments_input_sending').slideDown('normal');
});
});
</script>

<!-- Спойлеры -->
<script type="text/javascript">
$(document).ready(function(){
    $(".comment_spoiler").hide();
    $(".comment_spoiler_hd").click(function(){
        $(this).next(".comment_spoiler").slideToggle("fast");
    });
    $("#expand_spoilers").toggle(function(){
        $(this).addClass("spoilers_expanded"); 
        }, function () {
        $(this).removeClass("spoilers_expanded");
    });
    $("#expand_spoilers").click(function(){
        $(".comment_spoiler").slideToggle("fast");
    });
});
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
	<a href="#"><img src="/i/logo.png" alt="" class="logo"></a>
	<div class="search">
		<form id="searchForm"><fieldset><input type="text" name="s" id="s" value=""><input type="submit" id="search_submit" value="OK"></fieldset></form>
	</div>
	<div id="tabs">
		<ul>
		<li><a href="javascript:void(0)" id="tab_first" class="" onmouseover="$('[id*=subtabs_]').hide(); $('#subtabs_first').show();">Фильмы</a></li>
		<li><a href="#" id="tab_second" class="" onmouseover="$('[id*=subtabs_]').hide(); $('#subtabs_second').show();">Игры</a></li>
		<li><a href="#" id="tab_third" class="" onmouseover="$('[id*=subtabs_]').hide(); $('#subtabs_third').show();">Критики</a></li>
		<li><a href="#" id="tab_fourth" class="parent" onmouseover="$('[id*=subtabs_]').hide(); $('#subtabs_fourth').show();">Блог</a></li>
		</ul>
	</div>
</div>

<div class="submenu">
	<div style="display: none;" id="subtabs_first">
		<ul><li><a href="javascript:void(0)" class="">Новые</a></li><li><a href="#" class="">Скоро в прокате</a></li><li><a href="#" class="">Популярные</a></li><li><a href="#" class="">Лучшие за всё время</a></li><li><a href="#" class="">Лучшие 2012 года</a></li><li><a href="#" class="">Кассовые сборы</a></li></ul>
	</div>
	<div style="display: none;" id="subtabs_second" onmouseover="$('#tab_second').addClass('subtabs_hover');" onmouseout="$('#tab_second').removeClass('subtabs_hover');">
		<ul><li><a href="#" class="">Новые</a></li><li><a href="#" class="">Скоро в продаже</a></li><li><a href="#" class="">Худшие за всё время</a></li><li><a href="#" class="">Лучшие по жанрам</a></li><li><a href="#" class="">Лучшие 2011 года</a></li></ul>
	</div>
	<div style="display: none;" id="subtabs_third" onmouseover="$('#tab_third').addClass('subtabs_hover');" onmouseout="$('#tab_third').removeClass('subtabs_hover');">
		<ul><li><a href="#" class="">Новые персоны</a></li><li><a href="#" class="">Рейтинг ляпов</a></li><li><a href="#" class="">Рейтинг критиков</a></li></ul>
	</div>
	<div style="display: block;" id="subtabs_fourth" onmouseover="$('#tab_fourth').addClass('subtabs_hover');" onmouseout="$('#tab_fourth').removeClass('subtabs_hover');">
		<ul><li><a href="#" class="">Новые записи</a></li><li><a href="#" class="">Архив записей</a></li></ul>
	</div>
	<div style="display: none;" id="subtabs_slogan">Сайт, где объективная критика невозможна</div>
</div>
<!-- ============== // TOP ============== -->



<!-- ============== CONTENT ============== -->
<div class="content clearfix">

	<div class="blog_entry_wrap clearfix">

		<div class="blog_entry_info">
			<div class="blog_output"><b>25 сентября 2013</b><br>10:48<br><a href="javascript:void(0)">Иван Иванов</a></div>
			<div class="blog_share_container clearfix" style="display: block;"><a href="#" title="ВКонтакте" class="vk">&nbsp;</a><a href="#" title="Facebook" class="fb">&nbsp;</a><a href="#" title="Twitter" class="twitter">&nbsp;</a><a href="#" title="LiveJournal" class="livejournal">&nbsp;</a></div>
		</div>

		<div id="blog0000" class="blog_entry">
			<div class="blog_header">Волшебный ноутбук и американский рэпер</div>
			<div class="blog_content clearfix">
				<div class="blog_img_center"><img src="/temp/testimg01.jpg" alt=""></div>			
				<p>Новость верстается простыми тэгами и, в общем, должна поддерживать markdown-разметку. Во многом здесь все аналогично &laquo;Кинопередовой&raquo;: картинки вставляются через <i>div</i> с классами <b>blog_img_left</b> и <b>blog_img_right</b> (максимальная ширина ограничена 270 пикс.), а также <b>blog_img_center</b> (максимальные размеры ограничены 670х500 пикс.) Можно и через &laquo;голый&raquo; <b>img src</b> — у этих тоже ограничение на 670 пикс. по ширине.</p>
				<p>Предусмотрены все стандартные тэги: <b>b</b>, <strong>strong</strong>, <i>i</i>, <em>em</em>, <u>underline</u>, <s>s</s>. Здесь же все заголовки: <b>h1</b>, <b>h2</b>, <b>h3</b>, <b>h4</b>, <b>h5</b> и <b>h6</b>. Вот это, к примеру, <b>h1</b>:</p>
				<h1>Заголовок h1. Сделаем его длиннее. Настолько длиннее, или даже больше. Например, вот так. Или даже так? Так нормально.</h1>
				<p>Разумеется, без списков мы никуда. Заготовлены обычные <b>ul&gt;li</b> и нумерованные <b>ol&gt;li</b>. Это — обычный:</p>
				<ul><li>Pledge This!</li><li>Superbabies: Baby Geniuses 2</li><li>Manos: The Hands of Fate</li><li>The Hottie & the Nottie</li><li>Disaster Movie</li></ul>
				<p>Заглянем под кат <b>div class="blog_cut"</b>? Лучше заглянем в код.</p>
				<div id="bloguncut0000" class="blog_cut"><a href="javascript:void(0)">Развернуть запись полностью</a></div>
				<div id="blogcut0000" style="display: none;">Сюда аяксом вставляем остаток записи, меняем display на block и скрываем кнопку разворота</div>
				<p>Новость можно продолжать и после ката. Но мы на этом закончим.</p>
			</div>
			<div class="blog_footer clearfix">
				<div class="blog_info"><p><a href="javascript:void(0)">Гайд-Парк на Гудзоне</a>, <a href="javascript:void(0)">Неудержимый</a>, <a href="javascript:void(0)">Отверженные</a>, <a href="javascript:void(0)">Репортаж из преисподней</a></p><p>Метки: <a href="javascript:void(0)">фильмы</a>, <a href="javascript:void(0)">кассовые сборы</a>, <a href="javascript:void(0)">Оскар</a></p><p>Источник: <a href="javascript:void(0)">Box Office Mojo</a></p></div>
			</div>
		</div>

	</div>



	<div class="comments_pagination_wrap clearfix">
		<div class="comments_pagination_header"><h2>40 комментариев</h2></div>
		<div class="comments_pagination"><a href="#" class="prev">&nbsp;</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="javascript:void(0)" class="current">5 страница</a><a href="#">6</a><a href="#">7</a><a href="#">8</a><span>&#133;</span><a href="#">24</a><a href="#" class="next">&nbsp;</a></div>
	</div>


	<div class="comments_wrap clearfix">
		<div class="comments_ad_side"><!--div class="ad_side_small"><a href="#"><img src="temp/banner2.png" alt=""></a></div--></div>

		<!--div class="nocomments">Оставьте первый комментарий</div-->
		<div class="comments">
			<div id="selection-image"></div>
			<div class="comment comment_a">
				<div class="comment_author">1. <a href="#" title="Вставить имя в поле ответа">Rumpelstilzkin</a></div>
				<div class="comment_date">31 мая, 21:57</div>
				<div class="clr"></div>
				<div class="comment_text quotation">
					<p>Немного рецензии:</p><p>В середине повествование <s>немного</s> провисает, теряет шарм настоящей <a href="#">НАУЧНОЙ</a> фантастики, что есть первые минут 30. Но потом все возвращается на круги своя, да еще как!</p><p>За несколько лет это пожалуй <b>самая хорошая</b> научная фантастика про космос и другие миры, что я видел. <i>И это прекрасно.</i></p><p>В общем, Ридли Скотт не подвел, из 10 человек, что ходили - все в восторге.</p><p>Искренне желаю фильму заработать дохералион бабла, а Ридли Скотту - снять продолжение.</p>
				</div>
			</div>
			<div class="comment comment_b">
				<div class="comment_author">2. <a href="#" title="Вставить имя в поле ответа">Mother</a></div>
				<div class="comment_date">31 мая, 20:11</div>
				<div class="clr"></div>
				<div class="comment_text quotation">
					<div class="comment_quote">
						<h5>3. Fucker</h5>
						<p>Да хер эта дрисня <a href="#">окупится</a>! Скотта на урановые рудники и ниипет!</p>
					</div>
					<p>Немного рецензии:</p><p>В середине повествование <s>немного</s> провисает, теряет шарм настоящей НАУЧНОЙ фантастики, что есть первые минут 30. Но потом все возвращается на круги своя, да еще как!</p><p>За несколько лет это пожалуй самая хорошая научная фантастика про космос и другие миры, что я видел. И это прекрасно.</p><p>В общем, Ридли Скотт не подвел, из 10 человек, что ходили - все в восторге.</p><p>Искренне желаю фильму заработать дохералион бабла, а Ридли Скотту - снять продолжение.</p>
				</div>
			</div>
			<div class="comment comment_a">
				<div class="comment_author">3. <a href="#" title="Вставить имя в поле ответа">Mother</a></div>
				<div class="comment_date">31 мая, 14:40</div>
				<div class="clr"></div>
				<div class="comment_text quotation">
					<div class="comment_quote">
						<h5>2. Mother</h5>
						<p>Да хер эта дрисня <a href="#">окупится</a>! Скотта на урановые рудники и ниипет!
							<div class="comment_quote">
								<h5>1. Fucker</h5>
								<p>Да хер эта дрисня <a href="#">окупится</a>! Скотта на урановые рудники и ниипет!</p>
							</div>
						</p>
					</div>
					<p>Немного рецензии:</p><p>В середине повествование <s>немного</s> провисает, теряет шарм настоящей НАУЧНОЙ фантастики, что есть первые минут 30. Но потом все возвращается на круги своя, да еще как!</p><p>За несколько лет это пожалуй самая хорошая научная фантастика про космос и другие миры, что я видел. И это прекрасно.</p><p>В общем, Ридли Скотт не подвел, из 10 человек, что ходили - все в восторге.</p><p>Искренне желаю фильму заработать дохералион бабла, а Ридли Скотту - снять продолжение.</p>
				</div>
			</div>
			<div class="comment comment_b">
				<div class="comment_author">4. <a href="#" title="Вставить имя в поле ответа">Fucker</a></div>
				<div class="comment_date">30 мая, 10:59</div>
				<div class="clr"></div>
				<div class="comment_text quotation">
				    <div class="comment_spoiler_hd" title="Показать/скрыть спойлер">Спойлер</div>
				    <div class="comment_spoiler">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
					<p>Немного рецензии:</p><p>В середине повествование <s>немного</s> провисает, теряет шарм настоящей НАУЧНОЙ фантастики, что есть первые минут 30. Но потом все возвращается на круги своя, да еще как!</p><p>За несколько лет это пожалуй <b>самая хорошая</b> научная фантастика про космос и другие миры, что я видел. <i>И это прекрасно.</i></p><p>В общем, Ридли Скотт не подвел, из 10 человек, что ходили - все в восторге.</p><p>Искренне желаю фильму заработать дохералион бабла, а Ридли Скотту - снять продолжение.</p>
				</div>
			</div>
			<div class="comment comment_a">
				<div class="comment_author">5. <a href="#" title="Вставить имя в поле ответа">Mother</a></div>
				<div class="comment_date">30 мая, 07:10</div>
				<div class="clr"></div>
				<div class="comment_text quotation">
				    <div class="comment_spoiler_hd" title="Показать/скрыть спойлер">Спойлер</div>
				    <div class="comment_spoiler">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
					<p>В середине повествование <s>немного</s> провисает, теряет шарм настоящей НАУЧНОЙ фантастики, что есть первые минут 30. Но потом все возвращается на круги своя, да еще как!</p><p>За несколько лет это пожалуй <b>самая хорошая</b> научная фантастика про космос и другие миры, что я видел. <i>И это прекрасно.</i></p><p>В общем, Ридли Скотт не подвел, из 10 человек, что ходили - все в восторге.</p><p>Искренне желаю фильму заработать дохералион бабла, а Ридли Скотту - снять продолжение.</p>
				</div>
			</div>
		</div>

	</div>


	<div class="comments_pagination_wrap clearfix">
		<div class="comments_pagination_header"><h2 class="comments_scrolltop" id="scrolltop"><span>Наверх</span></h2></div>
		<div class="comments_pagination"><a href="#" class="prev">&nbsp;</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="javascript:void(0)" class="current">5 страница</a><a href="#">6</a><a href="#">7</a><a href="#">8</a><span>&#133;</span><a href="#">24</a><a href="#" class="next">&nbsp;</a></div>
	</div>


	<div class="comments_input">
		<textarea id="textarea"></textarea>
		<div class="comments_input_controls">
			<div class="comments_input_styles">
				<a href="#" class="input_bold" title="Жирный">&nbsp;</a><a href="#" class="input_italic" title="Курсив">&nbsp;</a><a href="#" class="input_strike" title="Зачеркнутый">&nbsp;</a><a href="#" class="input_spoiler" title="Спрятать выделенный текст под спойлером">&nbsp;</a>
			</div>
			<div class="comments_input_submit">
				<input id="submit" type="submit" value="Отправить">
			</div>
			<div class="clr"></div>
		</div>
		<div class="comments_input_sending" style="display: none;">&nbsp;</div>	
	</div>
	<!--div class="comments_input_disabled">
		<h2>Вход на сайт</h2>
		<p>Оставлять комментарии могут только авторизованные пользователи</p>
		<p><a href="#">Войти на сайт через Loginza</a></p>
		<div class="sub">Используйте вашу учетную запись ВКонтакте, Facebook или Twitter</div>
	</div-->


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











