<?php
    $first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);

        //calculating days old
        $days_old = $age * 365;

        //adding comma to days old
        $days_old_f = number_format($days_old);
    
        //date
        $date = date('m-d-Y');
        
        //error messages for incorrect entries
        if ( $first_name == '' )
            {$error_message = 'Please enter your first name.';}
        else if ( $last_name == '')
            {$error_message = 'Please enter your last name.';}
        else if ($age === FALSE)
            {$error_message = 'Your age must be a valid number.';}
        else if ( $age <= 0 )
            {$error_message = 'Please enter your ACTUAL age.';}
        else {$error_message = '';}

        //go back to index.php if error occurs
        if ($error_message != '')
            {include 'index.php';
            exit();}

        //can/cannot vote statements
        if ($age >= 18)
            {$message = 'I am old enough to vote in the United States.';}
        else if ($age < 18)
            {$message = 'I am not old enough to vote in the United States.';}

?>

<DOCTYPE html>
<html>
<head>
    <title>Am I old enough to vote?</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
    <div id="results">
        <p id="results1">Hello, my name is <?php echo $first_name . ' ' . $last_name; ?>.</p>
        <p id="results2">I am <?php echo htmlspecialchars ($age); ?> years old, and
        <?php echo htmlspecialchars ($message); ?></p>
        <p id="results3">This means I am at least <?php echo htmlspecialchars ($days_old_f); ?> days old.</p>
        <p id="results4">My voting status as of <?php echo htmlspecialchars ($date); ?>.</p>
        </div>
    </main>
</body>
</html>