<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả</title>
    <style>
        * {
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }
        body {
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }
        .output {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
        }

        .output h4 {
            font-size: 24px;
            color: #08A045;
            margin-bottom: 10px;
        }

        .output p {
            font-size: 16px;
            color: #333;
            margin: 5px 0;
        }

        .back {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #08A045;
            color: white;
            text-decoration: none;
        }
        .back:hover {
            background-color: #21D375;
        }
    </style>
</head>
<body>
    <?php
    $firstName = $lastName = $mail = $invoiceId = "";
    $payFor = [];
    $errors = [];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["firstName"])) {
            $errors['firstName'] = "Tên là bắt buộc.";
        } else {
            $firstName = htmlspecialchars($_POST["firstName"]);
        }

        if (empty($_POST["lastName"])) {
            $errors['lastName'] = "Họ là bắt buộc.";
        } else {
            $lastName = htmlspecialchars($_POST["lastName"]);
        }

        if (empty($_POST["mail"])) {
            $errors['mail'] = "Email là bắt buộc.";
        } else if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = "Email không hợp lệ.";
        } else {
            $mail = htmlspecialchars($_POST["mail"]);
        }

        if (empty($_POST["invoiceId"])) {
            $errors['invoiceId'] = "Mã hóa đơn là bắt buộc.";
        } else if (!is_numeric($_POST["invoiceId"])) {
            $errors['invoiceId'] = "Mã hóa đơn phải là số.";
        } else {
            $invoiceId = htmlspecialchars($_POST["invoiceId"]);
        }

        if (empty($_POST["pay_for"])) {
            $errors['pay_for'] = "Bạn phải chọn ít nhất một mục trong phần 'Pay For'.";
        } else {
            $payFor = $_POST["pay_for"];
        }

        if (empty($errors)) {
            echo '<div class="output">';
            echo "<h4>Các dữ liệu được nhập:</h4>" ;
            echo "<br>";
            echo "Họ Tên: " . $firstName . " " . $lastName ."<br>";
            echo "Email: " . $mail . "</br>";
            echo "Mã hóa đơn: " . $invoiceId . "</br>";
            echo "Pay for: " . implode(", ", $payFor) . "";
            echo '</div>'."</br>";

        } else {
            echo '<div class="output">';
            echo "<h4>Form chưa được gửi thành công. Bạn phải nhập:</h4>";
            foreach ($errors as $error) {
                echo "<p>$error</p>"."</br>";
            }
            echo '</div>';
        }
    }
    ?>
        <button><a class="back" href="javascript:history.back()">Back</a></button>      
</body>
</html>
