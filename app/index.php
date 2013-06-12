<?php
require('api/classes/App.php');
$app = new App;
$accountExecs = $app->getPeople('accountexecutives');

//pull in the template
require_once('views/layouts/header.php');
?>

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

<?php
//finish the template
require_once('views/layouts/footer.php');
?>