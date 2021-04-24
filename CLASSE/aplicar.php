 <?php

class aplicar
{
    private $pdo; 
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha)
    {
         global $pdo;
         try
         {
            $pdo = new PDO("mysql:dbname=".$nome,";host=".$host, $usuario, $senha);
         }
         catch (PDOException $e)
         {
             $msgErro = $e->getMessage();
         }
 
    }
    public function aplicar($codigo, $desconto)
    {
         global $pdo;
              $sql = $pdo->prepare("SELECT id FROM cupom WHERE codigo = :c");
              $sql->bindValue(":c", $codigo);
              $sql->execute();

              if ($sql->rowCount() > 0)
              {
                  return false;
              }
              else
              {
                  $sql = $pdo->prepare("INSERT INTO cupom (codigo,desconto) 
                  VALUES (:c, :d)");
              $sql->bindValue(":c", $codigo);
              $sql->execute();
              return true;
              
              }
        
    }
}






?> 