<?php 

$servidor   = "localhost";
$user       = "root";
$pass       = "pdv010203#";
$base       = "cursodynne";

$ponte      = mysqli_connect("$servidor", "$user", "$pass", "$base");

// if ($ponte->ping()) {
//     printf("Conexão ok. ");
// } else {
//     if ($ponte->connect_errno) {
//         printf("Conexão falhou: %s\n", $ponte->connect_error);
//         exit();
//     }
// }

?>