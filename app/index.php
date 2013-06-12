<?php
require('api/classes/App.php');
$app = new App;
$accountExecs = $app->getPeople('accountexecutives');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link href='http://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
    <link href="/styles/app.css" media="all" rel="stylesheet" />
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/scripts/app.js"></script>
  </head>

  <body>
    <div id="container">
      <h1>Quality Assuance Generator</h1>
      <h2>Select Account Executive</h2>
      <div id="people" class="single">
        <table border="0">
          <tr>
            <?php foreach($accountExecs as $person): ?>
            <td class="person" id="<?php echo $person['id']; ?>">
                <a href="#">
                  <span class="circle" style="background-image: url(<?php echo $person['avatar']; ?>);"></span>
                  <span><?php echo $person['name']; ?></span>
                </a>
            </td>
            <?php endforeach; ?>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>