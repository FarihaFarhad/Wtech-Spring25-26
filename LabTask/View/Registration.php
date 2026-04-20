<?php
include "../Controller/RegistrationController.php";
?>
<!DOCTYPE html>
<html>
    <body>
        <form method = "post" action="">
            <table>
                <tr>
                    <td><label for ="username">Name: </label></td>
                    <td><input type ="text" id="name" name ="name"><?php echo $name?></td>
                </tr>
                <tr>
                    <td><label for ="email">Email: </label></td>
                    <td><input type ="text" id="email" name ="email"><?php echo $email?></td>
                </tr>
                <tr>
                    <td><label for ="website">Website: </label></td>
                    <td><input type ="text" id="website" name ="website"><?php echo $website?></td>
                </tr>
                <tr>
                    <td><label for ="comment">Comment: </label></td>
                    <td><textarea id="comment" name ="comment" rows ="5" cols="30" ><?php echo $comment?></textarea>
                </tr>
                <tr>
                    <td><label for ="Gender">Gender: </label></td>
                    <td><input type ="radio" id="gender" name ="gender" value="Male" >Male <input type ="radio" id="gender" name ="gender" value="Female">Female <input type ="radio" id="gender" name ="gender" value="Other"> Other<br><?php echo $gender?></td>
                </tr>
                <tr>
                    <td><input type ="submit" id="submit" name ="submit"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

