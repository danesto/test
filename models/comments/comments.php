<?php

include_once $_SERVER["DOCUMENT_ROOT"] . '/' . 'config/connection.php';

class Comment {
    
    // Get all active comments from database
    public function fetchAll () { 
        return $comments = executeQuery("SELECT * FROM comments WHERE active = 1");
    }

    public function disabledComments () {
        return $disabledComments = executeQuery("SELECT * FROM comments WHERE active = 0");        
    }
}