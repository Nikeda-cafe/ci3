<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php var_dump($tasks); ?>
    <h1>user</h1>
    <?php foreach($tasks as $task): ?>
        <p><?php echo $task['task_name']; ?></p>
    <?php endforeach; ?>
</body>
</html>