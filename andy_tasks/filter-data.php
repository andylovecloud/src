<?php

if(isset($_POST['filter'])) {
    
    $filterProductData = filterProductData();

}


function filterProductData() {

    $filterPrice = $_POST['filterProduct'];
    global $conn;
    
    $data =[];
    if(!empty($filterPrice)){
         $orderby = 'DESC';
        if($filterPrice == 'productAsc'){

            $orderby = 'ASC';
        }

        $query = "SELECT id, productName FROM ".productTable;
        $query .= " ORDER BY id ". $orderby;

        $result = $conn->query($query);

        if($result->num_rows > 0) {
          $data = $result->fetch_all(MYSQLI_ASSOC);;
        
        } 
   } 

   return $data;
}