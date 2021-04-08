<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    
    $.ajax({
        url:"http://localhost/PHPPRESTAMO/Service/SCliente.php",
        data:{tipo:'B',txtbus:'1'},
        type:"Get",
        dataType:"",
        success:function(resp){
            var tabla = "";
            var JCli = jQuery.parseJSON(JSON.stringify(resp));
            console.log(JCli);
            for (let index = 0; index < JCli.length; index++) {
                tabla+="<tr>";
                tabla+="<td>"+JCli[0]['cod']+"</td>";
                tabla+="<td>"+JCli[0]['nom']+"</td>";
                tabla+="<td>"+JCli[0]['ape']+"</td>";
                tabla+="<td>"+JCli[0]['dni']+"</td>";
                tabla+="</tr>";
            }
            $('#TbLista').html(tabla);
        },error:function(err){
            alert("Error 404:"+err);
        }
    });

    </script>
</head>
<body>
    
</body>

</html>