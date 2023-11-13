<?php
//CÂU 1
// Hàm kiểm tra số nguyên tố
function isPrime($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

// Hiển thị danh sách các số nguyên tố từ 1 đến 100
echo "Các số nguyên tố từ 1 đến 100 là: ";
for ($i = 1; $i <= 100; $i++) {
    if (isPrime($i)) {
        echo $i . "<br>";
    }
}

//CÂU 2
// Tạo mảng kết hợp chứa thông tin về sản phẩm
$products = array(
    array("name" => "Xe đạp ", "price" => 50, "quantity" => 27),
    array("name" => "Xe máy", "price" => 500, "quantity" => 7),
    array("name" => "Ô tô", "price" => 30000, "quantity" => 3),
    // Thêm thông tin về sản phẩm khác nếu cần
);

// Hiển thị thông tin của tất cả sản phẩm
echo "<br>Thông tin của tất cả sản phẩm:";
foreach ($products as $product) {
    echo "<br>Tên: " . $product['name'] . ", Giá: $" . $product['price'] . ", Số lượng: " . $product['quantity'] . "\n";
}

// Hàm tính tổng giá trị của tất cả sản phẩm
function calculateTotalValue($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product['price'] * $product['quantity'];
    }
    return $totalValue;
}

// Tính và hiển thị tổng giá trị của tất cả sản phẩm
$totalValue = calculateTotalValue($products);
echo "<br>Tổng giá trị của tất cả sản phẩm là: $" . $totalValue;
?>