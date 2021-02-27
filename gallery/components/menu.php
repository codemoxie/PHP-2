<?php
	$menu = ['Google search' => 'https://www.google.com/',
		'Yandex search' => 'https://yandex.ru/', 'Галлерея' => '#', 'Новости' => '#', 'Карта сайта' => '#',];
	$str = "<ul>";
	foreach($menu as $item => $subitem) {
		$str .= "<a href=$subitem><li style='list-style-type: none;'>$item</li></a>";
	}
	$str .= "</ul>";
	echo $str;