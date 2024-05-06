<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="employee.css">
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
            <a href="mycars.php" class="dashboard-nav-item"><i class="fas fa-car"></i> My Cars</a>
            <a href="employee.php" class="dashboard-nav-item active"><i class="fas fa-user"></i> Employee</a>
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
                        <h1>Employee</h1>
                    </div>
                    <div class='card-body'>
                        <div class="box">

                            <!-- Vehicle creation form -->
                            <h2>Order Vehicle</h2>
                            <form action="insert.php" method="post">                               
                                <div class="input-group">
                                    <label for="VIN">Input the VIN:</label>
                                    <input type="text" pattern="[A-HJ-NPR-Z0-9]{17}" name="VIN" id="VIN">
                                </div>
                        
                                    
                                <div class="input-group">
                                    <label for="make">Make:</label>
                                    <select id="make" name="make" required>
                                    <option value="" disabled selected>Select the make</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Ford">Ford</option>
                                        <option value="Chevy">Chevy</option>
                                        <!-- Add more options for other makes -->
                                    </select>
                                </div>
                        
                                    
                                <div class="input-group">
                                    <label for="model">Model:</label>
                                    <select id="model" name="model" required>
                                        <option value="" disabled selected>Select the model</option>
                                        <option value="Accord">Accord</option>
                                        <option value="Raptor">Raptor</option>
                                        <option value="Cavalier">Cavalier</option>
                                        <!-- Add more options for other models -->
                                    </select>
                                </div>
                        
                                    
                                <div class="input-group">
                                    <label for="year">Year:</label>
                                    <select id="year" name="year" required>
                                        <option value="" disabled selected>Select the year</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <!-- Add more options for other years -->
                                    </select>
                                </div>
                        
                                    
                                <div class="input-group">
                                    <label for="price">Price:</label>
                                    <input type="number" id="price" name="price" required>
                                </div>


                                <div class="input-group">
                                    <label for="mileage">Mileage:</label>
                                    <input type="number" id="mileage" name="mileage" required>
                                </div>
                        
                                <input type="submit" value="Submit">
                            </form>
                        </div>
                    </div>


                    <!-- Employee insert -->
                    <!-- Not implemented -->
                    <div class='card-body'>
                        <div class="box">
                            <h2>Add Employee</h2>
                            <div class="input-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" required>
                                <button class="button-7" role="button">Add</button>
                            </div>
                            <br>
                            <h3>Employee List:</h3>
                            <p>None.</p>
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
