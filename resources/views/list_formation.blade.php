<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="bg-secondary">
        
        <div class="container mt-4">
            <div class="card col-md-6 offset-3">
                <div class="card-header text-center">
                     Lise des apprenant
                </div>
            </div>
        
             <table class="table table-bordered mt-4">
                 <tr class="bg-light">
                    <th>#</th>
                    <th>Nom de Formation</th>
                    
                 </tr>
               <tbody>
                   @foreach($liste as $tot)
                    <tr>
                        <td>{{$tot->id}}</td>
                        <td>{{$tot->nom}}</td>
                        <td>{{$tot->matiere}}</td>
                        <
                    </tr>
                    @endforeach

                </tbody>
            </table>
         </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

        </script>
    </body>
</html>



           
       