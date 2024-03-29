<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Blog Name - Blogs | The Green Perch</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/greenperch/assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<script src="/greenperch/assets/js/script.js" defer></script>

	<link rel="icon" href="/greenperch/assets/images/favicon.png">
</head>

<body>

	<?php
	include '../templates/navbar.html';
	?>

	<div class="flex containerBlock">
		<div class="flex flexCol container">

			<div class="flex flexCol" style="height: auto; width: 100%; padding-top: 50px; gap: 35px;">
				<h1 style="color: var(--accent2); font-weight: 600; width: 100%;">Blog Title</h1>

				<div class="flex flexRow" style="width: 100%; justify-content: space-between;">
					<div class="flex flexCol" style="height: auto; width: 100%; gap: 50px;">

						<div style="height: 700px; width: 100%;">
							<img src="/greenperch/assets/images/temp.png" style="height: 100%; width: 100%; object-fit: cover; object-position: center; border-radius: 5px;">
						</div>

						<span class="flex flexCol" style="gap: 50px;">
							<span class="flex flexCol" style="gap: 20px;">
								<h1 style="color: var(--balckGrey); font-size: 22px; font-weight: 600; width: 100%;">Sub Title</h1>
								<p style="line-height: 1.7; font-size: 18px; text-align: justify; text-align-last: left;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem dolorem minus tenetur fugit beatae debitis quas quasi recusandae quo! Quod eos dicta tempora minus aliquam quis dolores, magni excepturi nam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, impedit non magni quasi placeat rerum cupiditate corporis dolores velit. voluptates provident ducimus temporibus impedit maiores iusto odit debitis omnis?</p>
							</span>

							<span class="flex flexCol" style="gap: 20px;">
								<h1 style="color: var(--balckGrey); font-size: 22px; font-weight: 600; width: 100%;">Sub Title</h1>
								<p style="line-height: 1.7; font-size: 18px; text-align: justify; text-align-last: left;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam eum quos mollitia facilis. Quae eaque aliquam vel nemo neque doloremque officiis! Tenetur cum illo reiciendis facilis possimus et quam tempora. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus maxime, mollitia porro laborum architecto consectetur. Ea ipsa accusantium, cumque totam repellat mollitia. Quod dolor nulla iure possimus voluptatum soluta in.</p>
								<p style="line-height: 1.7; font-size: 18px; text-align: justify; text-align-last: left;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore voluptatum esse animi quia labore? Eveniet, ex officiis ullam expedita quis ducimus officia perspiciatis quas eum nesciunt laboriosam quo temporibus aliquam.</p>
							</span>

							<a class="anchorBtn" style="width: fit-content;" href="/greenperch/blogs.php">Sample Button</a>
						</span>

					</div>
				</div>
			</div>

		</div>
	</div>

	<?php
	include '../templates/footer.html';
	?>

	<!-- SCROLL-TO-TOP START =====================================================-->
	<button class="flex" id="toTopBtn" title="Scroll to Top">
		<i class="fa-solid fa-chevron-up"></i>
	</button>
	<!--======================================================= SCROLL-TO-TOP END -->

</body>

</html>