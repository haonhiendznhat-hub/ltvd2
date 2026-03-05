<?php
function tachChuoi($chuoi, $kyTuPhanCach) {
    $mang = explode($kyTuPhanCach, $chuoi);
    return $mang;
}
$ketQua = tachChuoi("Cam,Quýt,Mít,Dừa", ",");
print_r($ketQua); // dùng print_r để xem mảng  kkk
?>
