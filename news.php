<?include('header.php');?>
<div class="breadcrumbs container">
	<a href="#" class="bcs-link">Главная</a>
	<span class="bcs-text">Новости</span>
</div>
<div class="workarea container">
	<div class="page-title">Новости</div>
	<div class="filter">
		<select>
			<option value="v0" selected>Все новости</option>
			<option value="v1">Новости проекта</option>
			<option value="v2">Родителю</option>
			<option value="v3">Пенсионеру</option>
			<option value="v4">Пациенту</option>
		</select>
	</div>
	<div class="news-list">
		<div class="news-item card">
			<a href="#" class="item-img" style="background-image: url('images/content/tmn.jpg');">
				<div class="item-title">Тюменцев приглашают на ИТ-экскурсию</div>
				<span class="date">20.08.2015</span>
			</a>
		</div>
		<div class="news-item card">
			<a href="#" class="item-img" style="background-image: url('images/content/champion.jpg');">
				<div class="item-title">Подведены итоги III чемпионата</div>
				<span class="date">23.07.2015</span>
			</a>
		</div>
		<div class="news-item card">
			<a href="#" class="item-img" style="background-image: url('images/content/chpens.jpg');">
				<div class="item-title">Чемпионат для пенсионеров продлен</div>
				<span class="date">10.07.2015</span>
			</a>
		</div>
		<div class="news-item">
			<a href="#" class="item-link">
				<div class="item-title">Актуальные тарифы на ЖКУ на Геопортале </div>
				<span class="date">06.07.2015</span>
			</a>
		</div>
		<div class="news-item">
			<a href="#" class="item-link">
				<div class="item-title">«Всемирная паутина» покорится пенсионерам</div>
				<span class="date">24.06.2015</span>
			</a>
		</div>
	</div>
	<div class="pagination">
		<ul class="page-list">
			<li class="page-item"><a class="page-link active" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">4</a></li>
		</ul>
	</div>
<?include('footer.php');?>