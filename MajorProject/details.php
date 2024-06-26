<?php
session_start();    
include ('./includes/db_connect.inc');
include ('./includes/header.inc');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hike Details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <!-- Contains the navigation bar with the logo integrated in the main menu -->
    <nav class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Main Logo">
        </div>
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="hikes.php">Hikes</a>
            <a href="add.php">Add</a>
            <a href="gallery.php">Gallery</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
        </div>
        <form id="form" action="search.php" method="GET" class="form-inline">
            <input type="search" id="query" name="q" placeholder="Search..." class="form-control mr-sm-2">
            <select id="level" name="level" class="form-control mr-sm-2">
                <option value="">All Levels</option>
                <option value="Easy">Easy</option>
                <option value="Moderate">Moderate</option>
                <option value="Difficult">Difficult</option>
                <!-- Add more options if needed -->
            </select>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </nav>
</header>

<main>
<?php
// Check if hikeid is set in the query string
if(isset($_GET['id'])) {
    // Sanitize the hikeid to prevent SQL injection
    $hikeid = mysqli_real_escape_string($conn, $_GET['id']);
    
    // Fetch hike details from the database based on hikeid
    $sql = "SELECT * FROM hikes WHERE hikeid = $hikeid";
    $result = mysqli_query($conn, $sql);

    // Check if the query executed successfully
    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Display hike details
        echo "<div class='hike-details'>";
        echo "<h2>" . htmlspecialchars($row['hikename']) . "</h2>";
        echo "<img src='images/" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['hikename']) . "'>";
        echo "<p><strong>Distance:</strong> " . htmlspecialchars($row['distance']) . " km</p>";
        echo "<p><strong>Level:</strong> " . htmlspecialchars($row['level']) . "</p>";
        echo "<p><strong>Location:</strong> " . htmlspecialchars($row['location']) . "</p>";

        // Check if user is logged in
        $is_logged_in = isset($_SESSION['user_id']);
        if ($is_logged_in) {
            echo "<a href='edit.php?id=$hikeid' class='btn btn-primary'>Edit</a>";
            echo "<button class='btn btn-danger' onclick='confirmDelete($hikeid)'>Delete</button>";
        }

        echo "</div>";
    } else {
        // Hike not found
        echo "<p>Hike not found.</p>";
    }
} else {
    // Hikeid not provided in the query string
    echo "<p>No hike selected.</p>";
}
?>
</main>

<?php
include('./includes/footer.inc');
?>

<script>
function confirmDelete(hikeId) {
    if (confirm("Are you sure you want to delete this hike?")) {
        window.location.href = "delete.php?id=" + hikeId;
    }
}
</script>
</body>
</html>
