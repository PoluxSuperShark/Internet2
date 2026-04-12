<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Internet 2</title>

    <style>
        body {
            font-family: Arial;
            background: #0f172a;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 100px;
        }

        input {
            width: 300px;
            padding: 12px;
            border-radius: 8px;
            border: none;
            outline: none;
            font-size: 16px;
        }

        #results {
            margin-top: 20px;
            width: 320px;
        }

        .result {
            background: #1e293b;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 8px;
            cursor: pointer;
        }

        .result:hover {
            background: #334155;
        }

        .title {
            font-weight: bold;
        }

        .desc {
            font-size: 14px;
            opacity: 0.7;
        }
    </style>
</head>

<body>

    <input type="search" id="search" placeholder="Rechercher...">

    <div id="results"></div>

    <script>
        let data = [];

        // Charger le JSON
        fetch("data.json")
            .then(res => res.json())
            .then(json => {
                data = json;
            });

        const searchInput = document.getElementById("search");
        const resultsDiv = document.getElementById("results");

        searchInput.addEventListener("input", () => {
            const query = searchInput.value.toLowerCase();
            resultsDiv.innerHTML = "";

            if (!query) return;

            const filtered = data.filter(item =>
                item.title.toLowerCase().includes(query) ||
                item.description.toLowerCase().includes(query)
            );

            filtered.forEach(item => {
                const div = document.createElement("div");
                div.className = "result";

                div.innerHTML = `
                    <div class="title">${item.title}</div>
                    <div class="desc">${item.description}</div>
                `;

                div.onclick = () => {
                    window.location.href = item.url;
                };

                resultsDiv.appendChild(div);
            });
        });
    </script>

</body>
</html>