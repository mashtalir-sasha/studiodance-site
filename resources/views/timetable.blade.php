<!DOCTYPE html>
<html lang="uk">

<head>
	<meta charset="utf-8">
	<title>Студія сучасного, вуличного танцю і творчості «Studio Dance+» для дітей від 4 років та дорослих без обмежень за віком</title>
	<meta name="description" content="Студія сучасного, вуличного танцю і творчості «Studio Dance+» для дітей від 4 років та дорослих без обмежень за віком">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:title" content="Студія сучасного, вуличного танцю і творчості «Studio Dance+» для дітей від 4 років та дорослих без обмежень за віком">
	<meta property="og:description" content="Студія сучасного, вуличного танцю і творчості «Studio Dance+» для дітей від 4 років та дорослих без обмежень за віком">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://studiodance.com.ua/">
	<meta property="og:image" content="https://studiodance.com.ua/img/dance_childs.jpg">

	<link rel="shortcut icon" href="img/favicon/favicon.png">
	<meta name="theme-color" content="#c73580">

    <link rel="stylesheet" href="{{ mix('/css/main.css') }}">

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

	<header class="timetable">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="head-logo">
						<img src="img/logo.svg" alt="logo" class="head__logo">
						<p class="head__name">м. Київ,<br>вул. Межова, 18<br><span class="phone"><i></i> (063) 991 60 95</span></p>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="col">
                    <h1 class="timetable__ttl">Дякуємо за заявку!</h1>
                    <h2 class="timetable__txt">Наш спеціаліст зв’яжеться з Вами найближчим часом!</h2>
                </div>
            </div>
		</div>
	</header>

    <section class="table">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="table__ttl">Актуальний розклад занять</h3>
                    <div class="scroll">
                        <table class="table-content">
                            <tr>
                                <th class="th__min"></th>
                                <th class="th__min"></th>
                                <th class="th__main">Понеділок</th>
                                <th class="th__main">Вівторок</th>
                                <th class="th__main">Середа</th>
                                <th class="th__main">Четвер</th>
                                <th class="th__main">П'ятниця</th>
                                <th class="th__main">Субота</th>
                                <th class="th__main">Неділя</th>
                            </tr>
                            @foreach($timetable as $item)
                            <tr @if ($loop->iteration % 2 !== 0) class="bg_white" @endif>
                                <td rowspan="2">{{ $item->time }}</td>
                                <td>ЗАЛ №1</td>
                                <td>
                                    @if(isset($item->monday1_title))<p class="col__title">{{ $item->monday1_title }}</p>@endif
                                    @if(isset($item->monday1_text1))<p class="col__text">{{ $item->monday1_text1 }}</p>@endif
                                    @if(isset($item->monday1_text2))<p class="col__text">{{ $item->monday1_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->tuesday1_title))<p class="col__title">{{ $item->tuesday1_title }}</p>@endif
                                    @if(isset($item->tuesday1_text1))<p class="col__text">{{ $item->tuesday1_text1 }}</p>@endif
                                    @if(isset($item->tuesday1_text2))<p class="col__text">{{ $item->tuesday1_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->wednesday1_title))<p class="col__title">{{ $item->wednesday1_title }}</p>@endif
                                    @if(isset($item->wednesday1_text1))<p class="col__text">{{ $item->wednesday1_text1 }}</p>@endif
                                    @if(isset($item->wednesday1_text2))<p class="col__text">{{ $item->wednesday1_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->thursday1_title))<p class="col__title">{{ $item->thursday1_title }}</p>@endif
                                    @if(isset($item->thursday1_text1))<p class="col__text">{{ $item->thursday1_text1 }}</p>@endif
                                    @if(isset($item->thursday1_text2))<p class="col__text">{{ $item->thursday1_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->friday1_title))<p class="col__title">{{ $item->friday1_title }}</p>@endif
                                    @if(isset($item->friday1_text1))<p class="col__text">{{ $item->friday1_text1 }}</p>@endif
                                    @if(isset($item->friday1_text2))<p class="col__text">{{ $item->friday1_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->saturday1_title))<p class="col__title">{{ $item->saturday1_title }}</p>@endif
                                    @if(isset($item->saturday1_text1))<p class="col__text">{{ $item->saturday1_text1 }}</p>@endif
                                    @if(isset($item->saturday1_text2))<p class="col__text">{{ $item->saturday1_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->sunday1_title))<p class="col__title">{{ $item->sunday1_title }}</p>@endif
                                    @if(isset($item->sunday1_text1))<p class="col__text">{{ $item->sunday1_text1 }}</p>@endif
                                    @if(isset($item->sunday1_text2))<p class="col__text">{{ $item->sunday1_text2 }}</p>@endif
                                </td>
                            </tr>
                            <tr @if ($loop->iteration % 2 !== 0) class="bg_white" @endif>
                                <td>ЗАЛ №2</td>
                                <td>
                                    @if(isset($item->monday2_title))<p class="col__title">{{ $item->monday2_title }}</p>@endif
                                    @if(isset($item->monday2_text1))<p class="col__text">{{ $item->monday2_text1 }}</p>@endif
                                    @if(isset($item->monday2_text2))<p class="col__text">{{ $item->monday2_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->tuesday2_title))<p class="col__title">{{ $item->tuesday2_title }}</p>@endif
                                    @if(isset($item->tuesday2_text1))<p class="col__text">{{ $item->tuesday2_text1 }}</p>@endif
                                    @if(isset($item->tuesday2_text2))<p class="col__text">{{ $item->tuesday2_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->wednesday2_title))<p class="col__title">{{ $item->wednesday2_title }}</p>@endif
                                    @if(isset($item->wednesday2_text1))<p class="col__text">{{ $item->wednesday2_text1 }}</p>@endif
                                    @if(isset($item->wednesday2_text2))<p class="col__text">{{ $item->wednesday2_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->thursday2_title))<p class="col__title">{{ $item->thursday2_title }}</p>@endif
                                    @if(isset($item->thursday2_text1))<p class="col__text">{{ $item->thursday2_text1 }}</p>@endif
                                    @if(isset($item->thursday2_text2))<p class="col__text">{{ $item->thursday2_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->friday2_title))<p class="col__title">{{ $item->friday2_title }}</p>@endif
                                    @if(isset($item->friday2_text1))<p class="col__text">{{ $item->friday2_text1 }}</p>@endif
                                    @if(isset($item->friday2_text2))<p class="col__text">{{ $item->friday2_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->saturday2_title))<p class="col__title">{{ $item->saturday2_title }}</p>@endif
                                    @if(isset($item->saturday2_text1))<p class="col__text">{{ $item->saturday2_text1 }}</p>@endif
                                    @if(isset($item->saturday2_text2))<p class="col__text">{{ $item->saturday2_text2 }}</p>@endif
                                </td>
                                <td>
                                    @if(isset($item->sunday2_title))<p class="col__title">{{ $item->sunday2_title }}</p>@endif
                                    @if(isset($item->sunday2_text1))<p class="col__text">{{ $item->sunday2_text1 }}</p>@endif
                                    @if(isset($item->sunday2_text2))<p class="col__text">{{ $item->sunday2_text2 }}</p>@endif
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="foot">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-5">
					<h3 class="foot__ttl">Контакти</h3>
					<p class="foot__addr">м. Київ,<br>вул. Межова, 18</p>
					<a href="tel:380639916095" class="foot__phone">(063) 991 60 95 (Телеграм)</a>
					<a href="tel:380961771351" class="foot__phone">(096) 177 13 51 (Viber)</a>
					<div class="foot-soc">
						<a href="https://www.facebook.com/TalentCentrDT/" target="_blank" class="foot-soc__link">
						<img src="img/facebook.svg" alt="facebook" width="20" height="20">
						</a>
						<a href="https://www.instagram.com/talent_centr_dreamteam/" target="_blank" class="foot-soc__link">
							<img src="img/instagram.svg" alt="instagram" width="20" height="20">
						</a>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2537.1966196395006!2d30.43552030000001!3d50.511908299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cd7d4bf782d1%3A0xd063b98437da4436!2z0LLRg9C70LjRhtGPINCc0LXQttC-0LLQsCwgMTgsINCa0LjRl9CyLCAwMjAwMA!5e0!3m2!1suk!2sua!4v1674781729455!5m2!1suk!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col">
					<a href="https://www.facebook.com/profile.php?id=100001361818059" target="_blank" rel="nofollow" class="dev">
						<span>Розробка сайту та реклами від команди</span>
						<img src="img/dev-logo.svg" alt="MS Digital" width="50" height="50">
					</a>
				</div>
			</div>
		</div>
	</footer>

<script src="{{ mix('/js/all.js') }}"></script>
<script src="{{ mix('/js/scripts.js') }}"></script>

</body>
</html>