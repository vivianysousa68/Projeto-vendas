<?php
// Número do WhatsApp 
$telefone = "5583996012074";

// Função para gerar link do WhatsApp (usada só no PHP, não para o carrinho)
function gerarLink($telefone, $produto, $preco){

    $mensagem = "Olá, quero comprar:\n";
    $mensagem .= "Produto: $produto\n";
    $mensagem .= "Preço: R$ $preco";

    return "https://wa.me/$telefone?text=" . urlencode($mensagem);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delicias da Vih</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* Estilo do carrinho fixo no canto */
        #carrinho {
            position: fixed;
            right: 20px;
            top: 100px;
            width: 280px;
            max-height: 400px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.25);
            padding: 15px;
            overflow-y: auto;
            font-family: Arial, sans-serif;
            z-index: 9999;
        }
        #carrinho h2 {
            margin-top: 0;
            font-size: 1.2rem;
            text-align: center;
            color: #6a5acd;
        }
        #carrinho ul {
            list-style: none;
            padding: 0;
            margin: 10px 0;
        }
        #carrinho li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 6px 0;
            border-bottom: 1px solid #0f0c0c;
        }
        #carrinho li button {
            border: none;
            background: transparent;
            color: red;
            font-weight: bold;
            cursor: pointer;
        }
        #carrinho .total {
            font-weight: bold;
            text-align: right;
            margin-top: 10px;
            font-size: 1.1rem;
            color: #333;
        }
        #carrinho a button {
            width: 100%;
            margin-top: 10px;
            background: #a244a5;
            color: white;
            font-weight: 700;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
            border: none;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
        #carrinho a button:hover {
            background-color: #721da3;
        }
    </style>
</head>
<body>

<h1 style="text-align:center;">🛒 Delícias da Vih</h1>

<div class="container">

    <!-- PRODUTO 1 -->
    <div class="produto" data-nome="Bolo Piscina" data-preco="40.00">
        <img src="imagem/1.jpg" alt="Bolo Piscina">
        <h3>Bolo Piscina</h3>
        <p>R$ 40,00</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 2 -->
    <div class="produto" data-nome="Cookies" data-preco="7.00">
        <img src="imagem/2.jpg" alt="Cookies">
        <h3>Cookies</h3>
        <p>R$ 7,00</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 3 -->
    <div class="produto" data-nome="Copo Supremo" data-preco="20.00">
        <img src="imagem/3.jpg" alt="Copo Supremo">
        <h3>Copo Supremo</h3>
        <p>R$ 20,00</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 4 -->
    <div class="produto" data-nome="Mousses" data-preco="10.00">
        <img src="imagem/4.jpg" alt="Mousses">
        <h3>Mousses</h3>
        <p>R$ 10,00</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 5 -->
    <div class="produto" data-nome="Petit Gateau" data-preco="20.00">
        <img src="imagem/5.jpg" alt="Petit Gateau">
        <h3>Petit Gateau</h3>
        <p>R$ 20,00</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 6 -->
    <div class="produto" data-nome="Brigadeiro" data-preco="2.50">
        <img src="imagem/6.jpg" alt="Brigadeiro">
        <h3>Brigadeiro</h3>
        <p>R$ 2,50</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 7 -->
    <div class="produto" data-nome="Brigadeiro de ninho" data-preco="5.00">
        <img src="imagem/7.jpg" alt="Brigadeiro de ninho">
        <h3>Brigadeiro de ninho</h3>
        <p>R$ 5,00</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 8 -->
    <div class="produto" data-nome="Dois amores" data-preco="2.50">
        <img src="imagem/8.jpg" alt="Dois amores">
        <h3>Dois amores</h3>
        <p>R$ 2,50</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 9 -->
    <div class="produto" data-nome="Beijinho" data-preco="2.50">
        <img src="imagem/9.jpg" alt="Beijinho">
        <h3>Beijinho</h3>
        <p>R$ 2,50</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 10 -->
    <div class="produto" data-nome="Delícia de abacaxi" data-preco="12.00">
        <img src="imagem/10.jpg" alt="Delícia de abacaxi">
        <h3>Delícia de abacaxi</h3>
        <p>R$ 12,00</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 11 -->
    <div class="produto" data-nome="Bolo no Pote" data-preco="10.00">
        <img src="imagem/11.jpg" alt="Bolo no Pote">
        <h3>Bolo no Pote</h3>
        <p>R$ 10,00</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 12 -->
    <div class="produto" data-nome="Browniw Recheado" data-preco="12.00">
        <img src="imagem/12.jpg" alt="Browniw Recheado">
        <h3>Browniw Recheado</h3>
        <p>R$ 12,00</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

    <!-- PRODUTO 13 -->
    <div class="produto" data-nome="Cone Recheado" data-preco="12.00">
        <img src="imagem/13.jpg" alt="Cone Recheado">
        <h3>Cone Recheado</h3>
        <p>R$ 12,00</p>
        <button class="add-carrinho">Adicionar ao carrinho</button>
    </div>

</div>

<!-- Área do Carrinho -->
<div id="carrinho">
    <h2>Carrinho</h2>
    <ul id="lista-carrinho"></ul>
    <div class="total">Total: R$ <span id="total">0,00</span></div>
    <a href="#" id="finalizar-pedido" target="_blank" style="display:none;">
        <button>Finalizar Pedido</button>
    </a>
</div>

<script>
    const carrinho = [];
    const listaCarrinho = document.getElementById('lista-carrinho');
    const totalEl = document.getElementById('total');
    const finalizarPedido = document.getElementById('finalizar-pedido');
    const telefone = "<?php echo $telefone ?>";

    function formatarPreco(preco) {
        return preco.toFixed(2).replace('.', ',');
    }

    function atualizarCarrinho() {
        listaCarrinho.innerHTML = '';
        let total = 0;

        carrinho.forEach((item, index) => {
            const li = document.createElement('li');
            li.textContent = `${item.nome} - R$ ${formatarPreco(item.preco)}`;

            const btnRemove = document.createElement('button');
            btnRemove.textContent = 'X';
            btnRemove.title = 'Remover do carrinho';
            btnRemove.onclick = () => {
                carrinho.splice(index, 1);
                atualizarCarrinho();
            };

            li.appendChild(btnRemove);
            listaCarrinho.appendChild(li);

            total += item.preco;
        });

        totalEl.textContent = formatarPreco(total);

        if(carrinho.length > 0){
            finalizarPedido.style.display = 'block';
            let mensagem = "Olá, quero comprar:%0A";
            carrinho.forEach((item) => {
                mensagem += `- ${item.nome} - R$ ${formatarPreco(item.preco)}%0A`;
            });
            mensagem += `Total: R$ ${formatarPreco(total)}`;

            finalizarPedido.href = `https://wa.me/${telefone}?text=${mensagem}`;
        } else {
            finalizarPedido.style.display = 'none';
            finalizarPedido.href = '#';
        }
    }

    document.querySelectorAll('.add-carrinho').forEach(botao => {
        botao.addEventListener('click', () => {
            const produtoElem = botao.closest('.produto');
            const nome = produtoElem.getAttribute('data-nome');
            const preco = parseFloat(produtoElem.getAttribute('data-preco'));

            carrinho.push({nome, preco});
            atualizarCarrinho();
        });
    });

    atualizarCarrinho();
</script>

</body>
</html>
