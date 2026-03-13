<h2>Lista de Usuários Cadastrados</h2>
<?php

// deleta usuário
if (isset($_GET['idUsuario']) && $_GET['acao'] == 'excluir') {
    $idUsuario = $_GET['idUsuario'];
    $sql = "DELETE FROM tbusuarios WHERE idUsuario = $idUsuario";
    mysqli_query($conn, $sql);
    header("Location: index.php?menu=lista");
}



$sql = "SELECT idUsuario, nomeUsuario, emailUsuario, 
dataNascUsuario, 
obsUsuario FROM tbusuarios";

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
            <th>Excluir</th>
            <th>Editar</th>
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
                <td><?php echo date_format(date_create($row['dataNascUsuario']), 'd/m/Y'); ?></td>
                <td><?php echo $row['obsUsuario']; ?></td>
                <td>
                    <a href="index.php?menu=lista&idUsuario=<?php echo $row['idUsuario']; ?>&acao=excluir">
                        <i class="ph ph-trash"></i>
                    </a>
                </td>
                <td>
                    <a href="index.php?menu=cadastro&idUsuario=<?php echo $row['idUsuario']; ?>&acao=editar">
                        <i class="ph ph-pencil-simple-line"></i>
                    </a>
                </td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>