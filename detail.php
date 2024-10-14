<?php
// Define the array of team members
$team = [
    [
        "id" => 1,
        "name" => "Dramane Doumbia",
        "title" => "Database Developer",
        "email" => "ddoumbia@gmail.com",
        "phone" => "+15139654123",
        "linkedin" => "https://www.linkedin.com/in/dramane-doumbia-7a0839161/",
        "github" => "https://github.com/ddoumbia/DRAMANE_DOUMBIA",
        "website" => "https://sites.google.com/view/dramanedoumbia/project-page",
        "profile_picture" => "https://media.licdn.com/dms/image/v2/C4E03AQH5lRdDHkxNIQ/profile-displayphoto-shrink_800_800/profile-displayphoto-shrink_800_800/0/1661216638552?e=1730332800&v=beta&t=rFP1oBKSrONZUORUGj1koWsZsiRf-ATsCTKUGUwKJUk",
        "dob" => "1990-01-15", // Added DOB for age calculation
        "summary" => "Personnel Specialist (PS) provides enlisted personnel with information and counseling related to Navy occupations, opportunities for general education and job training, requirements for promotion, and rights and benefits.",
        "experience" => [
            [
                "position" => "US Navy Personnel Specialist",
                "company" => "US Navy",
                "time" => "2021 - Present",
                "description" => "Results-driven personnel specialist professional with more than 5 years of experience, committed to delivering innovative solutions and exceeding performance targets through a blend of analytical skills and creative problem solving.",
                "achievements" => [
                    "Assisted with the daily operation of sales including cash management.",
                    "Entered and maintained information in the book for daily transactions."
                ],
                "technologies" => ["SQL", "SalesForce"]
            ],
            [
                "position" => "Database Developer",
                "company" => "Speedway",
                "time" => "2020 - 2021",
                "description" => "Developed and maintained SQL queries using MS SQL Server. Collaborated with other interns to define project requirements and deliver high-quality software applications.",
                "achievements" => [
                    "Played a key role in the successful launch of a new software application.",
                    "Improved application scalability and performance through effective optimization techniques."
                ],
                "technologies" => ["JavaScript", "MS SQL"]
            ]
        ],
        "education" => [
            [
                "degree" => "Associate of Applied Science in Business Programming and System Analysis",
                "institution" => "Cincinnati State Technical and Community College",
                "time" => "2016 - 2019"
            ]
        ],
        "skills" => ["Problem-Solving", "Creative Thinking", "Leadership"]
    ],
    [
        "id" => 2,
        "name" => "Cristiano",
        "title" => "UI/UX Designer",
        "email" => "cristianoCR7@example.com",
        "phone" => "+15139654124",
        "linkedin" => "https://www.linkedin.com/in/cristiano/",
        "github" => "https://github.com/cristiano/",
        "website" => "https://www.britannica.com/biography/Cristiano-Ronaldo",
        "profile_picture" => "https://images3.alphacoders.com/970/thumb-1920-970666.jpg",
        "dob" => "1992-02-05",
        "summary" => "Creative UI/UX Designer with a passion for designing user-centric digital experiences.",
        "experience" => [
            [
                "position" => "UI/UX Designer and Developer",
                "company" => "Creative Agency",
                "time" => "2019 - Present",
                "description" => "Designing intuitive and visually appealing user interfaces for web and mobile applications.",
                "achievements" => [
                    "Redesigned the user interface for a major e-commerce platform.",
                    "Improved user engagement by 30% through design enhancements."
                ],
                "technologies" => ["Adobe acrobat", "Figma"]
            ]
        ],
        "education" => [
            [
                "degree" => "Bachelor in Graphic Design",
                "institution" => "Old Dominion University",
                "time" => "2015 - 2019"
            ]
        ],
        "skills" => ["Design Thinking", "Prototyping", "User Research"]
    ],
    [
        "id" => 3,
        "name" => "RonaldoR9",
        "title" => "Project Manager",
        "email" => "ronaldor9@example.com",
        "phone" => "+15139654526",
        "linkedin" => "https://www.linkedin.com/in/ronaldor9/",
        "github" => "https://github.com/ronaldor9/",
        "website" => "https://en.wikipedia.org/wiki/Ronaldo_(Brazilian_footballer)",
        "profile_picture" => "https://wallpaperaccess.com/full/2025920.jpg",
        "dob" => "1985-03-22",
        "summary" => "Experienced Project Manager with a track record of successful project delivery and team leadership.",
        "experience" => [
            [
                "position" => "Project Manager",
                "company" => "Tech Solutions",
                "time" => "2017 - Present",
                "description" => "Leading cross-functional teams to deliver complex projects on time and within budget.",
                "achievements" => [
                    "Managed a project that increased company revenue by 20%.",
                    "Implemented a new project management tool that improved team productivity."
                ],
                "technologies" => ["JIRA", "Monday"]
            ]
        ],
        "education" => [
            [
                "degree" => "Master of Business Administration",
                "institution" => "Business School",
                "time" => "2013 - 2018"
            ]
        ],
        "skills" => ["Leadership", "Financial Management", "Risk Assessment"]
    ]
];

