<?php
require_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Бронирование</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="bron.css">
    <link rel="stylesheet" href="font.css">
    <link rel="stylesheet" href="bootstrap.min.css">
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
    <div class="containe-fluid">
        <section id="booking" class="main-content">
            <div class="booking-container">
                <div class="booking-info">
                    <img src="stol.jpg" alt="Изображение для бронирования">
                </div>
                <div id="booking-form" >
                    <h2>Бронирование стола</h2>
                    <form id="bron" novalidate action="add.php" method="post">
                        <div class="form-group">
                            <label for="name">Ваше имя:</label>
                            <input type="text" id="name" name="name" pattern="[а-яА-ЯёЁa-zA-Z\s]+" required  >
                            <div class="invalid-feedback">
                            Пожалуйста, введите ваше имя.
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Ваш Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Ваш номер телефона:</label>
                            <input type="tel" id="phone" name="phone" pattern="[0-9+]+" required>
                            <div class="invalid-feedback">
                            Пожалуйста, введите ваш телефон.
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="date">Дата бронирования:</label>
                            <input type="date" id="date" name="date" min="<?php echo date('Y-m-d'); ?>" required>

                        </div>
                        <div class="form-group">
                            <label for="time">Время бронирования:</label>
                            <input type="time" id="time" name="time" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="guests">Количество гостей:</label>
                            <input type="number" id="guests" name="guests" min="1" required>
                        </div>
                        <button type="submit" class="booking-button">Отправить заявку</button>
                    </form>
                </div>
                <div class="booking-info">
                    <img src="stol2.jpg" alt="Изображение для бронирования">
                </div>
            </div>
        </section>
    </div>
    <script>
    // Добавляем обработчик события отправки формы
    document.getElementById('bron').addEventListener('submit', function(event) {
        // Проверяем валидность формы
        if (!this.checkValidity()) {
            event.preventDefault(); // Отменяем стандартное поведение отправки формы
            event.stopPropagation(); // Останавливаем распространение события
        }

        // Добавляем классы для отображения сообщений об ошибках
        this.classList.add('was-validated');
    });
</script>
    <footer>
        <p>Авторские права &copy; 2024 Ночной клуб "J7".</p>
        <p>Адрес: ул. Партизанская, д. 125, г.Вашгород</p>
        <p>Телефон: +7 (904) 849-76-22</p>
        <p>Email: info@j7club.com</p>
    </footer>
</body>
</html>
