<?include('header.php');?>
<div class="breadcrumbs container">
	<a href="#" class="bcs-link">Главная</a>
	<a href="#" class="bcs-link">Все уроки</a>
	<span class="bcs-text">Для родителя</span>
</div>
<div class="workarea container">
	<div class="page-title">Обучающие уроки для родителя</div>
	<div class="tuts-list">
		<!-- Первые два блока card - общие для всех -->
		<div class="tuts-item card">
			<a href="#" class="item-img" style="background-image: url('images/content/gosuslugi.jpg');">
				<div class="item-title">Как зарегистрироваться на портале Госуслуги</div>
			</a>
		</div>
		<div class="tuts-item card">
			<a href="#" class="item-img" style="background-image: url('images/content/windows-1.jpg');">
				<div class="item-title">Курс компьютерной грамотности</div>
			</a>
		</div>
		<!-- role-1 - родитель -->
		<div class="tuts-item card role-1">
			<a href="#" class="item-img" style="background-image: url('images/content/eschool.png');">
				<div class="item-title">Как работать с сервисами электронной школы</div>
			</a>
		</div>
		<div class="tuts-item card role-1">
			<a href="#" class="item-img" style="background-image: url('images/content/posobie.jpg');">
				<div class="item-title">Как получить пособия и выплаты</div>
			</a>
		</div>
		<div class="tuts-item card role-1">
			<a href="#" class="item-img" style="background-image: url('images/content/sad.jpg');">
				<div class="item-title">Как встать на очередь в детский сад</div>
			</a>
		</div>
	</div>
	<!-- по 6 на страницу, если больше 6 - пагинация тут, шаблон в госуслугах -->
	<div class="links-box">
		<div class="item" style="background-image:url('images/content/pop_us.png');">
			<a class="item-link">Популярные госуслуги</a>
		</div>
		<div class="item" style="background-image:url('images/content/ssilki.png');">
			<a class="item-link">Полезные ссылки</a>
		</div>
		<div class="item" style="background-image:url('images/content/news.png');">
			<a class="item-link">актуальные Новости</a>
		</div>
	</div>
<?include('footer.php');?>