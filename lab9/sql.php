    <?php
    include 'top.php';
    ?>
        <main>
            <p>Create Table SQL</p>
        <pre>
        CREATE TABLE tblComplimentIdeas (
            pmkComplimentIdeasId INT NOT NULL
            AUTO_INCREMENT PRIMARY KEY,
            fldPersonality VARCHAR(12),
            fldAppearance VARCHAR(6),
            fldLifestyle VARCHAR(15)
        )
        </pre>
        <h2>Insert Data</h2>
        <pre>
        INSERT INTO tblComplimentIdeas (fldPersonality, fldAppearance, fldLifestyle) VALUES
        ("Kindness", "Outfit", "Doing great"),
        ("Intelligence", "Hair", "Work ethic"),
        ("Funny", "Smile", "Time management")
        </pre>

        <h2>Select Data</h2>
        <pre>
        SELECT fldPersonality, fldAppearance, fldLifestyle FROM tblComplimentIdeas
        </pre>
        </main>
    <?php
    include 'footer.php';
    ?>


        