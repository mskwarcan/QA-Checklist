<?php
require('api/classes/App.php');
$app = new App;
$allProjects = $app->run('GET', '/projects.json');
$allProjects = json_decode($allProjects, true);


if(isset($_POST['submit'])) {
  if(isset($_POST['project'])) {
    $app->Session->set('project', $_POST['project']);
    $app->redirect('projectsize.php');
  }
}

$app->Layout->renderHeader();
?>
      <link href="/vendor/select2/select2.css" rel="stylesheet"/>
      <script src="/vendor/select2/select2.min.js"></script>
      <script>
      $(document).ready(function() { $("#e1").select2(); });
      </script>

      <h2>Select Project</h2>
      <form method="post" id="projectSelect">
        <select id="e1">
          <?php foreach($allProjects as $project): ?>
          <option value="<?php echo $project['id']; ?>"><?php echo $project['name']; ?></option>
          <?php endforeach; ?>
        </select>
        <input type="submit" name="submit" id="submit" value="Continue" />
      </form>

<?php
$app->Layout->renderFooter();
?>