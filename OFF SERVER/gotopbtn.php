<?php $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/"; include($IPATH."gotopbtn.php"); ?>

<aside>
    <a class="gotopbtn" href="#"><i class="fa-solid fa-arrow-up"></i></a>
</aside>

<style>
/*go to the top button start*/
.gotopbtn {
    position: fixed;
    right: 20px;
    bottom: 20px;
    width: 4rem;
    height: 4rem;
    z-index: 999999999999;
    border-radius: 50%;
    opacity: 30%;
    text-align: center;
    line-height: 4rem;
    text-decoration: none;
    font-size: 2rem;
    color: var(--white-color);
    background-color: var(--black-color);
}

.gotopbtn:hover {
    opacity: 70%;
    transition: var(--transition);
    color: #fff
}

.about-gotopbtn {
    right: 20px;
    bottom: 100px;
}

@media only screen and (max-width:667px) {
    .gotopbtn {
        display: none
    }

    /*go to the top button end*/