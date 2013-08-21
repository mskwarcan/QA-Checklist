<?php
require('api/classes/App.php');
$app = new App;
$app->Session->clearData();

$app->Layout->renderHeader();
?>

      <h2>The Quality Assurance to dos have been created!<br />Visit Basecamp to get started</h2>
      

<?php
$app->Layout->renderFooter();
?>