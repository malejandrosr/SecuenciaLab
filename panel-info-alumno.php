<!DOCTYPE html>
<html lang="es">
<head>
  <title>Usando highcharts </title>
  <meta charset="utf-8" />
  <?php include('utileria/encabezados/encabezado-js.php'); ?>
  <?php include('utileria/encabezados/encabezado-css.php'); ?>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="http://code.highcharts.com/modules/exporting.js"></script>
  <!-- optional -->
  <script src="http://code.highcharts.com/modules/offline-exporting.js"></script>
  <script src="http://code.highcharts.com/modules/export-data.js"></script>
  <style type="text/css">
    p {
    margin-top: 0;
    margin-bottom: 0rem;
    }
  </style>
</head>
<body>

  <ul class="list-group" id="listgroup22" name="listgroup22">
    <li class="list-group-item active disabled">Lista de alumnos</li>
    <button type="button" class="list-group-item list-group-item-action">DATOS GENERALES</button>
  </ul>


  <script>
  document.addEventListener('DOMContentLoaded', function () {
    var myChart = Highcharts.chart('container', {
      chart: {
        type: 'column'
      },
      title: {
        text: 'Practica #1: TRatmiento de un motor '
      },
      xAxis: {
        categories: ['Categorias']
      },
      yAxis: {
        title: {
          text: 'Puntuación'
        }
      },
      credits: false,
      series: [{
        name: 'Alumno',
        data: [95]
      }, {
        name: 'Mínimo',
        data: [60]
      }, {
        name: 'Máximo',
        data: [100]
      }, {
        name: 'Promedio',
        data: [87]
      }, {
        name: 'Media',
        data: [77]
      }, {
        name: 'Moda',
        data: [85]
      }]
    });
  });
</script>

<button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#modalEvaluarClase">
  Evaluar materia <i class="fas fa-edit"></i>
</button>
<!--<a class="dropdown-item" href="#" data-toggle="modal" data-target="#modalEvaluarClase"> <i class="fas fa-users"></i> Unirse a una clase</a>-->

<div class="card" id="info-alumno-datos-clase" name="info-alumno-datos-clase">
  <h5 class="card-header">Datos de la clase</h5>
  <div class="card-body">
    <p class="card-text"><b>Clase:</b> LABORATORIO DE CONTROL SECUENCIAL</p>
    <p class="card-text"><b>Materia:</b> CONTROL SECUENCIAL</p>
    <p class="card-text"><b>Sección:</b> D01</p>
    <p class="card-text"><b>Ciclo:</b> 2019 B</p>
    <p class="card-text"><b>Clave de acceso:</b> vtdVjgoSc7</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card" id="info-alumno-datos-alumno" name="info-alumno-datos-alumno">
  <h5 class="card-header">Datos del alumno</h5>
  <div class="card-body">
    <p class="card-text"><b>Nombre:</b> Castillo Serrano Cristian Michell</p>
    <p class="card-text"><b>Código:</b> A215861738</p>
    <p class="card-text"><b>Promedio:</b> 89.6</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" id="info-alumno-listado-practicas" name="info-alumno-listado-practicas">
  <h5 class="card-header">Listado de practicas</h5>
  <div class="card-body">
    <ul class="list-group" style="height: 300px; overflow-y: auto;" id="listado-practicas-info" name="listado-practicas-info">
      <li class="list-group-item active disabled">Lista de prácticas</li>
      <button type="button" class="list-group-item list-group-item-action">Promedio</button>
      <button type="button" class="list-group-item list-group-item-action">Todas las prácticas</button>
      <button type="button" class="list-group-item list-group-item-action">Práctica #1: Control sencuencial chido</button>
      <button type="button" class="list-group-item list-group-item-action">Práctica #2: Control sencuencial chido</button>
      <button type="button" class="list-group-item list-group-item-action">Práctica #3: Control sencuencial chido</button>
      <button type="button" class="list-group-item list-group-item-action">Práctica #4: Control sencuencial chido</button>
    </ul>
  </div>
</div>
<div class="card" id="info-alumno-grafica-practica" name="info-alumno-grafica-practica">
  <h5 class="card-header">Datos y estadísticas de la práctica</h5>
  <div class="card-body">
    <p class="card-text"><b>Descripción:</b> knasjkjdajkñdkjlaskmlkmlsadkmldsklm</p>
    <div id="container" style="width:100%; height:400px;"></div>
  </div>
</div>

