?>
<html>
<head>
    <title>Authors List</title>
</head>
<body>
    <h2>Author Data from AWS Aurora MySQL</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Author_Name</th>
            <th>Email</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>{$row['id']}</td><td>{$row['author_name']}</td><td>{$row['email']}</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
<?php
$conn->close();
?>
