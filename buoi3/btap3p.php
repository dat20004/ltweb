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
        p {
            font-size: 14px;
            color: #555;
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
            $bookname = htmlspecialchars(trim($_POST['bookname']));
            $author = htmlspecialchars(trim($_POST['author']));
            $publisher = htmlspecialchars(trim($_POST['publisher']));
            $year = htmlspecialchars(trim($_POST['year']));
            echo "<h2>Thông tin sách đã nhập</h2>";
            echo "<p><strong>Tên sách:</strong> $bookname</p>";
            echo "<p><strong>Tác giả:</strong> $author</p>";
            echo "<p><strong>Nhà xuất bản:</strong> $publisher</p>";
            echo "<p><strong>Năm xuất bản:</strong> $year</p>";
            echo "<a href='javascript:history.back()'>Quay lại</a>";
        }
        ?>
    </div>
</body>
</html>
