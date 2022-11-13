<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение и очистка общих полей
    $type = check($_POST['type']);

    // Выбор типа сообщения из переменной type
    switch ($type) {
        case 'feedback':
            // Форма обратной связи

            $name = check($_POST['name']);
            $phone = check($_POST['phone']);
            $comment = check($_POST['comment']);

            if (empty($name) or empty($phone)) {
                http_response_code(400);
                exit;
            }

            $subject = 'Заполнена форма "Обратной связи"';
            $html = '<p>Имя: ' . $name . '</p><p>Телефон: ' . $phone . '</p><p>Комментарий: ' . $comment . '</p>';
            break;
        case 'review':
            // Форма Оставить отзыв

            $name = check($_POST['name']);
            $phone = check($_POST['phone']);
            $comment = check($_POST['comment']);
            $rating = check($_POST['rating']);
            $select_doctor = check($_POST['select_doctor']);
            $select_services = check($_POST['select_services']);

            if (empty($name) or empty($phone) or empty($comment) or empty($rating)  or empty($select_doctor) or empty($select_services)) {
                http_response_code(400);
                exit;
            }

            $subject = 'Заполнена форма "Оставить отзыв"';
            $html = '<p>Имя: ' . $name . '</p><p>Телефон: ' . $phone . '</p><p>Отзыв: ' . $comment . '</p><p>Оценка: ' . $rating . '</p><p>Доктор: ' . $select_doctor. '</p><p>Услуга: ' . $select_services . '</p>';
            break;
    }

    // Настройка сообщения
    $email = array(
        'html' => $html,
        'text' => 'text',
        'subject' => $subject,
        'from' => array(
            'name' => 'Название сайта :)',
            'email' => 'maxswim228@gmail.com',
        ),
        'to' => array(
            array(
                'email' => 'maxswim228@gmail.com',
            ),
        )
    );

    mail($email);
} else {
    // HTTP 400 Если файл запрошен не через POST
    http_response_code(400);
    exit;
}


// Функция очистки данных
function check($val){
    $val = trim($val);
    $val = stripslashes($val);
    $val = strip_tags($val);
    $val = htmlspecialchars($val);
    return $val;
}
