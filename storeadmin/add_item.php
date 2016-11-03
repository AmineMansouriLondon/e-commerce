<?php
//Error Report
error_reporting(E_ALL);
ini_set('display_errors','1');
?>

<?php
// Parse the form data and add inventory item to the system(when submit form is pressed)
if (isset($_POST['product_name'])) {
  //Cleansing
  $product_name = mysql_real_escape_string($_POST['product_name']);
  $price = mysql_real_escape_string($_POST['price']);
  $img_path = mysql_real_escape_string($_POST['img_path']);
  $category = mysql_real_escape_string($_POST['category']);
  $subcategory = mysql_real_escape_string($_POST['subcategory']);
  $details = mysql_real_escape_string($_POST['details']);
  $trailer = mysql_real_escape_string($_POST['trailer']);
  // See if that product name is an identical match to another product in the system
  $sql = mysql_query("SELECT id FROM products WHERE product_name='$product_name' LIMIT 1");
  $productMatch = mysql_num_rows($sql); // count the output amount
    if ($productMatch > 0) {
    echo 'Sorry you tried to place a duplicate "Product Name" into the system, <a href="inventory_list.php">click here</a>';
    exit();
  }
  // Add this product into the database now
  $sql = mysql_query("INSERT INTO products (product_name, price, img_path details, category, subcategory, date_added, trailer) 
        VALUES('$product_name','$price','$details','$category','$subcategory',now())") or die (mysql_error());
     $pid = mysql_insert_id();
    exit();
}
?>
<?php
//Block grabs everything for viewing
$product_list="";
$sql=mysql_query("SELECT*FROM products");
// count the output amount
$productCount=mysql_num_rows($sql);
if($productCount>0){
  while($row=mysql_fetch_array($sql)){
    $id=$row["id"];
    $product_name=$row["product_name"];
    $product_list="$id - $product_name &nbsp; &nbsp; &nbsp; <a type='button' class='btn btn-default' href=''>delete</a><br/>";
  }
} else {
  $product_list="You have no products listed in your store.";
}

?>

<!DOCTYPE html>
<html lang="en">
 <link rel="stylesheet" href="css/add.css">
    
    <hr class="divider">
      <div class="row">
        <div align="center">

        <div align="right" style="margin-right:32px;">
              </div>
              <a name="inventoryForm" id="inventoryForm"></a>
              <h3>Add New Store Item</h3>
              <div class="box">
              <div align="left" style="margin-left:50px;"id="mainWrapper">

              <form action="inventory_list.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post">    
       Product Name:<br /> 
       <br />
       <input name="product_name" type="text" id="product_name" size="64"/>
       <br />
       Product Price (£):<br />
       <br />
       <input name="price" type="text" id="price" size="12"/>
       <br />
       Category:<br />
       <br />
       <select name="category" id="category"/>
       <option placeholder="Please Choose"/>
       <option value="Xbox One">Xbox One</option>
       <option value="PS4">PS4</option>
       <option value="Xbox 360">Xbox 360</option>
       <option value="PS3">PS3</option>
       <option value="PC">PC</option>
       <option value="Nintendo Wii">Nintendo Wii</option>
       <option value="PSP">PSP</option>
       <option value="Nintendo DS">Nintendo DS</option>
     </br>
   </select>
   <br />

       Subcategory:<br />
       <br />
       <select name="subcategory" type="text" id="subcategory"/>
       <option placeholder="Please Choose"/>
       <option value="Game">Game</option>
       <option value="Console">Console</option>
       <option value="Accessory">Accessory</option>
     </br>
   </select>
    <br />
       Product Details:<br /> <br />
       <br />
       <textarea name="details" id="details" cols="64" rows="5"></textarea>
       <br />
       <br />
       Product Image:<br />
       <br />
       <input name="img_path" type="text" id="img_path" size="64"/>
       <br />
       Product Trailer Embed Link:</br>(Go to <a style="color:blue;" href="https://www.youtube.com/" target="_blank">YouTube</a>)<br />
       <br />
       <input name="trailer" type="text" id="trailer" size="64"/>
       <br />
       <input name="button" class="btn btn-default" type="submit" id="button" value="Add This Item Now"/>
        <p>

</form>
