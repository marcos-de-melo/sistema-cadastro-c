<h2>Lista de Usuários Cadastrados</h2>
<?php
$sql = "SELECT idUsuario, nomeUsuario, emailUsuario, date_format(dataNascUsuario, '%d/%m/%Y') as dataNascUsuario, obsUsuario FROM tbusuarios";

$resultado = mysqli_query($conn, $sql);
?>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Data de Nascimento</th>
            <th>Observações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($resultado)) {
            ?>
            <tr>
                <td><?php echo $row['idUsuario']; ?></td>
                <td><?php echo $row['nomeUsuario']; ?></td>
                <td><?php echo $row['emailUsuario']; ?></td>
                <td><?php echo $row['dataNascUsuario']; ?></td>
                <td><?php echo $row['obsUsuario']; ?></td>

            </tr>
            <?php
        }
        ?>
    </tbody>
</table>