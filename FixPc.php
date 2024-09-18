<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FixPc</title>
    <link rel="stylesheet" href="./css/FixPcc.css">
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
            <h1>طلب جهاز حاسب آلي</h1>

            <!-- Question 1 -->
            <div class="question-container">
                <div class="question-number">1</div>
                <div class="question-text">
                    <label for="school-input" class="question-label">اسم المدرسة / القسم / المكتب / الإدارة</label>
                    <input type="text" name="school-name" id="school-input" placeholder="أدخل إجابتك" class="answer-input">
                </div>
            </div>

            <!-- Question 2 -->
            <div class="question-container">
                <div class="question-number">2</div>
                <div class="question-text">
                    <label class="question-label">اختر المرحلة</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" id="primary" name="stage" value="ابتدائي">
                            <label for="primary">إبتدائي</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="intermediate" name="stage" value="متوسط">
                            <label for="intermediate">متوسط</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="secondary" name="stage" value="ثانوي">
                            <label for="secondary">ثانوي</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="early-childhood" name="stage" value="طفولة مبكرة">
                            <label for="early-childhood">طفولة مبكرة</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="preschool" name="stage" value="رياض الاطفال">
                            <label for="preschool">رياض الاطفال</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="other" name="stage" value="غير ذلك">
                            <label for="other">غير ذلك</label>
                        </div>
                    </div>
                    <div id="other-stage-container" class="hidden">
                        <label for="other-stage-input" class="question-label">يرجى تحديد المرحلة</label>
                        <input type="text" id="other-stage-input" placeholder="أدخل إجابتك" class="answer-input">
                    </div>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="question-container">
                <div class="question-number">3</div>
                <div class="question-text">
                    <label class="question-label">التصنيف</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" id="boys" name="category" value="بنين">
                            <label for="boys">بنين</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="girls" name="category" value="بنات">
                            <label for="girls">بنات</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 4 -->
            <div class="question-container">
                <div class="question-number">4</div>
                <div class="question-text">
                    <label for="director-name" class="question-label">اسم المدير/ة</label>
                    <input type="text" name="manager_name" id="director-name" placeholder="أدخل إجابتك" class="answer-input">
                </div>
            </div>

            <!-- Question 5 (Updated for Right Text Alignment) -->
            <div class="question-container">
                <div class="question-number">5</div>
                <div class="question-text">
                    <label for="director-phone" class="question-label">رقم جوال المدير/ة</label>
                    <input type="tel" name="phone_number" id="director-phone" placeholder="أدخل رقم الجوال" pattern="[0-9]*" inputmode="numeric" class="answer-input text-right">
                </div>
            </div>

            <!-- Question 6 -->
            <div class="question-container">
                <div class="question-number">6</div>
                <div class="question-text">
                    <label class="question-label">نوع الجهاز المطلوب</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" id="full-computer" name="device" value="جهاز حاسب آلي كامل">
                            <label for="full-computer">جهاز حاسب آلي كامل</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="computer-box" name="device" value="صندوق حاسب آلي فقط">
                            <label for="computer-box">صندوق حاسب آلي فقط</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="computer-screen" name="device" value="شاشة حاسب آلي">
                            <label for="computer-screen">شاشة حاسب آلي</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 7 -->
            <div class="question-container">
                <div class="question-number">7</div>
                <div class="question-text">
                    <label class="question-label">استخدام الجهاز</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" id="office-work" name="usage" value="للأعمال المكتبية">
                            <label for="office-work">للأعمال المكتبية</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="classroom" name="usage" value="للفصول الدراسية">
                            <label for="classroom">للفصول الدراسية</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="laboratories" name="usage" value="المعامل المدرسية">
                            <label for="laboratories">المعامل المدرسية</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 8 -->
            <div class="question-container">
                <div class="question-number">8</div>
                <div class="question-text">
                    <label for="need-reason" class="question-label">سبب الاحتياج</label>
                    <textarea id="need-reason" name="reason_for_need" placeholder="ادخل اجابتك" class="answer-input large-textarea"></textarea>
                </div>
            </div>

            <!-- Question 9 -->
            <div class="question-container">
                <div class="question-number">9</div>
                <div class="question-text">
                    <label for="computer-count" class="question-label">عدد الأجهزة المكتبية الموجودة</label>
                    <input type="number" name="device_qty" id="computer-count" placeholder="الرجاء ادخال الرقم" class="answer-input" min="0" required>
                </div>
            </div>

            <!-- Question 10 -->
            <div class="question-container">
                <div class="question-number">10</div>
                <div class="question-text">
                    <label class="question-label">هل يوجد أجهزة مكتبية تالفة أو غير مستخدمة</label>
                    <div class="radio-group">
                        <div class="radio-item">
                            <input type="radio" id="damaged-yes" name="damaged" value="نعم">
                            <label for="damaged-yes">نعم</label>
                        </div>
                        <div class="radio-item">
                            <input type="radio" id="damaged-no" name="damaged" value="لا">
                            <label for="damaged-no">لا</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Question 11 -->
            <div class="question-container">
                <div class="question-number">11</div>
                <div class="question-text">
                    <label for="damaged-count" class="question-label">عدد الأجهزة المكتبية التالفة أو غير المستخدمة</label>
                    <input type="number" name="damaged-count" id="damaged-count" placeholder="الرجاء إدخال الرقم" class="answer-input" min="0" required>
                </div>
            </div>

            <!-- Question 12 (Modified for interactivity) -->
            <div class="question-container">
                <div class="question-number question-12-number">12</div>
                <div class="question-text question-12-text">
                    <p><strong>في حال توفر الاجهزه المطلوبة وبعد الاتصال على رقم الجوال المسجل اعلاه يتم تعبئة نموذج نقل العهده 👇وإرساله مع المندوب عند الاستلام</strong></p>
                    <div class="file-preview-container">
                        <a href="work2.pdf" download class="pdf-link">تحميل PDF</a>
                        <img src="./img/work22.PNG" alt="PDF Preview" class="file-preview-image" onclick="showImage()">
                        <textarea id="q12-answer" name="fill_trust_form" placeholder="ادخل اجابتك" class="answer-input transparent-input large-textarea"></textarea>
                    </div>
                </div>
            </div>

            <!-- Border and Section after Question 12 -->
            <div class="bordered-section">
                <p>في حال وجود رجيع لديكم نرجو تعبئة هذا النموذج على جهاز الكمبيوتر و إرسالة مع الاجهزة المراد تسليمها او التخلص منها</p>
                <div class="file-preview-container">
                    <a href="checkreturn.docx" download class="docx-link">
                        <button class="download-button">تحميل نموذج الرجيع (Word)</button>
                    </a>
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
    <script>
        // Interactivity for Question 2 (Show/Hide "غير ذلك" input field)
        const stageRadioButtons = document.querySelectorAll('input[name="stage"]');
        const otherStageContainer = document.getElementById('other-stage-container');
        const otherStageInput = document.getElementById('other-stage-input');

        stageRadioButtons.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'غير ذلك') {
                    otherStageContainer.classList.remove('hidden');
                    otherStageInput.required = true;
                } else {
                    otherStageContainer.classList.add('hidden');
                    otherStageInput.required = false;
                    otherStageInput.value = '';
                }
            });
        });

        // Show PDF Preview
        function showImage() {
            const img = document.querySelector('.file-preview-image');
            const newWindow = window.open("");
            newWindow.document.write(`<img src="${img.src}" style="width:100%; height:auto;">`);
        }
    </script>
