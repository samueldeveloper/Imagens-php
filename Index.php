<!DOCTYPE html>
<!--
-->
<html>
    <head>
        <title>Imagens</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/blur.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
               $("#desfocar").click(function(){

               var caminho = $("#previsualizar").attr('src');
               alert(caminho);

                $('.card-image').backgroundBlur({
                    imageURL : caminho,
                    blurAmount : 50,
                    imageClass : 'bg-blur'
                 });
               $("#previsualizar").hide();
               });


            });



        </script>


    </head>
    <body>
        <div class="container">
            <div class="row">
                <form action="#" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="file-field input-field">
                            <input class="file-path validate" id="teste" type="text"/>
                          <div class="btn">
                            <span>Carregar</span>
                            <input id="foto" type="file" name="imagem"/>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn waves-effect waves-light" id="mostrar" type="submit" name="action">MOSTRAR
                            <i class="material-icons"></i>
                        </button>
                    </div>
                  </form>
            </div>
             <div class="row">
                <div class="col s12 m7">
                  <div class="card" style="width: 50%; height: 35%">
                      <div class="card-image">
                       <?php
                        if(isset($_POST['action'])){
                            include 'upload.php';
                        }
                        ?>
                    </div>

                    <div class="card-action">
                        <a id="desfocar" href="#">Desfocar</a>

                    </div>
                  </div>
                </div>
              </div>

        </div>

    </body>
</html>
