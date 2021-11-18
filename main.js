function insertar()
{

}


function actualizar_id_cliente() 
{
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
      document.getElementById("idsclientes").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../getters/getIDcliente.php", true);
    xhttp.send();
}

function actualizar_id_Equipo(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
      document.getElementById("idsEquipo").innerHTML = this.responseText;
    }
    xhttp.open("GET","../getters/getIDEquipo.php", true);
    xhttp.send();
}

function actualizar_id_Grupo(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
      document.getElementById("idGrupo").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../getters/getIDGrupo.php", true);
    xhttp.send();
}

function actualizar_id_Logs(){
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() 
  {
    document.getElementById("idsLogs").innerHTML = this.responseText;
  }
  xhttp.open("GET", "../getters/getIDLogs.php", true);
  xhttp.send();
}

function actualizar_id_Miembro(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
      document.getElementById("idsMiembroEquipo").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../getters/getIDMiembro.php", true);
    xhttp.send();
}

function actualizar_id_Modalidad(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
      document.getElementById("idsModalidad").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../getters/getIDModalidad.php", true);
    xhttp.send();
}

function actualizar_id_proyecto(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
      document.getElementById("idProyecto").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../getters/getIDproyecto.php", true);
    xhttp.send();
}

function actualizar_id_usuario(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
      document.getElementById("idUsuario").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../getters/getIDUsuario.php", true);
    xhttp.send();
}

function actualizar_id_tarea(){
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() 
  {
    document.getElementById("idTarea").innerHTML = this.responseText;
  }
  xhttp.open("GET", "../getters/getIDTarea.php", true);
  xhttp.send();
}



