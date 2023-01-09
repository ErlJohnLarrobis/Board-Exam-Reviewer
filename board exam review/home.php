<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Board Exam Reviewer</title>
    <link rel="stylesheet" href="asset/style-home.css">
</head>
<body>
    <script src="asset/js-nav-menu.js"></script>
    <div id="will-collapsed" class="container">
        <div class="nav-bar">
            <div class="logo">
                <div onclick="hamburger()">
                    <div class="hammenu">
                        <div class="burger-top"></div>
                        <div class="burger-mid"></div>
                        <div class="burger-bottom"></div>
                    </div>
                    <img src="asset/images/phinma-logo.png" alt="phinma-logo">
                </div>
                <h1><a href="home.html">Board Exam Reviewer</a></h1>
            </div>
            <div class="user">
                <img src="asset/images/profile.jpg" alt="profile">
                <p>Username</p>
            </div>
        </div>
        <div id="nav-bar" class="nav-menu">
            <ul>
                <li onclick="reviewer()"><i class='bx bxs-book-open' ></i>Reviewer</li>
                <li onclick="mockexam()"><i class='bx bxs-caret-right-circle'></i></i>Mock Exam</li>
                <li onclick="history()"><i class='bx bx-history'></i>History</li>
                <li onclick="logout()"><i class='bx bx-log-out-circle' ></i>Logout</li>
            </ul>
        </div>
        <div class="content">
            <h2>Welcome to Board Exam Reviewer</h2><br>
            <p>You can start reviewing by click the reviewer tab or you can start the mock-up exam! </p>
        </div>
    </div>
</body>
</html>