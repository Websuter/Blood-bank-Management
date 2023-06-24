<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="registration_form.css">
</head>
<body>
<div class="main">
        <div class="register">
            <h2>Register Here</h2>
            <form id="register" method="post" action="api/registration_submit.php">
                <table>
                    
                    <tr>
                        <td><label>First Name: </label></td>
                        <td><input type="text" name="first_name" id="name" placeholder="First Name" required></td>
                        
                    </tr>
                    

                    <tr>
                        <td><label>Last Name: </label></td>
                        <td><input type="text" name="last_name" id="name" placeholder="Last Name" required></td>
                    </tr>

                    <tr>
                        <td><label>D.O.B.:</label></td>
                        <td><input type="date" name="birth" id="name" placeholder="dd-mm-yyyy" required></td>
                    </tr>

                    <tr>
                        <td><label>Age: </label></td>
                        <td><input type="number" name="age" id="name" placeholder="Your Age Here" required></td>
                    </tr>

                    <tr>
                        <td><label>Email:</label></td>
                        <td><input type="email" name="email" id="name" placeholder="Enter your valid email" required></td>
                    </tr>

                    <tr>
                        <td><label>Gender: </label></td>
                        <td>
                            <input type="radio" name="gender" id="male" value="male" checked>
                            <span id="male"> Male</span>
                            <input type="radio" name="gender" id="female" value="female">
                            <span id="female"> Female</span>
                            <input type="radio" name="gender" id="other" value="other">
                            <span id="female"> Other</span>
                        </td>
                    </tr>

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
                        <td><label>Phone No.:</label></td>
                        <td><input type="number" name="phone" id="name" placeholder="Phone Number" style="text-align: center;" required></td>
                    </tr>

                    <tr>
                        <td><label>City:</label></td>
                        <td><input type="text" name="address" id="name" placeholder="address"></td>
                    </tr>

                    <tr>
                        <td><p></p></td>
                        <td ><input type="Submit" value="Submit" name="submit" id="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
