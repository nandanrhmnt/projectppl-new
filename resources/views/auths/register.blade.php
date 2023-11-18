<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('template/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('template/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('template/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('template/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('template/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('template/assets/img/Logo.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{asset('template/assets/img/lo.jpeg')}}" width="300" height="50" alt="Klorofil Logo"></div>
								<p class="lead" ><h1 style="font-weight:bold;">Register</h1></p>
							</div>

							<form class="form-auth-small" action="" method="POST">
                                {{ csrf_field() }}
								<div class="form-group">
									<label for="signin-nama" class="control-label sr-only">Nama</label>
									<input name="nama"type="nama" class="form-control{{ $errors->has('nama') ? 'is-invalid' : '' }}" id="signin-nama" placeholder="Nama Lengkap">
                                    @error('nama')
                                        <div class='invalid-feedback'>{{ $message }}</div>
                                    @enderror
								</div>
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input name="email"type="email" class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }}" id="signin-email" placeholder="Email">
                                    @error('email')
                                        <div class='invalid-feedback'>{{ $message }}</div>
                                    @enderror
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="password"type="password" class="form-control{{ $errors->has('password') ? 'is-invalid' : '' }}" id="signin-password" placeholder="Password">
                                    @error('password')
                                        <div class='invalid-feedback'>{{ $message }}</div>
                                    @enderror
								</div>
                                <div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password Confirmation</label>
									<input name="password_confirmation"type="password" class="form-control{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="signin-password" placeholder="Konfirmasi Password">
                                    @error('password_confirmation')
                                        <div class='invalid-feedback'>{{ $message }}</div>
                                    @enderror
								</div>
                                <div class="form-group">
                                    <select
                                        class="form-control{{ $errors->has('role') ? 'is-invalid' : '' }}"
                                        name='role'>
                                        <option values=''>Role</option>
                                        <option values='admin'>Admin</option>
                                        <option values='user'>User</option>
                                    </select>
                                    @error('role')
                                    <div class='invalid-feedback'>{{ $message }}</div>
                                    @enderror
                                </div>
								<button type="submit" style="margin-top: 10px;" class="btn btn-primary">REGISTER</button>
							</form>

						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Sistem Pendaftaran PKKMB UNIB</h1>
							<p>by Ratna&Nanda</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
