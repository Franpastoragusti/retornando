<?php

    if (isset($_POST['payload'])) {
        
        //Obtener los datos de GitHub.
        $payload = json_decode($_POST['payload']);
        
        if ($payload->ref == "refs/heads/master") {
		
            //ejecutar el script del servidor.
            shell_exec('./deploy.sh');
        }
    }
    
?>