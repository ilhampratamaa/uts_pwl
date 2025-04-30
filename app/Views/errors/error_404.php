<!DOCTYPE html>
<html>
<head>
    <title>404 Not Found</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            text-align: center; 
            padding: 50px; 
        }
        h1 { 
            font-size: 50px; 
            color: #dc3545;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>403</h1>
        <h2>Access Forbidden</h2>
        <p>You don't have permission to access this page.</p>
        <a href="<?= base_url('login') ?>" class="btn btn-primary">Return to Login</a>
    </div>
</body>
</html>