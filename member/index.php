<?php
if($_GET['mode']) {
    require_once ROOT . "/{$_GET['d']}/{$_GET['mode']}.php";
}