<!-- resources/views/welcome.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Laravel</title>
    <!-- Add some basic styling -->
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #333;
        }

        h1 {
            font-size: 3rem;
            color: #3490dc; /* Laravel's blue */
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            color: #666;
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
            margin-top: 20px;
        }

        .card a {
            text-decoration: none;
            color: #fff;
            background-color: #3490dc;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .card a:hover {
            background-color: #2779bd;
        }
    </style>
</head>
<body>
    <h1>Welcome to Laravel</h1>
    <p>Your journey into web development begins here. Let's get started!</p>
</body>
</html>
