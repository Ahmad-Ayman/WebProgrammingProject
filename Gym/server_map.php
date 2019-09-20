<?php

 require 'connection.php';
 
// Start XML file, create parent node
$doc = domxml_new_doc("1.0");
$node = $doc->create_element("markers");
$parnode = $doc->append_child($node);



// Set the active MySQL database
$db_selected = mysqli_select_db($dbname, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysqli_connect_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM Gym WHERE 1";
$result = mysqli_query($query);
if (!$result) {
  die('Invalid query: ' .mysqli_connect_error());
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $doc->create_element("Gym");
  $newnode = $parnode->append_child($node);

  $newnode->set_attribute("GymID", $row['GymID']);
  $newnode->set_attribute("Name", $row['Name']);
  
  $newnode->set_attribute("Longitude", $row['Longitude']);
  $newnode->set_attribute("Latitude", $row['Latitude']);
  $newnode->set_attribute("Address", $row['Address']);
  $newnode->set_attribute("PhoneNumber", $row['PhoneNumber']);
}

$xmlfile = $doc->dump_mem();
echo $xmlfile;

