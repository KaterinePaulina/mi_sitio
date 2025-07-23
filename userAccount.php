<?php 
// Start session 
session_start(); 
 
// Load and initialize user class 
include 'user.php'; 
$user = new User(); 
 
$postData = $statusMsg = $valErr = ''; 
$status = 'error'; 
$redirectURL = 'login.php'; 
if(isset($_POST['signupSubmit'])){ 
    $redirectURL = 'registrar.php'; 
     
    // Get user's input 
    $postData = $_POST; 
    $first_name = trim($_POST['first_name']); 
    $last_name = trim($_POST['last_name']); 
    $email = trim($_POST['email']); 
    $phone = trim($_POST['phone']); 
    $password = trim($_POST['password']); 
    $confirm_password = trim($_POST['confirm_password']); 
     
    // Validate form fields 
    if(empty($first_name)){ 
        $valErr .= 'Por favor, introduzca su usuario.<br/>'; 
    } 
    if(empty($last_name)){ 
        $valErr .= 'Por favor ingrese su nombre.<br/>'; 
    } 
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){ 
        $valErr .= 'Por favor introduzca una dirección de correo electrónico válida
.<br/>'; 
    } 
    if(empty($phone)){ 
        $valErr .= 'Por favor ingrese su número de telefono.<br/>'; 
    } 
    if(empty($password)){ 
        $valErr .= 'Por favor, introduzca la contraseña de inicio de sesión.<br/>'; 
    } 
    if(empty($confirm_password)){ 
        $valErr .= 'Por favor, confirme su contraseña.<br/>'; 
    } 
    if($password !== $confirm_password){ 
        $valErr .= 'Confirmar contraseña debe coincidir con la contraseña.<br/>'; 
    } 
     
    // Check whether user inputs are empty 
    if(empty($valErr)){ 
        // Check whether the user already exists with the same email in the database 
        $prevCon['where'] = array( 
            'email'=>$_POST['email'] 
        ); 
        $prevCon['return_type'] = 'count'; 
        $prevUser = $user->getRows($prevCon); 
        if($prevUser > 0){ 
            $statusMsg = 'Correo electrónico ya registrado, utilice otro correo electrónico.'; 
        }else{ 
            // Insert user data in the database 
            $password_hash = ($password); 
            $userData = array( 
                'first_name' => $first_name, 
                'last_name' => $last_name, 
                'email' => $email, 
                'password' => $password_hash, 
                'phone' => $phone 
            ); 
            $insert = $user->insert($userData); 
                         if($insert){ 
                $status = 'success'; 
                $statusMsg = 'Su cuenta se ha registrado correctamente, inicie sesión en la cuenta.'; 
                $postData = ''; 
                $redirectURL = 'login.php'; 
            }else{ 
                $statusMsg = 'Algo salió mal, inténtalo de nuevo después de un tiempo.'; 
            } 
        } 
    }else{ 
        $statusMsg = '<p>Por favor llene todos los campos obligatorios:</p>'.trim($valErr, '<br/>'); 
    } 
     
    // Store registration status into the SESSION 
    $sessData['postData'] = $postData; 
    $sessData['status']['type'] = $status; 
    $sessData['status']['msg'] = $statusMsg; 
    $_SESSION['sessData'] = $sessData; 
     
    // Redirect to the home/registration page 
    header("Location: $redirectURL"); 
}elseif(isset($_POST['loginSubmit'])){ 
    // Get user's input 
    $postData = $_POST; 
    $email = trim($_POST['email']); 
    $password = trim($_POST['password']); 
     
    // Validate form fields 
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){ 
        $valErr .= 'Please enter a valid email.<br/>'; 
    } 
    if(empty($password)){ 
        $valErr .= 'Please enter your password.<br/>'; 
    } 
     
    // Check whether user inputs are empty 
    if(empty($valErr)){ 
        // Check whether the user account exists with active status in the database 
        $password_hash = ($password); 
        $conditions['where'] = array( 
            'email' => $email, 
            'password' => $password_hash, 
            'status' => 1 
        ); 
        $conditions['return_type'] = 'single'; 
        $userData = $user->getRows($conditions); 
         
        if(!empty($userData)){ 
            $status = 'success'; 
            $statusMsg = 'Bienvenidos '.$userData['first_name'].'!'; 
            $postData = ''; 
             
            $sessData['userLoggedIn'] = TRUE; 
            $sessData['userID'] = $userData['id']; 
        }else{ 
            $statusMsg = 'Correo electrónico o contraseña incorrectos, inténtalo de nuevo.!'; 
        } 
    }else{ 
        $statusMsg = '<p>Please fill all the mandatory fields:</p>'.trim($valErr, '<br/>'); 
    } 
     
    // Store login status into the SESSION 
    $sessData['postData'] = $postData; 
    $sessData['status']['type'] = $status; 
    $sessData['status']['msg'] = $statusMsg; 
    $_SESSION['sessData'] = $sessData; 
     
    // Redirect to the home page 
    header("Location: $redirectURL"); 
}elseif(!empty($_REQUEST['logoutSubmit'])){ 
    // Remove session data 
    unset($_SESSION['sessData']); 
    session_destroy(); 
     
    // Store logout status into the SESSION 
    $sessData['status']['type'] = 'success'; 
    $sessData['status']['msg'] = 'You have logout successfully!'; 
    $_SESSION['sessData'] = $sessData; 
     
    // Redirect to the home page 
    header("Location: $redirectURL"); 
}else{ 
    // Redirect to the home page 
    header("Location: $redirectURL"); 
} 