<?php
 include_once("connection.php"); 
 

$sql_statemanet = "select * from Target";
 
$rec_select = mysqli_query($connection, $sql_statemanet);
 
if(! $rec_select )
 
{
 
  die('Could not retrieve data: ' . mysqli_connect_error());
 
}
 
//Displaying fetched records to HTML table
 
echo "<div class='row' style='margin-top: 20px;'>";


 
// Using mysql_fetch_array() to get the next row until end of table rows
 
while($row = mysqli_fetch_array( $rec_select )) {
 echo "<div class='col-md-6 col-lg-4 col-sm-12 colo-xs-12'>";

$testLink = "https://www.nebulae-solutions.tech/webprogramming/images/TargetPics/".$row['TargetPic'];
echo "<div class='containerd'";
echo "style='background : url(\"".$testLink."\");'>";


echo "<div class='overlay'>";
echo "<div class='items'></div>";
echo "<div class='items head'>";
                // Print out the contents of each row into a table
 echo "<p>".$row['TargetTitle']."</p>";
    echo "<hr>";
    echo " </div>";
    echo " <div class='items price'>";
    echo "<p class='new'>".$row['TargetDescription']."</p>";
    echo "  </div>";
    echo " </div>";
 echo "</div>";
    echo "  </div>";

}
 
 echo " </div>";
?>