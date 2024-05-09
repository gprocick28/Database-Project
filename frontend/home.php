<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class='dashboard'>
    <div class="dashboard-nav">
        <header>
            <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
            <a href="#" class="brand-logo"><i class="fas fa-car"></i> <span>Wheels Inc.</span></a>
        </header>
        <nav class="dashboard-nav-list">
            <a href="home.php" class="dashboard-nav-item active"><i class="fas fa-home"></i> Home</a>
            <a href="mycars.php" class="dashboard-nav-item"><i class="fas fa-car"></i> My Cars</a>
            <a href="employee.php" class="dashboard-nav-item"><i class="fas fa-user"></i> Employee</a>
            <div class="nav-item-divider"></div>
            <a href="logout.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </nav>
    </div>
    <div class='dashboard-app'>
        <header class='dashboard-toolbar'>
            <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
        </header>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <h1>Available Vehicles</h1>
                    </div>
                    <div class='card-body'>
                        <!-- Car containter -->
                        <!-- Dynamically generates car info -->
                        <div class="container">

                            <?php // Cards to display cars created here
                                include "/users/kent/student/bjennin4/config.php";

                                // Create connection
                                $conn = new mysqli($servername, $username, $password, $dbname);
                                // Check connection
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }

                                $sql = "SELECT * FROM `vehicles` WHERE `customer_ID` IS NULL";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        // echo "VIN: " . $row["VIN"]. " - Make: " . $row["make"]. " - Model: " . $row["model"]. "<br>";
                                        echo "<div class='carbox'>"; // Begins carbox

                                        // Car info
                                        echo "<h2>" . $row["make"] . " " . $row["model"] ."</h2>";
                                        echo "<body>" . $row["mileage"] . " Miles <body>";

                                        // Variables
                                        $filename = strtolower($row["make"]) . '.png';
                                        $customer_ID = 10003;
                                        $VIN = $row['VIN'];

                                        // echo "<img src= $filename class='car'>";
                                        echo "<img src='media/$filename' class='car'>";

                                        echo "<form method='post' action='buy.php' class='inline'>
                                                <input type='hidden' name='VIN' value='$VIN'>
                                                <button type='submit' name='customer_ID' value='$customer_ID' class='link-button'>
                                                    Buy
                                                </button>
                                            </form>";


                                        // Pricing
                                            // Style should be taken out of this line
                                            // Price needs implemented in the DB
                                        echo "<h3 style='margin-top:10px'>$" . $row["price"] . "</h3>";

                                        echo "</div>"; // Ends carbox
                                        // Print all data in table
                                    }
                                } else {
                                    echo "0 results";
                                }
                                $conn->close();
                            ?>

                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $(".dashboard-nav-dropdown-toggle").click(function () {
            $(this).closest(".dashboard-nav-dropdown")
                .toggleClass("show")
                .find(".dashboard-nav-dropdown")
                .removeClass("show");
            $(this).parent()
                .siblings()
                .removeClass("show");
        });
        $(".menu-toggle").click(function () {
            $(".dashboard").toggleClass("dashboard-compact");
        });
    });
</script>
</body>
</html>

