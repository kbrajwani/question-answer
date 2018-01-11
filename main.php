
		<div class="container-fluid">

			<div class="row">
<?php require 'share.php'; ?>

				<?php

				require 'class/class.php';
				$obj=new database();
				$res=$obj->getall();
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
                    <a itemprop="author" itemscope itemtype="http://schema.org/Person" href="   blog/member/alex/">
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
echo '<div class="modal" id="questiondetail'.$row["qid"].'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
        	<a data-container="body" data-toggle="popover" data-content="You must have 5 points to vote up."  href="javascript:void(0)" data-name="vote_up"
                class="action vote vote-up img-circle " >
        		<i class="fa fa-chevron-up"></i>
        	</a>
        </li>
        <!--// vote up -->

        <!--vote point -->
        <li>
        	<span itemprop="upvoteCount" class="vote-count">1</span>
        </li>
        <!--// vote point -->
        <!-- vote down -->
        <li title="This is not useful">
        	<a  data-container="body" data-toggle="popover" data-content="You must have 500 points to vote down."  href="javascript:void(0)" data-name="vote_down"
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
				while($row1=$res1->fetch_assoc())
				{
					echo '<a class="q-tag" href="">
                              <p itemprop="text" class="content"><span style="color: #545454;">';
                   echo  $row1["adesc"];
				   echo '	  </span></p>     </a>';
				}
				echo '			  
						
							  
                            </li>
                                                    
                                            </ul>
											<div class="row">
 <a href="">
                            <span itemprop="author" itemscope itemtype="">
                                <span class="author-avatar">
                                    <img itemprop="image" src="'.$row["image"].'" class="avatar" alt="" />                                </span>
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
<form class="form_modal_style" name="answer" >
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
</div></div>

