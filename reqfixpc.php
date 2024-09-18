
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلب صيانة</title>
    <link rel="stylesheet" href="./css/reqfixp.css">
</head>
<body>
    <header class="navbar">
        <div class="navbar-container">
            <a href="./" class="navbar-link home-link">الرئيسية</a>
            <a href="#about" class="navbar-link center-link">من نحن</a>
            <a href="https://wa.me/966534435949" class="navbar-link contact-link">تواصل معنا</a>
        </div>
    </header>
 
    <form method="POST">
    <main>
        <section class="intro">
            <h1>طلب صيانة</h1>

            <!-- Question 1 -->
            <div class="question-container">
                <div class="question-number">1</div>
                <div class="question-text">
                    <label for="name-input" class="question-label">اسم الشخص \ المدرسة \ القسم</label>
                    <input type="text" id="name-input" name="name" placeholder="ادخل اجابتك" class="answer-input">
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question-container">
                <div class="question-number">2</div>
                <div class="question-text">
                    <label class="question-label">نوع الصيانة</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" id="computer-repair" name="repair-type" value="جهاز حاسب آلي">
                            <label for="computer-repair">جهاز حاسب آلي</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="data-show-repair" name="repair-type" value="data show">
                            <label for="data-show-repair">data show</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="printer-repair" name="repair-type" value="طابعة">
                            <label for="printer-repair">طابعة</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question-container">
                <div class="question-number">3</div>
                <div class="question-text">
                    <label for="device-type" class="question-label">نوع الجهاز</label>
                    <input type="text" id="device-type" name="device-type" placeholder="ادخل اجابتك" class="answer-input">
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question-container">
                <div class="question-number">4</div>
                <div class="question-text">
                    <label for="problem-description" class="question-label">وصف دقيق للمشكلة</label>
                    <textarea id="problem-description" name="description" placeholder="ادخل اجابتك" class="answer-input large-textarea"></textarea>
                </div>
            </div>

            <!-- Question 5 -->
            <div class="question-container">
                <div class="question-number">5</div>
                <div class="question-text">
                    <label for="phone-number" class="question-label">رقم الهاتف</label>
                    <input type="tel" id="phone-number" name="phone" placeholder="ادخل اجابتك" pattern="[0-9]*" inputmode="numeric" class="answer-input text-right">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="submit-container">
                <button type="submit" name="submit" class="submit-button">إرسال</button>
                <p class="note">يتم إرسال البيانات التي ترسلها إلى مالك الموقع.</p>
            </div>
        </section>
    </main>
</form>

    <footer>
        <p>نموذج استبيان</p>
    </footer>
    <script src="./js/sweetalert2.js"></script>
</body>
</html>

<?php

include './inc/connection.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $maintenance_type = mysqli_real_escape_string($conn, $_POST['repair-type']);
    $device_type = mysqli_real_escape_string($conn, $_POST['device-type']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone']);

    $errors = []; // Array to hold error messages

    // Validation
    if (empty($name)) {
        $errors[] = 'قم بكتابة اسمك او اسم الجهة';
    }
    if (empty($maintenance_type)) {
        $errors[] = 'قم بإختيار نوع الصيانة';
    }
    if (empty($device_type)) {
        $errors[] = 'قم بإختيار نوع الجهاز';
    }
    if (empty($description)) {
        $errors[] = 'قم بكتابة وصف للمشكلة';
    }
    if (empty($phone_number)) {
        $errors[] = 'قم بكتابة رقم الهاتف لتواصل معكم';
    }

    if (empty($errors)) {
        // If no errors, proceed to insert data into the database
        $send_data = mysqli_query($conn, "INSERT INTO maintenance_request(`name`, `maintenance_type`,`device_type`, `description`, `phone_number`) 
        VALUES('$name', '$maintenance_type', '$device_type', '$description', '$phone_number')") or die('Query failed');

        if ($send_data) {
            ?>
            
            <script>
                Swal.fire({
                    position: "center", 
                    icon: "success",
                    title: "تم الارسال بنجاح",
                    showConfirmButton: false,
                    timer: 1500
                });
                
                setTimeout(function() {
                    window.location.href = window.location.href; // Redirect to the same page
                }, 2000);
            </script>
            <?php
        }
    } else {
        // If there are validation errors, show the error messages
        foreach ($errors as $error) {
            ?>
            
            <script>
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "<?php echo $error; ?>",
                    showConfirmButton: true,
                    confirmButtonText: "تمام",
                    customClass: {
            confirmButton: 'custom-confirm-button' // Apply custom CSS class to the button
        }
                });
            </script>
            <?php
        }
    }
}
?>