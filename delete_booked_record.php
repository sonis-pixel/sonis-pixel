<?php
$host="localhost"; //host name
$username="root"; //mysql username
$password="";//mysql password
$db_name="resturantdb";//Database name
$tbl_name="booking";//table name

//connects to your Database
mysql_connect("localhost","root","","resturantdb") or die(mysql_error());
mysql_select_db("resturantdb") or die(mysql_error());
// this code runs if the form has been submitted
if(isset($_POST['submit'])) {
$Table_no =$_POST['Table_no'];
//now we insert it into the database
$del ="DELETE FROM booking WHERE Table_no =$Table_no";
    $sql=mysql_query($del);
    if(mysql_query($del)== TRUE)
        echo "Delete record Successful";
    else
        echo "Delete Failed";
 ?>

<div id ="nav">
              
                <center><button onclick="window.location.href='delete_booked_record.php'"><span id="li3">Back</span></button></center>
                  <br>
            
            </div>
<?php
}
else
{
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

 <table border="0">

<h1><center><span>Delete</span> Booked Table Record</center></h1>
    <tr>
    <td><label>Table_no:</label></td>
    <td>   <input type ="text" name = "Table_no" size = "11"></td>
    </tr><br><br>
        <tr><td><input type ="submit" name="submit" value = "Delete record" />
     </td></tr></table>
 </form>
<div id ="nav">
              
                <center><button onclick="window.location.href='admin.html'"><span id="li3">Goto Admin Page</span></button></center>
                  <br>
            
            </div>


 <?php
 }
 ?> 