<?php
define ("SERVERNAME", "fdb1034.awardspace.net");
define ("USERNAME", "4398985_mybase");
define ("PASSWORD", "28KochamPieski05");
define ("DBNAME", "4398985_mybase");
        
        // Create connection
        $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DBNAME);
        // Check connection
        if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT ID_Ryby, Nazwa, stan_magazynowy, cena, występowanie FROM Rybny";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                        echo "ID: " . $row["ID_Ryby"]. " - Nazwa: " . $row["Nazwa"]. " - Stan Magazynowy: " . $row["stan_magazynowy"]. " - Cena: " . $row["Cena"]. " - Występowanie: " . $row["występowanie"]. "<br>";
                }
                } else {
                echo "0 results";
                }
        
        mysqli_close($conn);
        ?>
