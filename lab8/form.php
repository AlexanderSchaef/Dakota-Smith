    <?php
    include 'top.php';
    ?>
        <section class="header-img">
                <h2>Why Do You Think We Should be Kind?</h2>
        </section>
        <main>
            <section>
                <cite><a href="https://unsplash.com/photos/rd5uNIUJCF0" target="_blank">Unsplash</a></cite>
                <h2>Survey</h2>
                <p>We are collecting information on why people think that we should be kind</p>
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
                            <input type="radio" id="radBeenBulliedYes" name="radBeenBullied" value="Yes" required>
                            <label class="radio-field" for="radBeenBulliedYes">Yes</label> 
                        </p> 
                        <p>
                            <input type="radio" id="radBeenBulliedNo" name="radBeenBullied" value="No" required>
                            <label class="radio-field" for="radBeenBulliedNo">No</label>
                        </p>
                    </fieldset>
                    <fieldset class="radio">
                        <legend>Have You Bullied Someone Else?</legend>
                        <p>
                            <input type="radio" id="radBulliedYes" name="radBullied" value="Yes" required>
                            <label class="radio-field" for="radBulliedYes">Yes</label>
                        </p> 
                        <p>
                            <input type="radio" id="radBulliedNo" name="radBullied" value="No" required>    
                            <label class="radio-field" for="radBeenBulliedNo">No</label>
                        </p>
                        <p>
                            <input type="radio" id="radBulliedPrefer" name="radBullied" value="Prefer" required>
                            <label class="radio-field" for="radBulliedPrefer">Prefer not to answer</label>
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
                            <input type="checkbox" id="chkEmpathetic" name="chkEmpathetic" value="1">
                            <label for="chkEmpathetic">Empathetic</label>    
                        </p>
                        <p>
                            <input type="checkbox" id="chkCaring" name="chkCaring" value="1">
                            <label for="chkCaring">Caring</label>    
                        </p>
                        <p>
                            <input type="checkbox" id="chkOpenMinded" name="chkOpenMinded" value="1">
                            <label for="chkOpenMinded">Open Minded</label>
                        </p>
                        <p>
                            <input type="checkbox" id="chkApproachable" name="chkApproachable" value="1">
                            <label for="chkApproachable">Approachable</label>    
                        </p>
                    </fieldset>
                    <fieldset class="textarea">
                        <legend>Why Do You Think We Should Be Kind?</legend>
                        <p>
                            <label for="txtWhyKind">Tell us what you're thinking</label>
                            <textarea id="txtWhyKind" name="txtWhyKind" rows="4"></textarea>
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

        