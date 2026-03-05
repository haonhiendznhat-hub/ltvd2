<?php
function kiemTraSoNguyenTo($n) {
    if ($n < 2) return "Số $n không phải số nguyên tố.";
    $check = true;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $check = false;
            break;
        }
    }
    return $check ? "Số $n là số nguyên tố." : "Số $n không phải số nguyên tố.";
}
echo kiemTraSoNguyenTo(17);
?>
