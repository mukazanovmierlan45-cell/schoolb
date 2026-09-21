<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cols = abs((int) ($_POST['cols'] ?? 0));
    $rows = abs((int) ($_POST['rows'] ?? 0));
    $color = trim(strip_tags($_POST['color'] ?? ''));
}

$cols = ($cols ?? 0) ? $cols : 10;
$rows = ($rows ?? 0) ? $rows : 10;
$color = ($color ?? '') ? $color : 'yellow';
?>

<!-- Область основного контента -->

<form action="<?= htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') ?>" method="POST">
    <label>Количество колонок: </label>
    <br />
    <input name="cols" type="text" value="<?= htmlspecialchars((string) $cols, ENT_QUOTES, 'UTF-8') ?>" />
    <br />

    <label>Количество строк: </label>
    <br />
    <input name="rows" type="text" value="<?= htmlspecialchars((string) $rows, ENT_QUOTES, 'UTF-8') ?>" />
    <br />

    <label>Цвет: </label>
    <br />
    <input name="color" type="text" value="<?= htmlspecialchars($color, ENT_QUOTES, 'UTF-8') ?>" />
    <br />
    <br />

    <input type="submit" value="Создать" />
</form>

<!-- Таблица -->
<?php drawTable($cols, $rows, $color); ?>
<!-- Таблица -->

<!-- Область основного контента -->
