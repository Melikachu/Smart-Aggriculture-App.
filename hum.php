<?php
$mysqli= new mysqli('localhost', 'root','','sensorsdata');
$sql = '
SELECT humidity, 
UNIX_TIMESTAMP(CONCAT_WS(" ", date, time)) AS datetime 
FROM allv1
ORDER BY date DESC, time DESC LIMIT 1
';
$result_4 = $mysqli->query($sql);
while($row_4 = $result_4->fetch_assoc()) {
  echo $row_4['humidity'];
}

?>

