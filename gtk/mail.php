<?php 
if ($_POST['fio']!='') { 
	//$_POST['ref'] = urldecode ($_POST['ref']);
	//preg_match('/text=(.*?)(&|$)/',$_POST['ref'],$matches);
	//$headers = array(); 
	//$headers[] = "MIME-Version: 1.0"; 
	//$headers[] = "Content-type: text/html; charset=utf-8";
	
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	
	$str = "";
	$str.="\r\nКонтактное лицо (ФИО): ".$_POST['fio'];
	$str.="\r\nКонтактный телефон: ".$_POST['tel'];
	$str.="\r\nЭлектронная почта: ".$_POST['mail'];
	$str.="\r\nНазвание организации: ".$_POST['firmname'];
	$str.="\r\nКоличество участников: ".$_POST['pcount'];
	$str.="\r\nБанкет: ".$_POST['typebanket'];
	$str.="\r\nНужен Трансфер: ";
	$str.=isset($_POST['transfer']) ? 'Да' : 'Нет';
	$str.="\r\nНужно Проживание: ";
	$str.=isset($_POST['proahivanie']) ? 'Да' : 'Нет';
	$str.="\r\nНужна Анимация: ";
	$str.=isset($_POST['animacia']) ? 'Да' : 'Нет';
	$str.="\r\nНужны Экскурсии: ";
	$str.=isset($_POST['ekskursii']) ? 'Да' : 'Нет';
	$str.="\r\nНужно Питание: ";
	$str.=isset($_POST['pitanie']) ? 'Да' : 'Нет';
	$str.="\r\nДополнительное сообщение:\r\n ".$_POST['message'];
	
	mail('test@kreatex.ru', 'Заявка с сайта НГ 2015', $str, implode('\r\n', $headers)); 
} 
?> 
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
	$(function() {
		<? if ($_POST['fio']!='') print "$('#s1').trigger('submit');";
			else print "$(location).attr('href','index.html');"; ?>
	});
</script>
</head>
<body>
	<form id="s1" method="post" action="index.php">
		<input type="hidden" value="sended" name="ismail" />
		<input type="submit" style="display:none;" />
	</form>
</body>
</html>