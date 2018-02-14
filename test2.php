
<?php
    $fecha1 = $_POST['fecha1'];
    $fecha2 = $_POST['fecha2'];
    $fecha3 = $_POST['fecha3'];
    $fecha4 = $_POST['fecha4'];

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];

    if ($fecha1 < $fecha2)
    {
      if ($fecha2 < $fecha3)
      {
        if ($fecha3 < $fecha4)
        {
          $fecha1_final = sumasdiasemana($fecha1,$num1);
          echo "La nueva fecha 1 es: <strong>".$fecha1_final."</strong><br>";

          $fecha2_final = sumasdiasemana($fecha2,$num2);
          echo "La nueva fecha 2 es: <strong>".$fecha2_final."</strong><br>";

          $fecha3_final = sumasdiasemana($fecha3,$num3);
          echo "La nueva fecha 3 es: <strong>".$fecha3_final."</strong><br>";

          $fecha4_final = sumasdiasemana($fecha4,$num4);
          echo "La nueva fecha 4 es: <strong>".$fecha4_final."</strong><br>";
        }else
        {
          echo "La fecha del campo 4 debe ser mayor a la del campo 3 <br>";
          echo "<form><input type='button' value='VOLVER' name='VOLVER2' onclick='history.back()' /></form>";
        }
      }else
      {
        echo "La fecha del campo 3 debe ser mayor a la del campo 2 <br>";
        echo "<form><input type='button' value='VOLVER' name='VOLVER2' onclick='history.back()' /></form>";
      }
    }else
    {
      echo "La fecha del campo 2 debe ser mayor a la del campo 1 <br>";
      echo "<form><input type='button' value='VOLVER' name='VOLVER2' onclick='history.back()' /></form>";
    }

function sumasdiasemana($fecha,$dias)
{
	$fechainicio= strtotime($fecha);
	$suma = 15 * 86400;
	$diasemana = date('N',$fechainicio);
	$totaldias = $diasemana+$dias;
	$findesemana = intval( $totaldias/5) *2 ;
	$diasabado = $totaldias % 5 ;
	if ($diasabado==6) $findesemana++;
	if ($diasabado==0) $findesemana=$findesemana-2;

	$total = (($dias+$findesemana) * 86400)+$fechainicio ;
	return $resultado=date('d-m-Y', $total);
}


/*
if ($fecha1 <= $fecha2)
{
  if ($fecha2 <= $fecha3)
  {
    if ($fecha3 <= $fecha4)
    {

      $fecha1_nueva = strtotime($fecha1."+ $num1 days");
      echo "La nueva fecha 1 es: <strong>".date("l d-m-Y",$fecha1_nueva)."</strong><br>";

      $fecha2_nueva = strtotime($fecha2."+ $num2 days");
      echo "La nueva fecha 2 es: <strong>".date("l d-m-Y",$fecha2_nueva)."</strong><br>";

      $fecha3_nueva = strtotime($fecha3."+ $num3 days");
      echo "La nueva fecha 3 es: <strong>".date("l d-m-Y",$fecha3_nueva)."</strong><br>";

      $fecha4_nueva = strtotime($fecha4."+ $num4 days");
      echo "La nueva fecha 4 es: <strong>".date("l d-m-Y",$fecha4_nueva)."</strong><br>";

    }else
    {
      echo "La fecha del campo 4 debe ser mayor a la del campo 3 <br>";
    }
  }else
  {
    echo "La fecha del campo 3 debe ser mayor a la del campo 2 <br>";
  }
}else
{
  echo "La fecha del campo 2 debe ser mayor a la del campo 1 <br>";
}

}
*/
 ?>
