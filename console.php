<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebDocker Console</title>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/style.css">
</head>

<body>
    <div id="header">
        <h1>Welcome to WebDocker, <?="{$_GET["username"]}"?></h1>
        <a href="https://hub.docker.com/">Docker Hub</a>
    </div>

    <aside id="aside">
        <button id="addnew-button" onclick="dostuff()">+</button>
    </aside>

    <div id="item-container">
        <table>
            <tr>
                <td>CONTAINER NAME : CONTAINER ID</td>
                <td>CONTAINER IMAGE</td>
                <td>STATUS (Running : Stopped)</td>
                <td>
                    <button class="button">RUN</button>
                    <button class="button">EXEC</button>
                    <button class="button">STOP</button>
                </td>
                <td>
                    <button class="delbutton">DELETE</button>
                </td>
            </tr>
            <tr>
                <td>CONTAINER NAME : CONTAINER ID</td>
                <td>CONTAINER IMAGE</td>
                <td>STATUS (Running : Stopped)</td>
                <td>
                    <button class="button">RUN</button>
                    <button class="button">EXEC</button>
                    <button class="button">STOP</button>
                </td>
                <td>
                    <button class="delbutton">DELETE</button>
                </td>
            </tr>
            <tr>
                <td>CONTAINER NAME : CONTAINER ID</td>
                <td>CONTAINER IMAGE</td>
                <td>STATUS (Running : Stopped)</td>
                <td>
                    <button class="button">RUN</button>
                    <button class="button">EXEC</button>
                    <button class="button">STOP</button>
                </td>
                <td>
                    <button class="delbutton">DELETE</button>
                </td>
            </tr>
            <tr>
                <td>CONTAINER NAME : CONTAINER ID</td>
                <td>CONTAINER IMAGE</td>
                <td>STATUS (Running : Stopped)</td>
                <td>
                    <button class="button">RUN</button>
                    <button class="button">EXEC</button>
                    <button class="button">STOP</button>
                </td>
                <td>
                    <button class="delbutton">DELETE</button>
                </td>
            </tr>
            <tr>
                <td>CONTAINER NAME : CONTAINER ID</td>
                <td>CONTAINER IMAGE</td>
                <td>STATUS (Running : Stopped)</td>
                <td>
                    <button class="button">RUN</button>
                    <button class="button">EXEC</button>
                    <button class="button">STOP</button>
                </td>
                <td>
                    <button class="delbutton">DELETE</button>
                </td>
            </tr>
            <tr>
                <td>CONTAINER NAME : CONTAINER ID</td>
                <td>CONTAINER IMAGE</td>
                <td>STATUS (Running : Stopped)</td>
                <td>
                    <button class="button">RUN</button>
                    <button class="button">EXEC</button>
                    <button class="button">STOP</button>
                </td>
                <td>
                    <button class="delbutton">DELETE</button>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>