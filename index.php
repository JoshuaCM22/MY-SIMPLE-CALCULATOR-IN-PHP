<!doctype html>
<html>

<head lang="en">
  <meta charset="utf-8" />
  <title>MY SIMPLE CALCULATOR IN PHP</title>
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="icon" href="image/logo.png">
</head>

<body>
  <div class="container">
    <form givenOperator="#" method="POST">
      <fieldset class="fsMain">
        <legend>MY SIMPLE CALCULATOR IN PHP</legend>
        <p><input type="text" name="firstNumber" placeholder="Enter first number" /></p>
        </p><input type="text" name="secondNumber" placeholder="Enter second number" /></p>
        <p>Arithmetic Operator <select name="operator">
            <option></option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
          </select>
        </p>
        <p><input type="submit" value="CALCULATE" name="calculate"></p>
        <p class="getAnswer">

          <?php // Created by: Joshua C. Magoliman
          // if button is clicked
          if (isset($_POST['calculate'])) {
            // create and initialize global variables
            $firstGivenNumber = $_POST['firstNumber'];
            $secondGivenNumber = $_POST['secondNumber'];
            $givenOperator = $_POST['operator'];
            $answer = 0;
            // if first given number second given number are both not null
            if ($firstGivenNumber != null && $secondGivenNumber != null) {
              // then execute this user defined function called checkIfValidNumbers();
              checkIfValidNumbers();
            } else {
              // it means that first and/or second number are/is nothing
              echo ('Please give numbers for first number and second number!');
            }
          }
          // create a user defined function
          function checkIfValidNumbers()
          {
            // the global keyword is used to access a global variables from within this function
            global $firstGivenNumber, $secondGivenNumber;
            // if the first given number and second given number are both valid numbers
            if (is_numeric($firstGivenNumber) && is_numeric($secondGivenNumber)) {
              // then execute this codes
              calculate();
            } else { // if not
              // then execute this codes
              echo ("Please enter two valid numbers");
            }
          }
          // create a user defined function
          function calculate()
          {
            // the global keyword is used to access a global variables from within this function
            global $givenOperator, $firstGivenNumber, $secondGivenNumber, $answer;
            switch ($givenOperator) {
              case 'Add':
                $answer = $firstGivenNumber + $secondGivenNumber;
                echo "Answer: " . $answer;
                break;
              case 'Subtract':
                $answer = $firstGivenNumber - $secondGivenNumber;
                echo "Answer: " . $answer;
                break;
              case 'Multiply':
                $answer = $firstGivenNumber * $secondGivenNumber;
                echo "Answer: " . $answer;
                break;
              case 'Divide':
                $answer = $firstGivenNumber / $secondGivenNumber;
                echo "Answer: " . $answer;
                break;
              default:
                echo ('No Arithmetic Operator found!');
                break;
            }
          }
          ?>

        </p>
      </fieldset>
    </form>
  </div>
</body>

</html>