<?php
session_start(); // Start the session

// Check if the user is logged in by checking the 'user' session variable
$isUserLoggedIn = isset($_SESSION['user']);
// If the user is logged in, retrieve the user information from the session
$user = $isUserLoggedIn ? $_SESSION['user'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Link to the main CSS stylesheet with cache-busting query parameter -->
  <link rel="stylesheet" href="../Styles/main.css?v=<?php echo time(); ?>">
  
  <title>Checkout</title>
</head>
<body>
<header class="header">
  
  <div class="header__content">
    <!-- Hamburger menu icon for mobile view -->
    <div class="hamburger">
      <div class="bar"></div>
      <div class="bar"></div>
      <div class="bar"></div>
    </div>
    <!-- Logo linking to the Admin index page -->
    <a href="../Admin/index.php" class="logo">Millennium Cinema</a>
    <nav class="navbar">
      <ul class="nav__list">
        <li class="nav__item"><a href="Dashbord.php" class="nav__link">Dashbord</a></li>
        <li class="nav__item"><a href="../Admin/Movies/indexMovie.php" class="nav__link">Movies</a></li>
        <li class="nav__item"><a href="../Admin/Schedules/indexSchedule.php" class="nav__link">Schedules</a></li>
        <li class="nav__item"><a href="#" class="nav__link">Tickets</a></li> 
        <li class="nav__item"><a href="../Admin/Users/indexUser.php" class="nav__link">Users</a></li> 
        
        <!-- Display profile picture and dropdown menu if the user is logged in -->
        <?php if ($isUserLoggedIn) : ?>
          <li class="nav__item">
            <div class="profile">
              <!-- Display the user's profile picture -->
              <img src="../Assets/HomeAssets/Images/<?php echo $_SESSION['profile'] ?>" alt="Profile Picture" class="profile__image">
              <div class="profile__dropdown">
                <ul class="dropdown__list">
                  <li class="profile-li">
                    <img src="/Assets/user.svg" alt="profile icon">
                    <a href="../User/profile.php">My Profile</a>
                  </li>
                  <li class="settings-li">
                    <img src="/Assets/settings.svg" alt="settings icon">
                    <a href="settings.php">Account Settings</a>
                  </li>
                  <li class="logout-li">
                    <img src="/Assets/logout.svg" alt="logout icon">
                    <a href="../Admin/Author/logout.php">Logout</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        <?php else : ?>
          <!-- Display a login button if the user is not logged in -->
          <li class="nav__item">
            <a href="/Admin/Author/login.php" class="nav__link profile">Log In</a>
          </li>
        <?php endif; ?>
      </ul>
    </nav>
  </div>
</header>
</body>
</html>
