<html>

<head>

</head>

<body>

    <h1>reporte general</h1>
    <table>
        <thead>
            <tr>
                <th scope="col">Nro</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Marca</th>
                <th scope="col">Tipo</th>
                <th scope="col">Responsable</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ficha as $dato) { ?>
                <tr>
                    <th scope="row"><?php echo $dato->id_ficha ?></th>
                    <td><?php echo $dato->descripcion ?></td>
                    <td><?php echo $dato->marca ?></td>
                    <td><?php echo $dato->tipo ?></td>
                    <td><?php echo $dato->responsable ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>