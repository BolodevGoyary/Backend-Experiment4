<?php
include "db_connect.php";

$sql = "SELECT posts.id, posts.title, posts.content, posts.created_at, users.username AS author
        FROM posts
        JOIN users ON posts.author_id = users.id
        ORDER BY posts.created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
<h2>Posts</h2>
<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3>".$row['title']."</h3>";
        echo "<p>".$row['content']."</p>";
        echo "<small>By ".$row['author']." on ".$row['created_at']."</small><hr>";
    }
} else {
    echo "No posts available.";
}
?>
</body>
</html>