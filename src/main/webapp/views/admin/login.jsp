<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="ISO-8859-1">
	<title>Admin Login</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	</head>
<body>

	<div class="container">
		<div class="row">
           <!-- login page  -->
                <div class="col">
                    <div class="card shadow mt-5">
                        <div class="card-header d-flex  align-items-center justify-content-between">
                            <span class="fs-4 fw-semibold">Welcome Back, my partner!</span>
                            <button class="btn btn-secondary btn-sm">
                                <i class="fas fa-chevron-left"></i> Back
                            </button>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="" class="form-control">
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="" class="form-control">
                                </div>
                                <div class="form-group d-flex flex-column">
                                    <button class="btn btn-primary mt-3 shadow">Login</button>
                                    <a href="" class="mt-2 text-center">Forgot Password?</a>
                                    <a href="" class="mt-2 text-center">Are you new to here?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
	</div>

</body>
</html>