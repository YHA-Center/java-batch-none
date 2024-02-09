<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="ISO-8859-1">
	<title>Insert title here</title>
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<div class="container" id="app">
		<div class="row mb-5">
                <!-- register page  -->
                <div class="col">
                    <div class="card shadow mt-5">
                        <div class="card-header d-flex  align-items-center justify-content-between">
                            <span class="fs-4 fw-semibold">Welcome!</span>
                            <button class="btn btn-secondary btn-sm">
                                <i class="fas fa-chevron-left"></i> Back
                            </button>
                        </div>
                        <div class="card-body">
                            <form action="${pageContext.request.contextPath}/register" method="POST"> 
                            	<input type="hidden"  value="register" name="action">
                      
                                <div class="form-group mt-3">
                                    <label for="name" class="form-label">Username</label>
                                    <input type="text" name="name" id="" class="form-control" value="">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="" class="form-control">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="number" name="phone" id="" class="form-control">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" v-model="password" id="" class="form-control">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="cpassword" class="form-label">Confirm Password</label>
                                    <input type="password" name="cpassword" v-model="cpassword" id="" class="form-control">
                                    <small class="error" id="passwordError" style="color: red;">{{ status }}</small>
                                </div>
                                
                                <div class="form-group d-flex flex-column">
                                    <input type="submit" class="btn btn-primary mt-3 shadow"  id="submitBtn" value="Register">
                                    <a href="" class="mt-2 text-center">Already have an account?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
         </div>
	</div>
	
	
	<!-- Include Bootstrap JS and jQuery -->
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Custom JavaScript for Password Matching Validation -->
    <script>
    let app = new Vue({
    	el: "#app",
    	data: {
    		password: '',
    		cpassword: '',
    		message: "",
    	},
    	computed: {
    		status(){
    			if(this.password === this.cpassword){
    				this.message = "Password Match";
    			}else{
    				this.message = "Password Doesn't Match";
    			}
    		}
    	},
    });
    </script>
    
</body>
</html>