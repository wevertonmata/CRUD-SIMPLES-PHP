<?php
require_once dirname(__FILE__)."/categoria.php";
require_once dirname(__FILE__)."/banco.php";

class LivroDAO {
    
    //Read
    public function Livro_buscarTodos() {
        global $conn;
        $qry = $conn->query("SELECT * FROM livro");
        $items = array();
        while($linha = $qry->fetch()) {
            $items[] = new Livro($linha["id"], $linha["nome"], $linha['descricao']);
        }
        return $items;
    }

    //Read for ID
    public function Livro_buscarPorId($id) {
        global $conn;
        $qry = $conn->prepare("SELECT * FROM livro WHERE id=:id");
        $qry->bindParam(":id", $id);
        $qry->execute();
        $item = $qry->fetch();
        if($item == null) {
            throw new Exception("Código {$id} não existe no sistema.");
        }
        // Retorna a categoria criada
        return new Livro($item["id"], $item["nome"], $linha['descricao']);
    }

    //Create
    public function Livro_inserir(Livro $livro) {
        global $conn;
        $qry = $conn->prepare("INSERT INTO livro( nome, descricao) VALUES( :nome, :descricao)");
        // Bind
        $qry->bindParam(":nome", $livro->getNome());
        $qry->bindParam(":descricao", $livro->getDescricao());
        // Executa
        $qry->execute();
    }

    //Update
    public function Livro_atualizar(Livro $livro) {
        global $conn;
        $qry = $conn->prepare("UPDATE livro SET nome=:nome , descricao=:descricao WHERE id=:id"); //fazer uma obrigação de alterar os dois
        // Bind
        $qry->bindParam(":nome", $livro->getNome());
        $qry->bindParam(":descricao", $livro->getDescricao());
        $qry->bindParam(":id", $livro->getId());
        
        // Executa
        $qry->execute();
    }

    //Delete
    public function Livro_excluir(Livro $livro) {
        global $conn;
        $qry = $conn->prepare("DELETE FROM livro WHERE id=:id");
        // Bind
        $qry->bindParam(":id", $livro->getId());
        // Executa
        $qry->execute();
 }
}

class ClienteDAO {
    
    //Read
    public function Cliente_buscarTodos() {
        global $conn;
        $qry = $conn->query("SELECT * FROM cliente");
        $items = array();
        while($linha = $qry->fetch()) {
            $items[] = new Cliente($linha["id"], $linha["nome"], $linha['cpf']);
        }
        return $items;
    }

    //Read for ID
    public function Cliente_buscarPorId($id) {
        global $conn;
        $qry = $conn->prepare("SELECT * FROM cliente WHERE id=:id");
        $qry->bindParam(":id", $id);
        $qry->execute();
        $item = $qry->fetch();
        if($item == null) {
            throw new Exception("Código {$id} não existe no sistema.");
        }
        // Retorna a categoria criada
        return new Cliente($item["id"], $item["nome"], $item["cpf"]);
    }

    //Create
    public function Cliente_inserir(Cliente $cliente) {
        global $conn;
        $qry = $conn->prepare("INSERT INTO cliente( nome, cpf) VALUES( :nome, :cpf)");
        // Bind
        $qry->bindParam(":nome", $cliente->getNome());
        $qry->bindParam(":cpf", $cliente->getCpf());
        // Executa
        $qry->execute();
    }

    //Update
    public function Cliente_atualizar(Cliente $cliente) {
        global $conn;
        $qry = $conn->prepare("UPDATE cliente SET nome=:nome , cpf=:cpf WHERE id=:id"); //fazer uma obrigação de alterar os dois
        // Bind
        $qry->bindParam(":nome", $cliente->getNome());
        $qry->bindParam(":cpf", $cliente->getCpf());
        $qry->bindParam(":id", $cliente->getId());
        
        // Executa
        $qry->execute();
    }

    //Delete
    public function Cliente_excluir(Cliente $cliente) {
        global $conn;
        $qry = $conn->prepare("DELETE FROM cliente WHERE id=:id");
        // Bind
        $qry->bindParam(":id", $cliente->getId());
        // Executa
        $qry->execute();
 }
}

class VestuarioDAO {
    
    //Read
    public function Vestuario_buscarTodos() {
        global $conn;
        $qry = $conn->query("SELECT * FROM vestuario");
        $items = array();
        while($linha = $qry->fetch()) {
            $items[] = new Vestuario($linha["id"], $linha["nome"], $linha['unidade']);
        }
        return $items;
    }

    //Read for ID
    public function Vestuario_buscarPorId($id) {
        global $conn;
        $qry = $conn->prepare("SELECT * FROM vestuario WHERE id=:id");
        $qry->bindParam(":id", $id);
        $qry->execute();
        $item = $qry->fetch();
        if($item == null) {
            throw new Exception("Código {$id} não existe no sistema.");
        }
        // Retorna a categoria criada
        return new Vestuario($item["id"], $item["nome"], $item["unidade"]);
    }

    //Create
    public function Vestuario_inserir(Vestuario $vestuario) {
        global $conn;
        $qry = $conn->prepare("INSERT INTO vestuario( nome, unidade) VALUES( :nome, :unidade)");
        // Bind
        $qry->bindParam(":nome", $vestuario->getNome());
        $qry->bindParam(":unidade", $vestuario->getUnidade());
        // Executa
        $qry->execute();
    }

    //Update
    public function Vestuario_atualizar(Vestuario $vestuario) {
        global $conn;
        $qry = $conn->prepare("UPDATE vestuario SET nome=:nome , unidade=:unidade WHERE id=:id"); //fazer uma obrigação de alterar os dois
        // Bind
        $qry->bindParam(":nome", $vestuario->getNome());
        $qry->bindParam(":unidade", $vestuario->getUnidade());
        $qry->bindParam(":id", $vestuario->getId());
        
        // Executa
        $qry->execute();
    }

    //Delete
    public function Vestuario_excluir(Vestuario $vestuario) {
        global $conn;
        $qry = $conn->prepare("DELETE FROM vestuario WHERE id=:id");
        // Bind
        $qry->bindParam(":id", $vestuario->getId());
        // Executa
        $qry->execute();
 }
}