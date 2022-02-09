<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="utf-8">
        <title>Acts of Kindness for a Better World</title>
        <meta name="author" content="Dakota Smith">
        <meta name="description" content="In the chaos of today's world, 
        spreading acts of kindness can make a positive impact, learn more here.">
        <!-- Description is 107 characters, tries to promote a call to action -->
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
    </head>

    <body class="if-needed">
        <header>
            <!-- logo image would go here -->
            <h1>Spread Kindness</h1>
            <h2>One Action to Change the World</h2>
        </header>
        <nav>
            <a href="index.php">Home</a>
            <a href="detail.php">Kind&nbsp;People</a>
            <a href="form.php">Survey</a>
        </nav>
        <main>
            <h1>Why Do You Think We Should be Kind?</h1>
            <section>
                <h2>Survey</h2>
                <p>We are collecting information on why people think that we should be kind</p>
            </section>

            <section>
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
                            <input id="txtFirstName" maxlength="25" name="txtFirstName" type="text" value required>
                        </p>
                        <p>
                            <label class="required" for="txtAge">Age</label>
                            <input id="txtAge" maxlength="3" name="txtAge" type="text" value>
                        </p>
                    </fieldset>    
                    <fieldset class="radio">
                        <legend>Have You Been Bullied?</legend>
                        <p>
                            <label class="radio-field" for="radBeenBulliedYes">Yes</label>
                            <input type="radio" id="radBeenBulliedYes" name="radBeenBullied" value="Yes" required>
                        </p> 
                        <p>
                            <label class="radio-field" for="radBeenBulliedNo">No</label>
                            <input type="radio" id="radBeenBulliedNo" name="radBeenBullied" value="No" required>
                        </p>
                    </fieldset>
                    <fieldset class="radio">
                        <legend>Have You Bullied Someone Else?</legend>
                        <p>
                            <label class="radio-field" for="radBulliedYes">Yes</label>
                            <input type="radio" id="radBulliedYes" name="radBullied" value="Yes" required>
                        </p> 
                        <p>
                            <label class="radio-field" for="radBeenBulliedNo">No</label>
                            <input type="radio" id="radBulliedNo" name="radBullied" value="No" required>
                        </p>
                        <p>
                            <label class="radio-field" for="radBulliedPrefer">Prefer not to answer</label>
                            <input type="radio" id="radBulliedPrefer" name="radBullied" value="Prefer" required>
                        </p>  
                    </fieldset>
                    <fieldset class="listbox">
                        <legend>Favorite Act of Kindness?</legend>
                        <p>
                            <select id="lstFavoriteKindness" name="lstFavoriteKindness">
                                <option value="Words of affirmation">Words of affirmation</option>
                                <option value="Acts of service">Acts of service</option>
                                <option value="Giving gifts">Giving gifts</option>
                            </select>
                        </p>
                    </fieldset>
                    <fieldset class="checkbox">
                        <legend>Which Words Describe You?</legend>
                        <p>
                            <label for="chkEmpathetic">Empathetic</label>
                            <input type="checkbox" id="chkEmpathetic" name="chkEmpathetic" value="1">
                        </p>
                        <p>
                            <label for="chkCaring">Caring</label>
                            <input type="checkbox" id="chkCaring" name="chkCaring" value="1">
                        </p>
                        <p>
                            <label for="chkOpenMinded">Open Minded</label>
                            <input type="checkbox" id="chkOpenMinded" name="chkOpenMinded" value="1">
                        </p>
                        <p>
                            <label for="chkApproachable">Approachable</label>
                            <input type="checkbox" id="chkApproachable" name="chkApproachable" value="1">
                        </p>
                    </fieldset>
                    <fieldset class="textarea">
                        <legend>Why Do You Think We Should Be Kind?</legend>
                        <p>
                            <label for="txtWhyKind">Tell us what you're thinking</label>
                            <textarea id="txtWhyKind" name="txtWhyKind"></textarea>
                        </p>
                    </fieldset>
                    <fieldset class="button">
                        <p>
                            <input id="btnSubmit" name="btnSubmit" type="submit" value="Submit">
                        </p>
                    </fieldset>

                </form>
            </section>

        </main>
        <footer>
            <p><a href="../index.php">Site map (Main index)</a></p>
        </footer> 
    </body>
</html>

        