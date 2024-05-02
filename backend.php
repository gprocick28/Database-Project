<?php
// this function creates the php connection. i tested it and it works
function create_connection()
        {
        $username = "";
        $password = "";
        $server = "localhost";

        // connection
        $new_connection = new mysqli($server, $username, $password);

        // check if the connection worked
        if ($new_connection->connect_error)
        {
                die("[-] connection failed\n". $new_connection->connect_error);
        }
        // else
        echo "[+] Connection established\n";

        return $new_connection;
}

// if we need prices it goes here. might need to pass in a variable argument to the funcion but idk
function get_prices($connection)
{
    $sql_query = "SELECT name, price FROM cars";  // Assuming a "cars" table with "name" and "price" columns

    $result = $connection->query($sql_query);

    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            echo "Car: " . $row['name'] . " - Price: " . $row['price'] . "<br>";
        }
    }
    else
    {
        echo "No cars found.<br>";
    }
}
// for car inputs and shit
function get_stock()
{
        echo "sql command for what is in stock goes here\n";
}

// if i forgot anything (which i'm sure I did, please just copy the function below and write whatever code neccesarry)
function placeholder($connection)
{
        echo "code here\n";
}

// this function is not quite done. clsoe to what he has on the slides
function get_names($connection)
{
    // Check if "name_id" is passed in the query parameters
    if (isset($_GET['name_id']))
    {
        $name_id = $_GET['name_id'];

        // SQL query to fetch car names (modify as needed)
        $sql_query = "SELECT name FROM cars WHERE id = ?";  // Assuming a "cars" table with a "name" column

        $sql_statement = $connection->prepare($sql_query);
        $sql_statement->bind_param("i", $name_id);  // Assuming the ID is an integer

        $sql_statement->execute();
        $query_result = $sql_statement->get_result();

        // Fetch and display the names
        while ($row = $query_result->fetch_assoc())
        {
            echo $row['name'] . "<br>";
        }

        $sql_statement->close();
    }
    else
    {
        echo "No 'name_id' provided.<br>";
    }
}

// this is where we will have all of our driver code
placeholder();
$connection = create_connection();  // Create a connection

// Example function calls:
get_names($connection);
get_prices($connection);

// Any other function calls as needed


?>
