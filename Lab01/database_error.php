<!DOCTYPE html>
<html>
<!-- the head section -->

<head>
    <title>My Laptop Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<!-- the body section -->

<body>
    <header>
        <h1>My Laptop Shop</h1>
    </header>
    <main>
        <h1>Database Error</h1>
        <p>There was an error connecting to the database.</p>
        <p>Error message: <?php echo $error_message; ?></p>
        <p>&nbsp;</p>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Laptop Shop.</p>
    </footer>
</body>

</html>