<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/timetableapp/css/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <header class="navbar">
        <div class="left-header"></div>
        <div class="right-header">Welcome To the Dashboard <?php echo $_SESSION["username"];?> | <a href="/timetableapp/logout.php">Logout</a></div>
    </header>
    <div class="main-body">
    <div class="teachers">
        <div class="addteacher">
            add new teacher +
        </div>
        <div class="teachercard">
            <form method="post">
                <label for="teachername">Name:</label>
                <input name="teachername"type="text" class="teachername">
                <label for="skills">Skills:</label>
                <input name="skills"type="text" class="skills">

            </form>
        </div>
    </div>
    <div class="container">
                <div class="timetable-img text-center">
                    <img src="img/content/timetable.png" alt="">
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr class="bg-light-gray">
                                <th class="text-uppercase">Time
                                </th>
                                <th class="text-uppercase">Monday</th>
                                <th class="text-uppercase">Tuesday</th>
                                <th class="text-uppercase">Wednesday</th>
                                <th class="text-uppercase">Thursday</th>
                                <th class="text-uppercase">Friday</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <td class="align-middle">09:00am</td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>

                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">10:00am</td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>

                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">11:00am</td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">

                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">

                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">12:00pm</td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Lunch</span>
                                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Lunch</span>
                                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Lunch</span>
                                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Lunch</span>
                                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                                </td>
                                <td>
                                    <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Lunch</span>
                                    <div class="margin-10px-top font-size14">11:00-12:00</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">01:00pm</td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle">02:00pm</td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">03:00pm</td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">04:00pm</td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle">05:00pm</td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                                <td class="bg-light-grey">
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</body>
</html>