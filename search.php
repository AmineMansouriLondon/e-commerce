<?php
include "sign/config.php";

$output="";
if (isset($_POST['search'])) {
$searchq = ($_POST['search']);

$sql = mysql_query("SELECT * FROM products WHERE (product_name LIKE '%$searchq%') OR (category LIKE '%$searchq%') OR (subcategory LIKE '%$searchq%')");
$count = mysql_num_rows($sql);
if ($count > 0){
      while($row = mysql_fetch_array($sql)){
        $pname = $row['product_name'];
        $category = $row['category'];
        $subcategory = $row['subcategory'];
        $link = $row['category'];

        $output.= '<h4> We found: </h4>
        <a href="products/'. $category .' '. $subcategory .'.php" >'.$category.' '. $subcategory .'</a> - '. $pname .' </p> </br> </br> ';
      } 
    } else {
        echo "Sorry, no results!";
}
}

?>