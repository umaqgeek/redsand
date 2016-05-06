<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class My_Func {
	
	public function __construct(){
		$this->obj = &get_instance();
	}
	
	public function getFace($menubar, $content) {
		$CI = $this->obj;
		$data['menu_content'] = $menubar;
		$data['main_content'] = $content;
		$CI->load->view('v_main',$data);
	}
	
	public function getAmil($am_id=null)
	{
		$CI = $this->obj;
		$am = $CI->m_amil->get($am_id);
		if(!empty($am))
		return $am[0]->am_name;
	}

	public function getPurityDesc($pu_id=null)
	{
		$CI = $this->obj;
		$pu = $CI->m_purity->get($pu_id);
		if(!empty($pu))
		return $pu[0]->pu_desc;
	}

	//function definition goes after here
	public function getTransactionStatus($ts_id) {
		$CI = $this->obj;
		$ts = $CI->m_transaction_status->get($ts_id);
		if ($ts) {
			return $ts[0]->ts_desc;
		} else {
			return '-';
		}
	}
	
	public function getCurrency() {
		$CI = $this->obj;
		$dc = $CI->m_dinarpal_config->getAll();
		if (isset($dc) && !empty($dc)) {
			return $dc[0]->dc_currency_type;
		} else {
			return 'MYR';
		}
	}
        
        public function getGST() {
		$CI = $this->obj;
		$dc = $CI->m_dinarpal_config->getAll();
		if (isset($dc) && !empty($dc)) {
			return $dc[0]->dc_gst_rate;
		} else {
			return 0.06;
		}
	}
        
        public function getGeneologyRate() {
		$CI = $this->obj;
		$dc = $CI->m_dinarpal_config->getAll();
		if (isset($dc) && !empty($dc)) {
			return $dc[0]->dc_geneology_rate;
		} else {
			return 0.10;
		}
	}
        
        public function getMeAdminHQ() {
		$CI = $this->obj;
		$dc = $CI->m_dinarpal_config->getAll();
                $me_username_hq = (isset($dc) && !empty($dc)) ? ($dc[0]->dc_hq_username) : ("dphq");
                $me_hq = $CI->m_members->getByName($me_username_hq);
                $me_id_hq = (isset($me_hq) && !empty($me_hq)) ? ($me_hq[0]->me_id) : (0);
                return $me_id_hq;
	}
	
	public function trim_array($arr) {
		$newArr = array();
		foreach ($arr as $key => $ar) {
			if (empty($ar) || NULL == $ar || '' == $ar) {
				$newArr[$key] = '-';
			} else {
				$newArr[$key] = strtoupper($ar);
			}
		}
		return $newArr;
	}
	
	public function pemecahArRahnu($code, $stat) {
		if ($stat == 'PP') {
			$codes = $code[2].$code[3].$code[4];
			return number_format($codes);
		}
		return 0;
	}
	
	public function getMe($me_id, $me_to, $me_from) {
		if ($me_id == $me_to) {
			return $me_from;
		} else if ($me_id == $me_from) {
			return $me_to;
		} else {
			return 0;
		}
	}
        
        public function isInputValidation_array($arr=array(), $field=array()) {
            $bol = true;
            $output = array();
            foreach ($arr as $akey => $aval) {
                $bol_check = false;
                if (!empty($field)) {
                    foreach ($field as $bkey => $bval) {
                        if ($akey == $bkey) {
                            $bol_check = true;
                            break;
                        }
                    }
                } else {
                    $bol_check = true;
                }
                if ($bol_check) {
                    $bol = $this->isInputValidation($aval);
                    if ($bol == false) {
                        $field_name = explode("_", $akey);
                        $output[] = "Field " . $field_name[1] . " is blank!";
                    }
                }
            }
            return $output;
        }
        
        public function isInputValidation($input="") {
            $bol = true;
            if ("-" == $input || "" == $input) {
                $bol = false;
            }
            return $bol;
        }
	
	public function paymentToFrom($me_id, $me_to, $me_from) {
		if ($me_to == 0 || $me_from == 0) {
                        if ($me_to == 0) {
                            return 'To';
                        } else {
                            return 'From';
                        }
                }
                if ($me_id == $me_to) {
			return 'From';
		} else if ($me_id == $me_from) {
			return 'To';
		} else {
			return '-';
		}
	}

	public function getItemTypeName($id){
		$CI = $this->obj;
		$CI->db->select('it_name');
		$CI->db->from('item_type it');
		$CI->db->where('it.it_id', $id);
		$q = $CI->db->get();
		if($q->num_rows() > 0) {
			foreach($q->result() as $r) {
				return $r->it_name;
			}

		}
	}


	public function getItemTypeChildName($id){
		$CI = $this->obj;
		$CI->db->select('itc_name');
		$CI->db->from('item_type_child itc');
		$CI->db->where('itc.itc_id', $id);
		$q = $CI->db->get();
		if($q->num_rows() > 0) {
			foreach($q->result() as $r) {
				return $r->itc_name;
			}

		}
	}

	public function getItemItctName($id){
		$CI = $this->obj;
		$CI->db->select('itct_name');
		$CI->db->from('itc_type itct');
		$CI->db->where('itct.itct_id', $id);
		$q = $CI->db->get();
		if($q->num_rows() > 0) {
			foreach($q->result() as $r) {
				return $r->itct_name;
			}

		}
	}

	public function getAccountTypeName($at_id)
	{
		$CI = $this->obj;
		$CI->db->select('at_desc');
		$CI->db->from('account_type at');
		$CI->db->where('at.at_id', $at_id);
		$q = $CI->db->get();
		if($q->num_rows() > 0) {
			foreach($q->result() as $r) {
				return $r->at_desc;
			}

		}
	}
	
	
	public function isValidPassword($pwd) {
		$error = '';
		if( strlen($pwd) < 8 ) {
			$error .= "Password too short!<br />";
		}
		if( strlen($pwd) > 20 ) {
			$error .= "Password too long!<br />";
		}
		
		if( !preg_match("#[0-9]+#", $pwd) ) {
			$error .= "Password must include at least one number!<br />";
		}
		if( !preg_match("#[a-z]+#", $pwd) ) {
			$error .= "Password must include at least one letter!<br />";
		}
		if( !preg_match("#[A-Z]+#", $pwd) ) {
			$error .= "Password must include at least one CAPS!<br />";
		}
		if( !preg_match("#\W+#", $pwd) ) {
			$error .= "Password must include at least one symbol!<br />";
		}
		
		if(isset($error) && $error != ''){
			return "Password validation failure ( your choise is weak ) <br /><br />$error";
		} else {
			return "Your password is strong.";
		}
	}
	
	public function format_digit($num) {
		if ($num < 10) {
			return "00".$num;
		} else if ($num < 100) {
			return "0".$num;
		} else {
			return $num;
		}
	}

	public function getGrandTotalWeight($itct_id,$q)
	{
		$CI = $this->obj;
		$CI->db->select('itct.itct_weight');
		$CI->db->from('itc_type itct');
		$CI->db->where('itct.itct_id', $itct_id);
		$qz = $CI->db->get();
		
		$weight=0;
		if($qz->num_rows() > 0) {

			foreach($qz->result() as $r) {
				$weight= $r->itct_weight;
			}
			
			return $weight*$q;
		}
	}
	
	public function date_to_sql_time($date, $time) {
		$tarikh = explode('/', $date);
		return $tarikh[2] . '-' . $tarikh[1] . '-' . $tarikh[0] . ' ' . date('H:i:s');
	}
	
	public function sql_time_to_date($date) {
		$tarikh1 = explode(' ', $date);
		$tarikh2 = explode('-', $tarikh1[0]);
		return $tarikh2[2] . '/' . $tarikh2[1] . '/' . $tarikh2[0];
	}
	
	public function sql_time_to_datetime($date) {
		$tarikh1 = explode(' ', $date);
		$tarikh2 = explode('-', $tarikh1[0]);
                if ($tarikh2[2] != '00') {
                    return $tarikh2[2] . '/' . $tarikh2[1] . '/' . $tarikh2[0] . ' ' . $tarikh1[1];
                } else {
                    return "";
                }
	}
	
	public function trim_username($me_firstname) {
		return strtolower(str_replace(" ", "", $me_firstname));
	}
	
	public function do_upload($name='', $upload_path='./assets/uploads/profile/', 
                $allowed_types='gif|jpg|jpeg|png|pdf|txt|text|doc|docx|word|xls|xlsx')
	{
		$CI = $this->obj;
		$config['upload_path'] = $upload_path;
		$config['allowed_types'] = $allowed_types;
		$config['max_size']	= '1000000';
//		$config['max_width']  = '1500';
//		$config['max_height']  = '2000';
                $config['encrypt_name'] = TRUE;

		$CI->load->library('upload');
		$CI->upload->initialize($config);

		$data = '';

		if ( ! $CI->upload->do_upload($name))
		{
			$data = array('error' => $CI->upload->display_errors());

			//$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $CI->upload->data());

			//$this->load->view('upload_success', $data);
		}
		
		return $data;
	}
	
	public function dinarpal_encrypt($text) {
		$CI = $this->obj;
		//$data = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $CI->config->item('encryption_key'), $text, MCRYPT_MODE_ECB, '1');
        //return base64_encode($data);
		$val1 = $CI->encrypt->encode($text);
		$val2 = '';
		for ($i=0; $i<strlen($val1); $i++) {
			if ($val1[$i] == '/') {
				$val2 .= '_';
			} else if ($val1[$i] == '+') {
				$val2 .= '-';
			} else {
				$val2 .= $val1[$i];
			}
		}
		return $val2;
	}
	
	public function dinarpal_decrypt($text) {
		$CI = $this->obj;
		//$text = base64_decode($text);
        //return mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $CI->config->item('encryption_key'), $text, MCRYPT_MODE_ECB, '1');
		$val1 = '';
		for ($i=0; $i<strlen($text); $i++) {
			if ($text[$i] == '_') {
				$val1 .= '/';
			} else if ($text[$i] == '-') {
				$val1 .= '+';
			} else {
				$val1 .= $text[$i];
			}
		}
		$val2 = $CI->encrypt->decode($val1);
		return $val2;
	}
        
        public function getUploadPath($path='items') {
            return base_url()."assets/uploads/".$path."/";
        }
        
        public function getRandomVal($type='alnum', $length=16) {
            return random_string($type, $length);
        }
        
        public function getCaptchaIndex() {
            $CI = $this->obj;
            $index = random_string('numeric');
            $index = $index % 16;
            return $index;
        }
        
        public function isCaptcha($index, $str) {
            $cArr = array(
                "ZKW4",                
                "BMVHKY",                
                "944531",                
                "7d6bf",                
                "RAE3",                
                "3-2 parks",                
                "advses",                
                "3nc9z",                
                "quxg4h",                
                "2CCEX",                
                "2PVCb",                
                "slythygomi",                
                "trustother",                
                "apricot",                
                "pmymku"                
            );
            return (strcmp(strtoupper($cArr[$index-1]), strtoupper($str)) == 0);
        }
        
        public function getMeAdmin($sl_id) {
            $CI = $this->obj;
            $me_admin = $CI->m_members->getSL($sl_id);
            $me_id_admin = (isset($me_admin) && !empty($me_admin)) ? ($me_admin[0]->me_id) : (0);
            return $me_id_admin;
        }
        
        public function url_https($url) {
            return str_replace('http://', 'https://', $url);
        }
        
        public function getNoImage($type=-1) {
            return "NoImageAvailable.png";
        }
        
        public function get_config_email() {
            /*
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'webmail.dinarpal.com',
                'smtp_port' => 25,
                'smtp_user' => 'support@dinarpal.com',
                'smtp_pass' => '#@!321Cba',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
            );
            //*/
            //*
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'umar@tuffah.info',
                'smtp_pass' => 'kalimas123',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
            );
            //*/
            /*
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'umaqgeek@gmail.com',
                'smtp_pass' => '#@!321Cba',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
            );
            //*/
            return $config;
        }
        
        public function send_email($to, $subj, $msg) {
            $CI = $this->obj;
            $config = $this->get_config_email();
//            $CI->email->initialize($config);
            $CI->load->library('email', $config);
            $CI->email->from('admin@dinarpal.coop','KODINAR');
            $CI->email->to($to);
            $CI->email->subject($subj);
            $CI->email->message($msg);
            if(!$CI->email->send()) {
                    print_r($CI->email->print_debugger());
                    return false;
            } else {
                    return true;
            }
        }
}
?>