<!DOCTYPE html>
<html>
<head>
  <title>Random</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <style>
      .txt-not-found{
        text-align: center;
        color: #585858;
      }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      &nbsp;
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
       <li>
           <?php echo anchor('https://github.com/MrDynamic/random','Source Code'); ?>
       </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="adv-table">
            <div class="space15"></div>
                <?php

                $action = 'index.php/share/save';
                $selectType = array('class'=>'form-control','id'=>'groupName','required'=>'');
                if(count($groupItems) > 0){
                  echo form_open($action);
                  echo create_dropdown(array('Group Name','groupName'),'groupName',$groupItems,$selectType);
                  echo form_button(array('type'=>'submit','class'=>'btn btn-primary','content'=>'Random'));
                  echo form_close();
                }
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <div class="adv-table">
            <div class="space15"></div>
                <?php
                  (isset($randomNumber) && !empty($randomNumber))? print "<h3 style='color:red'>Random number is => $randomNumber</h3>":'';
                ?>
            </div>
        </div>
    </div>
   <div class="row">
     <div class="col-md-offset-3 col-md-6">
           <div class="adv-table">
                  <div class="space15" style="margin:50px !important;"></div>
                  <h4>&#3617;&#3634;&#3585;&#3585;&#3623;&#3656;&#3634;&#3652;&#3604;&#3657;&#3585;&#3656;&#3629;&#3609;</h4>
                  <table class="table table-striped table-hover table-bordered">
                      <thead>
                          <tr>
                              <th>No.</th>
                              <th>Group</th>
                              <th>Number</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php
                          if(!isset($list)|| empty($list)) { 
                            echo "<tr><td colspan=3>Data Not Found !!</td></tr>";
                          } else{
                            $i=1;
                            foreach ($list as $rows){
                              echo "<tr class=''>";
                              echo "<td>$i</td>";
                              echo "<td>$rows->groupName</td>";
                              echo "<td>$rows->randomNumber</td>";
                              echo "</tr>";
                              $i++;
                            }
                          }
                      ?>
                      </tbody>
                  </table>
              </div>
            </div>
       </div>
   </div>
   
 </div>
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>

	