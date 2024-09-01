<?php
require 'btap4.php';

$numbers = [];
$results = null;
$searchValue = null;
$searchResult = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = array_map('intval', explode(',', $_POST['numbers']));
    $searchValue = isset($_POST['search_value']) ? intval($_POST['search_value']) : null;
    
    $results = [
        'sum' => sumArray($numbers),
        'max' => maxArray($numbers),
        'min' => minArray($numbers),
        'sortedAscending' => sortArrayAscending($numbers),
    ];

    if ($searchValue !== null) {
        $searchResult = searchInArray($numbers, $searchValue);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <h1>Array Functions</h1>
    <div>
        <form method="post" action="">
        <label for="numbers">Nhập mảng:</label>
        <br>
        <br>
        <input type="text" id="numbers" name="numbers" placeholder="e.g: 4,9,5,6,8" required>
        <br>
        <br>
        <label for="search_value">Giá trị cần tìm kiếm:</label>
        <br>
        <br>
        <input type="text" id="search_value" name="search_value" placeholder="e.g: 5">
        <br>
        <br>
        <input type="submit" value="Kết quả">
    </form>
    </div>
    
<br>
<br>
<br>
    <?php if ($results !== null): ?>
        <table>
            <tr>
                <td>Mảng ban đầu</td>
                <td><?php echo implode(', ', $numbers); ?></td>
            </tr>
            <tr>
                <td>Giá trị lớn nhất của mảng</td>
                <td><?php echo $results['max']; ?></td>
            </tr>
            <tr>
                <td>Giá trị nhỏ nhất của mảng</td>
                <td><?php echo $results['min']; ?></td>
            </tr>
            <tr>
                <td>Tổng các phần tử trong mảng</td>
                <td><?php echo $results['sum']; ?></td>
            </tr>
            <tr>
                <td>Mảng tăng dần sau khi sắp xếp</td>
                <td><?php echo implode(', ', $results['sortedAscending']); ?></td>
            </tr>
            <?php if ($searchValue !== null): ?>
            <tr>
                <td>Tìm kiếm giá trị cần tìm trong mảng</td>
                <td><?php echo $searchResult ? "$searchValue có trong mảng" : "Không tìm thấy số $searchValue"; ?></td>
            </tr>
            <?php endif; ?>
        </table>
    <?php endif; ?>
    <button><a class="back" href="javascript:history.back()">Back</a></button>
</body>
</html>
