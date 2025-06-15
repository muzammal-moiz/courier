<?php
session_start();
require_once("database.php");
$db = db::open();
$datee = date("d-m-Y");
// all insertion code start
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query="SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $record = db::getRecord($query);
    if($record !=NULL) {
        $_SESSION['email'] = $_POST['email'];
        header('location:dashboard.php');
    } else {
        header('location:index.php');
    }
}
//update admin
if(isset($_POST['update_admin'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password =$_POST['password'];
    if($name == ""){
        $query="UPDATE `admin` SET `email`='$email',`password`='$password'";
        $r = db::query($query);
        echo "<script>location='profile.php?status=1'</script>";
    }else{
    $query="UPDATE `admin` SET `name`='$name',`email`='$email',`password`='$password'";
    $r = db::query($query);
     echo "<script>location='profile.php?status=1'</script>";
    }
}
//logout
if(isset($_GET['logout'])){
    unset($_SESSION['email']);
    session_destroy(); 
    echo "<script>location='index.php'</script>";
    exit(); 
}
// update_logo
if(isset($_POST['update_logo'])){
    $dcp=$db->real_escape_string($_POST['dcp']);
    $id=$db->real_escape_string($_POST['id']);

    if($_FILES['image']['name']==""){
        $query="UPDATE `logo` SET `dcp`='$dcp'";
        db::query($query);
    }
    else{
       $file = rand(1000,100000) . "-". $_FILES['image']['name'];
       $file_loc =$_FILES['image']['tmp_name'];
       $file_size=$_FILES['image']['size'];
       $file_type=$_FILES['image']['type'];
       $folder="uploads/";
       $new_file_name=strtolower($file);
       $final_file=str_replace('','-', $new_file_name);
       $move_image=move_uploaded_file($file_loc,$folder. $final_file);
       $query="UPDATE `logo` SET `image`='$final_file',`dcp`='$dcp'";
       db::query($query);
    }
    echo "<script>location='logo.php'</script>";
}
//add_banner
if (isset($_POST['add_banner'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `banner`( `heading`, `dcp`, `image`) VALUES ('$heading','$dcp','$final_file ')";
    db::query($query_insert);
    echo "<script>location='banner.php'</script>";
}
//update_banner
if (isset($_POST['update_banner'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id =($_POST['id']);
    
    if ($_FILES['image']['name'] == "") {
        $update_query = "UPDATE `banner` SET `heading`='$heading',`dcp`='$dcp' WHERE id ='$id'";
        db::query($update_query);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $update_query = "UPDATE `banner` SET `heading`='$heading',`dcp`='$dcp',`image`='$final_file' WHERE id ='$id'";
        db::query($update_query);
    }
    echo "<script>location='banner.php'</script>";
}


//delete_banner
if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    $delete_query ="DELETE FROM `banner` WHERE id='$id'";
    db::query($delete_query);
    echo "<script>location='banner.php'</script>";
}
//update_about
if(isset($_POST['update_about'])){
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id = $db->real_escape_string($_POST['id']);
    
    if ($_FILES['image']['name'] == "") {
        $update_query = "UPDATE `about` SET `heading`='$heading',`dcp`='$dcp' WHERE id ='$id'";
        db::query($update_query);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $update_query = "UPDATE `about` SET `heading`='$heading',`dcp`='$dcp',`image`='$final_file' WHERE id ='$id'";
        db::query($update_query);
    }
    echo "<script>location='about.php'</script>";
}

//add_service
if (isset($_POST['add_services'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `services`(`heading`, `dcp`, `image`) VALUES ('$heading','$dcp','$final_file')";
    db::query($query_insert);
    echo "<script>location='services.php'</script>";
}

//update_service
if (isset($_POST['update_service'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id=$db->real_escape_string($_POST['id']);
    
    if ($_FILES['image']['name'] == "") {
        $update_query = "UPDATE `services` SET`heading`='$heading',`dcp`='$dcp' WHERE id ='$id'";
        db::query($update_query);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE `services` SET`heading`='$heading',`dcp`='$dcp',`image`='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='services.php'</script>";
}


//delele_service
if (isset($_GET['delele_service'])) {
    $id = $_GET['delele_service'];
    $query_delete = "DELETE FROM `services` WHERE id='$id'";
    db::query($query_delete);
    echo "<script>location='services.php'</script>";
}

//add_case-study
if (isset($_POST['add_case-study'])) {
    $title = $db->real_escape_string($_POST['title']);
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `casestudy`(`title`, `heading`, `dcp`, `image`) VALUES ('$title','$heading','$dcp','$final_file')";
    db::query($query_insert);
    echo "<script>location='case-study.php'</script>";
}

//update_casestudy
if (isset($_POST['update_casestudy'])) {
    $title = $db->real_escape_string($_POST['title']);
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id=$db->real_escape_string($_POST['id']);
    
    if ($_FILES['image']['name'] == "") {
        $update_query = "UPDATE `casestudy` SET `title`='$title',`heading`='$heading',`dcp`='$dcp' WHERE id='$id'";
        db::query($update_query);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE `casestudy` SET `title`='$title',`heading`='$heading',`dcp`='$dcp',`image`='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='case-study.php'</script>";
}

//delete_case-study
if(isset($_GET['delete_id_casestudy'])){
    $id=$_GET['delete_id_casestudy'];
    $delete_query="DELETE FROM `casestudy` WHERE id ='$id'";
    db::query($delete_query);
    echo "<script>location='case-study.php'</script>";
}

//add_testimonails
if (isset($_POST['add_testimonails'])) {
    $designation = $db->real_escape_string($_POST['designation']);
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `testimonails`(`designation`, `heading`, `dcp`, `image`) VALUES ('$designation','$heading','$dcp','$final_file')";
    db::query($query_insert);
    echo "<script>location='testimonails.php'</script>";
}

//update_testimonails
if (isset($_POST['update_testimonails'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id=$db->real_escape_string($_POST['id']);

    if ($_FILES['image']['name'] == "") {
        $sql = "UPDATE `testimonails` SET `heading`='$heading',`dcp`='$dcp' WHERE id='$id'";
        db::query($sql);
    } else {
        $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
        $file_loc = $_FILES['image']['tmp_name'];
        $file_size = $_FILES['image']['size'];
        $file_type = $_FILES['image']['type'];
        $folder = "uploads/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
        $a = move_uploaded_file($file_loc, $folder . $final_file);
        $sql = "UPDATE `testimonails` SET `heading`='$heading',`dcp`='$dcp',`image`='$final_file' WHERE id='$id'";
        echo db::query($sql);
    }
    echo "<script>location='testimonails.php'</script>";
}


//del_testimonails
if (isset($_GET['del_testimonails'])) {
    $id = $_GET['del_testimonails'];
    $sql = "DELETE FROM `testimonails` WHERE id='$id'";
    db::query($sql);
    echo "<script>location='testimonails.php'</script>";
}

//add_logistic-process
if (isset($_POST['add_logistic_process'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $query_insert = "INSERT INTO `logistic_process`(`heading`, `dcp`) VALUES ('$heading','$dcp')";
    db::query($query_insert);
    echo "<script>location='Logistic-process.php'</script>";
}

//update_Logistic
if(isset($_POST['update_Logistic'])){
    $heading = $db->real_escape_string($_POST['heading']);
    $dcp = $db->real_escape_string($_POST['dcp']);
    $id = $db->real_escape_string($_POST['id']);
    $update_query="UPDATE `logistic_process` SET `heading`='$heading',`dcp`='$dcp' WHERE id='$id'";
    db::query($update_query);
    echo "<script>location='Logistic-process.php'</script>";
}

//delete_id_ls
if(isset($_GET['delete_id_ls'])){
    $id=$_GET['delete_id_ls'];
    $delete_query="DELETE FROM `logistic_process` WHERE id='$id'";
    db::query($delete_query);
    echo "<script>location='Logistic-process.php'</script>";
}

//add_our_team
if (isset($_POST['add_our_team'])) {
    $heading = $db->real_escape_string($_POST['heading']);
    $designation = $db->real_escape_string($_POST['designation']);

    $file = rand(1000, 100000) . "-" . $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $folder = "uploads/";
    $new_file_name = strtolower($file);
    $final_file = str_replace(' ', '-', $new_file_name);
    $a = move_uploaded_file($file_loc, $folder . $final_file);
    $query_insert = "INSERT INTO `team`(`heading`, `dcp`, `image`) VALUES ('$heading','$designation','$final_file ')";
    db::query($query_insert);
    echo "<script>location='our-team.php'</script>";
}

//update_our_team
if(isset($_POST['update_our_team'])){
    $heading=$db->real_escape_string($_POST['heading']);
    $designation=$db->real_escape_string($_POST['designation']);
    $id=$db->real_escape_string($_POST['id']);

    if($_FILES['image']['name']==""){
        $query="UPDATE `team` SET `heading`='$heading',`dcp`='$designation' WHERE id='$id'";
        db::query($query);
    }
    else{
       $file = rand(1000,100000) . "-". $_FILES['image']['name'];
       $file_loc =$_FILES['image']['tmp_name'];
       $file_size=$_FILES['image']['size'];
       $file_type=$_FILES['image']['type'];
       $folder="uploads/";
       $new_file_name=strtolower($file);
       $final_file=str_replace('','-', $new_file_name);
       $move_image=move_uploaded_file($file_loc,$folder. $final_file);
       $query="UPDATE `team` SET `heading`='$heading',`dcp`='$designation',`image`='$final_file' WHERE id='$id'";
       db::query($query);
    }
    echo "<script>location='our-team.php'</script>";
}


//delete_id_ot
if(isset($_GET['delete_id_ot'])){
    $id=$_GET['delete_id_ot'];
    $delete_query="DELETE FROM `team` WHERE id='$id'";
    db::query($delete_query);
    echo "<script>location='our-team.php'</script>";
}

//add_contact
// if (isset($_POST['btn'])) {
//     $fname = $db->real_escape_string($_POST['fname']);
//     $lname = $db->real_escape_string($_POST['lname']);
//     $email = $db->real_escape_string($_POST['email']);
//     $phone = $db->real_escape_string($_POST['phone']);
//     $Message = $db->real_escape_string($_POST['Message']);

//     $query_insert = "INSERT INTO `contact` (`fname`,`lname`,`email`,`phone`,`Message`) VALUES ('$fname','$lname','$email','$phone','$Message')";
//     db::query($query_insert);
//     echo "<script>location='../contact.php'</script>";
// }

// //del_contact
// if (isset($_GET['del_contact'])) {
//     $id = $_GET['del_contact'];
//     $sql = "DELETE FROM contact WHERE id='$id'";
//     db::query($sql);
//     echo "<script>location='contact.php'</script>";
// }

//delete_id_order
if(isset($_GET['delete_id_order'])){
    $id=$_GET['delete_id_order'];
    $delete_query="DELETE FROM `order` WHERE id='$id'";
    db::query($delete_query);
    echo "<script>location='order.php'</script>";
}


//delete_id_wallert
if(isset($_GET['delete_id_wallert'])){
    $id=$_GET['delete_id_wallert'];
    $delete_query="DELETE FROM `wallert` WHERE id='$id'";
    db::query($delete_query);
    echo "<script>location='Wallert.php'</script>";
}
?>