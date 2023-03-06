<!doctype html>
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
$mustache = new Mustache_Engine([
        'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/../mustache/')
    ]
);
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=PT+Sans+Caption&display=swap" rel="stylesheet">
    <title>Мегастом</title>
</head>
<body>
<main class="blog">
    <div class="container">
        <h2 class="blog-title">Фотоотчёт с мероприятия</h2>
        <div class="blog-subtitle">Посмотрите наши фотографии с мероприятия. Вы можете их скачать и поделиться со своими близкими.</div>
        <div class="blog-photo">
        <? echo $mustache -> render('blog_content', include $_SERVER['DOCUMENT_ROOT'] . '/context/blog.php') ?>
        </div>
        <div class="blog-photo-video">
            <img src="images/1.jpg" alt="#">
            <svg width="197" height="197" viewBox="0 0 197 197" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M74.0776 142.466L142.745 98.3224L74.0776 54.1791V142.466ZM98.6017 196.419C85.0317 196.419 72.2792 193.842 60.3442 188.689C48.4091 183.542 38.0272 176.554 29.1986 167.726C20.3699 158.897 13.3822 148.515 8.23537 136.58C3.08204 124.645 0.505371 111.892 0.505371 98.3224C0.505371 84.7524 3.08204 71.9999 8.23537 60.0649C13.3822 48.1298 20.3699 37.7479 29.1986 28.9193C38.0272 20.0906 48.4091 13.0996 60.3442 7.94626C72.2792 2.79947 85.0317 0.226074 98.6017 0.226074C112.172 0.226074 124.924 2.79947 136.859 7.94626C148.794 13.0996 159.176 20.0906 168.005 28.9193C176.834 37.7479 183.821 48.1298 188.968 60.0649C194.121 71.9999 196.698 84.7524 196.698 98.3224C196.698 111.892 194.121 124.645 188.968 136.58C183.821 148.515 176.834 158.897 168.005 167.726C159.176 176.554 148.794 183.542 136.859 188.689C124.924 193.842 112.172 196.419 98.6017 196.419ZM98.6017 176.8C120.51 176.8 139.066 169.197 154.271 153.992C169.476 138.787 177.079 120.231 177.079 98.3224C177.079 76.4142 169.476 57.8577 154.271 42.6527C139.066 27.4478 120.51 19.8453 98.6017 19.8453C76.6935 19.8453 58.137 27.4478 42.932 42.6527C27.7271 57.8577 20.1246 76.4142 20.1246 98.3224C20.1246 120.231 27.7271 138.787 42.932 153.992C58.137 169.197 76.6935 176.8 98.6017 176.8Z" fill="white" fill-opacity="0.6"/>
            </svg>
        </div>
        <div class="blog-photo">
            <? echo $mustache -> render('blog_content', include $_SERVER['DOCUMENT_ROOT'] . '/context/blog.php') ?>
        </div>
        <button class="blog-photo-btn">Скачать все фото <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 11.575C7.86667 11.575 7.74167 11.554 7.625 11.512C7.50833 11.4707 7.4 11.4 7.3 11.3L3.7 7.7C3.51667 7.51667 3.425 7.28333 3.425 7C3.425 6.71667 3.51667 6.48333 3.7 6.3C3.88333 6.11667 4.12067 6.02067 4.412 6.012C4.704 6.004 4.94167 6.09167 5.125 6.275L7 8.15V1C7 0.716667 7.096 0.479 7.288 0.287C7.47933 0.0956668 7.71667 0 8 0C8.28333 0 8.521 0.0956668 8.713 0.287C8.90433 0.479 9 0.716667 9 1V8.15L10.875 6.275C11.0583 6.09167 11.296 6.004 11.588 6.012C11.8793 6.02067 12.1167 6.11667 12.3 6.3C12.4833 6.48333 12.575 6.71667 12.575 7C12.575 7.28333 12.4833 7.51667 12.3 7.7L8.7 11.3C8.6 11.4 8.49167 11.4707 8.375 11.512C8.25833 11.554 8.13333 11.575 8 11.575ZM2 16C1.45 16 0.979333 15.8043 0.588 15.413C0.196 15.021 0 14.55 0 14V12C0 11.7167 0.0956668 11.479 0.287 11.287C0.479 11.0957 0.716667 11 1 11C1.28333 11 1.521 11.0957 1.713 11.287C1.90433 11.479 2 11.7167 2 12V14H14V12C14 11.7167 14.096 11.479 14.288 11.287C14.4793 11.0957 14.7167 11 15 11C15.2833 11 15.5207 11.0957 15.712 11.287C15.904 11.479 16 11.7167 16 12V14C16 14.55 15.8043 15.021 15.413 15.413C15.021 15.8043 14.55 16 14 16H2Z" fill="white"/>
            </svg>
        </button>
    </div>
</main>
</body>