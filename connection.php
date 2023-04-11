<?php
    $servername = "localhost";
    $username = "sepp6373_pl";
    $pwuser = "ChiCharito123";
    $database = "sepp6373_pl";
    
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $brand = $_POST['brand'];
    $package = $_POST['package'];
    $message = $_POST['message'];

    // Database Connection
    $conn = new mysqli($servername, $username, $pwuser, $database);
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into test(name, tel, brand, package, message) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sisss", $name, $tel, $brand, $package, $message);
        $stmt->execute();
        echo '<meta http-equiv="refresh" content="0;url=https://drive.google.com/file/d/1Xkvn7ixX7U5qJAPGMzO2Fs1phGDJzGF2/view" />';
        echo '<script type="text/javascript">
       window.onload = function () { alert("We Connected"); } 
</script>';
        $stmt->close();
        $conn->close();
    }
?>