<?php

include "logic.php";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>

    <!-- end bootstrap -->
    <!-- google fonts -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- link the css file -->
    <link rel="stylesheet" href="style.css">

    <title>COVID-19 TRACKER</title>
</head>

<body>
    <!-- scroll btn  -->
<div class="scroll-up-btn">
          <i class="fas fa-angle-up"></i>
      </div>
    <div class="container-fluid bg-light p-5 text-center my-3">
        <h1>COVID-19 Tracker</h1>
        <h5 class="text-muted">Can see the all the COVID-19 cases around the world</h5>
    </div>

<!-- global count  -->
    <div class="container">
        <div class="global">
            <h3 class="glob">Global Count</h3>
        </div>

        <div class="row">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed; ?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered; ?>

            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo $total_deaths; ?>

            </div>
        </div>

    </div>
    <!-- global count  -->

    <!-- sri lank count  -->
    <div><br></div>
    <div class="container">
        <div class="srilanka">
            <h3 class="glob">Sri Lanka Counts</h3>
        </div>

        <div class="row">
            <div class="col-4 text-warning">
                <h5>Confirmed</h5>
                <?php echo $total_confirmed; ?>
            </div>
            <div class="col-4 text-success">
                <h5>Recovered</h5>
                <?php echo $total_recovered; ?>

            </div>
            <div class="col-4 text-danger">
                <h5>Deceased</h5>
                <?php echo $total_deaths; ?>

            </div>
        </div>

    </div>

    <!-- end sri lank count  -->


    <div class="container bg-light p-3 my-3 text-center">
        <h5 class="text-info">"Stay Safe"</h5>
    </div>

    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-hover    ">
                <thead class="table-dark table-striped">
                    <tr>
                        <th scope="col">Countries</th>
                        <th scope="col">Confirmed</th>
                        <th scope="col">Recovered</th>
                        <th scope="col">Deceased</th>
                        <th scope="col">Date</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($data as $key => $value) {
                        $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
                    ?>

                        <tr>
                            <th><?php echo $key; ?></th>
                            <td>
                                <?php echo $value[$days_count]['confirmed']; ?>
                                <?php if ($increase != 0) { ?>
                                    <small><i class="fa fa-arrow-up" aria-hidden="true"></i><?php echo $increase; ?></small>
                                <?php } ?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['recovered']; ?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['deaths']; ?>
                            </td>
                            <td>
                                <?php echo $value[$days_count]['date']; ?>
                            </td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

  <!-- script in here -->
  <script src="script.js"></script>

  </body>
    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            <span class="text-muted">COVID 19 Tracker - <a href="#">Dasun Maduhsanka</a> &copy; 2021</span>
        </div>
    </footer>





</html>