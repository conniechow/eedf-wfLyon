<?php

namespace Model;
use \W\Model\ConnectionModel;

class EventsModel extends \W\Model\Model{

  public function slugify($text)
  {
  // replace non letter or digits by -
    $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
    $text = trim($text, '-');

  // remove duplicate -
    $text = preg_replace('~-+~', '-', $text);

  // lowercase
    $text = strtolower($text);

    if (empty($text)) {
      return 'n-a';
    }
    return $text;
  }

  public function findEvent($idevent){
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


	public function findEvent($idevent){
        if (!is_numeric($idevent)){
            return false;
        }

        $sql = 'SELECT `idevent` FROM `events WHERE ' . $this->primaryKey .'  = :id )';
        $sth = $this->dbh->prepare($sql);
        $sth->bindValue(':id', $idevent);
        $sth->execute();
        $result = $sth->fetch();
        return $result;
   		}
	}


}

?>
