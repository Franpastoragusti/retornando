<?php


        //Obtener los datos de GitHub.
        $payload = json_decode(file_get_contents('php://input'));

        if ($payload->ref == "refs/heads/master") {

            //ejecutar el script del servidor.
            shell_exec('deploy.sh 2>&1',$output);
            if (isset($output)) {
              print_r("hay output")
            }
            print_r($output);
            print_r("bien");
        }else {
          print_r($output);
          print_r("mal");
        }


?>
