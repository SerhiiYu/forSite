<?php
require 'button.class.php';
require 'pagination.class.php';

if (isset($_GET['page'])){
    $page = (int)$_GET['page'];
    }else{
    $page = 1;
    }

$p = new Pagination(array(
    'itemsCount' => 23,
    'itemsPerPage' => 5,
    'currentPage' => $page
));
?>

    <b>Страницы пример</b> <hr/>

<?php foreach ($p->buttons as $button) :
    if ($button->isActive) : ?>
        <a href = '?page=<?=$button->page?>'><?=$button->text?></a>
    <?php else : ?>
        <span style="color:#555555"><?=$button->text?></span>
    <?php endif;
endforeach; ?>