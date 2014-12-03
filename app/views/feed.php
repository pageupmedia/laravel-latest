<?php include_once('header.php');?>

<style type="text/css">
#sidebar-wrapper > div {
    display: none;
}
</style>
        <!-- Page Content -->
		<?php //print_r($data); ?>
		    <script src="<?php echo URL::to('/') ;?>/admin/sidekyc/js/jquery-1.11.0.js"></script>
			<?php if(isset($bookmarked)){
							if($bookmarked==0){
							
								$css="color:#ccc;cursor:pointer;";
							
							}else{
							
								$css="color:red;cursor:text;";
							}
				}else{
					$css="color:#ccc;cursor:pointer;";
				}
				?>
        <div id="page-content-wrapper">
            <div class="top-menu-container">
                <div class="top-menu">
                    <button class="btn left lock" onclick='window.location.href="logout"' title="Logout"><span class="icon lock"></span></button>
                    <div class="lock-baloon bubble left" >Your Feed: <b><?php echo Session::get('username');?></b></div>
                    <button class="btn right plus">+</button>
					<!--<select class="btn right">
						<option value="" selected>Sort</option>
						<?php foreach($data as $record1) { ?>
						<option value="<?php echo $record1->category;?>"><?php echo $record1->category;?></option>
						<?php } ?>
					</select>	-->
                    <button class="btn right" id="cat"><span class="caret"></span> Sort</button>
					<?php  echo Form::open(array('url' => 'sort', 'id'=>'ordr_form', 'files' => true));  ?>
					<input type="hidden" id="cat_order" name="ordr" value="<?php if(@$sort1=='asc'){echo 'desc';}else { echo 'asc';}?>" />
					<?php echo Form::close();  ?>
					<?php  echo Form::open(array('url' => 'bookmark1', 'id'=>'bookmark_form', 'files' => true));  ?>
                    <button class="btn right" id="bookmark1"><span class="glyphicon glyphicon-star" style="<?php echo $css;?>"></span> Bookmarked</button>
					<input type="hidden" name="check_bookmard" value="<?php if(isset($bookmarked)){echo $bookmarked;}else{echo '0';}?>" />
					<?php echo Form::close();  ?>
                    <button class="btn right">News I've Shared</button>
                </div>
                <div class="client-dropdown-wrapper">
                    <div class="dropdown-box"><?php if(@$client=='0'){echo 'CLIENT';}else{ echo $client;} ?></div>
					<?php  echo Form::open(array('url' => 'feed', 'id'=>'feed', 'files' => true));  ?>
                    <ul class="client-dropdown">
					<?php $j=0; foreach($cat as $record1) { $j++; ?>
                        <li id="client_name<?php echo $j;?>"><?php echo $record1->client;?></li>
						<script>
						$(function(){
							$('#client_name<?php echo $j;?>').click(function(){
								//alert($('#client_name<?php echo $j;?>').text());
								$('#value').val($('#client_name<?php echo $j;?>').text());
								$('#feed').submit();
							});
						});		
						</script>
						<?php } ?>
						
                    </ul>
					<input type="hidden" name="client" value="" id="value" />
					<!--
					
					<select class="dropdown-box" id="client" name="client">
						<option value="0" <?php if(@$client=='0') {echo 'selected';} ?>>CLIENT</option>
						<option value="David Bradley" <?php if(@$client=="David Bradley") {echo 'selected';}?>>David Bradley</option>
						<option value="Michael Goldberg" <?php if(@$client=="Michael Goldberg") {echo 'selected';}?>>Michael Goldberg</option>
						<option value="Yousef Al Walid" <?php if(@$client=="Yousef Al Walid") {echo 'selected';}?>>Yousef Al Walid</option>
					</select>-->
					<?php echo Form::close();  ?>
                </div>
            </div>
            <div class="news-container">
			<?php $i=0; foreach($data as $record1) { $i++;?>
				<?php if($record1->excerpt=='' and $record1->image_name!=''){ ?>
					<div class="news-box <?php echo strtolower($record1->classname);?>" id="news_show<?php echo $i;?>">
						<div class="news-wrapper">
							<div class="news-content">
								<div class="category"><?php echo $record1->category;?></div>
								<h3><?php echo $record1->short_notes;?></h3>
								<div class="news-source">
									<span class="news-logo google"></span>
									<span class="news-title"><?php echo $record1->title;?></span>
								</div>
							</div>
							<img class="news-image" src="<?php echo URL::to('/') ;?><?php echo $record1->image_url;?>" style="z-index:-11111;" />
						<!--<img src="<?php echo URL::to('/') ;?>/frontend/images/Favourites.png" class="book<?php echo $i;?>" id="b_image" title="bookmark"/>-->
						<!--<button class="btn right" id="bookmark1">--><!--</button>-->
						</div>	
						<div class="action-container">
							<div class="action left"><span class="icon heart hearts<?php echo $i;?>"></span><span class="n-like" id="total_likes<?php echo $i;?>">23</span></div>
							<div class="action left"><span class="icon comment comments<?php echo $i;?>"></span><span class="n-comment" id="total_dislikes<?php echo $i;?>">2</span></div>
							<div class="right"><span class="glyphicon glyphicon-star book<?php echo $i;?>" style="float:right;margin-right:5px; <?php echo $css;?>"></span></div>
						</div>
						<div class="button-container">
							<button class="btn yes" id="yes<?php echo $i;?>" style="width:48%; font-size:11px">YES</button>
							<button class="btn no" id="no<?php echo $i;?>" style="width:48%; font-size:11px">NO</button>
						</div>
					</div>
				<?php } ?>
				<?php if($record1->excerpt!='' and $record1->image_name!='') {?>
					<div class="news-box <?php echo strtolower($record1->classname);?>" id="news_show<?php echo $i;?>">
						<div class="news-wrapper">
							<div class="news-content">
								<div class="category"><?php echo $record1->category;?></div>
								<h3><?php echo $record1->short_notes;?></h3>
								<div class="news-source">
									<span class="news-logo forbes"></span>
									<span class="news-title"><?php echo $record1->title;?>
								</div>
								<p><?php echo $record1->excerpt;?></p>
							</div>
							<img class="news-image" src="<?php echo URL::to('/') ;?><?php echo $record1->image_url;?>" style="z-index:-11111" />
							<!--<img src="<?php echo URL::to('/') ;?>/frontend/images/Favourites.png" class="book<?php echo $i;?>" id="b_image" title="bookmark"/>-->
							<!--<span class="glyphicon glyphicon-star book<?php echo $i;?>" style="float:right;margin-top:10px; margin-right:5px; <?php echo $css;?>"></span>-->
						</div>
						<div class="action-container">
							<div class="action left"><span class="icon heart hearts<?php echo $i;?>"></span><span class="n-like" id="total_likes<?php echo $i;?>">23</span></div>
							<div class="action left"><span class="icon comment comments<?php echo $i;?>"></span><span class="n-comment" id="total_dislike<?php echo $i;?>">2</span></div>
							<div class="right"><span class="glyphicon glyphicon-star book<?php echo $i;?>" style="float:right;margin-right:5px; <?php echo $css;?>"></span></div>
						</div>
						<div class="button-container">
							<button class="btn yes" id="yes<?php echo $i;?>" style="width:48%;font-size:11px;">YES</button>
							<button class="btn no" id="no<?php echo $i;?>" style="width:48%;font-size:11px;">NO</button>
						</div>
					</div>
				<?php } if($record1->image_name=='' and $record1->excerpt!='' ){ ?>	
					<div class="news-box <?php echo strtolower($record1->classname);?>" id="news_show<?php echo $i;?>">
						<div class="news-wrapper">
							<div class="news-content" style="z-index:-11111;">
								<div class="category"><?php echo $record1->category;?></div>
								<h3><?php echo $record1->short_notes;?></h3>
								<div class="news-source">
									<span class="news-logo google"></span>
									<span class="news-title"><?php echo $record1->title;?></span>
								</div>
								<p><?php echo $record1->excerpt;?></p>
							</div>
							<!--<img src="<?php echo URL::to('/') ;?>/frontend/images/Favourites.png" id="b_image" class="book<?php echo $i;?>" title="bookmark"/>-->
							<!--<span class="glyphicon glyphicon-star book<?php echo $i;?>" style="float:right;margin-top:10px; margin-right:5px; <?php echo $css;?>"></span>-->
						</div>
						<div class="action-container">
							<div class="action left"><span class="icon heart hearts<?php echo $i;?>"></span><span class="n-like" id="total_likes<?php echo $i;?>">23</span></div>
							<div class="action left"><span class="icon comment comments<?php echo $i;?>"></span><span class="n-comment" id="total_dislikes<?php echo $i;?>">2</span></div>
							<div class="right"><span class="glyphicon glyphicon-star book<?php echo $i;?>" style="float:right;margin-right:5px; <?php echo $css;?>"></span></div>
						</div>
						<div class="button-container">
							<button class="btn yes" id="yes<?php echo $i;?>" style="width:48%; font-size:11px">YES</button>
							<button class="btn no" id="no<?php echo $i;?>" style="width:48%; font-size:11px">NO</button>
						</div>
					</div>
				<?php } if($record1->image_name=='' and $record1->excerpt==''){ ?>
					   <div class="news-box <?php echo $record1->classname;?>" id="news_show<?php echo $i;?>">
                    <div class="news-wrapper">
                        <div class="news-content" style="z-index:-11111;">
                            <div class="category"><?php echo $record1->category;?></div>
                            <h3><?php echo $record1->short_notes;?></h3>
                            <div class="news-source">
                                <span class="news-logo google"></span>
                                <span class="news-title"><?php echo $record1->title;?></span>
                            </div>
                        </div>
					<!--	<img src="<?php echo URL::to('/') ;?>/frontend/images/Favourites.png" id="b_image" class="book<?php echo $i;?>" title="bookmark"/>-->
					<!--	<span class="glyphicon glyphicon-star book<?php echo $i;?>" style="float:right;margin-top:10px; margin-right:5px;<?php echo $css;?>"></span>-->
                    </div>
                    <div class="action-container">
                        <div class="action left"><span class="icon heart hearts<?php echo $i;?>"></span><span class="n-like" id="total_likes<?php echo $i;?>">23</span></div>
                        <div class="action left"><span class="icon comment comments<?php echo $i;?>"></span><span class="n-comment" id="total_dislike<?php echo $i;?>">2</span></div>
                        <div class="right"><span class="glyphicon glyphicon-star book<?php echo $i;?>" style="float:right;margin-right:5px; <?php echo $css;?>"></span></div>
                    </div>
                    <div class="button-container">
                        <button class="btn yes" id="yes<?php echo $i;?>" style="width:48%; font-size:11px">YES</button>
                        <button class="btn no" id="no<?php echo $i;?>" style="width:48%; font-size:11px">NO</button>
                    </div>
                </div>
				<?php } ?>
				<style>
				.hearts<?php echo $i; ?>:hover{width:25px; height:24px;}
				.comments<?php echo $i; ?>:hover{width:25px; height:24px;}
				.book<?php echo $i; ?>:hover{width:25px; height:24px;}
				</style>
				<script>
				$(document).ready(function(){
					$('#total_likes<?php echo $i;?>').empty();
					$('#total_likes<?php echo $i;?>').append('<?php echo $record1->likes;?>');
					$('#total_dislikes<?php echo $i;?>').empty();
					$('#total_dislikes<?php echo $i;?>').append('<?php echo $record1->dislikes;?>');
					//--------------------------likes----------------------------
					$('#yes<?php echo $i;?>').click(function(){
						var likes = 'id=<?php echo $record1->id;?>&'+'likes='+$('#total_likes<?php echo $i;?>').text();
						$.ajax({                                     
									  type:"POST",
									  url:'<?php echo URL::to('/') ;?>/like1',                  
									  data: likes,                        				   
									  dataType: 'json',                 
									  success: function(data)
									  {  
									  $('#total_likes<?php echo $i;?>').text(parseInt($('#total_likes<?php echo $i;?>').text())+1);
									  //if(data){alert('record update');}else{alert('something went wrong!');}
									  }
							},'json');		  
					});
					//---------------------dislike-----------------------------------
					$('#no<?php echo $i;?>').click(function(){
						var dislikes = 'id=<?php echo $record1->id;?>&'+'dislikes='+$('#total_dislikes<?php echo $i;?>').text();
						$.ajax({                                     
									  type:"POST",
									  url:'<?php echo URL::to('/') ;?>/dislike',                  
									  data: dislikes,                        				   
									  dataType: 'json',                 
									  success: function(data)
									  {  
									  $('#total_dislikes<?php echo $i;?>').text(parseInt($('#total_likes<?php echo $i;?>').text())+1);
									  //if(data){alert('record update');}else{alert('something went wrong!');}
									  }
							},'json');		  
					});
					//-------------------add bookmark------------------
					$('.book<?php echo $i;?>').click(function(){
					var id = 'id=<?php echo $record1->id;?>';
					$.ajax({                                     
									  type:"POST",
									  url:'<?php echo URL::to('/') ;?>/bookmark',                  
									  data: id,                        				   
									  dataType: 'text',                 
									  success: function(data)
									  {  
									  if(data){
									  $('.book<?php echo $i;?>').unbind('click');
										$('.book<?php echo $i;?>').css('color','red');
										$('.book<?php echo $i;?>').css('cursor','text');
										
										}
									  }
							});	
					
					});
					
				});
				</script>
			<?php } ?>		

          
            </div>
            <div class="loading"><img src="<?php echo URL::to('/') ;?>/admin/sidekyc/img/ajax-loader.gif" /></div>
            <div class="nav next-page">
                <a class="next" href="ajax">next</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
<style>
//.client-dropdown-wrapper .dropdown-box{ border-width: 2px 2px 2px 2px;}
</style>
    </div>
   <?php include_once('footer.php'); ?>