@extends('layouts.developers')

@section('title')
Dinger | Developers
@endsection

@section('content')
<div id="production-merchant-callback-wrapper">
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
                    <p id="small-p" class="grey"><a href="{{ url('/production-payAPI/eng') }}">Pay API</a></p>
                    <p id="small-p" class="grey "><a href="{{ url('/production-merchant-callback/eng') }}"><img
                                src="{{ asset('/images/Frame 33.png') }}" /></a></p>

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
                <h2 id="home-h">Merchant Callback</h2>
                <hr class="line"><br><br>

                <p id="dev-home"><a>Description</a></p>
                <p id="home-p">After user do pay online, dinger will push the result to the merchant callback url . The
                    result contains two fields. Dinger will also invoke to your callback url if the transaction is
                    success
                    or fail. If it is in pending status, dinger will not invoke the callback url.<br><br>
                    • paymentResult (Needs to decrypt the paymentResult response with Base64 first and then with
                    AES/ECB/PKCS7Padding algorithm)<br><br>
                    • checksum(sha256(jsonString(resultObj))<br><br>
                    Testing Secret Key - d655c33205363f5450427e6b6193e466
                </p><br><br>
                <p id="dev-home"><a>Request</a></p>
                <p id="home-p">This API requests only one payload param(base64(rsa(obj)) string) in form body.
                </p>
                <hr class="line">
                <p id="dev-home">Sample Response After Decryption</p>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="code2">
                                <div class="container">
                                    <div class="row">
                                        <button id="result">Content of paymentResult after
                                            decryption:</button>
                                    </div><br>

                                    <pre>{
   "totalAmount":1000,
   "createdAt":"20210916 085233",
   "transactionStatus":"SUCCESS",
   "methodName":"QR",
   "merchantOrderId":"0586",
   "transactionId":"TRX312720215216085254",
   "customerName":"Min Thu Kyaw",
   "providerName":"KBZ Pay"
}
</pre>

                                </div>
                            </div>
                        </div>
                    </div>

                <hr class="line">

                <p id="dev-home">Decryption Code Sample</p>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="code">
                                <div class="container">
                                    <div class="row">
                                        <button id="html" class="w3-bar-item w3-button tablink w3-red"
                                            onclick="openCity(event,'London')"> Python</button>
                                        <button id="html" class="w3-bar-item w3-button tablink"
                                            onclick="openCity(event,'Paris')">Laravel</button>
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
from Crypto.Util.Padding import pad
from Crypto.Cipher import AES
import base64
 
class PrpCrypt(object):
 
    def __init__(self):
        self.unpad = lambda date: date[0:-ord(date[-1])]
 
    def aes_cipher(self, key, aes_str):
        aes = AES.new(key.encode('utf-8'), AES.MODE_ECB)
        pad_pkcs7 = pad(aes_str.encode('utf-8'), AES.block_size, style='pkcs7') 
        encrypt_aes = aes.encrypt(pad_pkcs7)
        encrypted_text = str(base64.encodebytes(encrypt_aes), encoding='utf-8') 
        encrypted_text_str = encrypted_text.replace("\n", "")
 
        return encrypted_text_str
 
    def decrypt(self, key, decrData):
        res = base64.decodebytes(decrData.encode("utf8"))
        aes = AES.new(key.encode('utf-8'), AES.MODE_ECB)
        msg = aes.decrypt(res).decode("utf8")
        return self.unpad(msg)
 
 
if __name__ == '__main__':
    # replace with your callback key
    key = "d655c33205363f5450427e6b6193e466"

    # callback data to be decrypted
    paymentResult = "mX2Ku+jslxIXDSQMxl3wzDclIiKilKlakN2149ijiV467m3lgyQTHuUlobdKDUrfxa5xlMg5HLj9MuO0WWssf+EjcRnPI8LMxU7LnM8lDYO52QeuU1bZ/0WV95jzJ1jOt6AJXNiSl+wu6wy6sQioCjVyyRXIpSug/4pokaXkIdQCpZo/YKa5QpVtSf1DucnCG/ESsxTw1sJQ39Pox8tdbcSvTPZrdFzcAyi/C8JFVtavTaUS8X1QndfKQphquZVhfKhVBA8etZaMwsoclfB8/e8mCSMUn+2s7/LYf9i9QHqlVdoS2ssTqJT+Rcfs9/Wa"
        
    result = PrpCrypt().decrypt(key,paymentResult)
    print(result)

                                    </pre>
                                    </div>

                                    <div id="Paris" class="w3-container w3-border city" style="display:none">
                                        <pre>
// decrypt callback data
       
       $paymentResult = $request->paymentResult;
       $secrectKey =  "7f4917e39f698ac433ac1d207e139adc";
       $decrypted = openssl_decrypt($paymentResult,"AES-256-ECB", $secrectKey);
       
       // get callback data
       
       $decryptedValues = json_decode($decrypted, true);
       $transactionStatus = $decryptedValues["transactionStatus"];
       $merchantOrderId = $decryptedValues["merchantOrderId"];
       $totalAmount = $decryptedValues["totalAmount"];
       $methodName = $decryptedValues["methodName"];
       $providerName = $decryptedValues["providerName"];
       $transactionId = $decryptedValues["transactionId"];
       $customerName = $decryptedValues["customerName"];
                                   </pre>
                                    </div>

                                    <div id="Tokyo" class="w3-container w3-border city" style="display:none">
                                        <pre>
<!-- import * as aesEcb from 'aes-ecb';

const SECRET_KEY = '8d75275309a36d4938f639c55355549b';
const cipherText =
    'scYW+i1m9yWdEZCKa2OXrDhBu3F7N1RGK63p1CTKhRr4m6sVZoyVVEQ8QbKHnVAiCW9swlWZQg7VSfOSb8QWvv3faq1J0AhGzxO350FIUEZZitpJj2gTTrdxXzPQzwYu9ZlI6nWT6YMYMLEA4zHyfmmcK2eHODr9V04+yDDl1hFWDbBe4qKEyMaK0pdeLbgGbyFfSM6hSgOsHpkN4JxZeZGGYmZFAG3bemMnO2PBX+lMhvQNxHZYSxYbh9wrXyFc8fgmUm4trYNdtxcZHchk4/PVW3nNRBRIMUuP+b2ShnY=';

console.log(aesEcb.decrypt(SECRET_KEY, cipherText)); -->
import * as aesEcb from 'aes-ecb';

const SECRET_KEY = 'd655c33205363f5450427e6b6193e466';
const cipherText ="5zDOSGSI/YE7wsmX/IlBZb6iH0NpwgRuUL13RY9sEKIvo8oebHCh1FKZ0MKTkvlKPQ6Cn2qYg7UDQssBuMbkVAGWcVPK0WvvrrACrx480jdydrNUcsqX4vsaqHuRlCQa/7Qfur+W6WNKO4exvOvN25FtE8hDB7ENu37r54wUlGC21bojhq9M15/Ql5P9+w1x/+Ep13nmyptGOHfI4a4V3D57v0HQ8KqUnOy5P6E4FYOSeOVeVuCJ516RK94OIVAUB3F9jqy4NLm9jqc243pWOR9fwGJK5YplMbOuQFEZKt0=";

const resultObj = aesEcb.decrypt(SECRET_KEY, cipherText);
console.log(resultObj);

import { sha256 } from "js-sha256";
let sign = sha256(resultObj);
console.log(sign);

* This sign value and the checksum value(from the URL) must be same, if not we have to assume incorrect signature and return error *
                                    </pre>
                                    </div>
                                    <div id="Kotlin" class="w3-container w3-border city" style="display:none">
                                        <pre>
val paymentDecrypted = decryptWithAES(callbackKey, paymentResult)

fun decryptWithAES(key: String, strToDecrypt: String?): String? {
        Security.addProvider(BouncyCastleProvider())
        val keyBytes: ByteArray

        try {
            keyBytes = key.toByteArray(charset("UTF8"))
            val skey = SecretKeySpec(keyBytes, "AES")
            val input = org.bouncycastle.util.encoders.Base64
                .decode(strToDecrypt?.trim { it <= ' ' }?.toByteArray(charset("UTF8")))

            synchronized(Cipher::class.java) {
                val cipher = Cipher.getInstance("AES/ECB/PKCS7Padding")
                cipher.init(Cipher.DECRYPT_MODE, skey)

                val plainText = ByteArray(cipher.getOutputSize(input.size))
                var ptLength = cipher.update(input, 0, input.size, plainText, 0)
                ptLength += cipher.doFinal(plainText, ptLength)
                val decryptedString = String(plainText)
                return decryptedString.trim { it <= ' ' }
            }
        } catch (uee: UnsupportedEncodingException) {
            uee.printStackTrace()
        } catch (ibse: IllegalBlockSizeException) {
            ibse.printStackTrace()
        } catch (bpe: BadPaddingException) {
            bpe.printStackTrace()
        } catch (ike: InvalidKeyException) {
            ike.printStackTrace()
        } catch (nspe: NoSuchPaddingException) {
            nspe.printStackTrace()
        } catch (nsae: NoSuchAlgorithmException) {
            nsae.printStackTrace()
        } catch (e: ShortBufferException) {
            e.printStackTrace()
        }

        return null
    }
                                    </pre>
                                    </div>
                                    <div id="php" class="w3-container w3-border city" style="display:none">
                                        <pre>  @markdown
                                    ```php
                                    @verbatim
                                    

                                        $servername = "localhost";
                                        $username = "username";
                                        $password = "password";
                                        $dbname = "dbname";

                                        $conn = new mysqli($servername, $username, $password, $dbname);
                                        // Check connection

                                        if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                        }

                                        $result = file_get_contents("php://input");

                                        $decodeValue = json_decode($result, true);

                                        $paymentResult = $decodeValue['paymentResult'];
                                        $checkSum = $decodeValue['checksum'];

                                        $secrectKey = "d655c33205363f5450427e6b6193e466";
                                        $decrypted = openssl_decrypt($paymentResult,"AES-256-ECB", $secrectKey);


                                        if(hash("sha256", $decrypted) !== $checkSum){

                                        echo "incorrect Singanature.";

                                        } elseif (hash("sha256", $decrypted) == $checkSum) {

                                        $decryptedValues = json_decode($decrypted, true);

                                        $transactionStatus = $decryptedValues["transactionStatus"];

                                        $merchantOrderId = $decryptedValues["merchantOrderId"];

                                        $totalAmount = $decryptedValues["totalAmount"];

                                        $methodName = $decryptedValues["methodName"];

                                        $providerName = $decryptedValues["providerName"];

                                        $transactionId = $decryptedValues["transactionId"];

                                        $customerName = $decryptedValues["customerName"];

                                        $date = date("Y-m-d H:i:s");

                                        if ( $transactionStatus == "SUCCESS" ) {
                                        $success = "display your success message to customer and save the transaction to db.
                                        and do some success function for your app";
                                        $sql = "INSERT INTO callback_data (totalAmount, transactionStatus, methodName,
                                        providerName, merchantOrderId, transactionId, customerName, created_at, updated_at )
                                        VALUES ('$totalAmount', '$transactionStatus', '$methodName', '$providerName',
                                        '$merchantOrderId', '$transactionId', '$customerName', '$date', '$date' )";

                                        if ($conn->query($sql) === TRUE) {
                                        echo "New record created successfully";
                                        } else {
                                        echo "Error: " . $sql . "<br>" . $conn->error;
                                        }
                                        } else {
                                        $error = "display error message and save the transaction to db";
                                        }

                                        $callBackResponse = array(
                                        'transactionStatus' => $transactionStatus,
                                        'merchantOrderId' => $merchantOrderId,
                                        'totalAmount' => $totalAmount,
                                        'methodName' => $methodName,
                                        'providerName' => $providerName,
                                        'transactionId' => $transactionId,
                                        'customerName' => $customerName,
                                        );


                                        header('Content-Type: application/json');
                                        echo json_encode(array("data"=>$callBackResponse));
                                        }
                                        

                                    @endverbatim
                                    ```
                                    @endmarkdown</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <br><br>
                <p id="dev-home">Callback Response Parameters</p>
                <p id="home-p">Content of Payment Result
                </p>
<div class="payment-provider-container">
<div class="container">
                <table class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col" style="text-align:right;">Mandatary</th>
                            <th scope="col" style="text-align:right;">Description</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                        <tr>
                            <td scope="row">totalAmount</td>
                            <td>Integer</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;"></td>
                        </tr>
                        <tr>
                            <td scope="row">createdAt</td>
                            <td>String</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;">yyyyMMdd HHmmss</td>
                        </tr>
                        <tr>
                            <td scope="row">transactionStatus</td>
                            <td>String</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;">SUCCESS, ERROR, CANCELLED, TIMEOUT,DECLINED, SYSTEM_ERROR</td>
                        </tr>
                        <tr>
                            <td scope="row">methodName</td>
                            <td>String</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;"></td>
                        </tr>
                        <tr>
                            <td scope="row">providerName</td>
                            <td>String</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;"></td>
                        </tr>
                        <tr>
                            <td scope="row">customerName</td>
                            <td>String</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;"></td>
                        </tr>
                        <tr>
                            <td scope="row">merchantOrderId</td>
                            <td>String</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;"></td>
                        </tr>
                        <tr>
                            <td scope="row">transactionId</td>
                            <td>String</td>
                            <td style="text-align:center;">Yes</td>
                            <td style="text-align:right;"></td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>  

            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@endsection