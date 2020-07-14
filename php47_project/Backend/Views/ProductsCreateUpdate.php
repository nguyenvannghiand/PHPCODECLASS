<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit Product</div>
        <div class="panel-body">
            <!-- Muon upload duoc file thi phai duoc thuoc tinh enctype="mutipart/form-data-->
            <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Name</div>
                    <div class="col-md-10">
                        <input type="text" value="<?php echo isset($record->name) ? $record->name : ""; ?>" name="name"
                               class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Category</div>
                    <div class="col-md-10">
                        <select name="category_id" class="form-control" style="width: 200px;">
							<?php
								// lay danh muc cap cha
								$category = $this->modelListCategory();
							?>
							<?php foreach ($category as $rows): ?>
                                <option <?php if (isset($record->category_id) && $record->category_id == $rows->id): ?> selected <?php endif; ?>
                                        value="$rows->id"><?php echo $rows->name; ?></option>
								<?php
								//Lay danh muc cap con
								$categorySub = $this-> modelListCategorySub($rows->id);
								?>
								<?php foreach ($categorySub as $rowsSub): ?>
                                    <option <?php if (isset($record->category_id) && $record->category_id == $rowsSub->id): ?> selected <?php endif; ?>
                                            value="$rowSub->id">
                                        &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rowsSub->name; ?></option>
								<?php endforeach; ?>
							<?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Price</div>
                    <div class="col-md-10">
                        <input type="number" value="<?php echo isset($record->price) ? $record->price : "0"; ?>" min="0"
                               name="price" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->

                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Discount</div>
                    <div class="col-md-10">
                        <input type="number" value="<?php echo isset($record->discount) ? $record->discount : "0"; ?>"
                               min="0" name="discount" class="form-control" required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Description</div>
                    <div class="col-md-10">
                        <textarea
                                name="description"><?php echo isset($record->description) ? $record->description : ""; ?></textarea>
                        <script type="text/javascript">CKEDITOR.replace("description");</script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Content</div>
                    <div class="col-md-10">
                        <textarea
                                name="content"><?php echo isset($record->content) ? $record->content : ""; ?></textarea>
                        <script type="text/javascript">CKEDITOR.replace("content");</script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="checkbox" <?php if(isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> id="hot" name="hot"> <label for="hot">Hot</label>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="file" name="photo">
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="submit" value="Process" class="btn btn-primary">
                    </div>
                </div>
                <!-- end rows -->
            </form>
        </div>
    </div>
</div>?