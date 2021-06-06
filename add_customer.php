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
//THIS MAKES SURE THEY DID NOT LEAVE ANY FIELDS BLANK
    
    // check if the username is in use
if(!get_magic_quotes_gpc()){
    $_POST['Name'] = addslashes($_POST['Name']);
    }
$namecheck = $_POST['cust_id'];
$check = mysql_query("SELECT cust_id FROM customer WHERE Name = '$namecheck'")
or die(mysql_error());
$check2 = mysql_num_rows($check);
// if the neme exists it gives an error
if ($check2 != 0){
    die('Sorry, the username'.$_POST['Name'].'is already in use');
}
//now we insert it into the database
$insert = "INSERT INTO customer VALUES ('".$_POST['cust_id']."', '".$_POST['Name']."' , '".$_POST['Age']."' , '".$_POST['Gender']."' , '".$_POST['Address']."' , '".$_POST['Contact_No']."')";
$Add_customer = mysql_query($insert);
 ?>
<h1>New Customer Added!</h1>
<div id ="nav">
              
                <center><button onclick="window.location.href='add_customer.php'"><span id="li3">Back</span></button></center>
                  <br>
            
            </div>
<?php
}
else
{
?>
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

 <table border="0">

<h1><center> Customer Registration Form</center></h1>
      <tr>
    <td><label>Cust_id</label></td>
    <td><input type ="text" name = "cust_id" size = "11"></td>
    </tr><br><br>
    <tr>
    <td><label>Name:</label></td>
    <td>   <input type ="text" name = "Name" size = "20"></td>
    </tr><br><br>
    <tr>
    <td><label>Age:</label></td>
    <td> <input type ="text" name = "Age" size = "11"></td>
    </tr><br><br>
     <tr>
    <td><label>Gender:</label></td>
    <td>   <input type ="text" name = "Gender" size = "10"></td>
    </tr><br><br>
      <tr>
    <td><label>Address:</label></td>
    <td>   <input type ="text" name = "Address" size = "30"></td>
    </tr><br><br>
    <tr>
    <td><label>Contact_No:</label></td>
    <td> <input type ="text" name = "Contact_No" size = "11"></td>
    </tr>
        <tr><td><input type ="submit" name="submit" value = "Add Customer" />
     </td></tr></table>
    
 </form>
<div id ="nav">
              
                <center><button onclick="window.location.href='admin.html'"><span id="li3">Goto Admin Page</span></button></center>
                  <br>
            
            </div>

 <?php
 }
 ?> 