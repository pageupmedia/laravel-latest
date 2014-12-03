<?php
	class NewsController extends BaseController {
	
	
		public function get_ajax()
		{
			
			return View::make('ajax');
		
		}
		public function show_message()
		{
		
			$config_items = News::show();
			var_dump ( $config_items );
			exit();
		
		}
		public function feed()
		{
		$records = News::show();
		$cat = News::get_cat();
		$ordr="asc";
		return View::make('feed',array('data' => $records,'client'=>'0','cat'=>$cat,'sort1'=>$ordr));
		}
		public function client()
		{
			$filter = $_POST['client'];
			$record = News::filter_by_client($filter);
			$cat = News::get_cat();
			$ordr="asc";
			return View::make('feed',array('data' => $record,'client'=>$filter,'cat'=>$cat,'sort1'=>$ordr));
		}
		
		public function like1()
		{
			$likes= $_POST['likes'];
			$id=$_POST['id'];
			$update=News::likes($likes,$id);
			if($update){ echo 1; } else{echo 0; }		
		}
		public function dislike()
		{
			$dislikes= $_POST['dislikes'];
			$id=$_POST['id'];
			$update=News::dislikes($dislikes,$id);
			if($update){ echo 1; } else{echo 0; }
		}
		public function ordr()
		{
//			echo '<pre>'; print_r($_POST);			echo '</pre>'; exit();	
			
			$ordr=$_POST['ordr'];
			$records=News::ordr($ordr);
			$cat = News::get_cat();
			//return json_encode($records);
			return View::make('feed',array('data' => $records,'client'=>'0','cat'=>$cat,'sort1'=>$ordr));
		}
		public function bookmark()
		{
			$id=$_POST['id'];
			$res=News::bookmark($id);
			if($res){echo 1; } else{echo 0;}
		}
		public function bookmark1()
		{
			if($_POST['check_bookmard']==0){
			$bookmark=1;
			$records = News::show_bookmarks();
			}else{
			$bookmark=0;
			$records = News::show();
			}
			$ordr="asc";
			$cat = News::get_cat();
			return View::make('feed',array('data' => $records,'client'=>'0','cat'=>$cat,'sort1'=>$ordr,'bookmarked'=>$bookmark));
		}
	}
	