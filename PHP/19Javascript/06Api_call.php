<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div id="display_users">

</div>

<script>
    


    function api_call()
    {
        // console.log("inside function");
        fetch("https://jsonplaceholder.typicode.com/users").then((res)=>res.json()).then((response)=>
        {
            var html = ""
            console.log(response);

            response.forEach(data => 
            {
                html +=  `
                <h1>
                <br>
                ${data.id}
                <br>
                ${data.name}
                <br>
                </h1>
                <img src=${data.url} height="100px" width="100px">
                

                    `
            });

            document.getElementById("display_users").innerHTML = html

        });
    }

    api_call();
</script>




</body>
</html>