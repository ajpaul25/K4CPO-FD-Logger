<?php
include("include.php");
$action = $_GET['action'];
$in = explode("|", $_GET['in']);
$gotanot =  $in[0] == 'GOTA' ? "like" : "not like";
if ($mysqldb->mysqlnumrows("SELECT * FROM ".DATABASE.".log where station " . $gotanot . " 'GOTA-%' and band='" . $in[1] . "' and mode='" . $in[2] . "' and `call`='" . $in[3] . "'") != 0) {
    $ret = $mysqldb->mysqlselectrow("SELECT * FROM ".DATABASE.".log where station " . $gotanot . " 'GOTA-%' and band='" . $in[1] . "' and mode='" . $in[2] . "' and `call`='" . $in[3] . "'");
    echo "Duplicate on " . $ret['dt'] . " UTC " ;
}
?>
