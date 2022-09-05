@extends('layouts.developers')

@section('title')
Dinger | Developers
@endsection

@section('content')

<div id="payload-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-12 drop-left">

                <div id="hider">
                    <p id="main-menu">Get Started</p>
                    <p id="small-p" class="grey"><a href="{{ url('/developers/eng') }}">Home</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/revoke/eng') }}">Revoke Transaction</a></p>

                    <p id="main-menu">Staging API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/stagingAPI-intro/eng') }}">Introduction</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Get-token/eng') }}">Get Token</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/payAPI/eng') }}">Pay API</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Merchant-callback/eng') }}">Merchant Callback</a></p>

                    <p id="main-menu">Prebuilt Checkout API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/User-guide/eng') }}">User Guide</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Workflow/eng') }}">Workflow</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Payload/eng') }}"><img src="{{ asset('/images/payload.png') }}" /></a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Payment/eng') }}">Payment Providers</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Encryption/eng') }}">Encryption & Decryption</a></p>

                    <p id="main-menu">Production API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-intro/eng') }}">Introduction</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-gettoken/eng') }}">Get Token</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-payAPI/eng') }}">Pay API</a></p>
                    <p id="small-p" class="grey "><a href="{{ url('/production-merchant-callback/eng') }}">Merchant Callback</a></p>

                    <p id="main-menu">woocommerce</p>
                    <p id="small-p" class="grey"><a href="{{ url('/woocommerce-intro/eng') }}">Introduction</a></p>

                    <p id="main-menu"><a href="{{ url('Status/eng') }}">Transaction Status and Request url</a></p>

                    <hr class="line">
                    <p id="main-menu"><img class="dev-logo" src="{{ asset('images/Dinger Logo Black.svg') }}" alt="Dinger Logo"><a href="{{ url('/eng') }}">Back TO Dinger website</a></p>

                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-12 drop-right  pl-4 ">
                <!--  <div class="row">-->
                <!-- <div class="col-md-5 col-sm-12 col-12 pl-5"> -->
                <h2 id="home-h">Payload Example and Redirect URL</h2>
                <hr class="line"><br><br>

                <p id="dev-home"><a>Dinger Prebuilt Checkout Form</a></p>
                <p id="note">
                    **BaseUrl ( staging ) - <a class="line_link"
                        href="https://prebuilt.dinger.asia">https://prebuilt.dinger.asia</a><br>
                    **BaseUrl ( production ) - <a class="line_link"
                        href="https://form.dinger.asia">https://form.dinger.asia</a>
                </p>
                <hr class="line">
                <p id="dev-home">Decryption Code Sample</p>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="code">
                                <div class="container">
                                    <div class="row">
                                        <button id="html" class="w3-bar-item w3-button tablink w3-red"
                                            onclick="openCity(event,'London')"> Payload Example</button>
                                        <button id="html" class="w3-bar-item w3-button tablink"
                                            onclick="openCity(event,'Paris')">PHP code</button>
                                    </div>

                                    <br>

                                    <div id="London" class="w3-container w3-border city">
                                        <pre>
items = [{ 
name: "Dinger”,  
amount: 1100, 
quantity: 2, 
}] 
** if you want to put ' in json array, you can use this way to make a correct json format or you can replace ' and " characters in your product name before sending to Dinger gateway **
items = `[{\"name\":\"Dinger\\'s\",\"amount\": ${totalAmount},\"quantity\":\"1\"}]`;

data = {     
clientId:"87d9eb64-9d64-35d7-b331-2833b4787770" , 
publicKey:"MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC0FeXFG78FHY/o2ekXJJoTxbHTlhrOjteN++EoLrzbwcKq4D4LZL9j1fMl9IEhlgUEo0HIDb871K5loJ8uTEkM27kXVVjv7EPLR0UnEG7blFWfj03FjGjhjyZfPyrFRoC7QvorVRU9TX4y2GyEjgqV+9EWQYZBmOD80dkk/4KsRQIDAQAB" , 
items: items , 
customerName: "Kyaw Kyaw", 
totalAmount: 2200, 
merchantOrderId: merchantOrderId, 
merchantKey: "9e01os1.iyDJia32LW0rE5KXdKfGylg77i8", 
projectName: "Test Shop" , 
merchantName: "Mg Mg" , 
} 

