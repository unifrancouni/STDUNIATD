<!DOCTYPE html>
<html>
  
  <head>
    <meta charset="utf-8">
    <title>STD-UNI-ATD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="/STDUNIATD/css/bootstrap-min.css" rel="stylesheet" media="screen"> 
    <link href="/STDUNIATD/css/css.css" rel="stylesheet">
    <script type="text/javascript" src="/STDUNIATD/js/jquery.min.js"></script>
    <script type="text/javascript" src="/STDUNIATD/js/bootstrap.min.js"></script>

  </head>
  
  <body>
    <div class="container">
      <div class="row" id="row_superior">
        <div class="col-md-3" id="culumn1_row_superior">
          <img src="/STDUNIATD/images/logostd_640_480.png" class="center-block img-circle img-responsive">
        </div>
        <div class="col-md-6" id="column2_row_superior">
          <h1 class="text-center text-info">
            <b>STD-UNI-ATD</b>
          </h1>
        </div>
        <div class="col-md-3 text-center" id="column3_row_superior">
          <img src="/STDUNIATD/images/uni_640_480.jpg" class="center-block img-responsive">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row" id="row_medio">
        <div class="col-md-3 text-center" id="column1_row_medio">
          <div class="row">
            <div class="col-md-12">
              <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item" draggable="true">Vestibulum at eros</li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <form role="form">
                <div class="form-group">
                  <label class="control-label" for="exampleInputEmail1">Email address</label>
                  <input class="form-control" id="exampleInputEmail1"
                  placeholder="Enter email" type="email">
                </div>
                <div class="form-group">
                  <label class="control-label" for="exampleInputPassword1">Password</label>
                  <input class="form-control" id="exampleInputPassword1"
                  placeholder="Password" type="password">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 text-center" id="column2_row_medio">
          <div class="row">
            <div class="col-md-12" id="articulo">
              <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisici elit,
                <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                <br>Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur
                adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur
                adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" id="articulo">
              <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisici elit,
                <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" id="articulo">
              <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisici elit,
                <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" id="articulo">
              <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisici elit,
                <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 text-center" id="column3_row_medio">
          <div class="row">
            <div class="col-md-12 text-center">
              <form method="POST" action="verfecha.php">
                <input type="date" name="fecha" class="col-md-12" id="calendario" required="Ingrese la fecha de una actividad">
                <input class="btn btn-primary btn-sm col-md-12" id="fecha" draggable="true"
                type="submit" value="Ver actividades">
              </form>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p id="nota">Lorem ipsum dolor sit amet, consectetur adipisici elit,
                <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <ul class="pagination">
            <li>
              <a href="#">Prev</a>
            </li>
            <li>
              <a href="#">1</a>
            </li>
            <li>
              <a href="#">2</a>
            </li>
            <li>
              <a href="#">3</a>
            </li>
            <li>
              <a href="#">4</a>
            </li>
            <li>
              <a href="#">5</a>
            </li>
            <li>
              <a href="#">Next</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row" id="row_foot">
        <div class="col-md-12">
          <p class="text-center text-muted" id="texto_footer">STD-UNI-ATD</p>
        </div>
      </div>
    </div>
  </body>

</html>