  <?php
	// SchoolProject
	$database = new PDO('mysql:host=localhost;dbname=school', 'root', '');
	$sql = "SELECT * FROM students";
	$result = $database->query($sql);
	while ($row = $result->fetch()) {
		echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['age']}</td></tr>";
	}
  ?>