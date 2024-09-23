<h1 class="text-light">Crear nueva Cita</h1>
<hr>
<form method="POST" action="./?controlador=citas&accion=crear">

<div class="mb-3">
    <label for="fecha" class="form-label text-light">Fecha para la cita</label>
    <input type="date" class="form-control" id="fecha" name="fecha">
</div>

<div class="mb-3">
    <label for="paciente" class="form-label text-light" >Id del paciente</label>
    <input class="form-control" id="paciente" name="paciente"/>
</div>
    
<div class="mb-3">
    <a class="btn btn-secondary" href="./?controlador=citas&accion=listado">Cancelar</a>
    <button  
    class="btn btn-success"  
    type="submit"  
    name="btn_registrar">Guardar</button>
</div>

</form>