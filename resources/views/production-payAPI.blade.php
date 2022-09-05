@extends('layouts.developers')

@section('title')
Dinger | Developers
@endsection

@section('content')
<div id="production-payAPI-wrapper">
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
                    <p id="small-p" class="grey"><a href="{{ url('/Payload/eng') }}">Payload and Redirect URL</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Payment/eng') }}">Payment Providers</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/Encryption/eng') }}">Encryption & Decryption</a></p>

                    <p id="main-menu">Production API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-intro/eng') }}">Introduction</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-gettoken/eng') }}">Get Token</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-payAPI/eng') }}"><img src="{{ asset('/images/pay.png') }}" /></a></p>
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
                <h2 id="home-h">Pay API</h2>
                <hr class="line"><br><br>

                <p id="dev-home"><a>Pay API</a><img id="get" src="{{ asset('/images/post.png') }}" /></p>
                <p id="home-p"><a href=" https://api.dinger.asia"><img src="{{ asset('/images/api-pay.png') }}" />
                </p>
                <p id="home-p"><img src="{{ asset('/images/once.png') }}" />
                </p><br><br>
                <p id="dev-home"><a>Request</a></p>
                <p id="home-p">This API requests only one payload param(base64(rsa(obj)) string) in form body.<br/><br/>Please be careful that items should be json format in string and ' single quotes are not allowed in json values. If you want to include ' single quotes, please include with '.</p>
                 
                <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="code2">
                                <div class="container">
                                    <div class="row">
                                        <button id="result">Payload Example</button>
                                    </div><br>

                                    <pre>
// Other payment provider
val data = {
    "providerName": "AYA Pay", 
    "methodName": "QR", 
    "totalAmount" : 2200, 
    "orderId":  "11111", 
    "customerPhone" : "09787747310", 
    "customerName" : "test user name", 
    "items" : "[{‘name':'Mac','amount':'1100','quantity':'2'}]" 
 }
 
  // For Visa, Master and JCB
 val data = {
    "providerName": "AYA Pay", 
    "methodName": "QR", 
    "totalAmount" : 2200, 
    "orderId":  "11111", 
    "email": "info@gmail.com",
    "customerPhone" : "09787747310", 
    "customerName" : "test user name", 
    "billAddress" : "customer address",
    "billCity" : "customer city",
    "items" : "[{‘name':'Mac','amount':'1100','quantity':'2'}]" 
 }

 // transformation algorithm RSA/ECB/PKCS1Padding
 // publicKey will be provided by dinger)
 val encrypteDataWithRsa = rsa(jsonStrigify(data),publicKey)
 val payload = Base64.getEncoder().encodeToString(encrypteDataWithRsa)
</pre>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="line">
<p id="dev-home"><a>Code Sample</a></p>
<p id="home-p">Payload encrypteDataWithRsa Example (RSA/ECB/PKCS1Padding)</p>
                 

<div class="row">
    <div class="col-md-12 col-sm-12 col-12">
        <div class="code">
            <div class="container">
                <div class="row">
                    <button id="html" class="w3-bar-item w3-button tablink w3-red"
                        onclick="openCity(event,'London')"> Python</button>
                    <button id="html" class="w3-bar-item w3-button tablink"
                        onclick="openCity(event,'Paris')">Java</button>
                    <button id="html" class="w3-bar-item w3-button tablink"
                        onclick="openCity(event,'Tokyo')">Node JS</button>
                    <button id="html" class="w3-bar-item w3-button tablink"
                        onclick="openCity(event,'Kotlin')">Kotlin</button>
                    <button id="html" class="w3-bar-item w3-button tablink"
                        onclick="openCity(event,'php')">php</button>
                </div>

                <br>

                <div id="London" class="w3-container w3-border city">
                    <pre>
import json
import base64
from Crypto.PublicKey import RSA
from Crypto.Hash import MD5
from Crypto.Signature import pkcs1_15
from Crypto.Cipher import PKCS1_OAEP

from Cryptodome.Cipher import PKCS1_v1_5
import os

