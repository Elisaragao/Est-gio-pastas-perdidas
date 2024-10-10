<!--<h1><?php //echo $minha_variavel; ?> </h1>
//<h1><?php //echo $var2; ?> </h1>-->

<style>
    
    body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 20px;
}

h1 {
    color: #333;
    text-align: center;
}

form {
    max-width: 400px; /* Limita a largura do formulário */
    margin: 0 auto; /* Centraliza o formulário */
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 20px; /* input redondo */
    margin-bottom: 15px;
    transition: border-color 0.3s;
}

input[type="text"]:focus {
    border-color: #ff6f61; /* cor ao focar */
    outline: none;
}

input[type="submit"] {
    background-color: #f4c2c2; /* rosa meio bege */
    color: #333;
    padding: 10px 15px;
    border: none;
    border-radius: 20px; /* botão redondo */
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
    width: 100%; /* Faz o botão ocupar a largura total do formulário */
}

input[type="submit"]:hover {
    background-color: #e0a1a1; /* cor ao passar o mouse */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    border: 4px solid #f4c2c2; /* Borda mais larga rosa meio bege */
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 20px;
}

h1 {
    color: #333;
    text-align: center;
}

table {
    width: 80%; /* Largura da tabela reduzida */
    max-width: 600px; /* Largura máxima para não ser muito grande */
    margin: 20px auto; /* Centraliza a tabela */
    border-collapse: collapse;
    border: 2px solid #f4c2c2; /* Borda mais fina rosa meio bege */
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

table {
    width: 80%; /* Largura da tabela reduzida */
    max-width: 600px; /* Largura máxima */
    margin: 20px auto; /* Centraliza a tabela */
    border-collapse: collapse;
    border: 2px solid #f4c2c2; /* Borda rosa meio bege */
    border-bottom: 4px solid #f4c2c2; /* Borda inferior mais pronunciada */
    border-radius: 10px 10px 0 0; /* Arredondar apenas o topo */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

thead {
    background-color: #f4c2c2; /* Rosa meio bege */
    color: #333;
}

th, td {
    padding: 12px; /* Ajuste no padding para uma tabela mais compacta */
    text-align: left;
}

th {
    font-weight: bold;
    font-size: 1.1em;
    border-bottom: 2px solid #f4c2c2; /* Borda inferior para o cabeçalho */
}

td {
    font-size: 0.95em;
    transition: background-color 0.3s;
}

tr:hover td {
    background-color: #f1b0b0; /* Cor ao passar o mouse */
}

tr:nth-child(even) {
    background-color: #f9f9f9; /* Linhas alternadas */
}

tr:nth-child(odd) {
    background-color: #ffffff; /* Linhas alternadas */
}

.botao {
    background-color: #f2c2d4; /* Rosa claro */
    color: #5a4b48; /* Cor de texto em um tom escuro, quase bege */
    border: 2px solid #d1a3b5; /* Bordas em um tom um pouco mais escuro */
    border-radius: 6px; /* Cantos arredondados */
    padding: 8px 16px; /* Espaçamento interno reduzido */
    font-size: 14px; /* Tamanho da fonte um pouco menor */
    cursor: pointer; /* Muda o cursor para uma mão */
    transition: background-color 0.3s, transform 0.2s; /* Efeito de transição */
}

.botao:hover {
    background-color: #e6b0c4; /* Cor de fundo muda ao passar o mouse */
    transform: scale(1.03); /* Levemente aumenta o botão ao passar o mouse */
}

.botao:active {
    transform: scale(0.95); /* Diminui o botão ao clicar */
}

</style>

<h1>Cadastro de Carros</h1>

<form action="<?php echo base_url('carros/index'); ?>" method="post">
    <label for="nome">Digite o nome do carro:</label>
    <input type="text" id="nome" name="nome" required>
    <br><br>

    <label for="marca">Digite a marca do carro:</label>
    <input type="text" id="marca" name="marca" required>
    <br><br>

    <input type="submit" value="Enviar">
</form>
        
        <h1>Listagem de dados</h1>
<table>
    <thead>
        <tr>
            <th> ID</th>
            <th> Nome</th>
            <th> Marca</th>
        </tr>
    </thead>
           
            
        <?php  foreach ($carros as $carro): ?>
            
        <tr>
            <td> <button type="submit" class="botao" name="botaoteste"> Apagar </button> <?php echo $carro->getID(); ?> </td>
            <td> <?php echo $carro->getNome(); ?> </td>
            <td> <?php echo $carro->getMarca(); ?> </td>
        </tr>
        
           

        <?php endforeach; ?>
 
     
</table>







