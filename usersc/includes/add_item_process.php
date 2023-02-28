<?php
require_once '../../users/init.php';
require_once $abs_us_root . $us_url_root . 'users/includes/template/prep.php';
$errors = [];
$data = [];
dump($_POST);
if (empty($_POST['item_name'])) {
   $errors['item_name'] = 'Item is required.';
} elseif (is_bool($_POST['item_name']) || is_numeric($_POST['item_name'] )) {
   $errors['item_name'] = 'Item must be a string';
}

if (empty($_POST['item_category'])) {
    $errors['item_category'] = 'Category is required.';
}

if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);