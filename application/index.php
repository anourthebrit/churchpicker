<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Church Picker</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form class="survey-form" method="post" action="">
      <h1>Church Picker</h1>
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
          <h2>Where would you like to go to Church?</h2>
          <div class="rating-footer">
            <input type="text" name="city" id="city" placeholder="Town/City">
          </div>
        </div>
        <div class="buttons">
          <a href="#" class="btn" data-set-step="2">Next</a>
        </div>
      </div>
      <!-- page 2 -->
      <div class="step-content" data-step="2">
        <div class="fields">
          <h2>Would you prefer to take communion every week?</h2>
          <div class="rating">
            <input type="radio" name="communion" id="radio1" value="a">
            <label for="radio1">A</label>
            <input type="radio" name="communion" id="radio2" value="b">
            <label for="radio2">B</label>
            <input type="radio" name="communion" id="radio3" value="c">
            <label for="radio3">C</label>
          </div>
          <div class="rating-footer">
            <span>Yes</span>
            <span>Don't Mind</span>
            <span>No</span>
          </div>
        </div>
        <div class="buttons">
          <a href="#" class="btn" data-set-step="3">Next</a>
        </div>
      </div>
      <!-- page 3 -->
      <div class="step-content" data-step="3">
        <div class="fields">
          <h2>Would you prefer a more traditional or contemporary style of worship?</h2>
          <div class="rating">
            <input type="radio" name="service" id="radio4" value="a">
            <label for="radio4">A</label>
            <input type="radio" name="service" id="radio5" value="b">
            <label for="radio5">B</label>
            <input type="radio" name="service" id="radio6" value="c">
            <label for="radio6">C</label>
          </div>
          <div class="rating-footer">
            <span>Traditional</span>
            <span>Don't Mind</span>
            <span>Contemporary</span>
          </div>
        </div>
        <div class="buttons">
          <a href="#" class="btn" data-set-step="2">Prev</a>
          <a href="#" class="btn" data-set-step="4">Next</a>
        </div>
      </div>
      <!-- page 4 -->
      <div class="step-content" data-step="4">
        <div class="fields">
          <h2>Do you prefer independant churches or churches that belong to a larger denomination?</h2>
          <div class="rating">
            <input type="radio" name="network" id="radio7" value="a">
            <label for="radio7">A</label>
            <input type="radio" name="network" id="radio8" value="b">
            <label for="radio8">B</label>
            <input type="radio" name="network" id="radio9" value="c">
            <label for="radio9">C</label>
          </div>
          <div class="rating-footer">
            <span>Independant</span>
            <span>Don't Mind</span>
            <span>Denomination</span>
          </div>
        </div>
        <div class="buttons">
          <a href="#" class="btn" data-set-step="3">Prev</a>
          <a href="#" class="btn" data-set-step="5">Next</a>
        </div>
      </div>
      <!-- page 5 -->
      <div class="step-content" data-step="5">
        <div class="fields">
          <h2>Are you comfortable with a Female Church Leader?</h2>
          <div class="rating">
            <input type="radio" name="female" id="radio10" value="a">
            <label for="radio10">A</label>
            <input type="radio" name="female" id="radio11" value="b">
            <label for="radio11">B</label>
            <input type="radio" name="female" id="radio12" value="c">
            <label for="radio12">C</label>
          </div>
          <div class="rating-footer">
            <span>Yes</span>
            <span>Don't Mind</span>
            <span>No</span>
          </div>
        </div>
        <div class="buttons">
          <a href="#" class="btn" data-set-step="4">Prev</a>
          <a href="#" class="btn" data-set-step="6">Next</a>
        </div>
      </div>
      <!-- page 6 -->
      <div class="step-content" data-step="6">
        <div class="fields">
          <h2>Would you agree with professing Children being baptised?</h2>
          <div class="rating">
            <input type="radio" name="baptism" id="radio13" value="a">
            <label for="radio13">A</label>
            <input type="radio" name="baptism" id="radio14" value="b">
            <label for="radio14">B</label>
            <input type="radio" name="baptism" id="radio15" value="c">
            <label for="radio15">C</label>
          </div>
          <div class="rating-footer">
            <span>Yes</span>
            <span>Don't Mind</span>
            <span>No</span>
          </div>
        </div>
        <div class="buttons">
          <a href="#" class="btn" data-set-step="5">Prev</a>
          <input type="submit" class="btn" name="submit" value="Submit">
        </div>
      </div>
      <!-- page 7 -->
      <div class="step-content" data-step="7">
        <div class="result">
          <?php
          $response = '';
          // Check if the form was submitted
          if (isset($_POST['city'], $_POST['communion'], $_POST['service'], $_POST['network'], $_POST['female'], $_POST['baptism'])) {
            // Assign POST variables
            $communion = $_POST['communion'];
            $service = $_POST['service'];
            $network = $_POST['network'];
            $female = $_POST['female'];
            $baptism = $_POST['baptism'];
            $urlA = "https://www.findachurch.co.uk/Search2.aspx?address=";
            $urlB = "&denom=";
            $city = $_POST['city'];
            $denomination = "1";
          }
          ?>
          <h2>Thank you! Let's see what options you have in <?= $city ?>...<h2>
        </ul>
          <li>Communion Frequency: <?= $communion ?></li>
          <li>Service Type: <?= $service ?></li>
          <li>Network Preference: <?= $network ?></li>
          <li>Female Preference: <?= $female ?></li>
          <li>Baptism Preference: <?= $baptism ?></li>
        </ul>
        <p><a href=<?php echo $urlA . $city . $urlB . $denomination ?> target="_blank">Click here to see your recommendations</a></p>
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