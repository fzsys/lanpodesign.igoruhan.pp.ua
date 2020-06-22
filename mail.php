<?php
header("Content-Type: text/html; charset=utf-8");

//these are info from inputs in the new variables
$location = htmlspecialchars($_POST["location"]);
$obj_type = htmlspecialchars($_POST["object-type"]);
$area = htmlspecialchars($_POST["area"]);
$style = htmlspecialchars($_POST["project-style"]);

$serv_consultation_mob = htmlspecialchars($_POST["serv-consultation-mob"]);
$serv_planning_mob = htmlspecialchars($_POST["serv-planning-mob"]);
$serv_visualization_mob = htmlspecialchars($_POST["serv-visualization-mob"]);
$serv_drawing_mob = htmlspecialchars($_POST["serv-drawing-mob"]);
$serv_materials_checking_mob = htmlspecialchars($_POST["serv-materials-checking-mob"]);
$serv_supervision_mob = htmlspecialchars($_POST["serv-supervision-mob"]);
$serv_decoration_mob = htmlspecialchars($_POST["serv-decoration-mob"]);

$serv_consultation = htmlspecialchars($_POST["serv-consultation"]);
$serv_planning = htmlspecialchars($_POST["serv-planning"]);
$serv_visualization = htmlspecialchars($_POST["serv-visualization"]);
$serv_drawing = htmlspecialchars($_POST["serv-drawing"]);
$serv_materials_checking = htmlspecialchars($_POST["serv-materials-checking"]);
$serv_supervision = htmlspecialchars($_POST["serv-supervision"]);
$serv_decoration = htmlspecialchars($_POST["serv-decoration"]);

$order_comment = htmlspecialchars($_POST["order-comment"]);

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["phone"]);


$refferer = getenv('HTTP_REFERER'); // a source of request (url)
$date = date("d.m.y"); // date info
$time = date("H:i"); // hourly info
$admin_email = "lanpodesign@gmail.com, uhan.igor@gmail.com";
$tema = "Новая заявка на консультацию";

$message_to_myemail = "<strong>Новая заявка на консультацию</strong>
						<hr>
						<br>
						<strong>Информация о клиенте:</strong><br>
						<br>
						<strong>Имя:</strong> $name<br>
						<strong>E-mail:</strong> $email<br>
						<strong>Телефон:</strong> $tel<br>
						<hr>
						<br>
						<strong>Информация об обьекте:</strong><br>
						<br>
						<strong>Местоположение:</strong> $location<br>
						<strong>Тип:</strong> $obj_type<br>
						<strong>Площадь, м2:</strong> $area<br>
						<strong>Стиль интерьера:</strong> $style<br>
						<hr>
						<br>
						<strong>Комплекс услуг:</strong><br>
						<br>
						$serv_consultation_mob $serv_consultation<br>
						$serv_planning_mob $serv_planning<br>
						$serv_visualization_mob $serv_visualization<br>
						$serv_drawing_mob $serv_drawing<br>
						$serv_materials_checking_mob $serv_materials_checking<br>
						$serv_supervision_mob $serv_supervision<br>
						$serv_decoration_mob $serv_decoration<br>
						<hr>
						<br>
						<strong>Комментарий к заказу:</strong><br>
						<br>
						$order_comment
						<hr>
						<br>
						<strong>Время отправки:</strong> $date / $time<br>
						<strong>Источник (ссылка):</strong> $refferer";

mail($admin_email, $tema, $message_to_myemail, "From: <Lanpodesigne> \r\n Reply-To: <Lanpodesigne> \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n");

?>