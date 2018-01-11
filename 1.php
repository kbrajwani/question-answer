<!DOCTYPE html>
<html lang="en-US">
	<?php session_start();
if($_SESSION["email"]==null)
{header('location:login.php');}
?>
	<!--[if lt IE 7]> <html class="ie ie6 oldie" lang="en"> <![endif]-->
	<!--[if IE 7]>    <html class="ie ie7 oldie" lang="en"> <![endif]-->
	<!--[if IE 8]>    <html class="ie ie8 oldie" lang="en"> <![endif]-->
	<!--[if gt IE 8]> <html class="ie ie9 newest" lang="en"> <![endif]-->
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset="utf-8">
        		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<link rel="shortcut icon" href=""/>
		<link href='//fonts.googleapis.com/css?family=Lato:400,700&subset=latin,cyrillic,cyrillic-ext,vietnamese,latin-ext' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="wp-content/themes/qaengine/js/libs/selectivizr-min.js"></script>
		
		
		<script type="text/javascript" src="my.js"></script>
		
		<link href='my.css' rel='stylesheet' type='text/css'/>
		
		<script type="text/javascript">
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
				<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	    <title>QA Engine &#8211; Enginethemes &#8211; The Most Place for Questioning &amp; Answering</title>
<!--[if lt IE 9]>
                <script src="   wp-content/themes/qaengine/includes/aecore/assets/js/html5.js"></script>
            <![endif]-->		<script type="text/javascript">
			ae_globals = {"ajaxURL":" \/\/ \/wp-admin\/admin-ajax.php","imgURL":"wp-content\/themes\/qaengine\/img\/","posts_per_page":"12","homeURL":" \/\/ \/index.htm","user_confirm":0,"pending_questions":0,"pending_answers":0,"introURL":" \/\/ \/intro-2\/","gplus_client_id":false,"plupload_config":{"max_file_size":"3mb","url":" \/\/ \/wp-admin\/admin-ajax.php","flash_swf_url":" \/\/ \/wp-includes\/js\/plupload\/plupload.flash.swf","silverlight_xap_url":" \/\/ \/wp-includes\/js\/plupload\/plupload.silverlight.xap"}}		</script>
		<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="QA Engine - Enginethemes &raquo; Feed" href="   feed/" />
<link rel="alternate" type="application/rss+xml" title="QA Engine - Enginethemes &raquo; Comments Feed" href="   comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="QA Engine - Enginethemes &raquo; Questions Listing Comments Feed" href="   questions-listing/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":" \/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":" \/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"\/wp-includes\/js\/wp-emoji-release.min.js?ver=1483691855"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='bootstrap-css'  href='wp-content/plugins/et_demobar/css/bootstrap.min.css?ver=1482833515' type='text/css' media='all' />
<link rel='stylesheet' id='demobar-font-awesome-css'  href='wp-content/plugins/et_demobar/css/font-awesome.min.css?ver=1464666882' type='text/css' media='all' />
<link rel='stylesheet' id='mCustomScrollbar-css'  href='wp-content/plugins/et_demobar/css/jquery.mCustomScrollbar.min.css?ver=1464666882' type='text/css' media='all' />
<link rel='stylesheet' id='demo-bar-css'  href='wp-content/plugins/et_demobar/css/main.css?ver=1482833515' type='text/css' media='all' />
<link rel='stylesheet' id='wp-color-picker-css'  href='wp-admin/css/color-picker.min.css?ver=1483691855' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='wp-content/themes/qaengine/css/libs/font-awesome.min.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='main-style-css'  href='wp-content/themes/qaengine/css/main.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='editor-style-css'  href='wp-content/themes/qaengine/css/editor.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='push-menu-css'  href='wp-content/themes/qaengine/css/libs/push-menu.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='chosen-css'  href='wp-content/themes/qaengine/css/libs/chosen.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='custom-style-css'  href='wp-content/themes/qaengine/css/custom.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='date-picker-style-css'  href='wp-content/themes/qaengine/css/bootstrap-datetimepicker.min.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='color-picker-style-css'  href='wp-content/themes/qaengine/css/colorpicker.css?ver=1483511937' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='wp-content/themes/qaengine/style.css?ver=1483511937' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js?ver=1466532443'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js?ver=1466532443'></script>
<script type='text/javascript' src='wp-includes/js/plupload/plupload.full.min.js?ver=1452157707'></script>
<script type='text/javascript' src='jquery-3.2.1.min.js'></script>
<!--[if lt IE 9]>
                <script src="   wp-content/themes/qaengine/includes/aecore/assets/js/html5.js"></script>
            <![endif]--><link rel='  api.w.org/' href='wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.7.5" />
<link rel="canonical" href="   " />
<link rel='shortlink' href='   ' />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed?url=https%3A%2F%2F %2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed?url=https%3A%2F%2F %2F&#038;format=xml" />

			</head>
	<body class="home page-template page-template-page-questions page-template-page-questions-php page page-id-12 cbp-spmenu-push" id="myTable">
		
    	
		

		
				<div class="container-fluid">
			<div class="row">
				<header id="header">
					<div class="col-md-3 col-xs-3" id="logo">
						<a href="   ">
														<img src="   wp-content/themes/qaengine/img/logo.png">
													</a>
					</div><!-- logo -->
					<div id="menu_qa" class="col-md-7 col-xs-7">	
						                        <div class="header-menu">
                            <ul>
<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-114"><a >category</a>
<ul class="sub-menu">
	<?php
		
			
	require 'class/class.php';
	$obj=new database();
	$result=$obj->allcategory();
				while($cat=$result->fetch_assoc())
				{
					echo '<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-12 current_page_item menu-item-2189 active " href="javascript:void(0)" data-toggle="edit_profile"><a data-toggle="modal" data-target="#category_question'.$cat["cat_id"].'">'.$cat["cat_name"].'</a></li>';
				}

					?>
</ul>
</li>


<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2188"><a data-toggle="modal" data-target="#user_profile">profile</a></li>
	


<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a data-toggle="modal" data-target="#contact">Contact</a></li>
                            </ul>
                        </div><!-- menu -->
                                                <div class="header-search-wrapper">
                        	<section class="buttonset">
                                <button id="showLeftPush"><i class="fa fa-question"></i></button>
                                <button id="showRightPush"><i class="fa fa-bar-chart-o"></i></button>

                                <!-- <button id="showLeft"><i class="fa fa-question"></i></button>
								<button id="showRight"><i class="fa fa-bar-chart-o"></i></button> -->
								<button id="showTop"><i class="fa fa-list"></i></button>
                            </section>
                        	                            <form id="header_search" method="GET"  class="disable-mobile-search">
                                <input type="text" name="keyword" required value="" placeholder="Enter Keywords" autocomplete="on" />
                                <i class="glyphicon glyphicon-search"></i>
                                <div id="search_preview" class="search-preview empty"></div>
                            </form>
                        </div><!-- search -->
					</div>
					<div id="login_qa" class="col-md-2 col-xs-2 btn-group ">
						
						<a class="login-url" href="logout.php" >
							Logout						</a>

									

											</div><!-- avatar -->
				</header><!-- END HEADER -->
				<div class="col-md-12 col-xs-12" id="header_sidebar">
									</div>        <div  class="col-md-10 main-content">

        <div class="clearfix"></div>
        
        	<a data-toggle="modal" data-target="#question"  class=" ask-question">
