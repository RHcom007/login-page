<?php 
// =====================================
//  Created By : M. Radja Herlangga     
// =====================================
if (isset($_POST['submit'])) {
    $database = "dataweb";
    $mysql = new mysqli('localhost','root','',$database);
    $stmt = $mysql->prepare('SELECT * FROM `user` WHERE email=? AND password=?;');
    $stmt->bind_param('ss',$email,$password);
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows == 1){
        session_start();
        $f = $result->fetch_assoc();
        $_SESSION['username'] = $f['username'];  
        if(isset($_POST['remember'])){
            setcookie("user_token", $f['token_user'], time() + (86400 * 30), "/");
        }
        header('Location: .?success=true');
    }else {
        header('Location: .?success=false');
    }
} else {
    header('Location: .');
}
?>