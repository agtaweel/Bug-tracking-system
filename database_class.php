<?php
/*class database {}*/

class DB{
    private $con;
    private $db_host = 'localhost';
    private $db_user = 'root';
    private $db_pass = 'root';
    private $db_name = 'oop';
    /*
    public function _construct() {
        $this->con = false;
        $this->connect();
    }*/



private $result = array(); 


public function connect(){
        if(!$this->con)
        {
            $myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_pass);
            if($myconn)
            {
                $seldb = @mysql_select_db($this->db_name,$myconn);
                if($seldb)
                {
                    $this->con = true; 
                    return true; 
                } else
                {
                    return false; 
                }
            } else
            {
                return false; 
            }
        } else
        {
            return true; 
        }
    }


public function disconnect(){
    if($this->con)
    {
        if(@mysql_close())
        {
                       $this->con = false; 
            return true; 
        }
        else
        {
            return false; 
        }
    }
}

private function tableExists($table)
    {
        $tablesInDb = @mysql_query('SHOW TABLES FROM '.$this->db_name.' LIKE "'.$table.'"');
        if($tablesInDb)
        {
            if(mysql_num_rows($tablesInDb)==1)
            {
                return true; 
            }
            else
            { 
                return false; 
            }
        }
    }


public function select($table, $rows = '*', $where = null, $order = null)
    {
        $q = 'SELECT '.$rows.' FROM '.$table;
        if($where != null)
            $q .= ' WHERE '.$where;
        if($order != null)
            $q .= ' ORDER BY '.$order;
        if($this->tableExists($table))
       {
        //echo  $q;
        $query = @mysql_query($q);
        if($query)
        {
            $this->numResults = mysql_num_rows($query);
            for($i = 0; $i < $this->numResults; $i++)
            {
                $r = mysql_fetch_array($query);
                $key = array_keys($r); 
                for($x = 0; $x < count($key); $x++)
                {
                    // Sanitizes keys so only alphavalues are allowed
                    if(!is_int($key[$x]))
                    {
                        if(mysql_num_rows($query) > 1)
                            $this->result[$i][$key[$x]] = $r[$key[$x]];
                        else if(mysql_num_rows($query) < 1)
                            $this->result = null; 
                        else
                            $this->result[$key[$x]] = $r[$key[$x]]; 
                    }
                }
            }            
            return true; 
        }
        else
        {
            return false; 
        }
        }else
        return false;
    }
    	

public function update($table,$rows,$where){
            //echo "update function "."<br/>";
            if ($this->tableExists($table))
            {
                
                // Parse the where values
                // even values (including 0) contain the where rows
                // odd values contain the clauses for the row
                /*for($i = 0; $i < count($where); $i++)
                {
                    if($i%2 != 0)
                    {
                        if(is_string($where[$i]))
                        {
                            if(($i+1) != null)
                                $where[$i] = '"'.$where[$i].'" AND ';
                            else
                                $where[$i] = '"'.$where[$i].'"';
                        }
                    }
                }
                $where = implode('=',$where);
                echo "I can see it in your eyes...";*/
            
                $update = 'UPDATE '.$table.' SET ';
                $keys = array_keys($rows); 
                for($i = 0; $i < count($rows); $i++)
               {
                    if(is_string($rows[$keys[$i]]))
                    {
                        $update .= $keys[$i].'="'.$rows[$keys[$i]].'"';
                    }
                    else
                    {
                        $update .= $keys[$i].'='.$rows[$keys[$i]];
                    }
                     
                    // Parse to add commas
                    if($i != count($rows)-1)
                    {
                        $update .= ','; 
                    }
                }
                $update .= ' WHERE '.$where;
                //echo $update."<br/>";
                $query = @mysql_query($update);
                if($query)
                {
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

public function insert($table,$values,$rows = null)
        {
            if($this->tableExists($table))
            {
                $insert = 'INSERT INTO '.$table .' ( ';
                if($rows != null)
                {
                    for($i=0;$i<count($rows);$i++){
                        $insert .= $rows[$i].' , ';
                    }
                 //$insert .= ' ('.$rows[0].','.$rows[1].','.$rows[2].','.$rows[3].')'; 
                }
                $insert=substr($insert,0, -2);
                //substr($insert, strlen($insert)-3);
                $insert.=')';
     
                for($i = 0; $i < count($values); $i++)
                {
                    if(is_string($values[$i]))
                        $values[$i] = '"'.$values[$i].'"';
                }
                $values = implode(',',$values);
                $insert .= ' VALUES ('.$values.')';
                $ins = @mysql_query($insert);            
                if($ins)
                {
                    return true; 
                }
                else
                {
                    return false; 
                }
            }
        }

public function getResult(){
    	//echo"ttt";
    return $this->result;
    }
    
}




?>