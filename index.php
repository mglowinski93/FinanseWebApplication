<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Tab icon -->
    <link rel="icon" href="img/logo.png">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link href="css/modal.css" rel="stylesheet">
    <link href="css/fontello.css" rel="stylesheet">

    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>Finance App Home</title>
  </head>
  <body body onload="setBalanceStartingDate(); setBalanceEndingDate();">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo.png" width="30" height="30" alt="">
        </a>
        <a class="navbar-brand" href="index.php">Finance App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php"><i class="icon-home"></i>  Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_income.php"><i class="icon-dollar"></i>Add income</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="add_expense.php"><i class="icon-basket"></i>  Add expense</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="balanceDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-chart-bar"></i>  View balance</a>
              <div class="dropdown-menu" aria-labelledby="balanceDropdown">
                <a class="dropdown-item" href="#">Current month</a>
                <a class="dropdown-item" href="#">Last month</a>
                <a class="dropdown-item" href="#">Current Year</a>
                <a class="dropdown-item" href="#userDefinedBalanceDatesModal" data-toggle="modal" data-target="#userDefinedBalanceDatesModal">User definer period</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="icon-wrench"></i>  Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="icon-logout"></i>  Logout</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Modal -->
      <div class="modal fade" id="userDefinedBalanceDatesModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="col-12 modal-title">Chose dates to display balance</h4>
            </div>
            <div class="modal-body">
                <form class="form-income">
                    <div class="form-group row">
                      <label for="balanceStartingDate" class="col-sm-3 col-form-label">Start date</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" id="balanceStartingDate" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="balanceEndingDate" class="col-sm-3 col-form-label">End Date</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" id="balanceEndingDate" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-6 text-left">
                        <button type="submit" class="btn btn-danger btn-sm btn-block" data-dismiss="modal">Cancel</button>
                      </div>
                      <div class="col-6 text-right">
                        <button type="submit" class="btn btn-success btn-sm btn-block">Show balance</button>
                      </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </header>

    <main role="main">
      <div class="jumbotron jumbotron-fluid" style="background-color: ghostwhite;">
        <div class="container">
          <h1 class="display-3">Hello, user!</h1>
          <p>It's nice to see you again!</p>
        </div>
      </div>

      <div class="container" id="headerPicture">
        <div class="row">
          <div class="col">
            <img class="image-fluid" src="img/header.jpg" alt="" />
          </div>
        </div>
      </div>

      <div class="container" id="financeArticles">
        <div class="row">
          <div class="col-md-4 border-right">
            <h2>Saving for retirement</h2>
            <p>Most popular retirement saving plan are IKE and IKZE. Below article will help you to understand which one is more suitable for you.</p>
            <p><a class="btn btn-secondary" href="https://blog.opiekuninwestora.pl/ike-ikze/" target="_blank" role="button">See more &raquo;</a></p>
          </div>
          <div class="col-md-4 border-right">
            <h2>10 tips to save money</h2>
            <p>Did you ever wondered how to save money? Here are 10 easy to follow steps which should help you to learn basic habits of wiser spending money.</p>
            <p><a class="btn btn-secondary" href="https://www.totalmoney.pl/artykuly/528152,konta-oszczednosciowe,10-zasad-oszczedzania---skad-wytrzasnac-dodatkowe-pieniadze,1,1" target="_blank" role="button">See more &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Do saving coins with a small denomination matters?</h2>
            <p>Currently we are buying for small amount of money. Are you aware how saving small amount of money can give you a extravagant holiday?</p>
            <p><a class="btn btn-secondary" href="https://aleksandraruta.pl/blog/dlaczego-kazde-5-zl-ma-takie-znaczenie/" target="_blank" role="button">See more &raquo;</a></p>
          </div>
        </div>

        <hr>
      </div>
    </main>

    <footer class="container text-center">
      <p class="mt-5 mb-3 text-muted">&copy;Finance App 2020</p>
    </footer>

  </body>
</html>