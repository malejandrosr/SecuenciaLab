<?php
if(!isset($_SESSION['codigo']) && ($_SESSION['estado'] != 'INICIO_SESION_PROFESOR' || $_SESSION['estado'] != 'INICIO_SESION_ALUMNO')) {
  header('Location: utileria/sesion/sesion.php');
}
?>

<!-- El modal para crear una clase -->
<div class="modal fade" id="modalCrearClase" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white">Crear una clase</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <!-- Modal body -->
            <form id="formCrearMateria" name="formCrearMateria" method="POST">
                <div id="mensajeCrearMateria"></div>
                <div class="modal-body">
                    <div class="alert alert-info text-justify" role="alert"> 
                        Aquí los profesores que impartan materias pueden crear sus secciones.
                        Todos los campos con (*) son obligatorios.
                    </div>

                    <div class="form-group">
                        <label for="nombreClase">Nombre de la clase *</label>
                        <input type="text" class="form-control" id="nombreClase" name="nombreClase"  placeholder="Ej. Laboratorio de Control Secuencial" required="required">
                    </div>

                    <div class="form-group">
                        <label for="nrcClase">NRC *</label>
                        <input type="number" class="form-control" id="nrcClase" name="nrcClase" placeholder="Ej. 46259" min=1 required="required">
                    </div>

                    <div class="form-group">
                        <label for="seccionClase">Sección *</label>
                        <input type="text" class="form-control" id="seccionClase" name="seccionClase" placeholder="Ej. D01" required="required">
                    </div>

                    <div class="form-group">
                        <label for="materiaClase">Materia *</label>
                        <input type="text" class="form-control" id="materiaClase" name="materiaClase" placeholder="Ej. Control Secuencial" required="required">
                    </div>

                    <div class="form-group">
                        <label for="aulaClase">Aula *</label>
                        <input type="text" class="form-control" id="aulaClase" name="aulaClase"  placeholder="Ej. X-25" required="required">
                    </div>

                    <!-- ESTO PODRIA DEJARSE COMO TEXTO Y VALIDARLO CON UN PATRON O USAR UN DATEPICKER -->
                    <div class="form-group">
                        <label for="anoClase">Año *</label>
                        <div class="input-group">
                            <input type="date" class="form-control" id="anoClase" name="anoClase" placeholder="Ej. 2019">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cicloEscolarClase">Ciclo escolar *</label>
                        <select id="cicloEscolarClase" name="cicloEscolar" class="custom-select">
                            <option value="">Seleccionar...</option>
                            <option value="clicloA">A</option>
                            <option value="clicloB">B</option>
                            <option value="clicloV">V</option>
                        </select>
                    </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar <i class="fas fa-times-circle"></i> </button>
                    <button type="submit" class="btn btn-primary">Crear <i class="fas fa-check-circle"></i> </button>
                </div>
            </form>
        </div>
    </div>
</div>