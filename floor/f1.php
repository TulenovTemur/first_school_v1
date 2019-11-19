<?php
// echo $_SERVER['PHP_SELF'];

$gfactive = "";
$hfactive = "";
$grfactive = "";
$nfactive = "";
$kfactive = "";
$lfactive = "";

if($_SERVER['PHP_SELF'] == "/index.php"){
    $gfactive = " class='active' ";
}
if($_SERVER['PHP_SELF'] == "/history.php"){
    $hfactive = " class='active' ";
}
if($_SERVER['PHP_SELF'] == "/gallery.php"){
    $grfactive = " class='active' ";
}
if($_SERVER['PHP_SELF'] == "/news.php"){
    $nfactive = " class='active' ";
}
if($_SERVER['PHP_SELF'] == "/contacts.php"){
    $kfactive = " class='active' ";
}
if($_SERVER['PHP_SELF'] == "/admin/admin.php"){
    $lfactive = " class='active' ";
}
?>
<nav class="navigation" id="navigation">
    <ul class="nav-items">
        <li><a href="/index.php" <?=$gfactive ?> >Главная</a></li>
        <li><a href="/history.php" <?=$hfactive ?> >О школе</a></li>
        <li><a href="/gallery.php" <?=$grfactive ?> >Галерея</a></li>
        <li><a href="/news.php" <?=$nfactive ?> >Новости</a></li>
        <li><a href="/contacts.php" <?=$kfactive ?> >Контакты</a></li>
        <?php
        if (isset($_SESSION['login']))
        { ?>
        <li><a href='/admin/index.php' <?=$lfactive?> >Admin</a></li>
        <?php }
        ?>
    </ul>
</nav>