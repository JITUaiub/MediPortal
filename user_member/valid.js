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

//appointment


		function status(){
			var x= document.getElementById("submit").value;
			alert("Request is pending");
			window.location.assign("appointmentstatus.php");
		}
		function add(){
			
			var index = document.getElementById('select_doctor').selectedIndex;
			var option = document.getElementById('select_doctor').options
			var doctor_name = option[index].text;
			if(index ==0){
						alert("Select a doctor")
					}
			else
				{
					//if(var counter=1){
					document.getElementById('d_name').innerHTML += "<strong align=\"left\">Doctor's name :</strong><td align=\"right\"><a href=\"doctorDetails.php\">" + doctor_name + "</a></td><br>";
					//counter=2;
					//}
					//else{
					//	alert("one  doctor is selected")
					//}
				}
		}

//edit profile

function editprofile(){
		var name = document.getElementById("name");
		var mobile = document.getElementById("mobile").value;	
		var email = document.getElementById("email").value;	
		//var form = document.getElementsByTagName("form")[0];		
		
		var flage= false;
		if(name.value==""){
			flage=false;
		}
		else
		{flage=true;}
		return flage;




}







		
		