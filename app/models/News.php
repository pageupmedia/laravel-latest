<?php
	class News extends Eloquent{
	
		 public function __construct()
		 {
		 $shipment = new News();
		 }
		static function show()
		{
			$saved=0;
			$results = DB::select('select * from lar_news where saved=?',array($saved));
			return $results;
		}
		static function filter_by_client($filter)
		{
			$saved=0;
			if(count($filter)==0)
			{
			$results = DB::select('select * from lar_news where saved=? ',array($saved));
			}
			else
			{
			$results = DB::select('select * from lar_news where client = ? and saved=?', array($filter,$saved));
			}
			
			return $results;
		}
		public function get_record($id=NULL)
		{
			$saved=0;
			$results = DB::select('select * from lar_news where id=? and saved=?',array($id,$saved));
			return $results;
		}
		static function likes($likes=NULL,$id=NULL)
		{
			if($id!=NULL)
			{
				$res=DB::select('select * from lar_news where id=?',array($id));
				$saved=1;
				if(($res[0]->likes)==0){ $likes1=$likes;} else{$likes1=($res[0]->likes)+$likes;}
				$result = DB::update('UPDATE lar_news SET likes=?,saved=? WHERE id=?',array($likes1,$saved,$id));
				return $result;
			}
		}
		static function dislikes($dislikes=NULL,$id=NULL)
		{
			if($id!=NULL)
			{
				$saved=1;
				$res=DB::select('select * from lar_news where id=?',array($id));
				if(($res[0]->dislikes)==0){ $dislikes1=$dislikes;} else{$dislikes1=($res[0]->dislikes)+$dislikes;}
				$result = DB::update('UPDATE lar_news SET dislikes=?,saved=? WHERE id=?',array($dislikes1,$saved,$id));
				return $result;
			}
		}
		static function get_cat()
		{
			$saved=0;
			$results = DB::select('SELECT DISTINCT client FROM lar_news where saved=?',array($saved));
			return $results;
		}
		static function ordr($ordr)
		{
			echo '<h1>aaaaaaaaaa'.$ordr.'</h1>'; exit();
			
			$saved=0;
			$results = DB::select('SELECT * FROM lar_news where saved=? ORDER BY category =?',array($saved,$ordr));
			
		//	echo '<pre>'; print_r($results); echo '</pre>'; 
            return $results;
		}
		static function bookmark($id)
		{
			//$results=DB::insert('insert into lar_bookmark (news_id, name) values (?, ?)', array(1, 'Dayle'));
			$results = DB::update('UPDATE lar_news SET bookmark=1 WHERE id=?',array($id));
			return $results;
		}
		static function show_bookmarks()
		{
			//$results=DB::insert('insert into lar_bookmark (news_id, name) values (?, ?)', array(1, 'Dayle'));
			$saved=0;
			$results = DB::select('SELECT * FROM lar_news WHERE bookmark = 1 and saved = 0');
			return $results;
		}
	}