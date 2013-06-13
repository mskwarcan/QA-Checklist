<?php
require('api/classes/App.php');
$app = new App;

//get all of our data from session
$projectData = $app->getProjectData();

//pull in the template
require_once('views/layouts/header.php');
?>

      <h2>Project Review</h2>

      <h3>Account Executive</h3>
      <div id="people">
        <table border="0">
          <tr>
            <?php foreach($projectData['people_accountexecutives'] as $person): ?>
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

      <h3>Project Manager</h3>
      <div id="people">
        <table border="0">
          <tr>
            <?php foreach($projectData['people_projectmanagers'] as $person): ?>
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

      <h3>Senior Developer</h3>
      <div id="people">
        <table border="0">
          <tr>
            <?php foreach($projectData['people_seniordeveloper'] as $person): ?>
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

      <h3>Developer(s)</h3>
      <div id="people">
        <table border="0">
          <tr>
            <?php foreach($projectData['people_developers'] as $person): ?>
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

      <h3>Project Size</h3>
      <div id="people">
        <table border="0">
          <tr>
            <td class="person" id="<?php echo $projectData['projectSize']['id']; ?>">
                <a href="#">
                  <span class="circle" style="background-image: url(<?php echo $projectData['projectSize']['avatar']; ?>);"></span>
                  <span><?php echo $projectData['projectSize']['name']; ?></span>
                  <span>
                    <em>Example</em>
                    <br><?php echo $projectData['projectSize']['desc']; ?>
                  </span>
                </a>
            </td>
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