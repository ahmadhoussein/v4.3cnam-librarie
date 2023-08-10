<?php
include'./connect.php';
include'./functions.php';
include'./displayBook.php';

if (isset($_GET['idBook'])) {

  $comment = $_GET['comment'];
  $idBook = $_GET['idBook'];


  $insertQuery = "INSERT INTO comments (comment, idbook) VALUES ('$comment', '$idbook')";

  $result = mysqli_query($connect, $insertQuery);

  if ($result) {
    echo "Comment added successfully.";
  } else {
    echo "Error: " . mysqli_error($connection);
  }
}



?>