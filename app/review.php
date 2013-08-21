<?php
require('api/classes/App.php');
$app = new App;

//get all of our data from session
$projectData = $app->getProjectData();

//check for post
if(isset($_POST['submit'])) {
    $app->createLists($projectData);
    $app->redirect('complete.php');
}

$app->Layout->renderHeader(false);
?>

      <h2>Project Review</h2>

      <div id="people">
        <h3>Account Executive</h3>
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

      <div id="people">
        <h3>Project Manager</h3>
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

      <div id="people">
        <h3>Senior Developer</h3>
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

      <div id="people">
        <h3>Developer(s)</h3>
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

      <div id="people">
        <h3>Project Size</h3>
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

      <div id="people">
        <h3>Project Name</h3>
        <p><?php echo $projectData['projectData']['name']; ?></p>
      </div>


      <form method="post">
        <input type="submit" name="submit" id="submit" value="Create" />
      </form>

      <a href="/index.php" class="btn-small">Start Over?</a>
<?php
$app->Layout->renderFooter();
?>