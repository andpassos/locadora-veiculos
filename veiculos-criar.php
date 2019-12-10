<?php 
require_once 'classes/Veiculo.php';
require_once 'cabecalho.php'; 

require_once 'classes/Categoria.php';
$categoria = new Categoria();
$lista_categotira = $categoria->listar();

?>
<h2>Cadastrar novo Veículo</h2>

<form name="novo-veiculo" method="post" action="veiculos-criar-post.php">
    Descrição do Veículo:
    <input name="placa" maxlenght="8" placeholder="Placa">
    <input name="fabricante" maxlenght="50" placeholder="Fabricante">
    <input name="modelo" maxlenght="15" placeholder="Modelo">
    <select name="categoria" >
        <?php foreach ($lista_categotira as $linha){?>
        <option> <?php echo $linha['descricao'];?></option>

        <?php } ?>
    <input name="cor" maxlenght="15" placeholder="Cor">
    <input name="passageiros" maxlenght="2" placeholder="Passageiros">
    <input name="arcondicionado" maxlenght="3"placeholder="Ar-Condicionado">
    <input name="cambio" maxlenght="11"placeholder="Câmbio">
    <br>
    <button type="submit">Salvar</button>
</form>

<?php require_once 'rodape.php'; ?>