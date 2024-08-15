<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Table</title>
</head>
<body>
    <h1>Registertion TAble</h1>
    <form action="give" method="post">
        <?php echo csrf_field(); ?>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="enter your name"> 

        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" placeholder="enter your phone no here"> 


        <button type="submit">Submit</button>
       
    </form>
</body>
</html>
<?php /**PATH C:\projectlaravel\resources\views/regisnew.blade.php ENDPATH**/ ?>