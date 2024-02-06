<?php
if(isset($_POST['filter'])) {
    
    $filterDataByCategory = filterDataByCategory();
}
function filterDataByCategory() {
    $filterByCategory = $_POST['filterByCategory'];
    global $conn;
    
    $data =[];
    if(!empty($filterByCategory)){
    
        $query = "SELECT productName, category FROM ".productTable;
        $query .= " WHERE category= '$filterByCategory'";
     
        $result = $conn->query($query);
    
        if($result->num_rows > 0) {
          $data = $result->fetch_all(MYSQLI_ASSOC);;
        
        } 
   } 
   return $data;
}