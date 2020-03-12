<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PageManager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fbbf500712.js" crossorigin="anonymous"></script>
    <style>
        body {
            position: absolute;
            display: flex;
            flex-direction: column;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            font-family: 'Ubuntu', sans-serif;
        }
        .container {
            margin: 0;
            max-width: unset;
            display: flex;
            height: 100%;
            flex-direction: row;
            justify-content: center;
            align-items: center;
                background-image: url(background.jpg);
                background-color: #cccccc;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position: relative;
        }
        .left{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 30%;
            height: 50%;
            justify-content: center;
        }
        .right{
            display: flex;
            flex-direction: column;
            width: 30%;
            height: 50%;
            justify-content: center;
        }
        .transparent{
            margin-bottom:1em;
            margin-top:1em;
            font-size: 2em;
            line-height: 7em;
            height: 8em;
            width:16em;
            text-align: center;
            border-style: solid;
            vertical-align:middle;
            border-width: 0.2em;
            border-color:#333546;
            background: #00000080;
            color: white;
            text-shadow: 5px 4px black;
            box-shadow: 6px 6px 8px #00000035;
            border-radius: 0.5em;

        }
        .transparent:hover{
            margin-bottom:0.5em;
            margin-top:0.5em;
            background: #00000099;
            line-height: 7.5em;
            height: 8.5em;
            font-size: 2.2em;
            color: white;
            width:17em;
            text-decoration: none;
            transition: 0.5s;
        }
        .attention{
            margin-bottom:1em;
            margin-top:1em;
            font-size: 2em;
            line-height: 7em;
            height: 8em;
            width:16em;
            text-align: center;
            border-style: solid;
            vertical-align:middle;
            border-width: 0.2em;
            border-color:#333546;
            background: #52679780;
            color: white;
            text-shadow: 5px 4px black;
            box-shadow: 6px 6px 8px #00000035;
            border-radius: 0.5em;

        }
        .attention:hover{
            margin-bottom:0.5em;
            margin-top:0.5em;
            background: #6982BB99;
            line-height: 7.5em;
            height: 8.5em;
            font-size: 2.2em;
            color: white;
            width:17em;
            text-decoration: none;
            transition: 0.5s;
        }
    </style>
    
        

</head>
<body>
<div class="container">
        <div class="left">
                <a class="attention" href="localhost:81" rel="noopener noreferrer" target="_blank">WEBB PAGE</a>
                <a class="transparent" href="file/index" rel="noopener noreferrer" target="_blank">FILE MANAGER</a>
        </div>
        <div class="right">
                <a class="transparent" href="phpmyadmin" rel="noopener noreferrer" target="_blank">DATA BASE</a>
        </div>
</div>
</body>
</html>