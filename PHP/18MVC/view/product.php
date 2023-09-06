<div class="container">
			<div class="row ">
				<div class="col-md-8 col-lg-9">
					<div class="p-t-80 p-b-124 bo5-r p-r-50 h-full p-r-0-md bo-none-md">
						<!-- Block4 -->
						<div class="blo4 p-b-63">
							<!-- - -->
							<div class="pic-blo4 hov-img-zoom bo-rad-10 pos-relative">
								<a href="blog-detail.html">
									<img src="<?php echo $product->image; ?>" alt="IMG-BLOG">
								</a>

								<div class="date-blo4 flex-col-c-m">
									<span class="txt30 m-b-4">
                                        <?php echo $product->price; ?>
									</span>
                                    
									<span class="txt31">
                                        $
									</span>
								</div>
							</div>

							<!-- - -->
							<div class="text-blo4 p-t-33">
								<h4 class="p-b-16">
									<a href="blog-detail.html" class="tit9"><?php echo $product->name; ?></a>
								</h4>

								<div class="txt32 flex-w p-b-24">
									<span>
										by Admin
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										28 December, 2018
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										Cooking, Food
										<span class="m-r-6 m-l-4">|</span>
									</span>

									<span>
										8 Comments
									</span>
								</div>

								<p>
    <?php echo $product->description; ?>
                                </p>
							</div>
						</div>

						<!-- Leave a comment -->
						<form class="leave-comment p-t-10">
							<h4 class="txt33 p-b-14">
								Leave a Comment
							</h4>

							<p>
								Your email address will not be published. Required fields are marked *
							</p>

							<textarea class="bo-rad-10 size29 bo2 txt10 p-l-20 p-t-15 m-b-10 m-t-40" name="commentent" placeholder="Comment..."></textarea>

							<div class="size30 bo2 bo-rad-10 m-t-3 m-b-20">
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="name" placeholder="Name *">
							</div>

							<div class="size30 bo2 bo-rad-10 m-t-3 m-b-20">
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="email" placeholder="Email *">
							</div>

							<div class="size30 bo2 bo-rad-10 m-t-3 m-b-30">
								<input class="bo-rad-10 sizefull txt10 p-l-20" type="text" name="website" placeholder="Website">
							</div>

							<!-- Button3 -->
							<button type="submit" class="btn3 flex-c-m size31 txt11 trans-0-4">
								Post Comment
							</button>
						</form>
					</div>
				</div>

				<div class="col-md-4 col-lg-3">
					<div class="sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md">
						<!-- Search -->
						<div class="search-sidebar2 size12 bo2 pos-relative">
							<input class="input-search-sidebar2 txt10 p-l-20 p-r-55" type="text" name="search" placeholder="Search">
							<button class="btn-search-sidebar2 flex-c-m ti-search trans-0-4"></button>
						</div>

						<!-- Categories -->
						<div class="categories">
							<h4 class="txt33 bo5-b p-b-35 p-t-58">
								Categories
							</h4>

							<ul>
								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										Cooking recipe
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										Delicious foods
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										Events Design
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										Restaurant Place
									</a>
								</li>

								<li class="bo5-b p-t-8 p-b-8">
									<a href="#" class="txt27">
										WordPress
									</a>
								</li>
							</ul>
						</div>

						<!-- Most Popular -->
						<div class="popular">
							<h4 class="txt33 p-b-35 p-t-58">
								Most popular
							</h4>

							<ul>
								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="<?php echo $this->baseurl; ?>images/blog-11.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Best Places for Wine
										</a>

										<span class="txt14">
											3 days ago
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="<?php echo $this->baseurl; ?>images/blog-12.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Eggs and Cheese
										</a>

										<span class="txt14">
											July 2, 2017
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="<?php echo $this->baseurl; ?>images/blog-13.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Style the Wedding Party
										</a>

										<span class="txt14">
											May 28, 2017
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="<?php echo $this->baseurl; ?>images/blog-14.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Cooking recipe Delicious
										</a>

										<span class="txt14">
											May 25, 2017
										</span>
									</div>
								</li>

								<li class="flex-w m-b-25">
									<div class="size16 bo-rad-10 wrap-pic-w of-hidden m-r-18">
										<a href="#">
											<img src="<?php echo $this->baseurl; ?>images/blog-15.jpg" alt="IMG-BLOG">
										</a>
									</div>

									<div class="size28">
										<a href="#" class="dis-block txt28 m-b-8">
											Pizza is prepared fresh
										</a>

										<span class="txt14">
											May 2, 2017
										</span>
									</div>
								</li>
							</ul>
						</div>


						<!-- Archive -->
						<div class="archive">
							<h4 class="txt33 p-b-20 p-t-43">
								Archive
							</h4>

							<ul>
								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										uly 2018
									</a>

									<span class="txt29">
										(9)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										June 2018
									</a>

									<span class="txt29">
										(39)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										May 2018
									</a>

									<span class="txt29">
										(29)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										April  2018
									</a>

									<span class="txt29">
										(35)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										March 2018
									</a>

									<span class="txt29">
										(22)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										February 2018
									</a>

									<span class="txt29">
										(32)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										January 2018
									</a>

									<span class="txt29">
										(21)
									</span>
								</li>

								<li class="flex-sb-m p-t-8 p-b-8">
									<a href="#" class="txt27">
										December 2017
									</a>

									<span class="txt29">
										(26)
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>