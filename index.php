<?php
    include("function.php");

    $obj_brth_cr_data = new brth_cr_data();

    if(isset($_POST['save_pdf'])){
        $return_msg = $obj_brth_cr_data->add_data($_POST);
        echo $return_msg;
    }

    // $students = $objCrudAdmin->display_data();

    // if(isset($_GET['status'])){
    //     if($_GET['status']='delete'){
    //         $delete_id = $_GET['id'];
    //         $delmsg =  $objCrudAdmin->delete_data($delete_id);
    //     }
    // }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include jQuery UI library (datepicker is a part of it) -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>



    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <title>CRUD APP</title>

    
    
</head>

<body>
    <section>
        <div class="container">

            <form class="row g-3 form my-4 p-4 shadow" action="" method="post">
                <!-- <div class="col-12">
                    <div class="col-md-4">
                        <label for="" class="form-label">ঠিকানা ২</label>
                        <select id="#" class="form-select">
                            <option selected>bangla</option>
                            <option>english</option>
                        </select>
                    </div>
                    <p>select your language</p>
                    <a href="" class="btn btn-primary">bangla</a>
                    <a href="" class="btn btn-success">english</a>
                </div> -->
                <div class="col-md-6">
                    <label for="us_name" class="form-label">নাম</label>
                    <input type="text" class="form-control" id="us_name" name="us_name" required>
                </div>
                <div class="col-md-6">
                    <label for="ft_name" class="form-label">পিতার নাম</label>
                    <input type="text" class="form-control" id="ft_name" name="ft_name" required>
                </div>
                <div class="col-md-6">
                    <label for="mt_name" class="form-label">মাতার নাম</label>
                    <input type="text" class="form-control" id="mt_name" name="mt_name" required>
                </div>
                <div class="col-md-6">
                    <label for="union_or_ct" class="form-label">ইউনিয়ন / সিটি কর্পোরেশন</label>
                    <select id="union_or_ct" class="form-select" name="union_or_ct">
                        <option selected>সিটি কর্পোরেশন</option>
                        <option>ইউনিয়ন</option>
                    </select>
                </div>
                <div class="row my-2">
                    <div class="col-md-4">
                        <label for="ad_1" class="form-label">ঠিকানা ১</label>
                        <input type="text" class="form-control" id="ad_1" name="ad_1" >
                    </div>
                    <div class="col-md-4">
                        <label for="ad_2" class="form-label">ঠিকানা ২</label>
                        <input type="text" class="form-control" id="ad_2" name="ad_2" >
                    </div>
                    <div class="col-md-4">
                        <label for="ad_3" class="form-label">ঠিকানা ৩</label>
                        <input type="text" class="form-control" id="ad_3" name="ad_3" >
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="rgstr_book_no" class="form-label">নিবন্ধন বহি নাম্বার</label>
                    <input type="number" class="form-control" id="rgstr_book_no" name="rgstr_book_no" required>
                </div>
                <div class="col-md-6">
                    <label for="rgstr_dt" class="form-label">নিবন্ধনের তারিখ</label>
                    <input type="text" class="form-control" id="rgstr_dt" name="rgstr_dt" required>
                </div>
                <div class="col-md-6">
                    <label for="card_rcv_dt" class="form-label">সনদ প্রদানের তারিখ</label>
                    <input type="text" class="form-control" id="card_rcv_dt" name="card_rcv_dt" required>
                </div>

                <div class="col-md-6">
                    <label for="brth_rgstr_no" class="form-label">জন্ম নিবন্ধন নাম্বার</label>
                    <input type="number" class="form-control" id="brth_rgstr_no" name="brth_rgstr_no" required>
                </div>
                <div class="col-md-6">
                    <label for="brth_dt" class="form-label">জন্ম তারিখ</label>
                    <input type="text" class="form-control" id="brth_dt" name="brth_dt" required>
                </div>


                <div class="col-md-6">
                    <label for="ordr_of_chldrn" class="form-label">সন্তানের ক্রম </label>
                    <select id="ordr_of_chldrn" class="form-select" name="ordr_of_chldrn">
                        <?php
                            for ($i = 1; $i <= 19; $i++) {
                                echo "<option>" . convertToBengaliDigits(sprintf('%02d', $i)) . "</option>";
                            }

                            function convertToBengaliDigits($number)
                            {
                                $bengaliDigits = array("০", "১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯");
                                $converted = str_replace(range(0, 9), $bengaliDigits, $number);
                                return $converted;
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label">জন্মস্থান</label>
                    <input type="text" class="form-control" id="brth_ad" name="brth_ad" required>
                </div>
                <div class="col-md-6">
                    <label for="gender" class="form-label"> লিঙ্গ নির্বাচন করুন </label>
                    <select id="gender" class="form-select" name="gender">
                        <option selected>পুরুষ</option>
                        <option>মহিলা</option>
                        <option> ৩য় লিঙ্গ </option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="#" class="form-label">স্থায়ী ঠিকানা </label>
                    <textarea type="text" name="prmnt_ad" class="form-control" id="prmnt_ad" placeholder="1234 Main St"></textarea>
                </div>
                <div class="row my-2">
                    <div class="col-md-4">
                        <label for="#" class="form-label">পিতার জাতীয় পরিচয় পত্র নম্বর </label>
                        <input type="number" name="ft_nid_no" class="form-control" id="ft_nid_no" required>
                    </div>
                    <div class="col-md-4">
                        <label for="#" class="form-label"> পিতার জন্ম নিবন্ধন নম্বর</label>
                        <input type="number" name="ft_brth_rgstr_no" class="form-control" id="ft_brth_rgstr_no" required>
                    </div>
                    <div class="col-md-4">
                        <label for="#" class="form-label">পিতার জাতীয়তা</label>
                        <input type="text" name="ft_nationality" class="form-control" id="ft_nationality" placeholder="বাংলাদেশী" required>
                    </div>

                    <script>
                        // Get the input element by its ID
                        var inputElement = document.getElementById("ft_nationality");

                        // Get the default value from the input's placeholder attribute
                        var defaultValue = inputElement.getAttribute("placeholder");

                        // Set the input's value to the default value
                        inputElement.value = defaultValue;

                        // Add an event listener to the input element to replace the default value with the user's input
                        inputElement.addEventListener("input", function() {
                            // Check if the current value of the input matches the default value
                            if (inputElement.value === defaultValue) {
                                // If the current value matches the default value, clear the input
                                inputElement.value = "";
                            }
                        });
                    </script>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="#" class="form-label">মাতার জাতীয় পরিচয় পত্র নম্বর </label>
                        <input type="number" name="mt_nid_no" class="form-control" id="mt_nid_no">
                    </div>
                    <div class="col-md-4">
                        <label for="#" class="form-label">মাতার জন্ম নিবন্ধন নম্বর</label>
                        <input type="number" name="mt_brth_rgstr_no" class="form-control" id="mt_brth_rgstr_no">
                    </div>
                    <div class="col-md-4">
                        <label for="#" class="form-label">মাতার জাতীয়তা</label>
                        <input type="text" name="mt_nationality" class="form-control" id="mt_nationality" placeholder="বাংলাদেশী">
                    </div>

                    <script>
                        // Get the input element by its ID
                        var inputElement = document.getElementById("mt_nationality");

                        // Get the default value from the input's placeholder attribute
                        var defaultValue = inputElement.getAttribute("placeholder");

                        // Set the input's value to the default value
                        inputElement.value = defaultValue;

                        // Add an event listener to the input element to replace the default value with the user's input
                        inputElement.addEventListener("input", function() {
                            // Check if the current value of the input matches the default value
                            if (inputElement.value === defaultValue) {
                                // If the current value matches the default value, clear the input
                                inputElement.value = "";
                            }
                        });
                    </script>

                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            আমি সম্মত আছি
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" name="save_pdf" class="btn btn-primary">পিডিএফ হিসেবে সংরক্ষন করুন</button>
                </div>
            </form>





        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="lib/datepicker.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>