<?php
$query = "show columns from wine";

//produce HTML headers
echo "<html><head><title>Wines</title></head>\n>";

// 1. Open database connection
$dbconn = mysql_connect('yallara.cs.rmit.edu.au:54045', 'winestore', 'pwinny12');
mysql_select_db("winestore", $dbconn);

//2. Run the query through connection
$result = mysql_query($query, $dbconn);

/*
echo gettype($result) . "<br/>\n";
echo get_resource_type($result) ."<br/>\n";
*/

//Start HTML body and output text
echo "<body><pre>/n";

//3. While there are rows in result
while($row = mysql_fetch_row($result)) {
   
   //print each attribute
   for($i = 0; $i < mysql_num_fields($result); $i++) {
      echo $row[$i] . " ";
   }
   //Print newline
   echo "\n";
}

//Finish up
echo "</pre></body></html>";

//5. close dbconn
mysql_close($dbconn);

?>