function verClientes() 
{
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
        cliente=eval ("("+this.responseText+")");
        console.log(cliente);
        document.getElementById('Nombre_Cliente').value=cliente.nombre;
        document.getElementById('Descripcion_Cliente').value=cliente.descripcion;
        document.getElementById('Direccion_Cliente').value=cliente.dirrecion;
        document.getElementById('Contacto_Cliente').value=cliente.persona_contacto;
        document.getElementById('Notas_Cliente').value=cliente.notas;
    }
    url="../getters/getClientes.php?id="+document.getElementById('ID_clientes').value;
    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarCliente() 
{
    const xhttp = new XMLHttpRequest();
    
    nombre=document.getElementById('Nombre_Cliente').value;
    descripcion=document.getElementById('Descripcion_Cliente').value;
    personaContacto=document.getElementById('Contacto_Cliente').value;
    direccion=document.getElementById('Direccion_Cliente').value;
    notas=document.getElementById('Notas_Cliente').value;
    url="../inserts/insertarCliente.php?"
    url=url+"&nombre="+nombre;
    url=url+"&descripcion="+descripcion;
    url=url+"&direccion="+direccion;
    url=url+"&personaContacto="+personaContacto;
    url=url+"&notas="+notas;

    document.getElementById('Nombre_Cliente').value = "";
    document.getElementById('Descripcion_Cliente').value= "";
    document.getElementById('Contacto_Cliente').value= "";
    document.getElementById('Direccion_Cliente').value= "";
    document.getElementById('Notas_Cliente').value= "";

    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarEquipo() 
{
    const xhttp = new XMLHttpRequest();
    
    miembros=document.getElementById('miembros_equipo').value;
    proyecto_asignado=document.getElementById('ID_proyecto_equipo').value;
    url="../inserts/insertarEquipo.php?"
    url=url+"&numeroMiembros="+miembros;
    url=url+"&proyectoAsignado="+proyecto_asignado;

    document.getElementById('miembros_equipo').value = "";
    document.getElementById('ID_proyecto_equipo').value = "";
    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarGrupo() 
{
    const xhttp = new XMLHttpRequest();
    
    tareas=document.getElementById('numero_tareas_grupo').value;
    proyecto_asignado=document.getElementById('ID_proyecto_grupo').value;
    url="../inserts/insertarGrupoTareas.php?"
    url=url+"&numeroTareas="+tareas;
    url=url+"&proyectoAsignado="+proyecto_asignado;

    document.getElementById('numero_tareas_grupo').value = "";
    document.getElementById('ID_proyecto_grupo').value = "";
    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarLogs() 
{
    const xhttp = new XMLHttpRequest();
    
    fecha_registro=document.getElementById('Fecha_registro_log').value;
    descripcion=document.getElementById('Descripcion_log').value;
    tarifa_total=document.getElementById('Tarifa_Total_log').value;
    tarifa_hora=document.getElementById('Tarifa_Hora_log').value;
    fecha_hora_inicio=document.getElementById('Fecha_Hora_inicio_log').value;
    fecha_hora_final=document.getElementById('Fecha_hora_final_log').value;
    id_modalidad=document.getElementById('ID_Modalidad_log').value;
    id_proyecto=document.getElementById('ID_Proyecto_log').value;
    id_miembro=document.getElementById('ID_Miembro_log').value;
    url="../inserts/insertarLogs.php?"
    url=url+"&descripcion="+descripcion;
    url=url+"&fechaRegistro="+fecha_registro;
    url=url+"&tarifaTotal="+tarifa_total;
    url=url+"&totalHoras="+tarifa_hora;
    url=url+"&tieneM="+id_modalidad;
    url=url+"&contenidoProyecto="+id_proyecto;
    url=url+"&ordenados="+id_miembro;
    url=url+"&fechaHoraFin="+fecha_hora_inicio;
    url=url+"&fechaHoraInicio="+fecha_hora_final;

    document.getElementById('Fecha_registro_log').value = "";
    document.getElementById('Descripcion_log').value = "";
    document.getElementById('Tarifa_Total_log').value = "";
    document.getElementById('Tarifa_Hora_log').value = "";
    document.getElementById('Fecha_Hora_inicio_log').value = "";
    document.getElementById('Fecha_hora_final_log').value = "";
    document.getElementById('ID_Modalidad_log').value = "";
    document.getElementById('ID_Proyecto_log').value = "";
    document.getElementById('ID_Miembro_log').value = "";
    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarMiembro() 
{
    const xhttp = new XMLHttpRequest();
    
    id_usuario=document.getElementById('ID_usuarios_miembro').value;
    id_asignador=document.getElementById('ID_usuario_asigno_miembro').value;
    id_equipo=document.getElementById('ID_equipo_miembro').value;
    id_tarea_favorita.getElementById('ID_tarea_favorita_miembro').value;
    url="../inserts/insertarMiembroEquipo.php?"
    url=url+"&usuario="+id_usuario;
    url=url+"&asignar="+id_asignador;
    url=url+"&equipo="+id_equipo;
    url=url+"&tareaFavorita="+id_tarea_favorita;

    document.getElementById('ID_usuarios_miembro').value = "";
    document.getElementById('ID_usuario_asigno_miembro').value = "";
    document.getElementById('ID_equipo_miembro').value = "";
    document.getElementById('ID_tarea_favorita_miembro').value = "";
    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarModalidad() 
{
    const xhttp = new XMLHttpRequest();
    
    tipo=document.getElementById('Tipo_modalidad').value;
    url="../inserts/insertarModalidad.php?"
    url=url+"&tipo="+tipo;

    document.getElementById('Tipo_modalidad').value = "";
    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarProyecto() 
{
    const xhttp = new XMLHttpRequest();
    
    nombre=document.getElementById('Nombre_proyecto').value;
    tarifa_hora=document.getElementById('Tarifa_proyecto').value;
    descripcion=document.getElementById('Descripcion_proyecto').value;
    id_modalidad=document.getElementById('Modalidad_proyecto').value;
    id_cliente=document.getElementById('ID_cliente_proyecto').value;
    url="../inserts/insertarProyecto.php?"
    url=url+"&tarifaPorHora="+tarifa_hora;
    url=url+"&descripcion="+descripcion;
    url=url+"&nombre="+ nombre;
    url=url+"&modalidadAsignada="+id_modalidad;
    url=url+"&abiertoPor="+id_cliente;

    document.getElementById('Nombre_proyecto').value = "";
    document.getElementById('Tarifa_proyecto').value = "";
    document.getElementById('Descripcion_proyecto').value = "";
    document.getElementById('Modalidad_proyecto').value = "";
    document.getElementById('ID_cliente_proyecto').value = "";
    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarTarea() 
{
    const xhttp = new XMLHttpRequest();
    
    descripcion=document.getElementById('Descripcion_tarea').value;
    tarifa=document.getElementById('Tarifa_tarea').value;
    tipo=document.getElementById('Tipo_tarea').value;
    id_grupo.getElementById('ID_grupo_tarea').value;
    url="../inserts/insertarTarea.php?"
    url=url+"&descripcion="+tarifa_hora;
    url=url+"&tarifaHora="+descripcion;
    url=url+"&tipo="+ tipo;
    url=url+"&componeGrupo="+id_grupo;

    document.getElementById('Descripcion_tarea').value = "";
    document.getElementById('Tarifa_tarea').value = "";
    document.getElementById('Tipo_tarea').value = "";
    document.getElementById('ID_grupo_tarea').value = "";
    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarUsuarios() 
{
    const xhttp = new XMLHttpRequest();
    
    nombre=document.getElementById('Nombre_usuario').value;
    contrasena=document.getElementById('Contrasena_usuarios').value;
    Notas=document.getElementById('Notas_usuario').value;
    tarifa=document.getElementById('Tarifa_usuario').value;
    id_referencia=document.getElementById('ID_usuario_creador_usuario').value;
    fecha=document.getElementById('Fecha_creacion_usuario').value;
    perfil=document.getElementById('ID_perfil_usuario').value;
    url="../inserts/insertarUsuarios.php?"
    url=url+"&contrasena="+contrasena;
    url=url+"&nombre="+ nombre;
    url=url+"&notas="+ Notas;
    url=url+"&tarifaHora="+tarifa;
    url=url+"&id_referencia="+id_referencia;
    url=url+"&registroCreacion="+ fecha;
    url=url+"&tienePerfil="+perfil;

    document.getElementById('Nombre_usuario').value = "";
    document.getElementById('Contrasena_usuarios').value = "";
    document.getElementById('Notas_usuario').value = "";
    document.getElementById('Tarifa_usuario').value = "";
    document.getElementById('ID_usuario_creador_usuario').value = "";
    document.getElementById('Fecha_creacion_usuario').value = "";
    document.getElementById('ID_perfil_usuario').value = "";
    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarRegistroTarea() 
{
    const xhttp = new XMLHttpRequest();
    
    tarea=document.getElementById('ID_Tarea_Registro_Tareas').value;
    log=document.getElementById('ID_Log_Registro_Tareas').value;
    url="../inserts/insertarRegistroTareas.php?"
    url=url+"&perteneceLog="+log;
    url=url+"&perteneceTarea="+tarea;

    document.getElementById('ID_Tarea_Registro_Tareas').value = "";
    document.getElementById('ID_Log_Registro_Tareas').value = "";
    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarContieneTareas() 
{
    const xhttp = new XMLHttpRequest();
    
    tarea=document.getElementById('ID_Tarea_Contiene_Tarea').value;
    proyecto=document.getElementById('ID_Proyecto_Contiene_Tarea').value;
    url="../inserts/insertarContieneTareas.php?"
    url=url+"&tarea="+tarea;
    url=url+"&proyecto="+proyecto;

    document.getElementById('ID_Tarea_Contiene_Tarea').value = "";
    document.getElementById('ID_Proyecto_Contiene_Tarea').value = "";
    xhttp.open("GET", url , true);
    xhttp.send();
}

function insertarTrabajaProyecto() 
{
    const xhttp = new XMLHttpRequest();
    
    miembro=document.getElementById('ID_Miembro_Trabaja_Proyecto').value;
    proyecto=document.getElementById('ID_Proyecto_Trabaja_Proyecto').value;
    url="../inserts/insertarTrabajaProyecto.php?"
    url=url+"&miembroEquipo="+miembro;
    url=url+"&proyecto="+proyecto

    document.getElementById('ID_Miembro_Trabaja_Proyecto').value = "";
    document.getElementById('ID_Proyecto_Trabaja_Proyecto').value = "";
    xhttp.open("GET", url , true);
    xhttp.send();
}