<?php
// Function to calculate team member's age based on their DOB
function calculateAge($dob) {
    $birthDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;
    return $age;
}

// Team data with added date of birth (DOB)
$team = [
    [
        "id" => 1,
        "name" => "Dramane Doumbia",
        "role" => "Lead Developer",
        "img" => "assets/images/dramane.jpg",
        "dob" => "1990-01-15",  // Added DOB for age calculation
        "profile_link" => "detail.php?id=1"
    ],
    [
        "id" => 2,
        "name" => "Cristiano",
        "role" => "UI/UX Designer",
        "img" => "assets/images/Cristiano.jpg",
        "dob" => "1992-02-05",  // Added DOB for age calculation
        "profile_link" => "detail.php?id=2"
    ],
    [
        "id" => 3,
        "name" => "RonaldoR9",
        "role" => "Project Manager",
        "img" => "assets/images/Ronaldor9.jpg",
        "dob" => "1985-03-22",  // Added DOB for age calculation
        "profile_link" => "detail.php?id=3"
    ]
];
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Tiger Team - Individual</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dramane Doumbia's resume">
    <meta name="author" content="Dramane Doumbia">    
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
            <h1 class="py-4 text-center">Tiger Team - Individual</h1>
            <?php foreach ($team as $member): ?>
                <header class="resume-header pt-4 pt-md-0">
                    <div class="row">
                        <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                            <img class="picture" src="<?php echo htmlspecialchars($member['img']); ?>" alt="">
                        </div><!--//col-->
                        <div class="col">
                            <div class="row p-4 justify-content-center justify-content-md-between">
                                <div class="primary-info col-auto">
                                    <h1 class="name mt-0 mb-1 text-white text-uppercase"><?php echo htmlspecialchars($member['name']); ?></h1>
                                    <div class="title mb-3"><?php echo htmlspecialchars($member['role']); ?></div>
                                    <div class="mb-3">Age: <?php echo calculateAge($member['dob']); ?></div> <!-- Display age -->
                                    <a href="<?php echo htmlspecialchars($member['profile_link']); ?>" class="btn btn-secondary">See full profile</a>
                                </div><!--//primary-info-->
                                <div class="secondary-info col-auto mt-2">
                                </div><!--//secondary-info-->
                            </div><!--//row-->
                        </div><!--//col-->
                    </div><!--//row-->
                </header>
            <?php endforeach; ?>
        </div>
    </article> 

    <footer class="footer text-center pt-2 pb-5">
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> Dramane Doumbia </small>
    </footer>
</body>
</html>
