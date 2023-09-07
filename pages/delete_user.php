<?php include('up_del_4admi_2.php');  ?> 

<?php
include_once '../astu_dbconnect.php';
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query_1=mysqli_query($conn, "DELETE FROM user_basic_info WHERE id='".$_GET['id']."'");

if($query_1)
{
echo "<script>
alert('User Deleted Successfully ');
window.location.href='up_del_4admi_2.php';
</script>";

}
else
{
echo "<script>
alert('User Cannot be deleted');
window.location.href='up_del_4admi_2.php';
</script>";
}

}
?>