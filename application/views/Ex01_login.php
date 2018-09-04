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
    <div class="container">
      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="/index.php/Ex01/">홍성남 세무사무소</a>
        <?php
        if($this->session->userdata('egoing')) {
          echo 'egoing <a href="/index.php/Ex01_auth/logout">logout</a>';
        } else {
          echo '<a href="/index.php/Ex01_auth/login">login</a>';
        }
        ?>
      </nav>
    </div>
    <br>

    <div class="container">
      <div class="row">

        <div class="col">
          <div class="list-group">
            <?php
            foreach($topics as $entry) {
              echo '<a href="/index.php/Ex01/get/'.$entry->id.'" class="list-group-item list-group-item-action">'.$entry->title.'</a>';
            }
            ?>
          </div>
        </div>

        <div class="col-9">
          <?php
          if($this->session->flashdata('errorMessage')) {
            echo '<script>alert("'.$this->session->flashdata('errorMessage').'")</script>';
          }
          ?>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login please</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form class="" action="http://localhost/index.php/Ex01_auth/authentication" method="post">
                <div class="modal-body">
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">ID :</label>
                      <input type="text" name="inputID" class="form-control" id="recipient-name" placeholder="Enter ID">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Password :</label>
                      <input type="password" name="inputPassword" value="" placeholder="Enter password" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" name="" value="Login" class="btn btn-primary">
                </div>
              </form>
              </div>
            </div>
          </div>

        </div> <!-- col-9 -->

      </div>
    </div>
    <br><br>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#exampleModal").modal("show")  // Show the Modal on load
      })
    </script>
  </body>
</html>
