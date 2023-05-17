

<?php
    session_start();
    
    $text1 = null;
    $text2 = null;
    $text3 = null;

	$username = null;	
	$password = null; 	

	if(isset($_POST['sign-up'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "wabbitnotes";
        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error())
        {
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
        }
        else
        {
            $sql = "INSERT INTO accounts (username, password)
            values ('$username','$password')";
            if ($conn->query($sql))
            {
                $_SESSION["userusername"] = $username;
                $_SESSION["userpassword"] = $password;

                $myfile = fopen("textfile1.txt", "w");
                $txt = "";
                fwrite($myfile, $txt);
                fclose($myfile);

                $myfile = fopen("textfile2.txt", "w");
                $txt ="";
                fwrite($myfile, $txt);
                fclose($myfile);

                $myfile = fopen("textfile3.txt", "w");
                $txt = "";
                fwrite($myfile, $txt);
                fclose($myfile);

                header("Location: notes.php"); 
            }   
            else
            {
                echo "Error: ". $sql ."
                ". $conn->error;
            }
            $conn->close();
        }
	}

    if(isset($_POST['log-in'])){
		$host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "wabbitnotes";
        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        $username = $_POST['username'];
		$password = $_POST['password'];

        $sql = "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if($count == 1)
        {
            $result = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '$username' AND password = '$password'");
            if (!$result) {
                exit;
            }
            $row = mysqli_fetch_row($result);

            $_SESSION["userusername"] = $username;
            $_SESSION["userpassword"] = $password;

            $myfile = fopen("textfile1.txt", "w");
            $txt = $row[3];
            fwrite($myfile, $txt);
            fclose($myfile);

            $myfile = fopen("textfile2.txt", "w");
            $txt = $row[4];
            fwrite($myfile, $txt);
            fclose($myfile);

            $myfile = fopen("textfile3.txt", "w");
            $txt = $row[5];
            fwrite($myfile, $txt);
            fclose($myfile);

            
            header("Location: notes.php"); 
        }
        else
        {
            echo '<script>alert("Invalid login.")</script>';
        }
	}

    if(isset($_POST['saveNote1']))
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "wabbitnotes";
        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

        $text1 = $_POST["textarea1"];
        $text2 = $_POST["textarea2"];
        $text3 = $_POST["textarea3"];

        $sql = mysqli_query($conn, "UPDATE accounts SET text1 = '$text1' WHERE username = '{$_SESSION['userusername']}' AND password = '{$_SESSION['userpassword']}'");
        $sql = mysqli_query($conn, "UPDATE accounts SET text2 = '$text2' WHERE username = '{$_SESSION['userusername']}' AND password = '{$_SESSION['userpassword']}'");
        $sql = mysqli_query($conn, "UPDATE accounts SET text3 = '$text3' WHERE username = '{$_SESSION['userusername']}' AND password = '{$_SESSION['userpassword']}'");

        $myfile = fopen("textfile1.txt", "w");
        $txt = $text1;
        fwrite($myfile, $txt);
        fclose($myfile);

        $myfile = fopen("textfile2.txt", "w");
        $txt = $text2;
        fwrite($myfile, $txt);
        fclose($myfile);

        $myfile = fopen("textfile3.txt", "w");
        $txt = $text3;
        fwrite($myfile, $txt);
        fclose($myfile);

        header("Location: notes.php"); 

    }
?>