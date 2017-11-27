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
    "x-ebay-api-iaf-token: v^1.1#i^1#r^0#p^3#f^0#I^3#t^H4sIAAAAAAAAAOVXW2wUVRju9kagFBXlKspmIFEgMzvXvQzski0tskq3C9tyUyFnZs60Q2dnNnNm2l1jpKlcGh5sUJJKfLCGEDWoQSMqGggRhBBQI6GJUUJ8MUFe1HBLoEbPbHfLtir0QmITN5tMzjn/7fv/7z8XuqNy8uKdq3berPZMKu3toDtKPR6mip5cWbFkWlnp3IoSukjA09uxsKO8s+zyMgRSelpcC1HaNBD0ZlK6gcTcZJhwLEM0AdKQaIAURKIti8lo/WqRpWgxbZm2KZs64Y3VhgkgcUqIliSapXnerwbwrFGw2WiGCUGBCpQVQQ4JtCRwfryOkANjBrKBYYcJlmYCJMOQrNDIsKIQFPkAxXHCJsK7DlpIMw0sQtFEJBeumNO1imK9e6gAIWjZ2AgRiUVXJhuisdq6eOMyX5GtSD4PSRvYDho6WmEq0LsO6A68uxuUkxaTjixDhAhfZMDDUKNitBDMGMLPpVqWOUlmeUYBtF+iAX1fUrnStFLAvnsc7oymkGpOVISGrdnZe2UUZ0PaCmU7P4pjE7Far/tZ4wBdUzVohYm6mujGpmTdWsKbTCQss03DZHGRMhznD/FsEAdrQ4RTCK0tCoStqAUwLJf3NmAyn+th7laYhqK5mUPeuGnXQBw6HJ4gvihBWKjBaLCiqu2GVSzHFxLJYjlfoZSO3WK4xYUpnA1vbnjvMhR4cYcJ94sZrKTwMierqiqoikQLxcxwe32s7Ii4BYomEj43FiiBLJkCViu00zqQISnj9DopaGmKyAkqywVVSCr+kEryIVUlJUHxk4wKIQ2hJMmh4P+OJLZtaZJjw0GiDF/IIQ0TSdlMw4Spa3KWGC6S233ytMigMNFi22nR52tvb6faOcq0mn0sTTO+DfWrk3ILTAFiUFa7tzCp5TgrQ6yFNNHOpnE0Gcw/7NxoJiKcpSSAZWdrnCweJ6Gu40+Bw0MijAyf/ReoyIU6sUC6+ggbAGmNcilOyWbKZwLc0u7UllzE3pEI+SQni/0r0KIsCBTT0LMj12t2MIUHtEemhHA1qIFuxDDyHt1eH6nXoQZGoaMZbZjLppUdJcyhyqPQAbJsOoY9Fnd51VFoqI6uarrututYHBapjyZMA+hZW5PRoMtxdVk0nY4pE6vLIFKhBcgGl+CKhshkzQb3hAgCTuYDJC8F/QHGr44LtQLbNBlu0SYYcsPR9XHhqoVt/1RN3Ov7/0tcDAgATgUyPuMZgeR5TiJDDAiRqsJzMORXVT9Pjwt3ffNEK2XcFx0XohW6hveFxuxEOwJXmciGyvig4evoxALl7jCFDSZIByEpKQEW7zQsQ0ohViBDCg9HCnnYRNGF7m8Xet/QZ3WkJPdjOj1H6U7PEfwypwM0ySyhF1WWNZWXTSWQZkMKAUORzAylAZVCWrOBX40WpFphNg00q7TS8+yjV5b3Fz3oe5+nZw8+6SeXMVVF73t63p2VCuaBWdVMgGFYAf+DfGATveDOajkzs/yR08K3iciuF4/B6fHp13bV7fffPn6Urh4U8ngqSso7PSUz937c/em0/sUtz2x+qplLLD/d8mT5yfmBx9d0TTn8zvqFJ7q3n5/zyvZq/fhDx2eF/ohdOtL34BUlvDvWdHX36YvnnBlVVecuwJq3511vODznpbM/9mUappyPx4NnV/+U2bpkwa99i7t6execeP/rt+o3Htpxam4PuXPRpq++iD3XIj984suPqm7srb914FDt1U/mRQPzf0v2h3eQTd/fuPSus6c1c/OD/m2zv+vb11336tNnziUuq75pa3q6mnxdPQePTtq37kxX8NjmG7O3ndxxYeVrP798/cC1GeTutW+cenN+eFnbn0Hp8/W/LN31njRXvnhr6Qs/fHOqP3Cb/5367EPq/MHXa6Pcnsee4A9O7Rko419el07tahEAAA==",
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
