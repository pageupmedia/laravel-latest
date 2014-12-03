 <!-- /#wrapper -->
<?php if($page_name=='feed' or $page_name=='sort' or $page_name=='bookmark1') { ?>
    <!-- jQuery Version 1.11.0 -->


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL::to('/') ;?>/admin/sidekyc/js/bootstrap.min.js"></script>
    <script src="<?php echo URL::to('/') ;?>/admin/sidekyc/js/masonry.pkgd.min.js"></script>
	<!-- custome code -->
	<script>
		$(function(){
			$('#cat').click(function(){ $('#ordr_form').submit(); });
			$('#bookmark1').click(function(){ $('#bookmark_form').submit();});
			//alert('fdhd');
			/*var ordr=$('#cat_order').val();
			if(ordr=='asc'){ $('#cat_order').val('desc');
			$('.caret').css('border-top','0'); $('.caret').css('border-bottom','4px solid');
			}else{$('#cat_order').val('asc'); $('.caret').css('border-top','4px solid'); $('.caret').css('border-bottom','0');}
			//window.location.href="<?php echo URL::to('/') ;?>/ordr/?ordr="+ordr;
			//$('#ordr_form').submit();
	
				var client = 'ordr='+ordr;
			//$('#feed').submit();
			//	var client = 'client='+$('#client').val();
			
						 $.ajax({                                     
									  type:"POST",
									  url:'<?php echo URL::to('/') ;?>/sort',                  
									  data: client,                        				   
									  dataType: 'json',                 
									  success: function(data)
									  {  
										$('.news-container').empty();
										 $.each(data, function(n) {
										 //-------------html code----------------
										 if(data[n].excerpt=='' && data[n].image_name!='') {
										 var html = '<div class="news-box '+data[n].classname+'">'+
													'<div class="news-wrapper">'+
													'<div class="news-content">'+
													'<div class="category">'+data[n].category+'</div>'+
													'<h3>'+data[n].short_notes+'</h3>'+
													'<div class="news-source">'+
													'<span class="news-logo google"></span>'+
													'<span class="news-title">'+data[n].title+'</span>'+
													'</div></div>'+
							'<img class="news-image" src="<?php echo URL::to('/') ;?>'+data[n].image_url+'" />'+
							'</div><div class="action-container">'+
							'<div class="action left"><span class="icon heart"></span><span class="n-like">23</span></div>'+
							'<div class="action left"><span class="icon comment"></span><span class="n-comment">2</span></div>'+
							'<div class="action right"><span class="icon star"></span></div>'+
							'</div><div class="button-container">'+
							'<button class="btn yes">YES</button>'+
							'<button class="btn no">NO</button></div></div>';
							 } if(data[n].excerpt!='' && data[n].image_name!='') {
							 var html = '<div class="news-box '+data[n].classname+'">'+
										'<div class="news-wrapper"><div class="news-content">'+
										'<div class="category">'+data[n].category+'</div>'+
										'<h3>'+data[n].short_notes+'</h3>'+
										'<div class="news-source">'+
										'<span class="news-logo forbes"></span>'+
										'<span class="news-title">'+data[n].title+'</div>'+
										'<p>'+data[n].excerpt+'</p></div>'+
							'<img class="news-image" src="<?php echo URL::to('/') ;?>'+data[n].image_url+'" />'+
							'</div><div class="action-container"><div class="action left">'+
							'<span class="icon heart"></span><span class="n-like">23</span></div>'+
						'<div class="action left"><span class="icon comment"></span><span class="n-comment">2</span></div>'+
							'<div class="action right"><span class="icon star"></span></div></div>'+
						'<div class="button-container"><button class="btn yes">YES</button><button class="btn no">NO</button>'+
						'</div></div>';
							 } if(data[n].image_name=='' && data[n].excerpt!='' ) {
							 var html = '<div class="news-box '+data[n].classname+'">'+
										'<div class="news-wrapper">'+
										'<div class="news-content">'+
										'<div class="category">'+data[n].category+'</div>'+
										'<h3>'+data[n].short_notes+'</h3>'+
										'<div class="news-source">'+
										'<span class="news-logo google"></span>'+
										'<span class="news-title">'+data[n].title+'</span>'+
										'</div><p>'+data[n].excerpt+'</p></div></div>'+
										'<div class="action-container">'+
										'<div class="action left"><span class="icon heart"></span>'+
										'<span class="n-like">23</span></div>'+
										'<div class="action left"><span class="icon comment"></span>'+
										'<span class="n-comment">2</span></div>'+
										'<div class="action right"><span class="icon star"></span></div>'+
										'</div><div class="button-container"><button class="btn yes">YES</button>'+
										'<button class="btn no">NO</button></div></div>';
							 } if(data[n].image_name=='' && data[n].excerpt==''){
								var html = ' <div class="news-box '+data[n].classname+'">'+
											'<div class="news-wrapper">'+
											'<div class="news-content">'+
											'<div class="category">'+data[n].category+'</div>'+
											'<h3>'+data[n].short_notes+'</h3>'+
											'<div class="news-source">'+
											'<span class="news-logo google"></span>'+
											'<span class="news-title">'+data[n].title+'</span>'+
											'</div></div></div>'+
											'<div class="action-container">'+
											'<div class="action left"><span class="icon heart"></span>'+
											'<span class="n-like">23</span></div>'+
											'<div class="action left"><span class="icon comment"></span>'+
											'<span class="n-comment">2</span></div>'+
											'<div class="action right"><span class="icon star"></span></div>'+
											'</div><div class="button-container"><button class="btn yes">YES</button>'+
											'<button class="btn no">NO</button></div></div>';
							 }
										 //----------------end html code---------
										 $('.news-container').append(html);
										 
										});
										
										<!-- menu script -->
										 var $container = $('.news-container');
										// init
										$container.masonry({
										  itemSelector: '.news-box'
										});
																				
										<!-- end menu script-->
										
									  }
									
								
						},'json'); 
			
		
			
		// -----------------------------add account-----------------------------
			
		*/
			
			<!-- Menu toggle script -->
			
		});
	</script>
    <!-- Menu Toggle Script -->
    <script>
    var $container = $('.news-container');
    // init
    $container.masonry({
      itemSelector: '.news-box'
    });
    $(window).scroll(function() {
        var x = $(".news-container").height() + $(".news-container").offset().top - $(window).height() - 10;
        if($(window).scrollTop() > x) {
           $(".loading").css("display","block");
           $.ajax({
              url: $(".nav a.next").attr("href"),
              dataType: "html"
           }).done(function(data) {
              //set next page
                var href = $( data ).find(".nav a.next").attr("href"); 
                $(".nav a.next").attr("href", href);
                  
                //append news-box
                var arr = $( data ).find(".news-container .news-box");
                for(var i=0;i<arr.length;i++) {
                    $('.news-container').append( arr.eq(i) ).masonry( 'appended', arr.eq(i) );
                }

                //hide loading
                $(".loading").css("display","none");

                  //bind event
                $(".btn.yes").off("click").click(function(){
                    $(this).parents(".news-box").eq(0).find(".button-container").fadeOut(100, function(){
                        $(this).parents(".news-box").eq(0).find(".action-container").fadeIn(100,function(){
                            var $news_box = $(this).parents(".news-box").eq(0);
                            var $news_box_clone = $news_box.clone(true);
                            $('.news-container').masonry( 'remove', $news_box );
                            $('.news-container').prepend( $news_box_clone ).masonry( 'prepended', $news_box_clone );    
                        });
                    });
                })
                $(".btn.no").off("click").click(function(){
                    // var $dummy = $(".news-container .news-box").eq(0);
                    var $news_box = $(this).parents(".news-box").eq(0);
                    $news_box.fadeOut(function() {
                        $news_box.removeClass('news_box');
                        $('.news-container').masonry( 'destroy' );
                        $container.masonry({
                          itemSelector: '.news-box'
                        });
                
                    })          
                })
                $(".news-box")
                    .mouseenter(function(e) {
                        var target = $(e.target);
                        if(!target.is('.action-container') && !target.is('.button-container')) {
                            $(this).find(".action-container").fadeOut();
                            $(this).find(".button-container").fadeIn();
                        }
                    })
                    .mouseleave(function(e) {
                        var target = $(e.target);
                        if(!target.is('.action-container') && !target.is('.button-container')) {
                            $(this).find(".action-container").fadeIn();
                            $(this).find(".button-container").fadeOut();
                        }
                    });
                $(".button-container").mouseleave(function(e) {
                    $(this).parents(".news-box").eq(0).find(".action-container").fadeIn();
                    $(this).parents(".news-box").eq(0).find(".button-container").fadeOut();
                })
            });
            
        }
    })
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $(".btn.yes").click(function(){
        $(this).parents(".news-box").eq(0).find(".button-container").fadeOut(100, function(){
            $(this).parents(".news-box").eq(0).find(".action-container").fadeIn(100,function(){
                var $news_box = $(this).parents(".news-box").eq(0);
                var $news_box_clone = $news_box.clone(true);
                $('.news-container').masonry( 'remove', $news_box );
                $('.news-container').prepend( $news_box_clone ).masonry( 'prepended', $news_box_clone );    
            });
        });
    })
    $(".btn.no").click(function(){
        // var $dummy = $(".news-container .news-box").eq(0);
        var $news_box = $(this).parents(".news-box").eq(0);
        $news_box.fadeOut(function() {
            $news_box.removeClass('news_box');
            $('.news-container').masonry( 'destroy' );
            $container.masonry({
              itemSelector: '.news-box'
            });
    
        })          
    })
    $("body").click(function(e){
        var target = $(e.target);
        if(!target.is('.client-dropdown') && !target.is('.dropdown-box')) {
           if ( $('.client-dropdown').is(':visible') ) $(".client-dropdown").slideUp();
        }
        
    })
    $(".news-box")
        .mouseenter(function(e) {
            var target = $(e.target);
            if(!target.is('.action-container') && !target.is('.button-container')) {
                $(this).find(".action-container").fadeOut();
                $(this).find(".button-container").fadeIn();
            }
        })
        .mouseleave(function(e) {
            var target = $(e.target);
            if(!target.is('.action-container') && !target.is('.button-container')) {
                $(this).find(".action-container").fadeIn();
                $(this).find(".button-container").fadeOut();
            }
        });
    $(".button-container").mouseleave(function(e) {
        $(this).parents(".news-box").eq(0).find(".action-container").fadeIn();
        $(this).parents(".news-box").eq(0).find(".button-container").fadeOut();
    })
    $(".dropdown-box").click(function(){
        $(".client-dropdown").slideToggle();
    });
    $(".client-dropdown li").click(function(e){
        $(".dropdown-box").html($(this).html());
        $(".client-dropdown").slideUp();
    })
    </script>
<?php } else if($page_name=='dashboard'){ ?>
 <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo URL::to('/') ;?>/admin/sidekyc/js/jquery-1.11.0.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo URL::to('/') ;?>/admin/sidekyc/js/bootstrap.min.js"></script>
    
    <script src="<?php echo URL::to('/') ;?>/admin/sidekyc/js/chart.js"></script>
    <script src="<?php echo URL::to('/') ;?>/admin/sidekyc/js/jquery.tablesorter.min.js"></script>
    <script src="<?php echo URL::to('/') ;?>/admin/sidekyc/js/summernote.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    
    var bar = $("#bar-chart").get(0).getContext("2d");
    var line = $("#line-chart").get(0).getContext("2d");

    var bar_data = {
        labels: ["JUNE", "JULY", "AUG", "SEPT", "OCT", "NOV", "DEC", "JAN", "FEB"],
        datasets: [
            {
                label: "",
                fillColor: "rgba(41,166,202,0.9)",
                highlightFill: "rgba(41,166,202,0.75)",
                data: [500, 1200, 2300, 1800, 750, 1250, 1200, 2200, 1300]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(41,199,202,0.9)",
                highlightFill: "rgba(41,199,202,0.75)",
                data: [1100, 1900, 2800, 3000, 2750, 1500, 2200, 3800, 3000]
            }
        ]
    };
    var barChart = new Chart(bar).Bar(bar_data, {
        barShowStroke: false,
        scaleGridLineColor: "rgba(242,242,242,1)",
        barDatasetSpacing : 2,
        barValueSpacing : 12,
        scaleFontFamily: "'Open Sans'",
        scaleFontSize: 10,
        scaleFontStyle: "bold",
        scaleFontColor: "#5b5c5f",
        scaleLineColor: "rgba(0,0,0,0)",
    });

    var line_data = {
        labels: ["05 JUN", "06 JUN", "07 JUN", "08 JUN", "09 JUN", "10 JUN"],
        datasets: [
            {
                label: "",
                fillColor: "rgba(220,220,220,0)",
                strokeColor: "rgba(41,199,202,1)",
                pointColor: "rgba(255,255,255,1)",
                pointStrokeColor: "#29c7ca",
                data: [50, 110, 75, 120, 210, 160]
            }
        ]
    };
    var lineChart = new Chart(line).Line(line_data, {
        bezierCurve : false,
        datasetFill : false,
        pointDotStrokeWidth : 3,
        pointDotRadius : 4,
        datasetStrokeWidth : 3,
        scaleFontFamily: "'Open Sans'",
        scaleFontSize: 10,
        scaleFontStyle: "bold",
        scaleFontColor: "#5b5c5f",
        scaleShowLabels: false,
        scaleLineColor: "rgba(0,0,0,0)",
        tooltipFillColor: "#2c2e33",
        tooltipFontFamily: "'Open Sans'",
        tooltipFontSize: 16,
        tooltipFontStyle: "normal",
        tooltipFontColor: "#fff",
        tooltipYPadding: 7,
        tooltipXPadding: 10,
        tooltipCaretSize: 5,
        tooltipCornerRadius: 3,
        tooltipXOffset: 10,
        tooltipTemplate: "<%= value %>",
    });

    $('#text-editor').summernote({
        height: 125,
        minHeight: 125,             // set minimum height of editor
        maxHeight: 125,
        toolbar: [
            ['fontname', ['fontname']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['style', ['bold', 'italic', 'underline']],
            ['paragraph', ['paragraph']]
          ],
    });

    $("#client-table").tablesorter(); 
    
    </script>
<?php } ?>
</body>

</html>