<center><h3><i class="fa fa-plus"></i> ASK A QUESTION</h3></center>
					</a>
        <!-- END QUESTIONS-FILTER -->
        
           
	
				<?php
		
				$key=$_SERVER["QUERY_STRING"];
                
                if($key==null)
                {
$res=$obj->getall();
                }
                else
                {
$id=$_GET["keyword"];
                
				$res=$obj->getall1($id);
				
                }
                
				while($row=$res->fetch_assoc())
				{
echo '
<div class="main-questions-list">
 <ul id="main_questions_list">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="question-item post-2341 question type-question status-publish hentry question_category-business qa_tag-business-2 qa_tag-technology-2" data-id="2341" >
   
</li> <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="question-item post-57 question type-question status-publish hentry question_category-marketing qa_tag-demo qa_tag-marketers qa_tag-marketing-2 qa_tag-media" data-id="57" >

<div itemprop="item" itemscope itemtype="http://schema.org/Question">
        <div class="col-md-8 col-xs-8 q-left-content">
            <div class="q-ltop-content">';
               					
					echo '<h2 itemprop="name">';
                echo '    <a itemprop="url" data-toggle="modal" data-target="#questiondetail'.$row["qid"].'" class="question-title"><font size="5">'.$row["qtitle"].'</font></a>';
                echo '	</h2>';
            echo '</div>
            <div class="q-lbtm-content">
                <div itemprop="text" class="question-excerpt">';
				$res1=$obj->getanswer($row["qid"]);
				while($row1=$res1->fetch_assoc())
				{
                    echo '<p>'.$row1["adesc"].'</p>';
				}
              echo '  </div>
                <div class="question-cat">
                    <div class="clearfix"></div>
                    <a itemprop="author" itemscope itemtype="http://schema.org/Person" >
                    <span class="author-avatar">';
              echo '          <img itemprop="image" src="'.$row["image"].'" class="avatar" alt="" />                    </span>
                        <span itemprop="name" class="author-name">'.$row["email"].'</span>
                    </a>';
echo '		<span itemprop="dateCreated" datetime="on June 5, 2014" class="question-time">
                    Asked on '.date("d-m-y").' in                </span>
                    <span class="question-category">';
                                  echo '  <a data-toggle="modal" data-target="#category_question'.$row["cat_id"].'">'.$row["cat_name"].'.</a>
                                </span>                </div>
            </div>
        </div>
		     </div>


     

    <div class="col-md-4 col-xs-4 q-right-content">
            <ul class="question-statistic">
                <li>
                <span class="question-views">
                    17                </span>
                    views                </li>
                <li class="">
                <span itemprop="answerCount" class="question-answers">
                    0                </span>
                    answers                </li>
                <li>
                <span itemprop="upvoteCount" class="question-votes">
                    0                </span>
                    votes                </li>
            </ul>
        </div><!-- end right content -->
        <div class="clearfix"></div>
	<div class="row paginations home">
                <div class="col-md-12">
                    <ul class="page-numbers">
	
</ul>
                </div>
            </div>

</li>            </ul>        
        <div class="clearfix"></div>
		</div>';
/*------------------------------------*/
echo '<div class="modal fade modal-user-profile" id="category_question'. $row["cat_id"].'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>
<span itemprop="name">Question Cagtegory: <h3>'.$row["cat_name"].'</h3></span>
</div>
';
$res2=$obj->getcategory($row["cat_id"]);
while($row2=$res2->fetch_assoc()){
echo '   <div class="main-questions-list">
            <ul id="main_questions_list">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="question-item post-2341 question type-question status-publish hentry question_category-business qa_tag-business-2 qa_tag-technology-2" data-id="2341" >
    <div itemprop="item" itemscope itemtype="http://schema.org/Question">
        <div class="col-md-8 col-xs-8 q-left-content">
            <div class="q-ltop-content">
                <h2 itemprop="name">
                    <a itemprop="url" data-toggle="modal" data-target="#questiondetail'.$row2["qid"].'" class="question-title">'.$row2["qtitle"].'</a>
                </h2>
            </div>
            <div class="q-lbtm-content">
                <div itemprop="text" class="question-excerpt">
                    <p>';
					$res3=$obj->getanswer($row2["qid"]);
				while($row3=$res3->fetch_assoc())
				{
                    echo '<p>'.$row3["adesc"].'</p>';
				} 
				echo '&nbsp;</p>
                </div>
                <div class="question-cat">
                   
                    <div class="clearfix"></div>
                    <a itemprop="author" itemscope itemtype="">
                    <span class="author-avatar">
                        <img itemprop="image" src="'.$row2["image"].'" class="avatar" alt="" />                    </span>
                        <span itemprop="name" class="author-name">'.$row2["email"].'</span>
                    </a>
                            <span itemprop="dateCreated" datetime="on July 14, 2016" class="question-time">
                    Asked on '.$row2["qdate"].'                </span>
                                  </div>
            </div>
        </div><!-- end left content -->
        <div class="col-md-4 col-xs-4 q-right-content">
            <ul class="question-statistic">
                <li>
                <span class="question-views">
                    17                </span>
                    views                </li>
                <li class="active">
                <span itemprop="answerCount" class="question-answers">
                    2                </span>
                    answers                </li>
                <li>
                <span itemprop="upvoteCount" class="question-votes">
                    0                </span>
                    votes                </li>
            </ul>
            <div class="pumping">
                            </div>
        </div><!-- end right content -->
        <div class="clearfix"></div>
    </div>
</li>
</ul></div>
';}
echo '</div></div></div>
';



echo '<div class="modal fade modal-user-profile" id="questiondetail'.$row["qid"].'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
<div class="modal-header">
<div class=" select-category single-head">
            <div class="col-md-10 col-xs-10">
                <h1 itemprop="name">'.$row["qtitle"].'<a class="q-tag" href="">'.$row["cat_name"].'</a></h1>
            </div>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>
	    </div>
	
</div>
<div class="modal-body">
<div id="question_content" class="row question-main-content question-item" data-id="78">



   <!-- Vote section -->
            <div class="col-md-2 col-xs-2 vote-block">
	<!-- vote group -->
    <ul>
        <!-- vote up -->
        <li title="This is useful.">
        	<a data-container="body" id="like'.$row["qid"].'" data-toggle="popover" data-content="You must have 5 points to vote up."  data-name="vote_up"
                class="action vote vote-up img-circle " >
        		<i class="fa fa-chevron-up"></i>
        	</a>
     </li>
        <!--// vote up -->

        <!--vote point -->
        <li>';
        $like=$obj->getanswer($row["qid"]);
        $likerow=$like->fetch_assoc(); 
         echo '<span itemprop="upvoteCount" class="vote-count" ><b id="liken'.$row["qid"].'">'.$likerow["alike"].'</b></span>';
             
        echo '</li>
        <!--// vote point -->
        <!-- vote down -->
        <li title="This is not useful">
        	<a  data-container="body"  id="unlike'.$row["qid"].'" data-toggle="popover" data-content="You must have 500 points to vote down."  data-name="vote_down"
                class="action vote vote-down img-circle ">
        		<i class="fa fa-chevron-down"></i>
        	</a>
        </li>
        
        <!--// vote down -->
		       <li class="single-question-pump">
                  </li>
    </ul>
    <!--// vote group -->
</div>   

 <ul class="post-controls">
                                                            <!-- Follow Action -->
                              
                                        <!-- // Follow Action -->
                    <!-- report Action -->
                                        <!--// Report Action -->
                </ul>
                <div class="top-content">
                              
                                        <ul class="question-tags">
                                                    <li>
                                
				';
				$res1=$obj->getanswer($row["qid"]);
                if($res1->num_rows==0)
                   { 
                       echo '<a class="q-tag" href="">
                              <p itemprop="text" class="content"><span style="color: #545454;">';   
                       echo "please give answer" ;
                       echo '	  </span></p>     </a>';
                   }
                while($row1=$res1->fetch_assoc())
				{
					echo '<a class="q-tag" href="">
                              <p itemprop="text" class="content"><span style="color: #545454;">';
                   
                   echo  $row1["adesc"];
				   echo '	  </span></p>     </a>';
				
                echo '
                <script>
$(document).ready(function(){
    $("#like'.$row["qid"].'").click(function(){
var i=$("#liken'.$row["qid"].'").html();
var x=parseInt(i)+parseInt(1);
$("#like'.$row["qid"].'").hide();
$("#unlike'.$row["qid"].'").show();

        $.ajax({
            url:"like.php",
            type:"POST",
            data:{i:x,j:'.$row1["aid"].'},
            success:function(){$("#liken'.$row["qid"].'").html(x);},
            error:function(){alert("like not successfull");}
        });
    });
});</script>

<script>
$(document).ready(function(){
    $("#unlike'.$row["qid"].'").click(function(){
var i=$("#liken'.$row["qid"].'").html();
var x=parseInt(i)-parseInt(1);
$("#unlike'.$row["qid"].'").hide();
$("#like'.$row["qid"].'").show();
        $.ajax({
            url:"like.php",
            type:"POST",
            data:{i:x,j:'.$row1["aid"].'},
            success:function(){$("#liken'.$row["qid"].'").html(x);},
            error:function(){alert("like not successfull");}
        });
    });
});</script>
                ';
                }
				echo '			 
						
							  
                            </li>
                                                    
                                            </ul>
											<div class="row">
 <a href="">
                            <span itemprop="author" itemscope itemtype="">
                                <span class="author-avatar">
                                                      </span>
                                <span itemprop="name" class="author-name">'.$row["email"].'</span>
                            </span>
                        </a>
                        <span title="1529" class="user-badge" style="background-color:#780978;">Professor</span>
                        <span class="question-time" itemprop="dateCreated" datetime="on June 5, 2014">
                            Asked on '.$row["qdate"].' in                        </span>
                        <span class="question-category">
                                            <a href="">'.$row["cat_name"].'</a>
                                        </span>                    

										
                </div>
				<ul>
                            <li>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#comment'.$row["qid"].'" class="show-comments active btn btn-info ask-question">
                                <h4>give answer </h4> <i class="fa fa-comment"></i>
                                </a>
                            </li>
                        </ul>
				</div>
				 

                <!--// question tag -->
                <div class="clearfix"></div>

               
                <div class="row">
                    <div class="col-md-8 col-xs-8 question-cat" data-user="1">
                       </div>
                    <div class="col-md-4 col-xs-4 question-control">
                        
                    </div>



					
                </div>

                <div class="clearfix"></div>


                <!-- END COMMENTS CONTAINER -->
            </div>
            <div class="clearfix"></div>
        </div>
		



</div>
</div>

</div>';
/*-------------------------------------*/
echo '
<div class="modal fade modal-user-profile" id="comment'.$row["qid"].'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>
<span itemprop="name"><h3>'.$row["qtitle"].'</h3></span>
</div>
<div class="modal-body">
<form class="form_modal_style" method="post" action="answer.php?id='.$row["qid"].'" name="answer" >
	 <div class="wp-editor-container" class="cols-md-12">
	                <textarea name="post_content" cols="70"  id="insert_answer_78"></textarea>
	            </div>
				<div class="row submit-wrapper">
	                <div class="col-md-3 col-xs-3">
	                    <button id="submit_reply" type="submit" class="btn-submit">
	                        Add Answer	                    </button>
	                </div>
	            </div>
</form>
	        
	    </form>

	</div></div>
					</div></div>';
/* ---------------------------*/
		}

?>

<!--    *******************    -->

<script>
$(document).ready(function(){
    $("#unlike").click(function(){
        $('#liken').html(function(i,val){return val*1-1});
    });
});</script>
<div class="modal fade modal-user-profile" id="comment'.$row["qid"].'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>
</div>
<div class="modal-body">
<script type="text/javascript">

</script>
	</div></div>
					</div></div>
<!--************************-->


</div>
    <div class="col-md-2 disable-mobile right-sidebar">
	<ul>
        <li class="widget widget-statistic">
    	<ul>
    		<li class="questions-count">
    			<p>Questions<p>
    			<span>18</span>
    		</li>
    		<li class="members-count">
    			<p>Members<p>
    			<span>12</span>
    		</li>
    	</ul>
    </li><!-- END widget-statistic -->
	    
		<li class="widget user-widget">
		<h3 class="widgettitle">TOP USERS (POINTS)</h3>
	    <div class="hot-user-question">
	    	<ul>
            	        	<li>
                    <span class="number">1</span>
                    <span class="username ">
                    	<a  title="56789">
                    		tatthien                    	</a>
                    </span>
                                        <span class="points-count" title="56789 Point(s)">
                    	<i class="fa fa-star"></i>
                    	<span>56.8K</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">2</span>
                    <span class="username ">
                    	<a  title="525">
                    		Alex                    	</a>
                    </span>
                                        <span class="points-count" title="525 Point(s)">
                    	<i class="fa fa-star"></i>
                    	<span>525</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">3</span>
                    <span class="username ">
                    	<a  title="184">
                    		Marry                    	</a>
                    </span>
                                        <span class="points-count" title="184 Point(s)">
                    	<i class="fa fa-star"></i>
                    	<span>184</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">4</span>
                    <span class="username ">
                    	<a  title="146">
                    		John                    	</a>
                    </span>
                                        <span class="points-count" title="146 Point(s)">
                    	<i class="fa fa-star"></i>
                    	<span>146</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">5</span>
                    <span class="username ">
                    	<a  title="46">
                    		Smith                    	</a>
                    </span>
                                        <span class="points-count" title="46 Point(s)">
                    	<i class="fa fa-star"></i>
                    	<span>46</span>
                    </span>
                    	            </li>
	        	        </ul>
	    </div>
	</li>
		<li class="widget user-widget">
		<h3 class="widgettitle">TOP USERS (QUESTIONS)</h3>
	    <div class="hot-user-question">
	    	<ul>
            	        	<li>
                    <span class="number">1</span>
                    <span class="username ">
                    	<a  title="4">
                    		Alex                    	</a>
                    </span>
                                        <span class="questions-count" title="4 Question(s)">
                    	<i class="fa fa-question-circle"></i>
                    	<span>4</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">2</span>
                    <span class="username ">
                    	<a  title="2">
                    		Smith                    	</a>
                    </span>
                                        <span class="questions-count" title="2 Question(s)">
                    	<i class="fa fa-question-circle"></i>
                    	<span>2</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">3</span>
                    <span class="username ">
                    	<a  title="1">
                    		John                    	</a>
                    </span>
                                        <span class="questions-count" title="1 Question(s)">
                    	<i class="fa fa-question-circle"></i>
                    	<span>1</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">4</span>
                    <span class="username ">
                    	<a  title="1">
                    		Marry                    	</a>
                    </span>
                                        <span class="questions-count" title="1 Question(s)">
                    	<i class="fa fa-question-circle"></i>
                    	<span>1</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">5</span>
                    <span class="username ">
                    	<a  title="0">
                    		anntt                    	</a>
                    </span>
                                        <span class="questions-count" title="0 Question(s)">
                    	<i class="fa fa-question-circle"></i>
                    	<span>0</span>
                    </span>
                    	            </li>
	        	        </ul>
	    </div>
	</li>
		<li class="widget user-widget">
		<h3 class="widgettitle">TOP USERS (ANSWERS)</h3>
	    <div class="hot-user-question">
	    	<ul>
            	        	<li>
                    <span class="number">1</span>
                    <span class="username ">
                    	<a title="4">
                    		John                    	</a>
                    </span>
                                        <span class="answers-count" title="4 Answer(s)">
                    	<i class="fa fa-comments"></i>
                    	<span>4</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">2</span>
                    <span class="username ">
                    	<a  title="4">
                    		Marry                    	</a>
                    </span>
                                        <span class="answers-count" title="4 Answer(s)">
                    	<i class="fa fa-comments"></i>
                    	<span>4</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">3</span>
                    <span class="username ">
                    	<a title="3">
                    		Alex                    	</a>
                    </span>
                                        <span class="answers-count" title="3 Answer(s)">
                    	<i class="fa fa-comments"></i>
                    	<span>3</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">4</span>
                    <span class="username ">
                    	<a  title="3">
                    		Smith                    	</a>
                    </span>
                                        <span class="answers-count" title="3 Answer(s)">
                    	<i class="fa fa-comments"></i>
                    	<span>3</span>
                    </span>
                    	            </li>
	        	        	<li>
                    <span class="number">5</span>
                    <span class="username ">
                    	<a  title="0">
                    		anntt                    	</a>
                    </span>
                                        <span class="answers-count" title="0 Answer(s)">
                    	<i class="fa fa-comments"></i>
                    	<span>0</span>
                    </span>
                    	            </li>
	        	        </ul>
	    </div>
	</li>
		
		</ul>
</div><!-- END RIGHT-SIDEBAR -->			</div><!-- END ROW -->
		</div><!-- END CONTAINER-FLUID -->
	<div style="display:none;">
		<div id="wp-temp_id-wrap" class="wp-core-ui wp-editor-wrap tmce-active"><link rel='stylesheet' id='dashicons-css'  href='   wp-includes/css/dashicons.min.css?ver=1463369188' type='text/css' media='all' />
<link rel="stylesheet" id="editor-buttons-css"  href=" wp-includes/css/editor.min.css?ver=1483691856" type='text/css' media='all' />
<div id="wp-temp_id-editor-container" class="wp-editor-container"><textarea class="wp-editor-area" rows="20" tabindex="5" autocomplete="off" cols="40" name="post_content" id="temp_id"></textarea></div>
</div>

	</div>

    <!-- MODAL LOGIN / REGISTER -->
    <div class="modal modal-submit-questions" id="login_register" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
				<h4 class="modal-title modal-title-sign-in" id="myModalLabel">Sign In</h4>
			</div>
			<div class="modal-body">
				<form id="signin_form" method="post" action="login1.php" class="form_modal_style">
					<label for="username">
						Username or Email					</label>
					<input type="text" class="email_user"  name="username" id="username" />

					<label for="password">
						Password					</label>
					<input type="password" class="password_user" id="password" name="password">
					<div class="clearfix"></div>
					<button id="submit_reply" type="submit" class="btn-submit">
	                    sign in	                    </button>
					<a href="javascript:void(0)" class="link_forgot_pass">Forgot password</a>
					<div class="submit-block">
												<a href="javascript:void(0)" class="link_sign_up">Sign up here</a><span>or sign in with</span>

						<ul class="social-icon clearfix">
	                        <!-- google plus login -->
	                        	                        <!-- twitter plus login -->
	                        	                        <!-- facebook plus login -->
	                        	                        	                     </ul>
											</div>
					
				</form>

								<form id="signup_form" class="form_modal_style">
					<label for="username">
						Username					</label>
					<input type="text" class="name_user" name="username" id="username" />

					<label for="email">
						Email					</label>
					<input type="text" class="email_user" name="email" id="email" />

					<label for="password1">
						Password					</label>
					<input type="password" class="password_user_signup" id="password1" name="password" />

					<label for="re_password">
						Retype Password					</label>
					<input type="password" class="repeat_password_user_signup" id="re_password" name="re_password" />

					
					<div class="clearfix"></div>
					<div class="gg-captcha">
										</div>
					<input type="submit" name="submit" value="Sign up" class="btn-submit">
					<a href="javascript:void(0)" class="link_sign_in">Sign in</a>

					<div class="clearfix"></div>

					<p class="policy-sign-up">
						By clicking "Sign up" you indicate that you have read and agree to the <a target="_blank" href="   privacy/">privacy policy</a> and <a target="_blank" href="   term/">terms of service.</a>					</p>
				</form>
				
				<form id="forgotpass_form" class="form_modal_style collapse">
					<label>Enter your email here</label>
					<input type="text" class="name_user" name="email" id="email" />
					<input type="submit" name="submit" value="Send" class="btn-submit">
					<a href="javascript:void(0)" class="return_link_sign_in">Sign in</a>
				</form>

			</div>
		</div>
	</div>
</div>	<!-- MODAL LOGIN / REGISTER -->

	<!-- MODAL RESET PASSWORD -->
    <div class="modal fade modal-submit-questions" id="reset_password" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
        <h4 class="modal-title modal-title-sign-in" id="myModalLabel">Reset Password</h4>
      </div>
      <div class="modal-body">

        <form id="resetpass_form" class="form_modal_style">
			<input type="hidden" id="user_login" name="user_login" value="" />
			<input type="hidden" id="user_key" name="user_key" value="">            	
        	<label>Enter your new password here</label>
        	<input type="password" class="name_user" name="new_password" id="new_password" />
        	<input type="password" class="name_user" name="re_new_password" id="re_new_password" />
        	<input type="submit" name="submit" value="Reset" class="btn-submit">
        </form>	 
               
      </div>
    </div>
  </div>
</div>	<!-- MODAL RESET PASSWORD -->
<!-- mmmmmmmmmmmmmmmmmmmmmmmmmmm-->
<div class="modal fade modal-contact" id="contact" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
<div class="col-md-12">
 <div class="blog-classic-top">
<h2 class="title-blog"><a href="https://qaengine.enginethemes.com/contact/">Contact</a></h2>
</div>
</div>
<div class="row">
				        <div class="col-md-3 col-xs-3">
				            <div class="author-wrapper">
				                <span class="avatar-author">
				                    <img itemprop="image" src="   wp-content/themes/qaengine/img/logo.png" class="avatar" alt="" />				                </span>
				                
				            </div>
				        </div> 
						</div>
<div class="col-md-10 col-xs-10" id="page_content">
				            <div class="blog-content">
				                <!-- <span class="tag"></span><span class="cmt"><i class="fa fa-comments"></i>No Comments</span> -->
				                <p style="text-align: center;"><a class="qa-blog-zoom"  target="_blank"  rel="nofollow" ><img class="alignnone size-medium wp-image-2090" src="userimg/avatar.png" alt="b3dfd5c7eacda112034ddfc1e724d046_400x400" width="200" height="200" /></a></p>
<p>Contact us:</p>
<div class="contact-address" style="color: #777777;"><span class="jicons-text" style="color: #444444;">ADDRESS:</span></p>
<address><span class="contact-street">B.S. Sound 999 Cromwell St, Glen Iris<br />
</span><span class="contact-suburb">Victoria </span><span class="contact-postcode">00-000, </span><span class="contact-country">Australia</span></address>
</div>
<div class="contact-contactinfo" style="color: #777777;">
<div><span class="jicons-text" style="color: #444444;">EMAIL: <a href="mailto:support@enginethemes.com" target="_blank"  rel="nofollow" >support@enginethemes.com</a></span></div>
<div><span class="jicons-text" style="color: #444444;">PHONE:</span><span class="contact-telephone">+49 1234 80-0 00</span></div>
<div><span class="jicons-text" style="color: #444444;">FAX:</span><span class="contact-fax">+49 1234 80-0 00</span></div>
<div><span class="jicons-text" style="color: #444444;">MOBILE:</span><span class="contact-mobile">+49 1234 80-0 00</span></div>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>  </div>
        </div>      
</div></div></div></div>

<!-- mmmmmmmmmmmmmmmmmmmmm-->
<div class="modal fade modal-contact" id="question" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-body container">
	<div class="boxedtitle page-title"><h2>Ask Question</h2></div>
	<script type="text/javascript">jQuery(function () {var question_poll = jQuery("#question_poll-253:checked").length;if (question_poll == 1) {jQuery(".poll_options").slideDown(500);}else {jQuery(".poll_options").slideUp(500);}jQuery("#question_poll-253").click(function () {var question_poll_c = jQuery("#question_poll-253:checked").length;if (question_poll_c == 1) {jQuery(".poll_options").slideDown(500);}else {jQuery(".poll_options").slideUp(500);}});});</script>
	</div>
<div class='if_no_login'>
<div class="form-posts">
<div class="form-style form-style-3 question-submit">
<div class="ask_question">
	
<form class="form_modal_style" method="post" action="question.php" enctype="multipart/form-data">
<div class="note_error display"></div>
<div class="form-inputs clearfix"><p><label for="question-title-253" class="required">Question Title<span>*</span></label>
<input name="title" required id="question-title-253" class="the-title" type="text" value=""><span class="form-description">Please choose an appropriate title for the question to answer it even easier .</span></p><p><label for="question-category-253" class="required">Category<span>*</span></label><span class="styled-select">
<select name='category' id='question-category-253' class='postform' >
	<option value='-1'>Select a Category</option>
	<?php
	$result=$obj->allcategory();
				while($cat=$result->fetch_assoc())
				{
					echo '<option value="'.$cat["cat_id"].'">'.$cat["cat_name"].'</option>';
				}
				?>
	</select></span><span class="form-description">Please choose the appropriate section so easily search for your question .</span></p>
<div class="clearfix"></div>
</div>
<label>Attachment</label>
<div class="question-multiple-upload">
<div class="clearfix"></div>
<p class="form-submit add_poll">
<input type="file" name="image" class="button color small submit add_poll_button add_upload_button_js"><i class="icon-plus"></i>Add Field</button></p><ul class="question_poll_item question_upload_item"></ul><script> var next_attachment = 1;</script>
<div class="clearfix"></div>
</div>
</div>
<div class="details-area"><label for="question-category-253" class="required"><h3><b>Details<span>*</span></b></h3></label>
<div class="the-details the-textarea">
<div id="wp-question-details-253-wrap" class="wp-core-ui wp-editor-wrap html-active">
<div id="wp-question-details-253-editor-container" class="wp-editor-container">
<div id="qt_question-details-253_toolbar" class="quicktags-toolbar"></div>
<textarea class="wp-editor-area" rows="10" cols="40" name="comment" id="question-details-253"></textarea>
</div></div></div>
<div class="clearfix"></div>
</div></div></div></div>
<p class="question_poll_p"><label for="remember_answer-253">Notified</label><input type="checkbox" id="remember_answer-253" name="remember_answer" value="1" checked='checked'><span class="question_poll">Notified by e-mail at incoming answers .</span></p>
<p class="form-submit"><input type="hidden" name="form_type" value="add_question"><input type="hidden" name="post_type" value="add_question"><input type="submit" value="Publish Your Question" class="button color small submit add_qu publish-question"></p></form>
</div></div></div></div>
<!-- mmmmmmmmmmmmmmmmmmmmm-->


<!-- mmmmmmmmmmmmmmmmmmmmm-->

<!-- mmmmmmmmmmmmmmmmmmmmm-->


<!-- mmmmmmmmmmmmmmmmmmmmm-->

<div class="modal fade modal-user-profile" id="user_profile" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>

        <div class="row select-category">
            <div class="col-md-8 col-xs-8 current-category">
                <span>
                   <?php $mail=$_SESSION["email"]; 
				   echo $mail;?>               </span>
            </div>
			<?php
            $user=$obj->getuser($mail);
			$userrow=$user->fetch_assoc();
                 ?>        </div>
                    </div><!-- END SELECT-CATEGORY -->
					<div class="modal-body">
        <div class="row user-statistic highlight">
            <div class="col-md-5 col-xs-12 user-info">
                <span class="avatar-80">
                    <img itemprop="image" src="<?php echo $userrow["image"] ;?>" class="avatar image-cercle" alt="" />                </span>
                
                <div itemprop="description" class="col-md-12 description">
                                    </div>
            </div>
            <div class="col-md-8 col-xs-12 user-post-count">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 statistics">
                        <div class="pull-top question-cat">
                            <span title="1529" class="user-badge" style="background-color:#780978;">Professor</span>                            <br>
                            <span class="points-count">
                            1529                            </span>
                            <span class="star">
                                <i class="fa fa-star"></i><br>
                                Points                            </span>
                        </div>
                        <div class="pull-bottom">
                            <div class="col-md-6 col-sm-6 col-xs-6 num-question">
                                <p class="questions-count">
                                <?php $uq1=$obj->userquestion($mail);  
                                if($uq1->num_rows>0)
                                {
                                  echo '   <a data-toggle="modal" data-target="#user_question"> Questions<br>
                                    <span>5</span></a>   ';
                                }
                                ?>
                                 
                                </p>



                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 num-answer">
                                <p class="answers-count">
                                <?php $uq2=$obj->useranswer($mail);  
                                if($uq2->num_rows>0)
                                {
                                echo '<a data-toggle="modal" data-target="#user_answer">    Answers<br>
                                    <span>3</span></a>
                               ';
                                }
                                ?>
                                 </p>
                            </div>
                        </div>
                    </div>
</div>
                                    </div>
            </div>
        </div>
		</div></div>
        </div>
		</div>


		<div class="modal fade modal-user-profile" id="user_question" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>
<span itemprop="name">Question:</span>
</div>

<?php
$uq=$obj->userquestion($mail);
while($uqrow2=$uq->fetch_assoc()){
echo '   <div class="main-questions-list">
            <ul id="main_questions_list">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="question-item post-2341 question type-question status-publish hentry question_category-business qa_tag-business-2 qa_tag-technology-2" data-id="2341" >
    <div itemprop="item" itemscope itemtype="http://schema.org/Question">
        <div class="col-md-8 col-xs-8 q-left-content">
            <div class="q-ltop-content">
                <h2 itemprop="name">
                    <a itemprop="url" data-toggle="modal" data-target="#questiondetail'.$uqrow2["qid"].'" class="question-title">'.$uqrow2["qtitle"].'</a>
                </h2>
            </div>
            <div class="q-lbtm-content">
                <div itemprop="text" class="question-excerpt">
                    <p>';
					$uqres3=$obj->getanswer($uqrow2["qid"]);
				while($uqrow3=$uqres3->fetch_assoc())
				{
                    echo '<p>'.$uqrow3["adesc"].'</p>';
				} 
				echo '&nbsp;</p>
                </div>
                <div class="question-cat">
                   
                    <div class="clearfix"></div>
                    
                            <span itemprop="dateCreated" datetime="on July 14, 2016" class="question-time">
                    Asked on '.$uqrow2["qdate"].' in  '.$uqrow2["cat_name"].'            </span>
                                  </div>
            </div>
        </div><!-- end left content -->
        <div class="col-md-4 col-xs-4 q-right-content">
            <ul class="question-statistic">
                <li>
                <span class="question-views">
                    17                </span>
                    views                </li>
                <li class="active">
                <span itemprop="answerCount" class="question-answers">
                    2                </span>
                    answers                </li>
                <li>
                <span itemprop="upvoteCount" class="question-votes">
                    0                </span>
                    votes                </li>
            </ul>
            <div class="pumping">
                            </div>
        </div><!-- end right content -->
        <div class="clearfix"></div>
    </div>
</li>
</ul></div>
';}?>


</div></div></div>



<div class="modal fade modal-user-profile" id="user_answer" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>
<span itemprop="name">Answer:</span>
</div>


<?php
$new=$obj->useranswer($mail);

while($newrow2=$new->fetch_assoc()){
echo '   <div class="main-questions-list">
            <ul id="main_questions_list">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="question-item post-2341 question type-question status-publish hentry question_category-business qa_tag-business-2 qa_tag-technology-2" data-id="2341" >
    <div itemprop="item" itemscope itemtype="http://schema.org/Question">
        <div class="col-md-8 col-xs-8 q-left-content">
            <div class="q-ltop-content">
                <h2 itemprop="name">
                    <a itemprop="url" data-toggle="modal" data-target="#questiondetail'.$newrow2["qid"].'" class="question-title">'.$newrow2["qtitle"].'</a>
                </h2>
            </div>
            <div class="q-lbtm-content">
                <div itemprop="text" class="question-excerpt">
                    <p>';
					$newres3=$obj->getanswer($newrow2["qid"]);
				while($newrow3=$newres3->fetch_assoc())
				{
                    echo '<p>'.$newrow3["adesc"].'</p>';
				} 
				echo '&nbsp;</p>
                </div>
                <div class="question-cat">
                   
                    <div class="clearfix"></div>
                    
                            <span itemprop="dateCreated" datetime="on July 14, 2016" class="question-time">
                    Asked on '.$newrow2["qdate"].'             </span>
                                  </div>
            </div>
        </div><!-- end left content -->
        <div class="col-md-4 col-xs-4 q-right-content">
            <ul class="question-statistic">
                <li>
                <span class="question-views">
                    17                </span>
                    views                </li>
                <li class="active">
                <span itemprop="answerCount" class="question-answers">
                    2                </span>
                    answers                </li>
                <li>
                <span itemprop="upvoteCount" class="question-votes">
                    0                </span>
                    votes                </li>
            </ul>
            <div class="pumping">
                            </div>
        </div><!-- end right content -->
        <div class="clearfix"></div>
    </div>
</li>
</ul></div>
';}?>

</div></div></div>



    <!-- MODAL EDIT PROFILE / CHANGE PASS -->
	<div class="modal fade modal-edit-profile" id="edit_profile" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
            </div>
            <div class="modal-body">
                <div class="author-edit" id="user_avatar_container">
                    <span class="author-avatar image" id="user_avatar_thumbnail"></span>
                    <div class="edit-info-avatar">
                        <a href="javascript:void(0);" class="link_change_password">Change Password</a>
                        <a href="javascript:void(0);" class="link_change_profile">Change Profile</a>
                    </div>
                    <span class="et_ajaxnonce" id="773f0a7afe"></span>
                </div>

                    <form id="submit_edit_profile" class="form_modal_style edit_profile_form">
                        <label>Full name</label>
                        <input type="text" class="submit-input" maxlength="40" id="display_name" name="display_name">

                        <label>Location</label>
                        <input type="text" class="submit-input" maxlength="40" id="user_location" name="user_location">

                        <label>Facebook</label>
                        <input type="text" class="submit-input" maxlength="80" id="user_facebook" name="user_facebook">

                        <label>Twitter</label>
                        <input type="text" class="submit-input" maxlength="80" id="user_twitter" name="user_twitter">

                        <label>Google+</label>
                        <input type="text" class="submit-input" maxlength="80" id="user_gplus" name="user_gplus">

                        <label>Email</label>
                        <input type="text" class="submit-input" id="user_email" name="user_email">

                        <div class="clearfix"></div>

                        <label>About me</label>
                        <textarea  maxlength="350" class="submit-textarea" id="description" name="description"></textarea>
                        <input type="checkbox" name="show_email"  id="show_email" />
                        <label for="show_email" class="checkbox-email">
                            Make this email public.                        </label>
                        <div class="clearfix"></div>

                        <input type="submit" name="submit" value="Update Profile" class="btn-submit update_profile">
                    </form>

                    <form id="submit_edit_password" class="form_modal_style edit_password_form">
                        <label>Old Password</label>
                        <input type="password" class="submit-input" id="old_password" name="old_password">
                        <label>New Password</label>
                        <input type="text" class="submit-input input-password" id="new_password1" name="new_password">
                        <label>Repeat New Password</label>
                        <input type="text" class="submit-input input-password" id="re_password" name="re_password">
                        <input type="submit" name="submit" value="Change Password" class="btn-submit update_profile">
                    </form>

            </div>
        </div>
    </div>
</div>	<!-- MODAL UPLOAD IMAGE -->

	<!-- TAG TEMPLATE -->
			<script type="text/template" id="tag_item">

			<input type="hidden" name="tags[]" value="{{= stripHTML(name) }}" />
			{{= stripHTML(name) }} <a href="javascript:void(0)" class="delete"><i class="fa fa-times"></i></a>

		</script>
		<script type="text/javascript">
			function stripHTML(html)
			{
			   var tmp = document.createElement("DIV");
			   tmp.innerHTML = html;
			   return tmp.textContent||tmp.innerText;
			}
		</script>
			<!-- TAG TEMPLATE -->
	<!-- MODAL REPORT -->
    	<!-- END MODAL REPORT -->
	<!-- CONTACT REPORT -->
    	<!-- END CONTACT REPORT -->
		<!-- SEARCH PREVIEW TEMPLATE -->
	<script type="text/template" id="search_preview_template">
	<# _.each(questions, function(question){ #>
	<div class="i-preview">
		<a href="{{= question.permalink }}">
			<div class="i-preview-content">
				<span class="i-preview-title">
					{{= question.post_title.replace( search_term, '<strong>' + search_term + "</strong>" ) }}
				</span>
			</div>
		</a>
	</div>
	<# }); #>
	<div class="i-preview i-preview-showall">
		<# if ( total > 0 && pages > 1 ) { #>
		<a href="{{= search_link }}">View all {{= total }} results</a>
		<# } else if ( pages == 1) { #>
		<a href="{{= search_link }}">View all results</a>
		<# } else { #>
		<a> No results found </a>
		<# } #>
	</div>
</script>	<!-- SEARCH PREVIEW TEMPLATE -->
				<!--Customizer CSS-->
			<style type="text/css">
																							</style>
			<!--/Customizer CSS-->
		        <script type="text/template" id="poll_tag_item">

            <input type="hidden" name="qa_tag[][name]" value="{{= stripHTML(name) }}" />
            {{= stripHTML(name) }} <a href="javascript:void(0)" class="delete"><i class="fa fa-times"></i></a>

        </script>
        <script type="text/javascript">
            function stripHTML(html)
            {
                var tmp = document.createElement("DIV");
                tmp.innerHTML = html;
                return tmp.textContent||tmp.innerText;
            }
        </script>
        <script type="text/template" id="edit_poll_answer_item">
            <input type="text" class="input-answer" placeholder="{{= placeholder }}" name="poll_answers[]" value="{{= post_title }}">
            <input type="hidden" class="answer-color-picker" value="#e6e6e6">
            <div class="function-right">
                <span class="color-box" style="background: {{= poll_answer_color }}"></span>
                <span class="remove-box"><i class="fa fa-trash"></i></span>
            </div>
        </script>
        <script type='text/javascript' src='   wp-includes/js/underscore.min.js?ver=1463369188'></script>
<script type='text/javascript' src='   wp-includes/js/backbone.min.js?ver=1483691855'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/includes/aecore/assets/js/marionette.js?ver=1483511984'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ae_globals = {"ajaxURL":" \/\/ \/wp-admin\/admin-ajax.php","imgURL":" \/\/ \/wp-content\/themes\/qaengine\/img\/","jsURL":" \/\/ \/wp-content\/themes\/qaengine\/includes\/aecore\/assets\/js\/","loadingImg":"<img class=\"loading loading-wheel\" src=\" \/\/ \/wp-content\/themes\/qaengine\/includes\/aecore\/assets\/img\/loading.gif\" alt=\"Loading...\">","loading":"Loading","ae_is_mobile":"0","plupload_config":{"max_file_size":"3mb","url":" \/\/ \/wp-admin\/admin-ajax.php","flash_swf_url":" \/\/ \/wp-includes\/js\/plupload\/plupload.flash.swf","silverlight_xap_url":" \/\/ \/wp-includes\/js\/plupload\/plupload.silverlight.xap"},"homeURL":" \/\/ ","is_submit_post":"","is_submit_project":"","is_single":"","max_images":"5","user_confirm":"0","max_cat":"3","confirm_message":"Are you sure to archive this?","map_zoom":"8","map_center":{"latitude":10,"longitude":106},"file_extension_error":"File extension error","fitbounds":"","limit_free_msg":"You have reached the maximum number of Free posts. Please select another plan.","error":"Please fill all require fields.","geolocation":"0","date_format":"F j, Y","time_format":"g:i a","dates":{"days":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"daysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat","Sun"],"daysMin":["Su","Mo","Tu","We","Th","Fr","Sa","Su"],"months":["January","February","March","April","May","June","July","August","September","October","November","December"],"monthsShort":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},"global_map_style":null,"posts_per_page":"12","pending_questions":"0","pending_answers":"0","introURL":" \/\/ \/intro-2\/","buy_pump_link":" \/\/ \/buy-package\/","gplus_client_id":"","max_width_title":"150","user_id":"0","upload_images":"1","is_infinite":""};
/* ]]> */
</script>
<script type='text/javascript' src='   wp-content/themes/qaengine/includes/aecore/assets/js/appengine.js?ver=1483511984'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/functions.js?ver=1483511937'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var qa_front = {"form_auth":{"error_msg":"Please fill out all fields required.","error_user":"Please enter your user name.","error_email":"Please enter a valid email address.","error_username":"Please enter a valid username.","error_repass":"Please enter the same password as above.","error_url":"Please enter a valid URL.","error_cb":"You must accept the terms & privacy."},"texts":{"require_login":"You must be logged in to perform this action.","enought_points":"You don't have enought points to perform this action.","create_topic":"Create Topic","upload_images":"Upload Images","insert_codes":"Insert Code","no_file_choose":"No file chosen.","require_tags":"Please insert at least one tag.","add_comment":"Add comment","cancel":"Cancel","sign_up":"Sign Up","sign_in":"Sign In","accept_txt":"Accept","best_ans_txt":"Best answer","forgotpass":"Forgot Password","close_tab":"You have made some changes which you might want to save.","confirm_account":"You must activate your account first to create questions \/ answers!.","cancel_auth":"User cancelled login or did not fully authorize.","banned_account":"You account has been banned, you can't make this action!","buy_pump":"You must activate your account first to buy pump package.","uploading":"Uploading...","insert":"Insert","max_lengh_text":"Please enter no more than  characters","max_lengh":false}};
/* ]]> */
</script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/front.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/pumping.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/libs/jquery-countdown/jquery.plugin.min.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/libs/jquery-countdown/jquery.countdown.min.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-includes/js/jquery/ui/core.min.js?ver=1483691856'></script>
<script type='text/javascript' src='   wp-includes/js/jquery/ui/widget.min.js?ver=1483691856'></script>
<script type='text/javascript' src='   wp-includes/js/jquery/ui/mouse.min.js?ver=1483691856'></script>
<script type='text/javascript' src='   wp-includes/js/jquery/ui/draggable.min.js?ver=1483691856'></script>
<script type='text/javascript' src='   wp-includes/js/jquery/ui/slider.min.js?ver=1483691856'></script>
<script type='text/javascript' src='   wp-includes/js/jquery/jquery.ui.touch-punch.js?ver=1432020660'></script>
<script type='text/javascript' src='   wp-admin/js/iris.min.js?ver=1483691855'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var poll_settings = {"max_answer":"5","max_answer_error_text":"You can only create 5 answers.","answer_placeholder":"Your answer","poll_chart_type":"pie_chart","user_voted":""};
/* ]]> */
</script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/poll.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/includes/aecore/assets/js/bootstrap.min.js?ver=1483511984'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/libs/modernizr.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/libs/jquery.simple-text-rotator.min.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/includes/aecore/assets/js/jquery.validate.min.js?ver=1483511984'></script>
<script type='text/javascript' src='   wp-includes/js/jquery/ui/position.min.js?ver=1483691856'></script>
<script type='text/javascript' src='   wp-includes/js/jquery/ui/menu.min.js?ver=1483691856'></script>
<script type='text/javascript' src='   wp-includes/js/wp-a11y.min.js?ver=1483691856'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var uiAutocompleteL10n = {"noResults":"No results found.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate.","itemSelected":"Item selected."};
/* ]]> */
</script>
<script type='text/javascript' src='   wp-includes/js/jquery/ui/autocomplete.min.js?ver=1483691856'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var heartbeatSettings = {"ajaxurl":"\/wp-admin\/admin-ajax.php","interval":"20"};
/* ]]> */
</script>
<script type='text/javascript' src='   wp-includes/js/heartbeat.min.js?ver=1483691855'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/libs/waypoints.min.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/libs/waypoints-sticky.js?ver=1483511937'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var raty = {"hint":["bad","poor","nice","good","gorgeous"]};
/* ]]> */
</script>
<script type='text/javascript' src='   wp-content/themes/qaengine/includes/aecore/assets/js/chosen.js?ver=1483511984'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/libs/classie.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/scripts.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/moment.min.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/bootstrap-datetimepicker.min.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/themes/qaengine/js/colorpicker.js?ver=1483511937'></script>
<script type='text/javascript' src='   wp-content/plugins/et_demobar/js/jquery.mCustomScrollbar.concat.min.js?ver=1464666882'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var main = {"ajaxUrl":" \/\/ \/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='   wp-content/plugins/et_demobar/js/main.js?ver=1482833515'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpColorPickerL10n = {"clear":"Clear","defaultString":"Default","pick":"Select Color"};
/* ]]> */
</script>
<script type='text/javascript' src='   wp-admin/js/color-picker.min.js?ver=1483691855'></script>
<script type='text/javascript' src='   wp-includes/js/wp-embed.min.js?ver=1483691856'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var userSettings = {"url":"\/","uid":"0","time":"1499871799","secure":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='   wp-includes/js/utils.min.js?ver=1483691855'></script>
<script type='text/javascript' src='   wp-admin/js/editor.min.js?ver=1488823242'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpLinkL10n = {"title":"Insert\/edit link","update":"Update","save":"Add Link","noTitle":"(no title)","noMatchesFound":"No results found.","linkSelected":"Link selected.","linkInserted":"Link inserted."};
/* ]]> */
</script>
<script type='text/javascript' src='   wp-includes/js/wplink.min.js?ver=1484164890'></script>

		<script type="text/javascript">
		tinyMCEPreInit = {
			baseURL: "   wp-includes/js/tinymce",
			suffix: ".min",
						mceInit: {'temp_id':{theme:"modern",skin:"lightgray",language:"en",formats:{alignleft: [{selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li", styles: {textAlign:"left"}},{selector: "img,table,dl.wp-caption", classes: "alignleft"}],aligncenter: [{selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li", styles: {textAlign:"center"}},{selector: "img,table,dl.wp-caption", classes: "aligncenter"}],alignright: [{selector: "p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li", styles: {textAlign:"right"}},{selector: "img,table,dl.wp-caption", classes: "alignright"}],strikethrough: {inline: "del"}},relative_urls:false,remove_script_host:false,convert_urls:false,browser_spellcheck:true,fix_list_elements:true,entities:"38,amp,60,lt,62,gt",entity_encoding:"raw",keep_styles:false,cache_suffix:"wp-mce-4506-20170408",preview_styles:"font-family font-size font-weight font-style text-decoration text-transform",end_container_on_empty_block:true,wpeditimage_disable_captions:false,wpeditimage_html5_captions:false,plugins:"charmap,colorpicker,hr,lists,media,paste,tabfocus,textcolor,fullscreen,wordpress,wpautoresize,wpeditimage,wpemoji,wpgallery,wplink,wpdialogs,wptextpattern,wpview,wpembed,image",wp_lang_attr:"en-US",wp_shortcut_labels:{"Heading 1":"access1","Heading 2":"access2","Heading 3":"access3","Heading 4":"access4","Heading 5":"access5","Heading 6":"access6","Paragraph":"access7","Blockquote":"accessQ","Underline":"metaU","Strikethrough":"accessD","Bold":"metaB","Italic":"metaI","Code":"accessX","Align center":"accessC","Align right":"accessR","Align left":"accessL","Justify":"accessJ","Cut":"metaX","Copy":"metaC","Paste":"metaV","Select all":"metaA","Undo":"metaZ","Redo":"metaY","Bullet list":"accessU","Numbered list":"accessO","Insert\/edit image":"accessM","Insert\/edit link":"metaK","Remove link":"accessS","Toolbar Toggle":"accessZ","Insert Read More tag":"accessT","Insert Page Break tag":"accessP","Distraction-free writing mode":"accessW","Keyboard Shortcuts":"accessH"},external_plugins:{"qaimage":" \/\/ \/wp-content\/themes\/qaengine\/js\/plugins\/feimage\/editor_plugin_src.js","qacode":" \/\/ \/wp-content\/themes\/qaengine\/js\/plugins\/fecode\/editor_plugin.js","autoresize":" \/\/ \/wp-content\/themes\/qaengine\/js\/plugins\/autoresize\/editor_plugin.js","autolink":" \/\/ \/wp-content\/themes\/qaengine\/js\/plugins\/autolink\/plugin.min.js"},content_css:"   wp-content/themes/qaengine/css/editor_content.css",selector:"#temp_id",resize:"vertical",menubar:false,wpautop:true,indent:false,toolbar1:"bold,|,italic,|,underline,|,link,unlink,|,bullist,numlist,qaimage,qacode",toolbar2:"",toolbar3:"",toolbar4:"",tabfocus_elements:":prev,:next",body_class:"temp_id post-type-page post-status-publish page-template-page-questions locale-en-us",height:"150",autoresize_min_height:"150",force_p_newlines:false,statusbar:false,force_br_newlines:false,setup:function(ed){
                ed.onChange.add(function(ed, l) {
                    var content = ed.getContent();
                    if(ed.isDirty() || content === '' ){
                        ed.save();
                        jQuery(ed.getElement()).blur();   trigger change event for textarea
                    }

                });

                  We set a tabindex value to the iframe instead of the initial textarea
                ed.onInit.add(function() {
                    var editorId = ed.editorId,
                        textarea = jQuery('#'+editorId);
                    jQuery('#'+editorId+'_ifr').attr('tabindex', textarea.attr('tabindex'));
                    textarea.attr('tabindex', null);
                });
            }}},
			qtInit: {},
			ref: {plugins:"charmap,colorpicker,hr,lists,media,paste,tabfocus,textcolor,fullscreen,wordpress,wpautoresize,wpeditimage,wpemoji,wpgallery,wplink,wpdialogs,wptextpattern,wpview,wpembed,image",theme:"modern",language:"en"},
			load_ext: function(url,lang){var sl=tinymce.ScriptLoader;sl.markDone(url+'/langs/'+lang+'.js');sl.markDone(url+'/langs/'+lang+'_dlg.js');}
		};
		</script>
		<script type='text/javascript' src='   wp-includes/js/tinymce/tinymce.min.js?ver=4506-20170408'></script>
<script type='text/javascript' src='   wp-includes/js/tinymce/plugins/compat3x/plugin.min.js?ver=4506-20170408'></script>
<script type='text/javascript'>
tinymce.addI18n( 'en', {"Ok":"OK","Bullet list":"Bulleted list","Spellcheck":"Check Spelling","Row properties":"Table row properties","Cell properties":"Table cell properties","Paste row before":"Paste table row before","Paste row after":"Paste table row after","Cut row":"Cut table row","Copy row":"Copy table row","Merge cells":"Merge table cells","Split cell":"Split table cell","Paste is now in plain text mode. Contents will now be pasted as plain text until you toggle this option off.":"Paste is now in plain text mode. Contents will now be pasted as plain text until you toggle this option off.\n\nIf you\u2019re looking to paste rich content from Microsoft Word, try turning this option off. The editor will clean up text pasted from Word automatically.","Rich Text Area. Press ALT-F9 for menu. Press ALT-F10 for toolbar. Press ALT-0 for help":"Rich Text Area. Press Alt-Shift-H for help.","You have unsaved changes are you sure you want to navigate away?":"The changes you made will be lost if you navigate away from this page.","Your browser doesn't support direct access to the clipboard. Please use the Ctrl+X\/C\/V keyboard shortcuts instead.":"Your browser does not support direct access to the clipboard. Please use keyboard shortcuts or your browser\u2019s edit menu instead.","Edit ":"Edit"});
tinymce.ScriptLoader.markDone( '   wp-includes/js/tinymce/langs/en.js' );
</script>
<script type='text/javascript' src='   wp-includes/js/tinymce/langs/wp-langs-en.js?ver=4506-20170408'></script>
		<script type="text/javascript">
		tinyMCEPreInit.load_ext("   wp-content/themes/qaengine/js/plugins/feimage", "en");
tinymce.PluginManager.load("qaimage", "   wp-content/themes/qaengine/js/plugins/feimage/editor_plugin_src.js");
tinyMCEPreInit.load_ext("   wp-content/themes/qaengine/js/plugins/fecode", "en");
tinymce.PluginManager.load("qacode", "   wp-content/themes/qaengine/js/plugins/fecode/editor_plugin.js");
tinyMCEPreInit.load_ext("   wp-content/themes/qaengine/js/plugins/autoresize", "en");
tinymce.PluginManager.load("autoresize", "   wp-content/themes/qaengine/js/plugins/autoresize/editor_plugin.js");
tinyMCEPreInit.load_ext("   wp-content/themes/qaengine/js/plugins/autolink", "en");
tinymce.PluginManager.load("autolink", "   wp-content/themes/qaengine/js/plugins/autolink/plugin.min.js");

var ajaxurl = "/wp-admin/admin-ajax.php";
		( function() {
			var init, id, $wrap;

			if ( typeof tinymce !== 'undefined' ) {
				for ( id in tinyMCEPreInit.mceInit ) {
					init = tinyMCEPreInit.mceInit[id];
					$wrap = tinymce.$( '#wp-' + id + '-wrap' );

					if ( ( $wrap.hasClass( 'tmce-active' ) || ! tinyMCEPreInit.qtInit.hasOwnProperty( id ) ) && ! init.wp_skip_init ) {
						tinymce.init( init );

						if ( ! window.wpActiveEditor ) {
							window.wpActiveEditor = id;
						}
					}
				}
			}

			if ( typeof quicktags !== 'undefined' ) {
				for ( id in tinyMCEPreInit.qtInit ) {
					quicktags( tinyMCEPreInit.qtInit[id] );

					if ( ! window.wpActiveEditor ) {
						window.wpActiveEditor = id;
					}
				}
			}
		}());
		</script>
				<div id="wp-link-backdrop" style="display: none"></div>
		<div id="wp-link-wrap" class="wp-core-ui" style="display: none" role="dialog" aria-labelledby="link-modal-title">
		<form id="wp-link" tabindex="-1">
		<input type="hidden" id="_ajax_linking_nonce" name="_ajax_linking_nonce" value="c7a596dcaf" />		<h1 id="link-modal-title">Insert/edit link</h1>
		<button type="button" id="wp-link-close"><span class="screen-reader-text">Close</span></button>
		<div id="link-selector">
			<div id="link-options">
				<p class="howto" id="wplink-enter-url">Enter the destination URL</p>
				<div>
					<label><span>URL</span>
					<input id="wp-link-url" type="text" aria-describedby="wplink-enter-url" /></label>
				</div>
				<div class="wp-link-text-field">
					<label><span>Link Text</span>
					<input id="wp-link-text" type="text" /></label>
				</div>
				<div class="link-target">
					<label><span></span>
					<input type="checkbox" id="wp-link-target" /> Open link in a new tab</label>
				</div>
			</div>
			<p class="howto" id="wplink-link-existing-content">Or link to existing content</p>
			<div id="search-panel">
				<div class="link-search-wrapper">
					<label>
						<span class="search-label">Search</span>
						<input type="search" id="wp-link-search" class="link-search-field" autocomplete="off" aria-describedby="wplink-link-existing-content" />
						<span class="spinner"></span>
					</label>
				</div>
				<div id="search-results" class="query-results" tabindex="0">
					<ul></ul>
					<div class="river-waiting">
						<span class="spinner"></span>
					</div>
				</div>
				<div id="most-recent-results" class="query-results" tabindex="0">
					<div class="query-notice" id="query-notice-message">
						<em class="query-notice-default">No search term specified. Showing recent items.</em>
						<em class="query-notice-hint screen-reader-text">Search or use up and down arrow keys to select an item.</em>
					</div>
					<ul></ul>
					<div class="river-waiting">
						<span class="spinner"></span>
					</div>
 				</div>
 			</div>
		</div>
		<div class="submitbox">
			<div id="wp-link-cancel">
				<button type="button" class="button">Cancel</button>
			</div>
			<div id="wp-link-update">
				<input type="submit" value="Add Link" class="button <b></b>utton-primary" id="wp-link-submit" name="wp-link-submit">
			</div>
		</div>
		</form>
		</div>
		        <style type="text/css">
            .post-a-job .step .toggle-title,
            .btn-background,
            .icon-border {
                box-sizing: content-box;
            }

            .et-plugin-demobar .icon:before {
                font-size: 20px;
            }
        </style>
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
				                if (window.location.hash == '#register') {
                    setTimeout(function () {
                        $('.login-url').trigger('click');
                    }, 300);
                }
				            });
        </script>

		            <!-- Google Tag Manager -->
            <noscript>
                <iframe src="//www.googletagmanager.com/ns.html?id=GTM-TS4RDD"
                        height="0" width="0" style="display:none;visibility:hidden"></iframe>
            </noscript>
            <script>(function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start': new Date().getTime(), event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        '//www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-TS4RDD');</script>
            <!-- End Google Tag Manager -->
			
		                    <!-- PACKAGE -->
                
			            <!-- END / PACKAGE -->
            <div class="demobar-blur-theme"></div>
					<script type="text/javascript">
            _.templateSettings = {
                evaluate: /\<\#(.+?)\#\>/g,
                interpolate: /\{\{=(.+?)\}\}/g,
                escape: /\{\{-(.+?)\}\}/g
            };
        </script>
        	

    	</body><!-- END BODY -->
</html>
