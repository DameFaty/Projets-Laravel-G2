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
                   <?php $__currentLoopData = $liste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tot->id); ?></td>
                        <td><?php echo e($tot->nom); ?></td>
                        <td><?php echo e($tot->matiere); ?></td>
                        <
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </tbody>
            </table>
         </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">

        </script>
    </body>
</html>



           
       <?php /**PATH C:\Users\damef\projetcours1\resources\views/list_formation.blade.php ENDPATH**/ ?>