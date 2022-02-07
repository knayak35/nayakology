<!DOCTYPE html>
<html>

<body>

    <form action="login.php" method="post">

        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>Username</label>
        <input type="text" placeholder="username" name="uname">

        <label>Password</label>
        <input type="password" placeholder="password" name="password">

	    <a href="home.php"><button type="submit">Login</button></a>

    </form>

</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Arimo&family=Inter:wght@300;400&family=Josefin+Sans&family=Mada&family=Merriweather:ital,wght@0,400;1,300&family=Open+Sans:wght@300&family=Outfit&family=Poppins&family=Prompt&family=Sintony&family=Source+Sans+Pro&family=Varela+Round&display=swap');

    * {
        margin: 0%;
        padding: 0%;

    }
</style>
