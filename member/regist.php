<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/config\db_conn.php"; // db

foreach($_POST as $key => $val) {
    if(in_array($key,['d','mode'])) {
        continue;
    } else {
        $input[] = $val == 'false' ? "$key = NULL" : "{$key} = '{$val}'";
    }
}

$input_str = join(", ", $input);
$chk_sql = "SELECT COUNT(`no`) FROM hackers.member WHERE id = '{$_POST['id']}'";
$chk_res = $db->execute_query($chk_sql)->fetch_row();

if(!$chk_res[0]) {
    $sql = "INSERT INTO hackers.member SET $input_str";
    $res =$db->query($sql);
    if($db->insert_id) {
        echo 'success';
    }
} else {
    echo 'fail'; 
}
