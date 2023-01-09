<div class="titulo">Desafio Palindromo</div>

<?php

function VerificaPalindromo($string)
{
    echo "Verificando se '$string' é um palindromo ... <br>";
    $reverseString = strrev(strtolower($string));
    $string = strtolower($string);
    if ($string === $reverseString) {
        return 'Result: true';
    } else {
        return 'Result: false';
    }
}

echo VerificaPalindromo('baab');


?>