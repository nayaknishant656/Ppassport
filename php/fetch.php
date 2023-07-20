<?php include "db_conn.php";
session_start();
?>
<?php 
define('CSS_PATH', '../css/index.css');
if(isset($_POST['submit']))
{
$ph_id = $_POST['ph_number'];
$query = "SELECT * FROM phdow WHERE  phid='$ph_id' ";
$query_run = mysqli_query($conn, $query);
if ($row = mysqli_num_rows($query_run) > 0)
{
while( $row = mysqli_fetch_array($query_run)){
    $_SESSION['imgsrc']= $row['destination'];
    $watermark= $row['phid'];
    $name ="NawnitStudioPrints/";
    $downloadname = $name.$watermark;
    $_SESSION['donwloadbutton'] = "<div class='download_button'>
    <a href='{$row['destination']}'; download='$downloadname'><i class='fa fa-download'></i>Download Image</a><span></span>
</div>";
    header("Location: ../index.php?");
}
    $_SESSION['status'] = '<p style="text-align: center;font-size: 1.387rem; background: black; color:rgb(45 220 1); text-align:center;,font-weight: bold;,">SuccessFully Fetched</p>';
    header("Location: ../index.php?");
}
else{
    $_SESSION['status']= '<p style="text-align: center;font-size: 1.387rem;background: black;color:rgb(228, 0, 0);text-align:center;,font-weight: bold;,">Not Found !! I am Sorry</p>';
    header("Location: ../index.php?");
}    
}                            
?>




