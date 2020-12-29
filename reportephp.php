


<?php

error_reporting(0);

  //  require 'base.php';

        // keep track post values

        //Primer campo
        $nombre = $_POST['nombre'];
        //Segundo campo
        $pApellido = $_POST['pApellido'];
        //Tercer campo
        $sApellido = $_POST['sApellido'];
        //Cuarto campo
        $edad = $_POST['edad'];
        //Quinto campo
        $incidente = $_POST['incidente'];
        //Sexto campo
        $municipio = $_POST['municipio'];
        //Septimo campo
        $localidad = $_POST['localidad'];
        //Octavo campo
        $calle= $_POST['calle'];


            $pdo = Base::connect();
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //persona
            $sql = "INSERT INTO persona (idDatosDenunciante, nombre, pApellido, sApellido, edad) VALUES (null,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($nombre,$pApellido,$sApellido,$edad));

            //Primera Pregunta
           $sqlP1 = "INSERT INTO Incidente (idIncidente, incidente) values(null,?)";
					  $qP1 = $pdo->prepare($sqlP1);
            $qP1->execute(array($incidente));

             //Segunda Pregunta
            $sqlP2 = "INSERT INTO Lugar (idlugar, municipio, localidad, colonia) values(null, ?, ?,?)";
             $qP2 = $pdo->prepare($sqlP2);
             $qP2->execute(array($municipio, $localidad,$calle));


?>
