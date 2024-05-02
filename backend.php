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
function get_prices()
{
        echo "sql command for car prices goes here\n";
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
        // return result for the if_empty()
        $result = 0;
        result = ifempty($_GET["name_id"]);
        if (result == 0)
        {
                $name = $_GET("name_id")
                $sql_query = "brandon i need you to take care of this part";
                $sql_statement = connection->prepare(sql_statement);
                $sql_statement->bind_param("s", $name);
                $sql_statement->execute();
                $query_result = $sql_statement->get_result();
                $sql_statement->close();
        }
        return;
}
// this is where we will have all of our driver code
placeholder();
$connection = create_connection();

?>
