<?php
include_once "lib.php";
$db=new db();
$db->get("select * from log ", $rs, $rn);
// $db->get("select seq, txt from log ", $rs, $rn);
print_r($rs);
for ($i=0; $i<$rn; $i++) {
    echo $rs[$i]['seq'] ." ". $rs[$i]['txt'] ."<br>\n";
}
$db->finish();