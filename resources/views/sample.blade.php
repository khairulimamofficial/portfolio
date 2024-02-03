<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Burger Navbar Example</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
    }

    header {
      background-color: #3498db;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #2c3e50;
      padding: 10px 20px;
    }

    .navbar-brand {
      color: #fff;
      font-size: 1.5rem;
      text-decoration: none;
    }

    .navbar-toggle {
      cursor: pointer;
      display: none;
      font-size: 1.5rem;
      color: #fff;
    }

    .navbar-links {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    .navbar-links a {
      text-decoration: none;
      color: #fff;
      font-weight: bold;
      font-size: 1rem;
    }

    @media only screen and (max-width: 768px) {
      .navbar-links {
        display: none;
        flex-direction: column;
        align-items: center;
        width: 100%;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #2c3e50;
      }

      .navbar-links.show {
        display: flex;
      }

      .navbar-toggle {
        display: block;
      }
    }
  </style>
</head>

<body>

  <header>
    <h1>Your Website Header</h1>
  </header>

  <div class="navbar">
    <a href="#" class="navbar-brand">Logo</a>
    <div class="navbar-toggle" id="toggle">&#9776;</div>
    <ul class="navbar-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>

  <script>
    document.getElementById('toggle').addEventListener('click', function () {
      document.querySelector('.navbar-links').classList.toggle('show');
    });
  </script>

  <!-- Your content goes here -->

</body>

</html>
