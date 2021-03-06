<?php
require('api/classes/App.php');
$app = new App;
$seniordevelopers = $app->getPeople('developers');

if(isset($_POST['submit'])) {
  if(isset($_POST['people_seniordeveloper'])) {
    $app->Session->set('people_seniordeveloper', $_POST['people_seniordeveloper']);
    $app->redirect('developers.php');
  }
}

$app->Layout->renderHeader();
?>

      <h2>Select Senior Developer</h2>
      <div id="people" class="single">
        <table border="0">
          <tr>
            <?php foreach($seniordevelopers as $person): ?>
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
      <form method="post">
        <input type="hidden" name="people_seniordeveloper" id="peopleList" value="" />
        <input type="submit" name="submit" id="submit" value="Continue" />
      </form>

<?php
$app->Layout->renderFooter();
?>