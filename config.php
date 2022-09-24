<?php
 $mysqli = new mysqli("localhost", "root", "", "revtube");
 session_start();
 //DEBUG ONLY
 $sql = "SELECT COUNT(*) FROM users";
 $result = mysqli_query($mysqli, $sql);
 $usercount = mysqli_fetch_assoc($result)['COUNT(*)'];
 $sql2 = "SELECT COUNT(*) FROM videos";
 $result2 = mysqli_query($mysqli, $sql2);
 $videocount = mysqli_fetch_assoc($result2)['COUNT(*)'];
 $sql3 = "SELECT COUNT(*) FROM comments";
 $result3 = mysqli_query($mysqli, $sql3);
 $commentcount = mysqli_fetch_assoc($result3)['COUNT(*)'];
 $phpver = phpversion();
 echo "<center>DEBUG ONLY - Users: $usercount | Videos: $videocount | Comments: $commentcount | Running PHP $phpver </center>";
  //echo '<br>revtube is undergoing some changes please ignore any huge bugs as they most likely will be fixed soon after';
?>