<?php
require('api/classes/App.php');
$app = new App;
$developers = $app->getPeople('developers');

if(isset($_POST['submit'])) {
  if(isset($_POST['people_developers'])) {
    $app->Session->set('people_developers', $_POST['people_developers']);
    $app->redirect('projectsize.php');
  }
}
?>

      <h2>Select Developer(s)</h2>
      <div id="people" class="many">
        <table border="0">
          <tr>
            <?php foreach($developers as $person): ?>
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
        <input type="hidden" name="people_developers" id="peopleList" value="" />
        <input type="submit" name="submit" id="submit" value="Continue" />
      </form>

<?php
$app->Layout->renderFooter();
?>