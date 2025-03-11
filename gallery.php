<?php
global $imageTitles;
include './inc/functions.php';
include './inc/images.php';
?>

<?php include './views/header.php'; ?>

<?php
foreach ($imageTitles AS $src => $title):?>

    <a href="image.php <?php echo http_build_query(['images' =>$src]); ?>">
<h3><?php echo e($title); ?></h3>

<img src="<?php echo rawurldecode($src);?>" alt="<?php echo e($title);?>">
    </a>
<?php endforeach; ?>




<?php include 'views/footer.php'; ?>
