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
                <a href="home.html" class="dashboard-nav-item"><i class="fas fa-home"></i> Home</a>
                <a href="mycars.html" class="dashboard-nav-item active"><i class="fas fa-car"></i> My Cars</a>
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
                            <h1>My Cars</h1>
                        </div>
                        <div class='card-body'>
                            <div class="container">
                                <div class="carbox">
                                    <h2>Civic</h2>
                                    <img src="media/car1.jpg" class="car">
                                    <a>Remove</a>
                                    <a href="service.html">Service</a>
                                </div>
                                <div class="carbox">
                                    <h2>Accord</h2>
                                    <img src="media/car2.jpeg" class="car">
                                    <a>Remove</a>
                                    <a href="service.html">Service</a>
                                </div>
                                <div class="carbox">
                                    <h2>Cavalier</h2>
                                    <img src="media/car3.jpg" class="car">
                                    <a>Remove</a>
                                    <a href="service.html">Service</a>
                                </div>
                                <div class="carbox">
                                    <h2>Chevy</h2>
                                    <img src="media/car4.jpg" class="car">
                                    <a>Remove</a>
                                    <a href="service.html">Service</a>
                                </div>
                                <div class="carbox">
                                    <h2>Lambo</h2>
                                    <img src="media/car5.jpg" class="car">
                                    <a>Remove</a>
                                    <a href="service.html">Service</a>
                                </div>
                            </div>
                            <br>
                            <div class='card'>
                                <div class='card-header'>
                                    <h1>Services</h1>
                                </div>
                                <div class='card-body'>
                                    <div class="carbox">
                                        <h2>Civic</h2>
                                        <img src="media/car1.jpg" class="car">
                                        <a>Cancel</a>
                                        <h3>Service:</h3>
                                    </div>
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