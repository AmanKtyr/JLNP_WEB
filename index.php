<?php 
include 'includes/db.php'; // Database Connection
include 'includes/functions.php'; // Functions File
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Website</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section id="slider">
        <!-- Slider Content Here -->
    </section>

    <section id="features">
        <div class="container">
            <h2>Our Features</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fa fa-book fa-3x"></i>
                        <h3>Quality Education</h3>
                        <p>We provide quality education to our students to ensure their academic and personal growth.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fa fa-clock-o fa-3x"></i>
                        <h3>Flexible Timings</h3>
                        <p>We offer flexible timings to our students so that they can manage their studies and other activities.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <i class="fa fa-users fa-3x"></i>
                        <h3>Dedicated Faculty</h3>
                        <p>Our faculty members are highly qualified and dedicated to helping our students achieve their goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="courses">
        <div class="container">
            <h2>Our Courses</h2>
            <div class="row">
                <?php 
                    $query = "SELECT * FROM courses";
                    $result = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <div class="col-md-4">
                    <div class="course-box">
                        <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>">
                        <h3><?php echo $row['name']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <a href="course-details.php?id=<?php echo $row['id']; ?>">View Details</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>
