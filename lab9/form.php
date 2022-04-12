    <?php
    include 'top.php';

    $favoriteKindnesses = array('Words of affirmation', 'Acts of service', 'Giving gifts');

    // initialize variables 
    $dataIsGood = false;
    $firstName = '';
    $age = '';
    $email = '';
    $beenBullied = 'No';
    $bullied = 'No';
    $favoriteKindness = 'Words of affirmation';
    $empathetic = false;
    $caring = false;
    $openMinded = false;
    $approachable = false;
    $whyKind = '';

    function getData($field) {
        if (!isset($_POST[$field])) {
            $data = "";
        } 
        else {
            $data = trim($_POST[$field]);
            $data = htmlspecialchars($data);
        }
        return $data;
    }

    function verifyAlphaNum($testString) {
        // Check for letters, numbers and dash, period, space and single quote only.
        // added & ; and # as a single quote sanitized with html entities will have 
        // this in it bob's will be come bob's
        return (preg_match ("/^([[:alnum:]]|-|\.| |\'|&|;|#)+$/", $testString));
    }
    ?>
        <section class="header-img">
                <h2>Why Do You Think We Should be Kind?</h2>
        </section>
        <main>
            <section>
                <cite><a href="https://unsplash.com/photos/rd5uNIUJCF0" target="_blank">Unsplash</a></cite>
                <h2>Survey</h2>
                <p>We are collecting information on why people think that we should be kind</p>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    // sanitize data
                    $firstName = getData('txtFirstName');
                    $age = getData('txtAge');
                    $email = getData('txtEmail');
                    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                    $beenBullied = getData('radBeenBullied');
                    $bullied = getData('radBullied');
                    $favoriteKindness = getData('lstFavoriteKindness');
                    $empathetic = (int) getData('chkEmpathetic');
                    $caring = (int) getData('chkCaring');
                    $openMinded = (int) getData('chkOpenMinded');
                    $approachable = (int) getData('chkApproachable');
                    $whyKind = getData('txtWhyKind');

                    // validate form
                    $dataIsGood = true;
                    if ($firstName == '') {
                        print('<p class="mistake">Please enter your first name.</p>');
                        $dataIsGood = false;
                    } elseif (!verifyAlphaNum($firstName))) {
                        print'<p class="mistake">Your first name contains extra characters that are 
                        not allowed. Use only letters, numbers, hyphen, and a space. </p>');
                        $dataIsGood = false;
                    }

                    if ($age == '') {
                        print('<p class="mistake">Please enter your age.</p>');
                        $dataIsGood = false;
                    } elseif (!verifyAlphaNum($age))) {
                        print'<p class="mistake">Your age contains extra characters that are 
                        not allowed. Use only letters, numbers, hyphen, and a space. </p>');
                        $dataIsGood = false;
                    }

                    if ($email == '') {
                        print('<p class="mistake">Please enter your email.</p>');
                        $dataIsGood = false;
                    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo "Email address is not valid.";
                    }

                    if ($beenBullied != 'No' AND $beenBullied != 'Yes') {
                        print('<p class="mistake">Please choose an option.</p>');
                        $dataIsGood = false;
                    }

                    if ($bullied != 'No' AND $bullied != 'Yes' AND $bullied != 'Prefer') {
                        print('<p class="mistake">Please choose an option.</p>');
                        $dataIsGood = false;
                    }

                    if ($favoriteKindness == '') {
                        print('<p class="mistake">Please choose a favorite act of kindness</p>');
                        $dataIsGood = false;
                    } 
                    elseif (!in_array($favoriteKindness, $favoriteKindnesses)) {
                        print('<p class="mistake">Please choose a favorite act of kindness</p>');
                        $dataIsGood = false;
                    }

                    $totalChecked = 0;

                    if ($empathetic != 1) $empathetic = 0;
                    $totalChecked += $empathetic;

                    if ($caring != 1) $caring = 0;
                    $totalChecked += $caring;

                    if ($openMinded != 1) $openMinded = 0;
                    $totalChecked += $openMinded;

                    if ($approachable != 1) $approachable = 0;
                    $totalChecked += $approachable;

                    if ($totalChecked == 0) {
                        print '<p class="mistake">Please choose at least one checkbox
                        that describes you.</p>';
                        $dataIsGood = false;
                    }

                    if ($whyKind == '') {
                        print('<p class="mistake">Please enter why you think we should be kind.</p>');
                        $dataIsGood = false;
                    } elseif (!verifyAlphaNum($whyKind))) {
                        print'<p class="mistake">Your answer contains extra characters that are 
                        not allowed. Use only letters, numbers, hyphen, and a space. </p>');
                        $dataIsGood = false;
                    }

                    // save data
                    if ($dataIsGood) {
                        try { $sql = 'INSERT INTO tblKindnessForm
                            (fldFirstName, fldAge, fldEmail, fldBeenBullied, fldBullied, fldFavoriteKindness, 
                            fldEmpathetic, fldCaring, fldOpenMinded, fldApproachable, fldWhyKind)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
                            $statement = $pdo->prepare($sql);
                            $params = array($firstName, $age, $email, $beenBullied, $bullied, 
                            $favoriteKindness, $empathetic, $caring, $openMinded, $approachable, $whyKind);

                            if ($statement->execute($params)) {
                                print '<p>Record was successfully saved.</p>';
                            }
                            else {
                                print '<p>Record was NOT successfully saved.</p>';
                            }    
                        }
                        catch (PDOEXCEPTION $e) {
                            print '<p>Couldn\'t insert the record, please contact someone.</p>';        
                        }
                    }
                }
                if ($dataIsGood) {
                    print '<h2>Thank you, your information has been received.</h2>';
                }
                ?>
            </section>

            <section class="actual-form">
                <h2>We are curious about your responses</h2>
                <?php
                print '<p>Post Array:</p><pre>';
                print_r($_POST);
                print '</pre>';
                ?>
                <form action="#" id="frmWhyKind" method="POST">
                    <fieldset class="contact">
                        <legend>Contact Information</legend> 
                        <p>
                            <label class="required" for="txtFirstName">First Name</label>
                            <input id="txtFirstName" maxlength="25" name="txtFirstName" type="text" value="<?php print $firstName; ?>" required>
                        </p>
                        <p>
                            <label class="required" for="txtAge">Age</label>
                            <input id="txtAge" maxlength="3" name="txtAge" type="text" value="<?php print $age; ?>">
                        </p>
                        <p>
                            <label class="required" for="txtEmail">Email</label>
                            <input id="txtEmail" maxlength="30" name="txtEmail" type="email" value="<?php print $email; ?>">
                        </p>
                    </fieldset>    
                    <fieldset class="radio">
                        <legend>Have You Been Bullied?</legend>
                        <p>
                            <input type="radio" id="radBeenBulliedYes" name="radBeenBullied" value="Yes" required
                            <?php 
                                if ($beenBullied == "Yes") print 'checked'; ?>>
                            <label class="radio-field" for="radBeenBulliedYes">Yes</label> 
                        </p> 
                        <p>
                            <input type="radio" id="radBeenBulliedNo" name="radBeenBullied" value="No" required 
                            <?php 
                                if ($beenBullied == "No") print 'checked'; ?>>
                            <label class="radio-field" for="radBeenBulliedNo">No</label>
                        </p>
                    </fieldset>
                    <fieldset class="radio">
                        <legend>Have You Bullied Someone Else?</legend>
                        <p>
                            <input type="radio" id="radBulliedYes" name="radBullied" value="Yes" required
                            <?php 
                                if ($bullied == "Yes") print 'checked'; ?>>
                            <label class="radio-field" for="radBulliedYes">Yes</label>
                        </p> 
                        <p>
                            <input type="radio" id="radBulliedNo" name="radBullied" value="No" required
                            <?php 
                                if ($bullied == "No") print 'checked'; ?>>    
                            <label class="radio-field" for="radBeenBulliedNo">No</label>
                        </p>
                        <p>
                            <input type="radio" id="radBulliedPrefer" name="radBullied" value="Prefer" required
                            <?php 
                                if ($bullied == "Prefer") print 'checked'; ?>>
                            <label class="radio-field" for="radBulliedPrefer">Prefer not to answer</label>
                        </p>  
                    </fieldset>
                    <fieldset class="listbox">
                        <legend>Favorite Act of Kindness?</legend>
                        <p>
                            <select id="lstFavoriteKindness" name="lstFavoriteKindness">
                                <option value="Words of affirmation" <?php 
                                if ($favoriteKindness == "Words of affirmation") print 'selected'; ?>>Words of affirmation</option>
                                <option value="Acts of service" <?php 
                                if ($favoriteKindness == "Acts of service") print 'selected'; ?>>Acts of service</option>
                                <option value="Giving gifts" <?php 
                                if ($favoriteKindness == "Giving gifts") print 'selected'; ?>>Giving gifts</option>
                            </select>
                        </p>
                    </fieldset>
                    <fieldset class="checkbox">
                        <legend>Which Words Describe You?</legend>
                        <p>
                            <input type="checkbox" id="chkEmpathetic" name="chkEmpathetic" value="1"
                            <?php 
                                if ($empathetic) print 'checked'; ?>>
                            <label for="chkEmpathetic">Empathetic</label>    
                        </p>
                        <p>
                            <input type="checkbox" id="chkCaring" name="chkCaring" value="1"
                            <?php 
                                if ($caring) print 'checked'; ?>>
                            <label for="chkCaring">Caring</label>    
                        </p>
                        <p>
                            <input type="checkbox" id="chkOpenMinded" name="chkOpenMinded" value="1"
                            <?php 
                                if ($openMinded) print 'checked'; ?>>
                            <label for="chkOpenMinded">Open Minded</label>
                        </p>
                        <p>
                            <input type="checkbox" id="chkApproachable" name="chkApproachable" value="1"
                            <?php 
                                if ($approachable) print 'checked'; ?>>
                            <label for="chkApproachable">Approachable</label>    
                        </p>
                    </fieldset>
                    <fieldset class="textarea">
                        <legend>Why Do You Think We Should Be Kind?</legend>
                        <p>
                            <label for="txtWhyKind">Tell us what you're thinking</label>
                            <textarea id="txtWhyKind" name="txtWhyKind" rows="4">"<?php print $whyKind; ?>"</textarea>
                        </p>
                    </fieldset>
                    <fieldset class="button">
                        <p>
                            <input id="btnSubmit" name="btnSubmit" type="submit" value="Submit">
                        </p>
                    </fieldset>
                </form>
            </section>

            <section class="form-feedback">
                <h2>Thank you</h2>
            </section>
        </main>
    <?php
    include 'footer.php';
    ?>

        