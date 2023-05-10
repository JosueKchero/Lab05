<?php
        $ventatotal=$_POST['total'];
        $númerodehijos=$_POST['hijos'];
        $sueldosincomision=$_POST['sincomision'];
        $bonificacion=$hijos*50;
        $comision=((7.5*$total)/100)+$bonificacion;
        $sueldobruto=$sueldosincomision+$comision;
        $descuento=(11*$sueldobruto)/100;
        $sueldoneto=($sueldobruto-$descuento)+$bonificacion;
        echo "Bonificacion total por hijos:     :".$bonificacion."<br>";
        echo "Descuento por la comision        :".$comision."<br>";
        echo "El sueldo bruto es     :".$sueldobruto."<br>"; 
        echo "El sueldo neto es       :".$sueldoneto."<br>";
        echo "Se descuenta        :".$descuento."<br>"; 
?>