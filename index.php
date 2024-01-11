<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

<body>
    <h3>Sign Up </h3>

    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwp" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>Signup</button>
    </form>

    <h3>Change account</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwp" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>Update</button>
    </form>

    <h3>Delete account</h3>

    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwp" placeholder="Password">
        <button>Delete</button>
    </form>
</body>

</html>