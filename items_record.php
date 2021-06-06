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
//THIS MAKES SURE THEY DID NOT LEAVE ANY FIELDS BLANK
    
    // check if the username is in use
if(!get_magic_quotes_gpc()){
    $_POST['Table_no'] = addslashes($_POST['Table_no']);
    }
$namecheck = $_POST['Table_no'];
$check = mysql_query("SELECT Table_no FROM booking WHERE Table_no = '$namecheck'")
or die(mysql_error());
$check2 = mysql_num_rows($check);
// if the neme exists it gives an error
if ($check2 != 0){
    die('Sorry, the Table_no'.$_POST['Table_no'].'is already in use');
    
}
//now we insert it into the database
$insert = "INSERT INTO booking VALUES ('".$_POST['Table_no']."' , '".$_POST['Food']."' , '".$_POST['Price']."')";
$Booking_Table = mysql_query($insert);
 ?>
<h1>New Record Added!</h1>
<div id ="nav">
              
                <center><button onclick="window.location.href='items_record.php'"><span id="li3">Back</span></button></center>
                  <br>
            
            </div>

<?php
}
else
{
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

 <table border="0">

<h1><center><span>Restaurant</span> Table Booking</center></h1>
      <tr>
    <td><label>Table_no</label></td>
    <td><input type ="text" name = "Table_no" size = "10"></td>
    </tr><br><br>
    <tr>
        <td><label>Food:</label></td>
    <td>   <input type ="text" name = "Food" size = "30"></td>
    </tr><br><br>
    <tr>
    <td><label>Price:</label></td>
    <td> <input type ="text" name = "Price" size = "30"></td>
    </tr><br><br>
    
        <tr><td><input type ="submit" name="submit" value = "Add Booking" />
     </td></tr></table>
    
 </form>
<div id ="nav">
              
                <center><button onclick="window.location.href='admin.html'"><span id="li3">Goto Admin Page</span></button></center>
                  <br>
            
            </div>

 <?php
 }
 ?> 