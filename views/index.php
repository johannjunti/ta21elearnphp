<?php
    $name = 'Johann';
?>

<?php include __DIR__ . '/partials/header.php'?>
<?php include __DIR__ . '/partials/nav.php'?>
    <h1>Hello world <?=$name?></h1>
    <ul>
        <?php for($i=0; $i<10; $i++): ?>
                <li><?=$i?></li>
        <?php endfor; ?>    
    </ul>
<?php include __DIR__ . '/partials/footer.php'?>
