<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>2048 Game</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="brain.js"></script>
</head>
<body>

    <div class="content">
    <table id="main" class="main">
        <tbody>
            <tr>
                <td>0</td>
                <td>2</td>
                <td>0</td>
                <td>4</td>
            </tr>
            <tr>
                <td>0</td>
                <td>4</td>
                <td>2</td>
                <td>0</td>
            </tr>
            <tr>
                <td>0</td>
                <td>4</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>0</td>
                <td>4</td>
                <td>128</td>
                <td>16</td>
            </tr>
        </tbody>
    </table>
    <br>
    Score = <span id="score">0</span>
    </div>
    <form>
        <button type="submit" formaction="settings/">Click me</button>
    </form>
</body>
</html>