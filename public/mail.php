<?
	if(isset ($_POST['title'])) {$title=$_POST['title'];}
	if(isset ($_POST['name'])) {$fio=$_POST['name'];}
	if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}

	if(isset ($_POST['step1'])) {$step1=$_POST['step1'];}
	if(isset ($_POST['step2'])) {$step2=$_POST['step2'];}
	if(isset ($_POST['step3'])) {$step3=$_POST['step3'];}


	$to = "danceplusart@gmail.com";

	$subject = 'New lead(studiodance.com.ua)';

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= 'From: "No reply" <no-reply@studiodance.com.ua>';

	$message = "Форма: $title <br><br>";
	if ( $fio || $phonenum || $step1 || $step2 || $step3 ) {
		$message .= ""
			. ( $fio ?" І'мя:  $fio <br>" : "")
			. ( $phonenum ?" Телефон:  $phonenum <br><br>" : "")
			. ( $step1  ? " Скільки Вам/дитині років?: $step1 <br>" : "")
			. ( $step2  ? " Чи займались раніше танцями?: $step2 <br>" : "")
			. ( $step3  ? " Який напрямок Вам більше всього подобається?: $step3 <br>" : "");
	}

	if (!$title && !$phonenum) {
	} else {
		mail($to,$subject,$message,$headers);
	}
	
?>