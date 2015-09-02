<?include('header.php');?>
<div class="breadcrumbs container">
	<a href="#" class="bcs-link">Главная</a>
	<span class="bcs-text">Регистрация</span>
</div>
<div class="workarea container">
	<div class="page-title">Регистрация</div>
	<div class="form">
		<form>
			<div class="field-box">
				<label>Имя <span class="required-mark">*</span></label>
				<input type="text" class="inputtext" required />
			</div>
			<div class="field-box">
				<label>Фамилия</label>
				<input type="text" class="inputtext" />
			</div>
			<div class="field-box">
				<label>Логин <span class="required-mark">*</span></label>
				<input type="text" class="inputtext" required />
			</div>
			<div class="field-box">
				<label>Пароль <span class="required-mark">*</span></label>
				<input type="password" class="inputtext" required />
			</div>
			<div class="field-box">
				<label>Подтверждение пароля <span class="required-mark">*</span></label>
				<input type="password" class="inputtext" required />
			</div>
			<div class="field-box">
				<label>Email <span class="required-mark">*</span></label>
				<input type="email" class="inputtext" required />
			</div>
			<div class="field-box captcha">
				<img class="captcha-img" src="images/captcha.jpg" />
				<label>Введите код <span class="required-mark">*</span></label>
				<input type="" class="inputtext" required />
			</div>
			<input type="submit" class="btn" value="Регистрация"/>
			<p><a href="#">Авторизация</a></p>
		</form>
	</div>
<?include('footer.php');?>