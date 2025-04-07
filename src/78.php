<?php
    $data = array(
        "name" => "John Doe",
        "age"  => 25,
        "address" => "123 Main St, Anytown USA"
    );

    echo "Name: " . htmlspecialchars($data["name"]) . "<br>";
    echo "Age: " . $data["age"] . "<br>";
    echo "Address: " . htmlspecialchars($data["address"]);
?>
