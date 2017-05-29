<?php

namespace Model;

class AdherentModel extends \W\Model\Model
{
  public function __construct(){
    $app = getApp();
    $this->setTable($app->getConfig('security_user_table'));
    $this->dbh = \W\Model\ConnectionModel::getDbh();
    $this->primaryKey = $app->getConfig('security_id_property');
  }

  public function findAdherent($id)
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

  public function insertAdherent(array $data, $stripTags = true)
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

		return $this->findAdherent($this->lastInsertId());
	}

  public function getUserByUsernameOrEmail($usernameOrEmail)
	{

		$app = getApp();

		$sql = 'SELECT * FROM ' . $this->table .
			   ' WHERE ' . $app->getConfig('security_username_property') . ' = :username' .
			   ' OR ' . $app->getConfig('security_email_property') . ' = :email LIMIT 1';

		$dbh = \W\Model\ConnectionModel::getDbh();
		$sth = $dbh->prepare($sql);
		$sth->bindValue(':username', $usernameOrEmail);
		$sth->bindValue(':email', $usernameOrEmail);

		if($sth->execute()){
			$foundUser = $sth->fetch();
			if($foundUser){
				return $foundUser;
			}
		}

		return false;
	}

  public function emailExists($email)
	{

	   $app = getApp();

	   $sql = 'SELECT ' . $app->getConfig('security_email_property') . ' FROM ' . $this->table .
	          ' WHERE ' . $app->getConfig('security_email_property') . ' = :email LIMIT 1';

	   $dbh = \W\Model\ConnectionModel::getDbh();
	   $sth = $dbh->prepare($sql);
	   $sth->bindValue(':email', $email);
	   if($sth->execute()){
	       $foundUser = $sth->fetch();
	       if($foundUser){
	           return true;
	       }
	   }

	   return false;
	}

  public function usernameExists($username)
	{

	    $app = getApp();

	    $sql = 'SELECT ' . $app->getConfig('security_username_property') . ' FROM ' . $this->table .
	           ' WHERE ' . $app->getConfig('security_username_property') . ' = :username LIMIT 1';

	    $dbh = \W\Model\ConnectionModel::getDbh();
	    $sth = $dbh->prepare($sql);
	    $sth->bindValue(':username', $username);
	    if($sth->execute()){
	        $foundUser = $sth->fetch();
	        if($foundUser){
	            return true;
	        }
	    }

	    return false;
	}
  public function phoneExists($phone){
    $app = getApp();
    $sql = 'SELECT phone FROM '.$this->table.
    ' WHERE phone = :phone LIMIT 1';
    $dbh = \W\Model\ConnectionModel::getDbh();
    $sth = $dbh->prepare($sql);
    $sth->bindValue(':phone',$phone);
    if($sth->execute()){
        $foundPhone = $sth->fetch();
        if($foundPhone){
            return true;
        }
    }
    return false;
  }
  function escapeKeys($datas)
	{
		return array_map(function($val){
			return '`'.$val.'`';
		}, $datas);
	}
}

 ?>
