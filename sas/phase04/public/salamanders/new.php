<?php
require_once('../../private/initialize.php');

$page_title = 'Create Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

<h1>Create Salamander</h1>

<form action="<?php echo url_for('salamanders/create.php'); ?>" method="post">
  <label for="name">Name: </label><br>
  <input type="text" id="name" name="name" value=""><br><br>

  <label for="habitat">Habitat: </label><br>
  <textarea rows="4" cols="50" id="habitat" name="habitat" value=""></textarea><br><br>

  <label for="description">Description: </label><br>
  <textarea rows="4" cols="50" id="description" name="description" value=""></textarea><br><br>

  <input type="submit" value="Create Salamander">
</form>

<?php
include(SHARED_PATH . '/salamander-footer.php');
?>
