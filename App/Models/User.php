<?php

namespace App\Models;

class User
{
    private static $table ='usuarios';

    public static function getUser($id)
    {
        $pdo = new \PDO(DBDRIVE.':host='.DBHOST.'dbname='.DBNAME, DBUSER, DBPASS);

        $sql = 'SELECT*FROM'.self::$table.'WHERE id=:id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':id',$id);
        $stmt->execute();

        if($stmt->rowCount()>0){
            return $stmt->fetch(\PDO::FETCH_ASSOC);
        }else{
            throw new \Exception("Nenhum usuário encontrado!");
        }

    }





}