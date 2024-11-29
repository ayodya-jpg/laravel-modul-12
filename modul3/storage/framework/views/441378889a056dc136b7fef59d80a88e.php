<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>" class="nav-link">Employee List</a></li>
                </ul>
                <a href="<?php echo e(route('profile')); ?>" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container-sm mt-5">
        <form action="<?php echo e(route('employees.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 border col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Create Employee</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <!-- Nama pertama-->
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input class="form-control <?php echo e(session()->has('errors') && $errors->has('firstName') ? 'is-invalid' : ''); ?>"
                                   type="text" name="firstName" id="firstName" value="<?php echo e(old('firstName')); ?>" placeholder="Enter First Name">
                            <?php if(session()->has('errors') && $errors->has('firstName')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('firstName')); ?>

                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Nama terakhir -->
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input class="form-control <?php echo e(session()->has('errors') && $errors->has('lastName') ? 'is-invalid' : ''); ?>"
                                   type="text" name="lastName" id="lastName" value="<?php echo e(old('lastName')); ?>" placeholder="Enter Last Name">
                            <?php if(session()->has('errors') && $errors->has('lastName')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('lastName')); ?>

                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input class="form-control <?php echo e(session()->has('errors') && $errors->has('email') ? 'is-invalid' : ''); ?>"
                                   type="text" name="email" id="email" value="<?php echo e(old('email')); ?>" placeholder="Enter Email">
                            <?php if(session()->has('errors') && $errors->has('email')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('email')); ?>

                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- umur -->
                        <div class="col-md-6 mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input class="form-control <?php echo e(session()->has('errors') && $errors->has('age') ? 'is-invalid' : ''); ?>"
                                   type="text" name="age" id="age" value="<?php echo e(old('age')); ?>" placeholder="Enter Age">
                            <?php if(session()->has('errors') && $errors->has('age')): ?>
                                <div class="invalid-feedback">
                                    <?php echo e($errors->first('age')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="<?php echo e(route('employees.index')); ?>" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH C:\Laravel\modul3\resources\views/employee/create.blade.php ENDPATH**/ ?>