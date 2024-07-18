<!DOCTYPE html>
<html>

<head>
    <!-- Título de la Página -->
    <title>Agregar Empleado | Sistema de Gestión de Empleados</title>

    <!-- CSS de íconos-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Fuente especial para las páginas-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- CSS de proveedores-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- CSS Principal-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <header>
        <nav>
            <h1>SGE</h1>
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">INICIO</a></li>
                <li><a class="homered" href="addemp.php">Agregar Empleado</a></li>
                <li><a class="homeblack" href="viewemp.php">Ver Empleado</a></li>
                <li><a class="homeblack" href="assign.php">Asignar Proyecto</a></li>
                <li><a class="homeblack" href="assignproject.php">Estado del Proyecto</a></li>
                <li><a class="homeblack" href="salaryemp.php">Tabla de Sueldos</a></li>
                <li><a class="homeblack" href="empleave.php">Licencia de Empleado</a></li>
                <li><a class="homeblack" href="alogin.html">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="divider"></div>

    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Información de Registro</h2>
                    <form action="process/addempprocess.php" method="POST" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Nombre" name="firstName" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Apellido" name="lastName" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="Correo Electrónico" name="email" required="required">
                        </div>
                        <p>Cumpleaños</p>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="FECHA DE NACIMIENTO" name="birthday" required="required">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">GÉNERO</option>
                                            <option value="Male">Masculino</option>
                                            <option value="Female">Femenino</option>
                                            <option value="Other">Otro</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Número de Contacto" name="contact" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="NID" name="nid" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Dirección" name="address" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Departamento" name="dept" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Título Académico" name="degree" required="required">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Salario" name="salary">
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="file" placeholder="archivo" name="file">
                        </div>

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- JS de Proveedores-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- JS Principal-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- fin del documento-->
