<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sandbox.ebay.com/ws/api.dll",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<GetSellerListRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">\r\n\t<ErrorLanguage>en_US</ErrorLanguage>\r\n\t<WarningLevel>High</WarningLevel>\r\n<UserID>testuser_deeksha123</UserID>\r\n<GranularityLevel>CustomCode</GranularityLevel>\r\n</GetSellerListRequest>\r\n",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "x-ebay-api-call-name: GetSellerList",
    "x-ebay-api-compatibility-level: 967",
    "X-EBAY-API-DEV-NAME: 1a7a3fac-1f15-443b-91a9-fd43e96ff640",
    "X-EBAY-API-APP-NAME: esfera-Orderdis-SBX-b5d8a3c47-4b86716f ",
    "X-EBAY-API-CERT-NAME: SBX-5d8a3c47808e-bd72-4b21-b925-9d4e",
    "x-ebay-api-iaf-token: v^1.1#i^1#r^0#p^3#f^0#I^3#t^H4sIAAAAAAAAAOVXW2wUVRjudttiKYUHsBKpZjNCiNbZndm57M7ILtleCE1ou7KllDakPTNzpp12dmadM9N28UJpCBpvaFKiARuLQjDyohIIkIhGIE0IARMlsd5IjBAjitGQEMAHz2wvbKtCLyQ2cV4m55z/9v3/958L1VtQ+NiOtTuuF3vm5Q72Ur25Hg9dRBUW5Jct9OY+mJ9DZQl4BnuX9+b1eX9ahUBST4nrIUqZBoK+nqRuIDEzGSEcyxBNgDQkGiAJkWjLYiJWs04M+ikxZZm2KZs64auujBCMqnJSmFE5AcqSQFN41hizWW9GCBXwkKY5hg1JalAKQryOkAOrDWQDw44QQYoOkTRNBsP1FC9yvMjy/iAfaiJ8DdBCmmlgET9FRDPhihldKyvWO4cKEIKWjY0Q0erYmkRdrLqyqrZ+VSDLVnQ0Dwkb2A6aOKowFehrALoD7+wGZaTFhCPLECEiEB3xMNGoGBsLZgbhZ1KtqkKIYWkmzNMKrzDcPUnlGtNKAvvOcbgzmkKqGVERGrZmp++WUZwNqQPK9uioFpuorvS5vycdoGuqBq0IUVUe27QhUbWe8CXiccvs0hSouEhphuEFNhjGwdoQ4RRCq0WBsBO1AzrIjHobMTma60nuKkxD0dzMIV+taZdDHDqcnCA2K0FYqM6os2Kq7YaVLRceSyQXbnIrO1JKx2433OLCJM6GLzO8exnGeHGbCfeKGZxEySpQZEpWVAi4CU3m9vpM2RF1CxSLxwNuLFACaTIJrE5op3QgQ1LG6XWS0NIUkeHUIBNWIanwgkqygqqSEqfwJK1CSEEoSbIQ/t+RxLYtTXJsOE6UyQsZpBEiIZspGDd1TU4Tk0Uyu88oLXpQhGi37ZQYCHR3d/u7Gb9ptQWCFEUHGmvWJeR2mATEuKx2d2FSy3BWxnzB8qKdTuFoejD/sHOjjYgylhIHlp0ud9J4nIC6jn9jHJ4QYXTy7L9ARS7UuQXS1UfYAEhpfpfiftlMBkyAW9qdaslE7JuKUEBy0ti/Ai2/BYFiGnp66nptDqbwiPbUlBCuhn+kGzGMUY9ur0/V60QD09DRjC7MZdNKTxPmROVp6ABZNh3Dnom7UdVpaKiOrmq67rbrTBxmqU8nTAPoaVuT0bjLWXVZLJWqVuZWl0GkQguQdS7BFQ2RifJG94QIA0ZmQyQrhfkQzauzQq3ALk2GLdocQ244uj4rXJWw65+qiXv93f8SFw1CgFGBjM94miNZlpFIgQYCqSosAwVeVXmWmhXumra5VsraQGxWiCp0De8L9em5dgSuNZENldlBw9fRuQXK3WHGNpgwFYakpISCeKcJ0qQkBDlSUFg4VciTJrIudH+70AcmPqujOZmP7vN8TPV5juGXORWiSLqMerTAuyHPu4BAmg39CBiKZPb4NaD6kdZm4FejBf2dMJ0CmpVb4Gle9vPqP7Me9IObqaXjT/pCL12U9b6nSm+v5NOLHiimQzSNb8k8x7N8E/XI7dU8uiRvSf+xqiNDK4a5b64e3HL9l5r24zu/jFHF40IeT35OXp8n59TFZ94ZEt68MChcqhh437+UHCzZtPPQ2/1Cb6ny26l46Okft11+7Y2tt/5YXD6wsGNP9bPNOy+01ty/sqDyysYP93778IlPf0jdJ23avUQiNgdvtO4vOnPicklP48098eKDw95bQ+9t288Az4kDxOGma4ukZcP9Cw6tHLj2wb6O714ePn+k4cDqoec+O3vw6Paql04uPv5C//ybN18sDiwmvYfLIs0b151bsXn5ftQaKumH87c+tOtVubUFoZorrac7ey7+mv/E1zl7O19v3r6iat6+388MnOw/v7tt4/df6E9xVyFXWOtryLlx7PSyW1917Prko9JzpeGmxyufb2SptyouHd3yyu7hohtlZz8fKeNfMEcq4GoRAAA=",
    "x-ebay-api-siteid: 0"
  ),
));
$response = curl_exec($curl);
$resval = simplexml_load_string($response);
$jsonArr = json_encode($resval);
$FullOrderArr = json_decode($jsonArr,TRUE);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
  echo "cURL Error #:" . $err;
} else {
 
 print_r($FullOrderArr);    
//  echo $resval;
 
}
?>
