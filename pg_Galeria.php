<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Clínica Valinhos</title>
  </head>

  <body style="background-color: #BF66DE;">

     <?php include_once("topo.php");?>
      
      <div class="jumbotron jumbotron-fluid text-center m-0" style="background-color: #AB6EC1; color:white;">
        <div class="container">
          <h1 class="display-4">Galeria</h1>
          <p class="lead">Veja as fotos do nosso ambiente</p>
        </div>
      </div>

      <div class="row">
          <img class="m-5" src="image\image.jpeg" class="rounded float-left" alt="...">
      </div>
      <div class="row">
        <img class="m-5" src="image\image.jpeg" class="rounded float-left" alt="...">
      </div>
      <div class="row">
        <img class="m-5" src="image\image.jpeg" class="rounded float-left" alt="...">
      </div>
      <div>
        <p style="margin-left: 100px;">Registro Totais: 3 | Registro na Página: 3</p>
      </div>
      <div class="row align-content-center" style="margin-left: 85px; padding-bottom: 50px;">
          <div class="col-1">
              <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" style="background-color: black; color: white;" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item">
                        <a class="page-link" style="background-color: black; color: white;" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                  </ul>
              </nav>
          </div>
      </div>

    <?php include_once("rodape.php");?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>