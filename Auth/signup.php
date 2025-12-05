<?php
include 'database.php';

if(isset($_POST["submit"])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if($fullname != "" && $email != "" && $password != ""){
        $select_query = "SELECT * FROM users where email='$email";
        $select_query = $conn->query(query: $select_query);
        if($select_result->num_rows == 0){
            if($password == $confirmpassword){ //INSERT INTO USERS (COLUMNS NAME) VALUES ();
                $password = password_hash(password:$password, algo: PASSWORD_DEFAULT);
                $insert_query = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', 'email', 'password')";
                $insert_result = $conn->query(query: $insert_query);

                if($insert_result) {
                     header(header: "Location:signup.php?msg=Successfully registered");  
                }

            }else{
            header(header: "Location:signup.php?msg=both password should be same.");

            }

        }else{
            header(header: "Location:signup.php?msg=gmail_taken");
        }

    }else{
        header(header: "Location:signup.php?msg=empty_field");
    }
}

?>