
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bird.css">
    <title>Flappy Bird</title>
</head>
<body>
    <div>
        <input class="btn-home" type='button' value='Home' onclick='history.go(-1)' href="Bird.css" />
    </div>
    <div id="end-menu">
        <h1>Game-over!</h1>
        <p> Score: <span id="end-score"></span></p>
        <p> Best: <span id="best-score"></span></p>
        <button id="restart-button">Restart</button>
    </div>
    <div id="game-container">
        <canvas id="game-canvas" width="400" height="600"></canvas>
        <div id="score-display">0</div>
    </div>
    <script src="Bird.js"></script>
</body>
</html>