<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/navside.css">
    <title>Dashboard</title>
</head>

<style>
    .table,
    th,
    td {
        border: white solid 2px;
        margin: 10px;
        color: white;
    }

    .box {
        width: 250px;
        height: 325px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        top: 75px;
        right: 648px;
        flex-direction: column;
        box-shadow: 0 30px 60px rgba(0, 0, 0, .4);
        transition: transform .2s;
        border: white solid 2px;
    }

    .box .percent {
        width: 150px;
        height: 150px;
        position: relative;
    }

    .box .percent svg {
        width: 150px;
        height: 150px;
        position: relative;
    }

    .box .percent svg circle {
        width: 150px;
        height: 150px;
        fill: none;
        stroke-width: 10;
        stroke: #000;
        transform: translate(5px, 5px);
        stroke-dasharray: 440;
        stroke-dashoffset: 440;
        stroke-linecap: round;
    }

    .box .percent svg circle:nth-child(1) {
        stroke-dashoffset: 0;
        stroke: #f3f3f3;
    }

    .box .percent svg circle:nth-child(2) {
        stroke-dashoffset: calc(440 - (440 * 75) / 100);
        stroke: black;
    }

    .box .percent .num {
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        color: white;
    }

    .box .percent .num h2 {
        font-size: 48px;
    }

    .box .percent .num h2 span {
        font-size: 24px;
    }

    .box .text {
        padding: 10px 0 0;
        color: white;
        font-weight: 700;
        letter-spacing: 1px;
        text-align: center;
    }

    main {
        border: black solid 1px;
        background-color: rgba(84, 18, 97, 0.651);
        margin-right: 164px;
        margin-top: 65px;
        margin-left: 10px
    }
</style>

<!--navbar-->

<body class="achtergrond">
<header>
    <nav class="navbar">
        <ul>
            <li><a href="http://portfolio/index"><img src="../assets/hz-logo.png" alt="homepage"></a></li>
            <li><a href="http://portfolio/index">Hoofdpagina</a></li>
            <li><a class="active" href="http://portfolio/profile">Wie ben ik</a></li>
            <li><a href="http://portfolio/blog">Blog</a></li>
            <li><a href="http://portfolio/faq">FAQ</a></li>
            <li><a href="http://portfolio/dashboard">Dashboard</a></li>
        </ul>
    </nav>
</header>

<main>
    <table class="table">
        <tr>
            <th>Quartile</th>
            <th>Course</th>
            <th>EC</th>
            <th>Exam</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td rowspan="3">1</td>
            <td>Programme and Career Orientation</td>
            <td>2,5</td>
            <td>Assessment exam</td>
            <td>7</td>
        </tr>
        <tr>
            <td>Computer Science Basics</td>
            <td>5</td>
            <td>Written exam</td>
            <td>7</td>
        </tr>
        <tr>
            <td>Programming Basics</td>
            <td>5</td>
            <td>Case study exam</td>
            <td>6</td>
        </tr>
        <tr>
            <td rowspan="2">2</td>
            <td>Object Oriented Programming</td>
            <td>10</td>
            <td>Case study</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Project</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="2">3</td>
            <td>Framework Developement 1</td>
            <td>5</td>
            <td>Case study</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="3">Framework project 1</td>
            <td>7,5</td>
            <td>Project</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Assessment</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>Report</td>
            <td></td>
        </tr>
        <tr>
            <td rowspan="3">4</td>
            <td>Framework Project 2</td>
            <td>10</td>
            <td>Portfolio</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Project</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Assessment</td>
            <td></td>
        </tr>
        <tr>
            <td>Hele jaar</td>
            <td>Personal Professional Developement</td>
            <td>12,5</td>
            <td>Portfolio</td>
            <td></td>
        </tr>
        <tr>
            <td>Personality 1</td>
            <td></td>
            <td>1,25</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>Personality 2</td>
            <td></td>
            <td>1,25</td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <!-- Progress bar -->
    <div class="box">
        <div class="percent">
            <svg>
                <circle cx="70" cy="70" r="70"></circle>
                <circle cx="70" cy="70" r="70"></circle>
            </svg>
            <div class="num">
                <h2>0<span>%</span></h2>
            </div>
        </div>
        <h2 class="text">Percentage behaalde EC's</h2>
    </div>
</main>

<!--sidebar-->
<div class="sidebar">
    <li><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Onderwijs-en-Examenregeling-2021-2022.pdf"
           target="blanket">HZ
            Onderwijs en Examenregeling 2021-2022</a></li>
    <li><a
            href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
            target="blanket">HBO-ICT
            Implementation Regulations 2021</a></li>
    <li><a href="https://learn.hz.nl" target="blanket">HZ Learn</a></li>
    <li><a
            href="https://teams.microsoft.com/l/channel/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/General?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
            target="blanket">HBO-ICT
            Teams pagina</a></li>
    <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="blanket">Studievoortgang</a></li>
    <li><a href="https://github.com/HZ-HBO-ICT" target="blanket">Github</a></li>
</div>
</body>

</html>
