<?php

class Models_model extends CI_Model
{

public function add($data)
	{
		
		//die($postvars);
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_URL => 'http://localhost/apv_model_cms/index.php/api/modelapi/add',
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => http_build_query($data),
			)
		);
		
		$resp = curl_exec($curl);

		curl_close($curl);
	}//END ADD
	public function view()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://localhost/apv_model_cms/index.php/api/modelapi/model',
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_RETURNTRANSFER => true
		));
		$resp = curl_exec($curl);
		$json = json_decode($resp, true);
		//die('<pre>'.print_r($json, true));
		curl_close($curl);
		return $json;
	}//END VIEW ALL
	public function editView($id)
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://localhost/apv_model_cms/index.php/api/modelapi/model?id='.$id,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_RETURNTRANSFER => true
		));
		$resp = curl_exec($curl);
		$json = json_decode($resp, true);
		//die('<pre>'.print_r($json, true));
		curl_close($curl);
		return $json;
	}
	public function put($id, $data)
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://localhost/apv_model_cms/index.php/api/modelapi/edit/1',
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_RETURNTRANSFER => true
		));
		$resp = curl_exec($curl);
		$json = json_decode($resp, true);
		//die('<pre>'.print_r($json, true));
		curl_close($curl);
		return $json;
	}
}

?>