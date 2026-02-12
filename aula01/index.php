<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="anotacao">
        <span class="badge">Intermediário - Aula 01</span>
        <h2>POO - Programação Orientada a Objetos</h2>
        <p>O objetivo da programação orientada a objetos é aproximar o mundo digital do mundo real</p>
        
        <ul>
            <li>
                No passado, toda programação era em baixo nível. Cada programação dependia da forma com o computador lia as informações.
            </li>
            <li>
                Começaram a surgir comandos de alto núvel, mas ainda era muito limitadas, e as instruções era lineares.
            </li>
            <li>
                Isto tudo culminou na programação estruturada, que permitida pequenos pedaços de programação linear mas que poderiam ser organizados fora da ordem
            </li>
            <li>
                Com a evolução dos sistemas, foi necessário criar um conceito de linguagem diferente, pois a estruturada não daria conta de sistemas grandes, por isso surgiram as linguagem modulares
            </li>
            <li>
                A vida da linguagem modular durou muito pouco, pois logo chegou o paradigma da programação orientado a objetos.
            </li>

        </ul>
        <p class="tip">
            A POO foi idealizada e criada pelo <strong>Alan Kay</strong>
        </p>

        <div class="conceito-chave">
            <strong>Pilar de POO:</strong> O Encapsulamento define o que é público ou privado.
        </div>

        <pre>
            class Usuario {
                public $nome;
                private $senha;

                public function logar() {
                    // Lógica aqui
                }
            }
        </pre>

        <ul>
        <li><strong>Abstração:</strong> Esconder a complexidade.</li>
        <li><strong>Encapsulamento:</strong> Proteger os dados (<code>public</code>, <code>private</code>, <code>protected</code>).</li>
        <li><strong>Herança:</strong> Reutilizar código de classes pai.</li>
        <li><strong>Polimorfismo:</strong> Objetos diferentes respondendo à mesma mensagem.</li>
    </ul>

    <p>Mais detalhes na <a href="https://www.php.net/manual/pt_BR/language.oop5.php" target="_blank">Documentação Oficial</a>.</p>
    </div>
    
</body>
</html>