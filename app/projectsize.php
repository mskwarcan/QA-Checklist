<?php
require('api/classes/App.php');
$app = new App;
$projectsizes = $app->getPeople('projectsize');

if(isset($_POST['submit'])) {
  if(isset($_POST['projectsize'])) {
    $app->Session->set('projectsize', $_POST['projectsize']);
    $app->redirect('review.php');
  }
}

//pull in the template
require_once('views/layouts/header.php');
?>

      <h2>Select Project Size</h2>
      <div id="people" class="single">
        <table border="0">
          <tr>
            <?php foreach($projectsizes as $person): ?>
            <td class="person" id="<?php echo $person['id']; ?>">
                <a href="#">
                  <span class="circle" style="background-image: url(<?php echo $person['avatar']; ?>);"></span>
                  <span><?php echo $person['name']; ?></span>
                  <span>
                    <em>Example</em>
                    <br><?php echo $person['desc']; ?>
                  </span>
                </a>
            </td>
            <?php endforeach; ?>
          </tr>
        </table>
      </div>
      <form method="post">
        <input type="hidden" name="projectsize" id="peopleList" value="" />
        <input type="submit" name="submit" id="submit" value="Continue" />
      </form>

<?php
//finish the template
require_once('views/layouts/footer.php');
?>