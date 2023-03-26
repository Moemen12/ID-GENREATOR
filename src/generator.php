<?php


namespace idGenerator;

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
                // Check if the ID already exists in the database
                $count = DB::table($table)->where($column, $id)->count();
                if ($count == 0) {
                    $unique = true;
                }
            }
            return $id;
        }
        

?>
