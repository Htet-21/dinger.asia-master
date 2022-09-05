@extends('layouts.developers')

@section('title')
Dinger | Developers
@endsection

@section('content')
<div id="production-intro-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-12 drop-left">

                <div id="hider">
                    <p id="main-menu">Get Started</p>
                    <p id="small-p" class="grey"><a href="{{ url('/developers/eng') }}">Home</a></p>

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
                    <p id="small-p"><a href="{{ url('/Encryption/eng') }}"><img
                                src="{{ asset('/images/encrypt.png') }}" /></a></p>

                    <p id="main-menu">Production API</p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-intro/eng') }}">Introduction</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-gettoken/eng') }}">Get Token</a></p>
                    <p id="small-p" class="grey"><a href="{{ url('/production-payAPI/eng') }}">Pay API</a></p>
                    <p id="small-p" class="grey "><a href="{{ url('/production-merchant-callback/eng') }}">Merchant Callback</a></p>

                    <p id="main-menu">woocommerce</p>
                    <p id="small-p" class="grey"><a href="{{ url('/woocommerce-intro/eng') }}">Introduction</a></p>

                    <p id="main-menu"><a href="{{ url('Status/eng') }}">Transaction Status and Request url</a></p>

                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-12 drop-right">
                <h2 id="home-h">Encryption & Decryption data</h2>
                <hr class="line">
                <p id="dev-home">Node</p>
                <p id="home-p">In node JS, you have to install a library, aes-ecb that helps you with encrypting and
                    decrypting base64 payload.</p>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="code">
                                <div class="container">
                                    <div class="row">
                                        <button id="html" class="w3-bar-item w3-button tablink w3-red"
                                            onclick="openCity2(event,'Ygn')"> Node ES6</button>
                                        <button id="html" class="w3-bar-item w3-button tablink"
                                            onclick="openCity2(event,'Mandalay')">Node commonJS</button>
                                    </div>

                                    <br>

                                    <div id="Ygn" class="w3-container w3-border city2">
                                        <pre>
import aesEcb from 'aes-ecb';

const secret_key = 'yoursecretkey1231231231231231231';
const data = {
    totalAmount: 3000,
    createdAt: '20210927 154445',
    transactionStatus: 'SUCCESS',
    methodName: 'QR',
    merchantOrderId: '4',
    customerName: 'John Doe',
    transactionId: 'TRX390920214427154445',
    providerName: 'KBZ Pay',
};

// This encrypts the data payload
const encrypted_data = aesEcb.encrypt(secret_key, JSON.stringify(data));

// This decrypts the data payload, returning the original data
const decrypted_data = aesEcb.decrypt(secret_key, encrypted_data);

console.log(encrypted_data, decrypted_data);
                                    </pre>
                                    </div>
                                    <div id="Mandalay" class="w3-container w3-border city2" style="display:none">
                                        <pre>
const aesEcb = require('aes-ecb');

const secret_key = 'yoursecretkey1231231231231231231';
const data = {
    totalAmount: 3000,
    createdAt: '20210927 154445',
    transactionStatus: 'SUCCESS',
    methodName: 'QR',
    merchantOrderId: '4',
    customerName: 'John Doe',
    transactionId: 'TRX390920214427154445',
    providerName: 'KBZ Pay',
};

// This encrypts the data payload
const encrypted_data = aesEcb.encrypt(secret_key, JSON.stringify(data));

// This decrypts the data payload, returning the original data
const decrypted_data = aesEcb.decrypt(secret_key, encrypted_data);

console.log(encrypted_data, decrypted_data);
                                   </pre>
                                    </div>
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
                                            onclick="openCity(event,'London')"> Java</button>
                                        <button id="html" class="w3-bar-item w3-button tablink"
                                            onclick="openCity(event,'Paris')">PHP</button>
                                        <button id="html" class="w3-bar-item w3-button tablink"
                                            onclick="openCity(event,'Tokyo')">C#</button>
                                    </div>

                                    <br>

                                    <div id="London" class="w3-container w3-border city">
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

                                    <div id="Paris" class="w3-container w3-border city" style="display:none">
                                        <pre>
$items_data = array(
            "name" => "Dinger University Donation",
            "amount" => "$total",
            "quantity" => "1"
        );
 
$data_pay = json_encode(array(
    "providerName" => $payment,
    "methodName" => $method,
    "totalAmount" => "$total",
    "items" => json_encode(array($items_data)),
    "orderId" => $donationID,
    "customerName" => $name,
    "customerPhone" => $phone
));
       
$publicKey = '-----BEGIN PUBLIC KEY-----MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCJtu2coOqkFaaxLtlnb6DAQRvw+6l9iwm6RZlGrAf6IUnZiJavYi60hTveLkFbeYLvvLcFyIGddQDUJBCvEOIk7GwgF6pPRlV9k5g7CDyHbqsjudOix+ElD2XkAiUeYWAK++uRVBqcE/xxwNMDoRwyYqoC/OifZf0pH7PA3XCUyQIDAQAB-----END PUBLIC KEY-----';
 
