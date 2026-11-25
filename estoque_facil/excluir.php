
<?php

include "config/conexao.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM tb_produtos WHERE id = ?";

    $stmt = $conexao->prepare($sql);

    if ($stmt->execute([$id])) {

        echo "Produto excluído com sucesso!";

    } else {

        echo "Erro ao excluir o produto.";

    }

} else {

    echo "ID do produto não informado.";

}

echo "<br><a href='listar.php'>Voltar para a lista de produtos</a>";

?>
 