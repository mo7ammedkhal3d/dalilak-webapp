<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Not-Found</title>
    <style>
        .my-container{
            height: 95vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .my-container > div{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            grid-gap: 2rem;
            flex-direction: column;
        }

        .my-container div img{
            height: 100%;
            width: 40%;
        }

        .my-container div h1{
            text-align: center;
            font-family: cursive;
            text-transform: uppercase
        }

    </style>
</head>
<body>
    <div class="my-container">
        <div>
            <img src="../assets/img/404.jpg" alt="Loadding">
            <h1>Not Found</h1>
        </div>    
    </div>
</body>
</html>