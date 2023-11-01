<?php
function connectdb() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
      $conn = new PDO("mysql:host=$servername;dbname=duanmaupro", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
    } catch(PDOException $e) {
      echo "Connection failed: " . $e->getMessage();
    }
  
    return($conn);
  }

function get_all($sql) {
    $conn = connectdb();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $list_product = $stmt->fetchAll();
    $conn = null;
    return $list_product;
}
function get_one($sql) {
    $conn = connectdb();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $list_product = $stmt->fetch();
    $conn = null;
    return $list_product;
}
function insert($sql){
    $conn=connectdb();
    $conn->exec($sql);
    $conn = null;
 }
 function delete($sql){
    $conn=connectdb();
    $conn->exec($sql);
    $conn = null;
 }
 function update($sql){
    $conn=connectdb();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $conn = null;
 }
?>