<?php
// Template pagination.php:

?>


<nav aria-label="listing pages" style="text-align:center;">
	<ul class="pagination">
		<li <?php if($page_num==1){echo 'class="disabled"';} ?>>
			<a href="?page=<?php echo $page;?>&pagenum=<?php echo ($page_num-1);?>" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
		<li <?php if($page_num==1){echo 'class="active"';} ?> >
			<a href="?page=<?php echo $page;?>&pagenum=1">1 </a>
		</li>
		<li <?php if($page_num==2){echo 'class="active"';} ?> >
			<a href="?page=<?php echo $page;?>&pagenum=2">2 </a>
		</li>
		<li <?php if($page_num==3){echo 'class="active"';} ?> >
			<a href="?page=<?php echo $page;?>&pagenum=3">3 </a>
		</li>
		<li <?php if($page_num==4){echo 'class="active"';} ?> >
			<a href="?page=<?php echo $page;?>&pagenum=4">4 </a>
		</li>
		<li <?php if($page_num==5){echo 'class="active"';} ?> >
			<a href="?page=<?php echo $page;?>&pagenum=5">5 </a>
		</li>
		<li <?php if($page_num==5){echo 'class="disabled"';} ?>>
			<a href="?page=<?php echo $page;?>&pagenum=<?php echo ($page_num+1);?>" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	</ul>
</nav>
