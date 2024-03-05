<?php

if (isset($_POST['submit_btn'])) {

        $userN = $_POST['name'];
        $passW = $_POST['pwd'];
        $userlist = file('test.txt');

        $success = false;
        foreach ($userlist as $user) {
                $user_details = explode(' ', $user);
                if ($user_details[0] == $userN && $user_details[1] == $passW) {
                        $success = true;
                        break;
                }
        }

        if ($success) {
                echo "<br> Ciao $userN. <br>";
        } else {
                echo "<br> Password o Utente sbagliati. Riprova. <br>";
        }
}

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli("localhost", "username", "password", "nome_del_tuo_database");

        if ($conn->connect_error) {
                die("Errore di connessione al database: " . $conn->connect_error);
        }

        $name = mysqli_real_escape_string($conn, $_POST["name"]);
        $pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);

        $query = "SELECT id, password FROM utenti WHERE email = '$email'";
        $result = $conn->query($query);

        if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();

                if (password_verify($password, $row["pwd"])) {
                        header("Location: welcome.html");
                } else {
                        echo "Password errata.";
                }
        } else {
                echo "Utente non trovato.";
        }

        $conn->close();
        
}*/
?>