<?php
function daoNguocChuoi($chuoi) {
    $chuoi_dao_nguoc = strrev($chuoi);
    return "Chuỗi đảo ngược của [$chuoi] là: [$chuoi_dao_nguoc]";
}
echo daoNguocChuoi("Hello Nhien");
?>
