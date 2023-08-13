<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="..//css/eyeCareUnit.css" rel="stylesheet">
    <link href="..//css/common-2.css" rel="stylesheet">
    <link rel="stylesheet" href="..//css/common-styles.css">
    <title>Eye Care Unit</title>
</head>

<body>

    <!--Header-->
    <?php
            include('..//includes/header.php');
        ?>
<!--header end-->   

    <div class="row" style="height: 250px;">
        <div class="col">
            <div class="circle">
                <div class="circle-content">
                    <h2 id="title">Eye Care Unit</h2>
                    <p style="font-size: medium; font-family: Arial, Helvetica, sans-serif;" class="description">Small
                        Description. Small
                        Description. Small Description.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <img src="..//images/eye-care/eyecare2.jpg" alt="image" width="auto" height="100%" class="doc-img" />
        </div>
    </div>
    
    <div class="row" id="form-continer">
        <div class="container">
            <h3>Request an appointment</h1>
                <input type="text" name="ophthalmology" id="Ophthalmology" placeholder="Ophthalmology" required /><br />
                <input type="text" name="fullname" id="Full Name" placeholder="Full Name" required* /><br />
                <input type="text" name="email" id="email" placeholder="Email" required /><br />
                <input type="tel" name="tel" id="tel" placeholder="Telephone" /><br />
                <textarea id="msg" name="msg" wrap="hard" rows="4" cols="auto" placeholder="Message"
                    requiredmaxlength="200"></textarea><br />
                <input type="button" name="submit" value="Send Inquiry" class="submit-btn">
        </div>

    </div>
    <div class="row card-row" style="margin-top:20%;">
        <div class="col card-col">
            <div class="card">
                <img src="..//images/eye-care/cor.jpg" alt="Glaucoma" style="width:100%">

                <h3><b>Cataract Surgery</b></h3>
                <p>Cataracts develop over the lens of your eye, making it cloudy. This makes your vision blurry and
                    dull. Cataracts are common as people age. Surgery can correct the problem, usually in less than an
                    hour. Your eye surgeon replaces your cloudy lens with an artificial one.</p>

            </div>
        </div>
        <div class="col card-col">
            <div class="card">
                <img src="..//images/eye-care/glu1.jpg" alt="Glaucoma" style="width:100%">

                <h3><b>Glaucoma Surgery</b></h3>
                <p>Glaucoma results from damage to the optic nerve in your eye. A buildup of pressure in the eye is the
                    usual cause. Glaucoma can cause blindness. Two types of surgery can treat glaucoma. Both aim to
                    reduce pressure in your eye.
                </p>

            </div>
        </div>
        <div class="col card-col">
            <div class="card">
                <img src="..//images/eye-care/glu.jpeg" alt="Glaucoma" style="width:100%">

                <h3><b>Diabetic Retinopathy Surgery</b></h3>
                <p>Diabetic retinopathy can develop if you have diabetes and your blood sugar is not under control. High
                    blood sugar levels can damage blood vessels, including the ones in your eyes. This causes the blood
                    vessels to leak fluid and blood into the retina. Your vision can change. You may see "floaters,"
                    which are spots that seem to float through your vision.
                </p>

            </div>
        </div>
        <div class="col card-col">
            <div class="card">
                <img src="..//images/eye-care/dry.jpg" alt="Glaucoma" style="width:100%">

                <h3><b>Macular Degeneration Surgery</b></h3>
                <p>The macula is the area of your eye that helps you see greater detail. As you age, the macula tends to
                    break down. That's called age-related macular degeneration (ARMD). The more severe type is wet ARMD.
                    Leaky blood vessels cause you to see dark spots in the center of your vision. Sometimes, laser
                    surgery can help with wet ARMD. Your eye doctor uses a laser to burn away unwanted blood vessels.
                    This prevents bleeding. It also stops the growth of more blood vessels.
                </p>

            </div>
        </div>
    </div>

      <!--footer-->
      <?php
            include('..//includes/footer.php');
        ?>
<!--footer end-->

</body>

</html>