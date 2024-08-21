<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phép tính</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 2px solid green;
            padding: 10px;
        }
        .back{
            text-decoration: none;
            color: black;
       padding-right:20px;
        }
    </style>
</head>
<body>
    <h2>PHÉP TÍNH HAI SỐ</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <table>
            <tr>
                <th>Phép tính</th>
                <td>
                    <select name="pheptinh" id="pheptinh">
                        <option value="cong">Cộng</option>
                        <option value="tru">Trừ</option>
                        <option value="nhan">Nhân</option>
                        <option value="chia">Chia</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Số thứ nhất</th>
                <td><input type="number" name="so1" id="so1" required></td>
            </tr>
            <tr>
                <th>Số thứ hai</th>
                <td><input type="number" name="so2" id="so2" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Tính"></td>
            </tr>
        </table>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pheptinh = $_POST['pheptinh'];
        $so1 = $_POST['so1'];
        $so2 = $_POST['so2'];
        $ketqua = "";

        switch ($pheptinh) {
            case "cong":
                $ketqua = $so1 + $so2;
                break;
            case "tru":
                $ketqua = $so1 - $so2;
                break;
            case "nhan":
                $ketqua = $so1 * $so2;
                break;
            case "chia":
                if ($so2 != 0) {
                    $ketqua = $so1 / $so2;
                } else {
                    $ketqua = "Không thể chia cho 0";
                }
                break;
        }
    }
    ?>
   <p>Kết quả: <?php echo isset($ketqua) ? $ketqua : 'Chưa có kết quả.'; ?></p>
   <button><a class="back" href="javascript:history.back()">Back</a></button>
</body>
</html>