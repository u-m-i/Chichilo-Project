<?php 
    require __DIR__ . '.\vendor\autoload.php';
    include('./includes/header.html');
    
    session_start();

?>
    <main class="main">
        <?php if(isset($_SESSION['message'])) { ?>
            <script>alert(<?= $_SESSION["message"] ?>);</script>
        <?php session_unset(); } ?>

        <section class="main-section">
            <a href="index.html" class="nav__a">Chichilo</a>
            <h1 class="main-section__title">Create a new user</h1>
            <p class="main-section__sub">You cannot enter a used email</p>

            <form action="create.php" method="post" class="section-form">

                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your real name" class="form-input form-input__name" autofocus>

                    <label for="lastname" class="form-label">Lastname</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Type your real lastname" class="form-input form-input__lastname">

                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" placeholder="Your email" class="form-input form-input__email">

                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" placeholder="How do u feel?" class="form-input form-input__username">

                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="username" placeholder="Trynna be cool" class="form-input form-input__password">

                    <input name="create_user" type="submit" value="Create User" class="form-button form-input__submit">
                    <input type="reset" value="Cancell" class="form-button form-input__reset">
            </form>
        </section>
    </main>

<?php

include("./includes/footer.html");

