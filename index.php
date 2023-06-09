<!DOCTYPE html>
<html>

<head>
	<title>Лабораторная 13</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="header">
		<h1>Лабораторная 13</h1>
	</div>


	<div class="Block1">

		<h4>1 задание</h4>
		<?php
		//isset — Определяет, была ли установлена переменная значением, отличным от null
		if (isset($_REQUEST['city'])) {
			$city = $_REQUEST['city'];
			echo 'Ваш город, ' . $city;
		}
		?>
		<form action="" method="get">
			<input type="text" name="city" placeholder="Введите город">
			<br>
			<input type="submit">
		</form>

		<h4>2 задание</h4>
		<?php
		/* 
		$_REQUEST:
        $_REQUEST содержит данные, отправленные на сервер независимо от метода передачи (GET, POST или COOKIE).
        Он объединяет данные из массивов $_GET, $_POST и $_COOKIE. Если данные имеют одинаковые ключи, значения из $_POST имеют приоритет.
        Обычно $_REQUEST используется, когда необходимо обработать данные без знания метода передачи.

    	$_POST:
        $_POST содержит данные, отправленные на сервер с использованием метода POST.
        Данные, отправленные через POST, не видны в URL и не сохраняются в истории браузера.
        Этот массив используется для передачи чувствительной информации, такой как пароли или данные кредитных карт.

    	$_GET:
        $_GET содержит данные, отправленные на сервер с использованием метода GET.
        Данные, отправленные через GET, видны в URL и сохраняются в истории браузера.
        Этот массив обычно используется для передачи нечувствительной информации или параметров запроса, которые не изменяют состояние сервера.

		$_COOKIE:
    	$_COOKIE содержит данные, сохраненные на компьютере пользователя в виде cookie.
    	Cookie - это небольшие фрагменты данных, отправляемые и хранящиеся на стороне клиента, и передаются с каждым запросом к серверу.
    	Они могут содержать информацию, такую как предпочтения пользователя, данные аутентификации и другую состояние клиента.
    	В PHP данные из $_COOKIE могут быть получены и изменены.
		*/
		if (isset($_REQUEST['input'])) {
			$input = $_POST['input'];
			//strip_tags — Удаление тегов HTML и PHP из строки
			$clean_input = strip_tags($input);
		}
		?>
		<form action="" method="get">
			<input type="text" name="city" placeholder="Введите город">
			<br>
			<input type="submit">
		</form>

		<h4>3 задание</h4>
		<?php
		//empty — Проверяет, пуста ли переменная
		if (empty($_GET)) {
		?>
			<form action="" method="GET">
				<input name="test1" placeholder="Сокрытие формы">
				<br>
				<input type="submit">
			</form>
		<?php
		} else {
		?>
			<form action="" method="GET">
				<input type="submit">
			</form>
		<?php
		}
		?>

		<h4>4 задание</h4>
		<?php
		if (isset($_REQUEST['name'])) {
			$name = $_REQUEST['name'];
			echo 'Привет, ' . $name;
		}
		?>
		<form action="" method="get">
			<input type="text" name="name" placeholder="Введите имя">
			<br>
			<input type="submit">
		</form>

		<h4>5 задание</h4>
		<?php
		if (isset($_REQUEST['name']) and isset($_REQUEST['age']) and isset($_REQUEST['text'])) {
			$name = strip_tags($_REQUEST['name']);
			$age = strip_tags($_REQUEST['age']);
			$text = strip_tags($_REQUEST['text']);
			echo 'Имя - ' . $name . '<br>' . 'Возраст - ' . $age . '<br>Сообщение: ' . $text;
		}
		?>
		<form action="" method="get">
			<input type="text" name="name" placeholder="Введите имя">
			<br>
			<input type="text" name="age" placeholder="Введите возраст">
			<br>
			<textarea name="text" placeholder="Введите сообщение"></textarea>
			<br>
			<input type="submit">
		</form>

		<h4>6 задание</h4>
		<?php
		if (isset($_REQUEST['age'])) {
			$age = $_REQUEST['age'];
			echo $age;
		}
		if (!isset($_REQUEST['age'])) :
		?>
			<form action="" method="get">
				<input name="age" placeholder="Введите ваш возраст">
				<br>
				<input type="submit">
			</form>
		<?php endif; ?>

		<h4>7 задание</h4>
		<?php
		$loginFile = 'VACBAN';
		$passwordFile = 7777;
		if (isset($_REQUEST['login']) and isset($_REQUEST['password'])) {
			//trim — удаление пробелов (или других символов) из начала и конца строки
			$login = trim($_REQUEST['login']);
			$password = trim($_REQUEST['password']);
			if ($login == $loginFile and $password == $passwordFile) {
				echo 'введено верно';
			} else {
				echo 'неверный логин или пароль';
			}
		}
		?>
		<form action="" method="post">
			<input type="text" name="login" placeholder="Введите логин">
			<br>
			<input type="password" name="password" placeholder="Введите пароль">
			<br>
			<input type="submit">
		</form>

		<h4>8 задание</h4>
		<?php
		$name = '';
		if (isset($_REQUEST['name'])) {
			$name = $_REQUEST['name'];
			echo $name;
		}
		?>
		<form action="" method="post">
			<input type="text" name="name" placeholder="Введите имя" value="<?= $name; ?>">
			<br>
			<input type="submit">
		</form>

		<h4>9 задание</h4>
		<?php
		$message = '';
		$name = '';
		if (isset($_REQUEST['name']) and isset($_REQUEST['message'])) {
			$name = $_REQUEST['name'];
			$message = $_REQUEST['message'];
			echo 'Имя- ' . $name . '<br>' . $message;
		}
		?>
		<form action="" method="post">
			<input type="text" name="name" placeholder="Имя" value="<?= $name; ?>">
			<br>
			<textarea name="message" placeholder="Введите сообщение"><?= $message; ?></textarea>
			<br>
			<input type="submit">
		</form>

		<h4>10 задание</h4>
		<?php
		//preg_replace — Выполняет поиск и замену по регулярному выражению
		//preg_match — Выполняет проверку на соответствие регулярному выражению
		/*
		Основные метасимволы:
        .: Соответствует любому одиночному символу, кроме символа новой строки.
        *: Соответствует предыдущему элементу ноль или более раз.
        +: Соответствует предыдущему элементу один или более раз.
        ?: Соответствует предыдущему элементу ноль или один раз.
        \: Экранирует специальные символы.

    	Классы символов:
        [abc]: Соответствует любому символу из набора (a, b или c).
        [^abc]: Соответствует любому символу, не принадлежащему набору (не a, не b и не c).
        [a-z]: Соответствует любому символу в заданном диапазоне (от a до z).
        [0-9]: Соответствует любой цифре.
        \d: Соответствует любой цифре (эквивалентно [0-9]).
        \w: Соответствует любой букве или цифре или символу подчеркивания.
        \s: Соответствует любому символу пробела (пробел, табуляция, новая строка и т.д.).

    	Анкоры:
        ^: Соответствует началу строки.
        $: Соответствует концу строки.

    	Квантификаторы:
        {n}: Соответствует ровно n раз.
        {n,}: Соответствует n или более раз.
        {n,m}: Соответствует от n до m раз.

    	Группировка:
        (abc): Создает группу символов.
        (?:abc): Создает негруппирующую группу символов.

    	Специальные последовательности:
        \b: Соответствует границе слова.
        \w: Соответствует букве, цифре или символу подчеркивания.
        \d: Соответствует цифре.
        \s: Соответствует символу пробела.

   		Флаги модификаторов:
        i: Регистронезависимый поиск.
        m: Многострочный поиск.
        s: Режим однострочного поиска.
        x: Режим расширенного синтаксиса.
		*/
		echo preg_replace('#a.b#', 'here', 'ahb acb aeb aeeb adcb axeb');
		?>

		<h4>11 задание</h4>
		<?php
		echo preg_replace('#a..a#', 'here', 'aba aca aea abba adca abea');
		?>

		<h4>12 задание</h4>
		<?php
		echo preg_replace('#ab.a#', 'here', 'aba aca aea abba adca abea');
		?>

		<?php
		echo preg_replace('#ab+a#', 'here', 'aa aba abba abbba abca abea');
		?>

		<h4>13 задание</h4>
		<?php
		echo preg_replace('#ab*a#', 'here', 'aa aba abba abbba abca abea');
		?>

		<h4>14 задание</h4>
		<?php
		echo preg_replace('#ab?a#', 'here', 'aa aba abba abbba abca abea');
		?>

		<h4>15 задание</h4>
		<?php
		echo preg_replace('#(ab)+#', 'here', 'ab abab abab abababab abea');
		?>

		<h4>16 задание</h4>
		<?php
		echo preg_replace('#a\.a#', 'here', 'a.a aba aea');
		?>

		<h4>17 задание</h4>
		<?php
		echo preg_replace('#2\+3#', 'here', '2+3 223 2223');
		?>

		<h4>18 задание</h4>
		<?php
		echo preg_replace('#2\++3#', 'here', '23 2+3 2++3 2+++3 345 567')
		?>

		<h4>19 задание</h4>
		<?php
		echo preg_replace('#2\+*3#', 'here', '23 2+3 2++3 2+++3 445 677');
		?>

		<h4>20 задание</h4>
		<?php
		echo preg_replace('#\*q+\+#', 'here', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
		?>

		<h4>21 задание</h4>
		<?php
		echo preg_replace('#\*q*\+#', 'here', '*+ *q+ *qq+ *qqq+ *qqq qqq+');
		?>

		<h4>22 задание</h4>
		<?php
		echo preg_replace('#a.+?a#', 'here', 'aba accca azzza wwwwa');
		?>
	</div>

	<footer>
		<h1>Выполнено © Морошкином Максимом</h1>
	</footer>
</body>

</html>