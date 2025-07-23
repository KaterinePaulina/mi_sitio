<?php
//start session
session_start();

//load and initialize user class
include 'user.php';
$user = new user();

if(isset($_POST['forgotSubmit'])){
    //check whether email is empty
    if(!empty($_POST['email'])){
        //check whether user exists in the database
        $prevCon['where'] = array('email'=>$_POST['email']);
        $prevCon['return_type'] = 'count';
        $prevUser = $user->getRows($prevCon);
        if($prevUser > 0){
            //generat unique string
            $uniqidStr = (uniqid(mt_rand()));;
            
            //update data with forgot pass code
            $conditions = array(
                'email' => $_POST['email']
            );
            $data = array(
                'forgot_pass_identity' => $uniqidStr
            );
            $update = $user->update($data, $conditions);
            
            if($update){
                $resetPassLink = 'localhost/base de datos/resetPassword.php?fp_code='.$uniqidStr;
                
                //get user details
                $con['where'] = array('email'=>$_POST['email']);
                $con['return_type'] = 'single';
                $userDetails = $user->getRows($con);
                
                //send reset password email
                $to = $userDetails['email'];
                $subject = "Password Update Request";
                $mailContent = 'Dear '.$userDetails['first_name'].', 
                <br/>Recently a request was submitted to reset a password for your account. If this was a mistake, just ignore this email and nothing will happen.
                <br/>To reset your password, visit the following link: <a href="'.$resetPassLink.'">'.$resetPassLink.'</a>
                <br/><br/>Regards,
                <br/>CodexWorld';
                //set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                //additional headers
                $headers .= 'From:katerinecruzmartinez@gmail.com' . "\r\n";
                //send email
                mail($to,$subject,$mailContent,$headers);
                
                $sessData['status']['type'] = 'success';
                $sessData['status']['msg'] = 'Verifique su correo electrónico, hemos enviado un enlace de restablecimiento de contraseña a su correo electrónico registrado.';
            }else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'Ocurrió algún problema, inténtalo de nuevo.';
            }
        }else{
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'El correo electrónico dado no está asociado con ninguna cuenta.'; 
        }
        
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'Ingrese el correo electrónico para crear una nueva contraseña para su cuenta.'; 
    }
    //store reset password status into the session
    $_SESSION['sessData'] = $sessData;
    //redirect to the forgot pasword page
    header("Location:forgotPassword.php");
}elseif(isset($_POST['resetSubmit'])){
    $fp_code = '';
    if(!empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['fp_code'])){
        $fp_code = $_POST['fp_code'];
        //password and confirm password comparison
        if($_POST['password'] !== $_POST['confirm_password']){
            $sessData['status']['type'] = 'error';
            $sessData['status']['msg'] = 'Confirm password must match with the password.'; 
        }else{
            //check whether identity code exists in the database
            $prevCon['where'] = array('forgot_pass_identity' => $fp_code);
            $prevCon['return_type'] = 'single';
            $prevUser = $user->getRows($prevCon);
            if(!empty($prevUser)){
                //update data with new password
                $conditions = array(
                    'forgot_pass_identity' => $fp_code
                );
                $data = array(
                    'password' => ($_POST['password'])
                );
                $update = $user->update($data, $conditions);
                if($update){
                    $sessData['status']['type'] = 'success';
                    $sessData['status']['msg'] = 'Your account password has been reset successfully. Please login with your new password.';
                }else{
                    $sessData['status']['type'] = 'error';
                    $sessData['status']['msg'] = 'Some problem occurred, please try again.';
                }
            }else{
                $sessData['status']['type'] = 'error';
                $sessData['status']['msg'] = 'You does not authorized to reset new password of this account.';
            }
        }
    }else{
        $sessData['status']['type'] = 'error';
        $sessData['status']['msg'] = 'All fields are mandatory, please fill all the fields.'; 
    }
    //store reset password status into the session
    $_SESSION['sessData'] = $sessData;
    $redirectURL = ($sessData['status']['type'] == 'success')?'login.php':'resetPassword.php?fp_code='.$fp_code;
    //redirect to the login/reset pasword page
    header("Location:".$redirectURL);
}