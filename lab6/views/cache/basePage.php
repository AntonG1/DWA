     
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
        <img src='images/logo.jpg' height='60' width='160' alt=''>
      </div>
      <div class='col-xs-2 col-md-3 odjava'>
        <form name='odjava' method='POST' action='logout.php'>
          <?php echo htmlspecialchars($user) ?>
          <button type='submit' name='odjava' class='btn btn-default btn-xs'>
            Odjava
          </button>
        </form>
      </div>
    </div>
    <div class='row'>
    </div>
    <div class='row pozadina-sadrzaj'>
      <div class='col-xs-3 col-md-3'>
        <div class='linkovi'>
          <a href='login.php'>
            Home
          </a>
          <br>
          <a href='popis.php'>
            Popis
          </a>
          <br>
          <a href='unos.php'>
            Unos
          </a>
          <br>
          <a href='unosTipAlergen.php'>
            Unos tip i alergen
          </a>
          <br>
          <a href='izradipdf.php'>
            Izradi pdf
          </a>
          <br>
          <a href='barChart.php'>
            Bar chart
          </a>
          <br>
          <a href='pirChart.php'>
            Pie chart
          </a>
          <br>
          <a href='pretraga.php'>
            Pretraga inventara
          </a>
          <br>
          <a href='ispis.php'>
            Ispis Lab5
          </a>
          <br>
          <a href='unosL6.php'>
            Unos Lab6
          </a>
        </div>
      </div>
      <div class='col-xs-9 col-sm-9 col-md-9'>
        <h2>
          Unos proizvoda
        </h2>
        <form action='view/ispisStranice/' method='POST' role='form' class='form-horizontal'>
          <div class='form-group'>
            <div class='col-sm-12'>
              Naziv proizvoda:
              <input id='form-control' type='text' name='naziv' placeholder='Naziv proizvoda'>
            </div>
          </div>
          <div class='col-sm-10'>
            Tip proizvoda:
            <select name='tip'>
              <option value='torta'>
                Torta
              </option>
              <option value='keks'>
                Keks
              </option>
              <option value='kolač'>
                Kolač
              </option>
              <option value='čokolada'>
                čokolada
              </option>
              <option value='piće'>
                Piće
              </option>
              <option value='ostalo'>
                Ostalo
              </option>
              <br>
              <br>
            </select>
          </div>
          <div class='col-sm-10'>
            Opis proizvoda:
            <input id='form-control' type='text' name='opis' placeholder='Opis proizvoda'>
            <br>
            <br>
          </div>
          <div class='col-sm-10'>
            Vegetarijanski:
            <select name='vegetarijanski'>
              <option value='DA'>
                Da
              </option>
              <option value='NE'>
                Ne
              </option>
            </select>
            <br>
            <br>
          </div>
          <div class='col-sm-10'>
            Halal:
            <select name='halal'>
              <option value='DA'>
                Da
              </option>
              <option value='NE'>
                Ne
              </option>
            </select>
            <br>
            <br>
          </div>
          <div class='col-sm-10'>
            Košer:
            <select name='koser'>
              <option value='DA'>
                Da
              </option>
              <option value='NE'>
                Ne
              </option>
            </select>
            <br>
            <br>
          </div>
          <div class='col-sm-10'>
            Tipovi alergena:
            <soja>
              soja
            </soja>
            <input type='checkbox' name='soja' value='soja,'>
            <jaja>
              jaja
            </jaja>
            <input type='checkbox' name='jaja' value='jaja,'>
            <kikiriki>
              kikiriki
            </kikiriki>
            <input type='checkbox' name='kikiriki' value='kikiriki,'>
            <mlijeko>
              mlijeko
            </mlijeko>
            <input type='checkbox' name='mlijeko' value='mlijeko,'>
            <rakovi>
              rakovi
            </rakovi>
            <input type='checkbox' name='rakovi' value='rakovi,'>
            školjke
            <input type='checkbox' name='skoljke' value='skoljke,'>
            <or>
              orašasti plodovi
            </or>
            <input type='checkbox' name='orasasti' value='orasasti,'>
            <jagoda>
              jagoda
            </jagoda>
            <input type='checkbox' name='jagoda' value='jagoda,'>
            <kivi>
              kivi
            </kivi>
            <input type='checkbox' name='kivi' value='kivi,'>
            <ananas>
              ananas
            </ananas>
            <input type='checkbox' name='ananas' value='ananas,'>
            <br>
            <br>
            <div class='col-sm-10'>
              Cijena:
            </div>
            <input id='form-control' type='text' name='cijena' placeholder='Cijena'>
          </div>
          <div class='form-group'>
            <div class='col-sm-offset-2 col-sm-10'>
              <button type='submit' class='btn btn-default'>
                Unos
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
  <footer>
    <div class='footer row'>
      <div class='footer-navigation'>
        <p class='text-center'>
           Copyright &copy; ZKD, 2015
        </p>
      </div>
    </div>
  </footer>
  <script type="text/javascript"> window.history.forward();
 
 
</script>
</html>
