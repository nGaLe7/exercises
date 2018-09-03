<?php
    if(isset($_GET['pcode'])) {
        $conn = new PDO("mysql:host=localhost;dbname=postcodedb", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $clean_postcode = sanatise($_GET['pcode']) . '%';
            $sql = "SELECT * FROM postcode_db  
             WHERE postcode LIKE :cleanpcode
             OR postcode LIKE :cleanpcode
              ORDER BY postcode ASC limit 50";
              $stmt = $conn->prepare($sql);
              $stmt->bindParam(':cleanpcode', $clean_postcode);
              $stmt->execute();
        header('Content-Type: application/json');
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if(is_array($result) && (sizeof($result) > 0)) {
            echo json_encode($result);
        }
         else {
            echo json_encode(array("Error"=>"true"));
        }
    }

    function sanatise($string_value) {
        $newval = strip_tags($string_value);
        $newval = stripslashes($newval);
        $newval = trim($newval);
        return $newval;
}
?>  

       