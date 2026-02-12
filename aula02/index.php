<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO - Aula 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="anotacao">
        <span class="badge">Intermediário - Aula 02</span>
        <h2>O que é um Objeto?</h2>
        <p>Coisa material ou abstrata que pode ser percebida pelos sentidos e descrita por meio das suas <strong>características</strong>, <strong>comportamentos</strong> e <strong>estado atual</strong>.</p>

        <p>
            Vamos imaginar uma caneta. Quando o fabricante vai criar uma caneta, ele tem uma forma para criar todas as canetas, mudando apenas caracteristicas como cor e entre outros.
        </p>

        <p>Considerante este molde, eu sempre tenho que responder:</p>
        <ul>
            <li>Coisas que eu tenho</li>
            <li>coisas que eu faço</li>
            <li>Como eu estou agora</li>
        </ul>

        <h3>
            Coisas que eu tenho
        </h3>

        <ul>
            <li>Modelo</li>
            <li>Cor</li>
            <li>Ponta</li>
            <li>Carga</li>
            <li>Tampa</li>
        </ul>

        <h3>
            Coisas que eu faço
        </h3>
        <ul>
            <li>Escrever</li>
            <li>Rabiscar</li>
            <li>Pintar</li>
            <li>Tampar</li>
            <li>Destampar</li>
        </ul>

        <h3>
            Como eu estou agora
        </h3>
        <ul>
            <li>Tampada/Destampada</li>
            <li>Carregada/Descarregada</li>
        </ul>

        <div class="conceito-chave">
            Quando você tem um objeto, você normalmente tem estas três perguntas. E no <code>POO</code> estas perguntas tem nomes:
            <ul>
                <li>Atributos</li>
                <li>Métodos</li>
                <li>Estado</li>
            </ul>
        </div>

        <h3> O que preciso para criar um objeto</h3>

        <p>Antes de criar um objeto, precisamos criar um molde e este molde na POO é chamada de classe. Vamos classificar uma caneta</p>

        <pre>
            Classe Caneta
                modelo: caractere
                cor: caractere
                ponta: número real
                carga: número inteiro
                tampada: lógico

                Método rabiscar()
                    Se (tampada) entao 
                        Escreva("ERRO")
                    senao
                        Escreva("Rabiscar")
                    FimSe

                FimMetodo

                Método tampar()

                    tampada = verdadeiro

                FimMétodo

            FimClasse
        </pre>

        <p >
            Quando temos uma classe e queremos usar esta classe, damos o nome de <code>Instanciar</code>. É quando pego uma classe e gero um objeto a partir dela.
        </p>

        <p>Para instanciar é bem simples</p>
        <pre>
            caneta1 = nova Caneta
            caneta1.cor = "Azul"
            caneta1.ponta = 0.5
            caneta1.tampada = false
            
            caneta1.rabiscar()

            caneta1.tampar() //Agora caneta1.tampada é true

            caneta2 = nova Caneta
            caneta2.cor = "Vermelho"
        </pre>

        <h3>Pilares da POO: Abstração</h3>

        <div class="anotacao">
            A <strong>Abstração</strong> consiste em focar nos aspectos essenciais de um objeto para o contexto do sistema, ignorando detalhes desnecessários. É o processo de criar um "molde" (classe) que represente algo do mundo real de forma simplificada.
        </div>

        <div class="conceito-chave">
            💡 <strong>Abstração:</strong> Não é apenas listar atributos, mas selecionar apenas os que importam.
            <em>Exemplo:</em> Para um sistema de RH, a cor dos olhos de um Funcionário é irrelevante; para um sistema de Clínica de Estética, é essencial.
        </div>
        <p><strong>Elementos Fundamentais</strong></p>
        <span class="badge">Classe</span>
        <strong>Definição:</strong> O projeto ou molde que define atributos (dados) e métodos (comportamentos).

        <span class="badge">Objeto</span>
        <strong>Definição:</strong> A materialização da classe. É quando o "molde" ganha vida com dados específicos na memória.

        <h3>Atividades</h3>
        1 - Escrever 2 objetos e classifica-los.
        2 - Identifiqu dois objetos conceituais do seu dia-a-dia e classifique-os.

    </div>

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