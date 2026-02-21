<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 - Métodos Especiais</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="anotacao">
    <span class="badge">Intermediário - Aula 04</span>
    <h2>Métodos Especiais: Construct, Getters e Setters</h2>
    <p>Os métodos especiais servem para dar mais <strong>segurança</strong>, <strong>automação</strong> e <strong>organização</strong> ao nosso código ao manipular os atributos de um objeto.</p>

    <h3>1. O Método Construtor (<code>__construct</code>)</h3>
    <p>É o método que é executado <strong>automaticamente</strong> assim que você cria (instancia) um objeto. Ele serve para "preparar" o objeto, já definindo valores iniciais.</p>



    <ul>
        <li><strong>Vantagem:</strong> Você não precisa configurar atributo por atributo logo após criar o objeto.</li>
        <li><strong>Sintaxe:</strong> Em PHP, usa-se dois underlines: <code>public function __construct() { ... }</code></li>
    </ul>

    <h3>2. Getters e Setters (Os Seguranças)</h3>
    <p>Para manter o princípio da <strong>Encapsulação</strong>, geralmente protegemos nossos atributos (colocando-os como <code>private</code> ou <code>protected</code>). Para interagir com eles, usamos métodos especiais:</p>

    <ul>
        <li><strong>Getter (Pegar):</strong> Um método que <strong>retorna</strong> o valor de um atributo. Ex: <code>getCor()</code>.</li>
        <li><strong>Setter (Configurar):</strong> Um método que <strong>define ou altera</strong> o valor de um atributo. Ex: <code>setCor($c)</code>.</li>
    </ul>

    <div class="conceito-chave">
        💡 <strong>Por que usar Setters?</strong> Imagine um atributo <code>$ponta</code>. Com um Setter, você pode impedir que alguém defina o tamanho da ponta como "-5.0" (um valor impossível), adicionando uma validação dentro do método.
    </div>

    <h3>Exemplo Prático em PHP</h3>

    <pre>

    class Caneta {
    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;

    // MÉTODO CONSTRUTOR
    public function __construct($m, $c, $p) {
        $this->setModelo($m);
        $this->setCor($c);
        $this->setPonta($p);
        $this->tampar(); // Toda caneta nova já nasce tampada
    }

    // MÉTODOS GETTERS E SETTERS
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta($p) {
        // Exemplo de validação no Setter
        if ($p > 0) {
            $this->ponta = $p;
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    }

    // INSTANCIANDO COM O CONSTRUTOR
    $c1 = new Caneta("BIC", "Azul", 0.5);

    // USANDO O GETTER PARA EXIBIR
    echo "Eu tenho uma caneta " . $c1->getModelo();
    </pre>

    <div class="conceito-chave">
        <strong>Resumo da Ópera:</strong>
        <ul>
            <li><code>__construct</code>: Nasceu, executou.</li>
            <li><code>Getter</code>: Dá acesso ao valor (Aperta o "Play").</li>
            <li><code>Setter</code>: Controla a entrada do valor (O "Filtro").</li>
        </ul>
    </div>

    <h3>Atividades</h3>
    1 - Crie uma classe <strong>ContaBanco</strong> com o método construtor que define o status como "fechado" e o saldo como 0.<br>
    2 - Crie Getters e Setters para os atributos <code>dono</code> e <code>saldo</code>, garantindo que o saldo nunca seja negativo no Setter.

</div>


<?php
    require_once "Caneta.class.php";

    $caneta = new Caneta(modelo:"BIC", cor:"Vermelho", ponta:0.7);
    $caneta->setModelo("BIC");
    $caneta->setPonta(0.5);
    echo "Eu tenho uma caneta {$caneta->getModelo()} de ponta {$caneta->getPonta()}"

?>

</body>
</html>