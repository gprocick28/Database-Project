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
            <a href="#" class="brand-logo"><i class="fas fa-car"></i> <span>CARDEALER</span></a>
        </header>
        <nav class="dashboard-nav-list">
            <a href="home.html" class="dashboard-nav-item active"><i class="fas fa-home"></i> Home</a>
            <a href="mycars.html" class="dashboard-nav-item"><i class="fas fa-car"></i> My Cars</a>
            <a href="employee.html" class="dashboard-nav-item"><i class="fas fa-user"></i> Employee</a>
            <div class="nav-item-divider"></div>
            <a href="login.html" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout</a>
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
                        <h1>Avaliable Vehicles</h1>
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

                                $sql = "SELECT * FROM vehicles";
                                $result = $conn->query($sql);

                                $imageNum = 1;

                                if ($result->num_rows > 0) {
                                // output data of each row
                                    while($row = $result->fetch_assoc()) {
                                        // echo "VIN: " . $row["VIN"]. " - Make: " . $row["make"]. " - Model: " . $row["model"]. "<br>";
                                        echo "<div class='carbox'>"; // Begins carbox

                                        // Car info
                                        echo "<h2>" . $row["make"] . "</h2>";

                                        // Temp until images are actually in the DB
                                        echo "<img src='media/car" . $imageNum . ".jpg' class='car'>";
                                        $imageNum += 1;

                                        echo "<a>Buy</a>";
                                        // Pricing
                                            // Style should be taken out of this line
                                            // Price needs implemented in the DB
                                        echo "<h3 style='margin-top:10px'>Price: $$$</h3>";

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

