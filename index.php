<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ночной клуб "J7"</title>
    <link rel="stylesheet" href="sait.css">
    <link rel="stylesheet" href="font.css">
</head>
<body>
    <header>
        <h1>Ночной клуб "J7"</h1>
        <nav>
            <ul>
                <li><a href="./index.php">Главная</a></li>
                <li><a href="./novinki.php">Новинки</a></li>
                <li><a href="./menu.php">Меню</a></li>
                <li><a href="./programma.php">Шоу-программа</a></li>
                <li><a href="./bron.php">Бронирование</a></li>
            </ul>
        </nav>
    </header>
    <section id="main" class="main-content">
        <h2>Добро пожаловать на главную страницу клуба "J7"!</h2>
        <div class="vasya">
            <p class="text-center">Мы - один из самых популярных ночных клубов в городе!<br> В нашем клубе вы найдете самые горячие музыкальные треки, веселые тематические вечеринки и многое другое.</p>
            <p class="text-center">Мы открыты каждый день с 20:00 до 5:00, так что приходите и проведите незабываемое время в нашем клубе!</p>
            <p class="text-center">У нас также есть просторный танцпол, уютные бары с большим выбором напитков,<br> атмосферные зоны отдыха, диджеи и музыкальные выступления, чтобы сделать ваш вечер незабываемым.</p>
            <p class="text-center">Мы постоянно обновляем нашу программу и добавляем новые мероприятия и акции.<br> Следите за нашими новостями в социальных сетях и на сайте, чтобы не пропустить ни одной важной вечеринки!</p>
            <p class="text-center">Вход в клуб возможен с 18 лет. Для посещения некоторых мероприятий может потребоваться бронь столика заранее. <br>Пожалуйста, свяжитесь с нами для получения дополнительной информации.</p>
        </div>
    </section>
    <section id="shows" class="main-content">
        <h2>Ближайшие шоу-программы</h2>
        <div class="image-container">
            <div class="show-group">
                <div class="show">
                    <img src="focus.jpg" alt="Шоу 1">
                    <div class="text-container">
                        <h3>"Magic Illusion Show"</h3>
                        <p> Увлекательное шоу с фокусами и иллюзиями, которое захватывает зрителей в мир волшебства и фантазии. Иллюзионисты исполняют захватывающие трюки, исчезновения и превращения, создавая невероятные моменты на сцене.</p>
                    </div>
                </div>
                <div class="show">
                    <img src="disco.jpg" alt="Шоу 2">
                    <div class="text-container">
                        <h3>"Retro Night Fever"</h3>
                        <p> Шоу, вдохновленное эпохой диско. Диджеи и танцоры исполняют классические треки 70-х и 80-х годов, выступая в ярких, блестящих нарядах и соответствующей атрибутике эпохи.</p>
                    </div>
                </div>
            </div>
            <div class="show-group">
                <div class="show">
                    <img src="rock.jpg" alt="Шоу 3">
                    <div class="text-container">
                        <h3>"Rock Legends Tribute"</h3>
                        <p> Шоу, посвященное величайшим рок-группам и исполнителям всех времен. Живые кавер-группы и артисты исполняют хиты таких легенд как Queen, The Beatles, Led Zeppelin, AC/DC и многих других, создавая атмосферу рок-концерта.</p>
                    </div>
                </div>
                <div class="show">
                    <img src="pank.jpg" alt="Шоу 4">
                    <div class="text-container">
                        <h3>"Cyberpunk Future Rave"</h3>
                        <p> Шоу, вдохновленное киберпанком и футуристическими технологиями. Артисты и диджеи создают электронные и ритмичные музыкальные композиции, сопровождаемые мультимедийными эффектами, световыми инсталляциями и виртуальными проекциями.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="bron" class="main-content" >
        <h2>Бронирование стола</h2>
        <div class="booking-info">
            <p>Хотите забронировать столик в нашем ночном клубе? Не вопрос!</p>
            <p>Мы рады предложить вам уютное и комфортное место для отдыха в нашем заведении.</p>
            <p>Для бронирования столика просто свяжитесь с нами по телефону или по электронной почте:</p>
            <ul>
                <li>Телефон: +7 (XXX) XXX-XX-XX</li>
                <li>Email: booking@J7.com</li>
            </ul>
            <p>Наш менеджер поможет вам выбрать удобное время и подтвердит бронь.</p>
            <p>Мы гарантируем, что ваш вечер в нашем клубе будет запоминающимся!</p>
            <a href="bron.php" class="booking-button"><button>Забронировать</button></a>

        </div>
    </section>    
    <section id="new" class="main-content">
        <h2>Новинки</h2>
        <div class="image-container">
            <img src="eda.jpg" alt="Новинка 1">
            <img src="coct.jpg" alt="Новинка 2">
            <img src="svet.jpg" alt="Новинка 3">
        </div>
        <div class="text-center">
            <p>В этом разделе вы можете узнать о последних новинках и мероприятиях в клубе.<br> Мы постоянно обновляем наш репертуар, чтобы предложить вам лучшие мероприятия и акции.</p>
            <p>Подписывайтесь на наши социальные сети, чтобы быть в курсе всех событий и специальных предложений!</p>
        </div>
    </section>
    <section id="menu" class="main-content">
        <h2>Меню</h2>
        <div class="image-container">
            <img src="Myaso.jpg" alt="меню">
            <img src="napitki.jpg" alt="напитки">
        </div>
        <div class="text-center">
            <p>Познакомьтесь с нашим разнообразным ассортиментом напитков и закусок.<br> Мы предлагаем широкий выбор коктейлей, вин, пива и многое другое.</p>
            <p>Наши бармены профессионалы своего дела и готовы приготовить для вас любой напиток по вашему желанию.<br> Также у нас есть закуски, которые отлично подходят к вашим напиткам!</p>
        </div>
    </section>
    <footer>
        <p>Авторские права &copy; 2024 Ночной клуб "J7".</p>
        <p>Адрес: ул. Партизанская, д. 125, г.Вашгород</p>
        <p>Телефон: +7 (904) 849-76-22</p>
        <p>Email: info@j7club.com</p>
    </footer>
</body>
</html>
