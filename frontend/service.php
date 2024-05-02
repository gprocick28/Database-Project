<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="service.css">
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
                        <h1>Service</h1>
                    </div>
                    <div class='card-body'>
                        <div class="container">
                            <form>
                                <label for="repair-type">Select Vehicle:</label>
                                <select id="repair-type" name="repair-type" required>
                                  <option value="">Select Vehicle</option>
                                  <option value="Acoustic">Guitar (Acoustic)</option>
                                  <option value="Electric">Guitar (Electric)</option>
                                  <option value="Trumpet">Trumpet</option>
                                  <option value="Percussion">Percussion</option>
                                  <option value="Piano">Piano</option>
                                  <option value="Flute">Flute</option>
                                  <option value="Saxophone">Saxophone</option>
                                  <option value="Violin">Violin</option>
                                </select><br>
                                <label for="repair-type">Service Type:</label>
                                <select id="repair-type" name="repair-type" required>
                                  <option value="">Select Service Type</option>
                                  <option value="Tuning">Tuning</option>
                                  <option value="Restringing">Restringing</option>
                                  <option value="Instrument Cleaning and Maintenanc">Instrument Cleaning and Maintenance</option>
                                  <option value="Instrument Repair">Instrument Repair</option>
                                </select><br>
                                <label for="issue">Explain Issue:</label>
                                <textarea id="story" name="issue" rows="6" required></textarea><br>
                                <input type="submit" value="Submit">
                                <h3 style="margin-top:10px">Price: $$$</h3>
                              </form>
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
