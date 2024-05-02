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
            <a href="home.html" class="dashboard-nav-item"><i class="fas fa-home"></i> Home</a>
            <a href="mycars.html" class="dashboard-nav-item"><i class="fas fa-car"></i> My Cars</a>
            <a href="employee.html" class="dashboard-nav-item active"><i class="fas fa-user"></i> Employee</a>
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
                        <h1>Employee</h1>
                    </div>
                    <div class='card-body'>
                        <div class="box">
                            <h2>Order Vehicle</h2>
                            <div class="input-group">
                                <label for="state">Make</label>
                                <select id="state" name="state" required>
                                    <option value="" disabled selected>Select the make</option>
                                    <option value="AL">Honda</option>
                                    <option value="AK">Ford</option>
                                    <option value="AZ">Chevy</option>
                                    <!-- Add more options for other states -->
                                </select>
                            </div>
                            <div class="input-group">
                            <label for="state">Model</label>
                            <select id="state" name="state" required>
                                <option value="" disabled selected>Select the model</option>
                                <option value="AL">Accord</option>
                                <option value="AK">Raptor</option>
                                <option value="AZ">Cavalier</option>
                                <!-- Add more options for other states -->
                            </select>
                            </div>
                            <div class="input-group">
                                <label for="state">Year</label>
                                <select id="state" name="state" required>
                                    <option value="" disabled selected>Select the year</option>
                                    <option value="AL">2003</option>
                                    <option value="AK">2004</option>
                                    <option value="AZ">2005</option>
                                    <!-- Add more options for other states -->
                                </select>
                            <div class="input-group">
                                <label for="username">Price</label>
                                <input type="text" id="username" name="username" required>
                        </div>
                        <button class="button-7" role="button">Add</button>
                        </div>
                        </div>
                        
                    </div>
                    <div class='card-body'>
                        <div class="box">
                            <h2>Add Employee</h2>
                            <div class="input-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" name="username" required>
                                <!-- HTML !-->
                                <button class="button-7" role="button">Add</button>
                            </div>
                            <br><h3>Employee List:</h3>
                            None.
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
