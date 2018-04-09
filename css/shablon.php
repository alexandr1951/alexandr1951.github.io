<?php


use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">


<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
		<div class="top1">
			<a class="a1" href="#"><img src="img/logo.png"></a>
				<div class=s1>
					<div class=b1>
						<form action="salat/salat.html">
							<button id="salat"> Вторые блюда </button>
						</form>
					</div>
					<div class=b2>
						<form action="https://www.youtube.com/">	
							<button> Первые блюда </button>
						</form>
					</div>
					<div class=b3>
						<form action="https://www.youtube.com/">
							<button> Закуски и бутерброды </button>
						</form>
					</div>
					<div class=b4>
						<form action="http://basic/web/index.php?r=site/salat">
							<button> Салаты </button>
						</form>
					</div>
				</div>
				<div class=s2>
					<div class=b5>
						<form action="https://www.youtube.com/">
							<button> Торты и пирожные </button>
						</form>
					</div>
					<div class=b6>
						<form action="https://www.youtube.com/">
							<button> Десерты, напитки </button>
						</form>
					</div>
				</div>
				<div class=s3>
					<div class=b7>
						<form action="https://www.youtube.com/">
							<button> Разное </button>
						</form>
					</div>
				</div>
			</div>
				
				
				<div class="bottom1">
				
				
				</div>
				
						<div class="bottom2">
		<table>
		<tr>
		<td>
		<a href="#"><img src="img/twitter.png" width="50px" height="50px" align="middle"	></a>
		<a href="#"><img src="img/vk.png" width="50px" height="50px"	 	align="middle"  ></a> 
		<a href="#"><img src="img/facebook.png" width="50px" height="50px" align="middle"   ></a>
		</td>
		<td>
		<h2>8-800-555-35333-35</h2>
		</td>
		</tr>
		</table>
			
		</div>
	
	
	
	<?php $this->endBody() ?>
</body>

</html>

<?php $this->endPage() ?>