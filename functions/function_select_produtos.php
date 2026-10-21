<?php

$sql = "SELECT * FROM produtos;";

$resultado = mysqli_query($conexao, $sql);

$resultado -> fetch_assoc();