// Function to calculate team member's age based on their DOB
function calculateAge($dob) {
    $birthDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;
    return $age;
}

// Retrieve the team member's ID from the GET request
$id = isset($_GET['id']) ? intval($_GET['id']) : 1; // Default to 1 if no ID is provided

// Find the team member by ID
$member = null;
foreach ($team as $person) {
    if ($person['id'] == $id) {
        $member = $person;
        break;
    }
}

// Display an error message if the member was not found
if (!$member) {
    echo "Team member not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo htmlspecialchars($member['name']); ?> - Profile</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Resume of <?php echo htmlspecialchars($member['name']); ?>">
    <meta name="author" content="<?php echo htmlspecialchars($member['name']); ?>">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">
	
    <style>
        .picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .section-title {
            font-weight: bold;
            margin-top: 20px;
        }
        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }
        .list-unstyled li {
            margin-bottom: 10px;
        }
    </style>
	
</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
        <div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
        <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
            <header class="resume-header pt-4 pt-md-0">
                <div class="row">
                    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
                        <img class="picture" src="<?php echo htmlspecialchars($member['profile_picture']); ?>" alt="Profile Picture of <?php echo htmlspecialchars($member['name']); ?>">
                    </div><!--//col-->
                    <div class="col">
                        <div class="row p-4 justify-content-center justify-content-md-between">
                            <div class="primary-info col-auto">
                                <h1 class="name mt-0 mb-1 text-white text-uppercase"><?php echo htmlspecialchars($member['name']); ?></h1>
                                <div class="title mb-3"><?php echo htmlspecialchars($member['title']); ?></div>
                                <div class="mb-3">Age: <?php echo calculateAge($member['dob']); ?></div> <!-- Display age -->
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a class="text-link" href="mailto:<?php echo htmlspecialchars($member['email']); ?>"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo htmlspecialchars($member['email']); ?></a></li>
                                    <li class="mb-2"><a class="text-link" href="tel:<?php echo htmlspecialchars($member['phone']); ?>"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo htmlspecialchars($member['phone']); ?></a></li>
                                    <li class="mb-2"><a class="text-link" href="<?php echo htmlspecialchars($member['linkedin']); ?>" target="_blank"><i class="fab fa-linkedin fa-fw me-2" data-fa-transform="grow-6"></i>LinkedIn</a></li>
                                    <li class="mb-2"><a class="text-link" href="<?php echo htmlspecialchars($member['github']); ?>" target="_blank"><i class="fab fa-github fa-fw me-2" data-fa-transform="grow-6"></i>GitHub</a></li>
                                    <li class="mb-2"><a class="text-link" href="<?php echo htmlspecialchars($member['website']); ?>" target="_blank"><i class="fas fa-globe fa-fw me-2" data-fa-transform="grow-6"></i>Website</a></li>
                                </ul>
                            </div><!--//primary-info-->
                        </div><!--//row-->
                    </div><!--//col-->
                </div><!--//row-->
            </header><!--//resume-header-->
            <div class="resume-body">
                <section class="summary-section">
                    <h2 class="section-title">Summary</h2>
                    <p><?php echo htmlspecialchars($member['summary']); ?></p>
                </section><!--//summary-section-->

                <section class="education-section">
                    <h2 class="section-title">Education</h2>
                    <ul class="list-unstyled">
                        <?php foreach ($member['education'] as $education): ?>
                            <li>
                                <strong><?php echo htmlspecialchars($education['degree']); ?></strong><br>
                                <?php echo htmlspecialchars($education['institution']); ?>, <?php echo htmlspecialchars($education['time']); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </section><!--//education-section-->

                <section class="skills-section">
                    <h2 class="section-title">Skills</h2>
                    <ul class="list-unstyled">
                        <?php foreach ($member['skills'] as $skill): ?>
                            <li><?php echo htmlspecialchars($skill); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </section><!--//skills-section-->
				
				 <section class="experience-section">
                    <h2 class="section-title">Experience</h2>
                    <?php foreach ($member['experience'] as $experience): ?>
                        <div class="experience-item">
                            <h3><?php echo htmlspecialchars($experience['position']); ?> at <?php echo htmlspecialchars($experience['company']); ?></h3>
                            <div class="time"><?php echo htmlspecialchars($experience['time']); ?></div>
                            <p class="description"><?php echo htmlspecialchars($experience['description']); ?></p>
                            <strong>Achievements:</strong>
                            <ul class="list-unstyled">
                                <?php foreach ($experience['achievements'] as $achievement): ?>
                                    <li><?php echo htmlspecialchars($achievement); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <strong>Technologies:</strong>
                            <ul class="list-unstyled">
                                <?php foreach ($experience['technologies'] as $tech): ?>
                                    <li><?php echo htmlspecialchars($tech); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div><!--//experience-item-->
                    <?php endforeach; ?>
                </section><!--//experience-section-->
				
            </div><!--//resume-body-->
        </div><!--//resume-wrapper-inner-->
    </article><!--//resume-wrapper-->
</body>
</html>
