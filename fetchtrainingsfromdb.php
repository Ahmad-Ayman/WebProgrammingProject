<?php  
session_start();
 include_once("connection.php"); 
 
//$userID = $_SESSION['UserID'];
$userID =1;



$sql_statemanet = "SELECT TargetID FROM User WHERE UserID ='".$userID."';";
$rec_select = mysqli_query($connection, $sql_statemanet);

if(! $rec_select )

{

die('Could not retrieve data: ' . mysqli_connect_error());

}
if(mysqli_num_rows($rec_select) ==1 ){

$row = mysqli_fetch_array( $rec_select );
    $userTarget = $row['TargetID'];
    
    $sql="SELECT * FROM Training join Training_Target on Training.TrainingID = Training_Target.TrainingID WHERE TargetID = ".$userTarget.";";
    $sql_res = mysqli_query($connection, $sql);
    if(!$sql_res){
        die('Could not retrieve data: ' . mysqli_connect_error());
    }
    if(mysqli_num_rows($sql_res) >=1){
        echo "<div class='row' style='margin-top: 20px;'>";
        while($roww = mysqli_fetch_array( $sql_res )) {
            
            
            
            echo "<div class='col-md-6 col-lg-4 col-sm-12 colo-xs-12'>";

$testLink = "https://www.nebulae-solutions.tech/webprogramming/images/TrainingsPics/".$roww['TrainingPic'];
echo "<div class='containerd'";
echo "style='background : url(\"".$testLink."\");'>";


echo "<div class='overlay'>";
echo "<div class='items'></div>";
echo "<div class='items head'>";
                // Print out the contents of each row into a table
 echo "<p>".$roww['TrainingTitle']."</p>";
    echo "<hr>";
    echo " </div>";
    echo " <div class='items price'>";
    echo "<p class='new'>".$roww['TrainingDescription']."</p>";
    echo "  </div>";
    echo " </div>";
 echo "</div>";
    echo "  </div>";
            
            
            
        }
    }
    
}
?>
