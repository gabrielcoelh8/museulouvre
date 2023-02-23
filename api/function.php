<?php
  function getConnection() {
    try {
        $conexao = new PDO('mysql:host=db4free.net;dbname=n2database;port=3306', "gabrielcoelh8", "postgres");
        return $conexao;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
  }

  function getArtistas() {
    $conexao = getConnection();
    $sql = "SELECT artista.*, movimento_estetico.nome AS movimento_nome FROM artista JOIN movimento_estetico ON movimento_estetico.id = artista.id_movimento ORDER BY nome";
    $sentenca = $conexao->query($sql, PDO::FETCH_ASSOC);
    $dados = $sentenca->fetchAll();
    $conexao = null;
    return $dados;
  }

  function getPinturas() {
    $conexao = getConnection();
    $sql = "SELECT pintura.*, artista.nome AS artista_nome FROM pintura JOIN artista ON artista.id = pintura.id_artista ORDER BY id DESC";
    $sentenca = $conexao->query($sql, PDO::FETCH_ASSOC);
    $dados = $sentenca->fetchAll();
    $conexao = null;
    return $dados;
  }

  function getMovimentos() {
    $conexao = getConnection();
    $sql = "SELECT * FROM movimento_estetico ORDER BY nome";
    $sentenca = $conexao->query($sql, PDO::FETCH_ASSOC);
    $dados = $sentenca->fetchAll();
    $conexao = null;
    return $dados;
  }

  function salvarArtista($artista) {
    $conexao = getConnection();
    $sql = "INSERT INTO artista (nome, data_nascimento, foto, id_movimento) VALUES (?,?,?,?)";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $artista['nome']);
    $sentenca->bindParam(2, $artista['data_nascimento']);
    $sentenca->bindParam(3, $artista['foto']);
    $sentenca->bindParam(4, $artista['id_movimento']);
    $sentenca->execute();
    $conexao = null;
  }

  function salvarMovimento($movimento) {
    $conexao = getConnection();
    $sql = "INSERT INTO movimento_estetico (nome) VALUES (?)";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $movimento['nome']);
    $sentenca->execute();
    $conexao = null;
  }

  function salvarPintura($pintura) {
    $conexao = getConnection();
    $sql = "INSERT INTO pintura (nome, pintura, data_lancamento, tecnica, id_artista) VALUES (?,?,?,?,?)";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $pintura['nome']);
    $sentenca->bindParam(2, $pintura['pintura']);
    $sentenca->bindParam(3, $pintura['data_lancamento']);
    $sentenca->bindParam(4, $pintura['tecnica']);
    $sentenca->bindParam(5, $pintura['id_artista']);
    $sentenca->execute();
    $conexao = null;
  }

  function excluirArtista($id) {
    $conexao = getConnection();
    $sql = "DELETE FROM artista WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
    $conexao = null;
  }

  function excluirPintura($id) {
    $conexao = getConnection();
    $sql = "DELETE FROM pintura WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
    $conexao = null;
  }

  function excluirMovimento($id) {
    $conexao = getConnection();
    $sql = "DELETE FROM movimento_estetico WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
    $conexao = null;
  }


  function alterarArtista($artista) {
    $conexao = getConnection();
    $sql = "UPDATE artista SET nome=?, foto=?, id_movimento=?, data_nascimento=? WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $artista['nome']);
    $sentenca->bindParam(2, $artista['foto']);
    $sentenca->bindParam(3, $artista['id_movimento']);
    $sentenca->bindParam(4, $artista['data_nascimento']);
    $sentenca->bindParam(5, $artista['id']);
    $sentenca->execute();
    $conexao = null;
  }

  function alterarPintura($pintura) {
    $conexao = getConnection();
    $sql = "UPDATE pintura SET nome=?, pintura=?, id_artista =?, data_lancamento=?, tecnica=? WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $pintura['nome']);
    $sentenca->bindParam(2, $pintura['pintura']);
    $sentenca->bindParam(3, $pintura['id_artista']);
    $sentenca->bindParam(4, $pintura['data_lancamento']);
    $sentenca->bindParam(5, $pintura['tecnica']);
    $sentenca->bindParam(6, $pintura['id']);
    $sentenca->execute();
    $conexao = null;
  }

  function alterarMovimento($movimento) {
    $conexao = getConnection();
    $sql = "UPDATE movimento_estetico SET nome=? WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $movimento['nome']);
    $sentenca->bindParam(2, $movimento['id']);
    $sentenca->execute();
    $conexao = null;
  }

  function getArtista($id) {
    $conexao = getConnection();
    $sql = "SELECT * FROM artista WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
    $artista = $sentenca->fetch(PDO::FETCH_ASSOC);
    $conexao = null;
    return $artista;
  }

  function getMovimento($id) {
    $conexao = getConnection();
    $sql = "SELECT * FROM movimento_estetico WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
    $movimento = $sentenca->fetch(PDO::FETCH_ASSOC);
    $conexao = null;
    return $movimento;
  }

  function getPintura($id) {
    $conexao = getConnection();
    $sql = "SELECT * FROM pintura WHERE id=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $id);
    $sentenca->execute();
    $pintura = $sentenca->fetch(PDO::FETCH_ASSOC);
    $conexao = null;
    return $pintura;
  }

  function getUserByEmail($email) {
    $conexao = getConnection();
    $sql = "SELECT * FROM usuario WHERE email=?";
    $sentenca = $conexao->prepare($sql);
    $sentenca->bindParam(1, $email);
    $sentenca->execute();
    $usuario = $sentenca->fetch(PDO::FETCH_ASSOC);
    $conexao = null;
    return $usuario;
  }

 ?>
