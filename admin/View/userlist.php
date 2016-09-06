<!--userlist.php-->
<?php 
require_once('admin/View/template/head_menu.php');
 ?>
	<div class="col-md-10 col-md-offset-1">
		<div class="text-center"><a href="admin.php?c=house&m=gethouse" >转到房屋列表</a></div>
			<div class="text-center">
				<h2 class="text-center">用户列表</h2>
				<br/>
			<!-- <form method=post action="">
				请输入房屋名查询：
				<input type="text" name="key">
				<input type="submit" name='search' value="搜索">
			</form> -->
			<table class="table table-striped text-center">
				<thead style="font-size:18px;">
					<tr class="warning">
						<th class="text-center">NO.</th>
						<th class="text-center">用户名</th>
						<th class="text-center">性别</th>
						<th class="text-center">年龄</th>
						<th class="text-center">电话</th>
						<th class="text-center">头像</th>
						<th class="text-center">用户属性</th>
						<th class="text-center">操作</th>
					</tr>
				</thead>
				<tbody style="font-size:15px;">
					<?php
					foreach ($userdata as $row) {
						echo '<tr class="active">';
						echo '<td>'.$row['uid'].'</td>';
						echo '<td>'.$row['uname'].'</td>';
						if($row['gender'] == "0") {$gender = "男";}
						if($row['gender'] == "1") {$gender = "女";}
						echo '<td>'.$gender.'</td>';
						echo '<td>'.$row['age'].'</td>';
						echo '<td>'.$row['tel'].'</td>';
						echo '<td align="center"><img src="assset/images/'.$row['pic'].'" width=45px height=80px></td>';
						if ($row['flag'] == "0") {
							$type = "买家";
						} else {
							$type ="卖家";
						}
						echo '<td>'.$type.'</td>';
						
						echo '<td><a href="admin.php?c=user&m=userdel&uid='.$row['uid'].'" onClick="return confirm(\'确定要删除吗？\');">删除</a></td>';
						echo '</tr>';
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
<?php 
require_once('admin/View/template/footer.php')
 ?>