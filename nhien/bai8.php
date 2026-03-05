<?php
function chuyenDoiInHoa($chuoi) {
    return mb_strtoupper($chuoi, 'UTF-8');
}
echo "Chuỗi in hoa: " . chuyenDoiInHoa("tui đẹp trai nhất");
?>
