<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learning php</title>
  </head>
  <body>
    <p><?php $name = 'Ajay'; ?></p>
    <!-- Varibles all start in php with $ sign -->
    <p><?php echo $name; ?></p>
    <!-- <li><?php echo 'Favorite pet name: ' . $name; ?></li> -->
    <!-- this will work as string concatanation, however, there is an easier way, below -->
    <li><?php echo "Favorite Pet Name: $name "; ?></li>
    <!-- Variables will print if you wrap them in double quotes, like ruby -->
  </body>
</html>
