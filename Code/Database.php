<?php 
/**
 * 
 */
class Database
{
	private static $_host = DBHOST;
	private static $_user = DBUSER;
	private static $_mdp = DBMDP;
	private static $_bdd = DBNAME;

	public static $_conn;

	private static function createConnexion()
    {
		if(empty(self::$_conn))
        {
			try
            {
				self::$_conn = new pdo("mysql:host=".self::$_host.";dbname=".self::$_bdd.";charset=UTF8", self::$_user, self::$_mdp);
			} catch (PDOException $e){
				print("ERREUR de connexion à la bdd : ".$e->getMessage());
				exit;
			}
		}
	}

    private static function retournerClasse($table)
    {
        $buffer = explode("_", $table);
        return(ucfirst($buffer[1]) . strtoupper($buffer[0]));
    }

	public static function retournerEnregistrement($table, 
                                $where = "", $tri = "", $champs = "*",
                                $all = true, $comportement = PDO::FETCH_CLASS)
    {
		self::createConnexion();
        if($champs == "")
        {
            $champs = "*";
        }
        $sql  = "SELECT $champs FROM $table";
        if($where != "")
        {
            $sql .= " WHERE $where";
        }
        if($tri != "")
        {
            $sql .= " ORDER BY $tri";
        }
        $req = self::$_conn->query($sql);
		if($comportement == PDO::FETCH_CLASS)
        {
			$req->setFetchMode(PDO::FETCH_CLASS,
                        self::retournerClasse($table));
		}
		if($all)
        {
			return $req->fetchAll($comportement);
		} 
        else
        {
			return $req->fetch($comportement);
		}	
	}
	public static function insert($table, $data)
	{
		self::createConnexion();
		$sql = "INSERT INTO `$table`([CHAMPS]) VALUES ([VALUES]);";
		$champs = [];
		$values = [];
		foreach($data as $key => $value){
			$champs[] = $key;
			$values[] = ":".$key;
		}
		$sql = str_replace('[CHAMPS]', implode(', ', $champs), $sql);
		$sql = str_replace('[VALUES]', implode(', ', $values), $sql);
		$req = self::$_conn->prepare($sql);
		foreach($data as $key => $valueToInsert){
			$req->bindvalue(":".$key, $valueToInsert);
		}
		return $req->execute();
	}
	public static function delete($table, $cle, $id){
		self::createConnexion();
		$sql = "DELETE FROM `$table` WHERE `$cle` = :id";
		$req = self::$_conn->prepare($sql);
		$req->bindvalue(":id", $id, PDO::PARAM_INT);
		return $req->execute();
	}
	public static function update($table, $cle, $data){
		self::createConnexion();
		$sql = "UPDATE `$table` SET [SET] WHERE `$table`.`$cle` = :id_table";
		$set = [];
		$id = null;
		foreach($data as $key => $value){
			if($key != $cle)
			{
				$set[] = $key . " = :".$key;
			}
			else
			{
				$id = $value;
			}
		}
		$sql = str_replace('[SET]', implode(', ', $set), $sql);

		var_dump($sql);

		$req = self::$_conn->prepare($sql);
		foreach($data as $key => $valueToInsert){
			if($key != $cle)
			{
				$req->bindvalue(":".$key, $valueToInsert);
			}
		}
		$req->bindvalue(":id_table", $id, PDO::PARAM_INT);
		return $req->execute();
	}
	public static function dernierIndex($table)
	{
		self::createConnexion();
		$sql ="SELECT LAST_INSERT_ID() FROM `$table`";
		$req = self::$_conn->prepare($sql);
		return $req->execute();
	}
}