<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt Upload Form</title>
    <style>
        *{
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }
        body{
            height: 100vh;
            width: 100vw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            width: 550px;
            padding: 40px;
            border: 2px solid #8f8f8f;
            border-radius: 10px;
            box-shadow: 5px 5px 15px #8f8f8f;
        }
        div{
            width: 240px;
            padding-bottom: 30px;
        }
        .title{
            font-size: 20px;
        }
        .formInput{
            width: 100%;
            height: 32px;
            border-radius: 5px;
            border: 1px solid #8f8f8f;
            margin: 8px 0 6px 0;
        }
        p{
            font-size: 12px;
            color: #474747;
        }
        div.checkBox{
            padding: 8px 0;
            font-size: 12px;
            display: flex;
            align-items: center;
            width: 240px;
        }
        label.check{
            padding-left: 10px;
        }
        #submitBtn{
            width: 60px;
            grid-column: span 2;
            height: 36px;
            background-color: gray;
            border: none;
            border-radius: 10px;
            font-weight: bold;
            cursor: pointer;
            margin-left:45%;
        }
        #submitBtn:hover{
            background-color: #D3D3D3;
        }
        .back {
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #08A045;
            color: white;
            text-decoration: none;
        }
        .back:hover {
            background-color: #21D375;
        }
    </style>
</head>
<body>
    <form method="POST" action="submit.php">
        <h2 style="grid-column: span 2; text-align: center;">Payment Receipt Upload Form</h2>
        <hr style="grid-column: span 2; width: calc(100% + 80px); transform: translate(-70px); margin: 30px;">
        <label for="firstName" class="title" style="grid-column: span 2;">Name</label>
        <div>
            <input type="text" id="firstName" name="firstName" class="formInput">
            <p>First name</p>
        </div>
        <div>
            <input type="text" id="lastName" name="lastName" class="formInput">
            <p>Last Name</p>
        </div>
        <div>
            <label for="mail" class="title">Mail</label>
            <input type="mail" id="mail" name="mail" class="formInput">
            <p>example@example.com</p>
        </div>
        <div>
            <label for="invoiceId" class="title">Invoice ID</label>
            <input type="text" id="invoiceId" name="invoiceId" class="formInput">
            <p></p>
        </div>
        <div style="grid-column: span 2; width: 100%; padding-bottom: 20px;">
            <label class="title" style="margin-bottom: 10px; display: block;">Pay For</label>
            <div style="display: grid; grid-template-columns: repeat(2, 1fr); width: 550px; padding: 0;">
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="35K Category">
                    <label class="check">35K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="15K Category">
                    <label class="check">15K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="55K Category">
                    <label class="check">55K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="75K Category">
                    <label class="check">75K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="116K Category">
                    <label class="check">116K Category</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Shuttle Two Ways">
                    <label class="check">Shuttle Two Ways</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Shuttle One Way">
                    <label class="check">Shuttle One Way</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Compressport T-Shirt Merchandise">
                    <label class="check">Compressport T-Shirt Merchandise</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Training Cap Merchandise">
                    <label class="check">Training Cap Merchandise</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Buf Merchandise">
                    <label class="check">Buf Merchandise</label>
                </div>
                <div class="checkBox">
                    <input type="checkbox" name="pay_for[]" value="Other">
                    <label class="check">Other</label>
                </div>
            </div>
        </div>
        <input type="submit" id="submitBtn" name="submit">
    </form>
    <button><a class="back" href="javascript:history.back()">Back</a></button>                
</body>
</html>