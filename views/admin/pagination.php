<?php
$config['base_url'] = $base_url;
$config['total_rows'] = $total_rows;
$config['per_page'] = $per_page;
$config['uri_segment'] = $uri_segment;

$config['cur_tag_open'] = '<li class="active"><a>';
$config['cur_tag_close'] = '</a></li>';

$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';

if(isset($_GET['search'])){
	$config['first_url'] = $first_url;
	$config['suffix'] = $suffix;
}

$this->pagination->initialize($config);
?>

  <ul class="pagination float-right pull-right">
   <?php echo $this->pagination->create_links(); ?>
  </ul>
