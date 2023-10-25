<?php 
    require_once __DIR__. '/libs/Database.php';
    $db = new Database;
    $num = intval(postInput('num'))+1;
    $num2 = intval(postInput('num2'));
    $maphong = intval(postInput('maphong'));
    $mabn = intval(postInput('mabn'));
    $sqlinsert = "INSERT INTO dangkikham(MaBenhNhan,MaPhongKham, SttKham) VALUES(".$mabn.",".$maphong.",".$num2.")";
    $sql ="UPDATE phongkham SET songuoicho = ".$num." WHERE MaPK = '".$maphong."'";
    $insert = $db->fetchsql($sqlinsert);
    $update = $db->fetchsql($sql);
?>