<?
@session_start();
if (@$_SESSION['login'] != 'admin') header('Location: /admin/login');
?>
<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/header.php' ?>
<div id="sidebar">
    <? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/admin/hosts/menu.php'?>
</div>
<div id="text" >
    <h1><strong>Управління віртуальними хостами</strong></h1>
    <p><strong>Основний функціонал. </strong> Перелік основних можливостей адміністрування та розподілом віртуальних серверів</p>
    <ul>
        <li>Додавання нових віртуальних хостів</li>
        <li>Редагування існуючих віртуальних хостів</li>
        <li>Видалення існуючих віртуальних хостів</li>
        <li>Додаткові можливості</li>
    </ul>
    <h1>Основні моменти
    </h1>
    <p><strong>Логіка роботи:</strong> Від root користувача запускається <strong>bash</strong> скрипт який моніторить у певному інтервалі часу наявність файлу конфігурацій хостів. При наявності файлу він додається <strong>bash</strong> скриптом до доступних сайтів і активує його. Буде наданий список існуючих хостів і їх стан активності <strong>site-avalable site-enabled</strong>. При редагувані буде братись файл конфігурацій і перезаписуватимесь</p>
</div>


<? include $_SERVER['CONTEXT_DOCUMENT_ROOT'] . '/footer.php' ?>