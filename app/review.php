<?php
require('api/classes/App.php');
$app = new App;

//get all of our data from session
$projectData = $app->getProjectData();

echo "<pre>";
var_dump($projectData);
echo "</pre>";

//pull in the template
require_once('views/layouts/header.php');
?>

      <h2>Project Review</h2>

      <h3>Developers</h3>
      <div id="people">
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
        <input type="submit" name="submit" id="submit" value="Continue" />
      </form>

<?php
//finish the template
require_once('views/layouts/footer.php');
?>