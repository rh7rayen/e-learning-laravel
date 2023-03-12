<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Category | LMS | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.9.1">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('admin.includes.sidebar')

            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
              
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Course Category</h3>
                                            <div class="nk-block-des text-soft">
                                                
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="drodown">
                                                                {{-- <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a> --}}
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Web Development</span></a></li>
                                                                        <li><a href="#"><span>Mobile Application</span></a></li>
                                                                        <li><a href="#"><span>Graphics Design</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate"><em class="icon ni ni-plus"></em><span>Add Category</span></a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        @foreach ($categories as $item)
                                            <div class="col-sm-6 col-lg-4 col-xxl-3">
                                                <div class="card h-100">
                                                    <div class="card-inner">
                                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                                            <a class="d-flex align-items-center">
                                                                <div class="user-avatar sq bg-purple"><span><img src="assets/images/{{$item->cat_img}}" /></span></div>
                                                                <div class="ml-3">
                                                                    <h6 class="title mb-1">{{$item->cat_name}}</h6>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <p>{{$item->cat_description}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
               
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- @@ Category Modal @e -->
    <div class="modal fade" id="modalCreate">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                {{-- <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a> --}}
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Category</h5>
                    <form action="{{route('add_categorie')}}" enctype="multipart/form-data" method="POST" class="pt-2">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="full-name">Category Name</label>
                            <div class="form-control-wrap">
                                <input type="text" name="name" class="form-control" id="full-name" placeholder="e.g. Web Development">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Description</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="description" id="description" placeholder="Write Category Description"></textarea>
                            </div>
                        </div>
                        {{-- <div class="form-group"> --}}
                            <input type="file" name="img" class="form-control mb-3">
                        {{-- </div> --}}
                        <div class="form-group">
                            <button  type="submit" class="btn btn-primary">Save Informations</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- .Edit Modal-Content -->
    <div class="modal fade" id="modalEdit">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit Category</h5>
                    <form action="#" class="pt-2">
                        <div class="form-group">
                            <label class="form-label" for="edit-full-name">Category Name</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" id="edit-full-name" value="Web Development">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="edit-description">Description</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="description" id="edit-description" value="Website Design & Develop the website with web applications"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="category-thumb">Category thumbnail</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" multiple class="custom-file-input" id="edit-customFile">
                                    <label class="custom-file-label" for="category-thumb">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Subcategory</label>
                            <div class="d-flex gx-3 mb-3">
                                <div class="g w-100">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" value="Figma">
                                    </div>
                                </div>
                                <div class="g">
                                    <button class="btn btn-icon btn-outline-light"><em class="icon ni ni-cross"></em>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex gx-3 mb-3">
                                <div class="g w-100">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" value="Responsive Design">
                                    </div>
                                </div>
                                <div class="g">
                                    <button class="btn btn-icon btn-outline-light"><em class="icon ni ni-cross"></em>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex gx-3 mb-3">
                                <div class="g w-100">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" value="Adobe Photoshop">
                                    </div>
                                </div>
                                <div class="g">
                                    <button class="btn btn-icon btn-outline-light"><em class="icon ni ni-cross"></em>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex gx-3 mb-3">
                                <div class="g w-100">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" placeholder="e.g. Web Development">
                                    </div>
                                </div>
                                <div class="g">
                                    <button class="btn btn-icon btn-outline-light"><em class="icon ni ni-plus"></em>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button data-dismiss="modal" type="submit" class="btn btn-primary">Save Informations</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- .Edit Modal-Content -->
    <div class="modal fade" id="modalDelete">
        <div class="modal-dialog" role="document">
            <div class="modal-content"> <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg text-center">
                    <div class="nk-modal py-4"> <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Are You Sure ?</h4>
                        <div class="nk-modal-text mt-n2">
                            <p class="text-soft">This event data will be removed permanently.</p>
                        </div>
                        <ul class="d-flex justify-content-center gx-4 mt-4">
                            <li>
                                <button data-dismiss="modal" id="deleteEvent" class="btn btn-success">Yes, Delete it</button>
                            </li>
                            <li>
                                <button data-dismiss="modal" data-toggle="modal" data-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .Delete Modal-content -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.9.1"></script>
    <script src="./assets/js/scripts.js?ver=2.9.1"></script>
</body>

</html>