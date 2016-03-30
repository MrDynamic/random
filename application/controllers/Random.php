<?php
// Class Random extends CI_Controller{

// 	public function __construct()
//     {
//         parent::__construct();
//         $this->load->model(array('M_Random'=>'mRandom'));
//     }


// 	public function index(){
// 		$html['groupItems'] = $this->renderGroup();
// 		$html["list"] = $this->mRandom->getAllData();
// 		$randomNumber = '';
// 		if($this->session->has_userdata('randomNumber')){
// 			$randomNumber = $this->session->randomNumber;
// 			$this->session->unset_userdata('randomNumber');
// 		}
// 		$html["randomNumber"] = $randomNumber;
// 		$this->load->view('layout.php',$html);
		
// 	}

// 	function randomNumber(){
// 		$min=1;
// 		$max=100;
// 		return rand($min,$max);
//     }

//     function renderGroup(){
//     	$groups = array(""=>"<---- Please Seslect ---->","K.Marn"=>"K.Marn","K.Nart"=>"K.Nart","K.Thin"=>"K.Thin","K.Kook"=>"K.Kook");
// 		$distinctGroup = $this->mRandom->getDistinctGroup();
// 		if(isset($distinctGroup)){

// 			foreach($distinctGroup as $row){
// 				if(key_exists($row->groupName,$groups)){
// 					$index = array_search($row->groupName, $groups);
// 					unset($groups[$index]);
// 				}
// 			}
// 		}
// 		return $groups;
//     }

// 	public function save(){
// 		$random = $this->randomNumber();
// 		$this->session->set_userdata(array('randomNumber'=>$random));
// 		$data=array("groupName"=>$this->input->post("groupName")
// 			,"randomNumber" =>$random
// 			);
// 		$this->mRandom->insert($data);
// 		redirect('index.php/random','refresh');
// 	}	

// }