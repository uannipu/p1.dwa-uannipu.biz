<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Welcome to DWA - Project 1</title>
    <!-- including the style sheet file -->
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>

<div id="container">
    <!-- including the header html by using php include -->
    <?php include 'header.html'; ?>
    <div id="contentWithNav" class="homepage">
        <div class="description">

        </div>
        <div>
            <table cellspacing="0" cellpadding="0" border="0" align="center" id="msg">
                <tr>
                    <td class="form">
                        <h3>Welcome to Usha Annipu's home page!</h3>
                    </td>
                    </tr>
                <tr>
                    <td id="bio"  class="tableData">
                        <!-- the below table is to display Bio and IDE preference -->
                         <table cellspacing="2" cellpadding="5" border="0" width="100%">
                            <tr>
                                <th>Background:</th>
                           </tr>
                            <tr class="oddRow">
                                <td>
                                  <p> My background is IT and am working as an IT Manager at Educational Testing Services.  For major projects a team of specialist is assembled to complete the project.
                                    As an IT Manager of the project, I conceptualize the solution that best meets the business demand and
                                    effectively communicate my vision across the organization. Often there are several organization challenges
                                    I come cross in influencing my vision for which I need better “leadership tools and techniques”. I started my career as a
                                    Java developer and developed several web based applications and eventually grew into IT manager role managing a team of 25 members.
                                  </p>
                                  <p>
                                      Beyond the leadership skills, to achieve great results as an IT Manager  and leader,
                                    I certainly need a to complement my software development skills with well-rounded knowledge of entire IT Landscape
                                    such as infrastructure, network, security, risks and compliance. While I was trying to advancing my skills with
                                    certifications, training and seminars, I felt that it is time for me to look into a quality master degree program.
                                    I am very passionate to learn cutting edge technologies and enhance my skill set to be a very technical successful IT manager at ETS.
                                  </p>
                                </td>
                            </tr>
                             <tr>
                                 <th>IDE preference :</th>
                             </tr>
                             <tr class="oddRow">
                                 <td><p>
                                    PHP STORM - 30 day TRIAL
                                     </p>
                                 </td>
                             </tr>
                          </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <!-- including footer html using php include -->
    <?php include 'footer.html'; ?>
    </div>
</body>
</html>