<?php
/**
 * Created by PhpStorm.
 * User: Abrar Ahmed
 * Date: 3/28/2019
 * Time: 3:55 PM
 */

 class DB
{

   public static function getCon(){
        $servername = "localhost";
        $username = "abrardev1";
        $password = "root1234";

        try {
          $conn = new PDO("mysql:host=$servername;dbname=e_hotel", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function addHotelPhone($values){
       $con = self::getCon();
       if($con)
       {
           // prepare sql and bind parameters
           $stmt = $con->prepare("INSERT INTO phonenumbers (phonenumber, hotelAddress) VALUES (?, ?)");
           $stmt->execute($values);
           if($stmt) {
               $last_id = $con->lastInsertId();
               return $last_id;
           }
           else
               echo 'Error';

       }



    }

     public static function addHotelChain($values){
         $con = self::getCon();
         if($con)
         {
             // prepare sql and bind parameters
             $stmt = $con->prepare("INSERT INTO hotal_chain (HQAddress, NumberOfHotels, HQEmail,PhoneNumbers) VALUES (?, ?,?,?)");
             $stmt->execute($values);
             if($stmt) {
                return $stmt;
             }
             else
                 echo 'Error';

         }
     }

     public static function addNewHotelInChain($values){
         $con = self::getCon();
         if($con)
         {
             // prepare sql and bind parameters
             $stmt = $con->prepare("INSERT INTO hotel (hotelAddress, email, rating,numberOfRooms,phonenumber,HQid) VALUES (?, ?,?,?, ?,?)");
             $stmt->execute($values);
             if($stmt) {
                 return $stmt;
             }
             else
                 echo 'Error';

         }
     }

     public static function addNewEmp($values){
         $con = self::getCon();
         if($con)
         {
             // prepare sql and bind parameters
             $stmt = $con->prepare("INSERT INTO employee (Lname, FName, Address,hotelAddress,HQAddress,Manager) VALUES (?, ?,?,?, ?,?)");
             $stmt->execute($values);
             if($stmt) {
                 return $stmt;
             }
             else
                 echo 'Error';

         }
     }

     public static function addNewRoom($values){
         $con = self::getCon();
         if($con)
         {
             // prepare sql and bind parameters
             $stmt = $con->prepare("INSERT INTO room (capacity, extended, view,price,hotelAddress) VALUES (?, ?,?,?, ?)");
             $stmt->execute($values);
             if($stmt->rowCount()>0) {

                 return $con->lastInsertId();
             }
             else
                 echo 'Error';

         }
     }

     public static function addNewDamage($values){
         $con = self::getCon();
         if($con)
         {
             // prepare sql and bind parameters
             $stmt = $con->prepare("INSERT INTO room_damage (damage, hotelAddress, room_id) VALUES (?, ?,?)");
             $stmt->execute($values);
             if($stmt) {

                 return $stmt;
             }
             else
                 echo 'Error';

         }
     }

     public static function addNewAmen($values){
         $con = self::getCon();
         if($con)
         {
             // prepare sql and bind parameters
             $stmt = $con->prepare("INSERT INTO room_amenities (amenities, hotelAddress, room_id) VALUES (?, ?,?)");
             $stmt->execute($values);
             if($stmt) {

                 return $stmt;
             }
             else
                 echo 'Error';

         }
     }

     public static function addNewCustomer($values){
         $con = self::getCon();
         if($con)
         {
             // prepare sql and bind parameters
             $stmt = $con->prepare("INSERT INTO customer (Fname, Lname, Date, Address) VALUES (?, ?,?,?)");
             $stmt->execute($values);
             if($stmt->rowCount()>0) {

                 return $con->lastInsertId();
             }
             else
                 echo 'Error';

         }
     }

     public static function getHotelChains()
     {
         $con = self::getCon();
         $stmt = $con->prepare("SELECT * FROM hotal_chain");
         $stmt->execute();
         return $stmt->fetchAll();
     }

     public static function getHotel()
     {
         $con = self::getCon();
         $stmt = $con->prepare("SELECT * FROM hotel");
         $stmt->execute();
         return $stmt->fetchAll();
     }

     public static function getEmp()
     {
         $con = self::getCon();
         $stmt = $con->prepare("SELECT * FROM employee");
         $stmt->execute();
         return $stmt->fetchAll();
     }

     public static function getRoom()
     {
         $con = self::getCon();
         $stmt = $con->prepare("SELECT room.*, room_damage.damage, room_amenities.amenities FROM room INNER JOIN room_damage ON room.id=room_damage.room_id  INNER JOIN room_amenities on room.id=room_amenities.room_id;");
         $stmt->execute();
         return $stmt->fetchAll();
     }

     public static function getRoomById($id)
     {
         $con = self::getCon();
         $stmt = $con->prepare("SELECT room.* from room where id=?");
         $stmt->execute($id);
         return $stmt->fetch();
     }

     public static function getAvailableRooms()
     {
         $con = self::getCon();
         $stmt = $con->prepare("SELECT * FROM room where c_id is null ");
         $stmt->execute();
         return $stmt->fetchAll();
     }

     public static function getBookedRooms()
     {
         $con = self::getCon();
         $stmt = $con->prepare("SELECT * FROM room where c_id is not null ");
         $stmt->execute();
         return $stmt->fetchAll();
     }

     public static function deleteHotelChain($id)
     {
         $con = self::getCon();
         $stmt = $con->prepare("Delete FROM hotal_chain where id = ?");
         $stmt->execute($id);
         return $stmt;
     }
     public static function deleteHotel($id)
     {
         $con = self::getCon();
         $stmt = $con->prepare("Delete FROM hotel where id = ?");
         $stmt->execute($id);
         return $stmt;
     }
     public static function deleteEmp($id)
     {
         $con = self::getCon();
         $stmt = $con->prepare("Delete FROM employee where id = ?");
         $stmt->execute($id);
         return $stmt;
     }
     public static function deleteRoom($id)
     {
         $con = self::getCon();
         $stmt = $con->prepare("Delete FROM room where id = ?");
         $stmt->execute($id);
         return $stmt;
     }

     public static function checkout($id)
     {
         $con = self::getCon();
         $stmt = $con->prepare("UPDATE room SET c_id=null where id = ?");
         $stmt->execute($id);
         return $stmt;
     }
     public static function checkIn($values)
     {
         $con = self::getCon();
         $stmt = $con->prepare("UPDATE room SET c_id=? where id=?");
         $stmt->execute($values);
         return $stmt;
     }
}