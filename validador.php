<?php

    $altura = $_POST['altura'];
    $edad = $_POST['edad'];
    $rechazo = $_POST['rechazo'];

    if ($altura >= 120 && $edad >= 16 && $rechazo == "si") {
        echo "Validación Exitosa. Le damos el ticket. ¡Disfrute de su viaje!";
      echo '<p><img src="./tiket.jpg" alt="Ticket de Entrada"></p>';
    } else {
        echo "No cumple con los requisitos.";
    }

?>