class encrypt_rsa():

    
    def __init__(self, data):
        # replace with your public key
        public_key = ("-----BEGIN PUBLIC KEY-----\n"+
        "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCy7O9ULgdfc1SUXrU0W2qWg3l8VbvNpvq+ilwPDdq4EYzKwOe97Zd2wtW8HJQF7GNn2SaeHLCilsAJTYPLb+uRzXz3Aozxx8u6Bk5mGMVqi9rXXCNQCpRZYgM/7JDvtO5UhLCiMFHFO2f2c0QCmdR+yzdP6anJk9vLikuBwWxY6wIDAQAB"+
        "\n-----END PUBLIC KEY-----")
        self.message = data.encode()
        self.public_key = RSA.import_key(public_key)


    # Segmentation encryption
    def encrypt(self):
        try:
            cipher_rsa = PKCS1_v1_5.new(self.public_key)
            res = []
            for i in range(0, len(self.message), 64):
                enc_tmp = cipher_rsa.encrypt(self.message[i:i+64])
                res.append(enc_tmp)
            cipher_text = b''.join(res)
        except Exception as e:
            print(e)
        else:
            return base64.b64encode(cipher_text).decode()


if __name__ == '__main__':

    payload = "{providerName: 'KBZ Pay',methodName: PWA,orderId: 'test-23112021001',customerPhone: '959796564600', description:'Test',customerAddress:'Yangon, Myanmar' ,totalAmount: 2200, email: 'test@gmail.com', customerName: 'test username', items:'[{\"name\":\"Apple\",\"amount\":\"1100\",\"quantity\":\"2\"}]'}"

    payload_encrypt = encrypt_rsa(payload).encrypt()
    print(str(payload_encrypt))
                </pre>
                </div>

                <div id="Paris" class="w3-container w3-border city" style="display:none">
                    <pre>
public static byte[] encrypt(String data, String publicKey) throws BadPaddingException, IllegalBlockSizeException, InvalidKeyException, NoSuchPaddingException, NoSuchAlgorithmException {
    Cipher cipher = Cipher.getInstance("RSA/ECB/PKCS1Padding");
    cipher.init(Cipher.ENCRYPT_MODE, getPublicKey(publicKey));
    byte[] enBytes = null;
    int i = 0;
    while (i < data.length()) {
        byte[] doFinal = cipher.doFinal(ArrayUtils.subarray(data.getBytes(), i, i + 64));
        enBytes = ArrayUtils.addAll(enBytes, doFinal);
        i += 64;
    }
    return enBytes;
}

public static PublicKey getPublicKey(String base64PublicKey){
        PublicKey publicKey = null;
        try{
            X509EncodedKeySpec keySpec = new X509EncodedKeySpec(Base64.getDecoder().decode(base64PublicKey.getBytes()));
            KeyFactory keyFactory = KeyFactory.getInstance("RSA");
            publicKey = keyFactory.generatePublic(keySpec);
            return publicKey;
        } catch (NoSuchAlgorithmException e) {
            e.printStackTrace();
        } catch (InvalidKeySpecException e) {
            e.printStackTrace();
        }
        return publicKey;
    }
               </pre>
                </div>

                <div id="Tokyo" class="w3-container w3-border city" style="display:none">
                    <pre>
 ** if you want to put ' in json array, you can use this way to make a correct json format or you can replace ' and " characters in your product name before sending to Dinger gateway **
const items = `[{\"name\":\"Dinger\\'s\",\"amount\": ${totalAmount},\"quantity\":\"1\"}]`;

const data = "{providerName: 'Onepay',methodName: PIN,orderId: 'hnt-11092021001',customerPhone: '959796564600',customerName: 'Hsu Nyeint Thu', description:'Dinger Campaign Test',customerAddress:'Yangon, Myanmar' ,totalAmount: 100,items:'[{\"name\":\"Dinger\",\"amount\":\"100\",\"quantity\":\"1\"}]'}"


const pubKey = "-----BEGIN PUBLIC KEY-----\n"+
            "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCp0/5oszMaTRzFL/M7yaO2+B9yjGO2u3grq5dNzH+xnJn7IViC5oA//WdHuF6lDvcGHbhcIpQX8tGV5juOK7N/xBj9mrcE4QYAdVAMsnpx8bpTD9sUjg/QbXkK79JDIDbPjdgHWKKfKfo0EWgHkGpYmZDmDy0JG6KUiiUOrFaSQQIDAQAB"
        "-----END PUBLIC KEY-----";

const publicKey = new NodeRSA();
publicKey.importKey(pubKey, 'pkcs8-public')
publicKey.setOptions({encryptionScheme: 'pkcs1'})
const encrytpStr = publicKey.encrypt(data,'base64')
console.log("encrytpStr "+encrytpStr)
const param = {payload: encrytpStr};
const payloadData = new URLSearchParams(param);
// in fetch:
return await fetch(url, {
   method,
   body: payloadData })
                </pre>
                </div>
                <div id="Kotlin" class="w3-container w3-border city" style="display:none">
                    <pre>
                    val payload = data.toString()
