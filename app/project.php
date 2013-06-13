<?php
require('api/classes/App.php');
$app = new App;

//putting this first so we don't have to pull the project data again if we don't need to
if(isset($_POST['submit'])) {
  if(isset($_POST['projectName'])) {
    $app->Session->set('projectName', $_POST['projectName']);
    $app->redirect('review.php');
  }
}

$allProjects = $app->run('GET', '/projects.json');
$allProjects = json_decode($allProjects, true);




$app->Layout->renderHeader(false);
?>
      <link href="/vendor/select2/select2.css" rel="stylesheet"/>
      <script src="/vendor/jquery/jquery.min.js"></script>
      <script src="/vendor/select2/select2.min.js"></script>
      <script>
      $(document).ready(function() { $("#e1").select2(); });
      </script>

      <h2>Select Project</h2>
      <form method="post" id="projectSelect">
        <select name="projectName" id="e1">
          <?php foreach($allProjects as $project): ?>
          <option value="<?php echo $project['id']; ?>"><?php echo $project['name']; ?></option>
          <?php endforeach; ?>
        </select>
        <input type="submit" name="submit" id="submit" value="Continue" />
      </form>

<?php
$app->Layout->renderFooter();
?>