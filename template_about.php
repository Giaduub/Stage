<?php /* Template Name: page about */ ?>

<?php get_header(); ?>
<nav class="navbar">
  <strong>WP RESPONSIVE MENU</strong>
  <div class="push-left">

    <button id="menu-toggler" data-class="menu-active" class="hamburger">
      <span class="hamburger-line hamburger-line-top"></span>
      <span class="hamburger-line hamburger-line-middle"></span>
      <span class="hamburger-line hamburger-line-bottom"></span>
    </button>

    <!--  Menu compatible with wp_nav_menu  -->
    <?php
          wp_nav_menu( array(
          'container' =>'nav',
          'class' =>'',
          'theme_location' => '',
          'menu_id' => '',
          'echo' => true,
          'before' => '',
          'after' => '',
          'link_before' => '',
          'link_after' => '',
          'depth' => 0,
          'items_wrap' => '<ul id="primary-menu" class="menu nav-menu"> %3$s </ul>',
          'walker' => '')
          );
          ?>


  </div>
</nav>



<style>

/* Extra */


.navbar {
  align-items: center;
  background: #FDEDB2;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
  display: flex;
  flex-direction: row;
  font-family: sans-serif;
  padding: 10px;
}

.push-left {
  margin-left: auto;
}

/* Menu */
.hamburger {
  background: transparent;
  border: none;
  cursor: pointer;
  display: none;
  height: 30px;
  position: relative;
  width: 30px;
  z-index: 1000;
}
@media screen and (max-width: 768px) {
  .hamburger {
    display: inline-block;
  }
}
.hamburger-line {
  background: #8D222A;
  height: 3px;
  position: absolute;
  left: 0;
  transition: all 0.2s ease-out;
  width: 100%;
}
.hamburger:hover .hamburger-line {
  background: #CF3340;
}
.hamburger-line-top {
  top: 3px;
}
.menu-active .hamburger-line-top {
  top: 50%;
  transform: rotate(45deg) translatey(-50%);
}
.hamburger-line-middle {
  top: 50%;
  transform: translatey(-50%);
}
.menu-active .hamburger-line-middle {
  left: 50%;
  opacity: 0;
  width: 0;
}
.hamburger-line-bottom {
  bottom: 3px;
}
.menu-active .hamburger-line-bottom {
  bottom: 50%;
  transform: rotate(-45deg) translatey(50%);
}

.menu {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
  transition: all 0.25s ease-in;
}
@media screen and (max-width: 768px) {
  .menu {
    background: #FDEDB2;
    flex-direction: column;
    justify-content: center;
    opacity: 0;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    transform: translatey(-100%);
    text-align: center;
  }
  .menu-active .nav-menu {
    transform: translatey(0%);
    opacity: 1;
  }
}
.menu > ul > a {
  color: #444444;
  display: inline-block;
  line-height: 30px;
  margin: 0px 10px;
  text-decoration: none;
  text-transform: uppercase;
}
.menu > ul > a:hover {
  color: #777777;
  text-decoration: underline;
}
@media screen and (max-width: 768px) {
  .menu > ul > a {
    font-size: 20px;
    margin: 8px;
  }
}

</style>

<?php get_footer(); ?>