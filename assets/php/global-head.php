<meta charset="UTF-8">
<meta name="author" content="Adam Sochorec">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="/img/favicon.png" type="image/png">  
<link rel="stylesheet" href="/assets/style.css" >
<script>
        document.getElementById('getData').addEventListener('click', () => {
            fetch('http://adamsochorec.com/server.js', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then((response) => response.json())
            .then((data) => {
                document.getElementById('responseData').textContent = JSON.stringify(data);
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        });
    </script>