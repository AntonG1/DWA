     
<!DOCTYPE html>

<html>
  <head>
    <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css' rel='stylesheet' media='screen'>
    <meta http-equiv='content-type' content='text/html; charset=utf-8'>
    <script src='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js'>
    </script>
    <link href='css/stil.css' rel='stylesheet' media='screen'>
    <link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel='stylesheet' href='css/grid.css'>
    <link rel='stylesheet' href='css/stil.css'>
    <title>
      Lab 6
    </title>
  </head>
  <body>
    <div class='row pozadina header'>
      <div class='col-xs-10 col-sm-10 col-md-9'>
        <img src='img/logo.png' height='60' width='160' alt=''>
      </div>
      <div class='col-xs-2 col-md-3 odjava'>
        <form name='odjava' method='POST' action='odjava.php'>
          <?php echo htmlspecialchars($user) ?>
          <button type='submit' name='odjava' class='btn btn-default btn-xs'>
            Odjava
          </button>
        </form>
      </div>
    </div>
    <div class='row'>
      <ol class='breadcrumb col-xs-12 col-sm-12 col-md-12'>
        <li>
          <a href='login.php'>
            Home
          </a>
        </li>
        <li>
          <a href='index.php'>
            Unos
          </a>
        </li>
        <li class='active'>
          UnosPodaci
        </li>
      </ol>
    </div>
    <div class='row pozadina-sadrzaj'>
      <div class='col-xs-3 col-md-3'>
        <div class='linkovi'>
          <a href='popis.php'>
            Popis
          </a>
          <br>
          <a href='unos.php'>
            Unos
          </a>
          <br>
          <a href='unosLAB4.php'>
            UnosLAB4
          </a>
          <br>
          <a href='IspisLAB5.php'>
            IspisLAB5
          </a>
          <br>
          <a href='pieChart.php'>
            Chart M,Ž
          </a>
          <br>
          <a href='barChart.php'>
            Chart Krv.G
          </a>
          <br>
          <a href='doktor.php'>
            Doktor
          </a>
          <br>
          <a href='index.php'>
            Unos Slim
          </a>
        </div>
      </div>
      <div class='col-xs-9 col-sm-9 col-md-9'>
        <h3>
          Uneseni podaci:
        </h3>
        <br>
        <p>
          Ime:
          <?php echo htmlspecialchars($ime) ?>
        </p>
        <p>
          Prezime:
          <?php echo htmlspecialchars($prezime) ?>
        </p>
        <p>
          Spol:
          <?php echo htmlspecialchars($spol) ?>
        </p>
        <p>
          Datum rođenja:
          <?php echo htmlspecialchars($datum) ?>
        </p>
        <p>
          Mjesto rođenja:
          <?php echo htmlspecialchars($mjestoRodjenja) ?>
        </p>
        <p>
          Adresa i mjesto stanovanja:
          <?php echo htmlspecialchars($adresa) ?>
        </p>
        <p>
          Krvna grupa:
          <?php echo htmlspecialchars($grupa) ?>
        </p>
        <p>
          Prijašnje tegobe:
          <?php echo htmlspecialchars($tegobe) ?>
        </p>
        <p>
          Alergija na lijekove:
          <?php echo htmlspecialchars($alergija) ?>
        </p>
        <br>
      </div>
    </div>
  </body>
  <footer>
    <div class='footer row'>
      <div class='footer-navigation'>
        <p class='text-center'>
           Copyright &copy; ZKD, 2014
        </p>
      </div>
    </div>
  </footer>
  <script type="text/javascript"> window.history.forward();
 
 
</script>
</html>
