

<?php $__env->startSection('title'); ?>
<?php echo e(__('Dashboard')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<!--begin::Fonts-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Page Vendors Styles(used by this page)-->
<link href="<?php echo e(asset('metronic-template/v7/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')); ?>"
    rel="stylesheet" type="text/css" />
<!--end::Page Vendors Styles-->
<!--begin::Global Theme Styles(used by all pages)-->
<link href="<?php echo e(asset('metronic-template/v7/assets/plugins/global/plugins.bundle.css')); ?>" rel="stylesheet"
    type="text/css" />
<link href="<?php echo e(asset('metronic-template/v7/assets/plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet"
    type="text/css" />
<link href="<?php echo e(asset('metronic-template/v7/assets/css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
<!--end::Global Theme Styles-->
<!--begin::Layout Themes(used by all pages)-->
<link href="<?php echo e(asset('metronic-template/v7/assets/css/themes/layout/header/base/light.css')); ?>" rel="stylesheet"
    type="text/css" />
<link href="<?php echo e(asset('metronic-template/v7/assets/css/themes/layout/header/menu/light.css')); ?>" rel="stylesheet"
    type="text/css" />
<link href="<?php echo e(asset('metronic-template/v7/assets/css/themes/layout/brand/dark.css')); ?>" rel="stylesheet"
    type="text/css" />
<link href="<?php echo e(asset('metronic-template/v7/assets/css/themes/layout/aside/dark.css')); ?>" rel="stylesheet"
    type="text/css" />

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        <?php echo $__env->make('layouts.logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->
            <!--begin::Header Menu Mobile Toggle-->
            <!-- <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button> -->
            <!--end::Header Menu Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path
                                d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path
                                d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->
                    <?php echo $__env->make('layouts.logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!--end::Logo-->
                    <!--begin::Toggle-->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path
                                        d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                        fill="#000000" fill-rule="nonzero"
                                        transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                    <path
                                        d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                        fill="#000000" fill-rule="nonzero" opacity="0.3"
                                        transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                    <!--end::Toolbar-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside Menu-->
                <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
                        <div
                            class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--begin::Page Heading-->
                                <div class="d-flex align-items-baseline flex-wrap mr-5">
                                    <!--begin::Page Title-->
                                    <h5 class="text-dark font-weight-bold my-1 mr-5">

                                    </h5>
                                    <!--end::Page Title-->
                                    <!--begin::Breadcrumb-->
                                    <ul
                                        class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                        <li class="breadcrumb-item text-muted">
                                            <a href="<?php echo e(route('category.index', [ app()->getlocale(), 'all' ])); ?>"
                                                class="text-muted"><?php echo e(__('Categories')); ?></a>
                                        </li>

                                        <li class="breadcrumb-item text-muted">
                                            <a href="<?php echo e(route('category.index', [ app()->getlocale(), $categoryType ])); ?>"
                                                class="text-muted">
                                                <?php echo e(__( ucfirst(Request::segment(3)) . ' Categories')); ?>

                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Page Heading-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Card-->
                            <div class="card card-custom">
                                <div class="card-header">
                                    <h3 class="card-title">

                                    </h3>

                                </div>
                                <!--begin::Form-->
                                <?php if($category->id): ?>
                                <form
                                    action="<?php echo e(route(Request::segment(4) . '.update', [ app()->getlocale(), $categoryType, $category->id ] )); ?>"
                                    method="post" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <?php else: ?>
                                    <form
                                        action="<?php echo e(route(Request::segment(4) . '.store', [ app()->getlocale(), $categoryType ] )); ?>"
                                        method="post" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <?php endif; ?>

                                        <div class="card-body">
                                            <div class="container">
                                                <div class="row">
                                                    <?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label><?php echo e(__('Name')); ?> (<?php echo e($language['name']); ?>)</label>

                                                            <input type="text"
                                                                class="form-control <?php $__errorArgs = ['name_' . $lang ];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                name="name_<?php echo e($lang); ?>"
                                                                placeholder="<?php echo e(__('Name')); ?> (<?php echo e($language['name']); ?>)..."
                                                                value="<?php echo e($category->{ 'name_' . $lang } ?? ''); ?><?php echo e(request()->segment(count(request()->segments())) == 'create' ? old('name_' . $lang) : ''); ?>" />

                                                            <?php $__errorArgs = ['name_' . $lang ];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="fv-plugins-message-container invalid-feedback">
                                                                <div data-field="email" data-validator="notEmpty">
                                                                    <?php echo e($message); ?>

                                                                </div>
                                                            </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>

                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label><?php echo e(__('Img')); ?></label>

                                                            <input type="file"
                                                                class="form-control <?php $__errorArgs = ['svg'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                                name="img" placeholder="<?php echo e(__('Img')); ?>..."
                                                                />
                                                            <?php $__errorArgs = ['img'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <div class="fv-plugins-message-container invalid-feedback">
                                                                <div data-field="email" data-validator="notEmpty">
                                                                    <?php echo e($message); ?>

                                                                </div>
                                                            </div>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                    <div class="col-4">
                                                        <div class="form-group">
                                                            <label><?php echo e(__('Category')); ?></label>
                                                            <select class="form-control" id="exampleSelect1" name="category_id">
                                                                <option value="">---<?php echo e(__('unselected')); ?>---
                                                                </option>
                                                                <?php $__currentLoopData = $parentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parentCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($parentCategory->id); ?>" <?php echo e($parentCategory->id == $category->category_id ? 'selected=selected' : ''); ?>><?php echo e($parentCategory->{ 'name_' . app()->getlocale() }); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </select>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-footer d-flex justify-content-between">
                                            <a href="<?php echo e(url()->previous()); ?>"
                                                class="btn btn-sm btn-clean btn-icon mr-2">
                                                <span class="svg-icon svg-icon-xl">
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M8.42034438,20 L21,20 C22.1045695,20 23,19.1045695 23,18 L23,6 C23,4.8954305 22.1045695,4 21,4 L8.42034438,4 C8.15668432,4 7.90369297,4.10412727 7.71642146,4.28972363 L0.653241109,11.2897236 C0.260966303,11.6784895 0.25812177,12.3116481 0.646887666,12.7039229 C0.648995955,12.7060502 0.651113791,12.7081681 0.653241109,12.7102764 L7.71642146,19.7102764 C7.90369297,19.8958727 8.15668432,20 8.42034438,20 Z"
                                                            id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                                        <path
                                                            d="M12.5857864,12 L11.1715729,10.5857864 C10.7810486,10.1952621 10.7810486,9.56209717 11.1715729,9.17157288 C11.5620972,8.78104858 12.1952621,8.78104858 12.5857864,9.17157288 L14,10.5857864 L15.4142136,9.17157288 C15.8047379,8.78104858 16.4379028,8.78104858 16.8284271,9.17157288 C17.2189514,9.56209717 17.2189514,10.1952621 16.8284271,10.5857864 L15.4142136,12 L16.8284271,13.4142136 C17.2189514,13.8047379 17.2189514,14.4379028 16.8284271,14.8284271 C16.4379028,15.2189514 15.8047379,15.2189514 15.4142136,14.8284271 L14,13.4142136 L12.5857864,14.8284271 C12.1952621,15.2189514 11.5620972,15.2189514 11.1715729,14.8284271 C10.7810486,14.4379028 10.7810486,13.8047379 11.1715729,13.4142136 L12.5857864,12 Z"
                                                            id="Combined-Shape" fill="#000000"></path>
                                                    </svg>
                                                </span>
                                            </a>

                                            <button type="submit"
                                                title="<?php echo e($category->id ? __('Edit') : __('Create')); ?>"
                                                class="btn <?php echo e($category->id ? 'btn-warning' : 'btn-primary'); ?> font-weight-bolder">
                                                <span class="svg-icon svg-icon-md">
                                                    <?php if($category->id): ?>
                                                    <span class="svg-icon svg-icon-md <?php echo e($category->id ? 'svg-icon-dark' : ''); ?>">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 
                                                            13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 
                                                            L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                    fill="#000000" fill-rule="nonzero"
                                                                    transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                                </path>
                                                                <rect fill="#000000" opacity="0.3" x="5" y="20"
                                                                    width="15" height="2" rx="1"></rect>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <?php else: ?>
                                                    <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                                        <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                                                        <title>Stockholm-icons / Code / Plus</title>
                                                        <desc>Created with Sketch.</desc>
                                                        <defs></defs>
                                                        <g id="Stockholm-icons-/-Code-/-Plus" stroke="none"
                                                            stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                            <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12"
                                                                cy="12" r="10"></circle>
                                                            <path
                                                                d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z"
                                                                id="Combined-Shape" fill="#000000"></path>
                                                        </g>
                                                    </svg>
                                                    <?php endif; ?>
                                                </span>
                                                <span class="<?php echo e($category->id ? 'text-dark' : ''); ?>">
                                                    <?php echo e($category->id ? __('Edit') : __('Create')); ?>

                                                </span>
                                            </button>
                                        </div>
                                    </form>
                                    <!--end::Form-->
                            </div>
                            <!--end::Card-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- begin::User Panel-->
    <?php echo $__env->make('layouts.admin-profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- end::User Panel-->

    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };

    </script>

    <script src="<?php echo e(asset('metronic-template/v7/assets/js/ajax/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('metronic-template/v7/assets/js/ajax/getdata.js')); ?>"></script>

    <script src="<?php echo e(asset('metronic-template/v7/assets/plugins/global/plugins.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('metronic-template/v7/assets/plugins/custom/prismjs/prismjs.bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('metronic-template/v7/assets/js/scripts.bundle.js')); ?>"></script>
    
    <script src="<?php echo e(asset('metronic-template/v7/assets/js/pages/crud/forms/widgets/select2.js')); ?>"></script>
    
    <script>
        <code class="language-js">
      // Class definition
      var KTSelect2 = function() {
       // Private functions
       var demos = function() {
        // basic
        $('#kt_select2_1').select2({
         placeholder: "Select a state"
        });

        // nested
        $('#kt_select2_2').select2({
         placeholder: "Select a state"
        });

        // multi select
        $('#kt_select2_3').select2({
         placeholder: "Select a state",
        });

        // basic
        $('#kt_select2_4').select2({
         placeholder: "Select a state",
         allowClear: true
        });

        // loading data from array
        var data = [{
         id: 0,
         text: 'Enhancement'
        }, {
         id: 1,
         text: 'Bug'
        }, {
         id: 2,
         text: 'Duplicate'
        }, {
         id: 3,
         text: 'Invalid'
        }, {
         id: 4,
         text: 'Wontfix'
        }];

        $('#kt_select2_5').select2({
         placeholder: "Select a value",
         data: data
        });

        // loading remote data

        function formatRepo(repo) {
         if (repo.loading) return repo.text;
         var markup = "&lt;div class='select2-result-repository clearfix'&gt;" +
          "&lt;div class='select2-result-repository__meta'&gt;" +
          "&lt;div class='select2-result-repository__title'&gt;" + repo.full_name + "&lt;/div&gt;";
         if (repo.description) {
          markup += "&lt;div class='select2-result-repository__description'&gt;" + repo.description + "&lt;/div&gt;";
         }
         markup += "&lt;div class='select2-result-repository__statistics'&gt;" +
          "&lt;div class='select2-result-repository__forks'&gt;&lt;i class='fa fa-flash'&gt;&lt;/i&gt; " + repo.forks_count + " Forks&lt;/div&gt;" +
          "&lt;div class='select2-result-repository__stargazers'&gt;&lt;i class='fa fa-star'&gt;&lt;/i&gt; " + repo.stargazers_count + " Stars&lt;/div&gt;" +
          "&lt;div class='select2-result-repository__watchers'&gt;&lt;i class='fa fa-eye'&gt;&lt;/i&gt; " + repo.watchers_count + " Watchers&lt;/div&gt;" +
          "&lt;/div&gt;" +
          "&lt;/div&gt;&lt;/div&gt;";
         return markup;
        }

        function formatRepoSelection(repo) {
         return repo.full_name || repo.text;
        }

        $("#kt_select2_6").select2({
         placeholder: "Search for git repositories",
         allowClear: true,
         ajax: {
          url: "https://api.github.com/search/repositories",
          dataType: 'json',
          delay: 250,
          data: function(params) {
           return {
            q: params.term, // search term
            page: params.page
           };
          },
          processResults: function(data, params) {
           // parse the results into the format expected by Select2
           // since we are using custom formatting functions we do not need to
           // alter the remote JSON data, except to indicate that infinite
           // scrolling can be used
           params.page = params.page || 1;

           return {
            results: data.items,
            pagination: {
             more: (params.page * 30) &lt; data.total_count
            }
           };
          },
          cache: true
         },
         escapeMarkup: function(markup) {
          return markup;
         }, // let our custom formatter work
         minimumInputLength: 1,
         templateResult: formatRepo, // omitted for brevity, see the source of this page
         templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });

        // custom styles

        // tagging support
        $('#kt_select2_12_1, #kt_select2_12_2, #kt_select2_12_3, #kt_select2_12_4').select2({
         placeholder: "Select an option",
        });

        // disabled mode
        $('#kt_select2_7').select2({
         placeholder: "Select an option"
        });

        // disabled results
        $('#kt_select2_8').select2({
         placeholder: "Select an option"
        });

        // limiting the number of selections
        $('#kt_select2_9').select2({
         placeholder: "Select an option",
         maximumSelectionLength: 2
        });

        // hiding the search box
        $('#kt_select2_10').select2({
         placeholder: "Select an option",
         minimumResultsForSearch: Infinity
        });

        // tagging support
        $('#kt_select2_11').select2({
         placeholder: "Add a tag",
         tags: true
        });

        // disabled results
        $('.kt-select2-general').select2({
         placeholder: "Select an option"
        });
       }

       var modalDemos = function() {
        $('#kt_select2_modal').on('shown.bs.modal', function () {
         // basic
         $('#kt_select2_1_modal').select2({
          placeholder: "Select a state"
         });

         // nested
         $('#kt_select2_2_modal').select2({
          placeholder: "Select a state"
         });

         // multi select
         $('#kt_select2_3_modal').select2({
          placeholder: "Select a state",
         });

         // basic
         $('#kt_select2_4_modal').select2({
          placeholder: "Select a state",
          allowClear: true
         });
        });
       }

       // Public functions
       return {
        init: function() {
         demos();
         modalDemos();
        }
       };
      }();

      // Initialization
      jQuery(document).ready(function() {
       KTSelect2.init();
      });
      </code>
    </script>

</body>
<!--end::Body-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin-template-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ubuntu/Documents/domains/ecommerce/resources/views/admin-panel/category/category-form.blade.php ENDPATH**/ ?>