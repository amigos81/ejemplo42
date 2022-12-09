<html>
    <head>
        <title>Registro ficha</title>
    </head>
    <body>
        <?php foreach($ficha as $dato){ ?>
        <table border=1 width="100%">
            <tr>
                <td rowspan=2>logo</td>
                <td><strong>FICHA TECNICA</strong></td>
            </tr>
            <tr>
                <td><strong>EQUIPO DE COMPUTO</strong></td>
            </tr>
        </table>
        <br>
        <table border=1 width="100%">
            <tr>
                <td colspan="4" align="center"> 1. DATOS GENERALES</td>
            </tr>
            <tr>
                <td>N° FICHA</td>
                <td>FECHA DE ELABORACION</td>
                <td colspan="2">DESCRIPCION DEL EQUIPO</td>
            </tr>
            <tr>
                <td><?php echo $dato->numero_ficha ?></td>
                <td></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>MARCA</td>
                <td>TIPO</td>
                <td colspan="2">CARACTERISTICAS RESALTANTE</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td colspan="2"></td>
            </tr>
        </table>
        <?php } ?>
    </body>
</html>