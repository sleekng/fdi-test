<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>



</style>
<body style="

        display: flex;
        justify-content: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px !important;
">
    <div  style=" width: 600px; ">
        <div  style=" width:100%; margin-top: 40px;  text-align: center;  margin-bottom: 10px;">
            <img style="text-align: center;" src=" {{ $message->embed(public_path('storage/img/logo.png')) }}" alt="" width="150px">
        </div>
        <div style=" text-align: center; font-weight: bold;">
            <p>Chartered Institute of Professional Printers of Nigeria (CIPPON)</p>
        </div>
        <div>
            <h3 style=" font-weight:600 padding: 10px 20px;
            text-align: center;
            ">{{$UserInfo['message_title']}}</h3>
        </div>
        <div>
        </div>
        <div  style="padding: 40px 4px;">
            <div style="margin-bottom: 10px;">
                <h1>Hello {{$UserInfo['firstname']}} {{$UserInfo['lastname']}} </h3>
            </div>
            <div style="margin-top: 40px;">
               <p> {!! $UserInfo['message_body'] !!} </p>
            </div>
    
        </div>

        <div  style="      font-size: 11px;
        background-color: #e8e8e8;
        padding: 20px;
        color: #333;
        border-radius: 2px;
        text-align: center;">
            <p> The Chartered Institute of Professional Printers of Nigeria (CIPPON) is charged with the duty of regulating, controlling, managing and administration of Printers, the business of printing and other printing related matters in Nigeria. As the regulator of the Nigerian print industry, this strategic framework is the working document of the Industry from 2019 -2021. </p>

            <div style=" display: flex; justify-content: center;  text-align:center;">
                <ul style="display: flex;         list-style: none;
                margin-top: 10px;">
                    <li style="         text-decoration: none;
        margin-right: 20px;">
                        <a href="https://cippon.org">Home</a>
                    </li>
                    <li style="         text-decoration: none;
        margin-right: 20px;">
                        <a href="https://cippon.org/media">Media</a>
                    </li>
                    <li style="         text-decoration: none;
        margin-right: 20px;">
                        <a href="https://cippon.org/news">News</a>
                    </li>
                    <li style="         text-decoration: none;
        margin-right: 20px;">
                        <a href="https://cippon.org/team">Team</a>
                    </li>
                    <li style="         text-decoration: none;
        margin-right: 20px;">
                        <a href="https://cippon.org/about-us">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>