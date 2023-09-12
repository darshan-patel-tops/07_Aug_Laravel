<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




<div>
    <form action="" method="post">

    <input type="text" name="username" id="username">
    <input type="email" name="email" id="email">

                <select name="cars" id="cars">
            
                </select>

    </form>
</div>

<div id="greeting">

</div>





<script>
    
    // alert("Are You Sure ????")

    // confirm("Are You sure you want to proceed?")
    // prompt("2+2")
    // var username = document.getElementById("username");
    // function call()
    // {

    //     username.addEventListener("onblur",username),function(){
    //         console.log("welcome inside event");
    //     }
    // }
    // call()
   


    const delay = 10000;
   setTimeout(()=>
   {
        document.getElementById("greeting").innerHTML= `Welcome To my website`;
        // console.log("WElcome");
   },delay)

//    addEventListener("domContentLoaded")


//     window.addEventListener("load", (event) => {
//   console.log("page is fully loaded");
// });


function loadmenu()
{

    var fields = "";
   fields =  document.getElementById("cars");

   fetch("https://jsonplaceholder.typicode.com/posts").then((res)=>res.json()).then((response)=>
        {
            var html = ""
            console.log(response);

            response.forEach(data => 
            {
               
                fields+= `<option value="${data.id}">${data.title}</option>`

                    
            });

            document.getElementById("cars").innerHTML = fields

        });

//    fields += `<option value="volvo">Volvo</option>`
//    document.getElementById("cars").innerHTML =fields
}
loadmenu();

</script>


</body>
</html>