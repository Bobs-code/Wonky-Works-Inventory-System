<?php
require_once 'users/init.php';
require_once $abs_us_root . $us_url_root . 'users/includes/template/prep.php';
// if (!securePage($_SERVER['PHP_SELF'])) {
//    die();
// }
$item = '';
$item_fields = [];

// ? Form Stuff for adding an item
if (!empty($_POST)) {
   
   if (!Token::check(Input::get('csrf'))) {
      include($abs_us_root . $us_url_root . 'usersc/scripts/token_error.php');
   }
   
   // ! Fields Array for the primary form to be inserted into the Database
   if (isset($_POST['new_item'])) {
            
      $item_fields = [
         'user_id' => $user->data()->id,
         'item_name' => Input::get("item_name"),
         // 'item_category' => Input::get("item_category"), 
         'quantity' => Input::get("item_quantity"),
         'unit' => Input::get("item_unit"),
         'price' => Input::get("item_price"),
         'description' => Input::get("item_description")
      ];
      
      if (Input::get("item_category") == ''){
         dnd("plsease select a category");
      } else {
         if (Input::get("item_category") == 'clay') {
            $item_fields['item_category'] = '1';
         } elseif (input::get("item_category") == 'glaze') {
            $item_fields['item_category'] = '2';
         } elseif (Input::get('item_category') == 'tools') {
            $item_fields['item_category'] = '3';
         } elseif(Input::get('item_category') == 'misc') {
            $item_fields['item_category'] = '4';
         } else {
            //
         }
      }
      
      // ? If the category is stored as numeric in the db, it needs to be retrieved as numeric from the DB and then displayed as text in the view
      // ? if the category is stored as text in the db, it can be retrieved from the db as text and automatically displayed in the view as text
   }
   // ! Insert statement for the fields array
   $db->insert('item_list', $item_fields);
}

// Do not forget to call results() at the end of a query if you hope to use the info in the array 
$item_inventory = $db->query("SELECT * FROM `item_list` WHERE `user_id` = ? ", [$user->data()->id])->results();
$userInventoryCount = $db->query("SELECT * FROM `item_list` WHERE `user_id` = ? ", [$user->data()->id])->count();



$category = $db->query("SELECT * from `item_categories`")->results();

define('PRIVATE_PATH', dirname(__FILE__));
define('PROJECT_PATH', dirname(PRIVATE_PATH));
define('PUBLIC_PATH', PROJECT_PATH . '/wonkyinv');
define('SHARED_PATH', PRIVATE_PATH . '/shared');

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/wonkyinv') + 9;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

function url_for($script_path){
   //add the leading '/' if not present
   if($script_path[0] != '/'){
      $script_path = "/" . $script_path;
   }
   return WWW_ROOT . $script_path;
}


?>
<!-- <div class="mx-4 my-5 row">
   <form action="" method="get">     
      <div class="col-12 col-sm-2 mt-3">
            <div class="form-group mb-5">
               <input type="submit" name="takeme" value="Go" class="btn btn-primary">
            </div>
         </div>
   </form>
   
</div> -->
<!-- Category Cards -->
<div class="row my-3 mx-auto">
   <h2 class="text-center">Inventory Categories</h2>
   <?php foreach($category as $c) { ?> 
   <div class="col-lg-3 col-sm-6 my-2">
      <div class="card bg-light">
         <img class="card-img-top" src="https://via.placeholder.com/250" alt="Card image cap" style="object-fit: contain;">
         <div class="card-body">
            
            <h5 class="card-title"><?= ucfirst($c->category_name); ?></h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href=<?= url_for('/item_view.php?id=' . $c->id) ?> class="btn btn-primary">View <?= ucfirst($c->category_name); ?></a>
         </div>
      </div>
   </div>
   <?php } ?>
   
</div>


