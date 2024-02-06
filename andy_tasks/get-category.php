<?php
function getCategory() {
    global $conn;
    $data =[];
    $query = "SELECT distinct category FROM ".productTable;
    $result = $conn->query($query);
    if($result->num_rows > 0) {
        $data = $result->fetch_all(MYSQLI_ASSOC);
        
    } 
   return $data;
}