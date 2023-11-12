<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NumSorter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Number Sorter</h1>
    <div class="container-flex">
        <div class="container bd-content ps-lg-3">
          <div class="row">
            <div class="col"></div>
              <div class="row">

              <?php
                if($_SERVER['REQUEST_METHOD']=='POST') { 
                    $num1 = $_POST['num1']; 
                    $num2 = $_POST['num2'];
                    $num3 = $_POST['num3'];
                    $num4 = $_POST['num4'];
                    $num5 = $_POST['num5'];

                    $number = array($num1, $num2, $num3, $num4, $num5);
                    rsort($number);

                    echo "<div class='result'>";

                    echo "The Sorted Numbers: ";
                    for ($i=0; $i < count($number); $i++)
                    {
                      echo "<span> $number[$i] </span> ";
                    }

                    function averageNum($number) {
                      $sum = array_sum($number);
                      $average = $sum / 5;
                    
                      echo"<br> The Average number: "."<span> $average </span>" . "<br>" ; 
                      }
                
                    //Outputs
                    echo (averageNum($number));
                    echo (" The Smallest Number: "."<span>" .min($number) ."</span>" ."<br>");
                    echo (" The Largest Number: "."<span>" . (max($number)."</span>"."<br>"));
                    echo "</div>";


                    //Validation
                    if (empty($_POST['num1']))
                    {
                      die("Please fill up First Number");
                    }

                    if (empty($_POST['num2']))
                    {
                      die("Please fill up Second Number");
                    }

                    if (empty($_POST['num3']))
                    {
                      die("Please fill up Third Number");
                    }

                    if (empty($_POST['num4']))
                    {
                      die("Please fill up Fourth Number");
                    }

                    if (empty($_POST['num5']))
                    {
                      die("Please fill up Fifth Number");
                    }

                    //2. Check if real numbers.

                    if (!is_numeric($num1))
                    {
                      die("Please ensure First Number is numeric.");
                    }

                    if (!is_numeric($num2))
                    {
                      die("Please ensure Second Number is numeric.");
                    }

                    if (!is_numeric($num3))
                    {
                      die("Please ensure Third Number is numeric.");
                    }

                    if (!is_numeric($num4))
                    {
                      die("Please ensure Fourth Number is numeric.");
                    }

                    if (!is_numeric($num5))
                    {
                      die("Please ensure Fifth Number is numeric.");
                    }
                  }
                ?>

                <form action="" method="POST">

                  <div class="mb-3">
                    <label for="num1" class="form-label">First Number:</label>
                    <input type="number" class="form-control" id="num1" name="num1" placeholder="First Number" required>
                  </div>
                  <div class="mb-3">
                    <label for="num2" class="form-label">Second Number:</label>
                    <input type="number" class="form-control" id="num2" name="num2" placeholder="Second Number" required>
                  </div>
                  <div class="mb-3">
                    <label for="num3" class="form-label">Third Number:</label>
                    <input type="number" class="form-control" id="num3" name="num3" placeholder="Third Number" required>
                  </div>
                  <div class="mb-3">
                    <label for="num4" class="form-label">Fourth Number:</label>
                    <input type="number" class="form-control" id="num4" name="num4" placeholder="Fourth Number" required>
                  </div>
                  <div class="mb-3">
                    <label for="num5" class="form-label">Fifth Number:</label>
                    <input type="number" class="form-control" id="num5" name="num5" placeholder="Fifth Number" required>
                  </div>
                  <button type="submit" name="button" class="btn btn-primary mb-3">Submit</button>
                </form> 
              </div>
              <div class="col"></div>
            </div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>