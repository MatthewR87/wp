<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="js/main.js"></script>
    <title>Gallery</title>
</head>

<body>

    <?php
    include_once("includes/header.inc");
    ?>

    <main>
        <div>
            <h2 class="g1">
                Pets Victoria has a to offer!
            </h2>

            <p>
                FOR ALMOST TWO DECADES, PETS VICTORIA HAS HELPED IN CREATING TRUE SOCIAL CHANGE
                BY BRINGING PET ADOPTION INTO THE MAINSTREAM. OUR WORK HAS HELPED MAKE A
                DIFFERENCE TO THE VICTORIAN RESCUE COMMUNITY AND THOUSANDS OF PETS IN NEED OF RESCUE
                AND REHABILITATION. BUT, UNTIL EVERY PET IS SAFE, RESPECTED, AND LOVED, WE ALL
                STILL HAVE BIG, HAIRY WORK TO DO.
            </p>
        </div>

        <div class="gallery">
            <div class="gallery-item">
                <img src="./images/cat1.jpeg" alt="Pet 1">
                <p>Milo</p>
            </div>
            <div class="gallery-item">
                <img src="./images/dog1.jpeg" alt="Pet 2">
                <p>Baxter</p>
            </div>
            <div class="gallery-item">
                <img src="./images/cat2.jpeg" alt="Pet 3">
                <p>Luna</p>
            </div>
            <div class="gallery-item">
                <img src="./images/dog2.jpeg" alt="Pet 4">
                <p>Willow</p>
            </div>
            <div class="gallery-item">
                <img src="./images/cat4.jpeg" alt="Pet 5">
                <p>Oliver</p>
            </div>
            <div class="gallery-item">
                <img src="./images/dog3.jpeg" alt="Pet 6">
                <p>Bella</p>
            </div>
        </div>
    </main>

    <?php
    include_once("includes/footer.inc");
    ?>
</body>

</html>