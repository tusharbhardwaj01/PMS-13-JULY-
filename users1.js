function setUpdateAction() {
document.frmUser.action = "update_pub.php";
document.frmUser.submit();
}
function setDeleteAction() {
if(confirm("Are you sure want to delete these rows?")) {
document.frmUser.action = "delete_pub.php";
document.frmUser.submit();
}
}