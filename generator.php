<?php


 function generateUniqueId($table, $column) {
  
            // Check if the required arguments are provided
  
            if (empty($table) || empty($column)) {
                throw new InvalidArgumentException('Missing required arguments');
            }
  
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  
            $id = '';
            $unique = false;
  
            while (!$unique) {
                $id = '';
                for ($i = 0; $i < 25; $i++) {
                    $id .= $characters[rand(0, strlen($characters) - 1)];
                }
                // Check if the ID already exists in the database (laravel)
                   $count = DB::table($table)->where($column, $id)->count();
             
             
                // Check if the ID already exists in the database (native php)
                // $count = SELECT COUNT(*) FROM table WHERE column = id;
                if ($count == 0) {
                    $unique = true;
                }
            }
            return $id;
        }
        

?>
