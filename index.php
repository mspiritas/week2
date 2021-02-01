<?php
    if (!isset($first_name)) {$first_name = '';}
    if (!isset($last_name)) {$last_name = '';}
    if (!isset($age)) {$age = '';}  

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Am I old enough to vote?</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <body>
        <main>
            <h1 id="formname">Am I old<br>enough to vote?</h1>
            <form action="display_results.php" method="get">
                <div id="data">
                    <?php if (!empty($error_message)) { ?>
                    <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
                    <?php } ?>
                    <label>First Name:</label>
                    <input type="text" class="info" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>">
                    <br><br>
                    <label>Last Name:</label>
                    <input type="text" class="info" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>">
                    <br><br>
                    <label>Age:</label>
                    <input type="text" class="info" name="age" value="<?php echo htmlspecialchars($age); ?>">
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" id="submit" value="Can I vote?">
                </div>
            </form>
        </main>
    </body>
</html>