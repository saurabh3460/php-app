<!DOCTYPE html>
<html>
  <head>
    <title>My hello.php Page</title>
    <style>
      body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #333;
        margin: 0;
        padding: 0;
      }

      header {
        background-color: #333;
        color: #fff;
        padding: 20px;
      }

      h1 {
        font-size: 36px;
        margin: 0;
      }

      p {
        margin: 20px 0;
      }

      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
      }

      .button {
        display: inline-block;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        transition: background-color 0.3s;
      }

      .button:hover {
        background-color: #3e8e41;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Welcome to My hello.php Page! kubernetes</h1>
    </header>
    <div class="container">
        <?php
        $url = $_SERVER['REQUEST_URI'];
        echo "The current URL is: " . $url;
        ?>

        <?php echo "<p>Thank you for visiting my hello.php. from kubernetes This is an example of a hello.php page created using HTML, CSS and PHP.</p>
      <p>Here's a button you can click:</p>"; ?>
        <?php phpinfo(); ?>
      <a href="#" class="button">Click me!</a>
    </div>
  </body>
</html>
