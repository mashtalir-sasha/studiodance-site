<!DOCTYPE html>
<html lang="uk">
<head>
	<title>Студія сучасного, вуличного танцю і творчості«Studio Dance+»для дітей від 4 років та дорослих без обмежень за віком</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="/assets/style.css">
	<link rel="stylesheet" href="/assets/libs/jquery-ui-slider/jquery-ui.css">
	<script src="/assets/libs/jquery-3.2.1.min.js"></script>
	<script src="/assets/libs/jquery.bxslider.min.js"></script>
	<script src="/assets/libs/jquery.maskedinput.min.js"></script>
	<script src="/assets/libs/is.mobile.js"></script>
	<script src="/assets/libs/jquery.form.js"></script>
	<script src="/assets/libs/jquery.validate.js"></script>
	<script src="/assets/libs/jquery-ui-slider/jquery-ui.js"></script>

	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-W1Z0QD9WBQ"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-W1Z0QD9WBQ');
	</script>

	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '304694624212062'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=304694624212062&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

</head>
<body>
<form class="portable-test-wrapper">
	<input type="hidden" name="title" value="Відповіді на питання">
	<!-- LOGO + TITLE START -->
	<div class="header-line">
		<div class="form-container">
			<img src="img/logo_black.svg" alt="logo" class="header-line__logo" style="max-width: 200px">
			<h2 class="header-line__title">
				Дізнайся за 1 хвилину вартість, розклад<br>занять та який з 12 стилів танцю<br>підійде саме тобі
			</h2>
		</div>
	</div>
	<!-- LOGO + TITLE END -->

	<!-- PROGRESS LINE START -->
	<div class="progress-line">
		<div class="main-progress">
			<div class="main-progress__extender"></div>
			<!-- STEPS TEXT START -->
			<div class="main-progress__text">
				<b>Залишилось відповісти на 4 питання,</b> щоб дізнатись розклад та вартість
			</div>
			<!-- STEPS TEXT END -->
			<!-- STEPS TEXT START -->
			<div class="main-progress__text">
				<b>Залишилось відповісти на 3 питання,</b> щоб дізнатись розклад та вартість
			</div>
			<!-- STEPS TEXT END -->
			<!-- STEPS TEXT START -->
			<div class="main-progress__text">
				<b>Залишилось відповісти на 2 питання,</b> щоб дізнатись розклад та вартість
			</div>
			<!-- STEPS TEXT END -->
