<?php

namespace Model;

class AdminModel extends \W\Model\Model
{
  public function __construct(){
    $app = getApp();
    $this->setTable($app->getConfig('security_user_table'));
    $this->dbh = \W\Model\ConnectionModel::getDbh();
    $this->primaryKey = $app->getConfig('security_id_property');
  }

  public function findAdmin($id)
	{
    $app = getApp();
    if (!is_numeric($id)){
			return false;
		}
		$sql = 'SELECT * FROM ' . $this->table . ' WHERE ' . $this->primaryKey .'  = :id_user LIMIT 1';
    $sth = $this->dbh->prepare($sql);
		$sth->bindValue(':id_user', $id);
		$sth->execute();
		return $sth->fetch();
	}

  public function insertAdmin(array $data, $stripTags = true)
	{

		$colNames = array_keys($data);
		$colNamesEscapes = $this->escapeKeys($colNames);
		$colNamesString = implode(', ', $colNamesEscapes);

		$sql = 'INSERT INTO ' . $this->table . ' (' . $colNamesString . ') VALUES (';
		foreach($data as $key => $value){
			$sql .= ":$key, ";
		}
		// Supprime les caractères superflus en fin de requète
		$sql = substr($sql, 0, -2);
		$sql .= ')';

		$sth = $this->dbh->prepare($sql);
		foreach($data as $key => $value){
			$value = ($stripTags) ? strip_tags($value) : $value;
			$sth->bindValue(':'.$key, $value);
		}

    try{
      $sth->execute();
    }
    catch(MySQLDuplicateKeyException $e){
      print 'duplicate '.$e->getMessage();
    }
    catch (MySQLException $e) {
      // other mysql exception (not duplicate key entry)
      print 'mysql exception '.$e->getMessage();
    }
    catch (Exception $e) {
      // not a MySQL exception
      print 'exception '.$e->getMessage();
    }

		return $this->findAdmin($this->lastInsertId());
	}

  function escapeKeys($datas)
	{
		return array_map(function($val){
			return '`'.$val.'`';
		}, $datas);
	}
}

 ?>
