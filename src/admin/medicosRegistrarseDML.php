<?php
    session_start();
    //if (isset($_SESSION['nombre']))
?>
<html lang="es">
<head>
</head>
<body>
    <header>
    </header>
<?php
    include_once("CRegMedicosCollector.php");
    
    if (isset($_GET['tipoOperacion'])){
        $tipoOperacion = $_GET["tipoOperacion"];
        if ($tipoOperacion == 1){
            $codigoPersona = $_POST["txtCodPersona"];
            $especialidad= $_POST["txtEspecialidad"];
            $estado = $_POST["txtEstado"];
           
            $lobRegMedicosCollector = new CRegMedicosCollector();
            $lobRegMedicosCollector->insertREC($codigoPersona, $especialidad, $estado);
            echo "Registro Creado Exitosamente...";
        }
        if ($tipoOperacion == 2){
           $codigoPersona = $_POST["txtCodPersona"];
            $especialidad= $_POST["txtEspecialidad"];
            $estado = $_POST["txtEstado"];
            
            $lobRegMedicosCollector = new CRegMedicosCollector();
            $lobRegMedicosCollector->updateALL($codigoPersona, $especialidad, $estado);
            echo "Registro Actualizado Exitosamente...";
        }
        if ($tipoOperacion == 3){
            if (isset($_GET['id'])){
                $id = $_GET["id"];
                
            $lobRegMedicosCollector = new CRegMedicosCollector();
            $lobRegMedicosCollector->deleteREC($id);
                echo "Registro Eliminado Exitosamente...";
            }
            else
                echo "Registro a Eliminar No Recibido...";
        }
    }
    else
        echo "Tipo de Operación No Definida... Registro de Información No Exitoso!!!";
?>    
    <div><a href="medicosRegistrarse.php">Volver Administración de Registros</a></div>
</body>
</html>
