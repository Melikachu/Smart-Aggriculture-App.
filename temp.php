<?php
$mysqli= new mysqli('localhost', 'root','','sensorsdata');
$sql_2 = '
SELECT temperature, 
UNIX_TIMESTAMP(CONCAT_WS(" ", date, time)) AS datetime 
FROM allv1
ORDER BY date DESC, time DESC LIMIT 1
';
$result_5 = $mysqli->query($sql_2);
while($row_5 = $result_5->fetch_assoc()) {
  echo $row_5['temperature'];
}
?>