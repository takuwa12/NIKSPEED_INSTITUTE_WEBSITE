<?php
    $username=$_POST['username'];
    $password = $_POST['password'];

    //database connection
    $con = new mysqli("localhost", "root","","speed");
    if($con->connect_error){
        die("failed to connect:" .$con->connect_error);
    }
    else{
        $stmt = $con-> prepare("select * from register where username= ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data =$stmt_result->fetch_assoc();
            if($data['password']===$password){
               // echo"<h2>Login success</h2>";
               header("Location: dash.html");
               exit();
            }else{
                //echo"<h2>invali username or password</h2>";
               // header("Location: Register.html");
               // exit();               
            }
        }else{
            //echo"<h2>invali username or password</h2>";
            header("Location: Register.html");
                exit();
        }
    }


?>