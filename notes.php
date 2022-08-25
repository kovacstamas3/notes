<?php
$connection = require_once 'Connection.php';

$notes = $connection->getNotes();

$currentNote = [
    'id' => '',
    'title' => '',
    'description' => ''
];

if (isset($_GET['id'])){
    $currentNote = $connection->getNoteById($_GET['id']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/04a73e5734.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" type="text/css" href="style.css" >
    <script src="https://kit.fontawesome.com/04a73e5734.js" crossorigin="anonymous"></script>
    <title>Notes</title>
</head>
<body >
<center><h1> Notes <i class="fa-solid fa-bone"></i></h1></center>
<hr class="mx-auto text-white w-50" />
<br><br>
<div>
<form class="new-note text-center" action="create.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $currentNote['id'] ?>" >
    <input type="text" name="title" placeholder="Note title" autocomplete="off" value="<?php echo $currentNote['title'] ?>"><br><br>
    <textarea name="description" cols="30"  rows="4" placeholder="Note description"><?php echo $currentNote['description'] ?>
    </textarea><br><br>
    <button class="btn btn-outline-light" id="newnote">
        <?php if ($currentNote['id']): ?>
        Update note
        <?php else:?>
        New Note
        <?php endif ?>
    </button><br><br>
</form>
<div class="notes text-center" >
    <?php foreach ($notes as $note): ?>
<div class="note">
<div class="title">
<a href="?id=<?php echo $note['id'] ?>"><?php echo $note['title'] ?></a>
</div>
<div class="description">
<?php echo $note['description'] ?>
</div>
<small><?php echo $note['create_date'] ?></small>
<form action="delete.php" method="POST" >
<input type="hidden" name="id" value="<?php echo $note['id'] ?>" >
<button class="close">X</button>
</form>
</div>
<?php endforeach; ?>
</div>
</div>
<footer>
    <center><a href="index.php"><h3><i class="fa-solid fa-house"></i> Homepage</h3></a></center>
</footer>
</body>
</html>