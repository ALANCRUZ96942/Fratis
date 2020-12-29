<!DOCTYPE html>
<html>

<head>
    <!-- Archivo que incluye los meta links -->
    <?php include 'shared/meta_links.php'; ?>
</head>

<body>
    <!-- div que contiene la barra de navegación  -->



           <!-- Box que contiene la descripción del grupo estudiantil -->
  <div id="nav-bar"></div>
      </br>
      </br>
            </br>
            </br>
          </br>
          </br>
                  </br>
                  </br>
    <img src="img/ilus1.png" >
    <div id="quienes"></div>
  </br>
  </br>
  </br>
  </br>
  </br>
    <div id="reporte"></div>
  </br>
  </br>
  </br>
  </br>
  </br>
    <div id="quejas"></div>
  </br>
  </br>
  </br>
  </br>
  </br>
    <div id="footer"></div>

</body>

<!-- Script que carga los archivos -->
<script>

    $("#quienes").load("quienes.php");
    $("#nav-bar").load("shared/navbar.php");
    $("#reporte").load("reporte.php");
    $("#quejas").load("quejas.php");

    $("#footer").load("shared/footer.php");
</script>

</html>
