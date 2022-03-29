<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="utf-8">
        <title>Acts of Kindness for a Better World</title>
        <meta name="author" content="Dakota Smith">
        <meta name="description" content="In the chaos of today's world, 
        spreading acts of kindness can make a positive impact, learn more here.">
        <!-- Description is 107 characters, tries to promote a call to action -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/custom.css?version=<?php print time(); ?>" type="text/css">
        <link rel="stylesheet" media="(max-width: 800px)" href="css/custom-tablet.css?version=<?php print time(); ?>" 
            type="text/css">
        <link rel="stylesheet" media="(max-width: 600px)" href="css/custom-phone.css?version=<?php print time(); ?>" 
            type="text/css">

        <script>
            window.onresize = displayWindowSize;
            window.onload = displayWindowSize;

            function displayWindowSize() {
                myWidth = window.innerWidth;
                myHeight = window.innerHeight;

                document.getElementById("dimensions").innerHTML = myWidth + " x " + myHeight;
            }
        </script>

    </head>

    <body class="detail">
        <header>
            <!-- logo image would go here -->
            <h1>Spread Kindness<span id="dimensions" style="float: right;"></span></h1>
            <h2>One Action to Change the World</h2>
        </header>
        <nav>
            <a href="index.php">Home</a>
            <a href="detail.php">Kind&nbsp;People</a>
            <a href="form.php">Survey</a>
        </nav>
        <main class="details">
            <h1>Kind People</h1>
            <section class="rosa-parks-image">
                <h2>Rosa Parks</h2>
                <figure>
                    <img alt="Rosa Parks" src="images/rosa-parks.jpg">
                    <figcaption><cite><a href="https://en.wikipedia.org/wiki/Rosa_Parks" target="_blank">Wikipedia</a></cite></figcaption>
                </figure>
            </section>

            <section class="rosa-parks-text">
                <h2>About Rosa</h2>
                <p>Rosa Parks is an activist best known for her role in the Montgomery bus boycott. Parks refused to let 
                    the bus driver change a row of four "colored" section seats into one for a white passenger. This led 
                    to a movement against racial segregation. Later in her life, Parks organized the release of political prisoners, 
                    mainly those involving self-defense. She also co-founded the Rosa L. Parks Scholarship Foundation for high school 
                    seniors looking to attend college. 
                </p>  
                <cite><a href="https://en.wikipedia.org/wiki/Rosa_Parks">Source</a></cite>
            </section>

            <section class="gandhi-image">
            <h2>Gandhi</h2>
                <figure>
                    <img alt="Gandhi" src="images/gandhi.jpg">
                    <figcaption><cite><a href="https://en.wikipedia.org/wiki/Mahatma_Gandhi" target="_blank">Wikipedia</a></cite></figcaption>
                </figure>
            </section>
            
            <section class="gandhi-text">
                <h2>About Gandhi</h2>
                <p>Mahatma Gandhi was an Indian lawyer who inspired civil rights movements across the globe. After graduating 
                    high school in India, he had a child with his wife Kasturba. Gandhi was advised to pursue law school in 
                    London, but his mother did not approve of him leaving his wife and child. So, he made a vow to abstain from 
                    meat, alcohol, and women. He became a civil rights activist in South Africa from 1893-1914, where he 
                    was the lawyer for a Muslim merchant. Over the years, he started many movements for peace, and campaigned 
                    against India's participation in World War II. He advocated for women's rights, vegetarianism, and nonviolence 
                    among many other things. 
                </p> 
                <cite><a href="https://en.wikipedia.org/wiki/Mahatma_Gandhi">Source</a></cite>
            </section>

            <section class="mother-teresa-image">
            <h2>Mother Teresa</h2>
                <figure>
                    <img alt="Mother Teresa" src="images/mother-teresa.jpg">
                    <figcaption><cite><a href="https://mtces.org/about/why-were-called-mother-teresa" target="_blank">MTCES</a></cite></figcaption>
                </figure>
            </section>

            <section class="mother-teresa-text">
                <h2>About Mother Teresa</h2>
                <p>Mother Teresa was a Roman Catholic nun and missionary. She founded the Missionaries of Charity,
                    a congregation that manages homes for people who are dying of HIV/AIDS, leprosy, and tuberculosis. The members of 
                    this congregation take a vow to give "wholehearted free service to the poorest of the poor." She went on 
                    to win the Nobel Peace Prize in 1979, among various other honors. Although, she did have some controversial 
                    beliefs on some subject matters, but we will only focus on the positives on this site.   
                </p> 
                <cite><a href="https://en.wikipedia.org/wiki/Mother_Teresa">Source</a></cite>
            </section>

            <section class="ellen-degeneres-image">
                <h2>Ellen DeGeneres</h2>
                <figure>
                    <img alt="Ellen DeGeneres" src="images/ellen.jpg">
                    <figcaption><cite><a href="https://www.vanityfair.com/hollywood/2021/05/ellen-degeneres-is-ending-ellen-in-2022" target="_blank">Vanity Fair</a></cite></figcaption>
                </figure>
            </section>

            <section class="ellen-degeneres-text">
                <h2>About Ellen</h2>
                <p>Ellen DeGeneres advocates for kindness in everyday life. She has raised tens of millions of dollars
                    for various causes over the years, including:
                </p> 
                <ul>
                    <li>$12.5 million for breast cancer</li>
                    <li>$10 million for Hurricane Katrina survivors</li>
                    <li>$1.7 million to schools</li>
                    <li>$21.6 million to various charities</li>
                    <li>$35 million to her viewers</li>
                    <li><cite><a href="https://www.upworthy.com/ellen-degeneres-speaks-out-on-the-importance-of-kindness">Source</a></cite></li>
                </ul>
                <p>Besides donating money, Ellen constantly voices how important she thinks spreading kindness is. 
                    She even has her own subscription box brand, "Be Kind." with sustainably sourced and cruelty free 
                    products. The proceeds of these boxes go to various causes, some including the ASPCA, providing masks 
                    for care workers, planting trees, providing jobs, etc. 
                </p>
                <cite><a href="https://www.bekindbyellen.com/">Source</a></cite>    
            </section>
        </main>

        <footer>
            <p><a href="../index.php">Site map (Main index)</a></p>
        </footer> 
    </body>
</html>

        