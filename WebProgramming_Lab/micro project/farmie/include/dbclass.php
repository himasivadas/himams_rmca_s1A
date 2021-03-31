<?php
class database 
{
 
    var $print_error = true; /** print error */
    var $_connect    = null; /** resource resource link_identifier */
    function database ($hostname = 'localhost', $username = 'root', $password = '', $database = 'arotic')
    {
        
        if ($this->connect($hostname, $username, $password)) 
		{
            if ($this->select_db($database)) 
			{
                //define('DB_CONNECT', $this->_connect);
				return true;
            } 
			else 
			{
                return false;
            }
        } 
		else 
		{
            return false;
        }
    }
    
    function check_connect () 
	{
        return $this->_connect;
    }
    
    /**
    * @return resource
    * @param string $hostname
    * @param string $username
    * @param string $password
    * @desc Open a connection to a mysql Server
    */
    function connect ($hostname, $username, $password)
    {
        $this->_connect = mysql_connect($hostname, $username, $password);
		

        if (!$this->_connect) 
		{
            $this->error();
            return false;
        } else 
		{
            mb_internal_encoding('UTF-8');
			mysql_query("set names 'utf8'", $this->_connect);
			mysql_query("SET character_set_results=utf8", $this->_connect);
			mysql_query("SET character_set_client=utf8", $this->_connect);
			mysql_query("SET character_set_connection=utf8", $this->_connect);
			return true;
        }
    }
    
    /**
    * @return int
    * @desc Get number of affected rows in previous mysql operation
    */
    function affected_rows()
    {
        return mysql_affected_rows($this->_connect);
    }
    
    /**
    * @return string
    * @desc Returns the name of the character set
    */
    function client_encoding()
    {
        return mysql_client_encoding($this->_connect);
    }
    
    /**
    * @return bool
    * @desc Close mysql connection
    */
    function close()
    {
        if (mysql_close($this->_connect)) 
		{
            $this->_connect = null;
            return true;
        } 
		else 
		{
            $this->error();
            return false;
        }
    }
    
    /**
    * @return bool
    * @param string $database_name
    * @desc Create a mysql database
    */
    function create_db ($database_name)
    {
        if (mysql_create_db($database_name, $this->_connect)) {
            return true;
        } else {
            $this->error();
            return false;
        }
    }
    
    /**
    * @return bool
    * @param string $database_name
    * @desc Drop (delete) a mysql database
    */
    function drop_db ($database_name)
    {
        if (mysql_drop_db($database_name)) {
            return true;
        } else {
            $this->error();
            return false;
        }
    }
    
    /**
    * @return bool
    * @param string $database_name
    * @desc Select a mysql database
    */
    function select_db ($database_name)
    {
        if (!$this->_connect) {
            return false;
        } else {
            if (!mysql_select_db($database_name, $this->_connect)) {
                $this->error();
                return false;
            } else {
                return true;
            }
        }
    }
    
    /**
    * @return resource
    * @param string $query
    * @desc Send a mysql query
    */
    function query($query)
    {
        $res = mysql_query($query, $this->_connect);
        if (!$res) {
            $this->error($query);
            return false;
        } else {
            return $res;
        }
    }
    
    /**
    * @return array
    * @param resource $resource
    * @desc Fetch a result row as an associative array, a numeric array, or both
    */
    function fetch_array($resource)
    {
        if (!is_resource($resource)) {
            return false;
        }
        return mysql_fetch_array($resource);
    }
    
    /**
    * @return array
    * @param resource $resource
    * @desc Fetch a result row as an associative array
    */
    function fetch_assoc($resource)
    {
        if (!is_resource($resource)) {
            return false;
        }
        return mysql_fetch_assoc($resource);
    }
    
    /**
    * @return array
    * @param resource $resource
    * @desc Get a result row as an enumerated array
    */
    function fetch_row($resource)
    {
        if (!is_resource($resource)) {
            return false;
        }
        return mysql_fetch_row($resource);
    }
    
    /**
    * @return int
    * @param resource $resource
    * @desc Get number of rows in result
    */
    function num_rows($resource)
    {
        if (!is_resource($resource)) {
            return 0;
        }
        return mysql_num_rows($resource);
    }
    
    /**
    * @return mixed
    * @param resource $resource
    * @param int/string $row
    * @desc Get result data
    */
    function result($resource, $row)
    {
        if (!is_resource($resource)) {
            return false;
        }
        
        $mixed = mysql_result($resource, $row);
        if (!$mixed) {
            $this->error();
            return false;
        } else {
            return $mixed;
        }
    }
    
    /**
    * @return int
    * @desc Get the ID generated from the previous INSERT operation
    */
    function insert_id()
    {
        return mysql_insert_id();
    }
    
    /**
    * @return string
    * @param array $array
    * @desc Convert array to SQL query fragment
    */
    function array2sql($array)
    {
        if (!is_array($array)) {
            return '';
        }
        
        $query = "";
        $count = sizeof($array);
        $i = 0;
        
        $mysql_funcs = array('ASCII','CHAR','MD5','ENCRYPT','RAND','LAST_INSERT_ID','COUNT','AVG','SUM','SOUNDEX','LCASE','UCASE','NOW','PASSWORD','CURDATE','CURTIME','FROM_DAYS','FROM_UNIXTIME','PERIOD_ADD','PERIOD_DIFF','TO_DAYS','UNIX_TIMESTAMP','USER','WEEKDAY','CONCAT');
        $mysql_funcs_pattern = '/^('.join('|',$mysql_funcs).')\(.*\)$/i';
        
        foreach ($array as $key => $value) {
            $i++;
            if (is_numeric($value)) {
                $query .= '`'.$key.'`='.$value;
            } elseif (!$value) {
                $query .= '`'.$key.'`=NULL';
            } elseif (preg_match($mysql_funcs_pattern, $value)) {
                $query .= '`'.$key.'`='.$value;
            } else {
                $query .= '`'.$key.'`=\''.mysql_escape_string($value).'\'';
            }
            if ($count > $i) {
                $query .= ', ';
            }
        }
        return $query;
    }
    
    /**
    * @return string
    * @param string $string
    * @desc Escapes a string for use in a mysql_query
    */
    function escape ($string) {
        return mysql_escape_string($string);
    }
    
    /**
    * @return bool
    * @param string $query
    * @desc Print error
    */
    function error ($query = '')
    {
        $err = "";
		if (mysql_errno() > 0) {
            $err.='<div style="border:1px solid #666666;background-color:#efefef;font-family:Courier New;font-size:11px; padding:5px;">';
            if ($query) {
                $err.='mysql query: '.$query.'<br>';
            }
            $err.='mysql Error No: '.mysql_errno().'<br>mysql error Desc: '.mysql_error();
            $err.='</div>';

			//error_log($err,3,constant("PHYSICAL_PATH").constant("ALErrLogFile"));
			//mail('renjith341@gmail.com',constant("ALEmailError"),"AL: Critical User Error",$err,"From: errors@enadu.com\r\n");
			
        }
        return false;
    }
}

?>