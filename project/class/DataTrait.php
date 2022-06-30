<?php
    trait DataTrait{
        final public function updateRowById($id, $data){
            //update users SET remember_token = 'afsdafsdfa' WHERE id=$id";
            //"UPDATE users SET name= 'Updated name', email='email@update.com' WHERE id = $id";

            //blogs
            //"UPDATE blogs SET title = '' WHERE id = $id";
            $this->sql = "UPDATE ". $this->table;"SET ";
            foreach($data as $column_name => $value){
                $str = $column_name. " = :" . $column_name;
                $temp[] = $str;
            }
            $this->sql .= implode(",",$temp);
            $this->sql .= "WHERE id = :id";

            $success = $this->update($id,$data);

        }
    }