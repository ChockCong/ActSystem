<?php    function smarty_function_Menu(){			
   $menu="	<ul>
			<li><a href='Indexcontroller.php'>首页</a></li>   		    
			<li><a href='Noticecontroller.php'>公告通知</a></li>
			<li><a href='Declarecontroller.php?declare_title=declare'>活动申报</a></li>
			<li><a href='Personactcontroller.php?myac_title=history'>个人活动</a></li>
			<li><a href='Personinfocontroller.php?info=look'>个人信息</a></li>
   		   	<li><a href='Logincontroller.php'>注销</a></li>
			</ul>";
   echo $menu;
   }
   ?>