<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrar></title>

    <style>
        .container {
            width: 400px;
            margin: 10 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;

        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Cadastro de novo cliente</h2>
        <form  method="post">
            <input type="text" name="nome" placeholder="informe o nome">
            <input type="text" name="numConta" placeholder="informe o numero da conta">
            <input type="number" name="saldo" placeholder="depósito mínimo de 50 R$">
            <input type="submit" value="Salvar" name="add">
            <input type="reset" name="limpar">
        </form>

    </div>
    <div class="voltar">
        <a href=""></a>
    </div>
    <?php
    include("./conta.php");
    if (isset($_POST["add"])) {
        if (
            !empty($_POST["nome"])
            &&  !empty($_POST["numConta"])
            &&  !empty($_POST["saldo"])
        ) {
            $nome  = $_POST["nome"];
            $numConta = $_POST["numConta"];
            $saldo = $_POST["saldo"];
            $obj=new Conta();
            $obj->setNome( $nome);
            $obj->setNumConta( $numConta);
            $obj->setSaldo($saldo );
            $obj->imprimirDados( );
            echo" <br> salvo com sucesso <br>";
            header("refresh:3,./index.php");
        } else {
            echo "Não deixe os campos em branco <br>";
        }
    }
    ?>
</body>

</html>