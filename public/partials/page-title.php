<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);" class="d-flex align-items-center"><i
                                class="ri-home-3-line me-1"></i>ACAP</a>
                    </li>
                    <li class="breadcrumb-item"><a
                            href="javascript: void(0);"><?php isset($sub_title) ? print $sub_title : ''; ?></a></li>
                    <li class="breadcrumb-item active"><?php isset($page_title) ? print $page_title : ''; ?></li>
                </ol>
            </div>
            <h4 class="page-title"><?php isset($page_title) ? print $page_title : ''; ?></h4>
        </div>
    </div>
</div>
<!-- end page title -->