</body>
</html>

<?php

include './inc/connection.php';

if(isset($_POST['submit'])){

    $school_name = mysqli_real_escape_string($conn, $_POST['school-name']);
    $stage = mysqli_real_escape_string($conn, $_POST['stage']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $manager_name = mysqli_real_escape_string($conn, $_POST['manager_name']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $required_device_type = mysqli_real_escape_string($conn, $_POST['device']);
    $use_of_device = mysqli_real_escape_string($conn, $_POST['usage']);
    $reason_for_need = mysqli_real_escape_string($conn, $_POST['reason_for_need']);
    $desktop_device_count = mysqli_real_escape_string($conn, $_POST['device_qty']);
    $damaged_unused_equipment = mysqli_real_escape_string($conn, $_POST['damaged']);
    $damaged_unused_equip_qty = mysqli_real_escape_string($conn, $_POST['damaged-count']);
    $fill_trust_form = mysqli_real_escape_string($conn, $_POST['fill_trust_form']);

    $errors = []; // Array to hold error messages

    // Validation
    if (empty($school_name)) {
        $errors[] = 'قم بكتابة اسم المدرسة/القسم/المكتب/الإدارة';
    }
    if (empty($stage)) {
        $errors[] = 'قم بإختيار المرحلة الدراسية';
    }
    if (empty($category)) {
        $errors[] = 'قم بإختيار التصنيف بنين / بنات';
    }
    if (empty($manager_name)) {
        $errors[] = 'قم بكتابة اسم المدير/ة';
    }
    if (empty($phone_number)) {
        $errors[] = 'قم بكتابة رقم الهاتف لتواصل معكم';
    }
    if (empty($required_device_type)) {
        $errors[] = 'قم بإختيار نوع الجهاز المطلوب';
    }
    if (empty($use_of_device)) {
        $errors[] = 'قم بإختيار الغرض من استخدام الجهاز';
    }
    if (empty($reason_for_need)) {
        $errors[] = 'قم بكتابة سبب الاحتياج';
    }
    if (empty($desktop_device_count)) {
        $errors[] = 'قم بكتابة عدد الأجهزة المكتبية';
    }
    if (empty($damaged_unused_equipment)) {
        $errors[] = 'قم بإختيار هل يوجد أجهزة مكتبية تالفة أو غير مستخدمة';
    }
    if (empty($damaged_unused_equip_qty)) {
        $errors[] = 'قم بكتابة عدد الأجهزة المكتبية التالفة أو غير المستخدمة';
    }
    if (empty($fill_trust_form)) {
        $errors[] = 'قم بتعبئة نموذج نقل العهده';
    }

    if (empty($errors)) {
        // If no errors, proceed to insert data into the database
        $send_data = mysqli_query($conn, "INSERT INTO request_computer(`school_name`, `stage`,`category`, `manager_name`, `phone_number`, `required_device_type`, `use_of_device`, `reason_for_need`, `desktop_device_count`, `damaged_unused_equipment`, `damaged_unused_equip_qty`, `fill_trust_form`) 
        VALUES('$school_name', '$stage', '$category', '$manager_name', '$phone_number', '$required_device_type', '$use_of_device', '$reason_for_need', '$desktop_device_count', '$damaged_unused_equipment', '$damaged_unused_equip_qty', '$fill_trust_form')") or die('Query failed');

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