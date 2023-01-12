<?php
    $nivel='../';
    include $nivel.'header.php';
?>



    <main>

        <div class="container-fluid col-md-8 col-sm-8 margin-top">
            <div class="wrapper padding-bottom">


                <form method="post" id="form_contacto" action="">
                    <div>
                        <h2 class="section seccion-titulo texto-negro">Creemos juntos...</h2>
                        <h3> Contáctame para iniciar tu proyecto de desarrollo web y haré que se vuelva realidad.</h3>
                    </div>
                    <div>
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" >
                       
                    </div>
                    <div>
                        <label for="correo" class="form-label">Correo</label>
                        <input require type="text"  class="form-control" id="correo" placeholder="Correo" >
                        
                    </div>
                    </div>

                    <div>
                        <label for="telefono" class="form-label">Telefono</label>
                        <input require type="text"  class="form-control" id="telefono" placeholder="Telefono" >    
                                          
                    </div>
                    <div>
                        <label>Mensaje</label>
                        <div class="ginput_container ginput_container_textarea"><textarea name="mensaje" id="mensaje"
                                class="textarea large form-control" tabindex="5" aria-invalid="false" rows="5"
                                cols="50"></textarea>
                        </div>
                    </div>

                    <div>
                        <button type="button" class="btn btn-secondary" id="btnEnviar">Enviar</button>
                        
                    </div>
                </form>
            </div>

        </div>


    </main>

<?php
  include $nivel.'footer.php';
?>