<!-- El modal para editar una practica -->
<div class="modal fade" id="modalEvaluarClase" name="modalEvaluarClase" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h4 class="modal-title text-white">Evaluar clase</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form id="formEvaluarClase" name="formEvaluarClase" method="POST">
        <div class="modal-body">
          <div class="alert alert-info text-justify" role="alert">
            En está sección se realiza la evalución de la clase.
            Estos datos son de suma importancia para mejorar la calidad del curso y del aprendisaje obtenido.
          </div>

          <div class="form-group">
            <label for="editarNombrePractica">Calidad del contenido</label>
            <div class="form-group">
              <input type="range" class="custom-range" min="0" max="100" step="1" id="evalCalidadCont" name="evalCalidadCont">
              <!--<span class="font-weight-bold blue-text mr-2 mt-1"><i class="fas fa-thumbs-down" aria-hidden="true"></i></span>
              <span class="font-weight-bold blue-text ml-2 mt-1"><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>-->
            </div>
          </div>
          <div class="form-group">
            <label for="editarNombrePractica">Claridad del contenido</label>
            <div class="form-group">
              <input type="range" class="custom-range" min="0" max="100" step="1" id="evalClaridadCont" name="evalClaridadCont">
              <!--<span class="font-weight-bold blue-text mr-2 mt-1"><i class="fas fa-thumbs-down" aria-hidden="true"></i></span>
              <span class="font-weight-bold blue-text ml-2 mt-1"><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>-->
            </div>
          </div>
          <div class="form-group">
            <label for="editarNombrePractica">Cantidad del contenido</label>
            <div class="form-group">
              <input type="range" class="custom-range" min="0" max="100" step="1" id="evalCantidadCont" name="evalCantidadCont">
              <!--<span class="font-weight-bold blue-text mr-2 mt-1"><i class="fas fa-thumbs-down" aria-hidden="true"></i></span>
              <span class="font-weight-bold blue-text ml-2 mt-1"><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>-->
            </div>
          </div>

          <div class="form-group">
            <label for="editarNombrePractica">Calidad del material de apoyo</label>
            <div class="form-group">
              <input type="range" class="custom-range" min="0" max="100" step="1" id="evalCalidadMatApoyo" name="evalCalidadCont">
              <!--<span class="font-weight-bold blue-text mr-2 mt-1"><i class="fas fa-thumbs-down" aria-hidden="true"></i></span>
              <span class="font-weight-bold blue-text ml-2 mt-1"><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>-->
            </div>
          </div>
          <div class="form-group">
            <label for="editarNombrePractica">Claridad del material de apoyo</label>
            <div class="form-group">
              <input type="range" class="custom-range" min="0" max="100" step="1" id="evalClaridadMatApoyo" name="evalClaridadCont">
              <!--<span class="font-weight-bold blue-text mr-2 mt-1"><i class="fas fa-thumbs-down" aria-hidden="true"></i></span>
              <span class="font-weight-bold blue-text ml-2 mt-1"><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>-->
            </div>
          </div>
          <div class="form-group">
            <label for="editarNombrePractica">Cantidad del material de apoyo</label>
            <div class="form-group">
              <input type="range" class="custom-range" min="0" max="100" step="1" id="evalCantidadMatApoyo" name="evalCantidadCont">
              <!--<span class="font-weight-bold blue-text mr-2 mt-1"><i class="fas fa-thumbs-down" aria-hidden="true"></i></span>
              <span class="font-weight-bold blue-text ml-2 mt-1"><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>-->
            </div>
          </div>
          <div class="form-group">
            <label for="editarNombrePractica">Ayuda en el aprendizaje del simulador de control secuencial</label>
            <div class="form-group">
              <input type="range" class="custom-range" min="0" max="100" step="1" id="evalSimulador" name="evalClaridadCont">
              <!--<span class="font-weight-bold blue-text mr-2 mt-1"><i class="fas fa-thumbs-down" aria-hidden="true"></i></span>
              <span class="font-weight-bold blue-text ml-2 mt-1"><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>-->
            </div>
          </div>
          <div class="form-group">
            <label for="editarNombrePractica">Facilidad de utilización simulador de control secuencial</label>
            <div class="form-group">
              <input type="range" class="custom-range" min="0" max="100" step="1" id="evalFacilidadSimulador" name="evalCantidadCont">
              <!--<span class="font-weight-bold blue-text mr-2 mt-1"><i class="fas fa-thumbs-down" aria-hidden="true"></i></span>
              <span class="font-weight-bold blue-text ml-2 mt-1"><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>-->
            </div>
          </div>
          <div class="form-group">
            <label for="editarNombrePractica">¿Cuanto aprendió?</label>
            <div class="form-group">
              <input type="range" class="custom-range" min="0" max="100" step="1" id="evalAprendizaje" name="evalCantidadCont">
              <!--<span class="font-weight-bold blue-text mr-2 mt-1"><i class="fas fa-thumbs-down" aria-hidden="true"></i></span>
              <span class="font-weight-bold blue-text ml-2 mt-1"><i class="fas fa-thumbs-up" aria-hidden="true"></i></span>-->
            </div>
          </div>
          <!--<div class="container">
          <h1>Bootstap Slider Sample Project</h1>
          <p>This is a sample project for bootstrap slider</p>
          <input id="ex13" name="ex13" type="text"/>
          <script>
          // With JQuery
          $("#ex13").slider({
          ticks: [0, 20, 40, 60, 80, 100],
          ticks_labels: ['Nada claro', 'Poco claro', 'Claro', 'Muy claro', 'Clarisimo',"sepa"],
          ticks_snap_bounds: 1,
          orientation: 'horizontal',
          value: 20,
          handle: 'triangle'
        });
      </script>
    </div>-->
  </div>


  <!-- Modal footer -->
  <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i> </button>
    <button type="submit" class="btn btn-primary">Finalizar <i class="fas fa-save"></i> </button>
  </div>
</form>
</div>
</div>
</div>

<!--<div class="container" style="margin-top: 60px">
  <form class="well col-xs-6 col-xs-offset-3">
    <div class="form-group">
      <label id="commentTitle" for="comment">Comment:</label>
      <textarea   class="form-control" rows="5" id="comment" name="comment"></textarea>
    </div>
    <button type="button" class="btn btn-primary " id="btn22" name="btn22">submit</button>
  </form>
</div>-->

</body>
</html>
