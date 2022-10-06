
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>XSS - Attack</title>
</head>

<body>
    <div class="container mt-4">
        <form method="POST" action="add.php">
            <div class="form-group">
                <label for="testimony">Testimony</label>
                <textarea class="form-control" id="testimony" name="testimony" placeholder="User testimony" rows="3">
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>

        <?php if (isset($testimonies)): ?>
            <ul>
                <?php foreach ($testimonies as $key => $testimony): ?>
                    <li>
                        <?= $testimony['testimony']; ?> 
                        <!-- <?= htmlentities($testimony['testimony']); ?>  -->
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>

</html>