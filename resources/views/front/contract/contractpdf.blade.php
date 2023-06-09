<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>


</head>
<style>
    body{
        font-family: 'Barlow', sans-serif !important;
    }
    .main-div{
        margin-top:20px;
    }
    .heading{
        /* text-align:center; */
        font-size:20px;
        font-weight:700;
    }
    </style>
<body>

<div class="container" >
    <h1 style="font-weight:700; text-align:center">Contract</h1>
        <div class="main-div">
            <p class="heading">ASSET PURCHASE, SALE AND TRANSFER AGREEMENT</p>
            <p class="text">This Asset Sale, Purchase and Transfer Agreement (this “Agreement”) is made between DMP Holdings, Inc., a Utah corporation (the “Seller”), and Security Solutions Group, Inc., a Nevada corporation (the “Buyer”) on this 12th day of November, 2009</p>
        </div>

        <div class="main-div">
            <p class="heading">RECITALS</p>
            <p class="text">WHEREAS, Buyer desires to acquire certain assets and business operations owned by Seller, and Seller is willing to sell such assets and business operations to Buyer, on the terms and conditions set forth in this Agreement.  </p>
        </div>

        <div class="main-div">
            <p class="heading">AGREEMENT</p>
            <p class="text">NOW, THEREFORE, for the good and valuable consideration, the receipt and sufficiency of which is hereby acknowledged, the Parties agree as follows:</p>
            <p>Definitions.  As used herein, the following terms shall have the following meanings:</p>
            <ol type="A">
                <li>Assets.  The term “Assets” shall mean Praesidium a brand protection, loss prevention and asset management technology that includes IP, agreements, contracts, documents, equipment and inventory, specifically designed to provide a total solution in the area of Brand Protection and Loss Prevention products and services.</li>
                <li>Contracts.  The term “Contracts” shall mean the contracts and leases (except for the long term leases described in Section 1.3), which are described in Sections 1.1 and 1.2 and 1.4.</li>
                <li>Closing.  The term “Closing” or “Closing Date” shall have the meaning ascribed to it in Section 3.1.</li>
                <li>Material Adverse Effect.  The term “Material Adverse Effect” shall mean events which have an adverse effect in the aggregate which, measured in dollars, exceeds the sum of $15,000.</li>
                <li>Material Contract.  The term “Material Contract” shall have the meaning ascribed to it in Section 5.3.</li>
                
            </ol> 
        </div>


<form method="POST" action="{{url('/contract-form')}}" enctype="multipart/form-data">
    @csrf

    
    <canvas id="signatureCanvas" style="border: 1px solid #ccc;" ></canvas><br><br>
    
    <input type="hidden" name="signature" id="signature" >

    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
  const canvas = document.getElementById('signatureCanvas');
const signaturePad = new SignaturePad(canvas);
const input = document.getElementById('signature');

document.addEventListener('DOMContentLoaded', () => {
    canvas.addEventListener('touchstart', onTouchStart, false);
    canvas.addEventListener('touchmove', onTouchMove, false);
    canvas.addEventListener('touchend', onTouchEnd, false);
    canvas.addEventListener('mousedown', onMouseDown, false);
    canvas.addEventListener('mousemove', onMouseMove, false);
    canvas.addEventListener('mouseup', onMouseUp, false);
});

function onTouchStart(event) {
    event.preventDefault();
    signaturePad.onTouchStart(event.touches[0]);
}

function onTouchMove(event) {
    event.preventDefault();
    signaturePad.onTouchMove(event.touches[0]);
}

function onTouchEnd(event) {
    event.preventDefault();
    signaturePad.onTouchEnd(event.touches[0]);
    input.value = signaturePad.toDataURL(); // save data URL to input field
}

function onMouseDown(event) {
    signaturePad.onMouseDown(event);
}

function onMouseMove(event) {
    signaturePad.onMouseMove(event);
}

function onMouseUp(event) {
    signaturePad.onMouseUp(event);
    input.value = signaturePad.toDataURL(); // save data URL to input field
}

const form = document.querySelector('form');
form.addEventListener('submit', (event) => {
    input.value = signaturePad.toDataURL();
});

</script>

</body>
</html>