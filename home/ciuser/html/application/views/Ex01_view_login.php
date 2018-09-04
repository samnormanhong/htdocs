<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style media="screen">
      body {
        padding-top: 30px;
      }
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
        if($this->session->flashdata('message')) {
            echo '
                <script>
                    alert("'.$this->session->flashdata('message').'");
                </script>
            ';
        }
    ?>

    <nav class="navbar navbar-light bg-light">
      <a href="https://www.bizpower.co.kr/index.php/ex01" class="navbar-brand">&nbsp;&nbsp; 홍성남 세무사무소</a>
      <?php
        if($this->session->userdata('egoing')) {
          echo '<a href="https://www.bizpower.co.kr/index.php/ex01_auth/logout" class="nav-link">Logout</a>';
        } else {
          echo '<a href="https://www.bizpower.co.kr/index.php/ex01_auth/login" class="nav-link">Login</a>';
        }
      ?>
    </nav>
    <br>

    <div class="container">
      <div class="row">

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login page</h5>
              </div> <!-- modal-header -->

              <div class="modal-body">
                <form action="https://www.bizpower.co.kr/index.php/ex01_auth/authentication" method="POST">
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="inputEmail4">ID</label>
                      <input type="text" class="form-control" name="inputID" id="inputID" placeholder="ID">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="Password">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
              </div> <!-- modal-body -->

              <div class="modal-footer">
                  <h5>Hong's tax office</h5>
              </div> <!-- modal-footer -->

            </div> <!-- modal-content -->
          </div> <!-- modal-dialog -->
        </div> <!-- modal fade -->

      </div>  <!-- row -->
    </div> <!-- container -->
    <br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#exampleModal").modal("show");  // Show the Modal on load
      })
    </script>
  </body>
</html>
