<?php include_once 'Dbconnects.php';
if(isset($_GET['id']))
{
    $delete_id = $_GET['id'];
    $sql_delete = mysqli_query($connect,"DELETE FROM message WHERE id='$delete_id'"); 
    if($sql_delete){
        echo "<script type='text/javascript'>";
        echo "alert('ลบข้อความสำเร็จ');";
        echo "</script>";
        
    }else{
        echo mysqli_error($connect);
    }
}

?>