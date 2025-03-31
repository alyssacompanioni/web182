<?php
require_once('../../private/initialize.php');

$page_title = 'Create Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

<h1>Create Salamander</h1>

<form action="create.php" method="post">
  <label for="name">Name: </label><br>
  <input type="text" id="name" value=""><br><br>

  <label for="habitat">Habitat: </label><br>
  <textarea rows="4" cols="50" id="habitat" value=""></textarea><br><br>

  <label for="description">Description: </label><br>
  <textarea rows="4" cols="50" id="habitat" value=""></textarea><br><br>

  <button type="submit">Create Salamander</button>
</form>

<?php
include(SHARED_PATH . '/salamander-footer.php');
?>
