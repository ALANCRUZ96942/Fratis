
    <!--  -->


<!DOCTYPE html>
<html>

<head>
    <!-- Archivo que incluye los meta links -->
    <?php include 'shared/meta_links.php'; ?>
</head>
<body >
</br>
</br>
</br>
</br>
</br>
<div class="columns is-variable is-1-mobile is-0-tablet is-3-desktop is-8-widescreen is-2-fullhd">

            <div class="column is-mobile is-one-third">

            </br>
            </br>
            </br>

                    <div class="column">
                      <div class="content has-text-centered pl-3 pr-5">
                              <label class="label is-size-2">REALIZA TU<br>  REPORTE</label>
                                  </div>
                </br>
                </br>
                </br>
                      <div class="content has-text-centered pl-3 pr-5">
                            <img src="img/ilus2.png" >
                      </div>
                    </div>
            </div>





    <div class="column is-two-thirds">

                    <div class="columns is-mobile">
                            <div class="column">
                                    <div>
                                        <label class="label has-text-weight-light	is-size-5">Nombre:</label>
                                    </div>
                                    <div class="control">
                                      <input class="input " type="text" placeholder="Nombre" name = "nombre" value="<?php echo !empty($nombre) ? $nombre : ''; ?>"  >
                                    </div>
                                    </br>
                          <div>
                              <label class="label has-text-weight-light	is-size-5">Segundo apellido:</label>
                          </div>
                          <div class="control">
                            <input class="input " type="text" placeholder="segundo apellido" name = "sApellido" value="<?php echo !empty($sApellido) ? $sApellido : ''; ?>">
                          </div>



                                </div>

                                    <div class="column">
                                              <div>
                                                  <label class="label has-text-weight-light	is-size-5">Primer apellido:</label>
                                              </div>
                                              <div class="control">
                                                <input class="input " type="text" placeholder="Apellido"  name = "pApellido" value="<?php echo !empty($pApellido) ? $pApellido : ''; ?>" >
                                              </div>
                                              </br>
                                              <div>
                                                  <label class="label has-text-weight-light	is-size-5">Edad:</label>
                                              </div>
                                              <div class="control">
                                                <input class="input " type="number" placeholder="Edad" name = "edad" value="<?php echo !empty($edad) ? $edad : ''; ?>" >
                                              </div>
                                    </div>
                          </div>


              <div class="column is-full">

                    <div>
                        <label class="label has-text-weight-light	is-size-5">Incidente:</label>
                    </div>
                    <div class="control">
                      <textarea required class="textarea " type="text" name="incidente" placeholder="Favor de relatar aquí una breve narrativa de los hechos." value="<?php echo !empty($incidente) ? $incidente : ''; ?>"></textarea>
                    </div>
              </div>
              <div class="columns is-mobile">
                           <div class="column">
                                <div>
                                    <label class="label has-text-weight-light	is-size-5">Municipio:</label>
                                </div>
                                <div class="control">
                                  <input class="input " type="text" placeholder="Municipio" name = "municipio" value="<?php echo !empty($municipio) ? $municipio : ''; ?>">
                                </div>

                            </div>

                            <div class="column">
                                      <div>
                                          <label class="label has-text-weight-light	is-size-5">Localidad o colonia:</label>
                                      </div>
                                      <div class="control">
                                        <input class="input " type="text" placeholder="Localidad o colonia" name = "localidad" value="<?php echo !empty($localidad) ? $localidad : ''; ?>"  >
                                      </div>
                            </div>
                  </div>

                  <div class="column">
                        <div>
                            <label class="label has-text-weight-light	is-size-5">Calle y número</label>
                        </div>
                        <div class="control">
                            <input class="input " type="text" placeholder="Localidad o colonia" name = "calle" value="<?php echo !empty($calle) ? $calle : ''; ?>"  >
                          </div>
                  </div>

                  <div class="column">
<div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q=16.561401220161667,%20-96.73239898447571+(Autem)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.mapsdirections.info/marcar-radio-circulo-mapa/">Marcar radio en el mapa</a></div>                  </div>

                  <div class="column">
                    <div class="form-actions content has-text-centered">
                        <button class="button is-rounded is-large" id="btnEnviar"  type="submit" name="submit">Finalizar reporte</button>
                    </div>
                  </div>
      </div>
  </div>



</br>
</br>
</br>
</br>
</br>




</body>


<script>
$("#btnEnviar").on("click", function() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 1500,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })

    Toast.fire({
        icon: 'success',
        title: 'Reporte enviado exitosamente'
    }).then((result) => {
        window.location.href = "index.php#reporte";
    })
});
</script>
</html>
