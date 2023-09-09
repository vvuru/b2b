<?php
if($_GET['mode']) {
    switch($_GET['mode']) {
        case 'step_01':
            require_once ROOT . "/{$_GET['d']}/{$_GET['mode']}.php";
            break;
        case 'step_02':
            require_once ROOT . "/{$_GET['d']}/{$_GET['mode']}.php";
            break;
        case 'step_03':
            require_once ROOT . "/{$_GET['d']}/{$_GET['mode']}.php";
            break;
        default :
            require_once ROOT . "/{$_GET['d']}/{$_GET['mode']}.php";
            break;
            
    }
    
}