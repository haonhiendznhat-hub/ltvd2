<?php
function kiemTraChanLe($n) {
    $thongBao = "";
    if ($n % 2 == 0) {
        $thongBao = "Số $n là số chẵn.";
    } else {
        $thongBao = "Số $n là số lẻ.";
    }
    return $thongBao;
}
echo kiemTraChanLe(15);
?>
