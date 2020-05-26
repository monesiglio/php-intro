<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if ($idade >= 6 and $idade <= 12) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i]=='infantil'){
            echo "O competidor {$nome} compete na categoria {$categorias[$i]}";
        }
    }
} else if ($idade >= 13 and $idade <= 18) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adolecente') {
            echo "O competidor {$nome} compete na categoria {$categorias[$i]}";
        }
    }
} else if ($idade >= 19 and $idade <= 50) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            echo "O competidor {$nome} compete na categoria {$categorias[$i]}";
        }
    }
} else if ($idade >50) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'idoso') {
            echo "O competidor {$nome} compete na categoria {$categorias[$i]}";
        }
    }
}
