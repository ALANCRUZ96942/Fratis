





<!DOCTYPE html>
<html>

<head>
    <!-- Archivo que incluye los meta links -->
    <?php include 'shared/meta_links.php'; ?>
</head>
<body>

  </br>
  </br>
  </br>
</br>
</br>
</br>
</br>
</br>
</br>

  <div class="content has-text-centered pl-3 pr-5">
      <h2 class"title is-1">
       QUEJAS Y SUGERENCIAS
     </br>
   </h2>
  </div>


  <div class="columns is-variable is-1-mobile is-0-tablet is-3-desktop is-8-widescreen is-2-fullhd">



    <div class="column is-centered">
      <div class="column is-full">

        <div>
            <label class="label has-text-weight-light	is-size-5">Nombre:</label>
        </div>
        <div class="control">
          <input class="input " type="text" placeholder="Nombre">
        </div>
      </div>

      <div class="column is-full">

        <div>
            <label class="label has-text-weight-light	is-size-5">Correo :</label>
        </div>
        <div class="control">
          <input class="input " type="text" placeholder="Correo">
        </div>
      </div>

      <div class="column is-full">

        <div>
            <label class="label has-text-weight-light	is-size-5">Asunto :</label>
        </div>
        <div class="control">
          <input class="input " type="text" placeholder="Asunto">
        </div>
      </div>

      <div class="column is-full">

                                      <div>
                                          <label class="label has-text-weight-light	is-size-5">Mensaje:</label>
                                      </div>
                                      <div class="control">
                                        <textarea required class="textarea " type="text" name="Mensaje" placeholder="Favor de colocar queja o sugerencia"></textarea>
                                      </div>
      </div>

      <div class="column">
        <div class="form-actions content has-text-centered">
            <button class="button is-rounded is-large" id="btnEnviar2"  type="submit" name="submit">Enviar</button>
        </div>
      </div>

    </div>






    </div>



        <div class="content has-text-centered pl-3 pr-5">
<img src="img/ilustracion.png" >
</div>










</body>
<script>
$("#btnEnviar2").on("click", function() {
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
        title: 'Queja enviada exitosamente'
    }).then((result) => {
        window.location.href = "index.php#quejas";
    })
});
</script>
</html>