val encryptedPayload = Base64.getEncoder().encodeToString(
                segmentationEncryption(
                    data.toString().toByteArray(),
                    publicKey
                )
            )           

  fun segmentationEncryption(data: ByteArray, rsaPublicKeyBase64: String): ByteArray? {

        val cipher: Cipher = Cipher.getInstance("RSA/ECB/PKCS1Padding")
        cipher.init(Cipher.ENCRYPT_MODE, getRsaPublicKey(rsaPublicKeyBase64))

        var enBytes: ByteArray? = null

        var i = 0
        while (i < data.size) {
            val doFinal = cipher.doFinal(ArrayUtils.subarray(data, i, i + 64))
            enBytes = ArrayUtils.addAll(enBytes, doFinal)
            i += 64
        }

        return enBytes
    }
                </pre>
                </div>
                <div id="php" class="w3-container w3-border city" style="display:none">
                    <pre>  @markdown    @verbatim
                $items_data = array(
            "name" => "Dinger University Donation",
            "amount" => "$total",
            "quantity" => "1"
        );
 
                if ($payment == "Visa") {
                 $data_pay = json_encode(array(
                "providerName" => $payment,
                "methodName" => $method,
                "totalAmount" => "$total",
                "items" => json_encode(array($items_data)),
                "orderId" => $donationID,
                "customerName" => $name,
                "email" => $email,
                "billToForeName" => "Customer name",
                "billToSurName" => $name,
                "billAddress" => $address,
                "billCity" => $city,
                "customerPhone" => $phone
            ));
        } elseif ($payment == "Master") {
            $data_pay = json_encode(array(
                "providerName" => $payment,
                "methodName" => $method,
                "totalAmount" => "$total",
                "items" => json_encode(array($items_data)),
                "orderId" => $donationID,
                "customerName" => $name,
                "email" => $email,
                "billToForeName" => "Customer name",
                "billToSurName" => $name,
                "billAddress" => $address,
                "billCity" => $city,
                "customerPhone" => $phone
            ));
        } elseif ($payment == "JCB") {
            $data_pay = json_encode(array(
                "providerName" => $payment,
                "methodName" => $method,
                "totalAmount" => "$total",
                "items" => json_encode(array($items_data)),
                "orderId" => $donationID,
                "customerName" => $name,
                "email" => $email,
                "billToForeName" => "Customer name",
                "billToSurName" => $name,
                "billAddress" => $address,
                "billCity" => $city,
                "customerPhone" => $phone
            ));
        } elseif ($payment != "Visa" && $payment != "Master" && $payment != "JCB") {
            $data_pay = json_encode(array(
                "providerName" => $payment,
                "methodName" => $method,
                "totalAmount" => "$total",
                "items" => json_encode(array($items_data)),
                "orderId" => $donationID,
                "customerName" => $name,
                "customerPhone" => $phone
            ));
        }
       
        $publicKey = '-----BEGIN PUBLIC KEY-----MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCJtu2coOqkFaaxLtlnb6DAQRvw+6l9iwm6RZlGrAf6IUnZiJavYi60hTveLkFbeYLvvLcFyIGddQDUJBCvEOIk7GwgF6pPRlV9k5g7CDyHbqsjudOix+ElD2XkAiUeYWAK++uRVBqcE/xxwNMDoRwyYqoC/OifZf0pH7PA3XCUyQIDAQAB-----END PUBLIC KEY-----';
 
        $rsa = new \phpseclib\Crypt\RSA();
 
        extract($rsa->createKey(1024));
        $rsa->loadKey($publicKey); // public key
        $rsa->setEncryptionMode(2);
 
        $ciphertext = $rsa->encrypt($data_pay);
 
        $value = base64_encode($ciphertext);
                    

                @endverbatim
                @endmarkdown</pre>
                </div>
            </div>
        </div>
    </div>
</div>
                <br><br>
