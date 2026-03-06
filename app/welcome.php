<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit();
}
?>

<h1>Monolith PHP Application</h1>

<h2>Welcome <?php echo $_SESSION["user"]; ?></h2>

<p>This is a DevOps Project - 1 demonstrating a simple monolithic PHP application.</p>

<p>Deployed using GitHub, AWS EC2, Docker and GitHub Actions CI/CD.</p>

<a href="logout.php">Logout</a>
