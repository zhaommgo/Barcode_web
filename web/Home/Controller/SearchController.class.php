<?php

	namespace Home\Controller;
	use Think\Controller;
	
	class SearchController extends Controller {
		
		public function index1(){
			$search1=D("Information");
			$a;
			if(!empty($_POST)){
				print_r($_POST);
				$a=$_POST[search];
				$sql="select *from bc_information where name='$a'";
				$info=$search1->query($sql);
				$this->assign('info',$info);
				$this -> display();
			}
			else{
				$this -> display();
				}
			
		}
		
	    public function search(){
			$search1=D("Information");
			$a;
			if(!empty($_POST)){
				$a=$_POST['name'];
				$sql="select *from bc_information where name='$a'";
				$info=$search1->query($sql);
			$this -> assign('info',$info); 
			$this -> assign('info_text',$a); 
			$this -> display();
			
			}
			else{
				$this -> display();
			}
		}
	}