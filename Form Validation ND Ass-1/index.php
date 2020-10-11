<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Data Form
    </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    
    </head>
    <body>
        
        <table>        <tr>
            <td>
        <h1>Data Form</h1>
       
        <div id="container">
            <div class="input">Name <input id="name"type="text"placeholder="Name"/></div>
            <div class="input">City <input id="city"type="text" placeholder="Asia"/></div>
        
            <div class="input"> Occupation<input id="occupation"type="text" placeholder="Developer"/></div>
            
            <div id="button">
            <button id="button">Submit</button>
            </div>
            <h1> Result Data</h1>
        </div>
        <table id="display">
        <tr>
            <th>Name</th>
            <th>City</th>
            <th>Occupation</th>
            
            </tr>
        
        
        
        </table>
        <script src="script.js"></script>
            </td>
            </tr>
        </table>
        
    </body>

</html>


<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("test) or die (mysql_error());
if(isset($_POST['submit]))
{
$name =$_POST['name'];
$city=$_POST['city];
$occupation=$_POST['occupation];
}
$query="insert into formdata (name,city,occupation) values('$name','$city','$occupation')";
if(mysql_query($query)) {
echo "You are registered Succesful Thank you!"
}
?>
