<?php

function find_all_salamanders() {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result, $sql);
    return $result;
}

function find_salamander_by_id($id) {
  global $db;
  $sql = "SELECT * FROM salamander ";
  $sql .= "WHERE id='" . $id . "'";
  //It is best practice to include single quotes around the variable primary key to prevent SQL injection even though SQL doesn't require it
  $result = mysqli_query($db, $sql);
  //mysqli_query will automatically add the semicolon at the end of the query
  confirm_result_set($result, $sql);

  $salamander = mysqli_fetch_assoc($result);
  mysqli_free_result($result);

  return $salamander;
  //returns assoc array
  }
