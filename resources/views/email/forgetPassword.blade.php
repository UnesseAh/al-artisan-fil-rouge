<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
<h1>Reset Password</h1>
<p>Click on the link below to reset your password:</p>
<a href="{{ url('password/reset/' . $token) }}">Reset Password</a>
</body>
</html>
