
<?php
session_start();
include "connect.php";

if (isset($_POST['submit']) && isset($_FILES['my_image']) && isset($_SESSION['email'])) {
    $email = $_SESSION['email']; // Get the logged-in user's email

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if ($error === 0) {
        if ($img_size > 52428800) {
            echo "Sorry, your file is too large.";
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into database
                $sql = "INSERT INTO image (email, upload) VALUES ('$email', '$new_img_name')";
                mysqli_query($conn, $sql);
                header("Location: profile.php");
            } else {
                echo "You can't upload files of this type.";
            }
        }
    } else {
        echo "An unknown error occurred!";
    }
} else {
    echo "You need to log in first!";
}
?>
