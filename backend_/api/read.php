<?php
/**
 * Returns the list of policies.
 */
require 'database.php';

$project= [];
$sql = "SELECT * FROM stplusc1_myapp.projtable";

if($result = mysqli_query($con,$sql))
{
  $i = 0;
  while($row = mysqli_fetch_assoc($result))
  {
    $project[$i]['id']    = $row['id'];
    $project[$i]['number'] = $row['number'];
    $project[$i]['amount'] = $row['amount'];
    $i++;
  }

  echo json_encode($project);
}
else
{
  http_response_code(404);
}

?>