<!DOCTYPE html>
<html>
<head>
<title>HTML5/CSS3 Responsive Image Slider</title>
<style type="text/css">

#slider {
	overflow: hidden;
}
#slider figure {
	position: relative;
	width: 20%;
	margin: 0;
	right: 0;
	animation: 20s slider infinite;
}
#slider figure img {
	float: right;
	width: 20%;
}

@keyframes slider {
	2% {
		right: -10%;
	}
	2% {
		right: -10%;
	}
	10% {
		right: -10%;
	}
	20% {
		right: -10%;
	}
	20% {
		right: -10%;
	}
	20% {
		right: -10%;
	}
	20% {
		right: -10%;
	}
	20% {
		right: 10%;
	}
	20% {
		right: 10%;
	}
}

</style>
</head>
<body>

	<div id="slider">
		<figure>
			<img src="https://media4.giphy.com/media/2Y7jWoJEmPB0qj6dRG/giphy.gif">
			<img src="https://media4.giphy.com/media/2Y7jWoJEmPB0qj6dRG/giphy.gif">
			<img src="https://media4.giphy.com/media/2Y7jWoJEmPB0qj6dRG/giphy.gif">
			<img src="https://media4.giphy.com/media/2Y7jWoJEmPB0qj6dRG/giphy.gif">
			
		</figure>
	</div>

</body>
</html>







<!-- Begin Social Share -->
<style>
	.btn:hover {
		color: white;
		opacity: .20;
		transform: scale(1.02);
	}
</style>

<!-- Modal -->
<div class="modal fade" id="socialModal" style="font-family: 'Poppins', sans-serif;">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content" style="background-color: rgba(255, 255, 255, .9)!important;border: 0;">
      <div class="modal-header" style="display: none;">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
			<div class="modal-body">
				<div class="container-fluid text-center">
					<div class="row justify-content-center px-0">
						<div class="col-12">
							
						</div>
						
						
					</div>
				</div>
			</div>
    </div>
  </div>
</div>



