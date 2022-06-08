<?php
    //class properties
        $username;
        $password;
        $error;
        $success;
        $storage = "../../resources/users.json";
        $stored_users;
        var_dump($_POST);
        $userinput = $_POST['username'];
        $passinput = $_POST['password'];
         echo "$userinput";
         echo "$passinput";
    //class methods
    require_once "../employee.php";
        $stored_users = json_decode(file_get_contents($storage), true);

        // print_r($stored_users);

 
     
        foreach ($stored_users['users'] as $key => $value){
            echo $value["name"];
            $encPassword = $value['password'];
            echo "$encPassword";
            if ($value['name']== $userinput){
                echo "usercorrect";
                if(password_verify($passinput, $encPassword)){
                    echo "password correct";
                    session_start();
                    $_SESSION['name'] = $userinput;
                    header("location: ../dashboard.php"); 
                }else{
                    header("location:../../index.php");
                    $errPassMsg = "Wrong password";
                }
            }else{
                header("location:../../index.php");
                $errUserMsg= "Wrong username";
                            }
            }

    
   
if($_SERVER['REQUEST_METHOD']==='GET')
logout();

function logout(){
    session_start();
    unset($_SESSION);
    session_destroy();
    header("location:../../index.php");
}

