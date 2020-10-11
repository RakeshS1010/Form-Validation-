<html>
<a href="index.html">
    </a>
</html>

<?php
$name =$_POST['name'];
$city= $_POST['city'];
$occupation=$_POST['occupation'];

if(!empty($name)||!empty($city) || ($occupation)) {
    $host="localhost";
    $dbUsername="test";
    $dbPaswword="";
    $dbName="test";
     $conn=new mysqli($host,$dbUsername,$dbPassword,$dbName);
    if(mysqli_connect_error()) {
        die('Connect Error()'.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else {
        $SELECT ="SELECT * from formdata where name=? Limit 1";
        $INSERT ="INSERT into dbdata(name,city,occupation) values(?,?,?) ";
        
        $stmt=$conn->$prepare($SELECT);
        $stmt->bind_param("$",$name);
        $stmt->execute();
        $stmt->bind_result($name);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        
        if($rnum==0) {
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ssssii",$name,$city,$occupation);
            $stmt->excute();
            echo "New record inserted succefully";
        }
        else {
            echo "someon ealredy there in datta";
        }
    }
    else {
        echo "All field are required";
        die();
        
    }
}
?>