<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/navside.css">
    <title>Blog</title>
</head>

<style>
    .cactive,
    .collapsible {
        background-color: rgb(179, 73, 179);
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        outline: none;
        font-size: 15px;
        border: black solid 1px
    }

    .collapsible:hover {
        background-color: rgb(128, 0, 128);
    }

    .content {
        display: none;
        overflow: hidden;
        background-color: rgba(223, 32, 223, 0.705);
        width: 100%;
        color: white;
        border: black solid 1px;
    }

    p {
        margin-left: 15px;
        width: 90%;
    }

    b {
        margin-left: 15px;
    }

    .swot table,
    th,
    td {
        border: black solid 2px;
    }

    p {
        margin-right: 15px;
    }
</style>

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
    <button type="button" class="collapsible"></button>
    <div class="content"></div>
    <button type="button" class="collapsible">Studiekeuze</button>
    <div class="content">
        <b>Studiekeuzeactiviteiten:</b>
        <p>Ik heb voor HBO-ICT geen studiekeuzeactiviten gedaan, echter voor mijn vooropleiding (sportkunde), ben ik wel
            naar
            meerdere open dagen geweest.</p>
        <b>Motivatie voor mijn studiekeuze:</b>
        <p>Ik heb voor deze studie gekozen omdat het mijn droom is om later gamedeveloper te worden, ik denk dat ik dit
            kan bereiken door deze opleiding te volgen en natuurlijk naast de opleiding veel dingen ga moeten proberen om
            een zo goed mogelijk product neer te kunnen zetten.</p>
        <b>Na het voltooien van de opleiding:</b>
        <p style="width: 85%">Na het voltooien van de opleiding wil ik een eigen game gaan maken op triple-A niveau. Dit
            kan met een eigen team zijn maar ik zie het ook zitten om eventueel bij een groter bedrijf te gaan werken en
            daar dan
            iets ICT gerelateerds te gaan doen.</p>
    </div>
    <button type="button" class="collapsible">SWOT analyse</button>
    <div class="content">
        <table class="swot">
            <tr>
                <th>Strengths</th>
                <th>Weaknesses</th>
            </tr>
            <tr>
                <td>
                    <p>- leergierig</p>
                    <p>- nieuwsgierig</p>
                    <p>- vriendelijk</p>
                </td>
                <td>
                    <p>- terughoudend</p>
                    <p>- onzeker</p>
                    <p>- stil</p>
                    <p>- afhankelijk</p>
                    <p>- verslagen</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>- minder stil zijn en meer aanwezig zijn in een groep</p>
                    <p>- leren dingen zelf op te lossen</p>
                </td>
                <td>
                    <p>- opdrachten in groepsverband</p>
                    <p>- verslagen</p>
                </td>
            </tr>
            <tr>
                <th>Opportunities</th>
                <th>Threats</th>
            </tr>
        </table>
    </div>
    <button type="button" class="collapsible">Programmeerervaring</button>
    <div class="content">
        <p>Ik heb zelf nog geen programmeer ervaring, ik heb het zelf nog nooit geprobeerd. Wel heb ik al een beetje
            kennis met windows etc. omdat ik zelf wel een problemen op mijn eigen pc heb proberen op te lossen.</p>
    </div>
    <button type="button" class="collapsible">Eerste feedback</button>
    <div class="content">
        <p>Nog niet mogelijk om in te vullen aangezien ik nu de pitch geef</p>
    </div>
    <button type="button" class="collapsible">Artikel ICT beroepenveld</button>
    <div class="content">
        <p><a style="color:white; text-decoration: none;"
              href="https://www.werkbladmagazine.nl/artikel/kans-op-werk-in-de-ict" target="blanket">Klik op deze tekst voor
                een artikel over
                baankansen in de ICT</a></p>
    </div>

    <script>
        let coll = document.getElementsByClassName("collapsible");
        let i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("cactive");
                let content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>
</main>

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
