<?php

/**
 * SMS Sending Library for Codeigniter Application
 * @author Pranay Chakraborty
 * @link https://github.com/pranaycb
 */

class SMS {

	protected $smsKey, $number, $content;

	function __construct(string $smsKey)
	{
		$this->smsKey = $smsKey;
	}

	//set mobile number (for single user)
	public function setNumber(int $number)
	{
		$this->number = $number;
	}

	//set mobile number (for multiple users)
	public function setNumbers(array $number)
	{

		//convert into comma separated string from array. e.g- (0187*******, 019*******)
		$this->number = implode(",", $number);
	}

	//set sms content
	public function setContent(string $content)
	{
		$this->content = $content;
	}

	//send sms
	public function sendSms()
	{
		$data= array(
			'to' 		=> $this->number,
			'message' 	=> rawurlencode($this->content),
			'token' 	=> $this->smsKey
		);

		$status = $this->__send($data);

		return $status;
	}


	//sending process
	private function __send(array $data)
	{ 
		$url = "http://api.greenweb.com.bd/api.php";
		$ch = curl_init(); // Initialize cURL
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_ENCODING, '');
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$smsresult = curl_exec($ch);

		return $smsresult
	}




}