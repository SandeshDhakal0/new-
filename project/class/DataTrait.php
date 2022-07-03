<?php
    trait DataTrait{
        final public function updateRowById($id, $data){
            //update users SET remember_token = 'afsdafsdfa' WHERE id=$id";
            //"UPDATE users SET name= 'Updated name', email='email@update.com' WHERE id = $id";

            //blogs
            //"UPDATE blogs SET title = '' WHERE id = $id";
            $this->sql = "UPDATE ". $this->table;" SET ";
            $temp = array();
            foreach($data as $column_name => $value){
                $str = $column_name . " = :" . $column_name;
                $temp[] = $str;
            }
            $this->sql .= implode(",", $temp);
            $this->sql .= " WHERE id = :id ";

            $success = $this->update($id, $data);
            if($success){
                return $id;
            } else {
                return false;
            }
        }

        final public function getAllRows(){
            $this->sql = "SELECT * FROM ".$this->table." ORDER BY id DESC";
            return $this->select();
        }

        final public function insertRow($data){
            $this->sql = "INSERT INTO ". $this->table." SET ";

            $temp = array();
            foreach($data as $column_name => $value){
                $str = $column_name. "= :" . $column_name;
                $temp[] = $str;
            }
            $this->sql .= implode(",", $temp);
            $id = $this->insert($data);
            if($id){
                return $id;
            } else {
                return false;
            }
        }
    }