<?php
require_once 'users/init.php';
require_once $abs_us_root . $us_url_root . 'users/includes/template/prep.php';

// 

$item_id = $_GET['id'];
// $category_id = $db->query("SELECT * FROM `item_list` WHERE `category` = ?", [])->results();
if ($_GET['id'] == 1) {
   $inv_title = "Clay";
} elseif ($_GET['id'] == 2) {
   $inv_title = "Glaze";
} elseif ($_GET['id'] == 3) {
   $inv_title = "Tools";
} elseif ($_GET['id'] == 4) {
   $inv_title = "Miscellaneous";
}

$categoryView = $db->query("SELECT * FROM `item_categories` WHERE id = ?", [$item_id])->results();
$categoryInventoryView = $db->query("SELECT * FROM `item_list` WHERE `item_category` = ? and user_id = ?", [$item_id, $user->data()->id])->results();
$inventoryCountView = $db->query("SELECT * FROM `item_list` WHERE `item_category` = ? and user_id = ?", [$item_id, $user->data()->id])->count();


?>

<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>

<body>
   <div class="my-4 row">
      <h1><?= $inv_title ?> Inventory</h1>
   </div>
   <a class="my-2" href="/wonkyinv/home.php">Back Home</a><br >
   <?php if($inventoryCountView == 0) {
      echo "You currently do not have any items entered for this category. Either go back home and enter an item or make sure you are selecting a category on the Insert form.";
      echo "<div style=\"display: none\"class=\"row\">";
      } else { 
         echo "<div class=\"row\">";
         ?>
            <div class="row">
               <div class="col-12 mt-2 mx-auto">
                  <table class="table table-sm table-striped table-hover table-bordered border-secondary align-middle">
                     <thead class="table-light">
                        <th scope="col">Item ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Cateogry</th>
                        <th scope="col">Unit</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                     </thead>

                     <?php foreach ($categoryInventoryView as $v) { ?>
                        <tr class="table-warning">
                           <td>
                              <?= $v->id ?>
                           </td>
                           <td>
                              <?= $v->item_name ?>
                           </td>
                           <td>
                              <?= $v->quantity ?>
                           </td>
                           <td>
                              <?= $v->quantity ?>
                           </td>
                           <td>
                              <?= $v->description ?>
                           </td>
                           <td><a href="details.php"><button class="btn btn-primary">View</button></a></td>
                           <td><button class="btn btn-success">Edit</button></td>
                           <td><button class="btn btn-danger">Delete</button>
                           </td>
                        </tr>
                     <?php } ?>
                  </table>
            </div>
         </div>
         <?php } ?>
      </div>
      
      
      
   </body>

</html>