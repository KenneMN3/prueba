<!DOCTYPE html>
<html>

<head>
    <!-- Título de la Página -->
    <title>Asignar Proyecto | Panel de Admin | Sistema de Gestión de Empleados</title>

    <!-- CSS de iconos -->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Fuente especial para las páginas -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- CSS del proveedor -->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- CSS Principal -->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <header>
        <nav>
            <h1>EMS</h1>
            <ul id="navli">
                <li><a class="homeblack" href="aloginwel.php">INICIO</a></li>
                <li><a class="homeblack" href="addemp.php">Agregar Empleado</a></li>
                <li><a class="homeblack" href="viewemp.php">Ver Empleado</a></li>
                <li><a class="homered" href="assign.php">Asignar Proyecto</a></li>
                <li><a class="homeblack" href="assignproject.php">Estado del Proyecto</a></li>
                <li><a class="homeblack" href="salaryemp.php">Tabla de Salarios</a></li> 
                <li><a class="homeblack" href="empleave.php">Licencias de Empleados</a></li>
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
                    <h2 class="title">Asignar Proyecto</h2>
                    <form action="process/assignp.php" method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="ID del Empleado" name="eid" required="required">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Nombre del Proyecto" name="pname" required="required">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="Fecha de Vencimiento" name="duedate" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Asignar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- JS del proveedor -->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- JS Principal -->
    <script src="js/global.js"></script>

</body>

</html>
<!-- fin del documento -->

