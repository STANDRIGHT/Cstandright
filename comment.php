<!-- include header -->
<?php include("include/header.php") ?>
<!-- include header -->

<?php
//MAKING AND CODING COMMENTS FOR EACH BLOG ITEMS IN TE BLOG-DETAILS PAGE


// creating Errors array 
$errors = array('forms' => "", 'Validemail' => "");

//persist data fro errors to enable correction
$email = $name = $phone = $site = $message = "";


if (isset($_POST["submit"])) {
    function val($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $blog_id = val($_POST["blog_id"]);
    $blog_category = val($_POST["blog_category"]);
    $email = val($_POST["email"]);
    $name = val($_POST["name"]);
    $message = val($_POST["message"]);


    if (empty($_POST["blog_id"]) || empty($_POST["blog_category"]) || empty($_POST["email"]) || empty($_POST["name"]) || empty($_POST["message"])) {
        $_SESSION["msg"]="<div style='color:red;'>Fieldset are empty</div>";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION["msg_mail"]="<div style='color:red;'>Email must be a valid email</div>";
        } else {
            $insert = $db->prepare("INSERT  INTO comments (blog_id, blog_category, com_uemail, com_uname, com_message) VALUES (?, ?, ?, ?, ?)");
            $insert->execute([
                $blog_id,
                $blog_category,
                $email,
                $name,
                $message,
            ]);

            echo '<script>window.location.href="blog-details.php?blog='.$_POST["blog_id"].'"</script>';

        }
    }
} else {
    echo "not submit not isset or  not ready to fire code";
    // die();
}

?>

<!-- include footer -->
<?php include("include/footer.php") ?>
<!-- include footer --