
<?php

include "config/conexao.php";

$sql = "SELECT * FROM tb_produtos";

$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Lista de Produtos</h2>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Produto</th>
            <th>Categoria</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Imagem</th>
            <th>Ação</th>
        </tr>

        <?php while($produto = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>

        <tr>

            <td><?php echo $produto["id"]; ?></td>

            <td><?php echo htmlspecialchars($produto["nome_produto"]); ?></td>

            <td><?php echo htmlspecialchars($produto["categoria"]); ?></td>

            <td>R$ <?php echo $produto["preco"]; ?></td>

            <td><?php echo $produto["qtd"]; ?></td>

            <td>

                <?php if(!empty($produto["imagem"])) { ?>

                    <img
                        class="img-produto"
                        src="uploads/<?php echo htmlspecialchars($produto["imagem"]); ?>"
                        width="100"
                        alt="Imagem do produto">

                <?php } else { ?>

                    Sem imagem

                <?php } ?>

            </td>

            <td>

                <a href="Editar.php?id=<?php echo $produto["id"]; ?>">
                    Editar
                </a>

                <a href="Excluir.php?id=<?php echo $produto["id"]; ?>">
                    Excluir
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</body>
</html>
