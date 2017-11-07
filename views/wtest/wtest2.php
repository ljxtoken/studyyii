<?php
/**
 * Created by PhpStorm.
 * User: Think
 * Date: 2017/11/7
 * Time: 14:55
 */
use app\testwedgit\TopMenu;

?>
<div>
    <?php $menu = TopMenu::begin(); ?>
    <?= $menu->addMenu('ljx'); ?>
    <?= $menu->addMenu('ljx2') ?>
    <?= $menu->addMenu('ljx3') ?>
    <?php $menu = TopMenu::end(); ?>
</div>