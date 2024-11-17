<?php  
include('../includes/connect.php');
if (isset($_POST['insert_cat'])) {
    $category_title = $_POST['cat_title'];

    // Handle image upload
    $category_image = $_FILES['category_image']['name'];
    $temp_image = $_FILES['category_image']['tmp_name'];

    // Select data from database
    $select_query = "SELECT * FROM `categories` WHERE category_title='$category_title'";
    $result_select = mysqli_query($con, $select_query);
    $number = mysqli_num_rows($result_select);

    if ($number > 0) {
        echo "<script>alert('This category is already present in the database')</script>";
    } else {
        // Move the uploaded image to the designated folder
        if (move_uploaded_file($temp_image, "./admin_area/category_images/$category_image")) {
            // Insert category with image path
            $insert_query = "INSERT INTO `categories` (category_title, category_image) VALUES ('$category_title', '$category_image')";
            $result = mysqli_query($con, $insert_query);
            if ($result) {
                echo "<script>alert('Category has been inserted successfully')</script>";
            } else {
                echo "<script>alert('Error inserting category')</script>";
            }
        } else {
            echo "<script>alert('Failed to upload image')</script>";
        }
    }
}
?>

<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" enctype="multipart/form-data" class="mb-2">
  <div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="cat_title" placeholder="Insert categories" aria-label="Categories" aria-describedby="basic-addon1" required>
  </div>
  
  <div class="form-outline mb-4 w-50 m-auto">
    <label for="category_image" class="form-label">Category image</label>
    <input type="file" name="category_image" id="category_image" class="form-control" required="required">
  </div>

  <input type="submit" class="bg-info border-0 p-2 my-3" name="insert_cat" value="Insert Categories">
</form>