<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dakota's CS008 Website</title>
        <meta name="author" content="Dakota Smith">
        <meta name="description" content="A site map for all of my assignments for CS008.">
        <style>
             /* basic CSS */
             body{
                margin: auto;
                padding: 3%;
                width: 90%;
            }

            figure {
                border: thin solid darkslategray;
                border-radius: 3%;
                padding: 3%;
                text-align: center;
            }

            figcaption {
                color: #839e99;
                font-style: italic;
                text-align: center;
            }

            img{
                border-radius: 3%;
                max-width: 100%
            }

            .right{
                float: right;
                margin-left: 3%;
            }

            .small {
                width: 20%;
            }
            
            /* Setting up a grid layout for the main inded page */
            .header{
                grid-area: header;
                grid-column: 1 / 3;
                padding: .5%;
                margin: .5%;
            }  
            .public-files{
                grid-area: public-files;
                padding: .5%;
                margin: .5%;
            }

            .supporting-files{
                grid-area: supporting-files;
                padding: .5%;
                margin: .5%;
            }
            .grader-notes{
                grid-area: grader-notes;
                padding: .5%;
                margin: .5%;
            }
            .grid-layout{
                border-bottom: thin dashed navy;
                display: inline-grid;
                grid-template-columns: 25% 25% 50%;
                grid-template-areas: "header header header"
                    "public-files supporting-files grader-notes"; 
                padding: .5%;
                margin: .5%;
                width: 100%;    
            }

        </style>
    </head>

    <body>
        <figure class="right small">
            <img alt="Dakota Smith Summer of '21" 
                 src="images/dakota-smith.jpg" 
                 style="max-width: 100%;">
            <figcaption>On top of Mount Pemigewasset.</figcaption>
        </figure>

        <h1>CS 008-<em>OL</em> Spring 2022</h1>
        <h2>Dakota Smith - Site map</h2>
        <p><a href="ADMIN/admin.php">My Admin Folder</a></p>
        <p><a href="ADMIN/table-viewer.php?getDatabase=">Table viewer</a></p>
        
        <section class="grid-layout">
            <h2 class="header">Final</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="final/index.php">index.php</a></p>
                <p><a href="final/detail.php">detail.php</a></p>
                <p><a href="final/form.php">form.php</a></p>
                <p><a href="final/array.php">array.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="final/css/custom.css">custom.css</a></p>
                <p><a href="final/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="final/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="final/footer.php">footer.php</a></p>
                <p><a href="final/header.php">header.php</a></p>
                <p><a href="final/nav.php">nav.php</a></p>
                <p><a href="final/top.php">top.php</a></p>
                <p><a href="final/sql.php">SQL statements</a></p>
                <p><a href="final/images/desktop-wireframe.jpeg">Desktop Wireframe</a></p>
                <p><a href="final/images/tablet-wireframe.jpeg">Tablet Wireframe</a></p>
                <p><a href="final/images/phone-wireframe.jpeg">Phone Wireframe</a></p>
                <p><a href="final/images/records.PNG">records.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section> 
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Nine - Saving forms data.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab9/index.php">index.php</a></p>
                <p><a href="lab9/detail.php">detail.php</a></p>
                <p><a href="lab9/form.php">form.php</a></p>
                <p><a href="lab9/array.php">array.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab9/css/custom.css">custom.css</a></p>
                <p><a href="lab9/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab9/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab9/footer.php">footer.php</a></p>
                <p><a href="lab9/header.php">header.php</a></p>
                <p><a href="lab9/nav.php">nav.php</a></p>
                <p><a href="lab9/top.php">top.php</a></p>
                <p><a href="lab9/sql.php">SQL statements</a></p>
                <p><a href="lab9/images/desktop-wireframe.jpeg">Desktop Wireframe</a></p>
                <p><a href="lab9/images/tablet-wireframe.jpeg">Tablet Wireframe</a></p>
                <p><a href="lab9/images/phone-wireframe.jpeg">Phone Wireframe</a></p>
                <p><a href="lab9/images/records.PNG">records.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section> 
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Eight - Database to display data.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab8/index.php">index.php</a></p>
                <p><a href="lab8/detail.php">detail.php</a></p>
                <p><a href="lab8/form.php">form.php</a></p>
                <p><a href="lab8/array.php">array.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab8/css/custom.css">custom.css</a></p>
                <p><a href="lab8/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab8/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab8/footer.php">footer.php</a></p>
                <p><a href="lab8/header.php">header.php</a></p>
                <p><a href="lab8/nav.php">nav.php</a></p>
                <p><a href="lab8/top.php">top.php</a></p>
                <p><a href="lab8/sql.php">SQL statements</a></p>
                <p><a href="lab8/images/desktop-wireframe.jpeg">Desktop Wireframe</a></p>
                <p><a href="lab8/images/tablet-wireframe.jpeg">Tablet Wireframe</a></p>
                <p><a href="lab8/images/phone-wireframe.jpeg">Phone Wireframe</a></p>
                <p><a href="lab8/images/records.PNG">records.png</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section> 
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Seven - Arrays and Includes.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab7/index.php">index.php</a></p>
                <p><a href="lab7/detail.php">detail.php</a></p>
                <p><a href="lab7/form.php">form.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab7/css/custom.css">custom.css</a></p>
                <p><a href="lab7/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab7/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab7/footer.php">footer.php</a></p>
                <p><a href="lab7/header.php">header.php</a></p>
                <p><a href="lab7/nav.php">nav.php</a></p>
                <p><a href="lab7/top.php">top.php</a></p>
                <p><a href="lab7/images/desktop-wireframe.jpeg">Desktop Wireframe</a></p>
                <p><a href="lab7/images/tablet-wireframe.jpeg">Tablet Wireframe</a></p>
                <p><a href="lab7/images/phone-wireframe.jpeg">Phone Wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section> 
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Six - Responsive Design.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab6/index.php">index.php</a></p>
                <p><a href="lab6/detail.php">detail.php</a></p>
                <p><a href="lab6/form.php">form.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab6/css/custom.css">custom.css</a></p>
                <p><a href="lab6/css/custom-tablet.css">custom-tablet.css</a></p>
                <p><a href="lab6/css/custom-phone.css">custom-phone.css</a></p>
                <p><a href="lab6/images/desktop-wireframe.jpeg">Desktop Wireframe</a></p>
                <p><a href="lab6/images/tablet-wireframe.jpeg">Tablet Wireframe</a></p>
                <p><a href="lab6/images/phone-wireframe.jpeg">Phone Wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section> 
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Five - Adding more style.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab5/index.php">index.php</a></p>
                <p><a href="lab5/detail.php">detail.php</a></p>
                <p><a href="lab5/form.php">form.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab5/css/custom.css">custom.css</a></p>
                <p><a href="lab5/images/wireframe.png">wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section> 
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Four - Styling Your Site.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab4/index.php">index.php</a></p>
                <p><a href="lab4/detail.php">detail.php</a></p>
                <p><a href="lab4/form.php">form.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab4/css/custom.css">custom.css</a></p>
                <p><a href="lab4/images/wireframe.png">wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section> 
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Three - Adding detail and a form.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab3/index.php">index.php</a></p>
                <p><a href="lab3/detail.php">detail.php</a></p>
                <p><a href="lab3/form.php">form.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab3/css/custom.css">custom.css</a></p>
                <p><a href="lab3/images/wireframe.png">wireframe</a></p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section> 
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab Two - Making the world a better place</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="lab2/index.php">index.php</a></p>
            </section>

            <section class="supporting-files">
                <h3>Supporting files</h3>
                <p><a href="lab2/css/custom.css">custom.css</a> (if you do the extra credit)</p>
            </section>

            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section> 
        </section>

        <section class="grid-layout">
            <h2 class="header">Lab one - Setting up your sitemap.</h2>
            <section class="public-files">
                <h3>Public Files</h3>
                <p><a href="testing.php">Testing Page</a></p>
            </section>
            <section class="grader-notes">
                <h3>Notes to grader</h3>
                <p></p>
            </section>
        </section>

    </body>
</html>