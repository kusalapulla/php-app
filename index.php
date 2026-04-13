<!DOCTYPE html>
<html>
<head>
    <title>My DevOps App</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
        }
        header {
            background: #333;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            background: #555;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 10px;
            text-decoration: none;
        }
        .content {
            padding: 20px;
        }
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

<header>
    <h1>🚀 DevOps Demo App</h1>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
</nav>

<div class="content">
    <h2>Welcome!</h2>
    <p>This app is deployed using Jenkins.For Kushal</p>

    <h3>Version:</h3>
    <p>
        <?php echo "Version 2"; ?>
    </p>
</div>

<footer>
    <p>© 2026 My DevOps Project</p>
</footer>

</body>
</html>