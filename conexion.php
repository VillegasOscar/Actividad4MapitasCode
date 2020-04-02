<?php

$host="localhost";
$port="5432";
$dbname="app";
$user="postgres";
$password="root";
 
// detalles de la conexion
$conn_string = "host=$host port=$port dbname=$dbname  user=$user password=$password options='--client_encoding=UTF8'";
 
// establecemos una conexion con el servidor postgresSQL
$dbconn = pg_connect($conn_string);
 
// Revisamos el estado de la conexion en caso de errores. 
if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
//echo "Conexión exitosa\n";
}
 
// Close connection
//pg_close($dbconn);
 
?>