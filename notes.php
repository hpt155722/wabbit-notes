<?php require("script.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="notes.css">
    <link rel="stylesheet" href="animations.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src = "notes.js"></script>

    <title> My Notes</title>
</head>
<body>
    <div class = cover></div>
    <h1 id = "mynotes">my notes. </h1>
    <div id = "notesCon" class = "horContainer">
        <div class = "verContainer" style = "width: 80%">
            <form action="script.php" method="POST" style = "width: 100%;">
                <textarea id = "note1" name="textarea1" onchange="needToSaveNote1();" spellcheck="false" placeholder="type your note..."maxlength="300"></textarea>
                <input id = "saveb1" class = "button" type="submit" name="saveNote1" value="note 1 saved.">
                <textarea id = "note2" name="textarea2" onchange="needToSaveNote2();" spellcheck="false"placeholder="type your note..."maxlength="300"></textarea>
                <input id = "saveb2" class = "button" type="submit" name="saveNote1" value="note 2 saved.">
                <textarea id = "note3" name="textarea3" onchange="needToSaveNote3();" spellcheck="false"placeholder="type your note..."maxlength="300"></textarea>
                <input id = "saveb3" class = "button" type="submit" name="saveNote1" value="note 3 saved.">
            </form>
                <button class = "button" id = "newNote" onclick = "newNote()"> new note+ </button>
        </div>
    </div>

</body>
</html>