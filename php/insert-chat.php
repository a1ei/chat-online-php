<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            include_once "ini.php";
            $secret_key = SECRET_KEY;
            $cipher_method = 'aes-256-cbc';
            $iv_length = openssl_cipher_iv_length($cipher_method);
            $iv = openssl_random_pseudo_bytes($iv_length);
            $encrypted_message = openssl_encrypt($message, $cipher_method, $secret_key, 0, $iv);
            $iv = base64_encode($iv);
            $timestamp=date('Y-m-d H:i:s');
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, encrypted_message,iv,timestamp)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$encrypted_message}', '{$iv}','{$timestamp}')") or die();
        }
    }else{
        header("location: ../login.php");
    }


    
?>