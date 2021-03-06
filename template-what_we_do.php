<?php
/*
Template Name: What we do page
*/
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php 
	include('inc/services-variables.php');
	$options = of_get_option('services-boxes', 'none' ); 
   ?>


<?php 
		$services = array();
		
		if (isset($options[one]) && $options[one]=="1")  {
	   $services[] = $tinnitus;
		}
		
		if (isset($options[two]) && $options[two]=="1")  {
	   $services[] = $hearing_tests;
		}
		
		if (isset($options[three]) && $options[three]=="1")  {
	   $services[] = $custom_earmolds;
		}
		
		if (isset($options[four]) && $options[four]=="1")  {
	   $services[] = $ald;
		}
		
		if (isset($options[five]) && $options[five]=="1")  {
	   $services[] = $seminars;
		}
		
		if (isset($options[six]) && $options[six]=="1")  {
	   $services[] = $aural_rehab;
		}

		if (isset($options[seven]) && $options[seven]=="1")  {
	   $services[] = $balance;
		}
		
		if (isset($options[eight]) && $options[eight]=="1")  {
	   $services[] = $conservation;
		}
		
		if (isset($options[twentyfive]) && $options[twentyfive]=="1")  {
	   $services[] = $lace;
		}
		
		if (isset($options[nine]) && $options[nine]=="1")  {
	   $services[] = $pediatrics;
		}
		
		if (isset($options[fifteen]) && $options[fifteen]=="1")  {
	   $services[] = $auditory_brainstem_response_test;
		}
		
		if (isset($options[sixteen]) && $options[sixteen]=="1")  {
	   $services[] = $otoacoustic_emission_testing;
		}
		
		if (isset($options[twentyfour]) && $options[twentyfour]=="1")  {
	   $services[] = $vng;
		}
		
		if (isset($options[nineteen]) && $options[nineteen]=="1")  {
	   $services[] = $bluetooth;
		}
		
		if (isset($options[ten]) && $options[ten]=="1")  {
	   $services[] = $oticon;
		}
		
		if (isset($options[eleven]) && $options[eleven]=="1")  {
	   $services[] = $lyric;
		}
		
		if (isset($options[twelve]) && $options[twelve]=="1")  {
	   $services[] = $phonak;
		}
		
		if (isset($options[thirteen]) && $options[thirteen]=="1")  {
	   $services[] = $resound;
		}
		
		if (isset($options[fourteen]) && $options[fourteen]=="1")  {
	   $services[] = $soundcure;
		}
		
		if (isset($options[seventeen]) && $options[seventeen]=="1")  {
	   $services[] = $beltone;
		}

		if (isset($options[eighteen]) && $options[eighteen]=="1")  {
	   $services[] = $unitron;
		}
		
		if (isset($options[twenty]) && $options[twenty]=="1")  {
	   $services[] = $widex;
		}
		
		if (isset($options[twentyone]) && $options[twentyone]=="1")  {
	   $services[] = $bell;
		}
		
		if (isset($options[twentytwo]) && $options[twentytwo]=="1")  {
	   $services[] = $siemens;
		}
		
		if (isset($options[twentythree]) && $options[twentythree]=="1")  {
	   $services[] = $starkey;
		}
		
		if (isset($options[twentysix]) && $options[twentysix]=="1")  {
	   $services[] = $sonic;
		}
	

		$service_count = count($services);
		if ($service_count % 2 == 0) {

			$i = 0;
	
			foreach($services as $service) {
			  if(($i++ % 2) == 0) {
			    echo '<div class="one-third">' . $service . '</div>';
			  }else{
			  	echo '<div class="one-third last">' . $service . '</div>';
			  }
			}
	
			}
			else {
	
			$i = 0;
			$service_odd_last = array_pop($services);
			
			foreach($services as $service) {
			  if(($i++ % 2) == 0) {
			    echo '<div class="one-third">' . $service . '</div>';
			  }else{
			  	echo '<div class="one-third last">' . $service . '</div>';
			  }
			}
	
			echo '<div class="one-third last">' . $service_odd_last . '</div>';
		}

