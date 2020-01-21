<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="frontpage.css">
    <title>Homepage</title>
</head>

<body>

    <?php
    $date = date('m/d/Y');
    echo "<p>Todays date is $date</p>";
    ?>
    <h1>Ryan's Webpage</h1>
    <button onclick="window.location.href = 'secondpage.html'">My Work</button>
    <h1>About Me</h1>
    <p>I've got 2 siblings, a younger sister at BYU provo and a younger brother in highschool.</p>
    <p>I've also got the cutest dog in the world, try to guess his name</p>
    <input type="text" id="pet" onchange="nameCheck()">
    <button id = "guess" onclick="nameCheck()">Guess</button>
    <p></p>
    <div hidden id=win>
        <p>You got it! his name is Totoro from the studio ghibli movie "My Neighbor Totoro"</p>
    </div>
    <img src="dog.jpg" alt="my dog" width="512" height="341">
    <script>
        function nameCheck() {
            console.log("test");
            if (document.getElementById("pet").value == "Totoro")
                document.getElementById("win").style.display = "block";
            else
                document.getElementById("win").style.display = "none";

        }
    </script>
</body>

=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="frontpage.css">
    <title>Homepage</title>
</head>

<body>

    <?php
    $date = date('m/d/Y');
    echo "<p>Todays date is $date</p>";
    ?>
    <h1>Ryan's Webpage</h1>
    <button onclick="window.location.href = 'secondpage.html'">My Work</button>
    <h1>About Me</h1>
    <p>I've got 2 siblings, a younger sister at BYU provo and a younger brother in highschool.</p>
    <p>I've also got the cutest dog in the world, try to guess his name</p>
    <input type="text" id="pet" onchange="nameCheck()">
    <button id = "guess" onclick="nameCheck()">Guess</button>
    <p></p>
    <div hidden id=win>
        <p>You got it! his name is Totoro from the studio ghibli movie "My Neighbor Totoro"</p>
    </div>
    <img src="dog.jpg" alt="my dog" width="512" height="341">
    <script>
        function nameCheck() {
            console.log("test");
            if (document.getElementById("pet").value == "Totoro")
                document.getElementById("win").style.display = "block";
            else
                document.getElementById("win").style.display = "none";

        }
    </script>
</body>

>>>>>>> 485adf58130795d93077b651c6644000ecb52b19
</html>