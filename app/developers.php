<?php
require('api/classes/App.php');
$app = new App;
$accountExecs = $app->getPeople('developers');

if(isset($_POST['submit'])) {
  if(isset($_POST['people_developers'])) {
    $app->Session->set('people_developers', $_POST['people_developers']);
    $app->redirect('projectsize.php');
  }
}

//pull in the template
require_once('views/layouts/header.php');
?>

      <h2>Select Account Executive</h2>
      <div id="people" class="many">
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
      <form method="post">
        <input type="hidden" name="people_developers" id="peopleList" value="" />
        <input type="submit" name="submit" id="submit" value="Continue" />
      </form>

<?php
//finish the template
require_once('views/layouts/footer.php');
?>