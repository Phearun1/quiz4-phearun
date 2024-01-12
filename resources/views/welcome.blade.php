<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f7fafc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        input, button, label {
            margin-bottom: 10px;
        }

        input[type="file"] {
            display: none;
        }

        label {
            display: block;
            font-weight: 600;
            color: #4a5568;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            background-color: #4299e1;
            color: #ffffff;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2c5282;
        }
    </style>
</head>
<body class="antialiased">
    <form action="/upload" method="post" enctype="multipart/form-data">
        @csrf
        
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname">
        
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname">

        <label for="photo">Image:</label>
        <input type="file" name="photo">
        
        <label for="type">Select Type:</label>
        <input type="radio" name="type" value='1' id="type1">
        <label for="type1"> Block Storage</label><br>
        
        <input type="radio" name="type" value='0' id="type2">
        <label for="type2"> Digital Space</label><br>
        
        <button type="submit">Upload</button>
    </form>
    <a href="/viewtable">View Stored Image</td>
</body>
</html>
