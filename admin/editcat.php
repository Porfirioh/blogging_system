<?php include 'inc/header.php'; ?>
<?php include 'inc/sidebar.php'; ?>

<?php 
if(!isset($_GET['catid']) || $_GET['catid'] == NULL){
    header("Location:catlist.php");
}else{
   $id=$_GET['catid']; 
}
?>

<div class="grid_10">
<div class="box round first grid">
<h2>Update Category</h2>
<div class="block copyblock"> 
<?php 

 if($_SERVER['REQUEST_METHOD']=='POST'){

    $name=$_POST['name'];
    $name= mysqli_real_escape_string($db->link, $name);   


    if(empty($name)){
        echo "<span class='error'>Field Must Note be Empty</span>";
    }else{
        $query="UPDATE tbl_catagory SET name='$name'
        WHERE id='$id' ";

        $updated_row=$db->update($query);

        if($updated_row){
            echo "<span class='success'>Catagory Updated Successfully</span>";
        }else{
            echo "<span class='error'>Catagory not Updated Successfully</span>"; 
        }
    }
 }
?>

<?php

$query="SELECT * FROM tbl_catagory WHERE id='$id' order by id desc ";
$category=$db->select($query);
while($result=$category->fetch_assoc()){

?>

<form action="" method="post">
<table class="form">					
    <tr>
        <td>
            <input type="text" name ="name" value="<?php echo $result['name']; ?>" class="medium" />
        </td>
    </tr>

	<tr> 
        <td>
            <input type="submit" name="submit" Value="Save" />
        </td>
    </tr>
</table>

<?php } ?>


</form>
</div>
</div>
</div>
<?php include 'inc/footer.php'; ?>