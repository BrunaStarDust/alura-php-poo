<html>

<head>
    <meta charset="UTF-8">
    <title>Banco Tralala</title>
</head>

<body>
    <pre>
        <?php

        require_once 'autoload.php';

        use Alura\Banco\Model\Pessoa;
        use Alura\Banco\Model\Conta\Conta;
        use Alura\Banco\Model\Conta\ContaCorrente;
        use Alura\Banco\Model\Conta\ContaPoupanca;
        use Alura\Banco\Model\Conta\Titular;
        use Alura\Banco\Model\Documento;
        use Alura\Banco\Model\Endereco;
        use Alura\Banco\Model\Funcionario;

        //$p1 = new Pessoa('Teste', new Documento('787.787.787-78'));]

        $doc1 = new Documento('454.454.454-45');
        $end1 = new Endereco('Mauá', 'Nova Brasília', 'Rua ABC', '155');
        $t1 = new Titular($doc1, 'Moquidésia', $end1);
        $c1 = new ContaCorrente($t1);

        $doc2 = new Documento('787.787.787-77');
        $end2 = new Endereco('Santo André', 'Parque Central', 'Rua das Flores', '2223');
        $t2 = new Titular($doc2, 'Irineu', $end2);
        $c2 = new ContaPoupanca($t2);

        echo $t1->nome;
        //echo "<p>{$end1->__toString()}</p>";
        //echo "<p>{$t1->getNome()}</p>";

        // print_r($c1);
        // echo '<hr>';
        // print_r($c2);
        // echo '<hr>';
        // echo '<hr>';

        // $c1->deposita(1000);
        // print_r($c1);
        // echo '<hr>';
        // print_r($c2);
        // echo '<hr>';
        // echo '<hr>';

        // $c1->saca(121.34);
        // print_r($c1);
        // echo '<hr>';
        // print_r($c2);
        // echo '<hr>';
        // echo '<hr>';

        // $c1->transfere(500, $c2);
        // print_r($c1);
        // echo '<hr>';
        // print_r($c2);

        // $c2->saca(250);
        // print_r($c1);
        // echo '<hr>';
        // print_r($c2);

        ?>
    </pre>
</body>

</html>