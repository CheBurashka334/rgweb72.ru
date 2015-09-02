<?include('header.php');?>
<div class="breadcrumbs container">
	<a href="#" class="bcs-link">Главная</a>
	<span class="bcs-text">Задать вопрос</span>
</div>
<div class="workarea container">
	<div class="page-title">Задать вопрос</div>
	<div class="form">
		<form>
			<div class="field-box">
				<label>Имя <span class="required-mark">*</span></label>
				<input type="text" class="inputtext" required />
			</div>
			<div class="field-box">
				<label>Email</label>
				<input type="email" class="inputtext" />
			</div>
			<div class="field-box">
				<label>Телефон</label>
				<input type="tel" class="inputtext" />
			</div>
			<div class="field-box">
				<label>Вопрос <span class="required-mark">*</span></label>
				<input type="text" class="inputtext" required />
			</div>
			<div class="field-box captcha">
				<img class="captcha-img" src="images/captcha.jpg" />
				<label>Введите код <span class="required-mark">*</span></label>
				<input type="" class="inputtext" required />
			</div>
			<input type="submit" class="btn" value="Отправить"/>
		</form>
	</div>
<?include('footer.php');?>