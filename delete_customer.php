<?php
$host="localhost"; //host name
$username="root"; //mysql username
$password="";//mysql password
$db_name="resturantdb";//Database name
$tbl_name="customer";//table name

//connects to your Database
mysql_connect("localhost","root","","resturantdb") or die(mysql_error());
mysql_select_db("resturantdb") or die(mysql_error());
// this code runs if the form has been submitted
if(isset($_POST['submit'])) {
$cust_id =$_POST['cust_id'];
//now we insert it into the database
$del ="DELETE FROM CUSTOMER WHERE cust_id =$cust_id";
    $sql=mysql_query($del);
    if(mysql_query($del)== TRUE)
        echo "Delete Record Successful";
    else
        echo "Delete Failed";
    
 ?>
 
<div id ="nav">
              
                <center><button onclick="window.location.href='delete_customer.php'"><span id="li3">Back</span></button></center>
                  <br>
            
            </div>
<?php
}
else
{
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

 <table border="0">

<h1><center><span>Delete</span> Customer Record</center></h1>
    <tr>
    <td><label>Cust_id:</label></td>
    <td>   <input type ="text" name = "cust_id" size = "11"></td>
    </tr><br><br>
        <tr><td><input type ="submit" name="submit" value = "Delete Customer" />
     </td></tr></table>
 </form>
<div id ="nav">
              
                <center><button onclick="window.location.href='admin.html'"><span id="li3">Goto Admin Page</span></button></center>
    <br>
         <br>
              <center><button onclick="window.location.href='resturant.html'"><span id="li3">Goto Login Page</span></button></center>
                  <br>
            
            </div>


 <?php
 }
 ?> 