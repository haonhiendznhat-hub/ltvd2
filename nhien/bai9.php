<?php
function demKyTuXuatHien($chuoi, $kyTu) {
    $soLan = substr_count($chuoi, $kyTu);
    return "Ký tự '$kyTu' xuất hiện $soLan lần trong chuỗi.";
}
echo demKyTuXuatHien("apple pie", "p");
?>