<!-- STEPS TEXT START -->
			<div class="main-progress__text">
				<b>Залишилось відповісти на 1 питання,</b> щоб дізнатись розклад та вартість
			</div>
			<!-- STEPS TEXT END -->
			<!-- STEPS TEXT START -->
			<div class="main-progress__text">
				<b>Тест пройдено.</b> Заповніть форму нижче, щоб дізнатись розклад та вартість
			</div>
			<!-- STEPS TEXT END -->
		</div>
		<div class="form-container">
			<div class="step">
				<div class="step__text">Крок <span>1</span></div>
				<div class="step__extender"></div>
			</div>
		</div>
	</div>
	<!-- PROGRESS LINE END -->

	<!-- STEPS START -->
	<div class="form-container">
		<div class="test-slider">
			<!-- ONE-STEP START -->
			<div class="step-slide step-slide-1">
				<h3 class="step-slide__title">
				Підбираєте танці для себе чи для дитини?
				</h3>
				<div class="step-slide__grid">
					<!-- ONE-ITEM START -->
					<label for="step1-1" class="pick-item">
					    <input class="pick-item__input" type="radio" name="step1" id="step1-1" value="Для себе">
						<div class="pick-item__label">Для себе</div>
					</label>
					<!-- ONE-ITEM END -->
					<!-- ONE-ITEM START -->
					<label for="step1-2" class="pick-item">
					    <input class="pick-item__input" type="radio" name="step1" id="step1-2" value="Для дитини">
						<div class="pick-item__label">Для дитини</div>
					</label>
					<!-- ONE-ITEM END -->


					<div id="next2" class="btn-next-container"></div>
				</div>
				<!-- <input type="hidden" class="hidden-input-1" name="step1"> -->
			</div>
			<!-- ONE-STEP END -->


			<!-- ONE-STEP START -->
			<div class="step-slide step-slide-2">
				<h3 class="step-slide__title">
				Скільки Вам/дитині років?
				</h3>
				<div class="step-slide__grid">
					<!-- ONE-ITEM START -->
					<label for="step2-1" class="pick-item">
					    <input class="pick-item__input" type="radio" name="step2" id="step2-1" value="4-6 лет">
						<div class="pick-item__label">4-6 років</div>
					</label>
					<!-- ONE-ITEM END -->
					<!-- ONE-ITEM START -->
					<label for="step2-2" class="pick-item">
					    <input class="pick-item__input" type="radio" name="step2" id="step2-2" value="7-9 лет">
						<div class="pick-item__label">7-9 років</div>
					</label>
					<!-- ONE-ITEM END -->
					<!-- ONE-ITEM START -->
					<label for="step2-3" class="pick-item">
					    <input class="pick-item__input" type="radio" name="step2" id="step2-3" value="10-12 лет">
						<div class="pick-item__label">10-12 років</div>
					</label>
					<!-- ONE-ITEM END -->
					<!-- ONE-ITEM START -->
					<label for="step2-4" class="pick-item">
					    <input class="pick-item__input" type="radio" name="step2" id="step2-4" value="13-15 лет">
						<div class="pick-item__label">13-15 років</div>
					</label>
					<!-- ONE-ITEM END -->
					<!-- ONE-ITEM START -->
					<label for="step2-5" class="pick-item">
					    <input class="pick-item__input" type="radio" name="step2" id="step2-5" value="16+">
						<div class="pick-item__label">16+</div>
					</label>
					<!-- ONE-ITEM END -->


					<div id="next3" class="btn-next-container"></div>
				</div>
				<!-- <input type="hidden" class="hidden-input-1" name="step2"> -->
			</div>
			<!-- ONE-STEP END -->


			<!-- ONE-STEP START -->
			<div class="step-slide step-slide-3">
				<h3 class="step-slide__title">
				Чи займались раніше танцями?
				</h3>
				<div class="step-slide__grid">

					<!-- ONE-ITEM START -->
					<label for="step3-1" class="pick-item">
					    <input class="pick-item__input" type="radio" name="step3" id="step3-1" value="Так">
						<div class="pick-item__label">Так</div>
					</label>
					<!-- ONE-ITEM END -->
					<!-- ONE-ITEM START -->
					<label for="step3-2" class="pick-item">
					    <input class="pick-item__input" type="radio" name="step3" id="step3-2" value="Ні">
						<div class="pick-item__label">Ні</div>
					</label>

					<div id="next4" class="btn-next-container"></div>
				</div>
				<!-- <input type="hidden" class="hidden-input-2" name="step2"> -->
			</div>
			<!-- ONE-STEP END -->

			<!-- ONE-STEP START -->
			<div class="step-slide step-slide-4">
				<h3 class="step-slide__title">
					Який напрямок Вам більше всього подобається?
				</h3>
				<div class="step-slide__grid">
					<!-- ONE-ITEM START -->
					<div for="step4-1" class="pick-item">
						<label for="step4-1" class="pick-item">
							<input class="pick-item__input" type="radio" name="step4" id="step4-1" value="Break Dance від 6 років">
							<div class="pick-item__label">Break Dance від 6 років</div>
						</label>
					</div>
					<!-- ONE-ITEM START -->
					<div for="step4-2" class="pick-item">
						<label for="step4-2" class="pick-item">
							<input class="pick-item__input" type="radio" name="step4" id="step4-2" value="Jazz Funk від 8 років">
							<div class="pick-item__label">Jazz Funk від 8 років</div>
						</label>
					</div>
					<!-- ONE-ITEM START -->
					<div for="step4-3" class="pick-item">
						<label for="step4-3" class="pick-item">
							<input class="pick-item__input" type="radio" name="step4" id="step4-3" value="Hip Hop від 6 років">
							<div class="pick-item__label">Hip Hop від 6 років</div>
						</label>
					</div>
					<!-- ONE-ITEM START -->
					<div for="step4-4" class="pick-item">
						<label for="step4-4" class="pick-item">
							<input class="pick-item__input" type="radio" name="step4" id="step4-4" value="Heels від 14 + років">
							<div class="pick-item__label">Heels від 14 + років</div>
						</label>
					</div>
					<!-- ONE-ITEM START -->
					<div for="step4-5" class="pick-item">
						<label for="step4-5" class="pick-item">
							<input class="pick-item__input" type="radio" name="step4" id="step4-5" value="Commercial Dance від 14+ років">
							<div class="pick-item__label">Commercial Dance від 14+ років</div>
						</label>
					</div>
					<!-- ONE-ITEM START -->
					<div for="step4-6" class="pick-item">
						<label for="step4-6" class="pick-item">
							<input class="pick-item__input" type="radio" name="step4" id="step4-6" value="Сучасна хореографія від 4 –х років">
							<div class="pick-item__label">Сучасна хореографія від 4 –х років</div>
						</label>
					</div>
					<!-- ONE-ITEM START -->
					<div for="step4-7" class="pick-item">
						<label for="step4-7" class="pick-item">
							<input class="pick-item__input" type="radio" name="step4" id="step4-7" value="Ще не визначились. Хочемо більше дізнатись про школу!">
							<div class="pick-item__label">Ще не визначились. Хочемо більше дізнатись про школу!</div>
						</label>
					</div>
					
					<div id="next5" class="btn-next-container"></div>
				</div>
				<!-- <input type="hidden" class="hidden-input-3" name="step2"> -->
			</div>
			<!-- ONE-STEP END -->


			<!-- ONE-STEP START -->
			<div class="step-slide bg-mockup">
				<h3 class="step-slide__title">
					Дякуємо за відповіді! За Вашим номером телефону буде закріплено:
				</h3>
				<div class="step-slide__grid">
					<h4 class="step-slide__discount">· Підбірку стилів танцю під теде<br>· Бронь на перше пробне заняття<br>· Вартість абонементу та розклад занять<br>· Інформацію про викладачів та методики навчання</h4>
					<div class="last-step-form">
						<!-- <label class="last-step-form__label">Введите Ваше имя</label> -->
						<input class="last-step-form__input" type="text" name="name" placeholder="Введіть Ваше ім'я" required style="background: #EFEFEF url(assets/img/name.png) no-repeat left 20px center;">
						<!-- <label class="last-step-form__label">Введите Ваш телефон</label> -->
						<input class="last-step-form__input" type="text" name="phone" placeholder="Введіть Ваш номер" required>
						<button class="last-step-form__button btn-shine"><span>Отримати розклад та ціни</span></button>
						<div class="last-step-form__accept">Натискаючи кнопку, ви приймаєте <a href="privacy.html" target="_blank">Положення та Згоду</a> на обробку персональних даних.</div>
					</div>
				</div>

			</div>
			<!-- ONE-STEP END -->


			<!-- ONE-STEP START -->
			<div class="step-slide">
			</div>
			<!-- ONE-STEP END -->

			<!-- ONE-STEP START -->
			<div class="step-slide last">
				<!-- AFTER SUBMIT START -->
				<div class="after-submit">
					<div class="form-container">
						<h4 class="after-submit__title">Дякуємо за Вашу заявку.</h4>
						<h5 class="after-submit__descr">Наш спеціаліст по танцях протягом години звяжеться з Вами та розповість про вартість та розклад занять, підбере стиль та розкаже детальніше про школу</h5>
						</h5>
						<br>
						<div class="foot-soc">
							<a href="https://www.facebook.com/TalentCentrDT/" target="_blank" class="foot-soc__link">
							<img src="img/facebook.svg" alt="facebook" width="20" height="20">
							</a>
							<a href="https://www.instagram.com/talent_centr_dreamteam/" target="_blank" class="foot-soc__link">
								<img src="img/instagram.svg" alt="instagram" width="20" height="20">
							</a>
						</div>
					</div>
				</div>
				<!-- AFTER SUBMIT END -->
			</div>
			<!-- ONE-STEP END -->
		</div>
	</div>
	<!-- STEPS END -->

</form>

<script src="/assets/main.js?v=1.2"></script>
</body>
</html>
