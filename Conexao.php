<?php
/**
 * Description of Conexao
 *
 * @author Samuel
 */
class Conexao {


    var $servidor = "";
    var $user     = "";
    var $pass     = "";
    var $database = "Imagens";
    var $link;
    function conecta()
    {
        $link = mysqli_connect($this->servidor, $this->user, $this->pass, $this->database);

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }  else {
            echo '';
        }

    }

}