$rsa = new \phpseclib\Crypt\RSA();

extract($rsa->createKey(1024));
$rsa->loadKey($publicKey); // public key
$rsa->setEncryptionMode(2);

$ciphertext = $rsa->encrypt($data_pay);

$value = base64_encode($ciphertext);
                                   </pre>
                                    </div>

                                    <div id="Tokyo" class="w3-container w3-border city" style="display:none">
                                        <pre>
using System.Security.Cryptography;
using System.Text;
using Newtonsoft.Json;

String pubB64 = "MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQCFD4IL1suUt/TsJu6zScnvsEdLPuACgBdjX82QQf8NQlFHu2v/84dztaJEyljv3TGPuEgUftpC9OEOuEG29z7z1uOw7c9T/luRhgRrkH7AwOj4U1+eK3T1R+8LVYATtPCkqAAiomkTU+aC5Y2vfMInZMgjX0DdKMctUur8tQtvkwIDAQAB";
String secretKey = "d8b71e60e91a0cffa4c98ededde46146";

String text = "{\"clientId\":\"2c4a45aa-5322-3ed5-b918-f157a3b7cc35\",\"publicKey\":\"MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC6vBHgmOovsnS99PWVc/sgpVVnK+ZlD/Be0K+NwwUYuRaBuqIn9Fn677ZBdu6+w5mDk1a07zghQWM7taLeWR64gTHg+VqWVN1bN6kyR3l4b5HcAZp7S2nGZUJXNJ0YaFbBmAeMDsPN2+rJEttTHhaJs5QHmZxEo6/qFiqIxWFUWQIDAQAB\",\"merchantOrderId\":\"aabfe83e-1293-478e-b733-a020254c29d2\",\"totalAmount\":5250,\n    \"merchantKey\":\"vghepqn.f-RnRDuP2IVMFS5H5fFbT6uIZ44\",\n    \"projectName\":\"Mobile App Payment\",\n    \"merchantName\":\"shoon\",\n    \"customerName\":\"Quanty McQuanterson\",\n    \"items\":\"[{\\\"name\\\":\\\"1 Month Subscription To Nyein\\\",\\\"amount\\\":\\\"5250\\\",\\\"quantity\\\":\\\"1\\\"}]\"}";

Console.WriteLine("text " + text);
var keyBytes = System.Text.Encoding.UTF8.GetBytes(secretKey);
var hashValue = new HMACSHA256(keyBytes);
byte[] byteArray = Encoding.ASCII.GetBytes(text);
MemoryStream stream = new MemoryStream(byteArray);
string hashValueResult = hashValue.ComputeHash(stream).Aggregate("", (s, e) => s + String.Format("{0:x2}", e), s => s);
Console.WriteLine("__________________________________________________________");
Console.WriteLine("hashValue " + hashValueResult);


const int PayloadStringSplitSize = 64;

byte[] textBytes = System.Text.Encoding.UTF8.GetBytes(text);
byte[] publicKeyBytes = Convert.FromBase64String(pubB64);

var keyLengthBits = 1024;
byte[] exponent = new byte[3];
byte[] modulus = new byte[keyLengthBits / 8];
Array.Copy(publicKeyBytes, publicKeyBytes.Length - exponent.Length, exponent, 0, exponent.Length);
Array.Copy(publicKeyBytes, publicKeyBytes.Length - exponent.Length - 2 - modulus.Length, modulus, 0, modulus.Length);

RSACryptoServiceProvider rsa = new RSACryptoServiceProvider();
RSAParameters rsaKeyInfo = rsa.ExportParameters(false);
rsaKeyInfo.Modulus = modulus;
rsaKeyInfo.Exponent = exponent;
rsa.ImportParameters(rsaKeyInfo);

//byte[] encrypted = rsa.Encrypt(textBytes, RSAEncryptionPadding.Pkcs1);

var howManyFullStrings = text.Length / PayloadStringSplitSize;
List<string> splitSerialisedData = Enumerable.Range(0, howManyFullStrings).Select(i => text.Substring(i * PayloadStringSplitSize, PayloadStringSplitSize)).ToList();
splitSerialisedData.Add(text.Substring(text.Length - (text.Length - (howManyFullStrings * PayloadStringSplitSize)))); // Add Leftover 
byte[] encryptedBytes = new byte[0];

foreach (var stringChunk in splitSerialisedData)
{
    var encryptedChunk = rsa.Encrypt(Encoding.Default.GetBytes(stringChunk), RSAEncryptionPadding.Pkcs1).ToArray();
    encryptedBytes = encryptedBytes.Concat(encryptedChunk).ToArray();
}

var payload = Convert.ToBase64String(encryptedBytes);

Console.WriteLine("__________________________________________________________");
Console.WriteLine("payload "+ payload);

var redirectUrl = "https://prebuilt.dinger.asia" + "?payload=" + System.Web.HttpUtility.UrlEncode(payload) + "&hashValue=" + hashValueResult;

Console.WriteLine("__________________________________________________________");
Console.WriteLine("redirectUrl " + redirectUrl);
                                    </pre>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <br><br>

            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')

@endsection