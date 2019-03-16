<!DOCTYPE html>
<html>
<head>
  <title>Registro - Examenes Especiales</title>

  <link type="text/css" rel="stylesheet" href="css/examespeciales.css"/>

  <link rel="stylesheet" type="text/css" href="css/examespeciales.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
  <form action="testt_db.php" method="post" name="form1">
    <center>
      <a><img src="imagenes/sistemas.png" style="width:250px; height:100px" title="LOGO SISTEMAS" alt="LOGO"></a>
      <h1>REGISTRO DE EXÁMENES ESPECIALES</h1>
      <h3>Por favor, revise bien los datos antes de completar el registro.</h3>

      <div class="container">
        <form action="examespeciales.php" method="post" accept-charset="utf-8" onsubmit="return valida_usuario();">
          <div class="row"><br>
            <div class="col-25">
              <label for="lmatricula">MATRICULA:</label>
              <label id="estatus"></label>
            </div>

            <div class="col-75">
              <input type="text" id="imatricula" name="imatricula" maxlength="10" placeholder="Ingrese su matricula">
            </div>

          </div>

          <div class="row"><br>
            <div class="col-25">
              <label for="lnombre">NOMBRE:</label>
            </div>

            <div class="col-75">
              <input type="text" id="inombre" name="inombre" placeholder="Ingrese su nombre" maxlength="30">
            </div>
          </div>

          <div class="row"><br>
            <div class="col-25">
              <label for="lnombre">CORREO:</label>
            </div>

            <div class="col-75">
              <input type="text" id="icorreo" pattern="^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$" name="icorreo" placeholder="Ingrese su correo" maxlength="30">
            </div>
          </div>

          <div class="row"><br>
            <div class="col-25">
              <label for="ltelefono">TELEFONO:</label>
            </div>

            <div class="col-75">
              <input type="text" id="itelefono" name="itelefono" pattern="[0-9]{10}" name="itelefono" placeholder="Ingrese su telefono" maxlength="10">
            </div>
          </div>

          <div class="row"><br>
            <div class="col-25">
              <label for="lnombre">GRADO:</label>
            </div>

            <div class="col-75">
              <select name="sgrado" id="sgrado">
                <option value="0">Seleccione grado:</option>
                <option value="1">1er Semestre</option>
                <option value="2">2do Semestre</option>
                <option value="3">3er Semestre</option>
                <option value="4">4to Semestre</option>
                <option value="5">5to Semestre</option>
                <option value="6">6to Semestre</option>
                <option value="7">7mo Semestre</option>
                <option value="8">8vo Semestre</option>
                <option value="9">9no Semestre</option>

              </select>
            </div>
          </div>
        <!--   <div class="row"><br>
            <div class="col-25">
              <label for="lnombre">PLAN:</label>
            </div>
            <div class="col-75">
                <select name="splan" id="splan">
                <option value="0">Seleccionar Plan</option>
                <option value="1"> Plan 827 </option>
                <option value="2"> Plan 828 </option>
                <option value="3"> Plan 820 </option>
                <option value="4"> Plan del 2004 </option>
                <option value="5"> Plan 851 </option>

              </select>
            </div>
          </div>-->

          <div class="row"><br>
            <div class="col-25">
              <label for="lnombre">CARRERA:</label>
            </div>
            <div class="col-75">
              <select name="scarrera" id="scarrera">
                <option value="0">Seleccionar Carrera</option>
                <option value="1"> Ingeniero en electronica y comunicaciones 828</option>
                <option value="2"> Ingeniero en sistemas computacionales 828</option>
                <option value="3"> Ingeniero industrial y de sistemas 828</option>
                <option value="4"> Ingeniero en tecnologias de informacion y comunicaciones 828</option>
                <option value="5"> Ingeniero en tecnologias de informacion y comunicaciones 828</option>
                <option value="6"> Licenciado en sistemas computacionales y administrativos 828</option>
                <option value="7"> Ingeniero automotriz 828</option>

              </select>
            </div>
          </div>

          <div class="row"><br>
            <div class="col-25">
              <label for="lnombre">MATERIAS:</label>
            </div>
            <div class="col-75">
              <select name="smaterias" id="smaterias">
                <option value="0">Seleccionar Materias</option>
                <option value="1"> Materia 1</option>
                <option value="2"> Materia 2</option>
                <option value="3"> Materia 3</option>
                <option value="4"> Materia 4</option>

              </select>
            </div>
          </div>

          <div class="row"><br>
            <div class="col-25">
              <label for="lnombre">ESTATUS:</label>
            </div>
            <div class="col-75">

              <select name="sestatus" id="sestatus">
                <option value="0">Seleccionar Estatus</option>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>

              </select>
            </div>
          </div>

          <div class="row"><br>
            <div class="col-100" >
              <label for="lobservaciones">OBSERVACIONES:</label>
              <br>
              <textarea rows="4" cols="50" name="comment"
              form="usrform" placeholder="Sus comentarios aqui..."></textarea>
            </div><br>
          </div>

          <div class="row">
            <div class="col-25">
              <div class="g-recaptcha" data-sitekey="6Le6F5EUAAAAAOV_EpHQx1OqNT6LND0iWd533EdL"></div><br>
            </div>
          </div>

          <div class ="row">
            <div class="col-25">
              <input id=ilimpiar  type="reset"  value="Limpiar">
            </div>

            <div class ="row">
              <div class="col-25">
                <input id=iingresar type="submit" value="Registrar">
              </div>
            </div>
          </div>
          <script src="js/examespeciales.js" type="text/javascript"></script>

        </center>
        <script src="js/examespeciales.js" type="text/javascript"></script>
      </form>
    </body>
    </html>
