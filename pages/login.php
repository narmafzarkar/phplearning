<?php include 'header.php'; ?>
<!-- Section -->
<section>
    <div class="wrapper">
        <div class="contact-us">
            <h3>ورود </h3>


            <div class="right-posts auab-right-posts">
                <div class="informations clearfix">
                    <div class="left-inf">

                        <form action="#" method="post">
                            <div class="inputs">
                                <input type="text" name="username" value="" placeholder="نام کاربری :">
                                <input type="password" name="password" value="" placeholder="رمز ورود :">

                            </div>

                            <input type="submit" name="submit" value="ارسال" class="hide-btn">
                        </form>
                        <?php

                        if (@$_POST['submit']) {
                            if (empty($_POST['username']) OR empty($_POST['password']))
                                echo "لطفا مقادیر نام کاربری و رمز عبور را وارد کنید";
                            else
                            {
                             $username=$_POST['username'];
                             $password=sha1($_POST['password']);
                                $sql="SELECT fullname,username,password FROM t_user WHERE username='$username' AND password='$password'";
                                $sql_query=mysqli_query($connect,$sql);
                                $result=mysqli_fetch_assoc($sql_query);
                               $count=mysqli_num_rows($sql_query);
                               if($count==1)
                               { $_SESSION['user']=$result['fullname'];
                               header("location:index.php");
                               }
                               else
                                   echo "نام کاربری یا رمز عبور اشتباه است.";


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
