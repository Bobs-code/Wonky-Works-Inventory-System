<?php

require_once 'users/init.php';
require_once $abs_us_root . $us_url_root . 'users/includes/template/prep.php';

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
   <div class="row text-center mt-5">
      <h3 class="text-lowercase">Details for </h3>
   </div>
   <div class="row w-50 mx-auto text-center">
      <h2 class="text-center">Item Name</h2>
      <div class="col-12 my-2">
         <div class="card bg-light mx-auto">
            <img class="w-50 card-img-top text-center mx-auto" src="https://via.placeholder.com/250" alt="Card image cap" style="object-fit: fill;">
            <div class="card-body">
               <h5 class="card-title">Item Category</h5>
               <p class="card-text">Item Description</p>
               <p>Item Quantity</p>
               <p>Date of last purchase</p>
               
            </div>
         </div>
      </div>
   </div>
   
</div>
</body>
</html>