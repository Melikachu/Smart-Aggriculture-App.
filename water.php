<?php
$mysqli= new mysqli('localhost', 'root','','sensorsdata');
$sql_3 = '
SELECT water_level, 
UNIX_TIMESTAMP(CONCAT_WS(" ", date, time)) AS datetime 
FROM allv1
ORDER BY date DESC, time DESC LIMIT 1
';
$result_6 = $mysqli->query($sql_3);
while($row_6 = $result_6->fetch_assoc()) {
  echo $row_6['water_level'];
}
?>