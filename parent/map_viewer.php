<?php

  include('../functions.php');
  include('../assets/html_head.php');

  $user = getUser();
?>

  <div id="map-viewer-main-wrapper">
    <div id="map-viewer-wrapper" class="wrapper-flex">
      <div id="host-code-container">
        <label class="switch">
          <input type="checkbox" id="codeSwitch">
          <span class="slider round"></span>
        </label>
        <div id="code-container">
          <p>Aktiver din kode</p>
        </div>
      </div>

      <div id="map-selection-container">
        <input type="range" name="mapWheel" min="0" max="3" value="1" id="mapSlider">
        <div id="map-container">
          <img src="../assets/images/basement.svg" alt="Kælder etage" id="basement">
          <img src="../assets/images/ground_floor.svg" alt="Stue etage" id="ground-floor">
          <img src="../assets/images/first_floor.svg" alt="Første etage" id="first-floor">
          <img src="../assets/images/second_floor.svg" alt="Anden etage" id="second-floor">
        </div>
      </div>


      <?php

      include('../assets/footer_app_parent.php');

      ?>
    </div>

    <div id="rulesModal">
      <div class="rules-content">
        <span class="close">&times;</span>
        <h1>Hej <span id="rulesName"></span>!</h1>
        <p>Some text in the Modal..</p>
      </div>
    </div>

  </div>
<?php

  include('../assets/footer_standard.php');

?>
