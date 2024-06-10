<?php

namespace Ahihi\Keke;

class Order
{
    public function __construct(
        public string $maDonHang,
        public string $ngayDatHang,
        public string $tenKhachHang,
        public array  $sanPhams = []
    ) {
    }

    // $sanPham = [
    //      'name' => 'Tên sản phẩm',
    //      'price' => 'Gía sản phẩm',
    //      'qty'   => 'số lượng'
    // ];
    public function addProduct(array $sanPham)
    {
        $this->sanPhams[] = $sanPham;
    }

    public function getTotalPrice()
    {
        $sum = 0;

        foreach ($this->sanPhams as $sanPham) {
            $sum += $sanPham['price'] * $sanPham['qty'];
        }

        return $sum;
    }

    public function getOrderInfo()
    {
        echo 'CHI TIẾT ĐƠN HÀNG: ' . $this->maDonHang . PHP_EOL;
        echo 'NGÀY ĐẶT HÀNG: ' . $this->ngayDatHang . PHP_EOL;
        echo 'TÊN KHÁCH HÀNG: ' . $this->tenKhachHang . PHP_EOL;

        echo '<ul>';
        foreach ($this->sanPhams as $sanPham) {
            echo "<li>{$sanPham['name']} - {$sanPham['price']} - {$sanPham['qty']}</li>";
        }
        echo '</ul>';
    }
}