(Remark: items must be stringify) 

transformation algorithm RSA/ECB/PKCS1Padding  

Key to encrypt the request data 

//Key for encryption
keyForEncryption =  MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCFD4IL1suUt/TsJu6zScnvsEdLPuACgBdjX82QQf8NQlFHu2v/84dztaJEyljv3TGPuEgUftpC9OEOuEG29z7z1uOw7c9T/luRhgRrkH7AwOj4U1+eK3T1R+8LVYATtPCkqAAiomkTU+aC5Y2vfMInZMgjX0DdKMctUur8tQtvkwIDAQAB 

encrypteDataWithRsa = rsa(jsonStrigify(data),keyForEncryption)  

encryptedPayload = Base64.getEncoder().encodeToString(encrypteDataWithRsa) 

(Remark: encryptedPayload must be URL Encoded) 

SecretKey <- from merchant portal  

HashValue = encrypt the payload with your secret key by hmac sha256 

Sample Redirect Link – BaseUrl?payload=encryptedPayload&hashValue=hashValue

                                    </pre>
                                    </div>

                                    <div id="Paris" class="w3-container w3-border city" style="display:none">
                                        <pre>
            $items_data = array(
            "name" => "$product_name",
            "amount" => "$amount",
            "quantity" => "$quantity"
        );

        $data_pay = json_encode(array(
            "clientId" => "11996c12-f8df-3bf6-a51d-b105f1862f86",
            "publicKey" => "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDFh7LlYHxmaMacdZR5QHl8qWZhMhrYHSi/22gtETgEw24GhN7zwvWFEpCSgQnKLq2uj2pXbKpH9H5Jmzqw1cWsssfV4A2ucn2lXhuMg900d41vEUMxulcmUpDgZWk4HW4VUJ6UhbrmdHw5MqO50+yCDYkWoS/DQi148oMJR6b9XQIDAQAB",
            "items" => json_encode(array($items_data)),
            "customerName" => $name,
            "totalAmount" => "$total",
            "merchantOrderId" => "$orderId",
            "merchantKey" => "kn5ik01._2An8ynsRXJ5ISfke6Zqnvkt2zE",
            "projectName" => "sannkyi testing",
            "merchantName" => "mtktest"
        ));


        $publicKey = '-----BEGIN PUBLIC KEY-----MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCFD4IL1suUt/TsJu6zScnvsEdLPuACgBdjX82QQf8NQlFHu2v/84dztaJEyljv3TGPuEgUftpC9OEOuEG29z7z1uOw7c9T/luRhgRrkH7AwOj4U1+eK3T1R+8LVYATtPCkqAAiomkTU+aC5Y2vfMInZMgjX0DdKMctUur8tQtvkwIDAQAB-----END PUBLIC KEY-----';

        $rsa = new \phpseclib\Crypt\RSA();

        extract($rsa->createKey(1024));
        $rsa->loadKey($publicKey); // public key
        $rsa->setEncryptionMode(2);
        $ciphertext = $rsa->encrypt($data_pay);
        $value = base64_encode($ciphertext);

        $urlencode_value = urlencode($value);

        $encryptedHashValue = hash_hmac('sha256', $data_pay, '6bef931c471676028ce1640aaa97e92d');

        $redirect_url = "https://prebuilt.dinger.asia/?hashValue=$encryptedHashValue&payload=$urlencode_value";
                                   </pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <br><br>
                <p id="note">Note:
                    Please see and check how will Dinger system invoke to your url with transaction states and your
                    order id in "Revoke Transaction Status to Merchant URL" page.</p>

            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')

@endsection