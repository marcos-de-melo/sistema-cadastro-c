<?php
$msq = "";

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$dataNasc = $_POST['dataNasc'] ?? '';
$senha = $_POST['senha'] ?? '';
$obs = $_POST['obs'] ?? '';
$acao = $_GET['acao'] ?? '';
$titulo = "Cadastro de Usuário";
$btnAcao = "Cadastrar";
if (isset($_GET['idUsuario']) && $acao == 'editar') {
    $titulo = "Editar Usuário";
    $btnAcao = "Editar";

    $idUsuario = $_GET['idUsuario'];
    $sql = "SELECT nomeUsuario, emailUsuario, dataNascUsuario, senhaUsuario, obsUsuario FROM tbusuarios WHERE idUsuario = $idUsuario";
    $resultado = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($resultado)) {
        $nome = $row['nomeUsuario'];
        $email = $row['emailUsuario'];
        $dataNasc = $row['dataNascUsuario'];
        $senha = $row['senhaUsuario'];
        $obs = $row['obsUsuario'];
    }
}
?>

<h2><?= $titulo ?></h2>

<form action="" method="post">
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?= $nome ?>" required>
    </div>
    <div>
        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email" value="<?= $email ?>" required>
    </div>
    <div>
        <label for="dataNasc">Data de Nascimento</label>
        <input type="date" name="dataNasc" id="dataNasc" value="<?= $dataNasc ?>" required>
    </div>
    <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" value="<?= $senha ?>" required>
    </div>

    <div>
        <label for="obs">Observações</label>
        <textarea name="obs" id="obs" placeholder="Diga alguma coisa do contato"><?= $obs ?></textarea>
    </div>

    <div>
        <input type="submit" value="<?= $btnAcao ?>">
    </div>

</form>
<?php



if ($nome && $email && $dataNasc && $senha && $obs && $acao != 'editar') {

    $sql = "INSERT INTO tbusuarios (nomeUsuario, emailUsuario, dataNascUsuario, senhaUsuario, obsUsuario) VALUES ('$nome', '$email', '$dataNasc', '$senha', '$obs')";
    $resultado = mysqli_query($conn, $sql);
    if ($resultado) {
        $msg = "Usuário cadastrado com sucesso!";
    } else {
        $msg = "Erro ao cadastrar usuário: " . mysqli_error($conn);
    }

} else {
    $msg = "Preencha todos os campos para cadastrar o usuário.";
}

echo $msg;
?>