<?php
    include('../config.php');
    include('../masterNavBar.php');
    include('../masterSideBar.php');
?>

<!-- main content  -->


<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Add Accountant</h3>
                </div>
            </div>
            <br>
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>ID No *</label>
                        <input type="text" class="form-control" name="admNo"  id = "admNo" value="" readonly="">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>First Name *</label>
                        <input type="text" class="form-control" name="frtn">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Last Name *</label>
                        <input type="text" class="form-control" name="lstn">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Gender *</label>
                        <select class="select2 form-control" name="gen">
                            <option value="">Please Select Gender *</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Joining Date *</label>
                        <input type="date" class="form-control" name="dobe" value="">

                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Blood Group *</label>
                        <select class="select2 form-control" name="blgp">
                            <option value="">Please Select Group *</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Religion *</label>
                        <select class="select2 form-control" name="regin">
                            <option value="">Please Select Religion *</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Islam">Islam</option>
                            <option value="Christian">Christian</option>
                            <option value="Buddish">Buddish</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>E-Mail *</label>
                        <input type="email" class="form-control" name="mail">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Password*</label>
                        <input type="text" class="form-control" name="teapass" readonly="" id="teapass">
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Address *</label>
                        <input type="text" class="form-control" name="adres">
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Phone *</label>
                        <input type="number" class="form-control" id="ponh" name="ponh" min="1"
                            pattern="/^-?\d+\.?\d*$/" onkeypress="if(this.value.length==13) return false;"
                            oninput="validephone()" onchange="checkphone()">
                        <small style="display: none; color: darkred;" id="disp"></small>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Facebook ID *</label>
                        <input type="text" class="form-control" name="facd">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Instagram ID *</label>
                        <input type="text" class="form-control" name="insd">
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Twitter ID *</label>
                        <input type="text" class="form-control" name="twitd">
                    </div>
                    <div class="col-lg-6 col-12 form-group">
                        <label>Short BIO *</label>
                        <input type="text" class="form-control" name="mesae">
                    </div>
                    <div class="col-lg-6 col-12 form-group">
                        <label class="text-dark-medium">Upload Teacher Photo *</label>
                        <input type="file" class="form-control-file" name="uspoto">
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn btn-primary"
                            name="submit">Save</button>

                        <a href="addaccountant.php">
                            <button type="button" class="btn btn-danger">Reset</button></a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>


<script>
    function generateRandomId() {
        var randomNumber = Math.floor(Math.random() * 900) + 100;
        document.getElementById("admNo").value = "ACNT-" + randomNumber;
    }

    function generateRandomPassword() {
        var randomPassword = Math.floor(Math.random() * 90000) + 10000;
        document.getElementById("teapass").value = randomPassword;
    }

    window.onload = function () {
        generateRandomId();
        generateRandomPassword();
    };
</script>



<?php
  include('../masterFooter.php');
?>

<?php
// $admNo = $_POST['admNo'];
// $frtn = $_POST['frtn'];
// $lstn = $_POST['lstn'];
// $gen = $_POST['gen'];
// $dobe = $_POST['dobe'];
// $blgp = $_POST['blgp'];
// $regin = $_POST['regin'];
// $mail = $_POST['mail'];
// $teapass = $_POST['teapass'];
// $adres = $_POST['adres'];
// $ponh = $_POST['ponh'];
// $facd = $_POST['facd'];
// $insd = $_POST['insd'];
// $twitd = $_POST['twitd'];
// $mesae = $_POST['mesae'];
// $orgFileName = $_FILES['uspoto']['name'];
// $tempFileName = $_FILES['uspoto']['tmp_name'];
// $fullImageAdress = $base_address.$targetFolder.$orgFileName;

// if(empty($admNo)||empty($frtn)||empty($lstn)||empty($gen) || empty($dobe)||empty($blgp)||empty($regin)||empty($mail)
//    || empty($teapass)||empty($adres) || empty($adres) || empty($ponh) || empty($facd) || empty($insd) || empty($twitd) || empty($mesae)
//     || empty($orgFileName)){
//         echo '<script>echo("you are doing null entry")</script>';
//     } 

// if(isset($_POST['submit'])){
//     $inserteddata = mysqli_query($config,"INSERT INTO accountant_detail(admNo,frtn,lstn,gen,dobe,blgp,regin,mail,teapass,adres,ponh,facd,insd,twitd,mesae,uspoto) VALUES ('$admNo','$frtn','$lstn','$gen','$dobe','$blgp','$regin','$mail','$teapass','$adres','$ponh','$facd','$insd','$twitd','$mesae','$fullImageAdress')");
//     if($inserteddata){
//         echo '<script>alert("data inserted")</script>';
//     }
//     else{
//         echo '<script>alert("data not inserted")</script>';
//     }
// }

$admNo = isset($_POST['admNo']) ? $_POST['admNo'] : null;
$frtn = isset($_POST['frtn']) ? $_POST['frtn'] : null;
$lstn = isset($_POST['lstn']) ? $_POST['lstn'] : null;
$gen = isset($_POST['gen']) ? $_POST['gen'] : null;
$dobe = isset($_POST['dobe']) ? $_POST['dobe'] : null;
$blgp = isset($_POST['blgp']) ? $_POST['blgp'] : null;
$regin = isset($_POST['regin']) ? $_POST['regin'] : null;
$mail = isset($_POST['mail']) ? $_POST['mail'] : null;
$teapass = isset($_POST['teapass']) ? $_POST['teapass'] : null;
$adres = isset($_POST['adres']) ? $_POST['adres'] : null;
$ponh = isset($_POST['ponh']) ? $_POST['ponh'] : null;
$facd = isset($_POST['facd']) ? $_POST['facd'] : null;
$insd = isset($_POST['insd']) ? $_POST['insd'] : null;
$twitd = isset($_POST['twitd']) ? $_POST['twitd'] : null;
$mesae = isset($_POST['mesae']) ? $_POST['mesae'] : null;
$orgFileName = isset($_FILES['uspoto']['name']) ? $_FILES['uspoto']['name'] : null;
$tempFileName = isset($_FILES['uspoto']['tmp_name']) ? $_FILES['uspoto']['tmp_name'] : null;
$fullImageAdress = $base_address . $targetFolder . $orgFileName;

if (
    empty($admNo) || empty($frtn) || empty($lstn) || empty($gen) ||
    empty($dobe) || empty($blgp) || empty($regin) || empty($mail) ||
    empty($teapass) || empty($adres) || empty($adres) || empty($ponh) ||
    empty($facd) || empty($insd) || empty($twitd) || empty($mesae) ||
    empty($orgFileName)
) {
    echo '<script>alert("you are doing null entry")</script>';
    return ;
}

if (isset($_POST['submit'])) {
    $inserteddata = mysqli_query(
        $config,
        "INSERT INTO accountant_detail(admNo,frtn,lstn,gen,dobe,blgp,regin,mail,teapass,adres,ponh,facd,insd,twitd,mesae,uspoto) VALUES ('$admNo','$frtn','$lstn','$gen','$dobe','$blgp','$regin','$mail','$teapass','$adres','$ponh','$facd','$insd','$twitd','$mesae','$fullImageAdress')"
    );

    if ($inserteddata) {
        echo '<script>alert("data inserted")</script>';
    } else {
        echo '<script>alert("data not inserted")</script>';
    }
}


?>

