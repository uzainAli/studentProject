<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Add Student</title>
</head>
<body>

<?php if(Session::has('add_student')): ?>
<span>
<?php echo e(Session::get('add_student')); ?>

</span>
<?php endif; ?>
<div class="container mt-5">
<form method="post" action="<?php echo e(route('student.edit')); ?>">
    <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" value=<?php echo e($student->name); ?> placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="course">Course</label>
    <input type="text" class="form-control" name="course" value=<?php echo e($student->course); ?> placeholder="Enter course">
  </div>

  <div class="form-group">
    <label for="mobile_no">Cell Number</label>
    <input type="text" class="form-control" name="mobile_no" value=<?php echo e($student->mobile_no); ?> placeholder="03002234444">
  </div>

  <div class="form-group">
    <label for="father-contect">Father Contact</label>
    <input type="text" class="form-control" name="father_contact" value=<?php echo e($student->father_contact); ?> placeholder="03124455875">
  </div>

  <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" name="age" value=<?php echo e($student->age); ?>  placeholder="Enter Age">
  </div>

  <div class="form-group">
    <label for="cnic_no">CNIC</label>
    <input type="text" class="form-control" name="cnic_no" value=<?php echo e($student->cnic_no); ?> placeholder="Enter Cnic">
  </div>

  <div class="form-group">
    <label for="father_name">Father Name</label>
    <input type="text" class="form-control" name="father_name" value=<?php echo e($student->father_name); ?> placeholder="Enter father name">
  </div>
  
  <button type="submit" class="btn btn-primary mt-3">Edit</button>
  <a class="btn btn-danger mt-3"href="<?php echo e(route('student.show')); ?>">Cancel</a>
</form>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\studentProject\resources\views/updateStudent.blade.php ENDPATH**/ ?>