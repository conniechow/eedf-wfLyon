<?php

namespace Model;
use \W\Model\ConnectionModel;

class MembersModel extends \W\Model\Model{

	public function findUser($id_section){
        if (!is_numeric($id)){
            return false;
        }

        $sql = 'SELECT * FROM ' . $this->table . ' WHERE ' . $this->primaryKey .'  = (SELECT MIN(id) FROM ' . $this->table . ' WHERE id > :id ) LIMIT 1';
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':id', $id);
        $sth->execute();
        $result = $sth->fetch();
        if(!$result) {
            $sql = 'SELECT * FROM ' . $this->table . ' WHERE ' . $this->primaryKey .'  = (SELECT MIN(id) FROM ' . $this->table . ') LIMIT 1';
            $sth = $this->dbh->prepare($sql);
            $sth->execute();
            $result = $sth->fetch();
        }

        return $result;
   	}
	

	public function findSection($id_section){
        if (!is_numeric($id_section)){
            return false;
        }

        $sql = 'SELECT `rank` FROM `sections WHERE ' . $this->primaryKey .'  = :id )';
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':id', $id_section);
        $sth->execute();
        $result = $sth->fetch();
        return $result;
   		}
	}

 ?>