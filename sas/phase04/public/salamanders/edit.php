<?php

require_once('../../private/initialize.php');
include(SHARED_PATH . '/salamander-header.php'); 

echo "<h1>Edit Salamander</h1>";
if(!isset($_GET['id'])) {
  redirect_to(url_for('salamanders/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {
  //Handles form values sent by new.php

  $salamander = [];
  $salamander['id'] = $id;
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';
 
  $result = update_salamander($salamander);
  redirect_to(url_for('salamanders/show.php?id=' . $id));
  
} else {
  $salamander = find_salamander_by_id($id);
}
?>

<form action="<?php echo url_for('salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
  <label for="name">Name: </label><br>
  <input type="text" id="name" name="name" value="<?php echo h($salamander['name']); ?>"><br><br>

  <label for="habitat">Habitat: </label><br>
  <textarea rows="4" cols="50" id="habitat" name="habitat"><?php echo h($salamander['habitat']); ?>"</textarea><br><br>

  <label for="description">Description: </label><br>
  <textarea rows="4" cols="50" id="description" name="description"><?php echo h($salamander['description']); ?>"</textarea><br><br>

  <input type="submit" value="Edit Salamander">
</form>

<?php
include(SHARED_PATH . '/salamander-footer.php'); ?>
