<html>

<head>
    <meta charset="UTF-8">
    <title>Banco Tralala — Bonificações</title>
</head>

<body>
    <pre>
        <?php

        require_once 'autoload.php';

        use Alura\Banco\Model\Documento;
        use Alura\Banco\Model\Funcionario\Desenvolvedor;
        use Alura\Banco\Model\Funcionario\Gerente;
        use Alura\Banco\Service\ControladorDeBonificacoes;

        $docFunc1 = new Documento('656.656.656-65');
        $func1 = new Desenvolvedor($docFunc1, 'José Abreu', 2500);

        $docFunc2 = new Documento('121.212.121-22');
        $func2 = new Gerente($docFunc1, 'Isadora Silva', 15000);

        $controlador = new ControladorDeBonificacoes();
        $controlador->adicionaBonificacaoDe($func1);
        $controlador->adicionaBonificacaoDe($func2);

        print_r($func1);
        echo "<hr>";
        print_r($func2);
        echo "<hr>";
        echo $controlador->getTotalBonificacoes();

        ?>
    </pre>
</body>

</html>