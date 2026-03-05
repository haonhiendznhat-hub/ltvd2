<?php
function kiemTraNamNhuan($nam) {
    $ketQua = "";
    if (($nam % 400 == 0) || ($nam % 4 == 0 && $nam % 100 != 0)) {
        $ketQua = "$nam là năm nhuận.";
    } else {
        $ketQua = "$nam không phải năm nhuận.";
    }
    return $ketQua;
}
echo kiemTraNamNhuan(2024);
?>
