<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data From Database in Table</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(100,255,100);
            font-family: sans-serif;
            font-size: 15px;
        }

        table {
            border-collapse: collapse;
        }

        table td, th{
            padding: 10px;
        }

        table th{
            background: #222;
            color: #fff;
        }

        table tr:nth-child(odd){
            background: #f40987;
        }

        .bar{
            height: 3px;
            width: 150px;
            background: #f40987;
            display: block;
            position: relative;
            left: 50%;
            transform: translate(-50%);
        }

        .link{
            position: relative;
            margin: 15px 0;
        }

        .link a{
            text-decoration: none;
            padding: 7px 14px;
            box-shadow: 0 0 5px rgba(0,0,0,0.5);
            border-radius: 4px;
        }

        .link a:nth-child(1){
            background: #f40987;
        }

        .link a:nth-child(2){
            background-color: #333;
            color: #27CD27;
        }

        .opt1, .opt2{
            text-decoration: none;
            padding: 7px 14px;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0,0,0,0.5);
        }

        .opt1{
            background: black;
            color: #fff;
        }

        .opt2{
            background: yellow;
            color: #111;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="heading">
            <h1 style="text-align: center;">ALL RECORDS</h1>
            <span class="bar"></span>
            <br><br>
        </div>
        <div class="link">
            <a href="insert-form.php" class="btn-add">ADD</a>
            <a href="edit-form.php" class="btn-edit">EDIT</a>
        </div>
            <table border="1" cellpadding="10px">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile No</th>
                        <th>Address</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Operation</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>1</td>
                            <td>Rahul Jaiswal</td>
                            <td>realrahuljaiswal@gmail.com</td>
                            <td>7505697139</td>
                            <td>Sonebhadra</td>
                            <td>Uttar Pradesh</td>
                            <td>231226</td>
                            <td>
                                <a href='#' class="opt1">Delete</a>
                                <a href="#"  class="opt2">Edit/Update</a>
                            </td>
                        </tr>
                </tbody>
            </table>
    </div>
</body>

</html>