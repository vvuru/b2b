<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/config\db_conn.php"; // db

$id = $_GET['id'] ? $_GET['id'] : false;

if($id !== false) {
    $sql = "SELECT COUNT(`no`) FROM hackers.member WHERE id = '{$id}'";
    $res = $db->query($sql);
    if($res->lengths > 0) {
        echo '중복된 아이디가 있습니다.';
    } else {
        echo '사용가능한 아이디입니다.';
    }
}

