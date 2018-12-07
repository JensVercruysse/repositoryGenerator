<?php

use \JensVercruysse\App\App;

require __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();
$token = getenv('TOKEN');

?>

  <!DOCTYPE html>
  <html>
    <head>
    <link rel="icon" type="image/jpg" href="images/ninja.jpg">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <title>Repository index</title>
    </head>
    <body>
    <div class="row">
    <form class="col s12" id="myForm" action ="index.php" method="get">
      <div class="row" style="text-align:center">
        <div class="input-field col s6" style="margin-left:25%">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="username" class="validate">
          <label for="icon_prefix">Please enter the username that you want to generate a repository list for</label>
          <button class="btn waves-effect waves-light" type="submit" name="action">Generate repository list
           <i class="material-icons right">send</i>
          </button>
        </div>
      </div>
    </form>
    </div>
<?php

$defaultUsername = "JensVercruysse";

if (isset($_GET["username"]))
{
  $username = $_GET["username"];
} 
else 
{
  $username = $defaultUsername;
}

try {

    if ($username == "") {
      throw new Exception('No username was submitted! Default repository displayed.');
    }
    echo $app = new App($username, $token);

} catch (Exception $emptyUsername) {
    echo $emptyUsername->getMessage();
    echo $app = new App($defaultUsername, $token);
}
?>
  </body>
  </html>