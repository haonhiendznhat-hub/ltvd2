<?php
function demSoTu($chuoi) {
    $soTu = str_word_count($chuoi);
    return "Số từ trong chuỗi là: $soTu";
}
echo demSoTu("Học lập trình PHP thật thú vị");
?>
