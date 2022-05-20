<?php

class AdminModel extends Database 
{
    function fetch()
    {
        $query = 'select * from users';
        $stmnt = $this->execStatement($query);
        $result = $stmnt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    function add()
    {
        $query = 'INSERT INTO users (first_name, last_name, email, phone, password) VALUES (?, ?, ?, ?, ?)';
        $stmnt = $this->execStatement($query);
        return $stmnt;
    }
    
    function update()
    {
        $query = 'UPDATE users SET first_name = ?, last_name = ?, email = ?, phone = ?, password = ? WHERE id = ?';
        $stmnt = $this->execStatement($query);
        return $stmnt;
    }
    
    function delete ()
    {
        $query = 'DELETE FROM users WHERE id = ?';
        $stmnt = $this->execStatement($query);
        return $stmnt;
    }   
}