<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>View Profile</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/style/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      .img-responsive{
      //   max-width: 25%;
      }
    </style>
  </head>
  <body>
    <div class="container" style="margin-top:20px">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Profile $User_ID $Username</h3>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://1.bp.blogspot.com/-7dQNV4tY-Ow/WKNAL5UPDNI/AAAAAAAAAmc/Cg0ZqZGfjVkGmcJcQI-Cx2lXiQ3bhESUACLcB/s1600/Pas%2BFoto%2B3%2Bx%2B4.jpg" class="img-responsive"> </div>

                    <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                      <dl>
                        <dt>DEPARTMENT:</dt>
                        <dd>Administrator</dd>
                        <dt>HIRE DATE</dt>
                        <dd>11/12/2013</dd>
                        <dt>DATE OF BIRTH</dt>
                           <dd>11/12/2013</dd>
                        <dt>GENDER</dt>
                        <dd>Male</dd>
                      </dl>
                    </div>-->
                    <div class=" col-md-9 col-lg-9 ">
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>Department:</td>
                            <td>Programming</td>
                          </tr>

                          <tr>
                            <td>Hire date:</td>
                            <td>06/23/2013</td>
                          </tr>

                          <tr>
                            <td>Date of Birth</td>
                            <td>01/24/1988</td>
                          </tr>

                          <tr>
                            <td>Gender</td>
                            <td>Female</td>
                          </tr>

                          <tr>
                            <td>Home Address</td>
                            <td>Kathmandu,Nepal</td>
                          </tr>

                          <tr>
                            <td>Email</td>
                            <td><a href="mailto:info@support.com">info@support.com</a></td>
                          </tr>

                          <tr>
                            <td>Phone Number</td>
                            <td>
                              123-4567-890(Landline)<br>
                              555-4567-890(Mobile)
                            </td>
                          </tr>

                        </tbody>
                      </table>

                      <a href="#" class="btn btn-primary">My Sales Performance</a>
                      <a href="#" class="btn btn-primary">Team Sales Performance</a>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                        <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    </span>
                </div>
              </div>
            </div>
          </div>
        </div>

    <?php
    /*  if (isset ($profile_id)) {
        echo "Profile ";
        echo $profile_id;
      }else{
        echo "Cari Profile";
      }*/
    ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/style/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/style/js/bootstrap.min.js"></script>
  </body>
</html>
