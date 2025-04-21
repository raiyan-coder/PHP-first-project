<!-- PHP Code Start -->
<?php 
    if (isset($_POST['btn'])) {
        $name  = $_POST['user_name'];
        $phone = $_POST['phone'];
        $age   = $_POST['age'];
        $dob   = $_POST['dob'];
    }
?>
<!-- PHP Code End -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your ID card</title>
    <!-- css file here -->
    <link rel="stylesheet" href="./assist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assist/css/style.css">
</head>
<body>
    
    <!-- Display ID Card -->
    <section class="bg-light rounded m-auto p-3 mt-5">
        <h5 class="text-center">ID Card</h5>
        <div class="d-flex justify-content-between">
            <div class="pic">
                <img src="assist/picture.jpg" alt="">
            </div>
            <div class="info">
                <pre>Name          : <?php if (isset($name)) echo $name; ?></pre>
                <pre>Phone No      : <?php if (isset($phone)) echo $phone; ?></pre>
                <pre>Age           : <?php if (isset($age)) echo $age; ?></pre>
                <pre>Date of Birth : <?php if (isset($dob)) echo $dob; ?></pre>
            </div>
        </div>
    </section>

    <!-- js file here -->
    <script src="./assist/css/bootstrap.bundle.min.js"></script>
</body>
</html>