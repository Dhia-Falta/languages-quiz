
<?php 
require_once('confi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>languages tests</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<div class="php">
    <div class="en">
        <?php

        if (isset($_POST['enregister'])) {
            $name = $_POST['name'];
            $familyname = $_POST['familyname'];
            $birth_date = $_POST['birth_date'];
            $gender = $_POST['gender'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $refrence = $_POST['refrence'];
            $comment = $_POST['comment'];
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
            $q6 = $_POST['q6'];
            $q7 = $_POST['q7'];
            $q8 = $_POST['q8'];
            $q9 = $_POST['q9'];
            $q10 = $_POST['q10'];
            $q11 = $_POST['q11'];
            $q12 = $_POST['q12'];
            $q13 = $_POST['q13'];
            $q14 = $_POST['q14'];
            $q15 = $_POST['q15'];
            $q16 = $_POST['q16'];
            $q17 = $_POST['q17'];
            $q18 = $_POST['q18'];
            $q19 = $_POST['q19'];
            $q20 = $_POST['q20'];
            $q21 = $_POST['q21'];
            $q22 = $_POST['q22'];
            $q23 = $_POST['q23'];
            $q24 = $_POST['q24'];
            $q25 = $_POST['q25'];
            $q26 = $_POST['q26'];
            $q27 = $_POST['q27'];
            $q28 = $_POST['q28'];
            $q29 = $_POST['q29'];
            $q30 = $_POST['q30'];
            $q31 = $_POST['q31'];
            $q32 = $_POST['q32'];
            $q33 = $_POST['q33'];
            $q34 = $_POST['q34'];
            $q35 = $_POST['q35'];
            $q36 = $_POST['q36'];
            $q37 = $_POST['q37'];
            $q38 = $_POST['q38'];
            $q39 = $_POST['q39'];
            $q40 = $_POST['q40'];
            $score = $_POST['score'];
            $rating = $_POST['rating'];

            $sql = "INSERT INTO omlc8_english ( name, familyname, birth_date, gender, phonenumber, email, address, refrence, comment, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, q22, q23, q24, q25, q26, q27, q28, q29, q30, q31, q32, q33, q34, q35, q36, q37, q38, q39, q40, score, rating ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([ $name, $familyname, $birth_date, $gender, $phonenumber, $email, $address, $refrence, $comment, $q1, $q2, $q3, $q4, $q5, $q6, $q7, $q8, $q9, $q10, $q11, $q12, $q13, $q14, $q15, $q16, $q17, $q18, $q19, $q20, $q21, $q22, $q23, $q24, $q25, $q26, $q27, $q28, $q29, $q30, $q31, $q32, $q33, $q34, $q35, $q36, $q37, $q38, $q39, $q40, $score, $rating]);

            if ($result){
                echo '<script>alert("Thank You en, Your registration has been successful");</script>';
            }
            else{
                echo"error in registration";
            }
        }

        ?>
    </div>

    <div class="fr">
        <?php

        if (isset($_POST['frregister'])) {
            $name = $_POST['name'];
            $familyname = $_POST['familyname'];
            $birth_date = $_POST['birth_date'];
            $gender = $_POST['gender'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $refrence = $_POST['refrence'];
            $comment = $_POST['comment'];
            $fr1 = $_POST['fr1'];
            $fr2 = $_POST['fr2'];
            $fr3 = $_POST['fr3'];
            $fr4 = $_POST['fr4'];
            $fr5 = $_POST['fr5'];
            $fr6 = $_POST['fr6'];
            $fr7 = $_POST['fr7'];
            $fr8 = $_POST['fr8'];
            $fr9 = $_POST['fr9'];
            $fr10 = $_POST['fr10'];
            $fr11 = $_POST['fr11'];
            $fr12 = $_POST['fr12'];
            $fr13 = $_POST['fr13'];
            $fr14 = $_POST['fr14'];
            $fr15 = $_POST['fr15'];
            $fr16 = $_POST['fr16'];
            $fr17 = $_POST['fr17'];
            $fr18 = $_POST['fr18'];
            $fr19 = $_POST['fr19'];
            $fr20 = $_POST['fr20'];
            $fr21 = $_POST['fr21'];
            $fr22 = $_POST['fr22'];
            $fr23 = $_POST['fr23'];
            $fr24 = $_POST['fr24'];
            $fr25 = $_POST['fr25'];
            $fr26 = $_POST['fr26'];
            $fr27 = $_POST['fr27'];
            $fr28 = $_POST['fr28'];
            $fr29 = $_POST['fr29'];
            $fr30 = $_POST['fr30'];
            $fr31 = $_POST['fr31'];
            $fr32 = $_POST['fr32'];
            $fr33 = $_POST['fr33'];
            $fr34 = $_POST['fr34'];
            $fr35 = $_POST['fr35'];
            $fr36 = $_POST['fr36'];
            $fr37 = $_POST['fr37'];
            $fr38 = $_POST['fr38'];
            $fr39 = $_POST['fr39'];
            $fr40 = $_POST['fr40'];
            $score = $_POST['score'];
            $rating = $_POST['rating'];

            $sql = "INSERT INTO omlc8_french ( name, familyname, birth_date, gender, phonenumber, email, address, refrence, comment, fr1, fr2, fr3, fr4, fr5, fr6, fr7, fr8, fr9, fr10, fr11, fr12, fr13, fr14, fr15, fr16, fr17, fr18, fr19, fr20, fr21, fr22, fr23, fr24, fr25, fr26, fr27, fr28, fr29, fr30, fr31, fr32, fr33, fr34, fr35, fr36, fr37, fr38, fr39, fr40, score, rating ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([ $name, $familyname, $birth_date, $gender, $phonenumber, $email, $address, $refrence, $comment, $fr1, $fr2, $fr3, $fr4, $fr5, $fr6, $fr7, $fr8, $fr9, $fr10, $fr11, $fr12, $fr13, $fr14, $fr15, $fr16, $fr17, $fr18, $fr19, $fr20, $fr21, $fr22, $fr23, $fr24, $fr25, $fr26, $fr27, $fr28, $fr29, $fr30, $fr31, $fr32, $fr33, $fr34, $fr35, $fr36, $fr37, $fr38, $fr39, $fr40, $score, $rating]);

            if ($result){
                echo '<script>alert("Thank You fr, Your registration has been successful");</script>';
            }
            else{
                echo"error in registration";
            }
        }

        ?>
    </div>

    <div class="tr">
        <?php

        if (isset($_POST['trregister'])) {
            $name = $_POST['name'];
            $familyname = $_POST['familyname'];
            $birth_date = $_POST['birth_date'];
            $gender = $_POST['gender'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $refrence = $_POST['refrence'];
            $comment = $_POST['comment'];
            $tr1 = $_POST['tr1'];
            $tr2 = $_POST['tr2'];
            $tr3 = $_POST['tr3'];
            $tr4 = $_POST['tr4'];
            $tr5 = $_POST['tr5'];
            $tr6 = $_POST['tr6'];
            $tr7 = $_POST['tr7'];
            $tr8 = $_POST['tr8'];
            $tr9 = $_POST['tr9'];
            $tr10 = $_POST['tr10'];
            $tr11 = $_POST['tr11'];
            $tr12 = $_POST['tr12'];
            $tr13 = $_POST['tr13'];
            $tr14 = $_POST['tr14'];
            $tr15 = $_POST['tr15'];
            $tr16 = $_POST['tr16'];
            $tr17 = $_POST['tr17'];
            $tr18 = $_POST['tr18'];
            $tr19 = $_POST['tr19'];
            $tr20 = $_POST['tr20'];
            $tr21 = $_POST['tr21'];
            $tr22 = $_POST['tr22'];
            $tr23 = $_POST['tr23'];
            $tr24 = $_POST['tr24'];
            $tr25 = $_POST['tr25'];
            $tr26 = $_POST['tr26'];
            $tr27 = $_POST['tr27'];
            $tr28 = $_POST['tr28'];
            $tr29 = $_POST['tr29'];
            $tr30 = $_POST['tr30'];
            $tr31 = $_POST['tr31'];
            $tr32 = $_POST['tr32'];
            $tr33 = $_POST['tr33'];
            $tr34 = $_POST['tr34'];
            $tr35 = $_POST['tr35'];
            $tr36 = $_POST['tr36'];
            $tr37 = $_POST['tr37'];
            $tr38 = $_POST['tr38'];
            $tr39 = $_POST['tr39'];
            $tr40 = $_POST['tr40'];
            $score = $_POST['score'];
            $rating = $_POST['rating'];

            $sql = "INSERT INTO omlc8_turkish ( name, familyname, birth_date, gender, phonenumber, email, address, refrence, comment, tr1, tr2, tr3, tr4, tr5, tr6, tr7, tr8, tr9, tr10, tr11, tr12, tr13, tr14, tr15, tr16, tr17, tr18, tr19, tr20, tr21, tr22, tr23, tr24, tr25, tr26, tr27, tr28, tr29, tr30, tr31, tr32, tr33, tr34, tr35, tr36, tr37, tr38, tr39, tr40, score, rating ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([ $name, $familyname, $birth_date, $gender, $phonenumber, $email, $address, $refrence, $comment, $tr1, $tr2, $tr3, $tr4, $tr5, $tr6, $tr7, $tr8, $tr9, $tr10, $tr11, $tr12, $tr13, $tr14, $tr15, $tr16, $tr17, $tr18, $tr19, $tr20, $tr21, $tr22, $tr23, $tr24, $tr25, $tr26, $tr27, $tr28, $tr29, $tr30, $tr31, $tr32, $tr33, $tr34, $tr35, $tr36, $tr37, $tr38, $tr39, $tr40, $score, $rating]);

            if ($result){
                echo '<script>alert("Thank You tr, Your registration has been successful");</script>';
            }
            else{
                echo"error in registration";
            }
        }

        ?>
    </div>

    <div class="gr">
        <?php

        if (isset($_POST['grregister'])) {
            $name = $_POST['name'];
            $familyname = $_POST['familyname'];
            $birth_date = $_POST['birth_date'];
            $gender = $_POST['gender'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $refrence = $_POST['refrence'];
            $comment = $_POST['comment'];
            $gr1 = $_POST['gr1'];
            $gr2 = $_POST['gr2'];
            $gr3 = $_POST['gr3'];
            $gr4 = $_POST['gr4'];
            $gr5 = $_POST['gr5'];
            $gr6 = $_POST['gr6'];
            $gr7 = $_POST['gr7'];
            $gr8 = $_POST['gr8'];
            $gr9 = $_POST['gr9'];
            $gr10 = $_POST['gr10'];
            $gr11 = $_POST['gr11'];
            $gr12 = $_POST['gr12'];
            $gr13 = $_POST['gr13'];
            $gr14 = $_POST['gr14'];
            $gr15 = $_POST['gr15'];
            $gr16 = $_POST['gr16'];
            $gr17 = $_POST['gr17'];
            $gr18 = $_POST['gr18'];
            $gr19 = $_POST['gr19'];
            $gr20 = $_POST['gr20'];
            $gr21 = $_POST['gr21'];
            $gr22 = $_POST['gr22'];
            $gr23 = $_POST['gr23'];
            $gr24 = $_POST['gr24'];
            $gr25 = $_POST['gr25'];
            $gr26 = $_POST['gr26'];
            $gr27 = $_POST['gr27'];
            $gr28 = $_POST['gr28'];
            $gr29 = $_POST['gr29'];
            $gr30 = $_POST['gr30'];
            $gr31 = $_POST['gr31'];
            $gr32 = $_POST['gr32'];
            $gr33 = $_POST['gr33'];
            $gr34 = $_POST['gr34'];
            $gr35 = $_POST['gr35'];
            $gr36 = $_POST['gr36'];
            $gr37 = $_POST['gr37'];
            $gr38 = $_POST['gr38'];
            $gr39 = $_POST['gr39'];
            $gr40 = $_POST['gr40'];
            $score = $_POST['score'];
            $rating = $_POST['rating'];

            $sql = "INSERT INTO omlc8_german ( name, familyname, birth_date, gender, phonenumber, email, address, refrence, comment, gr1, gr2, gr3, gr4, gr5, gr6, gr7, gr8, gr9, gr10, gr11, gr12, gr13, gr14, gr15,gr16, gr17, gr18, gr19, gr20, gr21, gr22, gr23, gr24, gr25, gr26, gr27, gr28, gr29, gr30, gr31, gr32, gr33, gr34, gr35, gr36, gr37, gr38, gr39, gr40, score, rating ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([ $name, $familyname, $birth_date, $gender, $phonenumber, $email, $address, $refrence, $comment, $gr1, $gr2, $gr3, $gr4, $gr5, $gr6, $gr7, $gr8, $gr9, $gr10, $gr11, $gr12, $gr13, $gr14, $gr15, $gr16, $gr17, $gr18, $gr19, $gr20, $gr21, $gr22, $gr23, $gr24, $gr25, $gr26, $gr27, $gr28, $gr29, $gr30, $gr31, $gr32, $gr33, $gr34, $gr35, $gr36, $gr37, $gr38, $gr39, $gr40, $score, $rating]);

            if ($result){
                echo '<script>alert("Thank You gr, Your registration has been successful");</script>';
            }
            else{
                echo"error in registration";
            }
        }

        ?>
    </div>
    <div class="it">
        <?php

        if (isset($_POST['itregister'])) {
            $name = $_POST['name'];
            $familyname = $_POST['familyname'];
            $birth_date = $_POST['birth_date'];
            $gender = $_POST['gender'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $refrence = $_POST['refrence'];
            $comment = $_POST['comment'];
            $it1 = $_POST['it1'];
            $it2 = $_POST['it2'];
            $it3 = $_POST['it3'];
            $it4 = $_POST['it4'];
            $it5 = $_POST['it5'];
            $it6 = $_POST['it6'];
            $it7 = $_POST['it7'];
            $it8 = $_POST['it8'];
            $it9 = $_POST['it9'];
            $it10 = $_POST['it10'];
            $it11 = $_POST['it11'];
            $it12 = $_POST['it12'];
            $it13 = $_POST['it13'];
            $it14 = $_POST['it14'];
            $it15 = $_POST['it15'];
            $it16 = $_POST['it16'];
            $it17 = $_POST['it17'];
            $it18 = $_POST['it18'];
            $it19 = $_POST['it19'];
            $it20 = $_POST['it20'];
            $it21 = $_POST['it21'];
            $it22 = $_POST['it22'];
            $it23 = $_POST['it23'];
            $it24 = $_POST['it24'];
            $it25 = $_POST['it25'];
            $it26 = $_POST['it26'];
            $it27 = $_POST['it27'];
            $it28 = $_POST['it28'];
            $it29 = $_POST['it29'];
            $it30 = $_POST['it30'];
            $it31 = $_POST['it31'];
            $it32 = $_POST['it32'];
            $it33 = $_POST['it33'];
            $it34 = $_POST['it34'];
            $it35 = $_POST['it35'];
            $it36 = $_POST['it36'];
            $it37 = $_POST['it37'];
            $it38 = $_POST['it38'];
            $it39 = $_POST['it39'];
            $it40 = $_POST['it40'];
            $score = $_POST['score'];
            $rating = $_POST['rating'];

            $sql = "INSERT INTO omlc8_italien ( name, familyname, birth_date, gender, phonenumber, email, address, refrence, comment, it1, it2, it3, it4, it5, it6, it7, it8, it9, it10, it11, it12, it13, it14, it15,it16, it17, it18, it19, it20, it21, it22, it23, it24, it25, it26, it27, it28, it29, it30, it31, it32, it33, it34, it35, it36, it37, it38, it39, it40, score, rating ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([ $name, $familyname, $birth_date, $gender, $phonenumber, $email, $address, $refrence, $comment, $it1, $it2, $it3, $it4, $it5, $it6, $it7, $it8, $it9, $it10, $it11, $it12, $it13, $it14, $it15, $it16, $it17, $it18, $it19, $it20, $it21, $it22, $it23, $it24, $it25, $it26, $it27, $it28, $it29, $it30, $it31, $it32, $it33, $it34, $it35, $it36, $it37, $it38, $it39, $it40, $score, $rating]);

            if ($result){
                echo '<script>alert("Thank You it, Your registration has been successful");</script>';
            }
            else{
                echo"error in registration";
            }
        }

        ?>
    </div>

    <div class="sp">
        <?php

        if (isset($_POST['spregister'])) {
            $name = $_POST['name'];
            $familyname = $_POST['familyname'];
            $birth_date = $_POST['birth_date'];
            $gender = $_POST['gender'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $refrence = $_POST['refrence'];
            $comment = $_POST['comment'];
            $sp1 = $_POST['sp1'];
            $sp2 = $_POST['sp2'];
            $sp3 = $_POST['sp3'];
            $sp4 = $_POST['sp4'];
            $sp5 = $_POST['sp5'];
            $sp6 = $_POST['sp6'];
            $sp7 = $_POST['sp7'];
            $sp8 = $_POST['sp8'];
            $sp9 = $_POST['sp9'];
            $sp10 = $_POST['sp10'];
            $sp11 = $_POST['sp11'];
            $sp12 = $_POST['sp12'];
            $sp13 = $_POST['sp13'];
            $sp14 = $_POST['sp14'];
            $sp15 = $_POST['sp15'];
            $sp16 = $_POST['sp16'];
            $sp17 = $_POST['sp17'];
            $sp18 = $_POST['sp18'];
            $sp19 = $_POST['sp19'];
            $sp20 = $_POST['sp20'];
            $sp21 = $_POST['sp21'];
            $sp22 = $_POST['sp22'];
            $sp23 = $_POST['sp23'];
            $sp24 = $_POST['sp24'];
            $sp25 = $_POST['sp25'];
            $sp26 = $_POST['sp26'];
            $sp27 = $_POST['sp27'];
            $sp28 = $_POST['sp28'];
            $sp29 = $_POST['sp29'];
            $sp30 = $_POST['sp30'];
            $sp31 = $_POST['sp31'];
            $sp32 = $_POST['sp32'];
            $sp33 = $_POST['sp33'];
            $sp34 = $_POST['sp34'];
            $sp35 = $_POST['sp35'];
            $sp36 = $_POST['sp36'];
            $sp37 = $_POST['sp37'];
            $sp38 = $_POST['sp38'];
            $sp39 = $_POST['sp39'];
            $sp40 = $_POST['sp40'];
            $score = $_POST['score'];
            $rating = $_POST['rating'];

            $sql = "INSERT INTO omlc8_spanish ( name, familyname, birth_date, gender, phonenumber, email, address, refrence, comment, sp1, sp2, sp3, sp4, sp5, sp6, sp7, sp8, sp9, sp10, sp11, sp12, sp13, sp14, sp15,sp16, sp17, sp18, sp19, sp20, sp21, sp22, sp23, sp24, sp25, sp26, sp27, sp28, sp29, sp30, sp31, sp32, sp33, sp34, sp35, sp36, sp37, sp38, sp39, sp40, score, rating ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([ $name, $familyname, $birth_date, $gender, $phonenumber, $email, $address, $refrence, $comment, $sp1, $sp2, $sp3, $sp4, $sp5, $sp6, $sp7, $sp8, $sp9, $sp10, $sp11, $sp12, $sp13, $sp14, $sp15, $sp16, $sp17, $sp18, $sp19, $sp20, $sp21, $sp22, $sp23, $sp24, $sp25, $sp26, $sp27, $sp28, $sp29, $sp30, $sp31, $sp32, $sp33, $sp34, $sp35, $sp36, $sp37, $sp38, $sp39, $sp40, $score, $rating]);

            if ($result){
                echo '<script>alert("Thank You sp, Your registration has been successful");</script>';
            }
            else{
                echo"error in registration";
            }
        }

        ?>
    </div>

    <div class="ru">
        <?php

        if (isset($_POST['ruregister'])) {
            $name = $_POST['name'];
            $familyname = $_POST['familyname'];
            $birth_date = $_POST['birth_date'];
            $gender = $_POST['gender'];
            $phonenumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $refrence = $_POST['refrence'];
            $comment = $_POST['comment'];
            $ru1 = $_POST['ru1'];
            $ru2 = $_POST['ru2'];
            $ru3 = $_POST['ru3'];
            $ru4 = $_POST['ru4'];
            $ru5 = $_POST['ru5'];
            $ru6 = $_POST['ru6'];
            $ru7 = $_POST['ru7'];
            $ru8 = $_POST['ru8'];
            $ru9 = $_POST['ru9'];
            $ru10 = $_POST['ru10'];
            $ru11 = $_POST['ru11'];
            $ru12 = $_POST['ru12'];
            $ru13 = $_POST['ru13'];
            $ru14 = $_POST['ru14'];
            $ru15 = $_POST['ru15'];
            $ru16 = $_POST['ru16'];
            $ru17 = $_POST['ru17'];
            $ru18 = $_POST['ru18'];
            $ru19 = $_POST['ru19'];
            $ru20 = $_POST['ru20'];
            $ru21 = $_POST['ru21'];
            $ru22 = $_POST['ru22'];
            $ru23 = $_POST['ru23'];
            $ru24 = $_POST['ru24'];
            $ru25 = $_POST['ru25'];
            $ru26 = $_POST['ru26'];
            $ru27 = $_POST['ru27'];
            $ru28 = $_POST['ru28'];
            $ru29 = $_POST['ru29'];
            $ru30 = $_POST['ru30'];
            $ru31 = $_POST['ru31'];
            $ru32 = $_POST['ru32'];
            $ru33 = $_POST['ru33'];
            $ru34 = $_POST['ru34'];
            $ru35 = $_POST['ru35'];
            $ru36 = $_POST['ru36'];
            $ru37 = $_POST['ru37'];
            $ru38 = $_POST['ru38'];
            $ru39 = $_POST['ru39'];
            $ru40 = $_POST['ru40'];
            $score = $_POST['score'];
            $rating = $_POST['rating'];

            $sql = "INSERT INTO omlc8_russian ( name, familyname, birth_date, gender, phonenumber, email, address, refrence, comment, ru1, ru2, ru3, ru4, ru5, ru6, ru7, ru8, ru9, ru10, ru11, ru12, ru13, ru14, ru15,ru16, ru17, ru18, ru19, ru20, ru21, ru22, ru23, ru24, ru25, ru26, ru27, ru28, ru29, ru30, ru31, ru32, ru33, ru34, ru35, ru36, ru37, ru38, ru39, ru40, score, rating ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([ $name, $familyname, $birth_date, $gender, $phonenumber, $email, $address, $refrence, $comment, $ru1, $ru2, $ru3, $ru4, $ru5, $ru6, $ru7, $ru8, $ru9, $ru10, $ru11, $ru12, $ru13, $ru14, $ru15, $ru16, $ru17, $ru18, $ru19, $ru20, $ru21, $ru22, $ru23, $ru24, $ru25, $ru26, $ru27, $ru28, $ru29, $ru30, $ru31, $ru32, $ru33, $ru34, $ru35, $ru36, $ru37, $ru38, $ru39, $ru40, $score, $rating]);

            if ($result){
                echo '<script>alert("Thank You ru, Your registration has been successful");</script>';
            }
            else{
                echo"error in registration";
            }
        }

        ?>
    </div>
</div>
<div class="container">
  <form class="form-test" id="form" method="post">
    <fieldset class="infomations"><!-- user information -->
        <h4 style="font-weight: bold;">Tell us something more about you</h4>

        <div class="form-group">
            <label style="font-weight: bold;">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="الاسم" required>
        </div>
        <div class="form-group">
            <label style="font-weight: bold;">Family Name:</label>
            <input type="text" class="form-control" name="familyname" placeholder="اللقب" required>
        </div>
        <div class="form-group">
            <label style="font-weight: bold;">Birth date:</label>
            <input type="date" class="form-control" name="birth_date" required>
        </div>                
        <div class="form-group">
            <span style="font-weight: bold;">Gander :</span>
            <div class="custom-control custom-radio">
                <input type="radio" id="gender1" name="gender" class="custom-control-input" value="female"
                       required>
                <label class="custom-control-label" for="gender1">Female</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="gender2" name="gender" class="custom-control-input" value="male"
                       required>
                <label class="custom-control-label" for="gender2">Male</label>
            </div>
        </div>
        <div class="form-group">
            <label style="font-weight: bold;">Phone Number:</label>
            <input type="tel" class="form-control" name="phonenumber" placeholder="رقم الهاتف" required>
        </div>
        <div class="form-group">
            <label style="font-weight: bold;">E-mail:</label>
            <input type="email" class="form-control" name="email" placeholder="exemple@gmial.com الإيميل الخاص بك، مثال" required>
        </div>
        <div class="form-group">
            <label style="font-weight: bold;">Address:</label>
            <input type="text" class="form-control" name="address" placeholder="العنوان" required>
        </div>
        <div class="form-group">
            <span style="font-weight: bold;">How did you know us? / كيف عرفتنا؟</span>
            <div class="custom-control custom-radio">
                <input type="radio" id="refrence1" name="refrence" class="custom-control-input" value="I'm a client"
                       required>
                <label class="custom-control-label" for="refrence1">I'm a client / أنا زبون</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="refrence2" name="refrence" class="custom-control-input" value="Inetrnet"
                       required>
                <label class="custom-control-label" for="refrence2">Inetrnet / عن طريق الانترنت</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="refrence3" name="refrence" class="custom-control-input" value="Refrence (friends, knowledge..)"
                       required>
                <label class="custom-control-label" for="refrence3">Refrence (friends, knowledge..) / عن طريق صديق أو أحد المعارف</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="refrence4" name="refrence" class="custom-control-input" value="Other.."
                       required>
                <label class="custom-control-label" for="refrence4">Other.. / شيء آخر</label>
            </div>
        </div>
        <div class="form-group">
        	<label for="exampleFormControlTextarea1" style="font-weight: bold;">Why did you choose us?</label>
            <textarea class="form-control" name="comment" rows="3" placeholder="لماذا إخترتنا نحن؟ .أكتب أي شيء بأي لغة تريد" required></textarea>
        </div>
        <span>1 / 4</span><br>    
        <input type="submit" class="btn btn-primary next" value="next">
    </fieldset>

    <fieldset class="flags">
    	<p>What language you want to test?</p>
    	<div class="row">
    		<div class="col-md-6">
    			<h4>English test</h4>
    			<input type="radio" id="en-input" name="languages">
    			<label for="en-input" class="en-label"></label>
    		</div>

        	<div class="col-md-6">
        		<h4>French test</h4>
              <input type="radio" id="fr-input" name="languages">
              <label for="fr-input" class="fr-label"></label>
            </div>

            <div class="col-md-6">
        		<h4>Turkish test</h4>
              <input type="radio" id="tr-input" name="languages">
              <label for="tr-input" class="tr-label"></label>
            </div>

            <div class="col-md-6">
        		<h4>German test</h4>
              <input type="radio" id="ger-input" name="languages">
              <label for="ger-input" class="ger-label"></label>
            </div>

            <div class="col-md-6">
                <h4>Italien test</h4>
              <input type="radio" id="it-input" name="languages">
              <label for="it-input" class="it-label"></label>
            </div>

            <div class="col-md-6">
                <h4>Spanish test</h4>
              <input type="radio" id="sp-input" name="languages">
              <label for="sp-input" class="sp-label"></label>
            </div>

            <div class="col-md-6">
                <h4>Russian test</h4>
              <input type="radio" id="ru-input" name="languages">
              <label for="ru-input" class="ru-label"></label>
            </div>
        </div>
        <span>2 / 4</span><br>
        <div>
        	<input type="button" class="btn btn-secondary back-flag" value="Back"">
        	<input type="button" class="btn btn-primary next" value="next">
        </div>  
    </fieldset>

    <fieldset class="en-test" disabled><!-- start english test -->
        <h3>Start The Test</h3>
        <div class="form-group" data-question="1">
            <p> 1. What&#39;s ... name? <p>
            <div class="custom-control custom-radio">
                <input type="radio" id="1" name="q1" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="1">you</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="2" name="q1" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="2">she</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="3" name="q1" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="3">your</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="4" name="q1" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="4">yours</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="5" name="q1" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="5">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="2">
            <p>2. We&#39;re English, we&#39;re ... London.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="6" name="q2" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="6">for</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="7" name="q2" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="7">from</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="8" name="q2" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="8">in</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="9" name="q2" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="9">at</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="10" name="q2" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="10">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="3">
            <p>3. Jane&#39;s ... polite.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="11" name="q3" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="11">a</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="12" name="q3" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="12">from</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="13" name="q3" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="13">very</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="14" name="q3" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="14">at</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="15" name="q3" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="15">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="4">
            <p>4. ..... a light?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="16" name="q4" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="16">Do have you</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="17" name="q4" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="17">Do you got</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="18" name="q4" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="18">Have you got</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="19" name="q4" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="19">Are you have</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="20" name="q4" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="20">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="5">
            <p>5. Liz ... usually go to school on foot.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="21" name="q5" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="21">doesn&#39;t</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="22" name="q5" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="22">isn&#39;t</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="23" name="q5" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="23">don&#39;t</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="24" name="q5" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="24">aren&#39;t</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="25" name="q5" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="25">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="6">
            <p>6. They ... at home last night.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="26" name="q6" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="26">aren&#39;t</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="27" name="q6" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="27">weren&#39;t</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="28" name="q6" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="28">don&#39;t</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="29" name="q6" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="29">didn&#39;t</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="30" name="q6" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="30">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="7">
            <p>7. What ... you say?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="31" name="q7" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="31">are</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="32" name="q7" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="32">have</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="33" name="q7" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="33">were</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="34" name="q7" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="34">did</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="35" name="q7" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="35">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="8">
            <p>8. Why ... crying?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="36" name="q8" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="36">are you</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="37" name="q8" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="37">you are</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="38" name="q8" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="38">do you</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="39" name="q8" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="39">you do</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="40" name="q8" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="40">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="9">
            <p>9. Where ... to spend your holidays next summer?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="41" name="q9" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="41">you are going</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="42" name="q9" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="42">are you going</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="43" name="q9" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="43">you will</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="44" name="q9" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="44">will you</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="45" name="q9" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="45">Don&#39;t Know</label>
            </div>
        </div><hr>
        
        <div class="form-group" data-question="10">
            <p>10. ...... never been to the cinema before.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="46" name="q10" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="46">I&#39;ll</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="47" name="q10" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="47">I&#39;m</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="48" name="q10" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="48">I can</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="49" name="q10" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="49">I&#39;ve</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="50" name="q10" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="50">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="11">
            <p>11. Seiko watches ... in Japan.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="51" name="q11" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="51">are made</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="52" name="q11" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="52">made</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="53" name="q11" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="53">make</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="54" name="q11" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="54">are making</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="55" name="q11" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="55">Don&#39;t Know</label>
            </div>
        </div><hr>
        
        <div class="form-group" data-question="12">
            <p>12. Where ... when you met him?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="56" name="q12" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="56">does he live</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="57" name="q12" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="57">was he live</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="58" name="q12" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="58">was he living</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="59" name="q12" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="59">is he living</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="60" name="q12" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="60">Don&#39;t Know</label>
            </div>
        </div><hr>
        
        <div class="form-group" data-question="13">
            <p>13. If ... , I&#39;ll tell him you called.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="61" name="q13" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="61">I&#39;ll see him</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="62" name="q13" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="62">I see him</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="63" name="q13" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="63">I&#39;d see him</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="64" name="q13" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="64">I saw him</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="65" name="q13" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="65">Don&#39;t Know</label>
            </div>
        </div><hr>
        
        <div class="form-group" data-question="14">
            <p>14. What ... since you arrived?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="66" name="q14" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="66">are you doing</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="67" name="q14" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="67">will you do</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="68" name="q14" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="68">did you do</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="69" name="q14" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="69">have you been doing</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="70" name="q14" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="70">Don&#39;t Know</label>
            </div>
        </div><hr>
        
        <div class="form-group" data-question="15">
            <p>15. Wine ... made in Italy for thousands of years.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="71" name="q15" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="71">have been</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="72" name="q15" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="72">is being</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="73" name="q15" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="73">has been</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="74" name="q15" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="74">are being</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="75" name="q15" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="75">Don&#39;t Know</label>
            </div>
        </div><hr>
        
        <div class="form-group" data-question="16">
            <p>16. My friend ... live in Spain.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="76" name="q16" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="76">use to</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="77" name="q16" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="77">was use to</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="78" name="q16" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="78">used to</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="79" name="q16" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="79">was used to</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="80" name="q16" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="80">Don&#39;t Know</label>
            </div>
        </div><hr>
        
        <div class="form-group" data-question="17">
            <p>17. If I ... I would go out more.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="81" name="q17" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="81">wasn&#39;t married</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="82" name="q17" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="82">didn&#39;t marry</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="83" name="q17" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="83">wouldn&#39;t marry</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="84" name="q17" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="84">haven&#39;t married</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="85" name="q17" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="85">Don&#39;t Know</label>
            </div>
        </div><hr>
        
        <div class="form-group" data-question="18">
            <p>18. I was very ... in the story.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="86" name="q18" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="86">interest</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="87" name="q18" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="87">interesting</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="88" name="q18" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="88">interested</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="89" name="q18" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="89">interests</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="90" name="q18" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="90">Don&#39;t Know</label>
            </div>
        </div><hr>
        
        <div class="form-group" data-question="19">
            <p>19. You... come if you don&#39;t want to.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="91" name="q19" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="91">don&#39;t need</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="92" name="q19" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="92">needn&#39;t</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="93" name="q19" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="93">needn&#39;t have</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="94" name="q19" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="94">didn&#39;t need</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="95" name="q19" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="95">Don&#39;t Know</label>
            </div>
        </div><hr>
        
        <div class="form-group" data-question="20">
            <p>20. I ...see you tomorrow. I&#39;m not sure yet.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="96" name="q20" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="96">maybe</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="97" name="q20" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="97">will</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="98" name="q20" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="98">can</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="99" name="q20" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="99">might</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="100" name="q20" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="100">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="21">
            <p>21. ... is bad for you.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="101" name="q21" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="101">Smoking</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="102" name="q21" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="102">The smoking</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="103" name="q21" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="103">To smoke</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="104" name="q21" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="104">Smoker</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="105" name="q21" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="105">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="22">
            <p>22. I ... told him if I had known he was your brother.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="106" name="q22" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="106">hadn&#39;t</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="107" name="q22" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="107">wouldn&#39;t</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="108" name="q22" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="108">wouldn&#39;t have</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="109" name="q22" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="109">don&#39;t have</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="110" name="q22" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="110">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="23">
            <p>23. He ... living there for three years before they found him.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="111" name="q23" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="111">had been</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="112" name="q23" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="112">has been</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="113" name="q23" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="113">might be</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="114" name="q23" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="114">could be</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="115" name="q23" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="115">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="24">
            <p>24. I wish you ... so fast.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="116" name="q24" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="116">don&#39;t drive</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="117" name="q24" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="117">won&#39;t drive</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="118" name="q24" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="118">wouldn&#39;t drive</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="119" name="q24" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="119">haven&#39;t drive</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="120" name="q24" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="120">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="25">
            <p>25. By the time you arrive ...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="121" name="q25" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="121">he&#39;ll leave</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="122" name="q25" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="122">he&#39;ll have left</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="123" name="q25" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="123">he leaves</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="124" name="q25" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="124">he left</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="125" name="q25" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="125">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="26">
            <p>26. The house ... built in the 16th century.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="126" name="q26" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="126">might have been</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="127" name="q26" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="127">might be</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="128" name="q26" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="128">might have be</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="129" name="q26" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="129">might have</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="130" name="q26" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="130">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="27">
            <p>27. Don&#39;t forget ... me a newspaper.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="131" name="q27" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="131">buying</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="132" name="q27" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="132">that you buy</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="133" name="q27" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="133">to bought</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="134" name="q27" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="134">to buy</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="135" name="q27" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="135">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="28">
            <p>28. Whenever there was a visitor, the dog ... to the door.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="136" name="q28" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="136">will run</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="137" name="q28" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="137">is running</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="138" name="q28" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="138">would run</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="139" name="q28" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="139">was running</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="140" name="q28" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="140">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="29">
            <p>29. He is an executive in ...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="141" name="q29" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="141">the car industry</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="142" name="q29" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="142">car industry</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="143" name="q29" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="143">car industries</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="144" name="q29" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="144">car industrial</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="145" name="q29" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="145">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="30">
            <p>30. Peter sold his car ... save money.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="146" name="q30" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="146">the car industry</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="147" name="q30" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="147">car industry</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="148" name="q30" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="148">car industries</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="149" name="q30" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="149">car industrial</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="150" name="q30" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="150">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="31">
            <p>31. He advised me ... the doctor.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="151" name="q31" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="151">that I see</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="152" name="q31" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="152">to see</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="153" name="q31" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="153">seeing</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="154" name="q31" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="154">see</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="155" name="q31" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="155">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="32">
            <p>32. I ... travelling by bus.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="156" name="q32" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="156">am not used to</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="157" name="q32" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="157">didn&#39;t used to</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="158" name="q32" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="158">used to</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="159" name="q32" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="159">do not used to</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="160" name="q32" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="160">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="33">
            <p>33. He didn&#39;t come last night. I wish that he ...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="161" name="q33" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="161">had.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="162" name="q33" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="162">did.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="163" name="q33" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="163">have.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="164" name="q33" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="164">has.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="165" name="q33" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="165">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="34">
            <p>34. I am going to a wedding. I need to ...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="166" name="q34" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="166">be cutting my hair.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="167" name="q34" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="167">cutting my hair.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="168" name="q34" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="168">have my hair cut.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="169" name="q34" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="169">get cut my hair.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="170" name="q34" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="170">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="35">
            <p>35. Which would you ... have, gold or silver?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="171" name="q35" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="171">prefer</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="172" name="q35" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="172">could</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="173" name="q35" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="173">rather</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="174" name="q35" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="174">better</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="175" name="q35" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="175">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="36">
            <p>36. My sister has been in hospital. I wonder how she ...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="176" name="q36" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="176">is getting on.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="177" name="q36" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="177">gets on.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="178" name="q36" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="178">has got across.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="179" name="q36" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="179">is getting away.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="180" name="q36" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="180">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="37">
            <p>37. The man said he did not ... to go by bus.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="181" name="q37" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="181">care for</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="182" name="q37" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="182">bother about</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="183" name="q37" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="183">mind having</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="184" name="q37" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="184">much mind</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="185" name="q37" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="185">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="38">
            <p>38. Although he confessed to the crime, the judge let the boy ...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="186" name="q38" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="186">alone.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="187" name="q38" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="187">come in.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="188" name="q38" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="188">off.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="189" name="q38" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="189">forgive.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="190" name="q38" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="190">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="39">
            <p>39. I&#39;ve never ... that word before.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="191" name="q39" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="191">gave away</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="192" name="q39" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="192">come across</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="193" name="q39" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="193">come over</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="194" name="q39" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="194">come into</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="195" name="q39" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="195">Don&#39;t Know</label>
            </div>
        </div><hr>

        <div class="form-group" data-question="40">
            <p>40. The student could not answer the question, so he ...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="196" name="q40" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="196">gave off.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="197" name="q40" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="197">gave into.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="198" name="q40" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="198">gave up.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="199" name="q40" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="199">gave away.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="200" name="q40" class="custom-control-input" value="e"
                       required>
                <label class="custom-control-label" for="200">Don&#39;t Know</label>
            </div>
        </div><hr>
        <span>3 / 4</span><br>
        <div>
            <input type="button" class="btn btn-secondary back-test" value="Back"">
            <input type="submit" class="btn btn-primary next-en-test" name="en-form" value="next">
        </div>                             
    </fieldset><!-- end english test-->

    <fieldset class="fr-test" disabled>
        <h3>Commencer le test</h3>
        <div class="form-group">
           <p>1. Tu t’appelles …?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f1" name="fr1" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f1">quoi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f2" name="fr1" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f2">toi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f3" name="fr1" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f3">comment</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f4" name="fr1" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f4">qui</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>2. Elle est espagnole, elle vient... Madrid.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f5" name="fr2" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f5">pour</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f6" name="fr2" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f6">de</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f7" name="fr2" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f7">dans</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f8" name="fr2" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f8">au</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>3.Juliette  ...  étudiante.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f9" name="fr3" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f9">pour</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f10" name="fr3" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f10">de</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f11" name="fr3" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f11">dans</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f12" name="fr3" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f12">au</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>4. ... du feu?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f13" name="fr4" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f13">T&#39;avais</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f14" name="fr4" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f14">T&#39;as eu</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f15" name="fr4" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f15">Est-ce que tu as</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f16" name="fr4" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f16">Es tu as</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>5. Je ..... au 4 rue de la Plage.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f17" name="fr5" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f17">n’habite pas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f18" name="fr5" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f18">ne vie pas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f19" name="fr5" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f19">n’habiter</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f20" name="fr5" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f20">n’habité pas</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>6. Elle … cinquante-huit ans.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f21" name="fr6" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f21">fait</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f22" name="fr6" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f22">a</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f23" name="fr6" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f23">est</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f24" name="fr6" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f24">va</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>7. Qu’est-ce que tu … dit?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f25" name="fr7" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f25">es</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f26" name="fr7" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f26">ai</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f27" name="fr7" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f27">étais</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f28" name="fr7" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f28">as</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>8. Pourquoi ...?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f29" name="fr8" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f29">tu pleures</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f30" name="fr8" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f30">tu es pleurer</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f31" name="fr8" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f31">est ce que pleures-tu</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f32" name="fr8" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f32">pleure-tu</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>9. Où ... passer tes vacances l’été prochain?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f33" name="fr9" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f33">vas-tu</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f34" name="fr9" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f34">tu es en train d&#39;aller</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f35" name="fr9" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f35">est-ce que vas-tu</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f36" name="fr9" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f36">iras tu</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>10. ... jamais allé(e) au théâtre.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f37" name="fr10" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f37">J&#39;irai</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f38" name="fr10" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f38">Je suis</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f39" name="fr10" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f39">Je peux</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f40" name="fr10" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f40">Je ne suis</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>11. Les portes ….. ouvrent à 9hr00.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f41" name="fr11" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f41">s&#39;</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f42" name="fr11" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f42">sont</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f43" name="fr11" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f43">(rien)</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f44" name="fr11" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f44">s’est</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>12. Où est-ce qu’il ... quand tu l’as rencontré?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f45" name="fr12" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f45">habitué</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f46" name="fr12" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f46">était habité</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f47" name="fr12" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f47">habitait</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f48" name="fr12" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f48">est en train d&#39;habiter</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>13. Il suffit de faire ….. marche tous les jours.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f49" name="fr13" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f49">petit</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f50" name="fr13" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f50">un peu de</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f51" name="fr13" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f51">quelque</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f52" name="fr13" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f52">la marche</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>14. La banque est ….<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f53" name="fr14" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f53">fermer</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f54" name="fr14" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f54">fermée encore</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f55" name="fr14" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f55">encore fermée</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f56" name="fr14" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f56">ferme</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>15. On fait le vin ... Italie depuis des milliers d’années.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f57" name="fr15" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f57">dans</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f58" name="fr15" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f58">rouge</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f59" name="fr15" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f59">en</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f60" name="fr15" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f60">à</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>16. Mon mari ... en Espagne.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f61" name="fr16" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f61">habiterai</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f62" name="fr16" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f62">est habitué</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f63" name="fr16" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f63">vivait</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f64" name="fr16" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f64">était habitué</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>17. Si je ... je sortirais plus souvent.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f65" name="fr17" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f65">n’étais pas marié(e)</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f66" name="fr17" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f66">n&#39;épouse pas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f67" name="fr17" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f67">ne marierais pas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f68" name="fr17" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f68">n&#39;ai pas marié</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>18. Votre histoire ne m’intéresse …..<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f69" name="fr18" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f69">beaucoup</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f70" name="fr18" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f70">pas à tout</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f71" name="fr18" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f71">pas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f72" name="fr18" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f72">personne</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>19 .... pas venir si tu ne le veux pas.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f73" name="fr19" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f73">Tu ne faux</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f74" name="fr19" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f74">Il ne faut</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f75" name="fr19" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f75">Il ne te fallait</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f76" name="fr19" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f76">Tu as de ne</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>20. J’espère … te voir demain.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f77" name="fr20" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f77">à</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f78" name="fr20" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f78">(rien)</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f79" name="fr20" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f79">de</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f80" name="fr20" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f80">pour</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>21. C&#39;est vraiment dommage que vous ….. pas eu la chance de la connaitre.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f81" name="fr21" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f81">n&#39;ayez</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f82" name="fr21" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f82">n’avez</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f83" name="fr21" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f83">n&#39;a</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f84" name="fr21" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f84">avez</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>22. Je ... si j’avais su que c’était ton frère.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f85" name="fr22" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f85">ne lui aurais pas dit</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f86" name="fr22" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f86">lui dirai pas dit</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f87" name="fr22" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f87">ne dirai pas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f88" name="fr22" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f88">n&#39;ai pas dit</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>23. Ça ... trois ans qu&#39;il habite ici.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f89" name="fr23" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f89">faire</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f90" name="fr23" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f90">fait</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f91" name="fr23" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f91">peut fait</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f92" name="fr23" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f92">faisant</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>24. J&#39;aimerais que tu ne ... pas tout le temps.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f93" name="fr24" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f93">cries</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f94" name="fr24" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f94">criant</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f95" name="fr24" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f95">crie</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f96" name="fr24" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f96">as crié</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>25. Quand tu seras arrivée...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f97" name="fr25" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f97">il partira</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f98" name="fr25" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f98">il sera parti</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f99" name="fr25" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f99">il part</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f100" name="fr25" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f100">il partit</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>26. La maison ... construite au 16ème siècle.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f101" name="fr26" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f101">aurait été</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f102" name="fr26" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f102">eut été</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f103" name="fr26" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f103">été</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f104" name="fr26" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f104">aura peut-être été</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>27. N’oublie pas … le journal.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f105" name="fr27" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f105">achetant</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f106" name="fr27" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f106">que tu achètes</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f107" name="fr27" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f107">d&#39;achetais</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f108" name="fr27" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f108">d&#39;acheter</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>28. Quand il y avait un visiteur, le chien ... à sa rencontre.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f109" name="fr28" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f109">courait</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f110" name="fr28" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f110">cours</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f111" name="fr28" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f111">coura</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f112" name="fr28" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f112">était en train de courir</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>29. Il est patron dans...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f113" name="fr29" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f113">l&#39;industrie automobile</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f114" name="fr29" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f114">industrie automobile</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f115" name="fr29" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f115">industries automobiles</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f116" name="fr29" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f116">automobile industrielle</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>30. Pierre a vendu sa voiture ... d&#39;épargner.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f117" name="fr30" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f117">pour</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f118" name="fr30" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f118">et il</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f119" name="fr30" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f119">afin</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f120" name="fr30" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f120">parce qu’il voulait</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>31. Il m&#39;a conseillé... chez le docteur.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f121" name="fr31" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f121">aller</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f122" name="fr31" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f122">d&#39;aller</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f123" name="fr31" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f123">allant</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f124" name="fr31" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f124">vas</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>32. Je … à voyager en bus.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f125" name="fr32" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f125">ne suis pas habitué</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f126" name="fr32" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f126">ne suis souvent pas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f127" name="fr32" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f127">pas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f128" name="fr32" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f128">n&#39;étais pas</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>33. Il n&#39;est pas venu hier soir. J&#39;aurais voulu ...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f129" name="fr33" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f129">qu&#39;il vienne</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f130" name="fr33" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f130">qu&#39;il venait</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f131" name="fr33" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f131">qu&#39;il advenu</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f132" name="fr33" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f132">qu&#39;il était</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>34. Je vais à un mariage. J’ai besoin de...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f133" name="fr34" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f133">couper les cheveux</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f134" name="fr34" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f134">en train de couper</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f135" name="fr34" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f135">me faire couper les cheveux.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f136" name="fr34" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f136">mes cheveux couper.</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>35. Est ce que tu ... avoir de l’or ou de l’argent?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f137" name="fr35" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f137">préférerais</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f138" name="fr35" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f138">préférer</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f139" name="fr35" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f139">plutôt</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f140" name="fr35" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f140">mieux</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>36.Ma sœur a été hospitalisée. Je me demande comment elle...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f141" name="fr36" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f141">va</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f142" name="fr36" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f142">se santé</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f143" name="fr36" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f143">va mieux</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f144" name="fr36" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f144">sa santé</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>37. L&#39;homme a dit que de prendre le bus ne ....<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f145" name="fr37" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f145">ne souhaiterait pas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f146" name="fr37" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f146">n’aimerait pas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f147" name="fr37" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f147">le dérangerait pas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f148" name="fr37" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f148">l’importerait</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>38. Bien qu’il ait admis son crime, le juge ne lui en a pas tenu …<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f149" name="fr38" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f149">seul</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f150" name="fr38" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f150">correctement</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f151" name="fr38" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f151">rigueur</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f152" name="fr38" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f152">promesse</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>39. Je n’ai jamais… ce mot.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f153" name="fr39" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f153">écouté</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f154" name="fr39" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f154">senti</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f155" name="fr39" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f155">entendu</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f156" name="fr39" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f156">contré</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>40. Le Roi voulait que le Prince … sa chère Cendrillon.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="f157" name="fr40" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="f157">abandonna</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f158" name="fr40" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="f158">abandonner</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f159" name="fr40" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="f159">abandonne</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="f160" name="fr40" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="f160">abandonnera</label>
            </div>
        </div><hr>
        <span>3 / 4</span><br>
        <div>
            <input type="button" class="btn btn-secondary back-test" value="Back"">
            <input type="submit" class="btn btn-primary next-fr-test" name="fr-form" value="next">
        </div>
    </fieldset>

    <fieldset class="tr-test" disabled>
        <h3>Testi başlatmak</h3>
        <div class="form-group">
           <p>1. .______ adın ne?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t1" name="tr1" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t1">Senin</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t2" name="tr1" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t2">Onun</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t3" name="tr1" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t3">Bizim</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t4" name="tr1" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t4">Sizin</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>2. Biz Türküz  ve İstanbul____.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t5" name="tr2" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t5">-duk</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t6" name="tr2" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t6">-luyuz</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t7" name="tr2" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t7">-da</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t8" name="tr2" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t8">-uz</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>3. Cadede çok araba__ vardı.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t9" name="tr3" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t9">none</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t10" name="tr3" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t10">-lar</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t11" name="tr3" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t11">-ler</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t12" name="tr3" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t12">mı</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>4. A: Trafik yoğun mu? <br>B: Hayır, yoğun ____.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t13" name="tr4" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t13">mu</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t14" name="tr4" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t14">değil</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t15" name="tr4" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t15">değiliz</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t16" name="tr4" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t16">musun</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>5. Parti güzel ___?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t17" name="tr5" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t17">mi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t18" name="tr5" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t18">mü</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t19" name="tr5" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t19">değil</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t20" name="tr5" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t20">iyor mu</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>6. Siz yorgun__, lütfen otur__.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t21" name="tr6" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t21">-sunuz / -uyun</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t22" name="tr6" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t22">none / -uyor</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t23" name="tr6" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t23">-sun / -yun</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t24" name="tr6" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t24">-sunuz / -un</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>7. Margaret, her gün okul__ otobüsle gel__.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t25" name="tr7" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t25">-a / -iyor</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t26" name="tr7" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t26">-ya / -miyor</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t27" name="tr7" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t27">-da / miyor</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t28" name="tr7" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t28">-e /-iyor</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>8. Onun anne__ dün güzel bir yemek yaptı.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t29" name="tr8" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t29">-m</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t30" name="tr8" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t30">-n</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t31" name="tr8" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t31">-yi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t32" name="tr8" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t32">-si</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>9. Sen yemek ye__?.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t33" name="tr9" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t33">-dın mı</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t34" name="tr9" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t34">-din mi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t35" name="tr9" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t35">Mi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t36" name="tr9" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t36">-yor musun</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>10. Kitaplık___ dört raf var.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t37" name="tr10" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t37">-da</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t38" name="tr10" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t38">-dan</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t39" name="tr10" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t39">-ta</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t40" name="tr10" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t40">-tan</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>11. A. Siz dün tiyatro ___ git_______? <br> B. Evet.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t41" name="tr11" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t41">-a / diniz mi?</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t42" name="tr11" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t42">-e / tiniz mi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t43" name="tr11" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t43">-da / -tin mi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t44" name="tr11" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t44">-ya / -tiniz mi</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>12. A. Yemekler güzel miydi? <br> B. Evet harika ___.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t45" name="tr12" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t45">-dı</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t46" name="tr12" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t46">-di</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t47" name="tr12" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t47">-tı</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t48" name="tr12" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t48">-ydı</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>13. Londra, Paris ___   _____ kalabalık.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t49" name="tr13" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t49">-ten daha</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t50" name="tr13" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t50">-den daha</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t51" name="tr13" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t51">-den en çok</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t52" name="tr13" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t52">-ten çok</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>14. İskoçya’ya araba ___ gidiyoruz.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t53" name="tr14" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t53">-la</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t54" name="tr14" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t54">-yla</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t55" name="tr14" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t55">-le</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t56" name="tr14" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t56">-lı</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>15. A. Bu akşam sinemaya _______? <br> B. Tamam, haydi gidelim.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t57" name="tr15" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t57">gitmeyelim</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t58" name="tr15" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t58">gideyim mi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t59" name="tr15" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t59">gidelim mi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t60" name="tr15" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t60">gitmeyelim mi</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>16. Gelecek yaz tatilini nerde _________?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t61" name="tr16" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t61">geçireceksin</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t62" name="tr16" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t62">Geçirdin</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t63" name="tr16" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t63">geçiriyordun</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t64" name="tr16" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t64">geçirmis</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>17. Bizim restoran____  çok ünlüdür.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t65" name="tr17" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t65">-ımız</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t66" name="tr17" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t66">-mız</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t67" name="tr17" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t67">-ız</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t68" name="tr17" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t68">-ıyız</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>18. Seiko saatleri___ fabrika ___ Japonya’da.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t69" name="tr18" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t69">-nin / -sı</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t70" name="tr18" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t70">-yin / -yı</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t71" name="tr18" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t71">-in / -ı</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t72" name="tr18" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t72">-sin / nı</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>19. A. Banka nerede? <br> B. Banka kütüphane__ yan___.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t73" name="tr19" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t73">-nin / -nında</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t74" name="tr19" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t74">-in / -nında</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t75" name="tr19" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t75">-nin / -ında</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t76" name="tr19" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t76">-yin / -ında</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>20. ______ yaz, tatil için deniz kenarında bir yere gideceğim.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t77" name="tr20" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t77">Geçen</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t78" name="tr20" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t78">Gelecek</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t79" name="tr20" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t79">Her</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t80" name="tr20" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t80">Hiçbir</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>21.  Yarın en iyi arkadaşımın doğum günü, ____ için güzel bir hediye alacağım.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t81" name="tr21" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t81">onun</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t82" name="tr21" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t82">o</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t83" name="tr21" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t83">senin</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t84" name="tr21" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t84">benim</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>22. İtalyan arkadaşım, bana İtalya’dan hep şarap getir __.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t85" name="tr22" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t85">-ecek</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t86" name="tr22" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t86">-ür</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t87" name="tr22" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t87">-ir</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t88" name="tr22" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t88">-er</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>23. Patron, asla işe geç gel_______.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t89" name="tr23" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t89">-ir</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t90" name="tr23" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t90">-sin</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t91" name="tr23" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t91">-iyor</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t92" name="tr23" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t92">-mez</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>24. Araba kullanabilirim ama motorsiklet kullan______.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t93" name="tr24" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t93">-abilirim</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t94" name="tr24" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t94">-amam</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t95" name="tr24" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t95">-amaz</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t96" name="tr24" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t96">-amayabilirim</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>25. A. Murat’ın doğum günü partisine gelecek misin? <br> B. Emin değilim. Gel___________. Çünkü bu aralar çok yoğunum.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t97" name="tr25" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t97">-mem</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t98" name="tr25" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t98">-emem</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t99" name="tr25" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t99">-ebilirim</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t100" name="tr25" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t100">-emeyebilirim</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>26. Haydi bu akşam Bebek Caddesi’_____   Çin lokantasına gidelim.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t101" name="tr26" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t101">-de</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t102" name="tr26" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t102">-deki</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t103" name="tr26" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t103">-ndeki</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t104" name="tr26" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t104">-ki</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>27. Çocuk neşeyle koş____ çocuk bahçesindeki arkadaşlarına doğru gitti.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t105" name="tr27" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t105">-arak</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t106" name="tr27" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t106">-unca</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t107" name="tr27" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t107">-an</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t108" name="tr27" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t108">-tu</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>28. Hikaye oku______ çocukluğumdan beri çok severim.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t109" name="tr28" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t109">-mak</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t110" name="tr28" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t110">-ma</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t111" name="tr28" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t111">-mayı</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t112" name="tr28" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t112">-mağı</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>29. A: Ne türde filmler____    ________? <br> B: Korku filmlerinden.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t113" name="tr29" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t113">-den hoşlanır mısın?</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t114" name="tr29" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t114">-den hoşlanırsın</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t115" name="tr29" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t115">-i hoşlanırsın</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t116" name="tr29" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t116">hoşlanırsın</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>30. Müzik dinleme ___ severim ancak dans etmek___ nefret ederim.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t117" name="tr30" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t117">-yi / -ten</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t118" name="tr30" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t118">-den / -ten</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t119" name="tr30" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t119">-k / -i</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t120" name="tr30" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t120">-kten / -ten</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>31. Telefonda bana, “Seninle mutlaka konuş___ gerek.” dedi.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t121" name="tr31" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t121">-mam</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t122" name="tr31" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t122">-man</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t123" name="tr31" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t123">-ma</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t124" name="tr31" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t124">-malı</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>32. Bence bu yaştan sonra senin, her gün düzenli olarak spor yap______<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t125" name="tr32" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t125">-malıyım</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t126" name="tr32" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t126">-mak gerek</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t127" name="tr32" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t127">-malısın</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t128" name="tr32" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t128">-man gerek</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>33. İstanbul Üniversitesi’_____ geçen yıl mezun oldu.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t129" name="tr33" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t129">-den</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t130" name="tr33" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t130">- ten</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t131" name="tr33" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t131">-ni</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t132" name="tr33" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t132">-nden</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>34. Eğer yağmur yağar____, bu piknikten vazgeçeriz.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t133" name="tr34" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t133">-sa</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t134" name="tr34" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t134">-mış</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t135" name="tr34" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t135">-dı</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t136" name="tr34" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t136">none</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>35. Her sabah yataktan kalk______ sonra, 10 dakika egzersiz yaparım.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t137" name="tr35" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t137">-tan</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t138" name="tr35" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t138">-madan</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t139" name="tr35" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t139">-tıktan</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t140" name="tr35" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t140">-dıktan</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>36. İşten dön_______ yemek yapacağım.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t141" name="tr36" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t141">-ince</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t142" name="tr36" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t142">-ünce</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t143" name="tr36" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t143">-erek</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t144" name="tr36" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t144">-düm</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>37. Duydun mu? James ve eşi tatilde Bodrum’a git___ .<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t145" name="tr37" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t145">-ti</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t146" name="tr37" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t146">-iyor</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t147" name="tr37" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t147">-miş</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t148" name="tr37" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t148">-ecek</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>38. Bu hafta sonu _____ çalışacağım ____ spor yapacağım! Sadece dinleneceğim..Ali wa Ahmad ........huna<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t149" name="tr38" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t149">hem / hem de</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t150" name="tr38" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t150">hiç / asla</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t151" name="tr38" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t151">ne / ne de</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t152" name="tr38" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t152">hep / hep</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>39. Ben beş yıl önce üniversitede okurken, o bir şirkette yönetici olarak çalış______.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t153" name="tr39" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t153">-ıyordu</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t154" name="tr39" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t154">-tı</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t155" name="tr39" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t155">-acakmış</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t156" name="tr39" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t156">-ıyorsa</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>40. Eğer o anlaşmayı yapabilseydik, şirketimiz markette lider bir konuma gel____.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="t157" name="tr40" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="t157">-iyoruz</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t158" name="tr40" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="t158">-irdi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t159" name="tr40" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="t159">-eceğiz</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="t160" name="tr40" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="t160">-irdik</label>
            </div>
        </div><hr>
        <span>3 / 4</span><br>
        <div>
            <input type="button" class="btn btn-secondary back-test" value="Back"">
            <input type="submit" class="btn btn-primary next-tr-test" name="tr-form" value="next">
        </div>
    </fieldset>

    <fieldset class="gr-test" disabled>
        <h3>Starten Sie den Test</h3>
        <div class="form-group">
           <p>1. Woher kommen Sie?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g1" name="gr1" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g1">Ich komme in Deutschland</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g2" name="gr1" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g2">Ich wohne in Deutschland</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g3" name="gr1" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g3">Ich komme aus Deutschland</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g4" name="gr1" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g4">Ich wohne aus Deutschland</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>2. Herr Ober, ich habe Durst. Bringen Sie mir bitte........”<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g5" name="gr2" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g5">eine Teetasse</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g6" name="gr2" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g6">eine Tasse Tee</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g7" name="gr2" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g7">einen Tasse</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g8" name="gr2" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g8">einen Teetasse</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>3. „Kommst Du mit ins Kino?&quot; &quot;Nein, ich.............heute noch arbeiten.”<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g9" name="gr3" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g9">darf</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g10" name="gr3" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g10">kann</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g11" name="gr3" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g11">habe</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g12" name="gr3" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g12">muss</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>4. Wie spät ist es?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g13" name="gr4" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g13">Sehr gut</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g14" name="gr4" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g14">Viertel vor acht</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g15" name="gr4" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g15">Montag</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g16" name="gr4" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g16">Dreiundzwanzig Euro vierzig.</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>5. Was ist korrekt?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g17" name="gr5" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g17">Öffnen Sie bitte die Tür!</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g18" name="gr5" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g18">Öffnen die Tür bitte!</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g19" name="gr5" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g19">Öffnen ihr die Tür bitte!</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g20" name="gr5" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g20">Tür öffnen Sie bitte</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>6. Susanne hat eine neue Mikrowelle. Das ist ....... Mikrowelle.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g21" name="gr6" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g21">ihr</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g22" name="gr6" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g22">sein</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g23" name="gr6" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g23">ihre</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g24" name="gr6" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g24">seine</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>7. Du.......viel zu hart.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g25" name="gr7" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g25">arbeitst</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g26" name="gr7" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g26">arbeitest</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g27" name="gr7" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g27">arbeite</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g28" name="gr7" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g28">arbeiten</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>8. „Guten Morgen, Frau Meier. ........”<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g29" name="gr8" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g29">Wie gehen Sie?</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g30" name="gr8" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g30">Wie geht Ihnen es?</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g31" name="gr8" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g31">Wie geht es Ihnen?</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g32" name="gr8" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g32">Wie geht es Sie?</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>9. Das ist doch.......Stuhl. Das ist ein Sessel.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g33" name="gr9" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g33">kein</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g34" name="gr9" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g34">ein</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g35" name="gr9" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g35">nicht</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g36" name="gr9" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g36">nein</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>10. Das ist Karins Kugelschreiber ......schreibt sehr gut.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g37" name="gr10" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g37">er</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g38" name="gr10" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g38">sie</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g39" name="gr10" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g39">es</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g40" name="gr10" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g40">du</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>11. Ich fahre nach Frankreich, aber Michaela........in die Schweiz.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g41" name="gr11" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g41">fahrt</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g42" name="gr11" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g42">fährt</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g43" name="gr11" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g43">geht</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g44" name="gr11" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g44">lauft</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>12. Das ist Hans. Ich habe.........gestern mein Lieblingsbuch gegeben.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g45" name="gr12" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g45">ihr</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g46" name="gr12" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g46">ihnen</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g47" name="gr12" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g47">ihm</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g48" name="gr12" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g48">ihn</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>13. „Wo steht denn euer Fernseher?&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g49" name="gr13" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g49">In der Ecke</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g50" name="gr13" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g50">In die Ecke</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g51" name="gr13" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g51">Auf der Ecke</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g52" name="gr13" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g52">An die Ecke</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>14. „Wohin stellen wir den Fernseher?&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g53" name="gr14" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g53">In der Ecke</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g54" name="gr14" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g54">In die Ecke</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g55" name="gr14" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g55">An der Ecke</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g56" name="gr14" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g56">Auf die Ecke</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>15. Das ist das neue Auto.......Vaters.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g57" name="gr15" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g57">meiner</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g58" name="gr15" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g58">meines</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g59" name="gr15" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g59">von meiner</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g60" name="gr15" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g60">von meines</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>16. „Fahren Sie mit dem Auto oder gehen Sie........?”<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g61" name="gr16" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g61">mit Fuß</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g62" name="gr16" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g62">bei Fuß</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g63" name="gr16" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g63">an Fuß</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g64" name="gr16" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g64">zu Fuß</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>17. Der Zug..........vor sechs Minuten.........<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g65" name="gr17" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g65">hat abgefahren</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g66" name="gr17" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g66">ist abgefahren</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g67" name="gr17" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g67">hat abgefahrt</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g68" name="gr17" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g68">ist abgefahrt</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>18. „Haben Sie einen Fernseher?&quot; &quot;Ja, in meinem Zimmer steht.... .&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g69" name="gr18" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g69">eins</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g70" name="gr18" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g70">ein</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g71" name="gr18" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g71">einen</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g72" name="gr18" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g72">einer</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>19. „Klaus, Du musst mir helfen, Du bist doch mein.........Freund.&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g73" name="gr19" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g73">besten</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g74" name="gr19" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g74">am besten</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g75" name="gr19" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g75">bester</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g76" name="gr19" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g76">beste</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>20. Ich habe einen.........Garten als mein Nachbar.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g77" name="gr20" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g77">großen</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g78" name="gr20" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g78">größen</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g79" name="gr20" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g79">großeren</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g80" name="gr20" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g80">größeren</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>21. „Das ist aber ein schönes Geschenk. Ich danke Ihnen recht herzlich....... !&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g81" name="gr21" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g81">daran</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g82" name="gr21" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g82">dazu</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g83" name="gr21" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g83">darüber</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g84" name="gr21" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g84">dafür</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>22. Er hat vier Gläser Whisky getrunken, .........<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g85" name="gr22" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g85">obwohl will er Auto fahren</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g86" name="gr22" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g86">trotzdem will er Auto fahren</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g87" name="gr22" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g87">dagegen will er Auto fahren</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g88" name="gr22" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g88">denn will er Auto fahren</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>23. „.........interessierst Du dich am meisten?&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g89" name="gr23" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g89">Wofür</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g90" name="gr23" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g90">Womit</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g91" name="gr23" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g91">Wozu</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g92" name="gr23" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g92">Worin</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>24. „Weißt Du, wie dieses Wort........&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g93" name="gr24" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g93">schreibt</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g94" name="gr24" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g94">geschrieben wird</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g95" name="gr24" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g95">man schreiben muß</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g96" name="gr24" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g96">ist zu schreiben</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>25. „Ich habe mein Heft vergessen......... Sie mir wohl ein Blatt Papier geben?&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g97" name="gr25" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g97">Könnten</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g98" name="gr25" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g98">Hätten</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g99" name="gr25" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g99">Wollten</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g100" name="gr25" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g100">Dürfen</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>26. „Gefällt Ihnen dieses Bild?&quot; &quot;Ach, wissen Sie, von .......... Malerei verstehe ich gar nichts!&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g101" name="gr26" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g101">modern</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g102" name="gr26" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g102">modernem</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g103" name="gr26" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g103">moderne</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g104" name="gr26" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g104">moderner</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>27. Am besten machen wir die Party bei mir. Ich habe doch das........ Zimmer.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g105" name="gr27" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g105">großte</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g106" name="gr27" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g106">großeste</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g107" name="gr27" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g107">größte</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g108" name="gr27" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g108">größeste</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>28. „Morgen gebe ich eine kleine Party. Es wäre nett,........ Sie auch kämen.&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g109" name="gr28" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g109">wann</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g110" name="gr28" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g110">ob</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g111" name="gr28" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g111">dass</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g112" name="gr28" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g112">wenn</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>29. Die Eltern sprachen ganz leise, ........das Kind nicht zu wecken.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g113" name="gr29" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g113">damit</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g114" name="gr29" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g114">dass</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g115" name="gr29" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g115">für</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g116" name="gr29" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g116">um</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>30. Inge hat gesagt, ..........<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g117" name="gr30" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g117">dass kann sie erst morgen kommen</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g118" name="gr30" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g118">dass erst morgen kommen kann</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g119" name="gr30" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g119">dass sie erst morgen kann kommen</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g120" name="gr30" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g120">dass sie erst morgen kommen kann</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>31. Die Stadt, ......... ich komme, hat nur 60 000 Einwohner.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g121" name="gr31" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g121">wo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g122" name="gr31" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g122">woraus</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g123" name="gr31" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g123">aus der</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g124" name="gr31" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g124">die</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>32. „Was? Du hast die Arbeit immer noch nicht gemacht? Das hätte gestern.......&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g125" name="gr32" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g125">werden müssen gemacht</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g126" name="gr32" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g126">gemacht werden müssen</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g127" name="gr32" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g127">müssen gemacht werden</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g128" name="gr32" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g128">müssen werden gemacht</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>33. „Ich......... mich sehr gerne mit Ihnen unterhalten. Allerdings habe ich leider keine Zeit.&quot;<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g129" name="gr33" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g129">dürfte</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g130" name="gr33" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g130">sollte</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g131" name="gr33" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g131">hätte</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g132" name="gr33" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g132">würde</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>34. Die Briefe sind schon gestern abgeschickt............<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g133" name="gr34" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g133">werden</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g134" name="gr34" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g134">worden</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g135" name="gr34" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g135">geworden</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g136" name="gr34" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g136">wurden</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>35. Er.........immer Bücher.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g137" name="gr35" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g137">lest</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g138" name="gr35" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g138">list</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g139" name="gr35" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g139">liest</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g140" name="gr35" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g140">lesen</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>36. Ein schrecklicher Unfall ist geschehen. Er ist im Nebel ..........einenBaum gefahren<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g141" name="gr36" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g141">gegen</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g142" name="gr36" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g142">bei</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g143" name="gr36" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g143">für</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g144" name="gr36" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g144">zu</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>37. Wie kann man anders sagen: &#39;Die Arbeit muss gemacht werden&#39;.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g145" name="gr37" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g145">Die Arbeit sollen gemacht werden</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g146" name="gr37" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g146">Die Arbeit ist zu machen.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g147" name="gr37" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g147">Die Arbeit dürfte gemacht werden.</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g148" name="gr37" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g148">Die Arbeit möchte gemacht werden.</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>38. Im Katalog steht, dass man alles zurückschicken kann, ....... einemnicht gefällt.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g149" name="gr38" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g149">woran</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g150" name="gr38" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g150">an dem</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g151" name="gr38" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g151">wie</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g152" name="gr38" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g152">was</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>39. Sie interessiert sich.........für Bücher noch für Musik.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g153" name="gr39" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g153">weder</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g154" name="gr39" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g154">entweder</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g155" name="gr39" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g155">je</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g156" name="gr39" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g156">zwar</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>40. Der Mann sagte, das Problem...........ihn nicht.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="g157" name="gr40" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="g157">interessiere</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g158" name="gr40" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="g158">interessiert</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g159" name="gr40" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="g159">interessierte</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="g160" name="gr40" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="g160">interessieren</label>
            </div>
        </div><hr>
        <span>3 / 4</span><br>
        <div>
            <input type="button" class="btn btn-secondary back-test" value="Back"">
            <input type="submit" class="btn btn-primary next-gr-test" name="ger-form" value="next">
        </div>
    </fieldset>

    <fieldset class="it-test" disabled>
        <h3>Inizia il test</h3>
        <div class="form-group">
           <p>1. Come ... ?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i1" name="it1" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i1">ti chiami</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i2" name="it1" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i2">chiami</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i3" name="it1" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i3">mi chiami</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i4" name="it1" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i4">ti chiama</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>2. Sono francese,  ... Parigi<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i5" name="it2" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i5">da</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i6" name="it2" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i6">peri</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i7" name="it2" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i7">a</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i8" name="it2" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i8">di</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>3. ... una penna?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i9" name="it3" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i9">hai</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i10" name="it3" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i10">ho</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i11" name="it3" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i11">avere</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i12" name="it3" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i12">ha</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>4. Alberto .... il poliziotto<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i13" name="it4" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i13">è</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i14" name="it4" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i14">lavora</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i15" name="it4" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i15">fa</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i16" name="it4" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i16">sono</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>5. Io ... spesso al cinema nel tempo libero.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i17" name="it5" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i17">va</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i18" name="it5" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i18">vada</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i19" name="it5" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i19">anda</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i20" name="it5" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i20">vado</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>6. .... molto le canzoni francesi.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i21" name="it6" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i21">piace</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i22" name="it6" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i22">mi piacciono</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i23" name="it6" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i23">mi piace</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i24" name="it6" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i24">piaccio</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>7. Nella camera .... un letto matrimoniale.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i25" name="it7" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i25">è</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i26" name="it7" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i26">sono</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i27" name="it7" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i27">c&#39;è</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i28" name="it7" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i28">ci son</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>8. Il teatro è di fronte .... stadio.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i29" name="it8" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i29">al</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i30" name="it8" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i30">allo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i31" name="it8" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i31">alla</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i32" name="it8" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i32">ai</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>9. Al museo ci sono molte fotografie ....<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i33" name="it9" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i33">interessante</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i34" name="it9" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i34">interessanta</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i35" name="it9" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i35">interessanto</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i36" name="it9" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i36">interessanti</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>10. Mario ha .... libri molto rari e costosi.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i37" name="it10" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i37">dei</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i38" name="it10" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i38">delle</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i39" name="it10" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i39">degli</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i40" name="it10" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i40">del</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>11. La scorsa estate Elisa .... in vacanza in Spagna.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i41" name="it11" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i41">è andato</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i42" name="it11" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i42">sono andato</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i43" name="it11" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i43">è andata</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i44" name="it11" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i44">ha andato</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>12. Ieri .... colazione in un bar.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i45" name="it12" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i45">ho preso</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i46" name="it12" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i46">ho fatto</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i47" name="it12" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i47">ho mangiato</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i48" name="it12" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i48">ho preparato</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>13. In Belgio .... due lingue: il francese e il fiammingo.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i49" name="it13" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i49">si parlano</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i50" name="it13" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i50">parla</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i51" name="it13" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i51">si parla</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i52" name="it13" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i52">parlare</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>14. Il caffé .... preferisco senza zucchero.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i53" name="it14" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i53">la</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i54" name="it14" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i54">li</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i55" name="it14" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i55">lo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i56" name="it14" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i56">le</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>15. La mattina Federica.... sempre alle 7.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i57" name="it15" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i57">mi alzo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i58" name="it15" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i58">alzi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i59" name="it15" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i59">alza</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i60" name="it15" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i60">si alza</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>16. Giorgio .... guardando la televisione in soggiorno.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i61" name="it16" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i61">è</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i62" name="it16" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i62">sta</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i63" name="it16" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i63">fa</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i64" name="it16" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i64">va</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>17. .... fratello vive ancora a Milano?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i65" name="it17" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i65">il tuo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i66" name="it17" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i66">tuo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i67" name="it17" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i67">tuoi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i68" name="it17" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i68">lo tuo</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>18. Prima .... in vacanza al mare, ora vado sempre in montagna.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i69" name="it18" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i69">sono andato</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i70" name="it18" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i70">ero</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i71" name="it18" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i71">andavo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i72" name="it18" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i72">ando</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>19. Da giovane avevo una Vespa, poi nel 1992 .... un&#39;automobile.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i73" name="it19" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i73">ho comprato</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i74" name="it19" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i74">compravo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i75" name="it19" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i75">compri</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i76" name="it19" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i76">compravi</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>20. Il Po è il fiume più lungo ....<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i77" name="it20" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i77">da Italia</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i78" name="it20" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i78">per Italia</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i79" name="it20" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i79">Italia</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i80" name="it20" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i80">d&#39;Italia</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>21. Oggi è una bella giornata: c&#39;è il sole e ....<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i81" name="it21" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i81">è cald</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i82" name="it21" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i82">calda</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i83" name="it21" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i83">c&#39;è caldo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i84" name="it21" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i84">fa caldo</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>22. Hai bevuto molto: al tuo posto io non ....<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i85" name="it22" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i85">guiderei</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i86" name="it22" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i86">guidavo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i87" name="it22" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i87">ho guidato</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i88" name="it22" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i88">guidare</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>23. La situazione è piuttosto grave: bisogna .... una decisione subito.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i89" name="it23" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i89">prende</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i90" name="it23" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i90">si decide</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i91" name="it23" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i91">prendere</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i92" name="it23" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i92">fare</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>24. Vuoi perdere peso? Non .... tanta cioccolata!<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i93" name="it24" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i93">mangi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i94" name="it24" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i94">mangiare</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i95" name="it24" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i95">mangia</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i96" name="it24" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i96">mangiavi</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>25. C&#39;era traffico e non .... a prendere il treno.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i97" name="it25" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i97">ce l&#39;ho fatta</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i98" name="it25" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i98">ho fatto</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i99" name="it25" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i99">ce l&#39;ho fa</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i100" name="it25" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i100">ce la fai</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>26. Guido è il collega .... ti ho parlato spesso.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i101" name="it26" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i101">a cui</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i102" name="it26" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i102">con cui</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i103" name="it26" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i103">che</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i104" name="it26" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i104">di cui</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>27. L&#39;oroscopo dice che quest&#39;anno .... lavoro!<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i105" name="it27" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i105">cambiare</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i106" name="it27" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i106">cambierò</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i107" name="it27" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i107">cambiavo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i108" name="it27" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i108">cambio</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>28. Mara e Vanessa le .....alla festa?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i109" name="it28" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i109">hai invitate</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i110" name="it28" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i110">sono venute</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i111" name="it28" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i111">hanno invitato</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i112" name="it28" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i112">vanno</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>29. Se non c&#39;è spazio per la torta nel frigorifero, .... sul tavolo.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i113" name="it29" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i113">metto</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i114" name="it29" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i114">mettete</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i115" name="it29" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i115">mettila</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i116" name="it29" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i116">l’ho messo</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>30. Penso che Alberto.... l&#39;inglese meglio di me.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i117" name="it30" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i117">parla</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i118" name="it30" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i118">parlo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i119" name="it30" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i119">parli</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i120" name="it30" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i120">parle</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>31. Non dobbiamo più chiedere un prestito: i soldi .... presta mio padre.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i121" name="it31" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i121">glieli</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i122" name="it31" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i122">ce li</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i123" name="it31" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i123">te lo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i124" name="it31" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i124">me la</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>32. È un periodo importante questo: .... prendere una decisione difficile.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i125" name="it32" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i125">sto per</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i126" name="it32" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i126">sta cercando</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i127" name="it32" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i127">stai facendo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i128" name="it32" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i128">sto</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>33. Hai sbagliato a mentire. Al tuo posto, io ....la verità<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i129" name="it33" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i129">direi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i130" name="it33" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i130">avremmo detto</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i131" name="it33" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i131">dicevo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i132" name="it33" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i132">avrei detto</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>34. Oggi la qualità della vita è .... a quella di 50 anni fa.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i133" name="it34" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i133">superiore</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i134" name="it34" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i134">meglio</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i135" name="it34" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i135">minore</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i136" name="it34" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i136">migliorata</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>35. Quando sono arrivato al cinema il film .... da 10 minuti.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i137" name="it35" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i137">è iniziato</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i138" name="it35" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i138">iniziava</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i139" name="it35" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i139">era iniziato</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i140" name="it35" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i140">sono iniziato</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>36. Non .... di fare la fila per prendere i biglietti.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i141" name="it36" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i141">voleva</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i142" name="it36" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i142">ne voleva sapere</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i143" name="it36" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i143">ne sapeva</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i144" name="it36" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i144">se ne voleva</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>37. Ho preso la bicicletta perché non mi aspettavo che ....<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i145" name="it37" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i145">è piovuto</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i146" name="it37" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i146">piova</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i147" name="it37" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i147">pioveva</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i148" name="it37" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i148">piovesse</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>38. Mi hanno avvisato che i nostri bagagli non .... oggi.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i149" name="it38" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i149">possono avere spedire</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i150" name="it38" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i150">possiamo avere spediti</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i151" name="it38" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i151">potranno essere spediti</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i152" name="it38" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i152">possiamo essere spediti</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>39. Ha detto che .... volentieri un gelato, ma la gelateria era chiusa.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i153" name="it39" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i153">avrebbe mangiato</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i154" name="it39" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i154">mangierebbe</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i155" name="it39" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i155">aveva  mangiato</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i156" name="it39" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i156">mangiava</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>40. Se .... che eri a Parigi, ti avrei chiamato senz&#39;altro!<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="i157" name="it40" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="i157">sapessi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i158" name="it40" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="i158">avessi saputo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i159" name="it40" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="i159">sapevo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="i160" name="it40" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="i160">avevo saputo</label>
            </div>
        </div><hr>
        <span>3 / 4</span><br>
        <div>
            <input type="button" class="btn btn-secondary back-test" value="Back"">
            <input type="submit" class="btn btn-primary next-it-test" name="it-form" value="next">
        </div>
    </fieldset>

    <fieldset class="sp-test" disabled>
        <h3>Comience la prueba</h3>
        <div class="form-group">
           <p>1. ¿Cuál es … nombre?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s1" name="sp1" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s1">usted</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s2" name="sp1" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s2">me</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s3" name="sp1" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s3">ellos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s4" name="sp1" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s4">su</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>2. Somos españoles, somos … Barcelona<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s5" name="sp2" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s5">para</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s6" name="sp2" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s6">a</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s7" name="sp2" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s7">de</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s8" name="sp2" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s8">desde</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>3. Margarita es ... guapa y educada<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s9" name="sp3" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s9">mucho</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s10" name="sp3" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s10">muy</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s11" name="sp3" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s11">más</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s12" name="sp3" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s12">buen</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>4. ¿ … fuego?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s13" name="sp4" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s13">Tendrás</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s14" name="sp4" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s14">Tener</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s15" name="sp4" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s15">Tienes</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s16" name="sp4" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s16">Tenías</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>5. Buenas tardes señora, ¿su hija Juliana … en casa?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s17" name="sp5" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s17">ser</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s18" name="sp5" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s18">es</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s19" name="sp5" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s19">está</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s20" name="sp5" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s20">era</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>6. Mi hermano  …  actualmente en Perú<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s21" name="sp6" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s21">vivir</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s22" name="sp6" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s22">vivió</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s23" name="sp6" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s23">vivía</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s24" name="sp6" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s24">vive</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>7. ¿Por qué  … llorando?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s25" name="sp7" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s25">es</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s26" name="sp7" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s26">eres</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s27" name="sp7" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s27">eras</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s28" name="sp7" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s28">estás</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>8. ¿Dónde…a pasar tus vacaciones el próximo verano?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s29" name="sp8" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s29">va</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s30" name="sp8" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s30">vas</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s31" name="sp8" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s31">vamos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s32" name="sp8" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s32">van</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>9. Yo nunca …ido al teatro<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s33" name="sp9" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s33">ha</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s34" name="sp9" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s34">soy</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s35" name="sp9" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s35">he</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s36" name="sp9" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s36">estoy</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>10. Los relojes Seiko…en Japón<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s37" name="sp10" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s37">está fabricado</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s38" name="sp10" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s38">estaban fabricados</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s39" name="sp10" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s39">son fabricados</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s40" name="sp10" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s40">se fabrican</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>11. Ellos no  …  en casa anoche<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s41" name="sp11" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s41">estar</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s42" name="sp11" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s42">está</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s43" name="sp11" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s43">estaban</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s44" name="sp11" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s44">están</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>12. No entiendo bien. ¿Qué  … ?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s45" name="sp12" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s45">decir</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s46" name="sp12" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s46">dirás</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s47" name="sp12" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s47">has dicho</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s48" name="sp12" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s48">decho</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>13. ¿Donde  …  cuando la conociste?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s49" name="sp13" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s49">vivir</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s50" name="sp13" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s50">vive</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s51" name="sp13" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s51">vivió</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s52" name="sp13" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s52">vivía</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>14. Si lo … diré que tú llamaste: (Tú=pronombre)<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s53" name="sp14" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s53">vi</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s54" name="sp14" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s54">veo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s55" name="sp14" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s55">viendolo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s56" name="sp14" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s56">verlo</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>15. ¿Qué ... desde que llegaste?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s57" name="sp15" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s57">haces</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s58" name="sp15" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s58">has hecho</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s59" name="sp15" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s59">hacer</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s60" name="sp15" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s60">harás</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>16. Llegas tarde, tu padre te … esperando varias horas!<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s61" name="sp16" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s61">estás</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s62" name="sp16" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s62">estar</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s63" name="sp16" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s63">ha estado</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s64" name="sp16" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s64">están</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>17. Estaba muy … en venir a estudiar a Inglaterra<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s65" name="sp17" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s65">interesado</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s66" name="sp17" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s66">interesante</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s67" name="sp17" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s67">interesando</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s68" name="sp17" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s68">interés</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>18. Yo … contigo a la fiesta si no estuviera enfermo<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s69" name="sp18" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s69">voy</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s70" name="sp18" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s70">iríamos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s71" name="sp18" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s71">irían</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s72" name="sp18" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s72">iría</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>19. … viaje a Sudamérica en diciembre, aún no estoy muy seguro<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s73" name="sp19" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s73">Me voy de</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s74" name="sp19" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s74">Voy de</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s75" name="sp19" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s75">Quizás</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s76" name="sp19" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s76">Nos vamos de</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>20. … ejercicio es bueno para la salud.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s77" name="sp20" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s77">Haciendo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s78" name="sp20" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s78">Hacía</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s79" name="sp20" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s79">Hacer</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s80" name="sp20" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s80">Haces</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>21. Cuando era niño … a la escuela a pie<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s81" name="sp21" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s81">iríamos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s82" name="sp21" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s82">íbamos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s83" name="sp21" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s83">fuimos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s84" name="sp21" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s84">vamos</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>22. Ella … viviendo en Colombia cinco meses antes de venir<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s85" name="sp22" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s85">estando</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s86" name="sp22" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s86">estar</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s87" name="sp22" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s87">está</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s88" name="sp22" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s88">estuvo</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>23. Llegaste tarde a tu cita. No  …  dormir tanto<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s89" name="sp23" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s89">dibiste</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s90" name="sp23" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s90">deberías</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s91" name="sp23" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s91">debiendo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s92" name="sp23" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s92">debieras</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>24. Cuando era estudiante en Londres … en el metro<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s93" name="sp24" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s93">viajaria</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s94" name="sp24" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s94">viaje</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s95" name="sp24" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s95">viajar</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s96" name="sp24" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s96">viajaba</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>25. Si … trabajando viajaría mas<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s97" name="sp25" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s97">no soy</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s98" name="sp25" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s98">no fuera</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s99" name="sp25" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s99">no estuviera</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s100" name="sp25" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s100">no estaba</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>26. Mientras tú llegabas aquí …..<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s101" name="sp26" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s101">él se ido</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s102" name="sp26" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s102">él se va</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s103" name="sp26" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s103">él se fue</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s104" name="sp26" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s104">él se iría</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>27. ¿Es posible que … construido por una persona que desconoce los sistemas informáticos?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s105" name="sp27" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s105">fuera</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s106" name="sp27" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s106">era</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s107" name="sp27" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s107">fue</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s108" name="sp27" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s108">estaba</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>28. No te olvides … comprarme el periódico<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s109" name="sp28" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s109">a</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s110" name="sp28" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s110">para</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s111" name="sp28" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s111">de</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s112" name="sp28" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s112">con</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>29. Siempre que tocan el timbre, el perro … hacia la puerta<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s113" name="sp29" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s113">correr</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s114" name="sp29" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s114">corre</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s115" name="sp29" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s115">corrió</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s116" name="sp29" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s116">corría</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>30. Eva es una experta de la …<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s117" name="sp30" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s117">industrias de alimentos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s118" name="sp30" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s118">industria de alimentos</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s119" name="sp30" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s119">industria de alimento</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s120" name="sp30" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s120">industriales de alimento</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>31. Vendí mi coche para  …   dinero<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s121" name="sp31" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s121">ahorraba</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s122" name="sp31" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s122">ahorro</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s123" name="sp31" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s123">ahorrar</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s124" name="sp31" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s124">ahorre</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>32. Ella me aconsejo que … al médico<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s125" name="sp32" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s125">visitar</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s126" name="sp32" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s126">visitara</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s127" name="sp32" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s127">visitando</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s128" name="sp32" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s128">visité</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>33. Ya me … cuando me llamaste<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s129" name="sp33" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s129">levanté</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s130" name="sp33" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s130">había levantado</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s131" name="sp33" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s131">levante</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s132" name="sp33" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s132">era levantado</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>34. Voy a una boda. Necesito … el pelo<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s133" name="sp34" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s133">cortarme</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s134" name="sp34" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s134">cortar</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s135" name="sp34" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s135">me corten</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s136" name="sp34" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s136">cortando</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>35. ¿Qué te gusta  …  , el oro o la plata?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s137" name="sp35" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s137">muy</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s138" name="sp35" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s138">mejor</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s139" name="sp35" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s139">más</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s140" name="sp35" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s140">mucho</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>36. ¿Le … volver a contactar conmigo por teléfono?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s141" name="sp36" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s141">importaría</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s142" name="sp36" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s142">importa</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s143" name="sp36" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s143">importante</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s144" name="sp36" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s144">Importará</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>37. Me … recorrer el Mediterráneo en moto el próximo verano<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s145" name="sp37" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s145">gustaba</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s146" name="sp37" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s146">gusta</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s147" name="sp37" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s147">gustaría</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s148" name="sp37" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s148">gustará</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>38. Yo no creo que los jóvenes de mi país … tanto alcohol<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s149" name="sp38" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s149">consumen</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s150" name="sp38" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s150">consuman</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s151" name="sp38" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s151">consumiendo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s152" name="sp38" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s152">consumir</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>39. ¿Prosopopéyico?   ¡Nunca … esa palabra!<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s153" name="sp39" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s153">escuchaba</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s154" name="sp39" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s154">había escuchado</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s155" name="sp39" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s155">hubiera escuchado</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s156" name="sp39" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s156">habría escuchado</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>40. Ojalá alguien me … flores por  mi cumpleaños<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="s157" name="sp40" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="s157">regalo</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s158" name="sp40" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="s158">regala</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s159" name="sp40" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="s159">regale</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="s160" name="sp40" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="s160">regalar</label>
            </div>
        </div><hr>
        <span>3 / 4</span><br>
        <div>
            <input type="button" class="btn btn-secondary back-test" value="Back"">
            <input type="submit" class="btn btn-primary next-sp-test" name="sp-form" value="next">
        </div>
    </fieldset>

    <fieldset class="ru-test" disabled>
        <h3>Начать тест</h3>
        <div class="form-group">
           <p>1. Как ... зовут?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r1" name="ru1" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r1">Вас</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r2" name="ru1" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r2">она</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r3" name="ru1" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r3">ты</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r4" name="ru1" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r4">твой</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>2. Мы русские, мы ... Москвы.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r5" name="ru2" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r5">для</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r6" name="ru2" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r6">из</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r7" name="ru2" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r7">в</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r8" name="ru2" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r8">на</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>3.Джейн ... приятная, вежливая девушка.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r9" name="ru3" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r9">так</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r10" name="ru3" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r10">от</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r11" name="ru3" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r11">очень</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r12" name="ru3" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r12">на</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>4. ... зажигалка?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r13" name="ru4" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r13">Ты есть</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r14" name="ru4" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r14">Тебе есть</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r15" name="ru4" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r15">У Вас есть</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r16" name="ru4" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r16">Вам есть</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>5. Марина обычно ... на автобусе.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r17" name="ru5" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r17">не ездит</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r18" name="ru5" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r18">не едет</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r19" name="ru5" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r19">нет</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r20" name="ru5" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r20">не будут</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>6. Они ... дома вчера вечером.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r21" name="ru6" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r21">нет</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r22" name="ru6" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r22">не бывают</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r23" name="ru6" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r23">не будут</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r24" name="ru6" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r24">не были</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>7. Что Вы ... ?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r25" name="ru7" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r25">говорю</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r26" name="ru7" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r26">говорим</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r27" name="ru7" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r27">скажут</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r28" name="ru7" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r28">сказали</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>8. Где ты ...?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r29" name="ru8" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r29">завтракаешь</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r30" name="ru8" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r30">завтракают</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r31" name="ru8" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r31">завтракали</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r32" name="ru8" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r32">завтракать</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>9. Где ты  ... отдыхать летом ?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r33" name="ru9" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r33">буду</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r34" name="ru9" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r34">будешь</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r35" name="ru9" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r35">будем</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r36" name="ru9" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r36">будете</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>10. Я никогда  .... в театре.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r37" name="ru10" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r37">буду</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r38" name="ru10" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r38">будешь</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r39" name="ru10" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r39">могу</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r40" name="ru10" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r40">не был</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>11. Эти часы ... в Японии.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r41" name="ru11" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r41">делают</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r42" name="ru11" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r42">делаем</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r43" name="ru11" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r43">делать</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r44" name="ru11" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r44">сделаешь</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>12. Где он ... когда вы встретили его?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r45" name="ru12" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r45">живет</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r46" name="ru12" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r46">жила</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r47" name="ru12" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r47">жил</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r48" name="ru12" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r48">живут</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>13. Если я ..., я скажу, что Вы звонили.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r49" name="ru13" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r49">вижу его</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r50" name="ru13" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r50">встречу его</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r51" name="ru13" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r51">встретил его</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r52" name="ru13" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r52">встретился</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>14. Что ты ... с тех пор как приехал?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r53" name="ru14" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r53">сделал</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r54" name="ru14" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r54">будешь делать</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r55" name="ru14" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r55">сделаешь</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r56" name="ru14" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r56">сделали</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>15. Вино... в Италии в течение тысяч лет.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r57" name="ru15" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r57">производят</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r58" name="ru15" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r58">будут производить</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r59" name="ru15" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r59">произведут</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r60" name="ru15" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r60">произвожу</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>16. Мой муж ... в Испании.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r61" name="ru16" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r61">сейчас  жил</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r62" name="ru16" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r62">проживет</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r63" name="ru16" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r63">раньше жил</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r64" name="ru16" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r64">прожили</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>17. Если бы я ... , я бы чаще ходил в клуб.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r65" name="ru17" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r65">не был женат</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r66" name="ru17" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r66">не женюсь</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r67" name="ru17" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r67">жениться</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r68" name="ru17" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r68">уже женат</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>18. Я очень ... этой историей.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r69" name="ru18" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r69">интерес</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r70" name="ru18" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r70">интересный</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r71" name="ru18" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r71">интересовался</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r72" name="ru18" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r72">интересно</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>19. Вам ... приходить, если Вы не хотите.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r73" name="ru19" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r73">не надо</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r74" name="ru19" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r74">не можно</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r75" name="ru19" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r75">неважно</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r76" name="ru19" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r76">не надо было</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>20. Я... увижу тебя завтра.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r77" name="ru20" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r77">может быть</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r78" name="ru20" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r78">буду</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r79" name="ru20" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r79">могу</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r80" name="ru20" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r80">могу быть</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>21. ... вредно.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r81" name="ru21" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r81">Курить</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r82" name="ru21" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r82">Куришь</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r83" name="ru21" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r83">Курящий</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r84" name="ru21" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r84">Курильщик</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>22. Я ... сказал ему об этом, если бы знал, что он твой брат.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r85" name="ru22" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r85">не</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r86" name="ru22" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r86">не буду</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r87" name="ru22" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r87">бы не</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r88" name="ru22" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r88">не нужно</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>23. Он ... там три года перед тем, как его нашли.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r89" name="ru23" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r89">прожил</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r90" name="ru23" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r90">живет</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r91" name="ru23" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r91">может быть живет</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r92" name="ru23" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r92">мог бы жил</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>24. ... все время!<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r93" name="ru24" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r93">Не кричи</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r94" name="ru24" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r94">Не кричит</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r95" name="ru24" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r95">Не кричал бы</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r96" name="ru24" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r96">Не прокричал</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>25. Когда Вы вернетесь, ... .<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r97" name="ru25" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r97">Он уехал</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r98" name="ru25" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r98">Он уедет</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r99" name="ru25" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r99">Он едет</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r100" name="ru25" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r100">Он поехал</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>26. Этот дом ... построен в 16 веке.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r101" name="ru26" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r101">Возможно, был</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r102" name="ru26" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r102">могут быть,</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r103" name="ru26" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r103">может будет</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r104" name="ru26" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r104">Возможно будут</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>27. Не забудь ... мне газету.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r105" name="ru27" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r105">покупка</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r106" name="ru27" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r106">чтобы купить</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r107" name="ru27" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r107">купил</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r108" name="ru27" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r108">купить</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>28. Когда приходил гость, собака каждый раз ... к двери.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r109" name="ru28" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r109">побежала</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r110" name="ru28" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r110">бежит</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r111" name="ru28" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r111">подбегала</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r112" name="ru28" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r112">бегает</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>29. Он работает ... .<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r113" name="ru29" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r113">в автомобильной промышленности</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r114" name="ru29" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r114">автомобильная промышленность</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r115" name="ru29" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r115">автомобильные промышленностиүю</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r116" name="ru29" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r116">автомобильные промышленности</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>30. Пётр продал машину,  ... сэкономить деньги.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r117" name="ru30" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r117">в результате</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r118" name="ru30" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r118">что</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r119" name="ru30" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r119">чтобы</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r120" name="ru30" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r120">потому что</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>31. Он посоветовал мне ... врачу.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r121" name="ru31" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r121">что я пошел к</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r122" name="ru31" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r122">обратиться к</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r123" name="ru31" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r123">увидеться</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r124" name="ru31" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r124">увидеть</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>32.  Я ... на автобусе.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r125" name="ru32" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r125">не привык ездить</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r126" name="ru32" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r126">не привыкал ехать</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r127" name="ru32" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r127">привык поехать</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r128" name="ru32" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r128">не привыкать ездил</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>33. Он не пришёл вчера. Жаль, что он  ...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r129" name="ru33" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r129">не приходил</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r130" name="ru33" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r130">не пришёл</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r131" name="ru33" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r131">пришёл</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r132" name="ru33" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r132">не приходил</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>34. Я иду на свадьбу. Мне нужно ... <p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r133" name="ru34" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r133">стричь волосы</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r134" name="ru34" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r134">стрижка</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r135" name="ru34" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r135">подстричься</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r136" name="ru34" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r136">подстригаться</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>35. Что бы ты  ..., золото или серебро?<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r137" name="ru35" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r137">предпочитать</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r138" name="ru35" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r138">хочешь</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r139" name="ru35" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r139">скорее всего хотел</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r140" name="ru35" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r140">лучше хочу</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>36. Моя сестра в больнице. Интересно, как она ... .<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r141" name="ru36" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r141">себя чувствует</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r142" name="ru36" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r142">чувствует</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r143" name="ru36" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r143">чувствительна</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r144" name="ru36" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r144">чувство</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>37. Он сказал, что ... ехать на автобусе.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r145" name="ru37" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r145">беспокоится</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r146" name="ru37" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r146">беспокоится о том</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r147" name="ru37" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r147">не против того, чтобы</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r148" name="ru37" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r148">не возражать</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>38. Хотя мальчик признался в своем преступлении, судья ...его.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r149" name="ru38" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r149">выпустил</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r150" name="ru38" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r150">впустил</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r151" name="ru38" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r151">отпустил</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r152" name="ru38" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r152">распустил</label>
            </div>
        </div><hr>
        
        <div class="form-group">
           <p>39. Я никогда не … с этим словом раньше.<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r153" name="ru39" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r153">проталкивался</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r154" name="ru39" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r154">сталкивался</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r155" name="ru39" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r155">отталкивался</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r156" name="ru39" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r156">переталкивался</label>
            </div>
        </div><hr>
        <div class="form-group">
           <p>40. Студент долго пытался ответить на вопрос, но в конце концов ...<p>
            <div class="custom-control custom-radio">
                <input type="radio" id="r157" name="ru40" class="custom-control-input" value="a"
                       required>
                <label class="custom-control-label" for="r157">выдал</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r158" name="ru40" class="custom-control-input" value="b"
                       required>
                <label class="custom-control-label" for="r158">передал</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r159" name="ru40" class="custom-control-input" value="c"
                       required>
                <label class="custom-control-label" for="r159">сдался</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="r160" name="ru40" class="custom-control-input" value="d"
                       required>
                <label class="custom-control-label" for="r160">поддался</label>
            </div>
        </div><hr>
        <span>3 / 4</span><br>
        <div>
            <input type="button" class="btn btn-secondary back-test" value="Back"">
            <input type="submit" class="btn btn-primary next-ru-test" name="ru-form" value="next">
        </div>
    </fieldset>

    <fieldset class="result">

    	<div>
    		<input type="text" id="result" name="score" style="display: none;">
    	</div>
        <div>
            <p>THANK YOU! <br>Please press "register" button to save the test.<br>
                يرجى الضغط على زر "تسجيل" لحفظ الاختبار
            </p>
        </div>
        <br>
    </fieldset>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script  src="js/main.js"></script>

</body>
</html>