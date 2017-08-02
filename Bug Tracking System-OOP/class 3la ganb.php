<?php

public function insert($table,$values,$rows = null){
        if($this->tableExists($table))
        {
            $insert = 'INSERT INTO '.$table;
            if($rows != null)
            {
                $insert .= ' ('.$rows.')'; 
            }
 
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
    ?>





    /*
               for($i = 0; $i < count($rows); $i++)
                {
                if(is_string($rows[$i]))
                    $rows[$i] = ' " '.$rows[$i].'"';
                }
                    $insert.='('.$rows.')';
                */




                from classes 



                            /*include('db.php');
        $sql = "SELECT * FROM bug";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            echo "here will be result";
            echo "el select dh gy mn el class ya nas "."<br/> ";    
            ?>

            <br/>
            <?php while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["id_bug"]."<br/>". "description :". $row["description"]."<br>"." -type :".$row["type"] ."<br>"."-proiority :" .$row["porirty"]."<br>"."-status".$row["status"]."<br>";
            }
        } else {
            echo "0 results";
        }*/