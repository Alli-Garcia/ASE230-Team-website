<?php
// INSERT DATA HERE.
function calculateAge($dateOfBirth) {
    $dob = new DateTime($dateOfBirth);
    $currentDate = new DateTime();
    $age = $currentDate->diff($dob)->y;
    return $age;
}
function generateCard($i,$team) {	
	$age = calculateAge($team[$i]['birthday']);
	echo '<header class="resume-header pt-4 pt-md-0">
	     <div class="row">
		 <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
		     <img class="picture" src="' . $team[$i]['photo'] . '" alt="' . $team[$i]['name'] . '"><!--//to do:add source in php-->
		 </div><!--//col-->
		 <div class="col">
		     <div class="row p-4 justify-content-center justify-content-md-between">
			 <div class="primary-info col-auto">
			     <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">' . $team[$i]['name'] . '</h1><!--//name line-->
			     <div class="title mb-3">' . $team[$i]['role'] . '</div><!--//role line-->
			     <div class="title mb-3">Age: ' . $age . ' years</div>
			     <a href=detail.php?index=' . $i . ' class="btn btn-secondary">' . $team[$i]['profile'] . '</a><!--//Link the index page to the detail page using a different GET value for each person-->
			 </div><!--//primary-info-->
			 <div class="secondary-info col-auto mt-2">' . $team[$i]['secondaryInfo'] . '</div><!--//secondary-info-->
		     </div><!--//row-->
		 </div><!--//col-->
	     </div><!--//row-->
	 </header>
	 <br>';             
}

$team = [
    [
        'photo' => 'assets/images/profile0.jpg',
        'name' => 'Kori McClure',
        'role' => 'CIT Student at NKU',
        'secondaryInfo' => 'Team Member',
        'profile' => 'View Profile',
        'birthday' => '03/17/1997'
    ],
    [
        'photo' => 'assets/images/headshot.jpg',
        'name' => 'Alli Garcia',
        'role' => 'ASE Student at NKU',
        'secondaryInfo' => 'Team Member',
        'profile' => 'View Profile',
        'birthday' => '08/19/2002'
    ],
    [
        'photo' => 'assets/images/profile2.jpg',
        'name' => 'Cody King',
        'role' => 'ASE Student at NKU',
        'secondaryInfo' => 'Team Member',
        'profile' => 'View Profile',
        'birthday' => '10/12/2002'
    ],
    [
        'photo' => 'assets/images/profile3.jpg',
        'name' => 'Dillon Beckerich',
        'role' => 'COI Student',
        'secondaryInfo' => 'Team Member',
        'profile' => 'View Profile',
        'birthday' => '01/14/2001'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our amazing team</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head>

<body>

    <article class="resume-wrapper text-center position-relative">
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
            <h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
				<?php for($i = 0; $i < count($team); $i++){generateCard($i,$team);};?><!--iterates through team and displays a card for each member.-->
        </div>
    </article>

    <footer class="footer text-center pt-2 pb-5">
        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Kori, Alli, Cody, and Dillon</small>
    </footer>

</body>

</html>
