<?php
$mysqli= new mysqli('localhost', 'root','','sensorsdata');
$query = '
SELECT humidity, 
UNIX_TIMESTAMP(CONCAT_WS(" ", date, time)) AS datetime 
FROM allv1
ORDER BY date DESC, time DESC
';
$result = $mysqli->query($query);
$rows = array();
$line_chart_data = array();
$line_chart_data['cols'] = array(
    array(
        'label' => 'Date Time', 
        'type' => 'datetime'
    ),
    array(
        'label' => 'Humidity (g/m³)', 
        'type' => 'number'
    )
);
while($row = $result->fetch_array())
{
 $sub_array = array();
 $datetime = explode(".", $row["datetime"]);
 $sub_array[] =  array(
      "v" => 'Date(' . $datetime[0] . '000)'
     );
 $sub_array[] =  array(
      "v" => $row["humidity"]
     );
 $rows[] =  array(
     "c" => $sub_array
    );
}
$line_chart_data['rows'] = $rows;
$line_chart_data = json_encode($line_chart_data);


$query_2 = '
SELECT temperature, 
UNIX_TIMESTAMP(CONCAT_WS(" ", date, time)) AS datetime 
FROM allv1
ORDER BY date DESC, time DESC
';
$result_2 = $mysqli->query($query_2);
$rows = array();
$line_chart_2_data = array();
$line_chart_2_data['cols'] = array(
    array(
        'label' => 'Date Time', 
        'type' => 'datetime'
    ),
    array(
        'label' => 'Temperature (C°)', 
        'type' => 'number'
    )
);
while($row_2 = $result_2->fetch_array())
{
 $sub_array = array();
 $datetime = explode(".", $row_2["datetime"]);
 $sub_array[] =  array(
      "v" => 'Date(' . $datetime[0] . '000)'
     );
 $sub_array[] =  array(
      "v" => $row_2["temperature"]
     );
 $rows[] =  array(
     "c" => $sub_array
    );
}
$line_chart_2_data['rows'] = $rows;
$line_chart_2_data = json_encode($line_chart_2_data);


$query_3 = '
SELECT lux, 
UNIX_TIMESTAMP(CONCAT_WS(" ", date, time)) AS datetime 
FROM allv1
ORDER BY date DESC, time DESC
';
$result_3 = $mysqli->query($query_3);
$rows = array();
$chart_3_data = array();

$chart_3_data['cols'] = array(
    array(
        'label' => 'Date Time', 
        'type' => 'datetime'
    ),
    array(
        'label' => 'Lights', 
        'type' => 'number'
    )
);
while($row_3 = $result_3->fetch_array())
{
 $sub_array = array();
 $datetime = explode(".", $row_3["datetime"]);
 $sub_array[] =  array(
      "v" => 'Date(' . $datetime[0] . '000)'
     );
 $sub_array[] =  array(
      "v" => $row_3["lux"]
     );
 $rows[] =  array(
     "c" => $sub_array
    );
}
$chart_3_data['rows'] = $rows;
$chart_3_data = json_encode($chart_3_data);



$r = $mysqli->query('DELETE FROM allv1 WHERE ID < 3140');
$s= $mysqli -> affected_rows;

?>
