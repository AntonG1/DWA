     
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
    <div class='sadrzaj'>
      <div class='row pozadina-sadrzaj'>
        <article class='paragraf column column-6'>
          <img src='images/logo.png' height='auto' width='100%' alt=''>
          <h4>
            Dominica sancta, quid remediis sunt.
          </h4>
        </article>
        <article align='center' class='paragraf column column-6'>
          <div align='center' class='paragraf-2'>
            <form action='loginPHP.php' method='POST' class='form-horizontal'>
              <div class='form-group'>
                <label for='username' class='col-sm-2 control-label'>
                  Korisnik:
                </label>
                <div class='col-sm-10'>
                  <input id='username' type='text' name='username' placeholder='Korisničko ime' class='form-control'>
                </div>
              </div>
              <div class='form-group'>
                <label for='password' class='col-sm-2 control-label'>
                  Password:
                </label>
                <div class='col-sm-10'>
                  <input id='password' type='password' name='password' placeholder='Password' class='form-control'>
                </div>
              </div>
              <div class='form-group'>
                <div class='col-sm-offset-2 col-sm-10'>
                  <button type='submit' name='login' class='btn btn-default'>
                    Sign in
                  </button>
                </div>
              </div>
            </form>
          </div>
        </article>
      </div>
    </div>
  </body>
  <footer class='footer row'>
    <nav class='footer-navigation'>
      <p>
        Copyright © ZKD, 2014
      </p>
    </nav>
  </footer>
  <!--jQuery (necessary for Bootstrap's JavaScript plugins) -->
</html>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'>
</script>
<script src='js/bootstrap.min.js'>
</script>
