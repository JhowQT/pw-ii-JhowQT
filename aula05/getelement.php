<html>
    <head>
        <title></title>
        <script>
            function mudaCor(novacor) {
                const elem = document.getElementById("paragrafo");
                elem.style.color = novacor;               
            }
        </script>
    </head>
    <body>
        <p id="paragrafo">textinho</p>
        <button onclick="mudaCor('blue');">blue</button>
        <button onclick="mudaCor('red');">red</button>
    </body>
</html>