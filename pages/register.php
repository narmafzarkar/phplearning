<?php include 'header.php'; ?>
<!-- Section -->
<section>
    <div class="wrapper">
        <div class="contact-us">
            <h3>ایجاد حساب کاربری </h3>


            <div class="right-posts auab-right-posts">
                <div class="informations clearfix">
                    <div class="left-inf">

                        <form action="#" method="post">
                            <div class="inputs">
                                <input type="text" name="fullname" value="" placeholder="نام و نام خانوادگی :" required>
                                <input type="text" name="username" value="" placeholder="نام کاربری :" required>
                                <input type="password" name="password" value="" placeholder="رمز ورود :" required>
                                <input type="number" name="age" value="" min="10" max="99" placeholder="سن :">
                                <select name="gender" class="select1">
                                    <option value="male">مرد</option>
                                    <option value="female">زن</option>
                                </select>


                            </div>

                            <input type="submit" name="submit" value="ارسال" class="hide-btn">
                        </form>
                        <?php
                        if (@$_POST['submit']) {
                            $fullname = $_POST['fullname'];
                            $username = $_POST['username'];
                            $password = sha1($_POST['password']);
                            $age = $_POST['age'];
                            $gender = $_POST['gender'];
                            if (empty($_POST['username']) OR empty($_POST['password']) OR empty($_POST['fullname']))
                                echo "لطفا مقادیر نام کاربری و رمز عبور را پر کنید";
                            else {
                                $sql_compare = "SELECT username FROM t_user WHERE username='$username'";
                                $sql_compare_query = mysqli_query($connect, $sql_compare);
                                $count = mysqli_num_rows($sql_compare_query);
                                if ($count == 1)
                                    echo 'نام کاربری تکراری است';
                                 else {

                                    $sql_insert = "INSERT INTO t_user(fullname,username,password,age,gender) VALUES('$fullname','$username','$password','$age','$gender')";
                                    $sql_insert_query=mysqli_query($connect,$sql_insert);
                                    $_SESSION['user']=$fullname;
                                    header("location:index.php");


                                }


                            }


                        }


                        ?>


                    </div>


                </div>
            </div>
</section>
<!-- Footer -->
<footer>

    <div class="copy-right">

        <div class="navac">
            <a href="http://navac.asia/" target="_blank" title="شرکت طراحی سایت ناوک آسیا">
                <div class="navac-logo"></div>
            </a>
            <div class="navac-link">
                <a href="http://navac.asia/" target="_blank" title="طراحی سایت">طراحی سایت</a>
                :
                <a href="http://navac.asia/" target="_blank" title="ناوک آسیا">ناوک آسیا</a>
                <br>
                <a href="http://navac.asia/" target="_blank" title="navac asia">Navac.asia</a>
            </div>
        </div>

</footer>


<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/flickity.pkgd.min.js"></script>
<script type="text/javascript" src="../assets/js/main.js"></script>
</body>
</html>
