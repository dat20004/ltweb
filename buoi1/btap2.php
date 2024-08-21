    <?php
        $books = [];
        for ($i = 1; $i <= 100; $i++) {
            $books[] = [
                'stt' => $i,
                'ten_sach' => 'Tensach' . $i,
                'noi_dung' => 'Noidung' . $i
            ];
        }
    ?>

    <?php
        $booksPerPage = 10;
        $totalBooks = count($books);
        $totalPages = ceil($totalBooks / $booksPerPage);
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        if ($page < 1) $page = 1;
        if ($page > $totalPages) $page = $totalPages;
        $startIndex = ($page - 1) * $booksPerPage;
        $booksToShow = array_slice($books, $startIndex, $booksPerPage);
    ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 2</title>
    <style>
    body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        table {
            margin-left: 370px;
            width: 50%; 
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1{
            text-align:center;
        }
        .thanhcongcu {
            margin-top: 20px;
            display: flex;
            justify-content: center; 
        }
        .thanhcongcu a {
            margin: 0 5px;
            text-decoration: none;
            padding: 8px 12px;
            border: 1px solid #ddd;
            color: #007bff;
            border-radius: 4px;
        }
        .thanhcongcu a:hover {
            background-color: #007bff;
            color: white;
        }
        .back{
            text-decoration: none;
            color: black;
       padding-right:20px;
        }
    </style>
</head>

<body>
    <h1>Danh Sách Sách</h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Nội dung sách</th>
        </tr>
        <?php foreach ($booksToShow as $book): ?>
        <tr>
            <td><?php echo $book['stt']; ?></td>
            <td><?php echo $book['ten_sach']; ?></td>
            <td><?php echo $book['noi_dung']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <div class="thanhcongcu">
        <?php if ($page > 1): ?>
            <a style="text-decoration: none;" href="?page=<?php echo $page - 1; ?>">Trước</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a style="text-decoration: none;" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
            <a style="text-decoration: none;" href="?page=<?php echo $page + 1; ?>">Tiếp</a>
        <?php endif; ?>
    </div>
    <br>
    <button><a class="back" href="javascript:history.back()">Back</a></button>
    
</body>
</html>