<!-- // ? Add Item Form -->
<hr class="mx-4">
<div class="row mx-2">
   <h3 class="text-center my-5">Add to Inventory</h3>
   
   <form action="usersc\includes\add_item_process.php" method="POST">
   <input type="hidden" name="csrf" value="<?= Token::generate(); ?>">
      <div class="row">
         <div class="col-4">
            <label class="form-label" for="item_name"><span class="fw-bold">Name</span></label>
            <input type="text" class="form-control" id="item_name" placeholder="ex. Laguna White-Speckled Clay " name="item_name" aria-label="First name">
         </div>
         
         <div class="col-4">
            <label class="form-label" class="fw-bold" for="item_quantity"><span class="fw-bold">Quantity</span></label>
            <input type="text" class="form-control" placeholder="Item Quantity" name="item_quantity" aria-label="Item Quantity">
         </div>
         <div class="col-4 mt-2">
            <label class="form-label" for="item_unit"><span class="fw-bold">Unit</span></label>
            <input type="text" class="form-control" placeholder="ex. lbs., oz., cups" name="item_unit" aria-label="Item Unit">
         </div>
         <div class="col-4 mt-2">
            <label class="form-label" for="item_price"><span class="fw-bold">Price per unit</span></label>
            <input type="text" class="form-control" placeholder="Enter price without symbol" symbol" name="item_price" aria-label="Item price">
         </div>
         <div class="col-4">
            <label class="form-label" for="item_category"><span class="fw-bold">Item Category</span></label>
            <select id="inputState" name="item_category" id="item_category" class="form-select">
               <option value='' selected>Choose...</option>
               <option value="clay">Clay</option>
               <option value="glaze">Glazes</option>
               <option value="tools">Tools</option>
               <option value="misc">Miscellaneous</option>
            </select>
         </div>
         <div class="col-12 mt-2">
            <label class="form-label" for="item_description"><span class="fw-bold">Description</span></label>
            <input type="text" class="form-control" placeholder="Item Description" name="item_description" aria-label="Item description">
         </div>
      </div>
      <div class="col-12 col-sm-2 mt-3">
         <div class="form-group mb-5">
            <input type="submit" name="new_item" value="Save" class="btn btn-primary">
         </div>
      </div>
   </form>
</div>


<!-- // ? ITEM TABLE -->
<?php if ($userInventoryCount == 0){
   echo "<div style=\"display: none\" class=\"col-12 mt-5 mx-auto\">"; 
} else { 
   echo "<button class=\"btn btn-success\" id=\"show_table\">Show Table</button>";
   echo "<div class=\"col-12 mt-5 mx-auto\">"; 
} ?>
   <table class="table table-sm table-striped table-hover table-bordered border-secondary align-center">
      <thead class="mx-auto px-0 text-center table-light">
         <th scope="col">Item ID</th>
         <th scope="col">Name</th>
         <th scope="col">Cateogry</th>
         <th scope="col">Quantity</th>
         <th scope="col">Unit</th>
         <th scope="col">Price</th>
         <th scope="col">Description</th>
         <th scope="col">View</th>
         <th scope="col">Edit</th>
         <th scope="col">Delete</th>
      </thead>

      <?php foreach ($item_inventory as $v) { ?>
         <tr class="mx-0 px-0 table-primary">
            <td class="align-middle mx-0 px-0">
               <?= $v->id ?>
            </td>
            <td class="align-middle text-center mx-0 px-0">
               <?= $v->item_name ?>
            </td>
            <td class="align-middle text-center mx-0 px-0">
               <?php if ($v->item_category == 1) {
                  echo "Clay";
               }
               ?>
            </td>
            <td class="align-middle text-center mx-0 px-0">
               <?= $v->quantity ?>
            </td>
            <td class="align-middle text-center mx-0 px-0">
               <?= $v->unit ?>
            </td>
            <td class="align-middle text-center mx-0 px-0">
               <?= "$" . number_format($v->price, 2) ?>
            </td>
            <td class="align-middle text-center mx-0 px-0">
               <?= $v->description ?>
            </td>
            <td class="text-center px-0 mx-0 align-middle"><a href="https://google.com"><button class="btn btn-primary mx-0"><i class="fa fa-search" aria-hidden="true"></i></button></a></td>
            <td class="text-center px-0 mx-0 align-middle"><button class="btn btn-success mx-0"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td>
            <td class="text-center pt-1 px-0 align-middle"><button class="btn btn-danger"><i class="fa fa-trash my-0 mx-0" aria-hidden="true"></i></button>
            </td>
         </tr>
      <?php } ?>
   </table>
</div>
</div>

<?php
   require_once $abs_us_root . $us_url_root . 'usersc/includes/js/add_item_form.js';
   require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php';
   ?>