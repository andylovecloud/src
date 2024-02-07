<?php

class News {

    private $conn;
    private $adminTable = 'singleImage';
    

    public function __construct($conn) {
        $this->conn = $conn;
    }

    function filterNewsByCategory($conn, $news_categoryId) {
        $news_categoryId = [];
    
        $sql = "SELECT * FROM news WHERE  news_categoryId= $news_categoryId";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $news_categoryId[] = $row;
            }
        }
    
        return $news_categoryId;
    }

    function getCategory() {
        global $conn;
        $data =[];
        $query = "SELECT * FROM news WHERE  news_categoryId= $news_categoryId";
        $result = $conn->query($query);
        if($result->num_rows > 0) {
            $data = $result->fetch_all(MYSQLI_ASSOC);
            
        } 
       return $data;
    }


}
