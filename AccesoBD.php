public static function subirDatos($valor, $tipo){
  $pArray = new stdClass();
  $fecha = date ('Y-m-d H:i:s');
  $sql= "INSERT INTO datos (type, value, date) VALUES ('{$tipo}','{$valor}','{$fecha}')";
  if (conexion::ejecuctarSQL($sql)) $pArray->code = '200';
  else $pArray->code = '300';
  return $pArray;
}
