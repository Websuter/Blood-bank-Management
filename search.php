<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="css/registration_form.css">
</head>
<body>
<div class="main">
        <div class="register">
            <h2>Search Here</h2>
            <form id="register" method="post" action="api/search_do.php">
                <table>
                    
                      <tr>
                        <td><label>Blood Group: </label></td>
                        <td>
                            <select name="blood">
                                    <option value="blood group">Blood group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label>City:</label></td>
                        <td><input type="text" name="address" id="name" placeholder="address"></td>
                    </tr>

                    <tr>
                        <td><p></p></td>
                        <td ><input type="Submit" value="Search" name="submit" id="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>