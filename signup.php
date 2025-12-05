<?php
include 'layout/header.php';
include 'layout/nav.php';
?>

<main class="p-5">
    <div>
        <h2 class="text-center my-4">Sign Up</h2>

        <div class="container d-flex justify-content-center">
            <div class="card p-4 shadow-sm" style="width: 400px;">
<form action="" method="POST">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Fullname</label>
                        <input type="fullname" class="form-control" id="fullname" name="fullname" required />
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" id="email" name="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control" id="password" name="password" required />
                    </div>
                    <div class="mb-3">
                        <label for="confirmpassword" class="form-label">confirmpassword</label>
                        <input type="confirmpassword" class="form-control" id="confirmpassword" name="confirmpassword" required />
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary w-100">Sign Up</button>
                </form>
                

            </div>
        </div>
    </div>
</main>

<?php
include 'layout/footer.php';
?>