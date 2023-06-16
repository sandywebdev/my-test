<!DOCTYPE html>
<html>
<head>
    <title>Edit Todo</title>
</head>
<body>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $todo->id; ?>">
    <input type="text" name="name" placeholder="Todo Name" value="<?php echo $todo->name; ?>">
    <input type="submit" value="Save">
</form>

</body>
</html>