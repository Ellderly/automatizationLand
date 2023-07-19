$(document).ready(function () {
	/*START Blinked button*/
	setInterval(blinkBtn, 3000)
	function blinkBtn() {
		$('.blinked-btn').addClass('blink_on').delay(800).queue(function (next) {
			$(this).removeClass('blink_on');
			next();
		});
	}
	/*END Blinked button*/

	var currentStep = 0;

	var qTitles = [
		"Готовы ли вы начать инвестировать?",
		"Имеете ли Вы опыт в инвестировании?",
		"Сколько времени Вы готовы уделять заработку?",
		"Есть ли у вас постоянный доступ к сети интернет?",
		"С какой суммы вы готовы инвестировать?",
		"Есть ли у вас финансовые обязательства?",
		"С какой целью вы хотите увеличить достаток?",
		"Как вы планируете распорядиться заработанными на проекте средствами?"
	];

	var qProgress = [
		'0',
		'12.5',
		'25',
		'37.5',
		'50',
		'62.5',
		'75',
		'87.5',
		'100'
	];

	var qProgressDiscount = [
		'0',
		'6.25',
		'12.5',
		'18.75',
		'25',
		'31.25',
		'37.5',
		'43.75',
		'50'
	];

	$('.question-item-check').click(function () {
		$(this).parent().children('[type=radio]').prop('checked', true);
	});

	cheackPrevButton(currentStep);
	cheackDiscount(currentStep);


	$('.start_button').click(function () {
		$('#app').css('display', 'flex');
		$('#hero').css('display', 'none');
	});

	$('.btn-next').click(function () {

		var result5 = "";

		result5 += " | Имеете ли Вы опыт в инвестировании? Ответ: " + $('input[name="question_2"]:checked').val();
		result5 += " | Сколько времени Вы готовы уделять заработку? Ответ: " + $('input[name="question_3"]:checked').val();
		result5 += " | Есть ли у вас постоянный доступ к сети интернет? Ответ: " + $('input[name="question_4"]:checked').val();
		result5 += " | С какой суммы вы готовы инвестировать? Ответ: " + $('input[name="question_5"]:checked').val();
		result5 += " | Есть ли у вас финансовые обязательства? Ответ: " + $('input[name="question_6"]:checked').val();
		result5 += " | С какой целью вы хотите увеличить достаток? Ответ: " + $('input[name="question_7"]:checked').val();
		result5 += " | Как вы планируете распорядиться заработанными на проекте средствами? Ответ: " + $('input[name="question_8"]:checked').val();


		$('#AfiilateUser').val(result5);

		if (parseInt(currentStep) > 6) {
			//console.log('max slide reached!');
			$('#last-stand').css('display', 'flex');
			$('#app').css('display', 'none');
		}
		else {
			currentStep = currentStep + 1;

			$('#q-title').text(qTitles[currentStep]);
			$('.progress-fill').css('width', qProgress[currentStep] + '%');
			$('#q-progress-percent').text(qProgress[currentStep] + '%');

			$('#question_' + parseInt(currentStep - 1)).removeClass('q-vision');
			$('#question_' + parseInt(currentStep - 1)).css('display', 'none');

			$('#question_' + parseInt(currentStep)).addClass('q-vision');
			$('#question_' + parseInt(currentStep)).css('display', 'flex');

			calcHeight();
		}

		cheackPrevButton(currentStep);
		cheackDiscount(currentStep);

	});


	$('.btn-prev').click(function () {
		if (parseInt(currentStep) <= 0) {
			console.log('min slide reached!');
		}
		else {

			$('#question_' + parseInt(currentStep)).removeClass('q-vision');
			$('#question_' + parseInt(currentStep)).css('display', 'none');

			$('#question_' + parseInt(currentStep - 1)).addClass('q-vision');
			$('#question_' + parseInt(currentStep - 1)).css('display', 'block');

			currentStep = currentStep - 1;

			$('#q-title').text(qTitles[currentStep]);
			$('.progress-fill').css('width', qProgress[currentStep] + '%');
			$('#q-progress-percent').text(qProgress[currentStep] + '%');

			calcHeight();
		}

		cheackPrevButton(currentStep);
		cheackDiscount(currentStep);

	});



	function cheackPrevButton(currentStep) {
		if (parseInt(currentStep) == 0) {
			$('.btn-prev').addClass('btn-hide');
			$('.btn-prev').removeClass('btn-flex');
		}
		else {
			$('.btn-prev').addClass('btn-flex');
			$('.btn-prev').removeClass('btn-hide');
		}
	}

	function cheackDiscount(currentStep) {
		$('.dd-value-data').text(qProgressDiscount[currentStep]);
	}

	$('.media-bonuses-head').click(function () {

		if ($('.media-bonuses-body').hasClass('body_show')) {
			$('.media-bonuses-body').removeClass('body_show');
			$('.media-bonuses-head-right').removeClass('wheel');
		}
		else {
			$('.media-bonuses-body').addClass('body_show');
			$('.media-bonuses-head-right').addClass('wheel');
		}

	});

	$("#phone-with-mask").inputmask({ "mask": "9999999999" });
	checkInputs();

	$("#user-name-input").change(function () {
		checkInputs();
	});
	$("#phone-with-mask").change(function () {
		checkInputs();
	});

	function checkInputs() {
		var uname = $("#user-name-input").val();
		var uphone = $("#phone-with-mask").val();

		if (uname != '' && uphone.length == 15 && uphone[0] == 9) {
			changeSubmitState('good');
			console.log('uname ' + uname + '   uphone ' + uphone);
		}
		else {
			changeSubmitState('bad');
			console.log('not fill');
		}
	}

	function changeSubmitState($how) {
		if ($how == 'bad') {
			$('#btn-submit').addClass('btn_disable');
		}
		else {
			$('#btn-submit').removeClass('btn_disable');
		}
	}


	$('#manager-say').click(function () {

		if ($('.manager-say').hasClass('wheel_2')) {
			$('.manager-say').removeClass('wheel_2');
			$('.media-manager-text').addClass('body_say_hide');
			$('.media-manager-text').text('Ответы на эти вопросы помогут нам подобрать...');
		}
		else {
			$('.manager-say').addClass('wheel_2');
			$('.media-manager-text').removeClass('body_say_hide');
			$('.media-manager-text').text('Ответы на эти вопросы помогут нам подобрать оптимальную программу инвестирования');
		}

	});

	function calcHeight() {
		/*
		var width = $(window).width();
		if(width<= 800)
		{


		$('.q-rel').css('min-height' ,$('.q-vision').height());

		var appHeight = $('.question-inner-text-wrapper').height();
		$('#app').css('height' , appHeight);
		}
		*/
	}


	//Form Handler
	var isName = function isName(name) {
		var re = /^[A-Za-zа-яёА-ЯЁЩЬЮЯҐЄІЇа-щьюяґєі \s]+$/;
		return re.test(name);
	};

	var validatePhone = function validatePhone(phone) {
		phone = phone.replace(/\s/g, '');
		var phoneThree = phone.substr(0, 3);
		var phoneTwo = phone.substr(0, 2);

		if (phoneThree == '+79' || phoneTwo == '79' || phoneTwo == '89') {
			var re = /^[0-9]{11}$/;
			return re.test(parseInt(phone));
		} else {
			return false
		}
	};
	var validateEmail = function validateEmail(email) {
		var re = /\S+@\S+\.\S+/;
		return re.test(email);
	};

	$('form').on('submit', function (e) {
		e.preventDefault();

		$(this).find('button[type=submit]').attr("disabled", true);

		$(this).find('div.error-text').remove();

		let OK = true;
		$(this).find('input').not(':input[type=email], :input[type=hidden]').each(function () {
			let input = $(this);
			let val = input.val();
			let el = input.parent()[0];

			if (!val) {
				OK = false;
			}
		});
		let paramsString = document.location.search;
		let searchParams = new URLSearchParams(paramsString);

		let policy = $(this).find("input[name=policy]").prop('checked');
		let name = $(this).find("input[name=name]").val();
		let email = $(this).find("input[name=email]").val();
		let phone = '+7' + $(this).find("input[name=phone]").val();
		let emptyStr = '';
		let ans = $(this).find("input[name=AfiilateUser]").val();

		let url_string = window.location.href;
		let url = new URL(url_string);
		let utm_sourceVal = url.searchParams.get("utm_source");
		let utm_contentVal = url.searchParams.get("utm_content");
		let utm_campaignVal = url.searchParams.get("utm_campaign");
		let utm_termVal = url.searchParams.get("utm_term");
		let utm_mediumVal = url.searchParams.get("utm_medium");
		let clickidVal = url.searchParams.get("clickid");


		if (policy == true) {
			OK = true;
		} else {
			OK = false;
		}

		if (phone) {
			if (!validatePhone(phone)) {
				let el = $(this).find("input[name=phone]").parent()[0];
				$(el).append(
					'<div class="messages error-text">Пожалуйста, введите корректный телефон (+7 999 999 99 99)</div>'
				);
				OK = false;
			}
		} else {
			OK = false;
		}

		if (name) {
			if (!isName(name)) {
				let _el = $(this).find("input[name=name]").parent()[0];
				let input = $(this).find("input[name=name]")[0];

				$(input).parent().addClass('error-error');

				OK = false;
			}
		} else {
			let input = $(this).find("input[name=name]")[0];
			OK = false;
			$(input).parent().removeClass('error-error');
		}
		if (email) {
			if (!validateEmail(email)) {
				let _el = $(this).find("input[name=email]").parent()[0];
				let input = $(this).find("input[name=email]")[0];

				$(input).parent().addClass('error-error');

				OK = false;
			}
		} else {
			let input = $(this).find("input[name=email]")[0];
			OK = false;
			$(input).parent().removeClass('error-error');
		}


		console.log(name, phone, email, ans);

		if (OK) {
			$.ajax({
				url: '/registration/',
				type: "POST",
				data: {
					firstname: name,
					phone: phone,
					email: email,
					ans: ans,
					utm_source: utm_sourceVal,
					utm_content: utm_contentVal,
					utm_campaign: utm_campaignVal,
					utm_term: utm_termVal,
					utm_medium: utm_mediumVal,
					clickid: clickidVal,
					answers: ans.split("|"),
				},
				dataType: "json",
				success: function (data) {
					if (data.status == 'success') {
						window.location = 'thank-you?' + window.location
							.search +
							'&leadid=' + data.lead_id;
						console.log('bitch OKOK');
					}
				},
				error: function (data) {
					console.log(':(');
				}
			});
		} else {
			$(this).find('button[type=submit]').attr("disabled", false);
		}
	});


	// timer
	const monthList = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
	var today = new Date();
	var nextDate = Date.parse(today) + 86400000;
	var promoDate = new Date(nextDate);

	let promoDay = document.querySelector('.promo-day');
	let promoMonth = document.querySelector('.promo-month');

	let promoDay1 = document.querySelector('.promo-day1');
	let promoMonth1 = document.querySelector('.promo-month1');
	promoDay.textContent = promoDate.getDate();
	promoMonth.textContent = monthList[promoDate.getMonth()];

	promoDay1.textContent = promoDate.getDate();
	promoMonth1.textContent = monthList[promoDate.getMonth()];

	function timer() {
		let deadline = promoDate;

		function getTimeRemaining(endtime) {
			let t = Date.parse(endtime) - Date.parse(new Date()),
				seconds = Math.floor((t / 1000) % 60),
				minutes = Math.floor((t / 1000 / 60) % 60),
				hours = Math.floor(t / (1000 * 60 * 60));

			return {
				total: t,
				seconds: seconds,
				minutes: minutes,
				hours: hours,
			};
		}

		function setClock(id, endtime) {
			// let timer = document.querySelector(id),
			//     hours = document.querySelector(".hours"),
			//     minutes = document.querySelector(".minutes"),
			//     seconds = document.querySelector(".seconds"),
			//     timeInterval = setInterval(updateClock, 1000);

			function updateClock() {
				let t = getTimeRemaining(endtime);
				hours.textContent = t.hours < 10 ? "0" + t.hours : t.hours;
				minutes.textContent = t.minutes < 10 ? "0" + t.minutes : t.minutes;
				seconds.textContent = t.seconds < 10 ? "0" + t.seconds : t.seconds;

				if (t.total <= 0) {
					clearInterval(timeInterval);
					hours.textContent = "00";
					minutes.textContent = "00";
					seconds.textContent = "00";
				}
			}
		}

		setClock("timer", deadline);
	}

	timer();
});
