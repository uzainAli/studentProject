<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Students List</title>
</head>
<body>
<?php if(Session::has('student-deleted')): ?>
<span>
<?php echo e(Session::get('student-deleted')); ?>

</span>
<?php endif; ?>
    <div class="container">
    <h1 class="text-center">Students List</h1>
    <a class="btn btn-success mt-3"href="<?php echo e(route('student.add')); ?>">Add New Student</a>
    </div>
    <div class="container mt-2">
    <table class="table table-light table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Course</th>
      <th scope="col">Contact</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($student->id); ?></td>
      <td><?php echo e($student->name); ?></td>
      <td><?php echo e($student->course); ?></td>
      <td><?php echo e($student->mobile_no); ?></td>
      <!--"<?php echo e(route('student.edit',$student->id)); ?>" -->
      <td><a class="btn btn-warning" href= "/edit-student/<?php echo e($student->id); ?>">Edit</a></td>
      <td><a class="btn btn-danger" href="/delete-student/<?php echo e($student->id); ?>">Delete</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
  </tbody>
</table>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\studentProject\resources\views/showStudent.blade.php ENDPATH**/ ?>