<?php
// Два вопроса, необходимые для решения задачи:
// 1) Какое сейчас значение директивы post_max_size?
// 2) В каких единицах (K, M, G) представлено это значение?

$size = ini_get('post_max_size');
$unit = strtoupper(substr(trim($size), -1));
$num = (int) $size;

switch ($unit) {
    case 'K':
        $size = $num * 1024;
        break;
    case 'M':
        $size = $num * 1024 * 1024;
        break;
    case 'G':
        $size = $num * 1024 * 1024 * 1024;
        break;
    default:
        $size = (int) $size;
}
?>

<h3>Адрес</h3>
<p>123456 Москва, Малый Американский переулок 21</p>

<h3>Задайте вопрос</h3>
<form action="" method="post">
    <label>Тема письма: </label>
    <br />
    <input name="subject" type="text" size="50" />
    <br />

    <label>Содержание: </label>
    <br />
    <textarea name="body" cols="50" rows="10"></textarea>
    <br />
    <br />

    <input type="submit" value="Отправить" />
</form>

<p>Максимальный размер отправляемых данных <?= $size ?> байт.</p>
