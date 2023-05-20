<?

$connect = mysqli_connect('127.0.0.1', 'root', '', 'orders');

if($connect == false) {
	echo "Не вдалось під'єднатися!";
	echo mysqli_connect_error();
	exit();
};

mysqli_query($connect, "INSERT INTO `client` (`name`, `phone`, `delivery_at`, `street`, `nuber_of_building`, `time`) VALUES ('" . $_POST['name'] ."', '" . $_POST['phone'] ."', '" . $_POST['time'] ."', '" . $_POST['street'] ."', '" . $_POST['number'] ."', NOW())");

mysqli_query($connect, "INSERT INTO `orders` (`order`, `phone_id`) VALUES ('" . $_POST['order'] ."', '" . $_POST['phone']."')");

echo 'Ваше замовлення відправлене, можете переходити на головну сторінку та через 5 хвилин вам позвонить оператор';


mysqli_close($connect);