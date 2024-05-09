<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mycars</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="mycars.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class='dashboard'>
        <div class="dashboard-nav">
            <header>
                <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
                <a href="#" class="brand-logo"><i class="fas fa-car"></i> <span>CARDEALER</span></a>
            </header>
            <nav class="dashboard-nav-list">
                <a href="home.php" class="dashboard-nav-item"><i class="fas fa-home"></i> Home</a>
                <a href="mycars.php" class="dashboard-nav-item active"><i class="fas fa-car"></i> My Cars</a>
                <a href="employee.php" class="dashboard-nav-item"><i class="fas fa-user"></i> Employee</a>
                <div class="nav-item-divider"></div>
                <a href="login.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
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
                            <h1>My Cars</h1>
                        </div>
                        <div class='card-body'>
                            <div class="container">
                        
                                <!-- Printing each car tied to logged in user -->
                                <?php
                                    include "/users/kent/student/gprocick/config.php";

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    // Needs to be replaced by actual user_ID when logged in, or nothing when not
                                    $loggedInID = 10003;
                                    
                                    // Selects all cars that match the logged in ID
                                    $sql = "SELECT * FROM `vehicles` WHERE `customer_ID` = $loggedInID";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                    // output data of each row
                                        while($row = $result->fetch_assoc()) {

                                            // Starts carbox for each car
                                            echo "<div class='carbox'>";

                                            echo "<h2>" . $row["make"] . " " . $row["model"] ."</h2>";

                                        // echo "<img src= $filename class='car'>";
                                            $filename = strtolower($row["make"]) . '.png';
                                            echo "<img src='media/$filename' class='car'>";
                                        
                                            $VIN = $row['VIN'];

                                            // Makes cars no longer owned
                                            echo "<form method='post' action='sell.php' class='inline'>
                                                <button type='submit' name='VIN' value='$VIN' class='link-button'>
                                                    Sell
                                                </button>
                                            </form>";
                                            
                                            // Ends carbox
                                            echo "</div>"; 
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