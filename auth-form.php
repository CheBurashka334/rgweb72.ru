<?include('header.php');?>
<div class="breadcrumbs container">
	<a href="#" class="bcs-link">Главная</a>
	<span class="bcs-text">Авторизация</span>
</div>
<div class="workarea container">
	<div class="page-title">Авторизация</div>
	<div class="form">
		<form>
			<div class="field-box">
				<label>Логин</label>
				<input type="text" class="inputtext" required />
			</div>
			<div class="field-box">
				<label>Пароль</label>
				<input type="password" class="inputtext" required />
			</div>
			<div class="field-box">
				<input type="checkbox" checked="checked" id="checkbox" class="checkbox-custom"/>
				<label for="checkbox">Запомнить меня на этом компьютере</label>
			</div>
			<input type="submit" class="btn" value="Войти"/>
			<p><a href="#">Забыли свой пароль?</a></p>
		</form>
	</div>
	<div class="divider"></div>
	<p>Если вы впервые на сайте, заполните, пожалуйста, регистрационную форму.</p><br/>
	<a href="#">Зарегистрироваться</a>
	<div class="divider"></div>
	<div class="page-title">Войти как пользователь</div>
	<p>Вы можете войти на сайт, если вы зарегистрированы на одном из этих сервисов:</p>
	<ul class="bx-auth-services">
		<li><a href="#"><i class="bx-ss-icon vkontakte"></i><b>ВКонтакте</b></a></li>
		<li><a href="#"><i class="bx-ss-icon facebook"></i><b>Facebook</b></a></li>
		<li><a href="#"><i class="bx-ss-icon odnoklassniki"></i><b>Одноклассники</b></a></li>
		<li><a href="#"><i class="bx-ss-icon livejournal"></i><b>Livejournal</b></a></li>
		<li><a href="#"><i class="bx-ss-icon yandex"></i><b>Яндекс</b></a></li>
		<li><a href="#"><i class="bx-ss-icon liveinternet"></i><b>Liveinternet</b></a></li>
		<li><a href="#"><i class="bx-ss-icon mailru"></i><b>Mail.Ru</b></a></li>
		<li><a href="#"><i class="bx-ss-icon blogger"></i><b>Blogger</b></a></li>
		<li><a href="#"><i class="bx-ss-icon openid"></i><b>OpenID</b></a></li>
	</ul>
<?include('footer.php');?>