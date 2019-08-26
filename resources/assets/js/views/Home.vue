<template>
    <div id="page-wrapper">
				<div class="row page-titles">
					<div class="col-md-5 align-self-center">
						<h3>Dashboard</h3>
					</div>
					<div class="col-md-7 align-self-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item active"><a href="../post.html" class="btn btn-freelance-two bg-success"><strong>Post Ad</strong></a></li>
						</ol>
					</div>
				</div>
				<div class="container-fluid">

					<!-- /row -->
					<div class="row">
						<div class="col-md-3 col-sm-6">
							<div class="widget standard-widget">
								<div class="row">
									<div class="widget-caption info">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-briefcase"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>5246</h3>
												<span>Ads Posted</span>
											</div>
										</div>
										<div class="col-xs-12">
											<div class="widget-line bg-info">
												<span style="width:72%;" class="bg-info widget-horigental-line"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="widget standard-widget">
								<div class="row">
									<div class="widget-caption danger">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-happy"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>5872</h3>
												<span>professionals</span>
											</div>
										</div>
										<div class="col-xs-12">
											<div class="widget-line bg-danger">
												<span style="width:65%;" class="bg-danger widget-horigental-line"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="widget standard-widget">
								<div class="row">
									<div class="widget-caption success">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-tools"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>9586</h3>
												<span>Tasks Posted</span>
											</div>
										</div>
										<div class="col-xs-12">
											<div class="widget-line bg-sucess">
												<span style="width:55%;" class="bg-success widget-horigental-line"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3 col-sm-6">
							<div class="widget standard-widget">
								<div class="row">
									<div class="widget-caption warning">
										<div class="col-xs-4 no-pad">
											<i class="icon icon-trophy"></i>
										</div>
										<div class="col-xs-8 no-pad">
											<div class="widget-detail">
												<h3>870</h3>
												<span>World Award</span>
											</div>
										</div>
										<div class="col-xs-12">
											<div class="widget-line bg-warning">
												<span style="width:70%;" class="bg-warning widget-horigental-line"></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<!-- col-md-6 -->
						<div class="col-md-6">
							<div class="card">

								<div class="card-header">
									<h4>Timeline</h4>
								</div>

								<div class="card-body">
									<div class="todo-list todo-list-hover todo-list-divided">
										<div class="todo todo-default">
											<div class="sm-avater list-avater">
												<img :src="image +'assets/img/user-1.jpg'" class="img-responsive img-circle" alt="" />
												<span class="user-status bage-warning"></span>
											</div>
											<h5 class="ct-title">Michel Nwosu<span class="ct-designation">UI/UX Designer</span></h5>
											<div class="badge badge-action">
												<a href="#" class="btn btn-user btn-default btn-round btn-outline">Hire</a>
											</div>
										</div>
										<div class="todo todo-default">
											<div class="sm-avater list-avater">
												<img :src="image +'assets/img/user-2.jpg'" class="img-responsive img-circle" alt="" />
												<span class="user-status bage-status"></span>
											</div>
											<h5 class="ct-title">Anyawu Cynthia<span class="ct-designation">SEO Expert</span></h5>
											<div class="badge badge-action">
												<a href="#" class="btn btn-user btn-round btn-success">Hired</a>
											</div>
										</div>
										<div class="todo todo-default">
											<div class="sm-avater list-avater">
												<img :src="image +'assets/img/user-3.jpg'" class="img-responsive img-circle" alt="" />
												<span class="user-status bage-danger"></span>
											</div>
											<h5 class="ct-title">Godwin Kingsley<span class="ct-designation">PHP Expert</span></h5>
											<div class="badge badge-action">
												<a href="#" class="btn btn-user btn-round btn-success">Hired</a>
											</div>
										</div>
										<div class="todo todo-default">
											<div class="sm-avater list-avater">
												<img :src="image +'assets/img/user-4.jpg'" class="img-responsive img-circle" alt="" />
												<span class="user-status bage-success"></span>
											</div>
											<h5 class="ct-title">Samuel Adamu<span class="ct-designation">App Designer</span></h5>
											<div class="badge badge-action">
												<a href="#" class="btn btn-user btn-default btn-round btn-outline">Hire</a>
											</div>
										</div>
										<div class="todo todo-default">
											<div class="sm-avater list-avater">
												<img :src=" image +'assets/img/user-5.jpg'" class="img-responsive img-circle" alt="" />
												<span class="user-status bage-warning"></span>
											</div>
											<h5 class="ct-title">Rachel Oniga<span class="ct-designation">Web Developer</span></h5>
											<div class="badge badge-action">
												<a href="#" class="btn btn-user btn-round btn-success">Hired</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /col-md-6 -->

						<!-- col-md-6 -->
						<div class="col-md-6">
							<div class="card">

								<div class="card-header">
									<h4>New Notification</h4>
								</div>

								<div class="card-body">
									<ul class="task">
										<li>
											<a href="#">
												<div class="task-overview">
													<div class="alpha-box alpha-a">
														<span>A</span>
													</div>
													<div class="task-detail">
														<p>Hello, I am Mary.</p>
														<span class="task-time">2 Min Ago</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="task-overview">
													<div class="alpha-box alpha-h">
														<span>H</span>
													</div>
													<div class="task-detail">
														<p>Hello, I am Mary.</p>
														<span class="task-time">2 Min Ago</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="task-overview">
													<div class="alpha-box alpha-d">
														<span>D</span>
													</div>
													<div class="task-detail">
														<p>Hello, I am Mary.</p>
														<span class="task-time">2 Min Ago</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="task-overview">
													<div class="alpha-box alpha-g">
														<span>G</span>
													</div>
													<div class="task-detail">
														<p>Hello, I am Mary.</p>
														<span class="task-time">2 Min Ago</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="#">
												<div class="task-overview">
													<div class="alpha-box alpha-h">
														<span>H</span>
													</div>
													<div class="task-detail">
														<p>Hello, I am Mary.</p>
														<span class="task-time">2 Min Ago</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>

							</div>
						</div>
						<!-- /col-md-6 -->
					</div>

				</div>
			</div> 
</template>

<script>
    export default {
		 data() {
            return{
                image: 'http://clientrefill.test/',

                

            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
