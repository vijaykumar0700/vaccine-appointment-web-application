<?php
$ch = curl_init();
			$url = "https://cdndemo-api.co-vin.in/api/v2/registration/beneficiary/idTypes"; 
			$headers = [
				'x-api-key: 3sjOr2rmM52GzhpMHjDEE1kpQeRxwFDr4YcBEimi',
				'content-type: application/json'
			];
			curl_setopt($ch, CURLOPT_URL, $url);
			//curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
			$result     = curl_exec($ch);
			$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			if($statusCode == "200")
			{
				//echo $result;
				$response = json_decode($result, true);
				var_dump($result);
				//foreach ($response["types"] as $area) {
				//echo $area["type"];
				//echo $area["id"];
			//}
			}else{
				return false;
			}
			
			$ch = curl_init();
			$url = "https://cdndemo-api.co-vin.in/api/v2/registration/beneficiary/genders"; 
			$headers = [
				'x-api-key: 3sjOr2rmM52GzhpMHjDEE1kpQeRxwFDr4YcBEimi',
				'content-type: application/json'
			];
			curl_setopt($ch, CURLOPT_URL, $url);
			//curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
			$result1     = curl_exec($ch);
			$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			if($statusCode == "200")
			{
				$response1 = json_decode($result1, true);
				foreach ($response1["genders"] as $area1) {
				echo $area1["gender"];
				echo $area1["id"];
			}
			}else{
				return false;
			}
?>