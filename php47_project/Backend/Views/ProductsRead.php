<div class="col-md-12">
	<div style="margin-bottom:5px;">
		<a href="index.php?controller=products&action=create" class="btn btn-primary">Add Product</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">List Product</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
				<tr>
					<th style="width: 100px;">Photo</th>
					<th>Name</th>
					<th style="width:200px;">Category</th>
					<th style="width:60px;">Hot</th>
					<th style="width:100px;">Price</th>
					<th style="width:80px;">Discount</th>
					<th style="width:100px;"></th>
				</tr>
				<?php foreach ($listRecord as $rows):?>
					<tr>
						<td style="text-align: center">
                            <?php if ($rows->photo != "" && file_exists("../Assets/Upload/Products/".$rows->photo)):?>
							<img src="../Assets/Upload/Products/<?php echo $rows->photo;?>" style="max-width: 100px;">
							<?php endif;?>
						</td>
						<td><?php echo $rows->name;?></td>
						<td><?php echo $this->getCategory($rows->category_id);?></td>
                        <td style="text-align: center;">
							<?php if($rows->hot==1): ?><span class="fa fa-check"></span><?php endif; ?>
                        </td>
						<td><?php echo number_format($rows->price);?>VND</td>
						<td style="text-align: center"><?php echo $rows->discount;?>%</td>
						<td style="text-align:center;">
							<a href="index.php?controller=products&action=update&id=<?php echo $rows->id;?>">Edit</a>&nbsp;
							<a href="index.php?controller=products&action=delete&id=<?php echo $rows->id;?>" onclick="return window.confirm('Are you sure?');">Delete</a>
						</td>
					</tr>
				<?php endforeach;?>
			</table>
			<style type="text/css">
				.pagination {
					padding: 0px;
					margin: 0px;
				}
			</style>
			<ul class="pagination">
				<li class="pape-item"><a href="#" class="pape-link">Trang</a>
				
				</li>
				<?php for ($i =1;$i <=$numPage; $i++):?>
					<li class="pape-item"><a href="index.php?controller=products&action=read&p=<?php echo $i;?>" class="pape-link"><?php echo $i;?></a></li>
				<?php endfor;?>
			
			</ul>
		</div>
	</div>
</div>
