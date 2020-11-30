<?php if ($body == "mapping"): ?>
<?php $this->load->view($body); ?>
	<?php else: ?>
<?php $this->load->view('include/head'); ?>
<?php $this->load->view('include/slider'); ?>
<?php $this->load->view($body); ?>
<?php $this->load->view('include/footer'); ?>
<?php endif; ?>