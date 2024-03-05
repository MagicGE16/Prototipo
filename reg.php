<?php

/*
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";
*/

if (isset($_POST['submit_btn'])) {
    $username = $_POST['name'];
    $password = $_POST['pwd'];
    $text = $username . " " . $password . "\n";
    $fp = fopen('/home/magic/Documenti/LabUni/SAW/', 'a+');

    if (!preg_match('/^[a-zA-Z_]+$/', $username)) {
        echo "Only letters and _ are allowed for username";
        fclose($fp);
        return;
    }
    else if (!preg_match('/^[a-zA-Z0-9&$@]+$/', $password)) {
        echo "Puntuation characters are not allowed";
        fclose($fp);
        return;
    }
    else
    {   
            if (fwrite($fp, $text)) {
                echo 'saved';
            }
            fclose($fp);

            /*
            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: ". $conn->connect_error);
            }

            $sqlquery = "INSERT INTO table VALUES ($username, $password)";

            if ($conn->query($sql) === TRUE) {
                echo "dato inserito";
            } 
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            */
        }
    }
?>