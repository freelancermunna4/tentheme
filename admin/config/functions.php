<?php ob_start();
    require('database.php');
    // <!-- ===================Sortcut for query=========== --> 
    function _fetchAll($table){
    global $conn;
    $query = "SELECT * FROM $table";
    return mysqli_fetch_assoc(mysqli_query($conn,$query));
    }
    //made by php_munna
    function _fetch($table,$condition){
    global $conn;
    $query = "SELECT * FROM $table WHERE $condition";
    return mysqli_fetch_assoc(mysqli_query($conn,$query));
    }
    //made by php_munna     
    function _getAll($table){
    global $conn;
    $query = "SELECT * FROM $table";
    return mysqli_query($conn,$query);
    }
    //made by php_munna 
    function _get($table,$condition){
    global $conn;
    $query = "SELECT * FROM $table WHERE $condition";
    return mysqli_query($conn,$query);
    }
    //made by php_munna 
    function _query($table){
    global $conn;
    $query = "$table";
    return mysqli_query($conn,$query);
    }
    //made by php_munna    
    function _deleteid($table,$id){
    global $conn;
    $query = "DELETE FROM $table WHERE id=$id";
    return mysqli_query($conn,$query);
    }
    //made by php_munna     
    function _delete($table,$condition){
    global $conn;
    $query = "DELETE FROM $table WHERE $condition";
    return mysqli_query($conn,$query);
    }

    //made by php_munna     
    function _update($table,$data,$condition){
    global $conn;
    $query = "UPDATE $table SET $data WHERE $condition";
    return mysqli_query($conn,$query);
    }
    //made by php_munna     
    function _insert($table,$data,$value){
    global $conn;
    $query = "INSERT INTO $table($data) VALUE($value)";
    return mysqli_query($conn,$query);
    }    

    //============Other code start here========//
    // $query = _fetchAll("brand");
    // $query = _fetch("SELECT * FROM brand");

    // $query = _getAll("brand");
    // $query = _get("brand","id=8");

    // $query = _deleteid("brand",7);
    // $query = _delete("brand","id=7");

    // $query = _insert("brand","name","'value'");
    // $query = _update("brand","name='munna'","id=8");

    // $query = _query("DELETE FROM brand WHERE id=15");


    function _login($login){
        if(isset($_SESSION['person_id'])){
            $id = $_SESSION['person_id'];
            if($id>0){
              header("location:$login.php");
            }
          }
          if(isset($_COOKIE['person_id'])){
            $id = $_COOKIE['person_id'];
            if($id>0){
              header("location:$login.php");
            }
          }
    }

    function _logout($logout){        
        if(isset($_COOKIE['person_id'])){
            setcookie('person_id','', time() - 86000);
        }
        if(!session_start()){session_start();}
        if(isset($_SESSION['person_id'])){
            unset($_SESSION['person_id']);
            session_destroy();
            header("location:$logout.php");
        }
            header("location:$logout.php");
    }

    $time = time();



    require('plugins.php');
?>