<?php
session_start();
include_once "config.php";
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if(mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
}
// 检查数据库连接是否成功
if ($conn === null || !is_object($conn)) {
    die("Database connection failed: " . (isset($conn->connect_error) ? $conn->connect_error : "Unknown error"));
}
$fname = isset($_POST['fname']) ? trim($_POST['fname']) : '';
$lname = isset($_POST['lname']) ? trim($_POST['lname']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';
$old_password = isset($_POST['old_password']) ? trim($_POST['old_password']) : '';
$new_password = isset($_POST['new_password']) ? trim($_POST['new_password']) : '';


$state=0;
if(!empty($fname) && !empty($lname)&& !empty($old_password)&& !empty($email))//错误修改
{
    $state = 1;//邮箱或密码错误
    if ($email == $row['email'] && md5($old_password) == $row['password'])//邮箱或密码错误
    {
        $state = 2;//无修改
        $update_name_query = mysqli_query($conn, "UPDATE users SET fname = '{$fname}', lname = '{$lname}' WHERE email = '{$email}'");
        if (!empty($new_password) && !empty($password)) {
            $state = 3;//两个新密码不一样
            $md5_password = md5($new_password);
            if ($new_password == $password && $new_password != $old_password) {
                $update_pawd_query = mysqli_query($conn, "UPDATE users SET  password = '{$md5_password}' WHERE email = '{$email}'");
                $state = 4;//密码修改
            }
        }
        if (isset($_FILES['image'])) {
            header("Location:../users.php");
            $img_name = $_FILES['image']['name'];
            $img_type = $_FILES['image']['type'];
            $tmp_name = $_FILES['image']['tmp_name'];

            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);

            $extensions = ["jpeg", "png", "jpg"];
            if (in_array($img_ext, $extensions) === true) {
                $types = ["image/jpeg", "image/jpg", "image/png"];
                if (in_array($img_type, $types) === true) {
                    $time = time();
                    $new_img_name = $time . $img_name;
                    if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                        $file_path = "images/" . $row['img'];
                        if (file_exists($file_path)) {
                            if (unlink($file_path)) {
                                echo "File deleted successfully!";
                            }
                        }
                        $update_img_name_query = mysqli_query($conn, "UPDATE users SET  img = '{$new_img_name}' WHERE email = '{$email}'");

                        if ($state = 3) {
                                $state = 5;//头像修改，密码没有修改
                            } else {
                                $state = 6;//头像和密码都修改
                            }
                        }
                    }
                }
            }
        }
    }

header("Location:../changeinformation.php");
?>

//header("Location:../changeinformation.php");
