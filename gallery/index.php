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

    $photos = array_slice(scandir('data/images-small'), 2);
// Передаем в шаблон переменные и значения
// Выводим сформированное содержание
    echo $template->render(array(
        'title' => 'Фотоальбом',
        'photos' => $photos,
        'path_to_big' => 'data/images-big',
    ));
} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
