<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/headerfooter_style.css"/>
    </head>
    <body>
       <footer>
           <p><a href="index.php">ELECTION<span>Sri Lanka</span></a></p>
            <div class="footer-container">
                <dl>
                    <dt>Content</dt>
                    <dd onclick="toggleadminloginpopup();">Administrators</dd>
                    <dd>Candidates</dd>
                    <dd>Parties</dd>
                    <dd>Positions</dd>
                    <dd>Results</dd>
                    <dd onclick="togglevoterloginpopup();">Voters</dd>
                </dl>
                <dl>
                    <dt>Qualities</dt>
                    <dd>Easy</dd>
                    <dd>Time-Saving</dd>
                </dl>
                <dl>
                    <dt>Services</dt>
                    <dd>Voting</dd>
                    <dd>Publicity</dd>
                    <dd>Result Counting</dd>
                </dl>
                <dl>
                    <dt>Tools</dt>
                    <dd>Mobile App</dd>
                    <dd>Database</dd>
                    <dd>Web Application</dd>
                </dl>
                <dl>
                    <dt>Programming</dt>
                    <dd>HTML</dd>
                    <dd>PHP</dd>
                    <dd>CSS</dd>
                    <dd>Java Script</dd>
                </dl>
                <dl>
                    <dt>Support</dt>
                    <dd>Help</dd>
                    <dd>Accessibility</dd>
                </dl>
                <dl>
                    <dt>Our Company</dt>
                    <dd>About us</dd>
                    <dd>Careers</dd>
                    <dd>Media</dd>
                </dl>
                <dl>
                    <dt>Partners</dt>
                    <dd>Studio Arena&nbsp&reg;</dd>
                    <dd>Panthers Crew</dd>
                </dl>
                <dl>
                    <dt>Legal</dt>
                    <dd>Terms of use</dd>
                    <dd>License agreement</dd>
                    <dd>Privacy policy</dd>
                    <dd>Social Media Guidelines</dd>
                </dl>
            </div>
            <hr/>
            <div class="footer-contact">
                <dl>
                    <dt>Email :</dt>
                    <dd>electionsrilanka@gmail.com</dd>
                </dl>
                <dl>
                    <dt>Mobile :</dt>
                    <dd>077 555 1947</dd>
                    <dd>071 355 1546</dd>
                </dl>
                <dl>
                    <dt>Developed By :</dt>
                    <dd>&COPY;&nbsp;M.R.P.N.Tharuksha Rajapaksha</dd>
                </dl>
                <dl>
                    <dt>Admin :</dt>
                    <dd onclick="toggleadminloginpopup();">Admin Login</dd>
                </dl>
            </div>
        </footer>
        <?php include './admin_login.php'; ?>
    </body>
</html>
