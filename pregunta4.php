//se puede usar la funcion htmlspecialchars() que convierte los caracteres especiales en entidades de html. Esto ayuda a evitar ataques con codigo html o javascript

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">