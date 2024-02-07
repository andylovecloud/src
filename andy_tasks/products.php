<?php

class Products {

    private $conn;
    private $adminTable = 'singleImage';
    

    public function __construct($conn) {
        $this->conn = $conn;
    }

    function filterProductsByPrice($conn, $minPrice, $maxPrice) {
        $filteredProducts = [];
    
        $sql = "SELECT * FROM products WHERE price BETWEEN $minPrice AND $maxPrice";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $filteredProducts[] = $row;
            }
        }
    
        return $filteredProducts;
    }


}
?>