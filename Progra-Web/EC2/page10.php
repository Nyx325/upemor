<?php include 'includes/header.php'  ?>
<?php
$avengers = ['IronMan', 'Thor', 'Hulk', 'Cap', 'Hawkaye'];
?>
<pre>
    <?php
    print_r($avengers);
    ?>
</pre>
<hr>
<?php
$xmen = array('Wolverine', 'Storm', 'Bestia', 'Ciclope', 'Quick Silver');

echo $xmen[4];
?>
<hr>
<pre>
        <?php
        var_dump($xmen);
        ?>
    </pre>


<?php include 'includes/footer.php'  ?>