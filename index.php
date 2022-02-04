<?php
print_r($_GET);
$firstname = $_GET['first'];
$lastname = $_GET['last'];
echo $firstname;
echo $lastname;
echo htmlspecialchars($_GET['first']); //helps to stop attacks from XSS
echo $lastname;
$firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING); //sanitize the script
$lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
if (!empty($firstname) && !empty($lastname)) {
    echo $firstname;
    echo $lastname;
} else {
    echo "data unavailable";
}

if (isset($_GET['first']) && isset($_GET['last'])) {
    $firstname = $_GET['first'];
    $lastname = $_GET['last'];
    if (!empty($firstname) && !empty($lastname)) {
        echo htmlspecialchars($firstname);
        echo htmlspecialchars($lastname);
    } else {
        echo "data unavailable";
    }
} else {
    echo "unknown";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Data</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/styles.css">
</head>
    
</head>

<body>
    <h1>Web Forms Processor</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div>
        <label for="first">First Name :</label>
        <input type="text" id="first" name="first" autocomplete="off">
    </div>
    <div>
        <label for="last">Last Name :</label>
        <input type="text" id="last" name="last" autocomplete="off">
    </div>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
<footer class="footer">
    <div class="two-toned-footer-color"></div>
    <p class="text-muted text-muted-footer text-center"> &copy; Copyright 2021 Lance Page | Full Stack Web Developer
    </p>
    </footer>
</html>