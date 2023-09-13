<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div id="flags">

</div>

<script>
    function api()
{
    fetch("https://restcountries.com/v3.1/all").then((res)=>res.json()).then((response)=>
    {
        console.log(response);

        flags = ""
        response.forEach(data => {

                flags += `
                <img src="${data.flags.png}" height="100px" width="100px">
                    <h5>${data.altSpellings}</h5>
                    <br>
                `
        });
        document.getElementById("flags").innerHTML = flags;
    });
}

api();
</script>
    
</body>
</html>


<?php
// $api = ``;
// $data = json_encode("https://pokeapi.co/api/v2/pokemon/ditto");
// print_r($data);

?>