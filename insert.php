<!DOCTYPE html>
<html>
<body>
   
<?php
define ("SERVERNAME", "fdb1034.awardspace.net");
define ("USERNAME", "4398985_mybase");
define ("PASSWORD", "28KochamPieski05");
define ("DBNAME", "4398985_mybase");
        
        $nazwa=$_POST["nazwa"];
        $stan_magazynowy=$_POST["stan_magazynowy"];
        $cena=$_POST["cena"];
        $wystepowanie=$_POST["występowanie"];
        
        // Create connection
        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
        // Check connection
        if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                }
        
        $sql = "INSERT INTO Rybny VALUES(NULL, '$nazwa', '$stan_magazynowy', '$cena','$wystepowanie')";
        
        if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
        
        mysqli_close($conn);
        ?>
        
        
</body>
</html>
