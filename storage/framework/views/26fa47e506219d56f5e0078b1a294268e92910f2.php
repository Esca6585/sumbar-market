

<?php $__env->startSection('title'); ?>
Verify Your Email Address
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Two-stes -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/development-hd.png)">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="../../demo1/dist/index.html" class="mb-12">
						<img alt="Logo" src="<?php echo e(asset('metronic-template/v7/assets/media/logos/logo-2-dark.svg')); ?>" class="h-45px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-600px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						<!--begin::Form-->
						<form action="<?php echo e(route('verification.send', [app()->getlocale()])); ?>" method="post" class="form w-100 mb-10" >
							<?php echo csrf_field(); ?>
							<!--begin::Icon-->
							<div class="text-center mb-10">
								<img alt="Logo" class="mh-125px" src="<?php echo e(asset('metronic-template/v8/assets/media/svg/misc/open-mail.svg')); ?>" />
							</div>
							<!--end::Icon-->
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Mobile no-->
								<div class="fw-bolder text-primary fs-3"><?php echo e($sendEmail); ?></div>
								<!--end::Mobile no-->
								<div style="border-bottom: 1px solid #eeeeee; margin: 10px 0;"></div>
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Şu salga tassyklama kody ugradyldy</h1>
								<!--end::Title-->
							</div>
							<!--end::Heading-->
							<!--begin::Section-->
							<div class="mb-10 px-md-10">
								<!--begin::Label-->
								<div class="fw-bolder text-center text-muted fs-6 mb-5 ms-1">6 sany tassyklama koduňyzy giriziň</div>
								<!--end::Label-->
								<!--begin::Input group-->
								<div class="d-flex flex-wrap flex-stack">
									<?php for($i=0; $i<6; $i++): ?> <input type="text"
                                        class="form-control form-control-solid h-60px w-60px fs-2qx text-center border-primary border-hover mx-1 my-2"
                                        value="" name="verification_code[]">
                                    <?php endfor; ?>
								</div>
								<!--begin::Input group-->
							</div>
							<!--end::Section-->
							<!--begin::Submit-->
							<div class="d-flex flex-center">
								<button type="submit" class="btn btn-lg btn-primary fw-bolder">
									<span class="indicator-label">Tassyklaň</span>
								</button>
							</div>
							<!--end::Submit-->
						</form>
						<!--end::Form-->
						<!--begin::Notice-->
						<div class="text-center fw-bold fs-5">
							<span class="text-muted me-1">Didn’t get the code ?</span>
							<a href="#" class="link-primary fw-bolder fs-5 me-1"><?php echo e(__('Resend')); ?></a>
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<a href="<?php echo e(url('/')); ?>" class="text-muted text-hover-primary px-2"><?php echo e(__('Dashboard')); ?></a>
						<a href="<?php echo e(route('login', app()->getlocale() )); ?>" class="text-muted text-hover-primary px-2"><?php echo e(__('Login')); ?></a>
						<a href="<?php echo e(route('register', app()->getlocale() )); ?>" class="text-muted text-hover-primary px-2"><?php echo e(__('Register')); ?></a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->

                <!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					
                    <!--begin::Links-->
                    <div class="d-flex align-items-center fw-bold fs-6">
                        <select class="form-select" id="changeLanguage">
                            <?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($lang); ?>" <?php echo e(Request::segment(1) == $lang ? 'selected' : ''); ?>>
                                <?php echo e($language['name']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <!--end::Links-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Two-stes-->
		</div>
		<!--end::Main-->
	</body>
	<!--end::Body-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/auth/verify.blade.php ENDPATH**/ ?>