<?php include "../components/db.php"; ?>
<?php 
if(isset($_GET['title_id'])){
    mysqli_query($c,"DELETE FROM `city` WHERE id='$_GET[title_id]'");
    header("Location: forms.php");										
}
?>