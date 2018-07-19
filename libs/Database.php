<?php

class Database extends PDO {

    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS) {
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * select
     * @param string $sql An SQL string
     * @param array $array Paramters to bind
     * @param constant $fetchMode A PDO Fetch mode
     * @return mixed
     */
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC) {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }

        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }

    /**
     * insert
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     */
    public function insert($table, $data) {
        try{
        ksort($data);

        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));
        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
        return $this->lastInsertId();
        }
       catch (PDOException $e) {
            echo $table . "<br>" . $e->getMessage();
            $this->displayMySQLError($query);
            return false;
        } 
    }

    /**
     * update
     * @param string $table A name of table to insert into
     * @param string $data An associative array
     * @param string $where the WHERE query part
     */
    public function update($table, $data, $where) {
        try {
            ksort($data);

            $fieldDetails = NULL;
            foreach ($data as $key => $value) {
                $fieldDetails .= "`$key`=:$key,";
            }
            $fieldDetails = rtrim($fieldDetails, ',');

            $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");

            foreach ($data as $key => $value) {
                $sth->bindValue(":$key", $value);
            }

            $sth->execute();          
            
        } catch (PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
            $this->displayMySQLError($table);
            return false;
        }
    }

    /**
     * delete
     * 
     * @param string $table
     * @param string $where
     * @param integer $limit
     * @return integer Affected Rows
     */
    public function delete($table, $where, $limit = 1) {
        
        try{
            return $this->exec("DELETE FROM $table WHERE $where");
        
       }catch (PDOException $e) {
            echo $query . "<br>" . $e->getMessage();
            $this->displayMySQLError($table);
            return false;
        }
        
        
    }

    function countRow($sql){
        $result = $this->prepare($sql); 
        try{
           $result->execute(); 
        }
         catch(PDOException $e){
           echo $e->getMessage();
         }
        return $number_of_rows = $result->fetchColumn(); 
    }

    public function displayMySQLError($query = false)
{
	if (DEBUG_SQL AND mysql_errno())
	{
		if ($query)
			die(mysql_error().'<br /><br /><pre>'.$query.'</pre>');
		die((mysql_error()));
	}
}
}
