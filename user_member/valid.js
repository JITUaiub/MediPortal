function password_change_function(){
														var x= document.getElementById("password_change").value;
														var currentpassword = document.getElementById("currentpassword").value;
														var newpassword = document.getElementById("newpassword").value;
														var retypepassword = document.getElementById("retypepassword").value;
														if(currentpassword == null|currentpassword == "" ,newpassword == null||newpassword == "" ,retypepassword == null|| retypepassword==""){
															alert("field is empty");
															return false;
														}
														else{
															if(newpassword == retypepassword){
																
																alert("Password is changed");
																window.location.assign("viewprofile.php");
															}
															else{
																alert("Password not matched ");
																return false;
															}	
														}
}