<p id="dev-home"><a>Provider and Methods</a></p>
<p id="home-p">Before using payment provider and methods, you need to click (ON) button on merchant dashboard payment settting page</p>
<p id="home-p"> -Setting Page in Merchant Dashboard<img src="{{ asset('/images/setting.png') }}" /></p><br><br>
<p id="dev-home"><a>Notes for Merchant Developers</a></p>
<p id="home-p">There are mainly three types of payment providers<br><br>
1. Rendering QR image and scan QR code by customers with respective payment wallet apps<br>
2. Receiving notification on pay wallet apps and do payment<br>
3. Redirecting respective payment provider's payment form on web
(for this kinds of redirect payment, you'll receive formtoken value in pay api response and need to redirect properly. For redirecting reference, please see Section 2.5)
</p>
<hr class="line">
<p id="dev-home">Payment Providers List</p>
<div class="payment-provider-container">
<div class="container">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Provider</th>
                            <th scope="col">Method</th>
                            <th scope="col" style="text-align:right;">Accept Decimal Amount</th>
                            <th scope="col" style="text-align:right;">Payment Flow</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr>
                            <td scope="row">AYA pay</td>
                            <td>QR,PIN</td>
                            <td style="text-align:center;">No</td>
                            <td style="text-align:right;">QR - scan QR <br>PIN - receives notification on AYA wallet</td>
                        </tr>
                        <tr>
                            <td scope="row">
                                KBZ Pay</td>
                            <td>QR , PWA</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;">QR - scan QR <br>PWA - opens KBZ Pay app directly</td>
                        </tr>
                        <tr>
                            <td scope="row">
                                Citizens Pay</td>
                            <td>PIN</td>
                            <td style="text-align:center;">No</td>
                            <td style="text-align:right;">Citizens Pay form redirect</td>
                        </tr>
                        <tr>
                            <td scope="row">
                                Wave Pay</td>
                            <td>PIN</td>
                            <td style="text-align:center;">No</td>
                            <td style="text-align:right;">Wave Pay form redirect</td>
                        </tr>
                        <tr>
                            <td scope="row">
                            MPU</td>
                            <td>OTP</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;">MPU Pay form redirect</td>
                        </tr>
                        <tr>
                            <td scope="row">
                            Mytel</td>
                            <td>PIN</td>
                            <td style="text-align:center;">No</td>
                            <td style="text-align:right;">Mytel Pay form redirect</td>
                        </tr>
                        <tr>
                            <td scope="row">
                            Sai Sai Pay</td>
                            <td>PIN</td>
                            <td style="text-align:center;">No</td>
                            <td style="text-align:right;">receives notification on Sai Sai Pay wallet</td>
                        </tr>
                        <tr>
                            <td scope="row">
                            Onepay</td>
                            <td>PIN</td>
                            <td style="text-align:center;">No</td>
                            <td style="text-align:right;">receives notification on Onepay wallet</td>
                        </tr>
                        <tr>
                            <td scope="row">MPitesan</td>
                            <td>	PIN</td>
                            <td style="text-align:center;">No</td>
                            <td style="text-align:right;">receives notification on M-Pitesan wallet</td>
                        </tr>
                        <tr>
                            <td scope="row">
                            KBZ Direct Pay </td>
                            <td>PWA</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;">KBZ Direct Pay form redirect(mobile banking)</td>
                        </tr>
                        <tr>
                            <td scope="row">Visa</td>
                            <td>OTP</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;">	Visa form redirect</td>
                        </tr>
                        <tr>
                            <td scope="row">Master</td>
                            <td>OTP</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;">Master form redirect</td>
                        </tr>
                        <tr>
                            <td scope="row"> MPU
                            </td>
                            <td>JCB</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;">JCB form redirect</td>
                        </tr>
                        <tr>
                            <td scope="row">CB Pay</td>
                            <td>QR</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;">CB Pay QR form redirect</td>
                        </tr>
                        <tr>
                            <td scope="row">MAB Bank</td>
                            <td>OTP</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;">MAB Mobile Banking web page redirect</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
        <hr class="line">
<p id="dev-home"> Pay API Request Parameter</p>
<div class="payment-provider-container">
<div class="container">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col" style="text-align:left;">Length</th>
                            <th scope="col" style="text-align:right;">Mandatory</th>
                            <th scope="col" style="text-align:right;">Description</th>
                            <th scope="col" style="text-align:right;">Value</th>

                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr>
                            <td scope="row">providerName</td>
                            <td>String</td>
                            <td style="text-align:left;">20 Char</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:center;">Name of the payment provider that the user chooses
(see the list of provided provider name in Provider and Methods Table)</td>
                            <td style="text-align:right;">AYA Pay</td>
                        </tr>
                        <tr>
                            <td scope="row">methodName</td>
                            <td>String</td>
                            <td style="text-align:left;">20 Char</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:center;">Name of the payment method that the user chooses
(see the list of provided method name in Provider and Methods Table)</td>
                            <td style="text-align:right;">QR, PIN , PWA</td>
                        </tr>
                        <tr>
                            <td scope="row">totalAmount</td>
                            <td>Integer</td>
                            <td style="text-align:right;"></td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:center;">The total amount of the order</td>
                            <td style="text-align:right;">1000(MPU - min 1000 MMK , AYA Pay - min 100 MMK)</td>
                        </tr>
                        <tr>
                            <td scope="row">orderId</td>
                            <td>String</td>
                            <td style="text-align:right;">50 Char</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:center;">Unique ID for each order</td>
                            <td style="text-align:right;">Eg- Order 001</td>
                        </tr>
                        <tr>
                            <td scope="row">description</td>
                            <td>String</td>
                            <td style="text-align:right;"></td>
                            <td style="text-align:center;">No</td>
                            <td style="text-align:center;">Cutomer order description</td>
                            <td style="text-align:right;">Eg - call this number 095412313 before delivery</td>
                        </tr>
                        <tr>
                            <td scope="row">customerAddress</td>
                            <td>String</td>
                            <td style="text-align:right;"></td>
                            <td style="text-align:center;">No</td>
                            <td style="text-align:center;">Customer address</td>
                            <td style="text-align:right;">Eg - No(70), Thukha street, ...</td>
                        </tr>
                        <tr>
                            <td scope="row">customerPhone</td>
                            <td>String</td>
                            <td style="text-align:right;">50 Char</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:center;">Mobile number of the customers</td>
                            <td style="text-align:right;">Eg- 095412313</td>
                        </tr>
                        <tr>
                            <td scope="row">customerName</td>
                            <td>String</td>
                            <td style="text-align:right;">50 Char</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:center;">Customer name</td>
                            <td style="text-align:right;">Eg- Mg Mg</td>
                        </tr>
                        <tr>
                            <td scope="row">Items</td>
                            <td>String Json Array</td>
                            <td style="text-align:right;"></td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:center;">Lists of the keys ( Name, Amount and Quantity) Remark: This amount should be same with total amount from above</td>
                            <td style="text-align:right;">[{‘name':'Mac','amount':'1100','quantity':'2'}]</td>
                        </tr>
                        <tr>
                            <td scope="row">email</td>
                            <td>String</td>
                            <td style="text-align:right;"></td>
                            <td style="text-align:center;">Yes (For Visa, Master and JCB)
No (For other payment providers)</td>
                            <td style="text-align:center;">Customer Email</td>
                            <td style="text-align:right;">Eg- test@gmail.com</td>
                        </tr>
                        <tr>
                            <td scope="row">billAddress</td>
                            <td>String</td>
                            <td style="text-align:right;"></td>
                            <td style="text-align:center;">Yes (For Visa, Master and JCB)
No (For other payment providers)</td>
                            <td style="text-align:center;">Billing Address</td>
                            <td style="text-align:right;">Eg- No.70, Thukha street, ...</td>
                        </tr>
                        <tr>
                            <td scope="row">billCity</td>
                            <td>String</td>
                            <td style="text-align:right;"></td>
                            <td style="text-align:center;">Yes (For Visa, Master and JCB)
No (For other payment providers)</td>
                            <td style="text-align:center;">Billing City</td>
                            <td style="text-align:right;">Eg- Yangon</td>
                        </tr>
                        <tr>
                            <td scope="row">description</td>
                            <td>String</td>
                            <td style="text-align:right;"></td>
                            <td style="text-align:center;">No</td>
                            <td style="text-align:center;">Description or notes of the payment</td>
                            <td style="text-align:right;">Eg- Buying Dinger Products</td>
                        </tr>
                        <tr>
                            <td scope="row">currency</td>
                            <td>String</td>
                            <td style="text-align:right;">50 Char</td>
                            <td style="text-align:center;">No</td>
                            <td style="text-align:center;">Currency of the payment</td>
                            <td style="text-align:right;">MMK, USD
(When you do not add, default will be 'MMK')</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

        </div>

        <p id="dev-home"><a>HEADERS</a></p>
        <hr class="line">
        <pre id="dev-home">    @markdown
                                    @verbatim
                                    Authorization Bearer          {{paymentToken}}
                                    @endverbatim
                                    @endmarkdown</pre><br><br>
                                    <p id="dev-home"><a>BODY formdata</a></p>
        <hr class="line">
        <pre id="dev-home">    @markdown
                                    @verbatim
                                    payload                         {payload}
                                    @endverbatim
                                    @endmarkdown</pre><br><br>
                                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="code3">
                                <div class="container">
                                    <div class="row">
                                        <button id="result">Example Request (Pay API)</button>
                                    </div><br>
                                    <pre>
                                    @markdown
                                    @verbatim
curl --location --request POST '{{baseurl}}api/pay' \
--header 'Authorization: Bearer {{paymentToken}}' \
--form 'payload={payload}'
@endverbatim
@endmarkdown
</pre>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="line">
                    <p id="dev-home">Form Redirect</p>
                    <table class="table table-responsive-sm">
                    <p id="home-p">Redirect to Dinger KBZ PAY PWA, KBZ Direct Pay, Wave Pay, Citizens and Mytel Gateway, MAB Bank</p>
                    <thead>
                        <br>
                        <tr>
                            <th scope="col">METHOD</th>
                            <th scope="col">GET</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr>
                            <td scope="row">URL</td>
                            <td>https://portal.dinger.asia/gateway/redirect?transactionNo={transactionNo}&formToken={formToken}&merchantOrderId={merchantOrderId}</td>
                        </tr>
                    </tbody>
                </table> <hr class="line">
                <table class="table table-responsive-sm">
                    <p id="home-p">Redirect to M-Pitesan Gateway</p>
                    <thead>
                        <br>
                        <tr>
                            <th scope="col">METHOD</th>
                            <th scope="col">GET</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr>
                            <td scope="row">URL</td>
                            <td>https://portal.dinger.asia/gateway/mpitesan?transactionNumber={transactionNumber}&formToken={formToken}&merchantOrderId={merchantOrderId}</td>
                        </tr>
                    </tbody>
                </table> <hr class="line">
                <table class="table table-responsive-sm">
                    <p id="home-p">Redirect to CB Pay QR Gateway</p>
                    <thead>
                        <br>
                        <tr>
                            <th scope="col">METHOD</th>
                            <th scope="col">GET</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr>
                            <td scope="row">URL</td>
                            <td>https://portal.dinger.asia/gateway/cbpay?transactionNumber={transactionNumber}&formToken={formToken}&merchantOrderId={merchantOrderId}</td>
                        </tr>
                    </tbody>
                </table> <hr class="line">
                <table class="table table-responsive-sm">
                    <p id="home-p">Redirect to Dinger MPU Gateway</p>
                    <thead>
                        <br>
                        <tr>
                            <th scope="col">METHOD</th>
                            <th scope="col">GET</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr>
                            <td scope="row">URL</td>
                            <td>https://portal.dinger.asia/gateway/mpu?transactionNumber={transactionNumber}&formToken={formToken}</td>
                        </tr>
                    </tbody>
                </table> <hr class="line">
                <table class="table table-responsive-sm">
                    <p id="home-p">Redirect to Visa, Master and JCB Gateway</p>
                    <thead>
                        <br>
                        <tr>
                            <th scope="col">METHOD</th>
                            <th scope="col">GET</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr>
                            <td scope="row">URL</td>
                            <td>https://creditcard-portal.dinger.asia/?merchantOrderId={merchantOrderId}&transactionNum={transactionNum}&formToken={formToken}</td>
                        </tr>
                    </tbody>
                </table> 
                <p id="home-p">No need to redirect to KBZ Pay QR,AYA Pay QR,AYA Pay Pin,ONE Pay Pin and SAI SAI Pay Pin </p>
                
                <hr class="line">

                <p id="dev-home">Response</p>
                <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="code2">
                                <div class="container">
                                    <div class="row">
                                        <button id="result">JSON</button>
                                    </div><br>

                                    <pre>
{
 code: '000',
 message: 'Request Success',
 time: '20201224 103734',
 response: {
 amount: 200,
 merchOrderId: 'kothanzawlynn-172597',
 formToken: 'd9422446-2532-49de-8d0e-9db221bf0597',
 transactionNum: '9186115919',
 sign: '71005BCDDF3AF7968A504B64012B1E680145E5D4568C9ACB1ADBE0E2F4C4DAC1',
 signType: 'SHA256'
 }
}
</pre>

                                </div>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

@endsection