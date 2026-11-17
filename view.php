<?php
// Step 1: Connect to the database
$conn = new mysqli("localhost", "root", "", "sampledb2");

// Step 2: Check database connection
if ($conn->connect_error) {
    die("Connection failed");
}

// Step 3: Retrieve data from the products table
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

// Step 4: Display the heading
echo "<h2>Product Details</h2>";

// Step 5: Create an HTML table
echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Price</th>
      </tr>";

// Step 6: Retrieve and display records
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['item_name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "</tr>";
}

// Step 7: Close the HTML table
echo "</table>";

// Step 8: Close database connection
$conn->close();
?>