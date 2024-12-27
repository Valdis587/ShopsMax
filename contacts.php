<?php
/*
Template Name: Контакты
*/
get_header();
get_template_part( 'template-parts/content', 'head' );
global $shopsmax;
?>
<div class="page container">
    <div class="page__content">
        <div class="page__item">
            <ul class="page__contact-list">
            <?php if($shopsmax['phone']) { ?>
                <li><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $shopsmax['phone']); ?>"><i class="icon-phone-alt"></i><?php echo $shopsmax['phone']; ?></a></li>
                <?php } ?>
                <?php if($shopsmax['email']) { ?>
                <li><a href="mailto:<?php echo $shopsmax['email']; ?>"><i class="icon-envelope"></i><?php echo $shopsmax['email']; ?></a></li>
                <?php } ?>
                <?php if($shopsmax['adres']) { ?>
                <li><i class="icon-map-marker-alt"></i><?php echo $shopsmax['adres']; ?></li>
                <?php } ?>
                <?php if($shopsmax['time-york']) { ?>
                <li><i class="icon-clock"></i> <?php echo $shopsmax['time-york']; ?></li>
                <?php } ?>
            </ul>
        </div>
        <div class="page__item">
        <?php if($shopsmax['map']) { 
            echo $shopsmax['map'];
        } ?>
        </div>
    </div>
</div>
<?php
get_footer();