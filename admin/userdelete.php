<?php
include 'database.php';
$db = new Database();
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id > 0) {
    $db->delete("DELETE FROM tbl_user WHERE id = $id");
}
header('Location: userlist.php');
exit(); 