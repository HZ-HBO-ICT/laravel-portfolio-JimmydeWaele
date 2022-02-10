<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/navside.css">
    <title>FAQ</title>
</head>

<style>
    .collapsible {
        background-color: rgb(179, 73, 179);
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        text-align: left;
        outline: none;
        font-size: 15px;
        border: black solid 1px;
    }

    .cactive,
    .collapsible:hover {
        background-color: rgb(128, 0, 128);
    }

    .content {
        display: none;
        overflow: hidden;
        background-color: rgba(128, 0, 128, 0.342);
        width: 100%;
        color: white;
        border: black solid 1px;

    }

    p {
        margin-left: 15px;
    }

    body {
        background-image: linear-gradient(45deg, pink, purple);
        background-repeat: no-repeat;
        background-attachment: fixed;
        font-family: 'Roboto', sans-serif;
    }
</style>

<body class="navbar">
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

<main>
    <button type="button" class="collapsible"></button>
    <div class="content"></div>

    <button type="button" class="collapsible">Hoe print je een document op de HZ</button>
    <div class="content">
        <p>Stap 1: Ga naar https://print.hz.nl</p>
        <p>Stap 2: Selecteer het bestand wat je wilt printen</p>
        <p>Stap 3: Selecteer de printer waar je het naartoe wilt sturen (HZ plotter of HZ printer)</p>
        <p>Stap 4: Ga naar de printer en log in met je studentenpas, selecteer het juiste bestand en druk op print</p>
    </div>
    <button type="button" class="collapsible">Hoe scan je een document en stuur je dit naar je laptop op de HZ</button>
    <div class="content">
        <p>Stap 1: Ga naar een printer in de school en log in door je HZ-studentenpas in de houder te leggen</p>
        <p>Stap 2: Leg de documenten die je gescand wilt hebben op het glas in de printen</p>
        <p>Stap 3: Kies in het menu van de printer de optie "scan"</p>
        <p>Stap 4: Nu is je document gescand, je kunt het vinden op https://print.hz.nl</p>
    </div>
    <button type="button" class="collapsible">Wat moet je doen als je ziek bent of symptomen van het corona virus
        hebt?</button>
    <div class="content">
        <p>Stap 1: Ga naar https://hz.nl/coronavirus/positief-getest</p>
        <p>Stap 2: Klik op het stappenplan en volg de stappen. Kom je uit op "je mag naar de HZ" dan is er niks aan de
            hand en mag je gewoon naar school komen, kom je uit op blijf thuis in isolatie en ga door naar stap 3</p>
        <p>Stap 3: Contacteer je SLC, blijf thuis en laat je testen</p>
    </div>
    <button type="button" class="collapsible">Hoe kun je een projectruimte boeken in een van de vleugels van het
        gebouw</button>
    <div class="content">
        <p>Stap 1: Ga naar https://hzuniversity.topdesk.net/tas/public/ssp/</p>
        <p>Stap 2: Klik op maak een reservering</p>
        <p>Stap 3: Klik dan op reserveer een overlegruimte</p>
        <p>Stap 4: Kies de juiste tijd en faciliteiten en bevestig je reservering</p>
    </div>
    <button type="button" class="collapsible">Wat zijn de instructies om je auto te parkeren op de HZ
        parkeerterrein?</button>
    <div class="content">
        <p>Stap 1: Hou je HZ studentenpas voor de scanner en wacht tot de arm volledig is geopend</p>
        <p>Stap 2: Rij door en zoek een parkeerplaats</p>
    </div>
    <script>
        const coll = document.getElementsByClassName("collapsible");
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
<aside>
    <div class="sidebar">
        <li><a
                href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Onderwijs-en-Examenregeling-2021-2022.pdf"
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
</aside>
</body>

</html>
