<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <?php
  include 'config.php';
  ?>
  <title>Church Picker</title>
  <link rel="icon" type="image/x-icon" href="/images/logo.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <form class="survey-form" method="post" action="">
    
    <h1><a href="/">Church Picker</a></h1>
    <div class="steps">
      <div class="step current"></div>
      <div class="step"></div>
      <div class="step"></div>
      <div class="step"></div>
      <div class="step"></div>
      <div class="step"></div>
      <div class="step"></div>
    </div>
    <!-- page 1 -->
    <div class="step-content current" data-step="1">
      <div class="fields">
        <h2>Welcome!</h2>
          <h2>Where would you like to go to church?</h2>
          <div class="rating-footer">
            <input type="text" name="city" id="city" placeholder="Town/City" required>
          </div>
          <div class="buttons">
             <input type="submit" name="city" value="Next" class="btn" data-set-step="2">
          </div>
      </div>
    </div>
    <!-- page 2 -->
    <div class="step-content" data-step="2">
      <div class="fields">
        <h2>Would you prefer a church where you can take communion every week?</h2>
        <div class="rating">
          <input type="radio" name="communion" id="radio1" value="a" required checked>
          <label for="radio1">A</label>
          <input type="radio" name="communion" id="radio2" value="b" required>
          <label for="radio2">B</label>
        </div>
        <div class="rating-footer">
          <span>Yes</span>
          <span>No</span>
        </div>
      </div>
      <div class="buttons">
        <input type="submit" name="communion" value="Back" class="btn" data-set-step="1">
        <input type="submit" name="communion" value="Next" class="btn" data-set-step="3">
      </div>
    </div>
    <!-- page 3 -->
    <div class="step-content" data-step="3">
      <div class="fields">
        <h2>Do you prefer a more contemporary service over a traditional one?</h2>
        <div class="rating">
          <input type="radio" name="service" id="radio4" value="a" required checked>
          <label for="radio4">A</label>
          <input type="radio" name="service" id="radio5" value="b" required>
          <label for="radio5">B</label>
        </div>
        <div class="rating-footer">
          <span>Yes</span>
          <span>No</span>
        </div>
      </div>
      <div class="buttons">
        <input type="submit" name="service" value="Back" class="btn" data-set-step="2">
        <input type="submit" name="service" value="Next" class="btn" data-set-step="4">
      </div>
    </div>
    <!-- page 4 -->
    <div class="step-content" data-step="4">
      <div class="fields">
        <h2>Do you prefer independent churches over churches that belong to a larger denomination?</h2>
        <div class="rating">
          <input type="radio" name="network" id="radio7" value="a" required checked>
          <label for="radio7">A</label>
          <input type="radio" name="network" id="radio8" value="b" required>
          <label for="radio8">B</label>
        </div>
        <div class="rating-footer">
          <span>Yes</span>
          <span>No</span>
        </div>
      </div>
      <div class="buttons">
        <input type="submit" name="network" value="Back" class="btn" data-set-step="3">
        <input type="submit" name="network" value="Next" class="btn" data-set-step="5">
      </div>
    </div>
    <!-- page 5 -->
    <div class="step-content" data-step="5">
      <div class="fields">
        <h2>Are you comfortable with having a female church leader?</h2>
        <div class="rating">
          <input type="radio" name="female" id="radio10" value="a" required checked>
          <label for="radio10">A</label>
          <input type="radio" name="female" id="radio11" value="b" required>
          <label for="radio11">B</label>
        </div>
        <div class="rating-footer">
          <span>Yes</span>
          <span>No</span>
        </div>
      </div>
      <div class="buttons">
        <input type="submit" name="female" value="Back" class="btn" data-set-step="4">
        <input type="submit" name="female" value="Next" class="btn" data-set-step="6">
      </div>
    </div>
    <!-- page 6 -->
    <div class="step-content" data-step="6">
      <div class="fields">
        <h2>Are you happy with professing children being baptised?</h2>
        <div class="rating">
          <input type="radio" name="baptism" id="radio13" value="a" required checked>
          <label for="radio13">A</label>
          <input type="radio" name="baptism" id="radio14" value="b" required>
          <label for="radio14">B</label>
        </div>
        <div class="rating-footer">
          <span>Yes</span>
          <span>No</span>
        </div>
      </div>
      <div class="buttons">
        <input type="submit" name="baptism" value="Back" class="btn" data-set-step="5">
        <input type="submit" name="baptism" value="Finish" class="btn">
      </div>
    </div>
    <!-- page 7 -->
    <div class="step-content" data-step="7">
      <div class="result">
        <?php
          // Check if the form was submitted
          if (isset($_POST['city'], $_POST['communion'], $_POST['service'], $_POST['network'], $_POST['female'], $_POST['baptism'])) {
            // Assign POST variables
            $answers = $_POST['communion'] . $_POST['service'] . $_POST['network'] . $_POST['female'] . $_POST['baptism'];
            $urlA = "https://www.findachurch.co.uk/Search2.aspx?address=";
            $urlB = "&denom=";
            $city = $_POST['city'];

            //switch logic to assign answers as cases
            switch ($answers) {
              //traditional
              case "aabbb":
                $id = 1;
                break;
              //non-denominational
              case "bbaaa":
                $id = 2;
                break;
              //methodist
              case "babab":
                $id = 3;
                break;
              //denominational
              case "bbbaa":
                $id = 4;
                break;
              //anglican
              case "aabab":
                $id = 5;
                break;
              default:
                $id = 6;
            }
            if ($id < 6) {
              // Prepare SQL statement with parameters
              $sql = "SELECT Denom FROM denominations WHERE id=?";
              $stmt = $conn->prepare($sql); 
              $stmt->bind_param("s", $id);
              $stmt->execute();
              $result = $stmt->get_result();
              // get the demonination id's from the array
              while ($row = $result->fetch_assoc()) {
                $denomination = $row['Denom'];
              }      // specific path set so show denominational selections
              echo "<h2>Thank you! Let's see what options you have in ". $city . "...<h2>";
              echo "<p><a href=" . $urlA . $city . $urlB . $denomination . ">Click here to see your recommendations</a></p>";
            } else { // specific path not set so show all churches
              echo "<h2>Thank you! Let's see what options you have in ". $city . "...<h2>";
              echo "<p><a href=" . $urlA . $city . ">Click here to see your recommendations</a></p>";
            }
          }  
        ?>
      </div>
    </div>
  </form>
  <script>
    const setStep = step => {
      document.querySelectorAll(".step-content").forEach(element => element.style.display = "none");
      document.querySelector("[data-step='" + step + "']").style.display = "block";
      document.querySelectorAll(".steps .step").forEach((element, index) => {
        index < step - 1 ? element.classList.add("complete") : element.classList.remove("complete");
        index == step - 1 ? element.classList.add("current") : element.classList.remove("current");
      });
    };
    document.querySelectorAll("[data-set-step]").forEach(element => {
      element.onclick = event => {
        event.preventDefault();
        setStep(parseInt(element.dataset.setStep));
      };
    });
    <?php if (!empty($_POST)) : ?>
      setStep(7);
    <?php endif; ?>
  </script>
</body>
</html>