<?php

        $message = $_POST['msg'];
        $headers = 'FROM : contact@corentinmace.com';


        mail('corentin.mace@ynov.com', 'Formulaire', $message, $headers);
        // header('location: http://corentinmace.com);

        ?>
