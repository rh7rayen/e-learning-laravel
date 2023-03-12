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
    <title>Instructor List | LMS | DashLite Admin Template</title>
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
                                            <h3 class="nk-block-title page-title">Instructors</h3>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="more-options">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-search"></em>
                                                                </div>
                                                                <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt">
                                                            <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                            <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#instructor-add"><em class="icon ni ni-plus"></em><span>Add</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text">Instructor</span></div>
                                                        {{-- <div class="nk-tb-col tb-col-md"><span class="sub-text">Email</span></div> --}}
                                                        {{-- <div class="nk-tb-col tb-col-lg"><span class="sub-text">Country</span></div> --}}
                                                        {{-- <div class="nk-tb-col tb-col-lg"><span class="sub-text">Description</span></div>
                                                        <div class="nk-tb-col tb-col-mb"><span class="sub-text"></span>Number of active courses</div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div> --}}
                                                        {{-- <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div> --}}
                                                    </div><!-- .nk-tb-item -->
                                                    @foreach ($formatteurs as $formatteur)
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col nk-tb-col-check">
                                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                                    <label class="custom-control-label" for="uid1"></label>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <a href="html/lms/instructor-details.html">
                                                                    <div class="user-card">
                                                                        <div class="user-avatar bg-primary">
                                                                            <span><img src="assets/images/{{$formatteur->image}}"></span>
                                                                        </div>
                                                                        <div class="user-info">
                                                                            <span class="tb-lead">{{$formatteur->name}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                            <span>{{$formatteur->email}}</span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a href="{{route('deleteformateur',['id'=>$formatteur->id])}}"><em class="icon ni ni-eye"></em><span>Delete</span></a></li>
                                                                                    <li><a href="{{route('editformateur',['id'=>$formatteur->id])}}"><em class="icon ni ni-activity-round"></em><span>Edit</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div><!-- .nk-tb-item -->    
                                                    @endforeach
                                                </div><!-- .nk-tb-list -->
                                            </div>
                                         
                                            <!--card inner-->
                                        </div>
                                    </div>
                                    <!--card-->
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
    <!-- Add instructor-->
    <div class="modal fade" role="dialog" id="instructor-add">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Instructor</h5>
                    <form action="{{route('createformatteur')}}" method="POST" enctype="multipart/form-data" class="pt-2">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="first-name">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="first-name" placeholder="full name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="password">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="img">Image</label>
                                    <input type="file" name="img" class="form-control" id="img" placeholder="Choose file">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button type="submit" class="btn btn-primary">Save Informations</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.9.1"></script>
    <script src="./assets/js/scripts.js?ver=2.9.1"></script>
</body>

</html>