<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تقرير المباراة</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            align-items: center;
            height: 100vh;
            margin: auto;
            margin-top: 30px;
            background-color: #ffffff;
        }
        .container {
            background-color: #ffffff;
            border: 1px solid #000;
            padding: 20px;
            border-radius: 10px;
        }
        .header {
            align-items: center;
            padding-bottom: 10px;
            margin-bottom: 20px;
            background-color: #feffe4;
        }
        .header_text {
            text-align: center;
        }
        h1 {
            margin: 0;
            font-size: 1.5em;
            border: 2px solid #000;
            padding: 5px;
            text-align: center;
        }
        .details {
            margin-bottom: 20px;
            font-size: 1.2em;
            border-bottom: 3px solid #4CAF50;
        }
        .Info {
            width: 100%;
            padding: 0px;
            background-color: #821de0;
            margin-top: 20px;
            border: 0px;
            border-radius: 10px;
            border-collapse: collapse;
            box-shadow: 10px 10px 20px #babecc,
            -10px -10px 20px #ffffff;
        }
        .info1{
            background-color: #821de0;
            width: 100%;

        }
        .info2{
            background-color: #1deeba;
            width: 100%;
        }
        .info3{
            background-color: #821de0;
            width: 100%;
        }
        .left_info {
            text-align: center;
            background-color: #821de0;
            color: #fff;
            width: 30%;
            padding: 5px;
            border-radius: 10px;
        }
        .right_info {
            text-align: center;
            background-color: #821de0;
            color: #fff;
            width: 30%;
            padding: 5px;
            border-radius: 10px;
        }
        .faragh{
            width: 40%;
            text-align: center;
            background-color: #821de0;
            padding: 5px;
        }
        .left_info2 {
            text-align: center;
            color: #821de0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 2em;
            padding: 10px;
            width: 30%;
            padding: 0px;
        }
        .right_info2 {
            text-align: center;
            color: #821de0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 2em;
            width: 30%;
            padding: 10px;
        }
        .faragh2{
            width: 40%;
            text-align: center;
            color: #821de0;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 1.5em;
            padding: 5px;
        }
        .left_info3 {
            text-align: center;
            background-color: #821de0;
            width: 30%;
            padding: 5px;
            margin-left: 5%;
            color: #d1cfcf;
            border-radius: 10px;
        }
        .right_info3 {
            text-align: center;
            background-color: #821de0;
            width: 30%;
            padding: 5px;
            margin-left: 5%;
            color: #d1cfcf;
            border-radius: 10px;
        }
        .faragh3{
            width: 40%;
            text-align: center;
            background-color: #821de0;
            padding: 5px;
        }
        .competition {
            background-color: #821de0;
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 10px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 10px 10px 20px #babecc,
            -10px -10px 20px #ffffff;
        }
        .name_competition {
            padding: 10px;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif

        }
        .round {
            padding-bottom: 10px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background-color: #1deeba;
            color: #821de0;
        }
        .arbiters {
            width: 100%;
            color: #fff;
            text-align: center;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 30px;

        }
        .arbiters_all {
            background-color: #1deeba;
            color: #821de0;
            font-size: large;
            padding: 7px;
            width: 50%;
            margin: auto;
            margin-bottom: 5px;
            box-shadow: 10px 10px 20px #babecc,
            -10px -10px 20px #ffffff;
        }
        .arbiter_one {
            background-color: #821de0;
            padding: 5px;
            margin: auto;
            margin-bottom: 5px;
            width: 50%;
            box-shadow: 10px 10px 20px #babecc;

        }
        .tableyellow{
            width: 100%;
            background-color: #edf3f1;
            border: 1px solid black;
            border-radius: 10px;
            margin-top: 20px;
            box-shadow: 10px 10px 20px #babecc,
        -10px -10px 20px #ffffff;
        }
        .tryellow {
            background-color: #edf3f1;
        }
        .tdTitreyellow {
            width: 70%;
            text-align: center;
            background-color: #e2f81b;
            border-radius: 10px;
            font-weight: bold;
            padding: 20px;
        }
        .tdTitreRed {
            width: 70%;
            text-align: center;
            background-color: #f8471b;
            border-radius: 10px;
            font-weight: bold;
            padding: 20px;
        }
        .tdTeamYellow1 {
            text-align: center;
            font-weight: bold;
            padding: 20px;
        }
        .tdTeamYellow2 {
            width: 70%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="header_text">
                <div>الجامعة الملكية المغربية لكرة القدم</div>
                <div>عصبة ســوس</div>
                <div>اللجنة الجهوية للبرمجة والمنافسات</div>
            </div>
            <div>
                <h1>تقرير مراقب المقابلة</h1>
            </div>
        </div>
        <div class="details">
            <div>Referee :<span style="color: blue;"> {{ $match->referee->fullName }} </span>| City :<span
                    style="color: blue;"> {{ $match->city }}
                </span>| Licence Number : <span style="color: blue;">{{ $match->referee->licenseNum }}</span> |</div>
            <div> <span style="color: red;">{{ $match->date_match }}</span></div>
        </div>
        <div class="competition">
            <div class="name_competition"><b> {{ $extraData['competition'] }}</b></div>
            <div class="round">Round {{ $extraData['round'] }}</div>
        </div>

        <table class="Info">
            <tr class="info1">
                <td class="left_info">{{ $extraData['scorer_V'] }}</td>
                <td class="faragh"> <td>
                <td class="right_info">{{ $extraData['scorer_L'] }}  </td>
            </tr>
            <tr class="info2">
                <td class="left_info2">{{ $match->visiting_team }}</td>
                <td class="faragh2">{{ $extraData['goal_V'] }} - {{ $extraData['goal_L'] }}<td>
                <td class="right_info2">{{ $match->local_team }}</td>
            </tr>
            <tr class="info3">
                <td class="left_info3">Visiting Team</td>
                <td class="faragh3"><td>
                <td class="right_info3">Local Team</td>
            </tr>
        </table>
        <div class="arbiters">
            <div > <p class="arbiters_all"><b> Arbitres </b></p></div>
            <div ><p class="arbiter_one"><span style="color: #1deeba">1-</span> {{ $extraData['referee_1'] }} </p> </div>
            <div ><p class="arbiter_one"> <span style="color: #1deeba">2-</span> {{ $extraData['referee_2'] }} </p> </div>
            <div ><p class="arbiter_one"> <span style="color: #1deeba">3-</span> {{ $extraData['referee_3'] }} </p> </div>
        </div>
        <table class="tableyellow">
            <tr class="tryellow"  >
                <td></td>
                <td class="tdTitreyellow" >Yellow cards</td>
            </tr>
            <tr class="tryellow" >
                <td class="tdTeamYellow1" >{{ $match->visiting_team }}</td>
                <td class="tdTeamYellow2" >{{ $extraData['warning_V'] }}</td>
            </tr>
            <tr class="tryellow" >
                <td class="tdTeamYellow1">{{ $match->local_team }}</td>
                <td class="tdTeamYellow2" > {{ $extraData['warning_L'] }} </td>
            </tr>
        </table>
        <table class="tableyellow" >
            <tr class="tryellow" >
                <td></td>
                <td class="tdTitreRed" >Red cards</td>
            </tr>
            <tr class="tryellow" >
                <td class="tdTeamYellow1" >{{ $match->visiting_team }}</td>
                <td class="tdTeamYellow2" >{{ $extraData['expulsions_V'] }}</td>
            </tr>
            <tr class="tryellow" >
                <td class="tdTeamYellow1">{{ $match->local_team }}</td>
                <td class="tdTeamYellow2" > {{ $extraData['expulsions_L'] }}  </td>
            </tr>
        </table>
    </div>
</body>
</html>
