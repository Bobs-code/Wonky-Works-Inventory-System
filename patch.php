<?php 
require_once 'users/init.php';
require_once $abs_us_root . $us_url_root . 'users/includes/template/prep.php';
// if (!hasPerm(2)) { //admin only
//    die("This page is for admins only");
// }

$db->query("CREATE TABLE item_list ( 
   id int(11) NOT NULL,
   item_name varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");

$db->query("ALTER TABLE item_list
  ADD PRIMARY KEY (id);
");

$db->query("ALTER TABLE item_list
  MODIFY id int(11) NOT NULL AUTO_INCREMENT;
COMMIT;");






?>

<div class="container">
   <h1>It ran successfully</h1>
</div>