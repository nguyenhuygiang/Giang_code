<html>
    <head>
    <body>
        <?php
        $Name = $Email = $Website = "";
        $nameerr = $emailerr = $websiteerr = "";
        if (empty($_POST["name"])) {
            $nameerr = " ban chua dien ten";
        } else {
            $Name = $_POST["name"];
            if (!preg_match("/^[a-zA-Z ]*$/", $Name)) {
                $nameerr = "khong thoa man, nhap lai";
            }
        }
        if (empty($_POST["email"])) {
            $emailerr = " ban chua dien email";
        } else {
            $Email = $_POST["email"];
            if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                $emailerr = "khong thoa man, nhap lai";
            }
        }
        if (empty($_POST["website"])) {
            $websiteerr = " ban chua dien website";
        } else {
            $Website = $_POST["website"];
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $Website)) {
                $websiteerr = " khong thoa man,nhap lai";
            }
        }
        ?>
        <form action="#" method="post">
            Name <br>
            <input type="text" name="name" value="<?php echo $Name; ?>"><?php echo $nameerr; ?><br><br>
            Email<br/>
            <input type="text" name="email" value="<?php echo $Email; ?>"><?php echo $emailerr; ?><br> <br>
            Website<br/>
            <input type="text" name="website" value="<?php echo $Website; ?>"> <?php echo $websiteerr; ?><br><br/>  
            <input type="submit" name="submit" value="click" style="cursor: pointer"/>
        </form>
        <?php
        echo $Name;
        echo "<br>";
        echo $Email;
        echo "<br>";
        echo $Website;
        ?>
    </body>
</head>
</html>

    