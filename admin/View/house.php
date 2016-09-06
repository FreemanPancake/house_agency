<!--house.php-->
<?php 
require_once('admin/View/template/head_menu.php');
 ?>
			<div class="col-md-10 col-md-offset-1">
				<div class="text-center"><a href="admin.php?c=user&m=listuser" >转到用户列表</a></div>
					<div class="text-center">
						<h2 class="text-center">房屋列表</h2>
						<br/>
			<!-- <form method=post action="">
				请输入房屋名查询：
				<input type="text" name="key">
				<input type="submit" name='search' value="搜索">
			</form> -->
			<table class="table table-striped text-center">
				<thead style="font-size:18px;">
					<tr class="warning">
						<th class="text-center">图片</th>
						<th class="text-center">租／售</th>
						<th class="text-center">格局</th>
						<th class="text-center">建筑时间</th>
						<th class="text-center">面积</th>
						<th class="text-center">售价</th>
						<th class="text-center">租价</th>
						<th class="text-center">联系人</th>
						<th class="text-center">电话</th>
						<th class="text-center">状态</th>
						<th class="text-center">备注</th>
						<th class="text-center">操作</th>
					</tr>
				</thead>
				<tbody style="font-size:15px;">
					<?php
					foreach ($housedata as $row) {
						echo '<tr class="active">';
						echo '<td align="center"><img src="assset/images/'.$row['pic'].'" width=160px height=90px></td>';
						if ($row['type'] == "0") {
							$type = "出租";
						} else {
							$type ="出售";
						}
						echo '<td>'.$type.'</td>';
						// $tid = $row['tid'];
						// $sql1 = "select * from videotype where tid = '$tid'";
						// $result1 = mysql_query($sql1) or die('查询失败！'.mysql_error());
						// $row1 = mysql_fetch_assoc($result1);
						// $type = $row1['typename'];
						echo '<td>'.$row['housetype'].'</td>';
						echo '<td>'.$row['builddate'].'</td>';
						echo '<td>'.$row['area'].'</td>';
						echo '<td>'.$row['price'].'</td>';
						echo '<td>'.$row['rent'].'</td>';
						echo '<td>'.$row['contact'].'</td>';
						echo '<td>'.$row['tel'].'</td>';
						if($row['issale'] == "1") { $status = "已出租";}
						else if ($row['issale'] == "3") { $status = "已出售";}
						else { $status = "---";}
						echo '<td>'.$status.'</td>';
						echo '<td>'.$row['demo'].'</td>';
						
						echo '<td><a href="admin.php?c=house&m=housedel&id='.$row['id'].'" onClick="return confirm(\'确定要删除吗？\');">删除</a></td>';
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