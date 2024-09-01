<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sách</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
        }
        h2 {
            color: #333;
            margin-top: 0;
        }
        p, ul {
            font-size: 14px;
            color: #555;
        }
        ul {
            padding-left: 20px;
        }
        li {
            margin-bottom: 5px;
        }
        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errors = [];
            $bookname = trim($_POST['bookname']);
            $author = trim($_POST['author']);
            $publisher = trim($_POST['publisher']);
            $year = trim($_POST['year']);
            
            if (empty($bookname)) {
                $errors[] = "Tên sách không được để trống.";
            } elseif (strlen($bookname) > 100) {
                $errors[] = "Tên sách không được dài hơn 100 ký tự.";
            }

            if (empty($author)) {
                $errors[] = "Tác giả không được để trống.";
            } elseif (strlen($author) > 100) {
                $errors[] = "Tên tác giả không được dài hơn 100 ký tự.";
            }

            if (empty($publisher)) {
                $errors[] = "Nhà xuất bản không được để trống.";
            } elseif (strlen($publisher) > 100) {
                $errors[] = "Tên nhà xuất bản không được dài hơn 100 ký tự.";
            }

            if (empty($year)) {
                $errors[] = "Năm xuất bản không được để trống.";
            } elseif (!is_numeric($year) || $year < 1000 || $year > date("Y")) {
                $errors[] = "Năm xuất bản phải là số và nằm trong khoảng từ 1000 đến năm hiện tại.";
            }

            if (empty($errors)) {
                echo "<h2>Thông tin sách đã nhập</h2>";
                echo "<p><strong>Tên sách:</strong> " . htmlspecialchars($bookname) . "</p>";
                echo "<p><strong>Tác giả:</strong> " . htmlspecialchars($author) . "</p>";
                echo "<p><strong>Nhà xuất bản:</strong> " . htmlspecialchars($publisher) . "</p>";
                echo "<p><strong>Năm xuất bản:</strong> " . htmlspecialchars($year) . "</p>";
                echo "<a href='javascript:history.back()'>Quay lại</a>";
            } else {
                echo "<h2>Lỗi khi nhập thông tin sách:</h2>";
                echo "<ul>";
                foreach ($errors as $error) {
                    echo "<li>" . htmlspecialchars($error) . "</li>";
                }
                echo "</ul>";
                echo "<a href='javascript:history.back()'>Quay lại</a>";
            }
        }
        ?>
    </div>
</body>
</html>
