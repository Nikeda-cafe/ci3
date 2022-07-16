<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">新規タスク</label>
            <input style="width:300px;" type="text" name="task" class="form-control" placeholder="タスク名" required>
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        </div>
        <button type="submit" class="btn btn-primary btn-block">タスク追加</button>
        <?php if($create === ''): ''; elseif($create === true): echo '<p>タスクを追加しました</p>'; else: echo '<p>タスクの追加に失敗しました</p>'; endif; ?>
    </form>
    <h1>user<?php echo $user_id; ?></h1>
    <?php foreach($tasks as $task): ?>
        <p>タスク名：<?php echo $task['task_name']; ?></p>
        <p>ユーザー名：<?php echo $task['user_name']; ?></p>
    <?php endforeach; ?>
</body>
</html>