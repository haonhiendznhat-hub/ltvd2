<!DOCTYPE html>
<html>
<head><title>Bài 1</title></head>
<body>
    <?php
    function mayTinh($a, $b, $phepTinh) {
        $ketQua = 0;
        switch ($phepTinh) {
            case '+': $ketQua = $a + $b; break;
            case '-': $ketQua = $a - $b; break;
            case '*': $ketQua = $a * $b; break;
            case '/':
                if ($b == 0) return "Lỗi: Không thể chia cho 0";
                $ketQua = $a / $b;
                break;
            default: return "Lỗi: Phép tính không hợp lệ";
        }
        return $ketQua;
    }
    echo "Kết quả: " . mayTinh(10, 5, '+'); 
    ?>
</body>
</html>
