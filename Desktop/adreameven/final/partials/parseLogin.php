<?php
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

if(isset($_POST['loginBtn'], $_POST['token'])){
    
        //validate the token
        if(validate_token($_POST['token'])) {
            //process the form
            //array to hold errors
            $form_errors = array();

            //validate
            $required_fields = array('username', 'password');
            $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

            if(empty($form_errors)){
                //collect form data
                $user = $_POST['username'];
                $password = $_POST['password'];

                isset($_POST['remember']) ? $remember = $_POST['remember'] : $remember = "";

                //check if user exist in the database
                $sqlQuery = "SELECT * FROM users WHERE username = :username";
                $statement = $db->prepare($sqlQuery);
                $statement->execute(array(':username' => $user));

                if($row = $statement->fetch()){
                    $id = $row['id'];
                    $hashed_password = $row['password'];
                    $username = $row['username'];
                    $activated = $row['activated'];

                    if($activated === "0"){

                        if (checkDuplicateEntries('trash', 'user_id', $id, $db)){
                            //activated the account
                            $db->exec("UPDATE users SET activated = '1' WHERE id = $id LIMIT 1");

                            //remove info from trash table
                            $db->exec("DELETE FROM trash WHERE user_id = $id LIMIT 1");

                            //login the user
                            prepLogin($id, $username, $remember);
                        }else{
                            $result = flashMessage("Please activate your account");
                        }
                    }else{
                        if(password_verify($password, $hashed_password)){
                            prepLogin($id, $username, $remember);
                        }else{
                            $result = flashMessage("You have entered an invalid password");
                        }
                    }
                }else{
                    $result = flashMessage("You have entered an invalid username");
                }
            }else{
                if(count($form_errors) == 1){
                    $result = flashMessage("There was one error in the form ");
                }else{
                    $result = flashMessage("There were " .count($form_errors). " error in the form");
                }
            }
        }else{
            //throw an error
            $result = "<script type='text/javascript'>
                      swal('Error','This request originates from an unknown source, posible attack'
                      ,'error');
                      </script>";
        }

}