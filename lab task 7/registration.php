

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="home">
<div class="container" id="main">
<!--  Logo  -->
    <h1>
      <br/> E-commerce site
    </h1>

<!--  form  -->
    <div class="row navigation">
        <div class="column column-60 column-offset-20">
            <div class="formaction">
                <!-- path (index.php, registration.php) -->
                <a href="index.php" id="login">Login</a> | <a href="registration.php" id="register">Register Account</a>
            </div>
            <div class="formc">
                <form id="form01" method="post">
                    <h3>Registration</h3>
                    <fieldset>
                        <label for="name">Name</label>
                        <input type="text" placeholder="Full Name" id="name" name="name" >
                        <label for="email">Email </label>
                        <input type="text" placeholder="Email Address" id="email" name="email" >
                        <label for="password">Password </label>
                        <input type="password" placeholder="Password" id="password" name="password">
                        <label for="address">Address </label>
                        <input type="text" placeholder="address" id="address" name="address" >
                        <label for="phone">Phone </label>
                        <input type="text" placeholder="phone" id="phone" name="phone" >
                        <input class="button-primary" type="submit" value="Submit">
                        <input type="hidden" name="action" id="action" value="login">
                        

                    </fieldset>

                </form>
            </div>
        </div>

    </div>
</div>
</body>
</html>
