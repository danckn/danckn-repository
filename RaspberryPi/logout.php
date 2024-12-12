<?php
 
if(isset($_GET['edit_account'])){
 
    $user_session_name=$_SESSION['user_username'];
 
    $select_query="Select * from `user_table` where user_username='$user_session_name'";
 
    $result_query=mysqli_query($con,$select_query);
 
    $row_fetch=mysqli_fetch_assoc($result_query);
 
    $user_id=$row_fetch['user_id'];
 
    $user_username=$row_fetch['user_username'];
 
    $user_email=$row_fetch['user_email'];
}
 
    if(isset($_POST['user_update'])){
 
        $update_id=$user_id;
 
        $user_username=$_POST['user_username'];
 
        $user_email=$_POST['user_email'];

        // update query
 
        $update_data="update `user_table` set user_username='$user_username',user_email='$user_email' where user_id=$update_id";
 
        $result_query_update=mysqli_query($con,$update_data);
 
        if($result_query_update){
 
            echo "<script>alert('Data updated successfully')</script>";
 
            echo "<script>window.open('./logout.php','_self')</script>";
 
        }
 
}
 
 
?>

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit account</title>
<!-- bootstrap CSS File -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
<h3 class="text-success mb-4">Edit Account</h3>
<form action="" method="post" enctype="multipart/form-data">
<div class="form-outline mb-4">
<input type="text" class="form-control w-50 m-auto"  value="<?php echo  $user_username ?>" name="user_username">
</div>
<div class="form-outline mb-4">
<input type="email" class="form-control w-50 m-auto" name="user_email" value="<?php echo  $user_email ?>">
</div>
<input type="submit" value="Update" class="bg-info py-2 px-3 border-0" name="user_update">
</form>
</body>
</html>
 
 
 
<?php
 
session_start();
 
session_unset();
 
session_destroy();
 
echo "<script>window.open('./index.php','_self')</script>";
 
?>
 
 