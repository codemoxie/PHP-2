<?php

require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

try {
// Указывает, где хранятся шаблоны
    $loader = new Twig_Loader_Filesystem('templates');
// Инициализируем Twig
    $twig = new Twig_Environment($loader);
// Подгружаем шаблон
    $template = $twig->loadTemplate('gallery.tmpl');

    $photo = $_GET['photo'];
// Передаем в шаблон переменные и значения
// Выводим сформированное содержание
    echo $template->render(array(
        'title' => 'Фото',
        'path_to_photo' => 'data/images-big',
        'photo' => $photo
    ));
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}