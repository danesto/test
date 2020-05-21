<?php

include_once 'config/connection.php';

class Product {

    // Get all products from database
    public function fetchAll () { 
        return $products=executeQuery("SELECT * FROM products");
    }
}