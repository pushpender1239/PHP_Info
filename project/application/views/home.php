<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('head') ?>
<body>

<!-- Fixed Sidebar Left -->
<?php $this->load->view('sidebar1')?>
<!-- ... end Fixed Sidebar Left --> 

<!-- Fixed Sidebar Left -->
<?php $this->load->view('sidebar2')?>

<!-- ... end Fixed Sidebar Left --> 

<!-- Header-BP -->
<?php $this->load->view('header_bp')?>

<!-- ... end Header-BP --> 

<!-- Responsive Header-BP -->
<?php $this->load->view('responsive_header')?>

<!-- ... end Responsive Header-BP -->
<?php $this->load->view('header-spacer')?>

<!-- Window-popup Update Header Photo -->

<?php $this->load->view('window_popup1')?>
<!-- ... end Window-popup Update Header Photo --> 

<!-- Window-popup Choose from my Photo -->
<?php $this->load->view('window_popup2')?>

<!-- ... end Window-popup Choose from my Photo --> 

<a class="back-to-top" href="#"> <img src="svg-icons/back-to-top.svg" alt="arrow" class="back-icon"> </a> 

<!-- JS Scripts --> 
<?php $this->load->view('jsscript')?>
</body>
</html>