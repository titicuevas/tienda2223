<?php



function conectar ()


{
    return new PDO('pgsql:localhost,dbname=tienda','tienda','tienda');

}

function hh($x)

{

    return htmlspecialchars($x, ENT_QUOTES | ENT_SUBSTITUTE);
}