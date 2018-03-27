<html>
<head>
    <title>edit bday</title>
</head>
<body>
    <form action="<?= URL ?>kalender/editAction" method="post">
        <input type="text" value="<?php echo $person; ?>" name="name" required="" placeholder="name">
        <input type="number" min="1" max="32" value="<?php echo $day; ?>" name="dag" required="" placeholder="day">
        <input type="number" min="1" max="12" value="<?php echo $month; ?>" name="maand" required="" placeholder="month">
        <input type="number" min="1900" max="<?php echo date('Y'); ?>" value="<?php echo $year; ?>" name="jaar" required="" placeholder="year">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="submit" value="Edit birthday">
    </form>
</body>
</html>