<?php

    if (isset($_POST['payload'])) {

        //Obtener los datos de GitHub.
        $payload = json_decode($_POST['payload']);

        if ($payload->ref == "refs/heads/master") {

            //ejecutar el script del servidor.
            shell_exec('./deploy.sh 2>&1',$output);
        }
        print_r($output);
    }else {
      print_r("hola");
    }

?>
