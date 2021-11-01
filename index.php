<?php 
//to avoid warning message
error_reporting(E_ERROR | E_PARSE);
//عشان أجلب ملف الاتصال
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>
<?php include_once './parts/header.php'; ?>

<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">اربح معنا</h1>
        <p class="lead fw-normal">أدخل فى السحب معانا على أى منتج فى المحل.</p>
        <p class="lead fw-normal">سجل الآن وكن من الفائزين</p>
        <p class="lead fw-normal">باقى من الوقت</p>
        <!-- Display the countdown timer in an element -->
        <h3 id="countDown"></h3>

        <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
    <ul class="list-group text-center bg-transparent">
        <li class="list-group-item">محلات أبو سليم للسجاد وملابس الجملة تقدم</li>
        <li class="list-group-item">السحب الكبير على جميع منتجاتنا</li>
        <li class="list-group-item">اشتر الآن وأحصل على كودك الخاص</li>
        <li class="list-group-item">تابع بثنا الأسبوعى على صفحتنا على الفيس بوك لتعرف أسماء الفائزين</li>
        <li class="list-group-item">ميعاد البث :الأربعاء من كل أسبوع</li>
    </ul>

</div>



<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form action="<?php $_SERVER['PHP_SELF'];  ?>" method="post" class="mt-5">
            <h3>الرجاء أدخل بياناتك</h3>
            <div class="mb-3">
                <label for="firstName" class="form-label">الاسم الأول</label>
                <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ; ?>">
                <div id="emailHelp" class="form-text error">
                    <?php echo $errors['firstNameError']; ?> </div>
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">اللقب</label>
                <input type="text" name="lastName" id="lastName" class="form-control" value="<?php echo $lastName ; ?>">
                <div id="emailHelp" class="form-text error">
                    <?php echo $errors['lastNameError']; ?>
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">بريدك الإلكترونى</label>
                <input type="text" name="email" id="email" class="form-control" value="<?php echo $email ; ?>" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text error">
                    <?php echo $errors['emailError']; ?>
                </div>
            </div>

            <button name="submit" type="submit" class="btn btn-danger">سجل الآن</button>
        </form>
    </div>

</div>
<!--Precentage Progress-->
<div class="overlay">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>
<!--Modal-->
<div class="win d-grid col-6 mx-auto my-5">
    <!-- Button trigger modal -->

    <button id="winners" type="button" class="btn btn-danger  ">
    تعرف على الفائز
  </button>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <h1 class="modal-title" id="modalLabel">الفائز فى المسابقة</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php foreach($users as $user):?>
                    <h1>
                        <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']). '<br/> '   ;?>
                    </h1>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</div>
<!--
<div class="win d-grid col-6 mx-auto my-5">
    <button class="btn btn-danger  " id="winners">احتيار الفائز</button>

</div>

<div id="cards" class="row mb-5 pb-5 text-center">

    <?php foreach($users as $user):?>
    <div class="col-sm-6">
        <div class="card my-2 bg-light">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']). '<br/> '   ;?></h5>
                <p class="card-text">
                    <?php echo htmlspecialchars($user['email']) ; ?>.
                </p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
-->
<?php include_once './parts/footer.php'; ?>