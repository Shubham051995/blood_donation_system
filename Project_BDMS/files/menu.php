<?php 
include_once("db/config.php");
$query = "SELECT * FROM tbl_pages";
$result = $con->query($query);
$parent_1 = '';
$parent_2 = '';
$parent_3 = '';

while($row = mysqli_fetch_array($result)){
	$parent_id = $row["int_parent"];
	$page_id = $row["page_id"];
	$page_name = $row["page_name"];
	
	if($parent_id == 1){
		$parent_1 .=" <li class='submenu-item'><a href='the_need_of_blood.php?p_id=$page_id'>$page_name</a></li>";
	}
	else if($parent_id == 2){
		$parent_2 .=" <li class='submenu-item'><a href='the_need_of_blood.php?p_id=$page_id'>$page_name</a></li>";
	}
	else{
		$parent_3 .=" <li class='submenu-item'><a href='the_need_of_blood.php?p_id=$page_id'>$page_name</a></li>";
	}
}

$response = '
        <nav class="navbar navbar-static-top">
            <div class="navbar-main">
              <div class="container">
                <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/images/blood_logo.png"height="38px" width="85px" alt=""></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse pull-right">
                  <ul class="nav navbar-nav">
					<li><a class="is-active" href="index.php">Home</a></li>
                    <li><a class="has-child"href="why_give_blood.php">Why Give Blood</a>
						<ul class="submenu">
                         '.$parent_1.'
					    </ul>
					</li>
                    <li><a href="who_can_give_blood.php">Who Can Give Blood</a>
						<ul class="submenu">
							 '.$parent_2.'
                        </ul>
					</li>
                    <li class="has-child"><a href="donation_process.php">The Donation Process</a>
                      <ul class="submenu">
                         '.$parent_3.'
                      </ul>
                    </li>
                    <li><a href="blood_tips.php">Blood Tips</a></li>
                    <li><a href="request_for_blood.php">Request For Blood</a></li>
                  </ul>
                </div> <!-- /#navbar -->
              </div> <!-- /.container -->
            </div> <!-- /.navbar-main -->
        </nav> 
    ';
	
	echo $response;
	
?>