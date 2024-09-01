<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form Nhập Thông Tin Sách</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            width: 50%;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Nhập Thông Tin Sách</h2>
    <form id="bookForm" method="post" action="btap3sever.php">
        <div class="form-group">
            <label for="bookname">Tên sách:</label>
            <input type="text" id="bookname" name="bookname">
            <span class="error" id="booknameError"></span>
        </div>
        <div class="form-group">
            <label for="author">Tác giả:</label>
            <input type="text" id="author" name="author">
            <span class="error" id="authorError"></span>
        </div>
        <div class="form-group">
            <label for="publisher">Nhà xuất bản:</label>
            <input type="text" id="publisher" name="publisher">
            <span class="error" id="publisherError"></span>
        </div>
        <div class="form-group">
            <label for="year">Năm xuất bản:</label>
            <input type="number" id="year" name="year">
            <span class="error" id="yearError"></span>
        </div>
        <button type="submit">Gửi</button>
    </form>
</div>
<button><a class="back" href="javascript:history.back()">Back</a></button>    

</body>
</html>