<h2>Cadastro de Usuário</h2>

<form action="" method="post">
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>
    </div>
    <div>
        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="dataNasc">Data de Nascimento</label>
        <input type="date" name="dataNasc" id="dataNasc" required>
    </div>
    <div>
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>
    </div>

    <div>
        <label for="obs">Observações</label>
        <textarea name="obs" id="obs" placeholder="Diga alguma coisa do contato"></textarea>
    </div>

    <div>
        <input type="submit" value="Cadastrar">
    </div>

</form>
<?php
$msq = "";

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$dataNasc = $_POST['dataNasc'] ?? '';
$senha = $_POST['senha'] ?? '';
$obs = $_POST['obs'] ?? '';


if ($nome && $email && $dataNasc && $senha) {
    
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