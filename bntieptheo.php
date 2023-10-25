<?php 
     session_start();
    require_once __DIR__. '/libs/Database.php';
    $db = new Database;
    $iddk = intval(getInput('id'));
    $maphong = intval(getInput('maphong'));
    $sql ="UPDATE phongkham SET SoThuTuKham = SoThuTuKham + 1, SoNguoiCho = SoNguoiCho - 1 WHERE MaPK = '".$maphong."'";
    $insert = $db->delete("dangkikham", $iddk);
    $update = $db->fetchsql($sql);
    $_SESSION['bntt'] = "true";
    echo "<script>location.href='".base_url()."quanlykham.php'</script>";
?>