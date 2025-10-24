<?php
class Pessoa{
    private $nome;
    private $cpf;
    private $altura;
    private $endereço;
    private $tel;
    private $uf;
    private $cidade;

function __construct($nome, $cpf, $altura, $endereço, $tel, $uf, $cidade)
{
    $this-> nome = $nome;
    $this-> cpf = $cpf;
    $this-> altura = $altura;
    $this-> endereço = $endereço;
    $this-> tel = $tel;
    $this-> uf = $uf;
    $this-> cidade = $cidade;
    
}
public function getNome(){
return $this->nome;
}
public function getCpf(){
return $this->cpf;
}
public function getAltura(){
return $this->altura;
}
public function getEndereço(){
return $this->endereço;
}
public function getTel(){
return $this->tel;
}
public function getUf(){
return $this->uf;
}
public function getCidade(){
return $this->cidade;
}


public function setNome($nome){
$this->nome = $nome; 
}
public function setCpf($cpf){
$this->cpf = $cpf; 
}
public function setAltura($altura){
$this->altura = $altura; 
}
public function setEndereço($endereço){
$this->endereco = $endereço; 
}
public function setTel($tel){
$this->tel = $tel; 
}
public function setUf($uf){
$this->uf = $uf; 
}
public function setCidade($cidade){
$this->cidade = $cidade; 
}

public function mostrarInfo()
{
    echo "<h1> informaçoes:</h1>
    Nome: {$this->nome}<br>
        CPF: {$this->cpf}<br>
        Altura: {$this->altura}<br>
        Endereço: {$this->endereço}<br>
        Telefone: {$this->tel}<br>
        UF: {$this->uf}<br>
        Cidade: {$this->cidade}<br>
    ";
}

public function nascer() {
        echo $this->nome. " acabo de nasce <br>";
    }
public function crescer() {
        echo $this->nome. " ta crescendo <br>";
    }
public function trabalhar() {
        echo $this->nome. " ta trabalhando <br>";
    }
public function sorrir() {
        echo $this->nome. " esta sorrindo <br>";
    }
public function passear() {
        echo $this->nome. " esta passeando la fora";
    }       
    
    public function carregarMetodos()
    {
        $this->mostrarInfo();
        $this->nascer();
        $this->crescer();
        $this->trabalhar();
        $this->sorrir();
        $this->passear();
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'] ?? null;
    $cpf = $_POST['cpf'] ?? null;
    $altura = $_POST['altura'] ?? null;
    $endereço = $_POST['endereço'] ?? null;
    $tel = $_POST['tel'] ?? null;
    $uf = $_POST['uf'] ?? null;
    $cidade = $_POST['cidade'] ?? null;

    $pessoa = new Pessoa(

        $nome,
        $cpf,
        $altura,
        $endereço,
        $tel,
        $uf,
        $cidade

    );

    $pessoa->carregarMetodos();

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
</head>
<body>
<form method="POST">
    <label>Nome:</label><input type="text" name="nome" required><br>
    <label>CPF:</label><input type="text" name="cpf" required><br>
    <label>Altura:</label><input type="text" name="altura" required><br>
    <label>Endereço:</label><input type="text" name="endereço" required><br>
    <label>Telefone:</label><input type="text" name="tel" required><br>
    <label>UF:</label><input type="text" name="uf" required><br>
    <label>Cidade:</label><input type="text" name="cidade" required><br>
    <input type="submit" value="Cadastrar">
</form>
</body>
</html>

