<?php
if(isset($_GET["msg"])&&$_GET["msg"]!="") {
    $message = $_GET["msg"];
    echo "<script>alert('$message')</script>";
    $_GET["msg"] = "";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h2>
        La question: viebdscslnxcb?
    </h2>
    <form action="verifier.php" method="post">
        <div class="form-check">
            <label class="form-check-label">Bon
                <input type="radio" class="form-check-input" name="reponse" value="bon" checked>
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">Moyen
                <input type="radio" class="form-check-input" name="reponse" value="moyen">
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">Mauvais
                <input type="radio" class="form-check-input" name="reponse" value="mauvais">
            </label>
        </div>
        <button type="submit"class="btn btn-dark" value="Submit">Votez ici</button>
    </form>
</body>
</html>