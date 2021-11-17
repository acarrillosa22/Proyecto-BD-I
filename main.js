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
        paciente=eval ("("+this.responseText+")");
        document.getElementById('Nombre_Cliente').value=cliente.nombre;
        document.getElementById('Descripcion_Cliente').value=cliente.descripcion;
        document.getElementById('Direccion_Cliente').value=cliente.dirrecion;
        document.getElementById('Contacto_Cliente').value=cliente.persona_contacto;
        document.getElementById('Notas_Cliente').value=cliente.notas;
    }
    url="getters/getClientes.php?id="+document.getElementById('ID_clientes').value;
    xhttp.open("GET", url , true);
    xhttp.send();
}