<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php
    echo "I'm Here" .'<br>';
    echo "wanattapong" .'<br>';

    
    $servername = "mariadb";
    $username = "root";
    $password = "admin";
    $dbname = "sms_herbarium_db";
    $port = "3306";

    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $sql = "SELECT * FROM auth_user";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        echo "<br>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);

    // try {
    //     $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connected succesfully";
    // } catch (PDOException $e) {
    //     echo "Connection failed: " . $e->getMessage();
    // }
    ?>
</body>

</html>