<?php require_once('../../private/initialize.php');

$id = $_GET['id'] ?? '1'; // PHP > 7.0

$salamander = find_salamander_by_id($id);

$page_title = 'View Salamander';
include(SHARED_PATH . '/salamander-header.php');
?>

<h1>Salamander Details</h1>


<p><span class="bold">ID: </span> <?= h($id); ?> </p>
<p><span class="bold">Name: </span> <?= h($salamander['name']); ?> </p>
<p><span class="bold">Habitat: </span><br>
  <?= h($salamander['habitat']); ?> </p>
<p><span class="bold">Description: </span><br>
  <?= h($salamander['description']); ?> </p>

<a href="<?= url_for('salamanders/index.php'); ?>">&laquo; Back to Salamanders List</a>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
