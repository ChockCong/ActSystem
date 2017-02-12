<?php    function smarty_function_Menu(){			
   $menu="	<ul>
			<li><a href='Noticecontroller.php?title=1'>公告通知</a></li>
			<li><a href='UIcontroller.php?title=2'>活动申报</a></li>
			<li><a href='Personactcontroller.php?title=3'>个人活动</a></li>
			<li><a href='UIcontroller.php?title=4'>个人信息</a></li>
			</ul>";
   echo $menu;
   }
   ?>