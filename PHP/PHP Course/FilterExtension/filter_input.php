<html>
    <body>
        <form method="get" action="<?php echo htmlspecialchars($_SERVER ["PHP_SELF"]); ?>" >
            Email : <input type="text" name="email">
            <input type="submit" value="submit">
        </form>

        <?php
            //Syntax: filter_input(type, variable, filter, options)

            if(isset($_GET["email"])):
                if(!filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL)):
                    echo "E-mail is not valid";
                else:
                    echo "E-mail is valid";
                endif;
            endif;
        ?>
    </body>
</html>